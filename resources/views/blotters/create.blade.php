@extends('layouts.main')


@section("title","Add Blotter")

@section('content')
    @if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
            
            Please check all inputs and tabs! <br />
            All the fields with ( * ) is required
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card">
        <div class="col-12 pt-4 px-4 d-flex justify-content-between align-items-center">
            <h4 class="h4">Add new blotter</h4>
            <a style="float: right" href="{{ route('blotters.index') }}" class="pr-2">
                View all blotter
            </a>
        </div>
        
        <div class="card-body">


            <form action="{{ route('blotters.store') }}" method="POST">
                @csrf
                {{-- Tabs  --}}
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-incident-tab" data-toggle="pill" href="#pills-incident" role="tab" aria-controls="pills-incident" aria-selected="true">Incident Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-reporter-data-tab" data-toggle="pill" href="#pills-reporter-data" role="tab" aria-controls="pills-reporter-data" aria-selected="true">Report Person</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-victim-data-tab" data-toggle="pill" href="#pills-victim-data" role="tab" aria-controls="pills-victim-data" aria-selected="false">Victim info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-suspect-data-tab" data-toggle="pill" href="#pills-suspect-data" role="tab" aria-controls="pills-suspect-data" aria-selected="false">Suspect Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-children-envolved-tab" data-toggle="pill" href="#pills-children-envolved" role="tab" aria-controls="pills-children-envolved" aria-selected="false">Children Envolved</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-documents-tab" data-toggle="pill" href="#pills-documents" role="tab" aria-controls="pills-documents" aria-selected="false">Documents Attached</a>
                    </li>
                </ul>
                {{-- End Tabs  --}}
                <div class="tab-content" id="pills-tabContent">

                    {{-- Reporter info  --}}
                    <div class="tab-pane fade " id="pills-reporter-data" role="tabpanel" aria-labelledby="pills-reporter-data-tab">
                        
                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="r_full_name">Full Name</label>&nbsp;<small class="text-danger">*</small>
                                <input type="text" class="form-control @error('r_full_name') {{ 'is-invalid' }}@enderror" id="r_full_name" name="r_full_name" placeholder="Type Last_name..." value="{{ old('r_full_name') }}">

                                @error('r_full_name')
                                    <small class="text-danger">
                                    {{ $message }}
                                    </small>
                                @enderror
                            </div>

                             <div class="form-group col-md-2">
                                <label for="r_citizenship">Citizenship</label>&nbsp;<small class="text-danger">*</small>
                                <input type="text" class="form-control @error('r_citizenship') {{ 'is-invalid' }}@enderror" id="r_citizenship" name="r_citizenship" placeholder="Type Last_name..." value="{{ old('r_citizenship') }}">

                                @error('r_citizenship')
                                    <small class="text-danger">
                                    {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-2">
                                <label for="r_gender">Gender</label>

                                <select class="custom-select  @error('r_gender') {{ 'is-invalid' }}@enderror"
                                        name="r_gender" id="r_gender">
                                    <option value="">Choose ...</option>
                                    <option value="male" {{ old('r_gender') == 'male' ? 'selected' : ''}}>Male</option>
                                    <option value="female" {{ old('r_gender') == 'female' ? 'selected' : ''}}>Female</option>
                                </select>

                                @error('r_gender')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-md-2">
                                <label for="r_date_of_birth">Date of Birth</label>&nbsp;<small class="text-danger">*</small>
                                <input type="date" class="form-control @error('r_date_of_birth') {{ 'is-invalid' }}@enderror" id="r_date_of_birth" name="r_date_of_birth" placeholder="Type Last_name..." value="{{ old('r_date_of_birth') }}">

                                @error('r_date_of_birth')
                                    <small class="text-danger">
                                    {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="r_id_details">ID Details</label>&nbsp;<small class="text-danger">*</small>
                                <input type="text" class="form-control @error('r_id_details') {{ 'is-invalid' }}@enderror" id="r_id_details" name="r_id_details" placeholder="Ex. Postal ID - 123-1234-123" value="{{ old('r_id_details') }}">

                                @error('r_id_details')
                                    <small class="text-danger">
                                    {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="r_email">Email</label>&nbsp;<small class="text-danger">*</small>
                                <input type="email" class="form-control @error('r_email') {{ 'is-invalid' }}@enderror" id="r_email" name="r_email" placeholder="Type Last_name..." value="{{ old('r_email') }}">

                                @error('r_email')
                                    <small class="text-danger">
                                    {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="r_contact_no">Contact No.</label>&nbsp;<small class="text-danger">*</small>
                                <input type="text" class="form-control @error('r_contact_no') {{ 'is-invalid' }}@enderror" id="r_contact_no" name="r_contact_no" placeholder="Type Firstname..." value="{{ old('r_contact_no') }}">

                                @error('r_contact_no')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-12">
                                <label for="r_address">Address</label>
                                <textarea type="text" class="form-control @error('r_address') {{ 'is-invalid' }}@enderror" id="r_address" name="r_address" placeholder="Type Firstname..." value="">{{ old('r_address') }}</textarea>

                                @error('r_address')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>    

                        </div>

                    </div>
                    {{-- End Reporter info  --}}

                    {{-- Victim info  --}}
                    <div class="tab-pane fade" id="pills-victim-data" role="tabpanel" aria-labelledby="pills-victim-data-tab">
                        
                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="v_full_name">Full Name</label>&nbsp;<small class="text-danger">*</small>
                                <input type="text" class="form-control @error('v_full_name') {{ 'is-invalid' }}@enderror" id="v_full_name" name="v_full_name" placeholder="Type Last_name..." value="{{ old('v_full_name') }}">

                                @error('v_full_name')
                                    <small class="text-danger">
                                    {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-2">
                                <label for="v_citizenship">Citizenship</label>&nbsp;<small class="text-danger">*</small>
                                <input type="text" class="form-control @error('v_citizenship') {{ 'is-invalid' }}@enderror" id="v_citizenship" name="v_citizenship" placeholder="Type Last_name..." value="{{ old('v_citizenship') }}">

                                @error('v_citizenship')
                                    <small class="text-danger">
                                    {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-2">
                                <label for="v_gender">Gender</label>

                                <select class="custom-select  @error('v_gender') {{ 'is-invalid' }}@enderror"
                                        name="v_gender" id="v_gender">
                                    <option value="">Choose ...</option>
                                    <option value="male" {{ old('v_gender') == 'male' ? 'selected' : ''}}>Male</option>
                                    <option value="female" {{ old('v_gender') == 'female' ? 'selected' : ''}}>Female</option>
                                </select>

                                @error('v_gender')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-md-2">
                                <label for="v_date_of_birth">Date of Birth</label>&nbsp;<small class="text-danger">*</small>
                                <input type="date" class="form-control @error('v_date_of_birth') {{ 'is-invalid' }}@enderror" id="v_date_of_birth" name="v_date_of_birth" placeholder="Type Last_name..." value="{{ old('v_date_of_birth') }}">

                                @error('v_date_of_birth')
                                    <small class="text-danger">
                                    {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            

                            <div class="form-group col-md-4">
                                <label for="v_id_details">ID Details</label>&nbsp;<small class="text-danger">*</small>
                                <input type="text" class="form-control @error('v_id_details') {{ 'is-invalid' }}@enderror" id="v_id_details" name="v_id_details" placeholder="Ex. Postal ID - 123-1234-123" value="{{ old('v_id_details') }}">

                                @error('v_id_details')
                                    <small class="text-danger">
                                    {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="v_email">Email</label>&nbsp;<small class="text-danger">*</small>
                                <input type="email" class="form-control @error('v_email') {{ 'is-invalid' }}@enderror" id="v_email" name="v_email" placeholder="Type Last_name..." value="{{ old('v_email') }}">

                                @error('v_email')
                                    <small class="text-danger">
                                    {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="v_contact_no">Contact No.</label>&nbsp;<small class="text-danger">*</small>
                                <input type="text" class="form-control @error('v_contact_no') {{ 'is-invalid' }}@enderror" id="v_contact_no" name="v_contact_no" placeholder="Type Firstname..." value="{{ old('v_contact_no') }}">

                                @error('v_contact_no')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-12">
                                <label for="v_address">Address</label>
                                <textarea type="text" class="form-control @error('v_address') {{ 'is-invalid' }}@enderror" id="v_address" name="v_address" placeholder="Type Firstname..." value="">{{ old('v_address') }}</textarea>

                                @error('v_address')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>    

                        </div>

                    </div>
                    {{-- End Victim info  --}}

                    {{-- Suspect info  --}}
                    <div class="tab-pane fade" id="pills-suspect-data" role="tabpanel" aria-labelledby="pills-suspect-data-tab">
                        
                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="s_full_name">Full Name (Alias/Nickname)</label>&nbsp;<small class="text-danger">*</small>
                                <input type="text" class="form-control @error('s_full_name') {{ 'is-invalid' }}@enderror" id="s_full_name" name="s_full_name" placeholder="Ex. John Doe (Big Foot)" value="{{ old('s_full_name') }}">

                                @error('s_full_name')
                                    <small class="text-danger">
                                    {{ $message }}
                                    </small>
                                @enderror
                            </div>

                             

                            <div class="form-group col-md-3">
                                <label for="s_gender">Gender</label>

                                <select class="custom-select  @error('s_gender') {{ 'is-invalid' }}@enderror"
                                        name="s_gender" id="s_gender">
                                    <option value="">Choose ...</option>
                                    <option value="male" {{ old('s_gender') == 'male' ? 'selected' : ''}}>Male</option>
                                    <option value="female" {{ old('s_gender') == 'female' ? 'selected' : ''}}>Female</option>
                                </select>

                                @error('s_gender')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-md-3">
                                <label for="s_date_of_birth">Date of Birth</label>&nbsp;<small class="text-danger">*</small>
                                <input type="date" class="form-control @error('s_date_of_birth') {{ 'is-invalid' }}@enderror" id="s_date_of_birth" name="s_date_of_birth" placeholder="Type Last_name..." value="{{ old('s_date_of_birth') }}">

                                @error('s_date_of_birth')
                                    <small class="text-danger">
                                    {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="s_citizenship">Citizenship</label>&nbsp;<small class="text-danger">*</small>
                                <input type="text" class="form-control @error('s_citizenship') {{ 'is-invalid' }}@enderror" id="s_citizenship" name="s_citizenship" placeholder="Type Last_name..." value="{{ old('s_citizenship') }}">

                                @error('s_citizenship')
                                    <small class="text-danger">
                                    {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="s_email">Email</label>&nbsp;<small class="text-danger">*</small>
                                <input type="email" class="form-control @error('s_email') {{ 'is-invalid' }}@enderror" id="s_email" name="s_email" placeholder="Type Last_name..." value="{{ old('s_email') }}">

                                @error('s_email')
                                    <small class="text-danger">
                                    {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="s_contact_no">Contact No.</label>&nbsp;<small class="text-danger">*</small>
                                <input type="text" class="form-control @error('s_contact_no') {{ 'is-invalid' }}@enderror" id="s_contact_no" name="s_contact_no" placeholder="Type Firstname..." value="{{ old('s_contact_no') }}">

                                @error('s_contact_no')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="s_address">Address</label>
                                <textarea type="text" class="form-control @error('s_address') {{ 'is-invalid' }}@enderror" id="s_address" name="s_address" placeholder="Type Firstname..." value="">{{ old('s_address') }}</textarea>

                                @error('s_address')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div> 
                            
                            <div class="form-group col-md-6">
                                <label for="s_work_address">Work Address</label>
                                <textarea type="text" class="form-control @error('s_work_address') {{ 'is-invalid' }}@enderror" id="s_work_address" name="s_work_address" placeholder="Type Firstname..." value="">{{ old('s_work_address') }}</textarea>

                                @error('s_work_address')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label for="s_with_previous_criminal_records">With Previous Criminal Records</label>

                                <select class="custom-select  @error('s_with_previous_criminal_records') {{ 'is-invalid' }}@enderror"
                                        name="s_with_previous_criminal_records" id="s_with_previous_criminal_records">
                                    <option value="">Choose ...</option>
                                    <option value="yes" {{ old('s_with_previous_criminal_records') == 'yes' ? 'selected' : ''}}>Yes</option>
                                    <option value="no" {{ old('s_with_previous_criminal_records') == 'no' ? 'selected' : ''}}>No</option>
                                </select>

                                @error('s_with_previous_criminal_records')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="s_previous_case_status">Previous Case Status</label>

                                <select class="custom-select  @error('s_previous_case_status') {{ 'is-invalid' }}@enderror"
                                        name="s_previous_case_status" id="s_previous_case_status">
                                    <option value="">Choose ...</option>
                                    <option value="ongoing" {{ old('s_previous_case_status') == 'ongoing' ? 'selected' : ''}}>Ongoing</option>
                                    <option value="solved" {{ old('s_previous_case_status') == 'solved' ? 'selected' : ''}}>Solved</option>
                                </select>

                                @error('s_previous_case_status')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="s_relation_to_victim">Relationship to Victim</label>
                                <input type="text" class="form-control @error('s_relation_to_victim') {{ 'is-invalid' }}@enderror" id="s_relation_to_victim" name="s_relation_to_victim" placeholder="Type Firstname..." value="{{ old('s_relation_to_victim') }}">

                                @error('s_relation_to_victim')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-7">
                                <label for="s_description">Suspect Description</label>
                                <textarea type="text" class="form-control @error('s_description') {{ 'is-invalid' }}@enderror" id="s_description" name="s_description" placeholder="Ex. Complextion, Eye Color, Age, Hair, Beard, etc..." value="">{{ old('s_description') }}</textarea>

                                @error('s_description')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div> 

                            <div class="form-group col-md-5">
                                <label for="s_remarks">Notes/Remarks</label>
                                <textarea type="text" class="form-control @error('s_remarks') {{ 'is-invalid' }}@enderror" id="s_remarks" name="s_remarks" placeholder="Ex. Please check the documents attached..." value="">{{ old('s_remarks') }}</textarea>

                                @error('s_remarks')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div> 
                            

                        </div>

                    </div>
                    {{-- End Suspect info  --}}
                    <div class="tab-pane fade" id="pills-children-envolved" role="tabpanel" aria-labelledby="pills-children-envolved-tab">
                        
                        <div class="row">

                            <div class="form-group col-md-4">
                                <label for="ce_guardian_name">Guardian Name </label>&nbsp;<small class="text-danger">*</small>
                                <input type="text" class="form-control @error('ce_guardian_name') {{ 'is-invalid' }}@enderror" id="ce_guardian_name" name="ce_guardian_name" placeholder="Ex. John Doe" value="{{ old('ce_guardian_name') }}">

                                @error('ce_guardian_name')
                                    <small class="text-danger">
                                    {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-3">
                                <label for="ce_contact_no">Contact No.</label>&nbsp;<small class="text-danger">*</small>
                                <input type="text" class="form-control @error('ce_contact_no') {{ 'is-invalid' }}@enderror" id="ce_contact_no" name="ce_contact_no" placeholder="Ex. John Doe" value="{{ old('ce_contact_no') }}">

                                @error('ce_contact_no')
                                    <small class="text-danger">
                                    {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-5">
                                <label for="ce_guardian_address">Address</label>
                                <textarea type="text" class="form-control @error('ce_guardian_address') {{ 'is-invalid' }}@enderror" id="ce_guardian_address" name="ce_guardian_address" placeholder="Type Firstname..." value="">{{ old('ce_guardian_address') }}</textarea>

                                @error('ce_guardian_address')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div> 
                            
                            <div class="form-group col-md-7">
                                <label for="ce_diversion">Diversion</label>
                                <textarea type="text" class="form-control @error('ce_diversion') {{ 'is-invalid' }}@enderror" id="ce_diversion" name="ce_diversion" placeholder="Type Firstname..." value="">{{ old('ce_diversion') }}</textarea>

                                @error('ce_diversion')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div> 

                            <div class="form-group col-md-5">
                                <label for="ce_remarks">Notes/Remarks</label>
                                <textarea type="text" class="form-control @error('ce_remarks') {{ 'is-invalid' }}@enderror" id="ce_remarks" name="ce_remarks" placeholder="Type Firstname..." value="">{{ old('ce_remarks') }}</textarea>

                                @error('ce_remarks')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div> 
                            
                        </div>
                        
                    </div>


                    <div class="tab-pane fade" id="pills-documents" role="tabpanel" aria-labelledby="pills-documents-tab">

                        <div class="row">
                            <div class="col-md-12">
                                documents
                            </div>
                            
                        </div>

                    </div>

                    <div class="tab-pane fade show active" id="pills-incident" role="tabpanel" aria-labelledby="pills-incident-tab">

                        <div class="row">

                            <div class="form-group col-md-3">
                                <label for="blotter_entry_no">Blotter Entry No </label>&nbsp;<small class="text-danger">*</small>
                                <input type="text" class="form-control @error('blotter_entry_no') {{ 'is-invalid' }}@enderror" id="blotter_entry_no" name="blotter_entry_no" placeholder="Ex. John Doe" value="{{ old('blotter_entry_no') }}">

                                @error('blotter_entry_no')
                                    <small class="text-danger">
                                    {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-3">
                                <label for="reported_date_time">Reported Date</label>&nbsp;<small class="text-danger">*</small>
                                <input type="datetime-local" class="form-control @error('reported_date_time') {{ 'is-invalid' }}@enderror" id="reported_date_time" name="reported_date_time" placeholder="Ex. John Doe" value="{{ old('reported_date_time') }}">

                                @error('reported_date_time')
                                    <small class="text-danger">
                                    {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-3">
                                <label for="incident_type">Incident Type </label>&nbsp;<small class="text-danger">*</small>
                                <input type="text" class="form-control @error('incident_type') {{ 'is-invalid' }}@enderror" id="incident_type" name="incident_type" placeholder="Ex. John Doe" value="{{ old('incident_type') }}">

                                @error('incident_type')
                                    <small class="text-danger">
                                    {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-3">
                                <label for="incident_date_time">Incident Date and Time </label>&nbsp;<small class="text-danger">*</small>
                                <input type="datetime-local" class="form-control @error('incident_date_time') {{ 'is-invalid' }}@enderror" id="incident_date_time" name="incident_date_time" placeholder="Ex. John Doe" value="{{ old('incident_date_time') }}">

                                @error('incident_date_time')
                                    <small class="text-danger">
                                    {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-5">
                                <label for="incident_location">Incident Location</label>
                                <textarea type="text" class="form-control @error('incident_location') {{ 'is-invalid' }}@enderror" id="incident_location" name="incident_location" placeholder="Type Firstname..." value="">{{ old('incident_location') }}</textarea>

                                @error('incident_location')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div> 

                            <div class="form-group col-md-7">
                                <label for="incident_details">Incident Details</label>
                                <textarea type="text" class="form-control @error('incident_details') {{ 'is-invalid' }}@enderror" id="incident_details" name="incident_details" placeholder="Type Firstname..." value="">{{ old('incident_details') }}</textarea>

                                @error('incident_details')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div> 
                            
                            
                        </div>

                    </div>

                </div>
                <hr>
                <div class="row">

                    <div class="col-md-12">
                        <input type="submit" value="submit" class="btn btn-success"> 
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
@endsection
