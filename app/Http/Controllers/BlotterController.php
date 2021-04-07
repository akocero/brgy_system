<?php

namespace App\Http\Controllers;

use App\Models\Blotter;
use App\Models\ChildrenInvolved;
use App\Models\Reporter;
use App\Models\Suspect;
use App\Models\Victim;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

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
        // dd(request()->all());
        // validate all the data before inserting in database

        $blotterData = $this->validatedData();
        $reporterData = $this->validatedReporterData();
        $victimData = $this->validatedVictimData();
        $suspectData = $this->validatedSuspectData();
        $childrenEnvolvedData = $this->validatedChildrenEnvolvedData();

        // insert all da data
        $victim = Victim::create($victimData);
        $suspect = Suspect::create($suspectData);
        $childrenEnvolved = ChildrenInvolved::create($childrenEnvolvedData);
        $reporter = Reporter::create($reporterData);
        // get all data id created
        $blotter = Blotter::create(
            $blotterData + [
                'suspect_id' => $suspect->id,
                'victim_id' => $victim->id,
                'reporter_id' => $reporter->id,
                'children_involved_id' => $childrenEnvolved->id
            ]
        );

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

        // dd(request()->all());
        $blotterData = $this->validatedData();
        $reporterData = $this->validatedReporterData();
        $victimData = $this->validatedVictimData();
        $suspectData = $this->validatedSuspectData();
        $childrenEnvolvedData = $this->validatedChildrenEnvolvedData();

        $blotter->update($blotterData);
        $blotter->reporter->update($reporterData);
        $blotter->victim->update($victimData);
        $blotter->suspect->update($suspectData);

        if(!is_null(request()->ce_guardian_name)){
            $blotter->childrenInvolved->update($childrenEnvolvedData);
        }

            // dd($childrenEnvolvedData);

        return redirect()
            ->route('blotters.show', $blotter->id)
            ->with('status', 'Succesfully Updated!');
    }


    protected function validatedData()
    {
        return request()->validate([
            'blotter_entry_no' => 'required',
            'incident_type' => 'required',
            'reported_date_time' => 'required',
            'incident_location' => 'required',
            'incident_date_time' => 'required',
            'incident_details' => 'required',
        ]);
    }

    protected function validatedVictimData()
    {
        request()->validate([
            'v_full_name' => 'required',
            'v_citizenship' => '',
            'v_gender' => 'required',
            'v_date_of_birth' => '',
            'v_id_details' => '',
            'v_email' => '',
            'v_contact_no' => 'required',
            'v_address' => '',
        ]);

        return [
            'full_name' => request()->v_full_name,
            'citizenship' => request()->v_citizenship,
            'gender' => request()->v_gender,
            'date_of_birth' => request()->v_date_of_birth,
            'id_details' => request()->v_id_details,
            'email' => request()->v_email,
            'contact_no' => request()->v_contact_no,
            'address' => request()->v_address,
        ];
    }

    protected function validatedReporterData()
    {
        request()->validate([
            'r_citizenship' => '',
            'r_full_name' => 'required',
            'r_gender' => 'required',
            'r_date_of_birth' => '',
            'r_id_details' => '',
            'r_email' => '',
            'r_contact_no' => 'required',
            'r_address' => '',
        ]);

        return [
            'full_name' => request()->r_full_name,
            'citizenship' => request()->r_citizenship,
            'gender' => request()->r_gender,
            'date_of_birth' => request()->r_date_of_birth,
            'id_details' => request()->r_id_details,
            'email' => request()->r_email,
            'contact_no' => request()->r_contact_no,
            'address' => request()->r_address,
        ];
    }

    protected function validatedSuspectData()
    {
        request()->validate([
            's_full_name' => 'required',
            's_citizenship' => '',
            's_gender' => 'required',
            's_date_of_birth' => '',
            's_email' => '',
            's_contact_no' => '',
            's_address' => '',
            's_work_address' => '',
            's_with_previous_criminal_records' => '',
            's_previous_case_status' => '',
            's_relationship_to_victim' => '',
            's_description' => '',
            's_remarks' => '',
        ]);

        // return request()->s_relation_to_victim;

        return [
            'full_name' => request()->s_full_name,
            'citizenship' => request()->s_citizenship,
            'gender' => request()->s_gender,
            'date_of_birth' => request()->s_date_of_birth,
            'email' => request()->s_email,
            'contact_no' => request()->s_contact_no,
            'address' => request()->s_address,
            'work_address' => request()->s_work_address,
            'with_previous_criminal_records' => request()->s_with_previous_criminal_records,
            'previous_case_status' => request()->s_previous_case_status,
            'relation_to_victim' => request()->s_relation_to_victim,
            'description' => request()->s_description,
            'remarks' => request()->s_remarks
        ];
    }

    protected function validatedChildrenEnvolvedData()
    {
        request()->validate([
            'ce_guardian_name' => '',
            'ce_guardian_address' => '',
            'ce_contact_no' => '',
            'ce_diversion' => '',
            'ce_remarks' => '',
        ]);

        return [
            'guardian_name' => request()->ce_guardian_name,
            'guardian_address' => request()->ce_guardian_address,
            'contact_no' => request()->ce_contact_no,
            'diversion' => request()->ce_diversion,
            'remarks' => request()->ce_remarks,
        ];
    }
}
