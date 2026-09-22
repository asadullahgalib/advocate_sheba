@extends('backend.layouts.master')
@section('content')
<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          @if(isset($editData))
            Promotion Update
          @else
            Promotion Add
          @endif
          <a href="{{ route('human-resource.hrm.promotion.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Promotion List</i></a>
        </h3>
      </div>

      <form role="form" action="{{(@$editData)?route('human-resource.hrm.promotion.update',$editData->id):route('human-resource.hrm.promotion.store')}}" method="POST" enctype="multipart/form-data" id="MyForm">
        @csrf
          <div class="card-body">
            <div class="form-row">                   
              <div class="form-group col-md-4">
                <label for="name">Title <span style="color:red">*</span> </label>
                <input type="text" name="title" class="form-control form-control-sm" value="{{ @$editData->title }}"> 
              </div>
              <div class="form-group col-md-2">
                <label for="name">Sort Order <span style="color:red">*</span> </label>
                <input type="number" name="sort" class="form-control form-control-sm" value="{{ @$editData->sort }}" required> 
              </div>
              <div class="form-group col-sm-3">
                <label>Image <span style="color:red;">(500px X 500px)</span></label>
                <input type="file" name="image" id="image" class="form-control form-control-sm">
              </div>
              <div class="form-group col-sm-2" style="z-index: 100;">
                <img id="showImage" src="{{(!empty($editData->image))?url('public/upload/promotion_images/'.$editData->image):url('public/upload/no_image.png')}}" style="width: 150px; height: 150px" class="form-control">
              </div>
              <div class="form-group col-md-3">
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
      ignore:[],
      rules: {          
        title: {
          required: true,
        }, 
        sort: {
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

<script>
  CKEDITOR.replace( 'editor1' );
</script>
@endsection