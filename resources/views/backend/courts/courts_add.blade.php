@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>
          @if(@$editData)
          Update Court
          @else
          Add Court
          @endif 
          <a class="btn btn-sm btn-success float-right" href="{{route('courts.view')}}"><i class="fa fa-list"></i> Courts List</a></h5>
      </div>

      <!-- Form Start-->
        <form method="post" action="{{!empty($editData->id) ? route('courts.update',$editData->id) : route('courts.store') }}" id="myForm">
          {{csrf_field()}}
          <div class="card-body">
            <div class="show_module_more_event">
              <div class="form-row">

                <!-- Court Name -->
                <div class="form-group col-md-6">
                  <label class="control-label">Court Name <span style="color:red;">*</span></label>
                  <input type="text" name="name" id="name" class="form-control form-control-sm" value="{{@$editData->name}}" placeholder="Enter Court Name">
                </div>

                <!-- Court Icon -->
                <div class="form-group col-md-6">
                  <label class="control-label">Icon <span style="color:red;">*</span></label>
                  <input type="text" name="icon" id="icon" class="form-control form-control-sm" value="{{@$editData->icon}}" placeholder="e.g. fas fa-gavel (Font Awesome class)">
                </div>

                <!-- Description English with CKEditor -->
                <div class="form-group col-md-12">
                  <label class="control-label">Description (English) <span style="color:red;">*</span></label>
                  <textarea name="description_en" id="description_en" class="form-control" rows="5" placeholder="Enter English Description">{{@$editData->description_en}}</textarea>
                </div>

                <!-- Meta Title -->
                <div class="form-group col-md-6">
                  <label class="control-label">Meta Title <span style="color:red;">*</span></label>
                  <input type="text" name="meta_title" id="meta_title" class="form-control form-control-sm" value="{{@$editData->meta_title}}" placeholder="Enter Meta Title">
                </div>

                <!-- Meta Keyword -->
                <div class="form-group col-md-6">
                  <label class="control-label">Meta Keyword <span style="color:red;">*</span></label>
                  <input type="text" name="meta_keyword" id="meta_keyword" class="form-control form-control-sm" value="{{@$editData->meta_keyword}}" placeholder="Enter Meta Keywords">
                </div>

                <!-- Meta Description -->
                <div class="form-group col-md-12">
                  <label class="control-label">Meta Description <span style="color:red;">*</span></label>
                  <textarea name="meta_description" id="meta_description" class="form-control" rows="4" placeholder="Enter Meta Description">{{@$editData->meta_description}}</textarea>
                </div>

              </div>
            </div>
              
            <button type="submit" class="btn btn-success btn-sm">{{(@$editData) ? 'Update' : 'Submit'}}</button>
          </div>
        </form>
        <!--Form End-->

    </div>
  </div>

<!-- CKEditor Script -->
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
      $('textarea[name="description_en"]').each(function(){
          $(this).val($(this).val().trim());
      });

      $('#myForm').validate({
        ignore : [],
        debug : false,
        rules: {
          name: {
            required: true,
          },
          icon: {
            required: true,
          },
          meta_title: {
            required: true,
          },
          meta_keyword: {
            required: true,
          },
          meta_description: {
            required: true,
          },
          description_en: {
            required: true,
          }
        },
        messages: {
          name: {
            required: "Please enter the court name",
          },
          icon: {
            required: "Please enter the icon",
          },
          meta_title: {
            required: "Please enter the meta title",
          },
          meta_keyword: {
            required: "Please enter the meta keywords",
          },
          meta_description: {
            required: "Please enter the meta description",
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