@extends('layouts.app')

@section('title', 'template')

@section('content')


<div class="container  mt-3 shadow-lg p-3 mb-3 bg-white rounded-lg">
    <div class="row">
        <div class="col-6">
            <div class="col-12">
                <h2>{{$data_subject->subject_title}}</h2>
            </div>
            <div class="col-12">
                <h5>{{$data_subject->subject_series}}</h5>
            </div>
            <center>

                <form id="app_form" method="post">
                    @csrf
                    <input type="hidden" name="hidden_id_subject" id="hidden_id_subject" value="{{$id}}" />
                    <input type="hidden" name="hidden_id_user" id="hidden_id_user" value="{{Auth::user()->id}}" />

                    <button type="submit" class="b tn btn-primary btn-lg " id="register_button">Register</button>
                </form>
            </center>

        </div>

        <div class="col-6">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/MfE1tnMG6fE" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
</div>





<div class="container  mt-3 shadow-lg p-3 mb-3 bg-white rounded-lg">

    <div class="col-12">
        <h5>{{$data_subject->description}}</h5>
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

$('#app_form').on('submit', function(event)
{
    event.preventDefault(); 
    var action_url = "{{ route('subject_student.store') }}"; 
 

    console.log("register_button");

    console.log($(this).serialize());

    $.ajax(
    {
        url: action_url,
        method: "POST",
        data: $(this).serialize(),
        dataType: "json",
        success: function(data)
        {
            alert("register success");

        }
    });
});
    
 
</script>
@endpush