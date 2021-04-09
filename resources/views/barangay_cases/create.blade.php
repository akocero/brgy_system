@extends('layouts.main')


@section("title","Add Case / Complain")

@section('content')
    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            
            Please check your inputs! <br />
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card">
        <div class="col-12 pt-4 px-4 d-flex justify-content-between align-items-center">
            <h4 class="h4">Add new case / complain</h4>
            <a style="float: right" href="{{ route('barangay_cases.index') }}" class="pr-2">
                View all case / complain
            </a>
        </div>
        <div class="col-12">
            <hr>
        </div>
        
        <div class="card-body">
            <form action="{{ route('barangay_cases.store') }}" method="POST">
                @csrf

                        
                <div class="row">

                    <div class="form-group col-md-4">
                        <label for="subject_person">Subject Person</label>&nbsp;<small class="text-danger">*</small>
                        <input type="text" class="form-control @error('subject_person') {{ 'is-invalid' }}@enderror" id="subject_person" name="subject_person" placeholder="Type Lastsubject_person..." value="{{ old('subject_person') }}">

                        @error('subject_person')
                            <small class="text-danger">
                            {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-3">
                        <label for="issued_date">Issued Date</label>&nbsp;<small class="text-danger">*</small>
                        <input type="date" class="form-control @error('issued_date') {{ 'is-invalid' }}@enderror" id="issued_date" name="issued_date" placeholder="Type Lastissued_date..." value="{{ old('issued_date') }}">

                        @error('issued_date')
                            <small class="text-danger">
                            {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-3">
                        <label for="appearance_date">Appearance Date</label>&nbsp;<small class="text-danger">*</small>
                        <input type="date" class="form-control @error('appearance_date') {{ 'is-invalid' }}@enderror" id="appearance_date" name="appearance_date" placeholder="Type Lastappearance_date..." value="{{ old('appearance_date') }}">

                        @error('appearance_date')
                            <small class="text-danger">
                            {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-2">
                        <label for="time">Time</label>&nbsp;<small class="text-danger">*</small>
                        <input type="time" class="form-control @error('time') {{ 'is-invalid' }}@enderror" id="time" name="time" placeholder="Type Lasttime..." value="{{ old('time') }}">

                        @error('time')
                            <small class="text-danger">
                            {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-5">
                        <label for="summon_purpose">Summon Purpose</label>&nbsp;<small class="text-danger">*</small>
                        <input type="text" class="form-control @error('summon_purpose') {{ 'is-invalid' }}@enderror" id="summon_purpose" name="summon_purpose" placeholder="Type Lastsummon_purpose..." value="{{ old('summon_purpose') }}">

                        @error('summon_purpose')
                            <small class="text-danger">
                            {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-7">
                        <label for="summon_body">Summon Body</label>
                        <textarea type="text" class="form-control @error('summon_body') {{ 'is-invalid' }}@enderror" id="summon_body" name="summon_body" placeholder="Type Firstname..." value="">{{ old('summon_body') }}</textarea>

                        @error('summon_body')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>  

                    <div class="form-group col-md-3">
                        <label for="status">Status</label>

                        <select class="custom-select  @error('status') {{ 'is-invalid' }}@enderror"
                                name="status" id="status" disabled>
                            <option value="">Pending</option>
                        </select>

                        @error('status')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group col-md-9">
                        <label for="remarks">Remarks/Notes/Reminder</label>
                        <textarea type="text" class="form-control @error('remarks') {{ 'is-invalid' }}@enderror" id="remarks" name="remarks" placeholder="Type Firstname..." value="">{{ old('remarks') }}</textarea>

                        @error('remarks')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
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
