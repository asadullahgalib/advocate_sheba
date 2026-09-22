@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3>Change Password</h3>
      </div>

      <div class="card-body">
        <form method="post" action="{{route('profiles.passowrd.update')}}" id="myForm">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="current_password">Current Passowrd</label>
              <input type="password" name="current_password" id="current_password" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label for="new_password">New Password</label>
              <input type="password" name="new_password" id="new_password" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label for="again_new_password">Again New Password</label>
              <input type="password" name="again_new_password" class="form-control">
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
          current_password : {
            required : true,
          },
          new_password : {
            required : true,
            minlength : 6
          },
          again_new_password : {
            required : true,
            equalTo : '#new_password'
          }
        },
        messages: {
          current_password : {
            required : 'Please enter current password',
          },
          new_password : {
            required : 'Please enter new password',
            minlength : 'Password will be minimum 6 characters or numbers',
          },
          again_new_password : {
            required : 'Please enter again new password',
            equalTo : 'Again password password does not match',
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