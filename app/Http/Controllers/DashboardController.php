<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Household;
use App\Models\Resident;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    function index()
    {
        $population = Resident::get();
        $households = Household::get();
        $businesses = Business::get();
        return view('dashboard.index', compact('population','households', 'businesses'));
    }
}
