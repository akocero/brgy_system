@extends('layouts.main')

@section('title', 'Residents')

@section('content')
<div class="card">
    <div class="col-12 pt-3 px-3 d-flex justify-content-between align-items-center">
        <h4 class="h4">Something!</h4>
        {{-- <button type="button" class="btn btn-secondary btn-flat" data-toggle="modal" data-target="#exampleModal">
                Create Data
        </button> --}}
        <a href="{{ route('residents.create') }}" class="btn btn-flat btn-secondary">Add Resident</a>
    </div>
    <div class="col-12">
        <hr class="pb-0 mb-0">
    </div>
    
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('residents.index') }}" method="get">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="search">Search (Hit enter)</label><a style="float: right" href="{{ route('residents.index') }}">View all</a>
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
                        <th scope="col">ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th width="10%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($residents as $resident)
                        <tr>
                            <td>{{ $resident->id }}</td>
                            <td>
                                {{ $resident->last_name }}, {{ $resident->first_name }}  {{ $resident->middle_name }}  {{ $resident->suffix }}
                            </td>
                            <td>{{ $resident->email }}</td>
                            <td>
                                <a class="btn btn-sm btn-regular" href="{{ route('residents.edit', $resident->id) }}">
                                    <i class="far fa-edit"></i>
                                </a>
                                <button class="btn btn-sm btn-regular">
                                    <i class="far fa-folder-open"></i>
                                </button>
                                {{-- <button class="btn btn-sm btn-regular">
                                    <i class="far fa-trash-alt"></i>
                                </button> --}}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No Resident Found!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="row mt-3">
            <div class="col-12">
                {{ $residents ? $residents->links() : ''  }}
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

