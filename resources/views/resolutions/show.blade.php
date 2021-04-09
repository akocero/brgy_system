@extends('layouts.main')


@section("title","Resolution Details")

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
            <h4 class="h4"> {{$resolution->author}}</h4>
            <a style="float: right" href="{{ route('resolutions.index') }}" class="pr-2">
                View all resolution
            </a>
        </div>
        <div class="col-12">
            <hr>
        </div>
        
        <div class="card-body">


            <form action="#" method="POST">
                @csrf
                @method('PATCH')

                        
                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="number">Resolution No.</label>&nbsp;<small class="text-danger">*</small>
                        <input type="text" class="form-control @error('number') {{ 'is-invalid' }}@enderror" id="number" name="number" placeholder="Type Lastnumber..." value="{{ $resolution->number }}">

                        @error('number')
                            <small class="text-danger">
                            {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="session_date">Session Date</label>&nbsp;<small class="text-danger">*</small>
                        <input type="date" class="form-control @error('session_date') {{ 'is-invalid' }}@enderror" id="session_date" name="session_date" placeholder="Type Lastsession_date..." value="{{ $resolution->session_date }}">

                        @error('session_date')
                            <small class="text-danger">
                            {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="author">Autor</label>&nbsp;<small class="text-danger">*</small>
                        <input type="text" class="form-control @error('author') {{ 'is-invalid' }}@enderror" id="author" name="author" placeholder="Type Lastauthor..." value="{{ $resolution->author }}">

                        @error('author')
                            <small class="text-danger">
                            {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="co_author">Co Author</label>&nbsp;<small class="text-danger">*</small>
                        <input type="text" class="form-control @error('co_author') {{ 'is-invalid' }}@enderror" id="co_author" name="co_author" placeholder="Type Lastco_author..." value="{{ $resolution->co_author }}">

                        @error('co_author')
                            <small class="text-danger">
                            {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-4">
                        <label for="forwarded_to">Forwarded to</label>&nbsp;<small class="text-danger">*</small>
                        <input type="text" class="form-control @error('forwarded_to') {{ 'is-invalid' }}@enderror" id="forwarded_to" name="forwarded_to" placeholder="Type Lastforwarded_to..." value="{{ $resolution->forwarded_to }}">

                        @error('forwarded_to')
                            <small class="text-danger">
                            {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-12">
                        <label for="summary">Resolution Summary</label>
                        <textarea type="text" class="form-control @error('summary') {{ 'is-invalid' }}@enderror" id="summary" name="summary" placeholder="Type Firstname..." value="">{{ $resolution->summary }}</textarea>

                        @error('summary')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-12">
                        <label for="remarks">Remarks/Notes/Reminder</label>
                        <textarea type="text" class="form-control @error('remarks') {{ 'is-invalid' }}@enderror" id="remarks" name="remarks" placeholder="Type Firstname..." value="">{{ $resolution->remarks }}</textarea>

                        @error('remarks')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>       

                </div>
                        

                <hr>
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

    </script>
@endsection
