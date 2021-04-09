<?php

namespace App\Http\Controllers;

use App\Models\Official;
use Illuminate\Http\Request;

class OfficialController extends Controller
{
    public function index(Request $request)
    {

        $search = '';

        if (!is_null($request->search)) {
            $officials = Official::where('last_name', 'like', '%' . request()->search . '%')
                ->orWhere('first_name', 'like', '%' . request()->search . '%')
                ->orderBy('rank_no')
                ->paginate(10);

            $officials->appends(['search' => $request->search]);

            $search = request()->search;
        } else {
            $officials = Official::orderBy('rank_no')->paginate(10);
        }

        return view('officials.index', compact('officials', 'search'));
    }


    public function create()
    {

        // $households = Household::all()->sortBy('family_name');
        return view('officials.create');
    }


    public function store(Request $request)
    {
        // dd(request()->all());
        $official = Official::create($this->validatedData());

        return redirect()
            ->route('officials.show', $official->id)
            ->with('status', 'Succesfully Added!');
    }

    public function show(Official $official)
    {
        return view('officials.show', compact('official'));
    }


    public function edit(Official $official)
    {

        // $households = Household::all()->sortBy('family_name');
        return view('officials.edit', compact('official'));
    }


    public function update(Request $request, Official $official)
    {
        $official->update($this->validatedData());

        return redirect()
            ->route('officials.show', $official->id)
            ->with('status', 'Succesfully Updated!');
    }


    protected function validatedData()
    {
        return request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => '',
            'suffix' => '',
            'gender' => 'required',
            'mobile_no' => 'required',
            'position' => 'required',
            'committee' => '',
            'rank_no' => '',
            'active' => '',
            'remarks' => '',
        ]);
    }
}
