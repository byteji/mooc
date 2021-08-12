@extends('layouts.app')

@section('title', 'template')

@section('content')

@section('content')
<div class="container mt-3 shadow-lg p-3 mb-3 bg-white rounded-lg">
    <div class="col-4">
        <h4>Subject</h4>
    </div>
    <div class="container mt-3  table-responsive ">
        <table class="table table-striped text-center " id="users_datatable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>First name</th>
                    <th>last name</th>
                    <th>created_at</th>
                    <th>action</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection


@section('content2')
<div class="container">
      <div class="container">
      </div>
</div>


@endsection

@push('page_script')
<script>

</script>
@endpush
