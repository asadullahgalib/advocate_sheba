@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">{{ isset($editData) ? 'Edit Add' : 'Add Add' }}
          <a class="btn btn-success float-right btn-sm" href="{{route('adds.view')}}"><i class="fa fa-list"></i> Adds List</a>
        </h3>
      </div>

      <div class="card-body">
        <form method="post" action="{{ isset($editData) ? route('adds.update', $editData->id) : route('adds.store') }}" id="myForm" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="add_position_id">Add Position</label>
              <select name="add_position_id" id="add_position_id" class="form-control">
                <option value="">Select Position</option>
                @foreach($positions as $position)
                  <option value="{{$position->id}}" {{ (isset($editData) && $editData->add_position_id == $position->id) ? 'selected' : '' }}>{{$position->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="title">Title</label>
              <input type="text" name="title" id="title" class="form-control" value="{{ isset($editData) ? $editData->title : old('title') }}" placeholder="Write title">
              <font style="color: red;">{{ ($errors->has('title')) ? $errors->first('title') : '' }}</font>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-8">
              <label for="link">Link</label>
              <input type="text" name="link" id="link" class="form-control" value="{{ isset($editData) ? $editData->link : old('link') }}" placeholder="https://example.com">
            </div>
            <div class="form-group col-md-4">
              <label for="serial">Serial</label>
              <input type="number" name="serial" id="serial" class="form-control" value="{{ isset($editData) ? $editData->serial : old('serial') }}" placeholder="1">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-sm-4">
              <label for="image">Image <span style="color: red;">(Size:300px X 300px)</span></label>
              <input type="file" name="image" class="form-control" id="image">
              <font style="color: red;">{{ ($errors->has('image')) ? $errors->first('image') : '' }}</font>
            </div>
            <div class="form-group col-sm-2">
              <img id="showImage" src="{{ (isset($editData) && $editData->image) ? url('uploads/adds_images/'.$editData->image) : url('uploads/no_image.png') }}" style="width: 100px;height: 100px;object-fit: cover;border:1px solid #000;">
            </div>
            <div class="form-group col-sm-6" style="padding-top: 30px;">
              <input type="submit" value="{{ isset($editData) ? 'Update' : 'Submit' }}" class="btn btn-primary">
            </div>
          </div>
        </form>
      </div><!-- /.card-body -->

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