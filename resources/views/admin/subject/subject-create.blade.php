@extends('layouts.app')

@section('title', 'subject-create')

@section('content')

<div class="container mt-3 shadow-lg p-3 mb-3 bg-white rounded-lg">
    subject-create
</div>


<div class="container mt-3 shadow-lg p-3 mb-3 bg-white rounded-lg">
    <div class="modal-body">
        <span id="form_result"></span>
        <form id="user_form" class=" form-horizontal" method="post">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label>subject code*</label>
                        <select class="form-control" id="user_role" name="user_role">
                            <option value="">--select--</option>

                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>subject title*</label>
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="type name's user">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>subject series*</label>
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="type name's user" disabled>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>main teacher*</label>
                        <select class="form-control" id="user_role" name="user_role">
                            <option value="">--select--</option>

                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>sub teacher*</label>
                        <div class="container mt-3  table-responsive ">
                            <table class="table table-striped text-center " id="users_datatable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>titile</th>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="container row ">
                    <div class="form-group">
                        <input type="hidden" name="action" id="action" value="Add" />
                        <input type="hidden" name="hidden_id" id="hidden_id" />
                    </div>
                    <div class="col-4">
                    </div>
                    <div class="col-8" align="right" style="left: 45px;">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning" name="action_button" id="action_button"
                            value="Add">Add</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('page_script')
<script>



</script>
@endpush