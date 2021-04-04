@extends('layouts.main')

@section('title', 'Resolutions')

@section('content')
<div class="card">
    <div class="col-12 pt-3 px-3 d-flex justify-content-between align-items-center">
        <h4 class="h4">Something!</h4>
        {{-- <button type="button" class="btn btn-secondary btn-flat" data-toggle="modal" data-target="#exampleModal">
                Create Data
        </button> --}}
        <a href="{{ route('resolutions.create') }}" class="btn btn-flat btn-secondary">New Resolution</a>
    </div>
    <div class="col-12">
        <hr class="pb-0 mb-0">
    </div>
    
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('resolutions.index') }}" method="get">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="search">Search (Hit enter)</label><a style="float: right" href="{{ route('resolutions.index') }}">View all</a>
                            <input type="text" class="form-control" id="search" name="search" placeholder="Enter Author or Summary..." required value="{{ $search ? $search : '' }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label for="" class="text-dark">Results total: {{ $resolutions->total() }}</label>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        <div class="table-responsive">   
            <table class="table table-sm table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">Resolution No.</th>
                        <th scope="col">Summary</th>
                        <th scope="col">Author</th>
                        <th scope="col">Status</th>
                        <th scope="col">Session Date</th>
                        <th width="8%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($resolutions as $resolution)
                        <tr>
                            <td>
                                {{ $resolution->number }}
                            </td>
                            <td>
                                {{ $resolution->summary }}
                            </td>
                            <td>{{ $resolution->author }}</td>
                            <td>{{ $resolution->status }}</td>
                            <td>{{ $resolution->session_date }}</td>
                            
                            <td>
                                <a class="btn btn-sm btn-regular" href="{{ route('resolutions.edit', $resolution->id) }}">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a class="btn btn-sm btn-regular" href="{{ route('resolutions.show', $resolution->id) }}">
                                    <i class="far fa-folder-open"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="10">No Resolutiones Found!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="row mt-3">
            <div class="col-12">
                {{ $resolutions ? $resolutions->links() : ''  }}
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

