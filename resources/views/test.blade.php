@extends('layouts.app')

@section('title', 'test')

@section('content')
<div class="container">
   


</div>


<div class="container mt-3 shadow-lg p-3 mb-3 bg-white rounded-lg">
    <table id="example" class="table table-borderless " style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
    </table>
</div>
@endsection

@push('page_script')
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endpush