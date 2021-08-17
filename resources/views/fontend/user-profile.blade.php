@extends('layouts.app')

@section('title', 'user profile')

@section('content')

<div class="container mt-3 shadow-lg p-3 mb-3 bg-white rounded-lg">
    <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">User infomation</h5>

    </div>
    <div class="modal-body">

        <span id="form_result"></span>
        <form id="app_form" method="post">

            @csrf
            @role('teacher')
            <div class="form-group">
                <label for="user_title" class="col-form-label">Title Name:</label>
                <input type="text" class="form-control" id="user_title" name="user_title"
                    placeholder="title Name's user">
            </div>
            @endrole

            <div class="form-group">
                <label for="user_first_name" class="col-form-label">First Name*:</label>
                <input type="text" class="form-control" id="user_first_name" name="user_first_name"
                    placeholder="First Name's user">
            </div>
            <div class="form-group">
                <label for="user_last_name" class="col-form-label">Last Name*:</label>
                <input type="text" class="form-control" id="user_last_name" name="user_last_name"
                    placeholder="Last Name's user">
            </div>

            @role('teacher')
            <div class="form-group">
                <label for="user_description_text" class="col-form-label">Description:</label>
                <textarea class="form-control" id="user_description_text" placeholder="description's user"></textarea>
                <input type="hidden" class="form-control" id="user_description" name="user_description"
                    placeholder="description's user">
            </div>
            @endrole

            <div class="form-group">
                <label for="user_email" class="col-form-label">Email*:</label>
                <input type="email" class="form-control" id="user_email" name="user_email" placeholder="email's user">
            </div>

            {{-- <input type="hidden" name="type_submit_button" id="type_submit_button" value="none" /> --}}
            <input type="hidden" name="hidden_id" id="hidden_id" value="{{Auth::user()->id}}" />
            <input type="hidden" name="user_role" id="user_role" />
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning border" name="submit_button"
                    id="submit_button">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('page_script')
<script>

</script>
@endpush