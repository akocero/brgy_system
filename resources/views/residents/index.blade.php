@extends('layouts.main')

@section('title', 'Residents')

@section('content')
<!-- Modal -->
<div class="modal fade" id="exampleModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header border-bottom-0 pb-0">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-danger">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Options</label>
                        <select name="" id="" class="form-control">
                            <option value="">Option 1</option>
                            <option value="">Option 2</option>
                            <option value="">Option 3</option>
                        </select>
                    </div>
                </form>
            </div>
            
            <div class="modal-footer border-top-0 pt-0">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- /Modal -->

<div class="card">
    <div class="col-12 pt-3 px-3 d-flex justify-content-between align-items-center">
        <h4 class="h4">Something!</h4>
        <button type="button" class="btn btn-secondary btn-flat" data-toggle="modal" data-target="#exampleModal">
                Create Data
        </button>
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
                        <th width="14%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($residents as $resident)
                        <tr>
                            <td>{{ $resident->id }}</td>
                            <td>{{ $resident->last_name }}, {{ $resident->first_name }}  {{ $resident->middle_name }}  {{ $resident->suffix }}</td>
                            <td>{{ $resident->email }}</td>
                            <td>
                                <button class="btn btn-sm btn-regular">
                                    <i class="far fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-regular">
                                    <i class="far fa-folder-open"></i>
                                </button>
                                <button class="btn btn-sm btn-regular">
                                    <i class="far fa-trash-alt"></i>
                                </button>
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

