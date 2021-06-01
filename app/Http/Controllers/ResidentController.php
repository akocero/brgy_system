<?php

namespace App\Http\Controllers;

use App\Models\Household;
use App\Models\Purok;
use App\Models\Resident;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ResidentController extends Controller
{

    public function index(Request $request)
    {
        $search = '';

        if (!is_null($request->search)) {
            $residents = Resident::where('last_name', 'like', '%' . request()->search . '%')
                ->orWhere('first_name', 'like', '%' . request()->search . '%')
                ->latest()
                ->paginate(10);
            $residents->appends(['search' => $request->search]);

            $search = request()->search;
        } else {
            $residents = Resident::latest()->paginate(10);
        }

        return view('residents.index', compact('residents', 'search'));
    }


    public function create()
    {
        $puroks = Purok::all()->sortBy('name');
        $households = Household::all()->sortBy('family_name');
        return view('residents.create', compact('households', 'puroks'));
    }


    public function store(Request $request)
    {

        // dd(request()->all());
        $resident = Resident::create($this->validatedData());

        $this->storeImage($resident);


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
        $puroks = Purok::all()->sortBy('name');
        $households = Household::all()->sortBy('family_name');
        return view('residents.edit', compact('households', 'resident', 'puroks'));
    }


    public function update(Request $request, Resident $resident)
    {
        $residentValidatedData = $this->validatedData();

        if ($resident->image_path && request()->has('image_path')) {
            unlink(storage_path('app/public/' . $resident->image_path));
        }

        $resident->update($residentValidatedData);

        $this->storeImage($resident);

        return redirect()
            ->route('residents.show', $resident->id)
            ->with('status', 'Succesfully Updated!');
    }


    protected function validatedData()
    {
        return request()->validate([
            'purok_id' => 'required',
            'household_id' => '',
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => '',
            'suffix' => '',
            'nick_name' => '',
            'address' => 'required',
            'gender' => 'required',
            'spouse_name' => '',
            'date_of_birth' => '',
            'place_of_birth' => '',
            'citizenship' => 'required',
            'resident_status' => 'required',
            'civil_status' => 'required',
            'religion' => '',
            'mobile_no' => 'required',
            'landline' => '',
            'email' => '',
            'is_voter' => '',
            'precinct_no' => '',
            'complexion' => '',
            'blood_type' => '',
            'remarks' => '',
            'employment_status' => '',
            'occupation' => '',
            'educational_attainment' => '',
            'image_path' => 'sometimes|file|image|max:2000',
            'covid_symptoms' => '',
            'covid_positive' => '',
            'medical_remarks' => '',
        ]);
    }


    protected function storeImage($resident)
    {
        if (request()->has('image_path')) {
            $resident->update([
                'image_path' => request()->image_path->store('images/residents', 'public'),
            ]);
        }
    }
}
