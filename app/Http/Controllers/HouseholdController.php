<?php

namespace App\Http\Controllers;

use App\Models\Household;
use Illuminate\Http\Request;

class HouseholdController extends Controller
{
    public function index(Request $request)
    {
        // $households = Household::latest()->get();
        // return view('households.index', compact('households'));

        $search = '';

        if (!is_null($request->search)) {
            $households = Household::where('family_name', 'like', '%' . request()->search . '%')
                ->orWhere('details', 'like', '%' . request()->search . '%')
                ->orderBy('family_name')
                ->paginate(10);
            $households->appends(['search' => $request->search]);

            $search = request()->search;
        } else {
            $households = Household::orderBy('family_name')->paginate(10);
        }

        return view('households.index', compact('households', 'search'));
    }

    public function store()
    {
        // dd(request()->all());
        Household::create($this->validatedData());
        return redirect()->back()->with('status', 'Successfully Added!');

        // return response(request()->details);
    }

    public function show(Household $household)
    {
        return $household;
    }

    public function update(Household $household)
    {

        // dd($household);
        $household->update($this->validatedData());
        $households = Household::latest()->get();
        return redirect()->back()->with('status', 'Successfully Updated!');
    }

    protected function validatedData()
    {
        // dd(request()->household_id);
        return request()->validate([
            'family_name' => 'required',
            'details' => '',
        ]);
    }
}
