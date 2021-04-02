<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index(Request $request)
    {
        $search = '';
        if (!is_null($request->search)) {
            $businesses = Business::where('name', 'like', '%' . request()->search . '%')
                ->orWhere('location', 'like', '%' . request()->search . '%')
                ->orderBy('name')
                ->paginate(10);
            $businesses->appends(['search' => $request->search]);

            $search = request()->search;
        } else {
            $businesses = Business::orderBy('name')->paginate(10);
        }

        return view('businesses.index', compact('businesses', 'search'));
    }


    public function create()
    {

        // $households = Household::all()->sortBy('family_name');
        return view('businesses.create');
    }


    public function store(Request $request)
    {
        $business = Business::create($this->validatedData());

        return redirect()
            ->route('businesses.show', $business->id)
            ->with('status', 'Succesfully Added!');
    }

    public function show(Business $business)
    {
        return view('businesses.show', compact('business'));
    }


    public function edit(Business $business)
    {

        // $households = Household::all()->sortBy('family_name');
        return view('businesses.edit', compact('business'));
    }


    public function update(Request $request, Business $business)
    {
        $business->update($this->validatedData());

        return redirect()
            ->route('businesses.show', $business->id)
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
