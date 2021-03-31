@extends('layouts.adminlte')

@section('title', 'Budget Proposal')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- Modal -->
                <div 
                class="modal fade" 
                id="exampleModal" 
                tabindex="-1" 
                role="dialog" 
                aria-labelledby="exampleModalLabel"
                aria-hidden="true">

                    <div class="modal-dialog" role="document">

                        <div class="modal-content">

                            <div class="modal-header border-bottom-0">
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
                                        <label for="exampleInputPassword1">Please Pick One</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Naysu</option>
                                            <option value="">suNays</option>
                                            <option value="">Nyawkuks</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            
                            <div class="modal-footer border-top-0">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">

                    <div class="card-body">
                        <div class="container">
                            <div class="row mb-4 d-flex justify-content-end">
                                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
                                    Create Budget Proposal
                                </button>
                            </div>
                        </div>
                            <table class="table table-sm table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        
                    </div>
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
