@extends('layouts.main')

@section('title', 'Officials')

@section('content')
<div class="card">
    <div class="col-12 pt-3 px-3 d-flex justify-content-between align-items-center">
        <h4 class="h4">Something!</h4>
        {{-- <button type="button" class="btn btn-secondary btn-flat" data-toggle="modal" data-target="#exampleModal">
                Create Data
        </button> --}}
        
        <a href="{{ route('officials.create') }}" class="btn btn-success"><i data-feather="plus-circle" width='18' height="18" class="mr-2"></i>New Official</a>
    </div>
    <div class="col-12">
        <hr class="pb-0 mb-0">
    </div>
    
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('officials.index') }}" method="get">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="search">Search (Hit enter)</label><a style="float: right" href="{{ route('officials.index') }}">View all</a>
                            <input type="text" class="form-control" id="search" name="search" placeholder="Enter Lastname or Firstname..." required value="{{ $search ? $search : '' }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label for="" class="text-dark">Results total: {{ $officials->total() }}</label>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        <div class="table-responsive">   
            <table class="table table-sm table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Position</th>
                        <th width="8%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($officials as $official)
                        <tr>
                            <td>
                                {{ $official->last_name }}, {{ $official->first_name }} {{ $official->middle_name }}. {{ $official->suffix }}
                            </td>
                            <td>
                                {{ $official->position }}
                            </td>
                            
                            <td>
                                <a class="btn btn-sm btn-regular" href="{{ route('officials.edit', $official->id) }}">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a class="btn btn-sm btn-regular" href="{{ route('officials.show', $official->id) }}">
                                    <i class="far fa-folder-open"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="10">No Official Found!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="row mt-3">
            <div class="col-12">
                {{ $officials ? $officials->links() : ''  }}
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

