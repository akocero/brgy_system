@extends('layouts.main')


@section("title","Add Official")

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
            <h4 class="h4">Add new official</h4>
            <a style="float: right" href="{{ route('officials.index') }}" class="pr-2">
                View all official
            </a>
        </div>
        <div class="col-12">
            <hr>
        </div>
        
        <div class="card-body">
            <form action="{{ route('officials.store') }}" method="POST">
                @csrf

                        
                <div class="row">

                    <div class="form-group col-md-4">
                        <label for="first_name">First Name</label>&nbsp;<small class="text-danger">*</small>
                        <input type="text" class="form-control @error('first_name') {{ 'is-invalid' }}@enderror" id="first_name" name="first_name" placeholder="Type Lastfirst_name..." value="{{ old('first_name') }}">

                        @error('first_name')
                            <small class="text-danger">
                            {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-3">
                        <label for="last_name">Last Name</label>&nbsp;<small class="text-danger">*</small>
                        <input type="text" class="form-control @error('last_name') {{ 'is-invalid' }}@enderror" id="last_name" name="last_name" placeholder="Type Lastlast_name..." value="{{ old('last_name') }}">

                        @error('last_name')
                            <small class="text-danger">
                            {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-3">
                        <label for="middle_name">Middle Name</label>&nbsp;<small class="text-danger">*</small>
                        <input type="text" class="form-control @error('middle_name') {{ 'is-invalid' }}@enderror" id="middle_name" name="middle_name" placeholder="Type Lastmiddle_name..." value="{{ old('middle_name') }}">

                        @error('middle_name')
                            <small class="text-danger">
                            {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-2">
                        <label for="suffix">Suffix</label>&nbsp;<small class="text-danger">*</small>
                        <input type="text" class="form-control @error('suffix') {{ 'is-invalid' }}@enderror" id="suffix" name="suffix" placeholder="Type Lastsuffix..." value="{{ old('suffix') }}">

                        @error('suffix')
                            <small class="text-danger">
                            {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-2">
                        <label for="gender">Gender</label>

                        <select class="custom-select  @error('gender') {{ 'is-invalid' }}@enderror"
                                name="gender" id="gender">
                            <option value="">Choose ...</option>
                            <option value="male" {{ old('gender') == 'male' ? 'selected' : ''}}>Male</option>
                            <option value="female" {{ old('gender') == 'female' ? 'selected' : ''}}>Female</option>
                        </select>

                        @error('gender')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="mobile_no">Mobile No.</label>&nbsp;<small class="text-danger">*</small>
                        <input type="text" class="form-control @error('mobile_no') {{ 'is-invalid' }}@enderror" id="mobile_no" name="mobile_no" placeholder="Type Lastmobile_no..." value="{{ old('mobile_no') }}">

                        @error('mobile_no')
                            <small class="text-danger">
                            {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-3">
                        <label for="position">Position</label>

                        <select class="custom-select  @error('position') {{ 'is-invalid' }}@enderror"
                                name="position" id="position">
                            <option value="">Choose ...</option>
                            <option value="counclilor" {{ old('position') == 'counclilor' ? 'selected' : ''}}>Brgy. Cuoncilor</option>
                            <option value="it" {{ old('position') == 'it' ? 'selected' : ''}}>IT</option>
                        </select>

                        @error('position')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group col-md-3">
                        <label for="committee">Committee</label>
                        <input type="text" class="form-control @error('committee') {{ 'is-invalid' }}@enderror" id="committee" name="committee" placeholder="Type Firstname..." value="{{ old('committee') }}">

                        @error('committee')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-12">
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
