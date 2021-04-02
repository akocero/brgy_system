<?php

namespace App\Http\Controllers;

use App\Models\Household;
use App\Models\Resident;
use Illuminate\Http\Request;

class ResidentController extends Controller
{

    public function index(Request $request)
    {
        $search = '';

        if (!is_null($request->search)) {
            $residents = Resident::where('last_name', 'like', '%' . request()->search . '%')
                ->orWhere('first_name', 'like', '%' . request()->search . '%')
                ->orderBy('last_name')
                ->paginate(10);
            $residents->appends(['search' => $request->search]);

            $search = request()->search;
        } else {
            $residents = Resident::orderBy('last_name')->paginate(10);
        }

        return view('residents.index', compact('residents', 'search'));
    }


    public function create()
    {

        $households = Household::all()->sortBy('family_name');
        return view('residents.create', compact('households'));
    }


    public function store(Request $request)
    {
        $resident = Resident::create($this->validatedData());

        return redirect()
            ->route('residents.show', $resident->id)
            ->with('status', 'Succesfully Added!');
    }

    public function show(Resident $resident)
    {
        return view('residents.show', compact('resident'));
    }


    public function edit(Resident $resident)
    {

        $households = Household::all()->sortBy('family_name');
        return view('residents.edit', compact('households', 'resident'));
    }


    public function update(Request $request, Resident $resident)
    {
        $resident->update($this->validatedData());

        return redirect()
            ->route('residents.show', $resident->id)
            ->with('status', 'Succesfully Updated!');
    }


    protected function validatedData()
    {
        return request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => '',
            'suffix' => '',
            'address' => 'required',
            'gender' => 'required',
            'mobile_no' => 'required',
            'landline' => '',
            'email' => '',
            'date_of_birth' => '',
            'place_of_birth' => '',
            'occupation' => '',
            'citizenship' => 'required',
            'civil_status' => 'required',
            'is_voter' => '',
            'household_id' => '',
        ]);
    }
}
