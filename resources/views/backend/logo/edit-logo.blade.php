@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3>Edit Logo
          <a class="btn btn-success float-right btn-sm custom_btn" href="{{route('site-setting.contents.logo.view')}}"><i class="fa fa-list"></i> Logo List</a>
        </h3>
      </div>

      <div class="card-body">
        <form method="post" action="{{route('site-setting.contents.logo.update',$editData->id)}}" id="myForm" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="image">Image <span style="color: red;">(Size:220px X 75px)</span></label>
              <input type="file" name="image" class="form-control" id="image">
            </div>
            <div class="form-group col-md-3">
              <img id="showImage" src="{{(!empty($editData->image))?url('uploads/logo_images/'.$editData->image):url('uploads/no_image.png')}}" style="width: 100%;border:1px solid #000;">
            </div>
            <div class="form-group col-md-4">
              <label for="image">Dashboard/Login <span style="color: red;">(Size:300px X 300px)</span></label>
              <input type="file" name="image2" class="form-control" id="image2">
            </div>
            <div class="form-group col-md-3">
              <img id="showImage2" src="{{(!empty($editData->image2))?url('uploads/dashboard_logo_images/'.$editData->image2):url('uploads/no_image.png')}}" style="width: 100%;border:1px solid #000;">
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
  $(document).ready(function(){
    $('#image2').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#showImage2').attr('src',e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });
  });
</script>

@endsection