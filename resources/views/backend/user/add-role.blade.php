@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3>
          @if(isset($editData))
          Edit Role
          @else
          Add Role
          @endif
          <a class="btn btn-success float-right btn-sm custom_btn" href="{{route('user.role')}}"><i class="fa fa-list"></i> Role List</a>
        </h3>
      </div>

      <div class="card-body">
        <form method="post" action="{{(@$editData)?route('user.role.update',$editData->id):route('user.role.store')}}" id="myForm" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-8">
              <label>Role Name</label>
              <input type="text" name="name" value="{{@$editData->name}}" class="form-control" placeholder="Write Role Name">
              <font color="red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
            </div>
            <div class="form-group col-md-6">
              <button type="submit" class="btn btn-primary">{{(@$editData)?"Update":"Submit"}}</button>
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
        name: {
          required: true,
        },
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