@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          @if(isset($editData))
            Slider Update
          @else
            Slider Add
          @endif
          <a href="{{ route('human-resource.hrm.slider.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Slider List</i></a>
        </h3>
      </div>

      <form role="form" action="{{(@$editData)?route('human-resource.hrm.slider.update',$editData->id):route('human-resource.hrm.slider.store')}}" method="POST" enctype="multipart/form-data" id="MyForm">
        @csrf
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-sm-3">
                <label>Image <span style="color:red;">(1280px X 400px)</span></label>
                <input type="file" name="image" id="image" class="form-control form-control-sm">
              </div>
              <div class="form-group col-sm-3" style="z-index: 100;">
                <img id="showImage" src="{{(!empty($editData->image))?url('uploads/slider_images/'.$editData->image):url('uploads/no_image.png')}}" style="width: 150px; height: 150px" class="form-control">
              </div>
              <div class="form-group col-md-6" style="padding-top:30px;">
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