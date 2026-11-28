@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>
          @if(@$editData)
          Update Practice Area
          @else
          Add Practice Area
          @endif
          <a class="btn btn-sm btn-success float-right" href="{{route('practice-area.view')}}"><i class="fa fa-list"></i> Practice Area List</a></h5>
      </div>

      <!-- Form Start-->
      <form method="post" action="{{!empty($editData->id) ? route('practice-area.update',$editData->id) : route('practice-area.store') }}" id="myForm" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="card-body">
          <div class="show_module_more_event">
            <div class="form-row">

              <!-- Name -->
              <div class="form-group col-md-6">
                <label class="control-label" for="name">Practice Area Name <span style="color:red;">*</span></label>
                <input type="text" name="name" id="name" class="form-control form-control-sm" value="{{ old('name', @$editData->name) }}" placeholder="Enter Practice Area Name">
                <font style="color: red">{{ ($errors->has('name')) ? $errors->first('name') : '' }}</font>
              </div>

              <!-- Image -->
              <div class="form-group col-md-4">
                <label class="control-label" for="image">Image <span style="color:red;">* (500px X 500px, Max 2MB)</span></label>
                <input type="file" name="image" id="image" class="form-control form-control-sm" accept="image/jpeg,image/png,image/webp">
                <font style="color: red">{{ ($errors->has('image')) ? $errors->first('image') : '' }}</font>
              </div>

              <!-- Image Preview -->
              <div class="form-group col-md-2" style="z-index: 100;">
                <img id="showImage" src="{{ (!empty($editData->image)) ? url('uploads/practice_images/'.$editData->image) : url('uploads/no_image.png') }}" style="width: 100px; height: 100px; object-fit: cover; border:1px solid #000;" class="form-control">
              </div>

              <!-- Description with CKEditor -->
              <div class="form-group col-md-12">
                <label class="control-label" for="description">Description <span style="color:red;">*</span></label>
                <textarea name="description" id="description" class="form-control" rows="5" placeholder="Enter Description">{{ old('description', @$editData->description) }}</textarea>
                <font style="color: red">{{ ($errors->has('description')) ? $errors->first('description') : '' }}</font>
              </div>

            </div>
          </div>

          <button type="submit" id="submitBtn" class="btn btn-success btn-sm">{{(@$editData) ? 'Update' : 'Submit'}}</button>
        </div>
      </form>
      <!--Form End-->
    </div>
  </div>

<!-- CKEditor Script -->
<script type="text/javascript">
  $(document).ready(function(){
    var editorIds = ['description'];

    $.each(editorIds, function(index, id) {
        if(document.getElementById(id)) {
            var editor = CKEDITOR.replace(id);
            if (typeof CKFinder !== 'undefined') {
                CKFinder.setupCKEditor(editor, '/ckfinder/');
            }

            editor.on('change', function() {
                editor.updateElement();
                $('#' + id).valid();
            });
        }
    });

    // Submit চাপার সাথে সাথে CKEditor এর লেখা textarea তে পাঠিয়ে দেবে (validation এর আগে)
    $('#submitBtn').on('click', function () {
        if (window.CKEDITOR) {
            for (var name in CKEDITOR.instances) {
                CKEDITOR.instances[name].updateElement();
            }
        }
    });
  });
</script>

<!-- Live Image Preview -->
<script type="text/javascript">
  $(document).ready(function () {
    $('#image').change(function(e){
      var file = e.target.files[0];
      if (!file) { return; }
      var reader = new FileReader();
      reader.onload = function(ev){
        $('#showImage').attr('src', ev.target.result);
      }
      reader.readAsDataURL(file);
    });
  });
</script>

<!-- jQuery Validation Script -->
<script type="text/javascript">
    var hasOldImage = {{ !empty($editData->image) ? 'true' : 'false' }};

    $(document).ready(function () {
      $('#myForm').validate({
        ignore : [],
        debug : false,
        rules: {
          name: { required: true },
          image: {
            required: function () { return !hasOldImage; }
          },
          description: { required: true }
        },
        messages: {
          name: { required: "Please enter the practice area name" },
          image: { required: "Please select an image" },
          description: { required: "Please enter the description" }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          error.css('display', 'block');
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