@extends('backend.layouts.master')
@section('content')
<script src="https://ckeditor.com"></script>

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          @if(isset($editData))
            Article Update
          @else
            Article Add
          @endif
          <a href="{{ route('doctor-profile.news.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Article List</i></a>
        </h3>
      </div>

      <form role="form" action="{{(@$editData)?route('doctor-profile.news.update',$editData->id):route('doctor-profile.news.store')}}" method="POST" enctype="multipart/form-data" id="myForm">
        @csrf
          <div class="card-body">
            <div class="form-row">

              <!-- Title Field (Full Width) -->
              <div class="form-group col-md-12">
                <label for="title">Title <span style="color:red">*</span> </label>
                <input type="text" name="title" id="title" class="form-control form-control-sm" value="{{ old('title', @$editData->title) }}" placeholder="Enter Title"> 
              </div>
              
              <!-- Date Field (3 Columns) -->
              <div class="form-group col-md-3">
                <label for="date">Date <span style="color:red">*</span></label>
                <input type="text" name="date" id="date" class="form-control form-control-sm singledatepicker" value="{{ old('date', @$editData->date) }}" autocomplete="off" placeholder="DD-MM-YYYY">
              </div>
              
              <!-- Image Upload Field (4 Columns) -->
              <div class="form-group col-md-4">
                <label for="image">Image <span style="color:red;">(700px X 500px)</span></label>
                <input type="file" name="image" id="image" class="form-control form-control-sm">
              </div>
              
              <!-- Image Preview Field (5 Columns - Total 3+4+5=12 Columns completed) -->
              <div class="form-group col-md-5" style="z-index: 100;">
                <label>Image Preview</label>
                <div>
                  <img id="showImage" src="{{(!empty($editData->image)) ? url('uploads/news_images/'.$editData->image) : url('uploads/no_image.png')}}" style="width: 120px; height: 80px; object-fit: cover; border:1px solid #ddd; padding: 2px; border-radius: 4px;" class="img-thumbnail">
                </div>
              </div>

              <!-- Description Field (Full Width) -->
              <div class="form-group col-md-12">
                <label for="description_en">Description (English) <span style="color:red;">*</span></label>
                <textarea name="description_en" id="description_en" class="form-control" rows="5">{{ old('description_en', @$editData->description_en) }}</textarea>
              </div>

              <!-- Meta Title -->
              <div class="form-group col-md-12">
                <label for="meta_title">Meta Title <span style="color:red;">*</span></label>
                <input type="text" name="meta_title" id="meta_title" class="form-control form-control-sm" value="{{ old('meta_title', @$editData->meta_title) }}" placeholder="Enter Meta Title">
              </div>

              <!-- Meta Description -->
              <div class="form-group col-md-12">
                <label for="meta_description">Meta Description <span style="color:red;">*</span></label>
                <textarea name="meta_description" id="meta_description" class="form-control" rows="4" placeholder="Enter Meta Description">{{ old('meta_description', @$editData->meta_description) }}</textarea>
              </div>

              <!-- Meta Keyword -->
              <div class="form-group col-md-12">
                <label for="meta_keyword">Meta Keyword <span style="color:red;">*</span></label>
                <textarea name="meta_keyword" id="meta_keyword" class="form-control" rows="4" placeholder="Enter Meta Keywords">{{ old('meta_keyword', @$editData->meta_keyword) }}</textarea>
              </div>
              
              <!-- Submit Button -->
              <div class="form-group col-md-12" style="padding-top:10px;">
                <button type="submit" class="btn btn-primary btn-sm">@if(isset($editData)) Update @else Submit @endif</button>
              </div>
            </div>
          </div>
      </form>            

    </div>
  </div>

<!-- CKEditor Setup -->
<script type="text/javascript">
  $(document).ready(function(){
    var editor2 = CKEDITOR.replace('description_en');
    CKFinder.setupCKEditor(editor2, '/ckfinder/');
    
    editor2.on('change', function() {
        editor2.updateElement();
        $('#description_en').valid();
    });
  });
</script>

<!-- jQuery Validation Script -->
<script type="text/javascript">
    $(document).ready(function () {
      // Live Image Preview Function
      $('#image').change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
          $('#showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
      });

      $('textarea[name="description_en"]').each(function(){
          $(this).val($(this).val().trim());
      });

      $('#myForm').validate({
        ignore : [],
        debug : false,
        rules: {
          title: {
            required: true,
          },
          date: {
            required: true,
          },
          description_en: {
            required: true,
          },
          meta_title: {
            required: true,
          },
          meta_description: {
            required: true,
          },
          meta_keyword: {
            required: true,
          }
        },
        messages: {
          title: {
            required: "Please enter the title",
          },
          date: {
            required: "Please select the date",
          },
          description_en: {
            required: "Please enter the description",
          },
          meta_title: {
            required: "Please enter the meta title",
          },
          meta_description: {
            required: "Please enter the meta description",
          },
          meta_keyword: {
            required: "Please enter the meta keywords",
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
