@extends('layouts.app')

@section('title', 'admin-user')

@section('content')
<div class="container mt-3 shadow-lg p-3 mb-3 bg-white rounded-lg">
    User

    <select class="form-control" id="user_status" name="user_status">
        @foreach ($query_permission_status as $item)
        <option value="{{$item->name}}">{{$item->name}}</option>
        @endforeach
     </select>
</div> 

<div class="container mt-3 shadow-lg p-3 mb-3 bg-white rounded-lg">
    <div class="col-4">
        <h4>Users</h4>
    </div>
    <div class="container mt-3  table-responsive ">
        <table class="table table-striped text-center " id="users_datatable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>titile</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>email</th>
                    <th>Subject</th>
                    <th>role</th>
                    <th>Status</th>
                    <th>created_at</th>
                    <th>action</th>
                </tr>
            </thead>
        </table>
    </div>
</div> 

@endsection

@push('page_script')
<script>
    $(document).ready(function()
{
    var table = $('#users_datatable').DataTable(
    {
       "autoWidth": true,

      dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        
        processing: true,
        serverSide: true,
        responsive: true,
        
        
        "ajax": "{{route('admingetuser')}}", 
        "columns": [
        {
        data: 'id',
        name: 'id'
        },
        {
        data: 'title',
        name: 'title'
        },
        {
        data: 'first_name',
        name: 'first_name'
        },
        {
        data: 'last_name',
        name: 'last_name'
        }, 
        {
        data: 'email',
        name: 'email'
        }, 
        {
        data: 'role_id',
        name: 'roles.name'
        } ,
        {
        data: 'created_at',
        name: 'created_at'
        } ,
        {
        data: 'action',
        name: 'action'
        }],
    });
});

</script>
@endpush