@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          @if(isset($editData))
            Megazine Update
          @else
            Megazine Create
          @endif
          <a href="{{ route('megazines.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Megazine List</i></a>
        </h3>
      </div>

      <form role="form" action="{{ isset($editData) ? route('megazines.update', $editData->id) : route('megazines.store') }}" method="POST" enctype="multipart/form-data" id="myForm">
        @csrf
        <div class="card-body">
          <div class="form-row">

            <div class="form-group col-md-8">
              <label for="title">Title <span style="color:red">*</span></label>
              <input type="text" name="title" id="title" class="form-control form-control-sm" value="{{ isset($editData) ? $editData->title : old('title') }}" placeholder="Write title">
              <font style="color: red;">{{ ($errors->has('title')) ? $errors->first('title') : '' }}</font>
            </div>

            <div class="form-group col-md-4">
              <label for="serial">Serial</label>
              <input type="number" name="serial" id="serial" class="form-control form-control-sm" value="{{ isset($editData) ? $editData->serial : old('serial') }}" placeholder="1">
            </div>

            <div class="form-group col-md-12">
              <label for="link">Link</label>
              <input type="text" name="link" id="link" class="form-control form-control-sm" value="{{ isset($editData) ? $editData->link : old('link') }}" placeholder="https://example.com">
            </div>

            <div class="form-group col-sm-4">
              <label for="image">Image <span style="color:red;">(512px X 512px)</span></label>
              <input type="file" name="image" id="image" class="form-control form-control-sm">
              <font style="color: red;">{{ ($errors->has('image')) ? $errors->first('image') : '' }}</font>
            </div>

            <div class="form-group col-sm-2" style="z-index: 100;">
              <img id="showImage" src="{{ (isset($editData) && $editData->image) ? url('uploads/megazine_images/'.$editData->image) : url('uploads/no_image.png') }}" style="width: 100px; height: 80px; object-fit: cover; border:1px solid #000;" class="form-control">
            </div>

            <div class="form-group col-md-3" style="padding-top:30px;">
              <button type="submit" class="btn btn-primary btn-sm">@if(isset($editData)) Update @else Submit @endif</button>
            </div>

          </div>
        </div>
      </form>

    </div>
  </div>

  <script>
    document.getElementById('image').addEventListener('change', function(e){
      var file = e.target.files[0];
      if (file) {
        var reader = new FileReader();
        reader.onload = function(ev){
          document.getElementById('showImage').src = ev.target.result;
        };
        reader.readAsDataURL(file);
      }
    });
  </script>

@endsection