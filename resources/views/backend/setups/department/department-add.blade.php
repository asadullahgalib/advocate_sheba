@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          @if(isset($editData))
            Department Update
          @else
            Department Add
          @endif
          <a href="{{ route('human-resource.hrm.department.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Department List</i></a>
        </h3>
      </div>

      <form role="form" action="{{(@$editData)?route('human-resource.hrm.department.update',$editData->id):route('human-resource.hrm.department.store')}}" method="POST" enctype="multipart/form-data" id="MyForm">
        @csrf
          <div class="card-body">
            <div class="form-row">                   
              <div class="form-group col-md-6">
                <label for="name">Department Name</label>
                <input type="text" name="name" class="form-control form-control-sm" placeholder="Enter Department" value="{{ @$editData->name }}"> 
                <font style="color: red"> 
                  {{($errors->has('name'))?($errors->first('name')):''}} 
                </font>                 
              </div>
              <div class="form-group col-md-1">
                <label for="name">Sort</label>
                <input type="number" name="sort" class="form-control form-control-sm" value="{{ @$editData->sort }}">
              </div>
              <div class="form-group col-sm-3">
                <label>Image <span style="color:red;">(300px X 200px)</span></label>
                <input type="file" name="image" id="image" class="form-control form-control-sm">
              </div>
              <div class="form-group col-sm-2" style="z-index: 100;">
                <img id="showImage" src="{{(!empty($editData->image))?url('public/upload/department_images/'.$editData->image):url('public/upload/no_image.png')}}" style="width: 150px; height: 150px" class="form-control">
              </div>
              <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary btn-sm">@if(isset($editData)) Update @else Submit @endif</button>
              </div>
            </div>
          </div>
        </form>            

    </div>
  </div>

<script type="text/javascript">
  $(document).ready(function () {  
    $('#MyForm').validate({
      rules: {           
        name: {
          required: true,
        },
        sort: {
          required: true,
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