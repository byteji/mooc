@extends('layouts.app')

@section('title', 'template')

@section('content')
<div class="container mt-3 shadow-lg p-3 mb-3 bg-white rounded-lg">

    <span id="form_result"></span>
    <form id="user_form" class=" form-horizontal" method="post">
        @csrf

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label>title*</label>
                    <input type="text" class="form-control" id="username" name="username"
                        placeholder="type name's user">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>first_name*</label>
                    <input type="text" class="form-control" id="username" name="username"
                        placeholder="type name's user">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>last_name*</label>
                    <input type="text" class="form-control" id="username" name="username"
                        placeholder="type name's user">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>description1*</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="type email's user">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>description2*</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="type email's user">
                </div>
            </div> 

            <div class="col-6">
                <div class="form-group">
                    <label>role_id</label>
                    <select class="form-control" id="user_status" name="user_status">

                    </select>
                </div>
            </div>
            
            <div class="col-6">
                <div class="form-group">
                   <label>Status</label>
                   <select class="form-control" id="user_status" name="user_status">
                    
                   </select>
                </div>
             </div>
            <div class="col-12">
                <div align='left' class=" text-black-50">*Password will be auto-generate and send to user's
                    e-mail
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
@endsection

@push('page_script')
<script>

</script>
@endpush