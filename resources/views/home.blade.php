@extends('layouts.adminlte')


@section("title","Dashboard")

@section('content')
    <div class="card">
        <div class="col-12 pt-3 px-3">
            <h4 class="h4">Welcome Name!</h4>
            <hr class="pb-0 mb-0">
        </div>
        
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{ __('You are logged in! as Role') }}
        </div>
    </div>
@endsection
