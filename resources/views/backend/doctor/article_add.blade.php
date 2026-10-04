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

              <div class="form-group col-md-12">
                <label for="title">Title <span style="color:red">*</span> </label>
                <input type="text" name="title" id="title" class="form-control form-control-sm" value="{{ @$editData->title }}" placeholder="Enter Title"> 
              </div>

              <div class="form-group col-md-4">
                <label for="law_id">Select Law <span style="color:red">*</span> </label>
                <select name="law_id" id="law_id" class="form-control form-control-sm select2">
                  <option value="">Select Law</option>
                  @foreach($laws as $law)
                  <option value="{{$law->id}}" {{(@$editData->law_id==$law->id)?"selected":""}}>{{$law->title_en}}</option> 
                  @endforeach
                </select>
              </div>
              
              <div class="form-group col-md-3">
                <label for="date">Date <span style="color:red">*</span></label>
                <input type="text" name="date" id="date" class="form-control form-control-sm singledatepicker" value="{{ @$editData->date }}" autocomplete="off" placeholder="DD-MM-YYYY">
              </div>
              
              <div class="form-group col-sm-3">
                <label for="image">Image <span style="color:red;">(700px X 500px)</span></label>
                <input type="file" name="image" id="image" class="form-control form-control-sm">
              </div>
              
              <div class="form-group col-sm-2" style="z-index: 100;">
                <img id="showImage" src="{{(!empty($editData->image)) ? url('uploads/news_images/'.$editData->image) : url('uploads/no_image.png')}}" style="width: 100px; height: 80px; object-fit: cover; border:1px solid #000;" class="form-control">
              </div>
              <div class="form-group col-md-12">
                <label for="description_en">Description (English) <span style="color:red;">*</span></label>
                <textarea name="description_en" id="description_en" class="form-control" rows="5">{{@$editData->description_en}}</textarea>
              </div>
              
              <div class="form-group col-md-3" style="padding-top:30px;">
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
          law_id: {
            required: true,
          },
          title: {
            required: true,
          },
          date: {
            required: true,
          },
          description_en: {
            required: true,
          }
        },
        messages: {
          law_id: {
            required: "Please select law name",
          },
          title: {
            required: "Please enter the title",
          },
          date: {
            required: "Please select the date",
          },
          description_en: {
            required: "Please enter the description",
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
