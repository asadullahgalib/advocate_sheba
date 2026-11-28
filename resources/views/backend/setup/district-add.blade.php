@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>
          @if(@$editData)
          Update District
          @else
          Add District
          @endif 
          <a class="btn btn-sm btn-success float-right" href="{{route('setup.district.view')}}"><i class="fa fa-list"></i> District List</a></h5>
      </div>

      <!-- Form Start-->
        <form method="post" action="{{!empty($editData->id) ? route('setup.district.update',$editData->id) : route('setup.district.store')}}" id="myForm" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="card-body">
            <div class="show_module_more_event">
              <div class="form-row">

                <!-- District Name Field -->
                <div class="form-group col-md-6">
                  <label class="control-label">District Name <span style="color:red;">*</span></label>
                  <input type="text" name="name" id="name" class="form-control form-control-sm" value="{{ old('name', @$editData->name) }}" placeholder="District Name">
                  <font style="color: red">{{ ($errors->has('name')) ? $errors->first('name') : '' }}</font>
                </div>

                <!-- Image Input Field with Red Size Notice -->
                <div class="form-group col-md-4">
                  <label for="image">Image <span style="color:red;">(200px X 90px)</span></label>
                  <input type="file" name="image" class="form-control form-control-sm" id="image">
                  <font style="color: red">{{ ($errors->has('image')) ? $errors->first('image') : '' }}</font>
                </div>

                <!-- Image Live Preview Box -->
                <div class="form-group col-md-2" style="padding-top: 10px;">
                  <img id="showImage" src="{{(!empty($editData->image)) ? url('uploads/district_images/'.$editData->image) : url('uploads/no_image.png')}}" style="width: 100px; height: 80px; border:1px solid #000;">
                </div>

                <!-- Description with CKEditor -->
                <div class="form-group col-md-12">
                  <label class="control-label" for="description">Description</label>
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

    if (document.getElementById('description')) {
        var editor = CKEDITOR.replace('description');

        // CKFinder লোড না থাকলেও যেন এরর না দেয়
        if (typeof CKFinder !== 'undefined') {
            CKFinder.setupCKEditor(editor, '/ckfinder/');
        }

        editor.on('change', function() {
            editor.updateElement();
        });
    }

  });
</script>

<!-- jQuery Form Validation and Live Image Preview Script -->
<script>
    $(document).ready(function(){
      // Live Image Preview function
      $('#image').change(function(e){
        var file = e.target.files[0];
        if (!file) { return; }
        var reader = new FileReader();
        reader.onload = function(ev){
          $('#showImage').attr('src', ev.target.result);
        }
        reader.readAsDataURL(file);
      });

      // Form Validation
      $('#myForm').validate({
        ignore : [],
        errorClass:'text-danger',
        validClass:'text-success',
        rules : {
            'name' : {
                required : true,
            },
        },
        messages : {
            'name' : {
                required : 'Please enter district name',
            }
        },
        submitHandler: function (form) {
            // CKEditor এর লেখা textarea তে পাঠিয়ে নেওয়া
            if (window.CKEDITOR) {
                for (var name in CKEDITOR.instances) {
                    CKEDITOR.instances[name].updateElement();
                }
            }
            // ডাবল সাবমিট বন্ধ
            $('#submitBtn').prop('disabled', true).text('Saving...');
            form.submit();
        }
      });
    });
</script>

@endsection