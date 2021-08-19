@extends('layouts.app')

@section('title', 'subject-teacher-manage')

@section('content')

<div class="container mt-3 shadow-lg p-3 mb-3 bg-white rounded-lg">
    Subject Detail
</div>
<div class="container mt-3 shadow-lg p-3 mb-3 bg-white rounded-lg">
    Main Teacher Detail

    <!-- /.col -->
    <div class="ui form">
        <div class="field">
            <label>Country</label>
            <select class="ui search dropdown">
                @foreach ($data_teachers as $item)
                <option value="{{$item->name}}">{{$item->name}}</option>
                @endforeach

            </select>
        </div>
    </div>
</div>

<div class="container mt-3 shadow-lg p-3 mb-3 bg-white rounded-lg">
    {{--button toggle modal-------------------------------------------------------------------- --}}
    <div class="container row modal-header">
        <div class="col-4">
            <h4>Sub Teacher</h4>
        </div>
        <div class="col-8" align="right" style="left: 30px;">
            <button type="button" class="btn btn-success" name="add_button" id="add_button">Add Teacher</button>
        </div>
    </div>
    {{--end button toggle modal --------------------------------------------------------------------------------------- --}}
    <div class="container mt-3  table-responsive ">
        <table class="table table-striped text-center " id="datatable_1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>titile</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>created_at</th>
                    <th>action</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<div class="container mt-3 shadow-lg p-3 mb-3 bg-white rounded-lg">

    </form>


    <div class="">
        <h1>Document editor</h1>

        <!-- The toolbar will be rendered in this container. -->
        <div id="toolbar-container"></div>

        <!-- This container will become the editable. -->
        <div id="editor">
            <p>This is the initial editor content.</p>
        </div>
    </div>


</div>



@endsection


@section('content_hidden')
{{-- modal add sub teacher --}}
{{-- <div id="FormModal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form id="user_form" class=" form-horizontal" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Name*</label>
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="type name's user">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Email*</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="type email's user">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control" id="user_role" name="user_role">
                                    <option value="">--select--</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Team</label>
                                <select class="form-control" id="user_team" name="user_team">
                                    <option value="">--select--</option>


                                </select>
                            </div>
                        </div>
                        <div class="col-4">
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
        </div>
    </div>
</div> --}}


<div class="modal" id="FormModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Large Modal</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>One fine body&hellip;</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

@endsection

@push('page_css_call')

@endpush

@push('page_script_call')
<script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/decoupled-document/ckeditor.js"></script>


<script src="/library_components/AdminLTE/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="/library_components/AdminLTE/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="/library_components/AdminLTE/plugins/moment/moment.min.js"></script>
<script src="/library_components/AdminLTE/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="/library_components/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="/library_components/AdminLTE/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/library_components/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
</script>
<!-- Bootstrap Switch -->
<script src="/library_components/AdminLTE/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="/library_components/AdminLTE/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="/library_components/AdminLTE/plugins/dropzone/min/dropzone.min.js"></script>

@endpush

@push('page_script')
<script>
     $('#add_button').click(function()
{ 
    $('#FormModal').modal('show');
});
</script>

@endpush