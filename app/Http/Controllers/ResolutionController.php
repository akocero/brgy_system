<?php

namespace App\Http\Controllers;

use App\Models\Resolution;
use Illuminate\Http\Request;

class ResolutionController extends Controller
{
    public function index(Request $request)
    {

        $search = '';

        if (!is_null($request->search)) {
            $resolutions = Resolution::where('summary', 'like', '%' . request()->search . '%')
                ->orWhere('author', 'like', '%' . request()->search . '%')
                ->orderBy('session_date', 'DESC')
                ->paginate(10);
            $resolutions->appends(['search' => $request->search]);

            $search = request()->search;
        } else {
            $resolutions = Resolution::orderBy('session_date', 'DESC')->paginate(10);
        }

        return view('resolutions.index', compact('resolutions', 'search'));
    }


    public function create()
    {

        // $households = Household::all()->sortBy('family_name');
        return view('resolutions.create');
    }


    public function store(Request $request)
    {
        $resolution = Resolution::create($this->validatedData());

        return redirect()
            ->route('resolutions.show', $resolution->id)
            ->with('status', 'Succesfully Added!');
    }

    public function show(Resolution $resolution)
    {
        return view('resolutions.show', compact('resolution'));
    }


    public function edit(Resolution $resolution)
    {

        // $households = Household::all()->sortBy('family_name');
        return view('resolutions.edit', compact('resolution'));
    }


    public function update(Request $request, Resolution $resolution)
    {
        $resolution->update($this->validatedData());

        return redirect()
            ->route('resolutions.show', $resolution->id)
            ->with('status', 'Succesfully Updated!');
    }


    protected function validatedData()
    {
        return request()->validate([
            'number' => 'required',
            'session_date' => 'required',
            'author' => 'required',
            'co_author' => '',
            'forwarded_to' => 'required',
            'summary' => 'required',
            'remarks' => ''
        ]);
    }
}
