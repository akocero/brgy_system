<?php

namespace App\Http\Controllers;

use App\Models\Household;
use App\Models\Resident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $residents = DB::table('residents')
        //     ->select('id', 'first_name', 'middle_name', 'search', 'email', 'suffix')
        //     ->paginate(10);

        $search = '';

        if (!is_null($request->search)) {
            $residents = Resident::where('last_name', 'like', '%' . request()->search . '%')
                ->orWhere('first_name', 'like', '%' . request()->search . '%')
                ->paginate(10);
            $residents->appends(['search' => $request->search]);

            $search = request()->search;
        } else {
            $residents = Resident::paginate(10);
        }

        // if (!is_null($request->search)) {
        //     $residents->appends(['search' => $request->search]);
        // }
        return view('residents.index', compact('residents', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $households = Household::all()->sortBy('family_name');
        return view('residents.create', compact('households'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resident = Resident::create($this->validatedData());
        // dd($request->all());
        // return redirect('residents.show', [$resident->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function show(Resident $resident)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function edit(Resident $resident)
    {

        $households = Household::all()->sortBy('family_name');
        return view('residents.edit', compact('households', 'resident'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resident $resident)
    {
        $resident->update($this->validatedData());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resident $resident)
    {
        //
    }

    // public function search(Request $request)
    // {

    //     $search = '';
    //     $residents = Resident::where('last_name', 'like', '%' . request()->search . '%')
    //         ->orWhere('first_name', 'like', '%' . request()->search . '%')
    //         ->paginate(10);

    //     $search = request()->search;

    //     if (!is_null($request->search)) {
    //         $residents->appends(['search' => $request->search]);
    //     }

    //     // dd(request()->search);
    //     return view('residents.index', compact('residents', 'search'));
    // }

    protected function validatedData()
    {
        // dd(request()->household_id);
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
