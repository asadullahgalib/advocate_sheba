@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3>Edit User
          <a class="btn btn-success float-right btn-sm custom_btn" href="{{route('user')}}"><i class="fa fa-list"></i> User List</a>
        </h3>
      </div>

      <div class="card-body">
        <form method="post" action="{{route('user.update',$editData->id)}}" id="myForm">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="role">User Role</label>
              <select name="role" id="role" class="form-control">
                <option value="">Select Role</option>
                @foreach($roles as $role)
                <option value="{{$role->id}}" {{($editData->role==$role->id)?"selected":""}}>{{$role->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Name</label>
              <input type="text" name="name" value="{{$editData->name}}" class="form-control">
              <font style="color: red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
            </div>
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" name="email" value="{{$editData->email}}" class="form-control">
              <font style="color: red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
            </div>
            <div class="form-group col-md-6">
              <label for="role">Approval Status</label>
              <select name="status" id="status" class="form-control">
                <option value="">Select Status</option>
                <option value="1" {{($editData->status=='1')?"selected":""}}>Active</option>
                <option value="0" {{($editData->status=='0')?"selected":""}}>Inactive</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <input type="submit" value="Update" class="btn btn-primary">
            </div>
          </div>
        </form>
      </div><!-- /.card-body -->

    </div>
  </div>

<script type="text/javascript">
    $(document).ready(function () {
      $('#myForm').validate({
        rules: {
          role: {
            required: true,
          },
          name: {
            required: true,
          },
          status: {
            required: true,
          },
          email: {
            required: true,
            email: true,
          }
        },
        messages: {
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
</script>
@endsection