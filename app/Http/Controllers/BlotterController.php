<?php

namespace App\Http\Controllers;

use App\Models\Blotter;
use App\Models\ChildrenInvolved;
use App\Models\Suspect;
use App\Models\Victim;
use Illuminate\Http\Request;

class BlotterController extends Controller
{
    public function index(Request $request)
    {
        $search = '';
        if (!is_null($request->search)) {

            $blotters = Blotter::where('incident_type', 'like', '%' . request()->search . '%')
                ->orWhere('incident_location', 'like', '%' . request()->search . '%')
                ->latest()
                ->paginate(10);
            $blotters->appends(['search' => $request->search]);

            $search = request()->search;
        } else {
            $blotters = Blotter::latest()->paginate(10);
        }

        return view('blotters.index', compact('blotters', 'search'));
    }


    public function create()
    {

        // $households = Household::all()->sortBy('family_name');
        return view('blotters.create');
    }


    public function store(Request $request)
    {
        $blotter = Blotter::create($this->validatedData());

        return redirect()
            ->route('blotters.show', $blotter->id)
            ->with('status', 'Succesfully Added!');
    }

    public function show(Blotter $blotter)
    {
        return view('blotters.show', compact('blotter'));
    }


    public function edit(Blotter $blotter)
    {

        // $households = Household::all()->sortBy('family_name');
        return view('blotters.edit', compact('blotter'));
    }


    public function update(Request $request, Blotter $blotter)
    {
        $blotter->update($this->validatedData());

        return redirect()
            ->route('blotters.show', $blotter->id)
            ->with('status', 'Succesfully Updated!');
    }


    protected function validatedData()
    {
        return request()->validate([
            'name' => 'required',
            'email' => 'required',
            'type' => 'required',
            'address' => 'required',
            'operator' => 'required',
            'location' => 'required',
            'mobile_no' => 'required',
            'landline' => '',
            'permit_issued_date' => 'required',
            'permit_expiration_date' => 'required',
            'owner_full_name' => 'required',
            'owner_address' => '',
            'owner_details' => ''
        ]);
    }
}
