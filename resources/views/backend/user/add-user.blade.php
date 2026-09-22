@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3>Add User
          <a class="btn btn-success float-right btn-sm custom_btn" href="{{route('user')}}"><i class="fa fa-list"></i> User List</a>
        </h3>
      </div>

      <div class="card-body">
        <form method="post" action="{{route('user.store')}}" id="myForm">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="role">User Role</label>
              <select name="role" id="role" class="form-control">
                <option value="">Select Role</option>
                @foreach($roles as $role)
                <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control">
              <font style="color: red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
            </div>
            <div class="form-group col-md-4">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control">
              <font style="color: red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
            </div>
            <div class="form-group col-md-4">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label for="password">Confirm Password</label>
              <input type="password" name="password2" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label for="role">Approval Status</label>
              <select name="status" id="status" class="form-control">
                <option value="">Select Status</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <input type="submit" value="submit" class="btn btn-primary">
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
          },
          password : {
            required : true,
            minlength : 6
          },
          password2 : {
            required : true,
            equalTo : '#password'
          }
        },
        messages: {
          email : {
                  required : 'Please enter email address',
                  email : 'Please enter a <em>valid</em> email address',
              },
          password : {
            required : 'Please enter password',
            minlength : 'Password will be minimum 6 characters or numbers',
          },
          password2 : {
            required : 'Please enter confirm password',
            equalTo : 'Confirm password does not match',
          }
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