@extends('layouts.main')


@section("title","Business Details")

@section('content')
     @if (session('status'))
        <div class="alert alert-{{ str_contains(session('status'), 'Updated') ? 'primary' : 'success' }} alert-dismissible fade show" role="alert">
            
            {{  session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card">
        <div class="col-12 pt-4 px-4 d-flex justify-content-between align-items-center">
            <h4 class="h4">Welcome {{$business->name}}!</h4>
            <a style="float: right" href="{{ route('businesses.index') }}" class="pr-2">
                Back to businesses
            </a>
        </div>
        
        <div class="card-body">
            <form action="#" method="POST">
                @csrf
                @method('PATCH')
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-business-info-tab" data-toggle="pill" href="#pills-business-info" role="tab" aria-controls="pills-business-info" aria-selected="true">Business Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-owner-info-tab" data-toggle="pill" href="#pills-owner-info" role="tab" aria-controls="pills-owner-info" aria-selected="false">Owner Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-date-info-tab" data-toggle="pill" href="#pills-date-info" role="tab" aria-controls="pills-date-info" aria-selected="false">Date Issued/Expiration</a>
                    </li>
                    <li class="nav-item dropdown ml-auto btn-group">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                            <i data-feather="printer" width='18' height="18"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-header">Print Documents</span>
                            <div class="dropdown-divider"></div>
                            <a
                            role="button"
                            class="dropdown-item"
                            data-toggle="modal"
                            data-target="#certificate_modal" 
                            onclick="printCertificate()">
                                Business Clearance
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                Cert. of Residency
                            </a>
                        </div>
                    </li>
                </ul>
                {{-- End Tabs  --}}
                <div class="tab-content" id="pills-tabContent">

                    {{-- Business info  --}}
                    <div class="tab-pane fade show active" id="pills-business-info" role="tabpanel" aria-labelledby="pills-business-info-tab">
                        
                        <div class="row">

                            <div class="form-group col-md-4">
                                <label for="name">Business Name</label>&nbsp;<small class="text-danger">*</small>
                                <input type="text" class="form-control @error('name') {{ 'is-invalid' }}@enderror" id="name" name="name" placeholder="Type Lastname..." value="{{ $business->name }}">

                                @error('name')
                                    <small class="text-danger">
                                    {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="type">Business Type</label>

                                <select class="custom-select  @error('type') {{ 'is-invalid' }}@enderror"
                                        name="type" id="type">
                                    <option value="">Choose ...</option>
                                    <option value="food" {{ $business->type == 'food' ? 'selected' : ''}}>Food</option>
                                </select>

                                @error('type')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="operator">Operator Name</label>&nbsp;<small class="text-danger">*</small>
                                <input type="text" class="form-control @error('operator') {{ 'is-invalid' }}@enderror" id="operator" name="operator" placeholder="Type Firstname..." value="{{ $business->operator  }}">

                                @error('operator')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="location">Location in Brgy</label>
                                <input type="text" class="form-control @error('location') {{ 'is-invalid' }}@enderror" id="location" name="location" placeholder="Type Firstname..." value="{{ $business->location  }}">

                                @error('location')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="address">Address</label>
                                <textarea type="text" class="form-control @error('address') {{ 'is-invalid' }}@enderror" id="address" name="address" placeholder="Type Firstname..." value="">{{ $business->address  }}</textarea>

                                @error('address')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="email">Email (Optional)</label>
                                <input type="email" class="form-control @error('email') {{ 'is-invalid' }}@enderror" id="email" name="email" placeholder="Type Firstname..." value="{{ $business->email  }}">

                                @error('email')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="mobile_no">Mobile no. (Optional)</label>
                                <input type="text" class="form-control @error('mobile_no') {{ 'is-invalid' }}@enderror" id="mobile_no" name="mobile_no" placeholder="Type Firstname..." value="{{ $business->mobile_no  }}">

                                @error('mobile_no')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>



                            <div class="form-group col-md-4">
                                <label for="landline">Landline (Optional)</label>
                                <input type="text" class="form-control @error('landline') {{ 'is-invalid' }}@enderror" id="landline" name="landline" placeholder="Ex. landline@example.com " value="{{ $business->landline  }}">

                                @error('landline')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                        </div>

                    </div>
                    {{-- End Business info  --}}
                    {{-- Owner Business info  --}}
                    <div class="tab-pane fade" id="pills-owner-info" role="tabpanel" aria-labelledby="pills-owner-info-tab">
                        
                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="owner_full_name">Owner Full Name (Optional)</label>
                                <input type="text" class="form-control @error('owner_full_name') {{ 'is-invalid' }}@enderror" id="owner_full_name" name="owner_full_name" placeholder="Type Firstname..." value="{{ $business->owner_full_name   }}">

                                @error('owner_full_name')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            

                            <div class="form-group col-md-6">
                                <label for="owner_address">Owner Address</label>
                                <textarea type="text" class="form-control @error('owner_address') {{ 'is-invalid' }}@enderror" id="owner_address" name="owner_address" placeholder="Type Firstname..." value="">{{ $business->owner_address }}</textarea>

                                @error('owner_address')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-12">
                                <label for="owner_details">Owner Details</label>
                                <textarea type="text" class="form-control @error('owner_details') {{ 'is-invalid' }}@enderror" id="owner_details" name="owner_details" placeholder="Type Firstname..." value="">{{ $business->owner_details  }}</textarea>

                                @error('owner_details')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                        </div>

                    </div>
                    {{-- End Owner Business info  --}}
                    {{-- Issued Dates info  --}}
                    <div class="tab-pane fade" id="pills-date-info" role="tabpanel" aria-labelledby="pills-date-info-tab">

                        <div class="row">

                            <div class="form-group col-md-4">
                                <label for="permit_issued_date">Permit Issued Date (Optional)</label>
                                <input type="date" class="form-control @error('permit_issued_date') {{ 'is-invalid' }}@enderror" id="permit_issued_date" name="permit_issued_date" value="{{ $business->permit_issued_date  }}">

                                @error('permit_issued_date')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="permit_expiration_date">Permit Expiration Date(Optional)</label>
                                <input type="date" class="form-control @error('permit_expiration_date') {{ 'is-invalid' }}@enderror" id="permit_expiration_date" name="permit_expiration_date" value="{{ $business->permit_expiration_date }}">

                                @error('permit_expiration_date')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                        </div>
                        
                    </div>
                    {{-- End Issued Dates info  --}}

                </div>
            </form>
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

        function printCertificate() {

            let print = confirm('Are you sure you want to print permit?');
            const origin = window.location.origin;

            if(print){
                window.open(`${origin}/certificates/business/{{ $business->id }}?certificate_type=permit`, '_blank');
            }
            
            // let clearance_purpose = $('#clearance_purpose').val();

            // if(!clearance_purpose) {
            //     $('#clearance_purpose').addClass('is-invalid');
            //     alert('Please check your inputs!');
            // }else{

            //     $('#clearance_purpose').removeClass('is-invalid');
            //     $('#print_clearance_btn').attr('disabled', 'true').val('Opening in a new tab...');
            //     let print = confirm('Are you sure you want to print clearance?');
            //     const origin = window.location.origin;

            //     if(print){

            //         setTimeout(() => {

            //             $('#clearance_purpose').val('');
            //             $('#print_clearance_btn').removeAttr('disabled').val('Print');
            //             $('#certificate_modal').modal('hide');

            //             window.open(`${origin}/certificates/resident/{{ $business->id }}?certificate_type=clearance&clearance_purpose=${clearance_purpose}`, '_blank');

            //         }, 1000);

            //     }else{
            //         $('#clearance_purpose').val('');
            //         $('#print_clearance_btn').removeAttr('disabled').val('Print');
            //         $('#certificate_modal').modal('hide');
            //     }

            // }
        }

    </script>
@endsection



