@extends('backend.layouts.master')
@section('content')
<div class="col-xl-12">
  <div class="breadcrumb-holder">
    <h1 class="main-title float-left">Manage Table</h1>
    <ol class="breadcrumb float-right">
      <li class="breadcrumb-item"><a href="{{route('home')}}"><strong>Home</strong></a></li>
      <li class="breadcrumb-item active">Table</li>
    </ol>
    <div class="clearfix"></div>
  </div>
</div>
<div class="container fullbody">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3>
          @if(isset($editData))
          Edit Table
          @else
          Add Table
          @endif
          <a class="btn btn-success float-right btn-sm" href="{{route('setup.table.view')}}"><i class="fa fa-list"></i> Table List</a>
        </h3>
      </div>

      <div class="card-body">
        <form method="post" action="{{(@$editData)?route('setup.table.update',$editData->id):route('setup.table.store')}}" id="myForm" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-4">
              <label>Table Name</label>
              <input type="text" name="name" value="{{@$editData->name}}" class="form-control" placeholder="Write Table Name">
              <font color="red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
            </div>
            <div class="form-group col-md-2">
              <label>Capacity</label>
              <input type="text" name="capacity" value="{{@$editData->capacity}}" class="form-control">
              <font color="red">{{($errors->has('capacity'))?($errors->first('capacity')):''}}</font>
            </div>
            <div class="form-group col-md-4">
              <label for="image">Icon </label>
              <input type="file" name="image" class="form-control" id="image">
            </div>
            <div class="form-group col-md-2">
              <img id="showImage" src="{{(!empty($editData->image))?url('public/upload/table_images/'.$editData->image):url('public/upload/no_image.png')}}" style="width: 90px;height: 80px;border:1px solid #000;">
            </div>
            <div class="form-group col-md-6">
              <button type="submit" class="btn btn-primary">{{(@$editData)?"Update":"Submit"}}</button>
            </div>
          </div>
        </form>
      </div><!-- /.card-body -->

    </div>
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