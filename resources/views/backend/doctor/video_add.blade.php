@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          @if(isset($editData))
            Video Gallery Update
          @else
            Video Gallery Add
          @endif
          <a href="{{ route('doctor-profile.video.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Video Gallery List</i></a>
        </h3>
      </div>

      <form role="form" action="{{(@$editData)?route('doctor-profile.video.update',$editData->id):route('doctor-profile.video.store')}}" method="POST" enctype="multipart/form-data" id="MyForm">
        @csrf
          <div class="card-body">
            <div class="form-row">
              @if(@Auth::user()->user_category=='admin' || @Auth::user()->user_category=='Developer')
              <div class="form-group col-md-12">
                <label for="name">Doctor/Nurse Name <span style="color:red">*</span> </label>
                <select name="user_id" class="form-control form-control-sm select2">
                  <option value="">Select Doctor/Nurse</option>
                  @foreach($employees as $emp)
                  <option value="{{$emp->id}}" {{(@$editData->user_id==$emp->id)?"selected":""}}>{{$emp->name}} - {{@$emp['department']['name']}}</option>
                  @endforeach
                </select>
              </div>
              @endif
              <div class="form-group col-md-6">
                <label for="name">Link <span style="color:red">*</span> </label>
                <input type="text" name="link" class="form-control form-control-sm" value="{{ @$editData->link }}">
              </div>
              <div class="form-group col-sm-4">
                <label>Image <span style="color:red;">(300px X 200px)</span></label>
                <input type="file" name="image" id="image" class="form-control form-control-sm">
              </div>
              <div class="form-group col-sm-3" style="z-index: 100;">
                <img id="showImage" src="{{(!empty($editData->image))?url('public/upload/video_images/'.$editData->image):url('public/upload/no_image.png')}}" style="width: 150px; height: 150px" class="form-control">
              </div>
              <div class="form-group col-md-3" style="padding-top:30px;">
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
        user_id: {
          required: true,
        },           
        name: {
          required: true,
        },
        icon: {
          required: true,
        },
        link: {
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