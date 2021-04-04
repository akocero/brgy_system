@extends('layouts.main')

@section('title', 'Blotters')

@section('content')
<div class="card">
    <div class="col-12 pt-3 px-3 d-flex justify-content-between align-items-center">
        <h4 class="h4">Something!</h4>
        {{-- <button type="button" class="btn btn-secondary btn-flat" data-toggle="modal" data-target="#exampleModal">
                Create Data
        </button> --}}
        <a href="{{ route('blotters.create') }}" class="btn btn-flat btn-secondary">New Blotter</a>
    </div>
    <div class="col-12">
        <hr class="pb-0 mb-0">
    </div>
    
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('blotters.index') }}" method="get">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="search">Search (Hit enter)</label><a style="float: right" href="{{ route('blotters.index') }}">View all</a>
                            <input type="text" class="form-control" id="search" name="search" placeholder="Enter Fistname or Lastname..." required value="{{ $search ? $search : '' }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label for="" class="text-dark">Results total: {{ $blotters->total() }}</label>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        <div class="table-responsive">   
            <table class="table table-sm table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">Incident Type</th>
                        <th scope="col">Incident Location</th>
                        <th scope="col">Incident Date</th>
                        <th width="15%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($blotters as $blotter)
                        <tr>
                            <td>
                                {{ $blotter->incident_type }}
                            </td>
                            <td>{{ $blotter->incident_location }}</td>
                            <td>{{ $blotter->incident_date_time }}</td>
                            
                            <td>
                                <a class="btn btn-sm btn-regular" href="{{ route('blotters.edit', $blotter->id) }}">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a class="btn btn-sm btn-regular" href="{{ route('blotters.show', $blotter->id) }}">
                                    <i class="far fa-folder-open"></i>
                                </a>
                                <button class="btn btn-sm btn-regular">
                                    <i class="far fa-bell"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="10">No Blotteres Found!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="row mt-3">
            <div class="col-12">
                {{ $blotters ? $blotters->links() : ''  }}
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

