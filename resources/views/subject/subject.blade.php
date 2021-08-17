@extends('layouts.app')

@section('title', 'template')

@section('content')

<div class="container mt-3 shadow-lg p-3 mb-3 bg-white rounded-lg">
    <div class="col-4">
        <h4>course list</h4>
    </div>

    <div class="row" >

        @foreach ($data_subject as $item)
        <a href="subject/{{$item->id}}" >
            <div class="col-xs-12 col-sm-6 col-md-4">

                <div class="card"  style="margin-top: 15px;margin-bottom: 15px;">
                    <img src="{{$item->subject_picture}}" alt="{{$item->subject_title}}" class="img-thumbnail">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->subject_title}}</h5>
                        <p class="card-text">...</p>
                        <a href="subject/{{$item->id}}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>






</div>

<div class="container mt-3 shadow-lg p-3 mb-3 bg-white rounded-lg">

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <span id="form_result"></span>
                    <form id="app_form" method="post">

                        @csrf

                        <div class="form-group">
                            <label for="user_title" class="col-form-label">Title Name:</label>
                            <input type="text" class="form-control" id="user_title" name="user_title"
                                placeholder="title Name's user">
                        </div>
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
                        <div class="form-group">
                            <label for="user_description_text" class="col-form-label">Description:</label>
                            <textarea class="form-control" id="user_description_text"
                                placeholder="description's user"></textarea>
                            <input type="hidden" class="form-control" id="user_description" name="user_description"
                                placeholder="description's user">
                        </div>
                        <div class="form-group">
                            <label for="user_email" class="col-form-label">Email*:</label>
                            <input type="email" class="form-control" id="user_email" name="user_email"
                                placeholder="email's user">
                        </div>

                        {{-- <input type="hidden" name="type_submit_button" id="type_submit_button" value="none" /> --}}
                        <input type="hidden" name="hidden_id" id="hidden_id" />
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary border" data-dismiss="modal">Cancle</button>
                            <button type="submit" class="btn btn-warning border" name="submit_button"
                                id="submit_button">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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