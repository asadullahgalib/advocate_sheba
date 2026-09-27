@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
        @if(isset($editData))
        Update Why Use
        @else
        Add Why Use
        @endif
        <a class="btn btn-success float-right btn-sm custom_btn" href="{{route('web-site.seeker-recruiter.view')}}"><i class="fa fa-list"></i> Why Use List</a>
       </h3>
      </div>

      <div class="card-body">
        <form method="post" action="{{(@$editData)?route('web-site.seeker-recruiter.update',$editData->id):route('web-site.seeker-recruiter.store')}}" id="myForm" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-12">
              <label>Title <span style="color:red;">*</span></label>
              <input class="form-control form-control-sm" value="{{@$editData->title}}" readonly>
            </div>
            <div class="form-group col-md-12">
              <label for="title">Description</label>
              <textarea name="description_en" class="form-control" rows="5">{{@$editData->description_en}}</textarea>
            </div>
            <div class="form-group col-md-4">
              <label for="image">Image </label>
              <input type="file" name="image" class="form-control" id="image">
            </div>
            <div class="form-group col-md-2">
              <img id="showImage" src="{{(!empty($editData->image))?url('public/upload/why_use_images/'.$editData->image):url('public/upload/no_image.png')}}" style="width: 100px;height: 80px;border:1px solid #000;">
            </div>
            <div class="form-group col-md-3">
              <button type="submit" class="btn btn-primary btn-sm">{{(@$editData)?"Update":"Submit"}}</button>
            </div>
          </div>
        </form>
      </div><!-- /.card-body -->

    </div>
  </div>

<script type="text/javascript">
  $(document).ready(function(){
    // CKEditor for Description
    var editor2 = CKEDITOR.replace('description_en');
    CKFinder.setupCKEditor(editor2, '/ckfinder/');
  });
</script>

<script type="text/javascript">
    $(document).ready(function () {
      $('description_en').each(function(){
          $(this).val($(this).val().trim());
        }
      );
      $('description_bn').each(function(){
          $(this).val($(this).val().trim());
        }
      );

      $('#myForm').validate({
        ignore : [],
        debug : false,
        rules: {
          description_en: {
            required: true,
          },
          description_bn: {
            required: true,
          }
        },
        messages: {
          
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