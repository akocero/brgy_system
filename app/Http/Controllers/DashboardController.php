<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Household;
use App\Models\Resident;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public $residents;

    function __construct()
    {
        $this->residents = Resident::get();
    }

    function index()
    {
        $residents = $this->residents;
        $population = $this->residents->count();
        // dd($population);
        $pwd = $this->residents->where('is_disabled', 1)->count();
        $registered_voters = $this->residents->where('is_voter', '1')->count();
        $male_residents = $this->residents->where('gender', 'male')->count();
        $female_residents = $this->residents->where('gender', 'female')->count();



        if($population > 0) {
            $male_percent = $this->get_percentage($male_residents, $population);
            $female_percent = $this->get_percentage($female_residents, $population);
        }else{
            $male_percent = 0;
            $female_percent = 0;
        }

        $households = Household::get()->count();
        $businesses = Business::get()->count();
        $covid_total = $this->residents->where('covid_positive', '!=', 0)->count();
        $covid_recovered = $this->residents->where('covid_positive', 2)->count();
        $covid_pum = $this->residents->where('covid_positive', 1)->count();

        return view('dashboard.index',
        compact(
            'residents',
            'population',
            'households',
            'businesses',
            'registered_voters',
            'male_residents',
            'female_residents',
            'male_percent',
            'female_percent',
            'covid_total',
            'covid_recovered',
            'covid_pum',
            'pwd'
        ));
    }

    public function get_percentage($percent, $total) {
        return number_format((floatval($percent) / floatval($total)) * 100, 2, '.','');
    }
}
