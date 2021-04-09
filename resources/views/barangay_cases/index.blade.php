@extends('layouts.main')

@section('title', 'Cases / Complains')

@section('content')
<div class="card">
    <div class="col-12 pt-3 px-3 d-flex justify-content-between align-items-center">
        <h4 class="h4">Something!</h4>
        {{-- <button type="button" class="btn btn-secondary btn-flat" data-toggle="modal" data-target="#exampleModal">
                Create Data
        </button> --}}
        <a href="{{ route('barangay_cases.create') }}" class="btn btn-flat btn-secondary">New Case/Complain</a>
    </div>
    <div class="col-12">
        <hr class="pb-0 mb-0">
    </div>
    
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('barangay_cases.index') }}" method="get">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="search">Search (Hit enter)</label><a style="float: right" href="{{ route('barangay_cases.index') }}">View all</a>
                            <input type="text" class="form-control" id="search" name="search" placeholder="Enter Summon Purpose or Subject Person..." required value="{{ $search ? $search : '' }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label for="" class="text-dark">Results total: {{ $barangay_cases->total() }}</label>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        <div class="table-responsive">   
            <table class="table table-sm table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">Summon Purpose</th>
                        <th scope="col">Subject Person</th>
                        <th scope="col">Status</th>
                        <th width="8%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($barangay_cases as $barangay_case)
                        <tr>
                            <td>
                                {{ $barangay_case->summon_purpose }}
                            </td>
                            <td>
                                {{ $barangay_case->subject_person }} 
                            </td>

                            <td>
                                {{ $barangay_case->status }} 
                            </td>
                            
                            <td>
                                <a class="btn btn-sm btn-regular" href="{{ route('barangay_cases.edit', $barangay_case->id) }}">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a class="btn btn-sm btn-regular" href="{{ route('barangay_cases.show', $barangay_case->id) }}">
                                    <i class="far fa-folder-open"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="10">No Barangay Case Found!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="row mt-3">
            <div class="col-12">
                {{ $barangay_cases ? $barangay_cases->links() : ''  }}
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

