@extends('layouts.app')

@section('title', 'admin-subjects')


@section('content')
<div class="container mt-3 shadow-lg p-3 mb-3 bg-white rounded-lg">
    <div class="container row modal-header">
        <div class="col-4">
            <h4>Subject</h4>
        </div>
        <div class="col-8" align="right" style="left: 30px;">
            <button type="button" class="btn btn-success" name="add_button" id="add_button">Add subject</button>
        </div>
    </div>
    <div class="container mt-3  table-responsive ">
        <table class="table table-striped text-center " id="users_datatable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>titile</th>
                    <th>series</th>
                    <th>description</th>
                    <th>created_at</th>
                    <th>action</th>
                </tr>
            </thead>
        </table>
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
                            <label for="subject_title" class="col-form-label">Title*:</label>
                            <input type="text" class="form-control" id="subject_title" name="subject_title"
                                placeholder="subject's title">
                        </div>
                        <div class="form-group">
                            <label for="subject_series" class="col-form-label">series*:</label>
                            <input type="text" class="form-control" id="subject_series" name="subject_series"
                                placeholder="subject's series">
                        </div>
                        <div class="form-group">
                            <label for="subject_description" class="col-form-label">description*:</label>
                            <input type="text" class="form-control" id="subject_description" name="subject_description"
                                placeholder="subject's description">
                        </div>


                        {{-- <input type="hidden" name="type_submit_button" id="type_submit_button" value="none" /> --}}
                        <input type="hidden" name="hidden_id" id="hidden_id" />
                        <input type="hidden" name="type_action" id="type_action" />

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

</div>


@endsection

@push('page_script')
<script>
    $(document).ready(function()
{

    
    var table = $('#users_datatable').DataTable(
    {
      
        
        processing: true,
        serverSide: true,
        responsive: true,
        
        
        "ajax": "{{ route('admin.get_subject_all')}}", 
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
        data: 'subject_series',
        name: 'subject_series'
        }, 
        {
        data: 'description',
        name: 'description'
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

$('#add_button').click(function()
{
    $('#app_form')[0].reset();
    $('.modal-title').text('Add New Subject');
    $('#submit_button').text('Add'); 
    $('#type_action').val('add');
    $('#form_result').html('');
    $('#staticBackdrop').modal('show');
});


  
$(document).on('click', '.edit', function()
{
    var id = $(this).attr('id');
    $('#form_result').html('');
    $.ajax(
    {
        url: "/admin/subject/" + id + "/edit",
        dataType: "json",
        success: function(data)
        {
           console.log(data);
        $('#submit_button').text('edit'); 
        $('#type_action').val('edit');

        $('#subject_title').val(data.result.subject_title);
        $('#subject_series').val(data.result.subject_series);
        $('#subject_description').val(data.result.description);
        $('.modal-title').text('Edit subject : '+data.result.subject_title);
        $('#hidden_id').val(id);
        $('#staticBackdrop').modal('show');
        }
    })
    
});
 



$('#app_form').on('submit', function(event)
{
    console.log("click submit");

    event.preventDefault(); 

    if ($('#type_action').val() == 'add') {
        var action_url = "{{ route('admin.subject.store') }}"; 
        console.log("add new");

    }else if ($('#type_action').val() == 'edit'){
        var action_url = "{{ route('admin.subject.update') }}"; 
        console.log("edit new");

    }
  
    console.log($(this).serialize());

    $.ajax(
    {
        url: action_url,
        method: "POST",
        data: $(this).serialize(),
        dataType: "json",
        success: function(data)
        {
            console.log("return submit");

            var html = '';
            if (data.errors)
            {
                html = '<div class="alert alert-danger">';
                for (var count = 0; count < data.errors.length; count++)
                {
                    html += '<p>' + data.errors[count] + '</p>';
                }
                html += '</div>';
            }
            if (data.success)
            {
                html = '<div class="alert alert-success">' + data.success + '</div>';
                 $('#users_datatable').DataTable().ajax.reload();  
               
            }
            $('#form_result').html(html); 
        }
    });
});


$(document).on('click', '.delete', function() {
    
    var id = $(this).attr('id');
    if (confirm("!! Confirm to delete subject id : "+id+" !!")) {
   
            $.ajax(
            {
                url: "/admin/subject/destroy/" + id,
                
                success: function(data)
                { 
                    $('#users_datatable').DataTable().ajax.reload();
                }
            })
  } else { 
      
  }

});
 


</script>
@endpush