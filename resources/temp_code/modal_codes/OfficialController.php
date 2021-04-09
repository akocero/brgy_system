<?php

namespace App\Http\Controllers;

use App\Models\Official;
use Illuminate\Http\Request;

class OfficialController extends Controller
{
    public function index(Request $request)
    {
        // $officials = Official::latest()->get();
        // return view('officials.index', compact('officials'));

        $search = '';

        if (!is_null($request->search)) {
            $officials = Official::where('full_name', 'like', '%' . request()->search . '%')
                ->orWhere('position', 'like', '%' . request()->search . '%')
                ->orderBy('full_name')
                ->paginate(10);
            $officials->appends(['search' => $request->search]);

            $search = request()->search;
        } else {
            $officials = Official::orderBy('full_name')->paginate(10);
        }

        return view('officials.index', compact('officials', 'search'));
    }

    public function store()
    {
        // dd(request()->all());
        Official::create($this->validatedData());
        return redirect()->back()->with('status', 'Successfully Added!');

        // return response(request()->details);
    }

    public function show(Official $official)
    {
        return $official;
    }

    public function update(Official $official)
    {

        // dd($official);
        $official->update($this->validatedData());
        $officials = Official::latest()->get();
        return redirect()->back()->with('status', 'Successfully Updated!');
    }

    protected function validatedData()
    {
        // dd(request()->official_id);
        return request()->validate([
            'full_name' => 'required',
            'position' => 'required',
            'details' => '',
        ]);
    }
}
