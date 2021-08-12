@extends('layouts.app')

@section('title', 'admin-users')

@section('content')

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
                    <th>description</th>
                    <th>email</th>
                    <th>role</th>
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
                        <div class="form-group">
                            <label for="user_role" class="col-form-label">Role*:</label>
                            <select class="form-control" id="user_role" name="user_role">
                                <option value="0">--select--</option>
                                @foreach ($data_role as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
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




@push('page_script')
<script>
    $(document).ready(function()
{
    var table = $('#users_datatable').DataTable(
    {
      // dom: 'Bfrtip',
      //   buttons: [
      //       'copyHtml5',
      //      'excelHtml5',
      //       'csvHtml5',
      //       'pdfHtml5'
      //   ],
        
        processing: true,
        serverSide: true,
        responsive: true,
        
        
        "ajax": "{{ route('admin.get_user_all')}}", 
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
        data: 'description',
        name: 'description'
        },
        {
        data: 'email',
        name: 'email'
        },
        {
        data: 'role_id',
        name: 'role_id'
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

 

$('#app_form').on('submit', function(event)
{
    event.preventDefault(); 
    var action_url = "{{ route('admin.user.update') }}"; 

    var description = $("#user_description_text").val(); 
    $('#user_description').val(description); 
    console.log($(this).serialize());

    $.ajax(
    {
        url: action_url,
        method: "POST",
        data: $(this).serialize(),
        dataType: "json",
        success: function(data)
        {
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

  
$(document).on('click', '.edit', function()
{
    var id = $(this).attr('id');
    $('#form_result').html('');
    $.ajax(
    {
        url: "/admin/user/" + id + "/edit",
        dataType: "json",
        success: function(data)
        {
           console.log(data);
        $('#user_id').val(data.result.id);
        $('#user_title').val(data.result.title);
        $('#user_first_name').val(data.result.first_name);
        $('#user_last_name').val(data.result.last_name);
        $('#user_description_text').val(data.result.description);
        $('#user_email').val(data.result.email);
        $('.modal-title').text('Edit user : '+data.result.first_name+' '+data.result.last_name);
        $('#user_role').val(data.result.role_id);
        // $('#type_submit_button').val('edit');                  
        $('#hidden_id').val(id);
        $('#staticBackdrop').modal('show');
        }
    })
    
});
 

$(document).on('click', '.delete', function() {
    
    var id = $(this).attr('id');
    if (confirm("!! Confirm to delete user id : "+id+" !!")) {
   
            $.ajax(
            {
                url: "/admin/user/destroy/" + id,
                
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