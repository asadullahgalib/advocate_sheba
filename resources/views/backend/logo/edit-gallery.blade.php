@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3>Edit Gallery
          <a class="btn btn-success float-right btn-sm" href="{{route('site-setting.contents.gallery.view')}}"><i class="fa fa-list"></i> Gallery List</a>
        </h3>
      </div>

      <div class="card-body">
        <form method="post" action="{{route('site-setting.contents.gallery.update',$editData->id)}}" id="myForm" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="image">Image <span style="color: red;">(Size:340px X 277px)</span></label>
              <input type="file" name="image" class="form-control" id="image">
            </div>
            <div class="form-group col-md-2">
              <img id="showImage" src="{{(!empty($editData->image))?url('public/upload/logo_images/'.$editData->image):url('public/upload/no_image.png')}}" style="width: 150px;height: 160px;border:1px solid #000;">
            </div>
            <div class="form-group col-md-6" style="padding-top: 30px;">
              <input type="submit" value="Update" class="btn btn-primary">
            </div>
          </div>
        </form>
      </div><!-- /.card-body -->

    </div>
  </div>

@endsection