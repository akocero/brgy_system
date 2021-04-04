@extends('layouts.main')


@section("title","Add Resolution")

@section('content')
    <div class="card">
        <div class="col-12 pt-4 px-4 d-flex justify-content-between align-items-center">
            <h4 class="h4">Add new resolution</h4>
            <a style="float: right" href="{{ route('resolutions.index') }}" class="pr-2">
                View all resolution
            </a>
        </div>
        <div class="col-12">
            <hr>
        </div>
        
        <div class="card-body">


            <form action="{{ route('resolutions.store') }}" method="POST">
                @csrf

                        
                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="number">Resolution No.</label>&nbsp;<small class="text-danger">*</small>
                        <input type="text" class="form-control @error('number') {{ 'is-invalid' }}@enderror" id="number" name="number" placeholder="Type Lastnumber..." value="{{ old('number') }}">

                        @error('number')
                            <small class="text-danger">
                            {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="session_date">Session Date</label>&nbsp;<small class="text-danger">*</small>
                        <input type="date" class="form-control @error('session_date') {{ 'is-invalid' }}@enderror" id="session_date" name="session_date" placeholder="Type Lastsession_date..." value="{{ old('session_date') }}">

                        @error('session_date')
                            <small class="text-danger">
                            {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="author">Autor</label>&nbsp;<small class="text-danger">*</small>
                        <input type="text" class="form-control @error('author') {{ 'is-invalid' }}@enderror" id="author" name="author" placeholder="Type Lastauthor..." value="{{ old('author') }}">

                        @error('author')
                            <small class="text-danger">
                            {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="co_author">Co Author</label>&nbsp;<small class="text-danger">*</small>
                        <input type="text" class="form-control @error('co_author') {{ 'is-invalid' }}@enderror" id="co_author" name="co_author" placeholder="Type Lastco_author..." value="{{ old('co_author') }}">

                        @error('co_author')
                            <small class="text-danger">
                            {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="forwarded_to">Forwarded to</label>&nbsp;<small class="text-danger">*</small>
                        <input type="text" class="form-control @error('forwarded_to') {{ 'is-invalid' }}@enderror" id="forwarded_to" name="forwarded_to" placeholder="Type Lastforwarded_to..." value="{{ old('forwarded_to') }}">

                        @error('forwarded_to')
                            <small class="text-danger">
                            {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-12">
                        <label for="summary">Resolution Summary</label>
                        <textarea type="text" class="form-control @error('summary') {{ 'is-invalid' }}@enderror" id="summary" name="summary" placeholder="Type Firstname..." value="">{{ old('summary') }}</textarea>

                        @error('summary')
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
