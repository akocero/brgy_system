<?php

namespace App\Http\Controllers;

use App\Models\BarangayCase;
use Illuminate\Http\Request;

class BarangayCaseController extends Controller
{
    public function index(Request $request)
    {

        $search = '';

        if (!is_null($request->search)) {
            $barangay_cases = BarangayCase::where('subject_person', 'like', '%' . request()->search . '%')
                ->orWhere('summon_purpose', 'like', '%' . request()->search . '%')
                ->orderBy('appearance_date')
                ->paginate(10);


            $barangay_cases->appends(['search' => $request->search]);

            $search = request()->search;
        } else {
            $barangay_cases = BarangayCase::orderBy('appearance_date')->paginate(10);
        }

        return view('barangay_cases.index', compact('barangay_cases', 'search'));
    }


    public function create()
    {

        // $households = Household::all()->sortBy('family_name');
        return view('barangay_cases.create');
    }


    public function store(Request $request)
    {
        // dd(request()->all());
        $barangay_case = BarangayCase::create($this->validatedData());

        return redirect()
            ->route('barangay_cases.show', $barangay_case->id)
            ->with('status', 'Succesfully Added!');
    }

    public function show(BarangayCase $barangay_case)
    {
        return view('barangay_cases.show', compact('barangay_case'));
    }


    public function edit(BarangayCase $barangay_case)
    {

        // $households = Household::all()->sortBy('family_name');
        return view('barangay_cases.edit', compact('barangay_case'));
    }


    public function update(Request $request, BarangayCase $barangay_case)
    {
        $barangay_case->update($this->validatedData());

        return redirect()
            ->route('barangay_cases.show', $barangay_case->id)
            ->with('status', 'Succesfully Updated!');
    }


    protected function validatedData()
    {
        return request()->validate([
            'status' => '',
            'subject_person' => 'required',
            'issued_date' => 'required',
            'appearance_date' => 'required',
            'time' => 'required',
            'remarks' => 'required',
            'summon_purpose' => 'required',
            'summon_body' => 'required',
        ]);
    }
}
