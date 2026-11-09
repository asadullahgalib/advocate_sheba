@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          @if(isset($editData))
            Add Update
          @else
            Add Create
          @endif
          <a href="{{ route('adds.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Adds List</i></a>
        </h3>
      </div>

      <form role="form" action="{{ isset($editData) ? route('adds.update', $editData->id) : route('adds.store') }}" method="POST" enctype="multipart/form-data" id="myForm">
        @csrf
        <div class="card-body">
          <div class="form-row">

            <div class="form-group col-md-6">
              <label for="add_position_id">Add Position</label>
              <select name="add_position_id" id="add_position_id" class="form-control form-control-sm select2">
                <option value="">Select Position</option>
                @foreach($positions as $position)
                  <option value="{{ $position->id }}" {{ (isset($editData) && $editData->add_position_id == $position->id) ? 'selected' : '' }}>{{ $position->name }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="title">Title <span style="color:red">*</span></label>
              <input type="text" name="title" id="title" class="form-control form-control-sm" value="{{ isset($editData) ? $editData->title : old('title') }}" placeholder="Write title">
              <font style="color: red;">{{ ($errors->has('title')) ? $errors->first('title') : '' }}</font>
            </div>

            <div class="form-group col-md-10">
              <label for="link">Link</label>
              <input type="text" name="link" id="link" class="form-control form-control-sm" value="{{ isset($editData) ? $editData->link : old('link') }}" placeholder="https://example.com">
            </div>

            <div class="form-group col-md-2">
              <label for="serial">Serial</label>
              <input type="number" name="serial" id="serial" class="form-control form-control-sm" value="{{ isset($editData) ? $editData->serial : old('serial') }}" placeholder="1">
            </div>

            <div class="form-group col-sm-4">
              <label for="image">Image <span style="color:red;">(1000px X 300px)</span></label>
              <input type="file" name="image" id="image" class="form-control form-control-sm">
              <font style="color: red;">{{ ($errors->has('image')) ? $errors->first('image') : '' }}</font>
            </div>

            <div class="form-group col-sm-2" style="z-index: 100;">
              <img id="showImage" src="{{ (isset($editData) && $editData->image) ? url('uploads/adds_images/'.$editData->image) : url('uploads/no_image.png') }}" style="width: 100px; height: 80px; object-fit: cover; border:1px solid #000;" class="form-control">
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