@extends('backend.layouts.master')
@section('content')

<div class="col-md-12" style="padding-top:40px;">

    <div class="card">

        <div class="card-header">

            <h3 class="card-title">

                @if(isset($editData))
                    Update Video Gallery
                @else
                    Add Video Gallery
                @endif

                <a class="btn btn-success float-right btn-sm custom_btn"
                   href="{{ route('doctor-profile.video.view') }}">

                    <i class="fa fa-list"></i> Video List

                </a>

            </h3>

        </div>


        <div class="card-body">

            <form method="post"
                  action="{{ isset($editData) ? route('doctor-profile.video.update', $editData->id) : route('doctor-profile.video.store') }}"
                  id="myForm"
                  enctype="multipart/form-data">

                @csrf

                <div class="form-row">

                    <!-- Admin / Developer এর জন্য Employee Selection Dropdown -->
                    @if(in_array(Auth::user()->user_category, ['admin', 'Developer']))
                    <!-- <div class="form-group col-md-12">

                        <label>
                            Select Doctor/Nurse
                            <span style="color:red;">*</span>
                        </label>

                        <select name="user_id" id="user_id" class="form-control form-control-sm">
                            <option value="">Select Employee</option>
                            @foreach($employees as $employee)
                                <option value="{{ $employee->id }}" {{ old('user_id', @$editData->user_id) == $employee->id ? 'selected' : '' }}>
                                    {{ $employee->name }} ({{ ucfirst($employee->user_category) }})
                                </option>
                            @endforeach
                        </select>

                    </div> -->
                    @endif

                    <!-- Video Title -->
                    <div class="form-group col-md-12">

                        <label>
                            Title (English)
                        </label>

                        <input
                            type="text"
                            name="title"
                            id="title"
                            class="form-control form-control-sm"
                            value="{{ old('title', @$editData->title) }}"
                            placeholder="Enter Video Title"
                        >

                    </div>

                    <!-- Video Link -->
                    <div class="form-group col-md-12">

                        <label>
                            Video Link
                            <span style="color:red;">*</span>
                        </label>

                        <input
                            type="text"
                            name="link"
                            id="link"
                            class="form-control form-control-sm"
                            value="{{ old('link', @$editData->link) }}"
                            placeholder="Enter Video Link (e.g. YouTube URL)"
                        >

                    </div>

                    <!-- Video Description -->
                    <div class="form-group col-md-12">

                        <label for="description_en">
                            Description (English)
                        </label>

                        <textarea
                            name="description_en"
                            id="description_en"
                            class="form-control"
                            rows="5"
                        >{{ old('description_en', @$editData->description_en) }}</textarea>

                    </div>

                    <!-- Image Input Field -->
                    <div class="form-group col-sm-4">
                        <label>Image <span style="color:red;">(500px X 300px)</span></label>
                        <input type="file" name="image" id="image" class="form-control form-control-sm" accept="image/*">
                    </div>
              
                    <!-- Image Preview Area -->
                    <div class="form-group col-sm-2" style="z-index: 100;">
                        <img id="showImage" src="{{ (!empty($editData->image)) ? url('uploads/video_images/'.$editData->image) : url('uploads/no_image.png') }}" style="width: 100px; height: 80px; object-fit: cover; border:1px solid #000;" class="form-control">
                    </div>
              
                    <!-- Submit Button -->
                    <div class="form-group col-md-3" style="padding-top:30px;">
                        <button type="submit" class="btn btn-primary btn-sm">
                            @if(isset($editData)) Update @else Submit @endif
                        </button>
                    </div>

                </div>

            </form>

        </div>

    </div>

</div>


<!-- CKEditor Script -->
<script type="text/javascript">

    $(document).ready(function(){

        var editor2 = CKEDITOR.replace('description_en');

        CKFinder.setupCKEditor(editor2, '/ckfinder/');

        editor2.on('change', function() {
            editor2.updateElement();
        });

    });

</script>


<!-- Image Live Preview & Form Validation Scripts -->
<script type="text/javascript">
  $(document).ready(function () {  
    
    // ফাইল সিলেক্ট করার সাথে সাথে থাম্বনেইল লাইভ চেঞ্জ হওয়ার ফাংশন
    $('#image').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#showImage').attr('src', e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });

    // ফর্ম ভ্যালিডেশন 
    $('#myForm').validate({
      ignore: [],
      rules: {
        @if(in_array(Auth::user()->user_category, ['admin', 'Developer']))
        user_id: {
          required: true,
        },           
        @endif
        link: {
          required: true,
        }    
      },
      messages: { 
        @if(in_array(Auth::user()->user_category, ['admin', 'Developer']))
        user_id: {
          required: "Please select doctor or nurse name",
        },
        @endif
        link: {
          required: "Please enter the video link",
        }
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
