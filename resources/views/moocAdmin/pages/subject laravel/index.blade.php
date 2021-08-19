@extends('layouts.app')

@section('title', 'admin-user')

@section('content')
<div class="container mt-3 shadow-lg p-3 mb-3 bg-white rounded-lg">
    User
</div>


<div class="container mt-3 shadow-lg p-3 mb-3 bg-white rounded-lg">
    <div class="col-4">
        <h4>Users</h4>
    </div>
    <div class="container mt-3  table-responsive ">
        <table class="table table-striped text-center " id="datatable1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>titile subject</th>
                    <th>Teacher</th>
                    <th>Status</th>
                    <th>created_at</th>
                    <th>created_at</th>
                    <th>created_at</th>
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
    var table = $('#datatable1').DataTable(
    {
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
        
        "ajax": "{{route('admingetsubject')}}", 
        "columns": [
        {
        data: 'id',
        name: 'id'
        },
        {
        data: 'subject_title',
        name: 'subject_title'
        },
        {
        data: 'subject_description_1',
        name: 'subject_description_1'
        },
        {
        data: 'subject_description_2',
        name: 'subject_description_2'
        }, 
        {
        data: 'subject_description_3',
        name: 'subject_description_3'
        }, 
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