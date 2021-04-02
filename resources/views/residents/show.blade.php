@extends('layouts.main')


@section("title","Resident Details")

@section('content')
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{  session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card">
        <div class="col-12 pt-3 px-3 d-flex justify-content-between align-items-center">
            <h4 class="h4">Welcome {{$resident->first_name}}!</h4>
            <a style="float: right" href="{{ route('residents.index') }}" class="pr-2">
                Back to residents
            </a>
        </div>
        <div class="col-12">
            <hr class="pb-0 mb-0">
        </div>
        
        <div class="card-body">
            <form action="{{ route('residents.update', $resident->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="row">

                    <div class="form-group col-md-4">
                        <label for="last_name">Last Name</label>&nbsp;<small class="text-danger">*</small>
                        <input type="text" class="form-control @error('last_name') {{ 'is-invalid' }}@enderror" id="last_name" name="last_name" placeholder="Type Lastname..." value="{{ $resident->last_name }}">

                        @error('last_name')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-3">
                        <label for="first_name">First Name</label>&nbsp;<small class="text-danger">*</small>
                        <input type="text" class="form-control @error('first_name') {{ 'is-invalid' }}@enderror" id="first_name" name="first_name" placeholder="Type Firstname..." value="{{ $resident->first_name }}">

                        @error('first_name')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-3">
                        <label for="middle_name">Middle Name (Optional)</label>
                        <input type="text" class="form-control @error('middle_name') {{ 'is-invalid' }}@enderror" id="middle_name" name="middle_name" placeholder="Type Firstname..." value="{{ $resident->middle_name }}">

                        @error('middle_name')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-2">
                        <label for="suffix">Suffix (Optional)</label>
                        <input type="text" class="form-control @error('suffix') {{ 'is-invalid' }}@enderror" id="suffix" name="suffix" placeholder="Type Firstname..." value="{{ $resident->suffix }}">

                        @error('suffix')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>



                    <div class="form-group col-md-4">
                        <label for="email">Email (Optional)</label>
                        <input type="text" class="form-control @error('email') {{ 'is-invalid' }}@enderror" id="email" name="email" placeholder="Ex. email@example.com " value="{{ $resident->email }}">

                        @error('email')
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
                            <option value="male" {{ $resident->gender == 'male' ? 'selected' : ''}}>Male</option>
                            <option value="female" {{ $resident->gender == 'female' ? 'selected' : ''}}>Female</option>
                        </select>

                        @error('gender')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group col-md-3">
                        <label for="civil_status">Civil Status</label>

                        <select class="custom-select  @error('civil_status') {{ 'is-invalid' }}@enderror"
                                name="civil_status" id="civil_status">
                            <option value="">Choose ...</option>
                            <option value="single" {{ $resident->civil_status == 'single' ? 'selected' : ''}}>Single</option>
                            <option value="married" {{ $resident->civil_status == 'married' ? 'selected' : ''}}>Married</option>
                        </select>

                        @error('civil_status')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group col-md-3">
                        <label for="citizenship">Citizenship (Optional)</label>
                        <input type="text" class="form-control @error('citizenship') {{ 'is-invalid' }}@enderror" id="citizenship" name="citizenship" placeholder="Type Firstname..." value="{{ $resident->citizenship }}">

                        @error('citizenship')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="occupation">Occupation (Optional)</label>
                        <input type="text" class="form-control @error('occupation') {{ 'is-invalid' }}@enderror" id="occupation" name="occupation" placeholder="Type Firstname..." value="{{ $resident->occupation }}">

                        @error('occupation')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="mobile_no">Mobile No (Optional)</label>
                        <input type="text" class="form-control @error('mobile_no') {{ 'is-invalid' }}@enderror" id="mobile_no" name="mobile_no" placeholder="Type Firstname..." value="{{ $resident->mobile_no }}">

                        @error('mobile_no')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="landline">Landline (Optional)</label>
                        <input type="text" class="form-control @error('landline') {{ 'is-invalid' }}@enderror" id="landline" name="landline" placeholder="Type Firstname..." value="{{ $resident->landline }}">

                        @error('landline')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="address">Address</label>
                        <textarea type="text" class="form-control @error('address') {{ 'is-invalid' }}@enderror" id="address" name="address" placeholder="Type Firstname..." value="">{{ $resident->address }}</textarea>

                        @error('address')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-3">
                        <label for="date_of_birth">Date of Birth (Optional)</label>
                        <input type="date" class="form-control @error('date_of_birth') {{ 'is-invalid' }}@enderror" id="date_of_birth" name="date_of_birth" value="{{ $resident->date_of_birth }}">

                        @error('date_of_birth')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-3">
                        <label for="place_of_birth">Place of Birth (Optional)</label>
                        <input type="text" class="form-control @error('place_of_birth') {{ 'is-invalid' }}@enderror" id="place_of_birth" name="place_of_birth" value="{{ $resident->place_of_birth }}" placeholder="Ex. Quezon City">

                        @error('place_of_birth')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>


                    <div class="form-group col-md-6">
                        <label for="is_voter">Are you a registered voter in this brangay?</label>

                        <select class="custom-select  @error('is_voter') {{ 'is-invalid' }}@enderror"
                                name="is_voter" id="is_voter">
                            <option value="">Choose ...</option>
                            <option value="1" {{ $resident->is_voter == '1' ? 'selected' : ''}}>Yes</option>
                            <option value="0" {{ $resident->is_voter == '0' ? 'selected' : ''}}>No</option>
                        </select>

                        @error('is_voter')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="col-12 pt-3 px-3">
            <h4 class="h4">{{$resident->household->family_name}}</h4>
            <hr class="pb-0 mb-0">
        </div>
        
        <div class="card-body">
            <div class="table-responsive">   
                <table class="table table-sm table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($resident->household->residents as $resident)
                            <tr>
                                <td>
                                    {{ $resident->last_name }}, {{ $resident->first_name }}  {{ $resident->middle_name }}  {{ $resident->suffix }}
                                </td>
                                <td>{{ $resident->email }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No Resident Found!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {

            disableInputs();

        });


        function disableInputs(){
            const inputs = document.querySelectorAll('input');
            const textarea = document.querySelectorAll('textarea');
            const select = document.querySelectorAll('select');
            // const inputs = document.querySelectorAll('');

            inputs.forEach(input => {
                input.setAttribute('disabled','true');
            });

            textarea.forEach(item => {
                item.setAttribute('disabled','true');
            });

            select.forEach(item => {
                item.setAttribute('disabled','true');
            });
        }

    </script>
@endsection
