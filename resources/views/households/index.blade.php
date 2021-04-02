@extends('layouts.main')

@section('title', 'Households')

@section('content')


                <div
                class="modal fade show"
                id="household_modal"
                tabindex="-1"
                role="dialog"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true">

                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">

                            <div class="modal-header border-bottom-0">
                                <h5 class="modal-title" id="exampleModalLabel">Households</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            
                            <div class="modal-body">
                                
                                <form action="{{ route('households.store') }}" method="post" id="add_form">
                                    <div class="row">
                                        @csrf

                                        <div class="form-group col-md-12">
                                            <label>Name</label>

                                            <input
                                                type="text"
                                                class="form-control @error('family_name') {{ 'is-invalid' }}@enderror"
                                                name="family_name"
                                                id="family_name"
                                                value="{{ old('family_name') }}"
                                                placeholder="Type family_name..."
                                                required>

                                            @error('family_name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Details</label>

                                            <input
                                                type="text"
                                                class="form-control @error('details') {{ 'is-invalid' }}@enderror"
                                                name="details"
                                                id="details"
                                                value="{{ old('details') }}"
                                                placeholder="Type Details..."
                                                required>

                                            @error('details')
                                                <small class="text-danger">{{ ' The program/activity/project statement is required' }}</small>
                                            @enderror
                                        </div>

                                        <input type="hidden" id="data_id" value="0">

                                    </div>
                                </form>

                                <form action="#" method="post" id="edit_form">
                                    <div class="row">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-group col-md-12">
                                            <label>Name</label>

                                            <input
                                                type="text"
                                                class="form-control @error('family_name') {{ 'is-invalid' }}@enderror"
                                                name="family_name"
                                                id="family_name"
                                                value="{{ old('family_name') }}"
                                                placeholder="Type family_name..."
                                                required>

                                            @error('family_name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Details</label>

                                            <input
                                                type="text"
                                                class="form-control @error('details') {{ 'is-invalid' }}@enderror"
                                                name="details"
                                                id="details"
                                                value="{{ old('details') }}"
                                                placeholder="Type Details..."
                                                required>

                                            @error('details')
                                                <small class="text-danger">{{ ' The program/activity/project statement is required' }}</small>
                                            @enderror
                                        </div>

                                        <input type="hidden" id="data_id" value="0">

                                    </div>
                                </form>

                            </div>

                            <div class="modal-footer">
                                <button type="submit" id="save_button" form="add_form" class="btn btn-primary">Save</button>
                                <button type="submit" id="update_button" form="edit_form" class="btn btn-primary">Save Changes</button>
                                <button type="button" id="close_button" class="btn btn-secondary" data-dismiss="modal" style="display: none;">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- modal --}}
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{  session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card">
                    <div class="col-12 pt-3 px-3 d-flex justify-content-between align-items-center">
                        
                        <h4 class="h4">Something!</h4>
                        <button
                            type="button"
                            id="open_button"
                            class="btn btn-secondary btn-flat"
                            data-toggle="modal"
                            data-target="#household_modal">
                                New Household
                        </button>

                    </div>
                    <div class="col-12">
                        <hr class="pb-0 mb-0">
                    </div>
                    <div class="card-body">
                        
                            <form action="{{ route('households.index') }}" method="get">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="search">Search (Hit enter)</label>
                                        <a style="float: right" href="{{ route('households.index') }}">
                                            View all
                                        </a>
                                        <input type="text" class="form-control" id="search" name="search" placeholder="Enter Family Name or Details..." required value="{{ $search ? $search : '' }}">
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-sm table-bordered table-striped">

                                        <thead>
                                            <tr>
                                                <th>Family Name</th>
                                                <th>Details</th>
                                                <th width="10%">Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @forelse ($households as $household)
                                                <tr>
                                                    <td>{{ $household->family_name }}</td>
                                                    <td>{{ $household->details }}</td>
                                                    <td>
                                                        {{-- <form action="{{ route('households.destroy', $household->id) }}" method="post" style="display: inline-block">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit" class="btn btn-light btn-sm">
                                                            <i class="far fa-trash-alt" ></i>
                                                        </button>
                                                        </form> --}}

                                                        <button type="button" onclick="editOrView('edit', {{ $household->id}})" class="btn btn-light btn-sm">
                                                            <i class="far fa-edit" ></i>
                                                        </button>
                                                        <button type="button" onclick="editOrView('view',{{ $household->id}})" class="btn btn-light btn-sm">
                                                            <i class="far fa-folder-open" ></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @empty
                                            <tr>
                                                <td colspan="10" class="text-center">No households found!</td>
                                            </tr>
                                            @endforelse
                                            {{-- {{dd($errors)}} --}}
                                        </tbody>
                                    </table>
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            {{ $households ? $households->links() : ''  }}
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                    </div>
                </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            clearFields();
            const errors = {{ $errors }};
            console.log(errors);
            $(window).on('load', function() {
                if(errors > 0){
                    $('#household_modal').modal('show');
                }
            });

            $('#household_modal').on('hidden.bs.modal', function (e) {
                clearFields();
            })

            // $(window).keydown(function(event){
            //     if(event.keyCode == 13) {
            //         event.preventDefault();
            //         return false;
            //     }
            // });


        });

        function clearFields() {
            $('#data_id').val(0);
            $('#update_button').hide();
            $('#save_button').show();
            $('#close_button').hide();
            $('#add_form').show();
            $('#edit_form').hide();
        }
        const orgin = window.location.origin;

        function editOrView(action, id) {
            if(action === 'view'){
                $('#update_button').hide();
                $('#save_button').hide();
                $('#close_button').show();
                
            }else{
                $('#update_button').show();
                $('#save_button').hide();
                $('#close_button').hide();
            }
            $('#edit_form').show();
            $('#add_form').hide();
            getData(id);
        }

        function renderDataToDom(data){
            $('#edit_form #family_name').val(data.family_name);
            $('#edit_form #details').val(data.details);

            console.log($('#edit_form').attr('action','households/' + data.id ));

            $('#household_modal').modal('show');
        }

        const getData = async (id) => {
            await axios.get(`${orgin}/households/${id}`)
                .then(function(response) {
                    renderDataToDom(response.data);
                })
                .catch(function(error) {
                    console.log(error);
                });
        }

    </script>
@endsection
