@extends('layouts.main')

@section('title', 'Businesss')

@section('content')
<div class="card">
    <div class="col-12 pt-3 px-3 d-flex justify-content-between align-items-center">
        <h4 class="h4">Something!</h4>
        {{-- <button type="button" class="btn btn-secondary btn-flat" data-toggle="modal" data-target="#exampleModal">
                Create Data
        </button> --}}
        <a href="{{ route('businesses.create') }}" class="btn btn-flat btn-secondary">New Business</a>
    </div>
    <div class="col-12">
        <hr class="pb-0 mb-0">
    </div>
    
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('businesses.index') }}" method="get">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="search">Search (Hit enter)</label><a style="float: right" href="{{ route('businesses.index') }}">View all</a>
                            <input type="text" class="form-control" id="search" name="search" placeholder="Enter Fistname or Lastname..." required value="{{ $search ? $search : '' }}">
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        <div class="table-responsive">   
            <table class="table table-sm table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">Business Name</th>
                        <th scope="col">Contact no.</th>
                        <th scope="col">Email</th>
                        <th scope="col">Permit Expiration Date</th>
                        <th width="15%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($businesses as $business)
                        <tr>
                            <td>
                                {{ $business->name }}
                            </td>
                            <td>{{ $business->mobile_no }}</td>
                            <td>{{ $business->email }}</td>
                            <td>{{ $business->permit_expiration_date }}</td>
                            
                            <td>
                                <a class="btn btn-sm btn-regular" href="{{ route('businesses.edit', $business->id) }}">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a class="btn btn-sm btn-regular" href="{{ route('businesses.show', $business->id) }}">
                                    <i class="far fa-folder-open"></i>
                                </a>
                                <button class="btn btn-sm btn-regular">
                                    <i class="far fa-bell"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No Business Found!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="row mt-3">
            <div class="col-12">
                {{ $businesses ? $businesses->links() : ''  }}
            </div>
            
        </div>
        
    </div>
</div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            console.log("ready!");
        });
    </script>
@endsection

