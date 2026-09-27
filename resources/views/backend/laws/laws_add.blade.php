@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
        @if(isset($editData))
        Update Law
        @else
        Add Law
        @endif
        <a class="btn btn-success float-right btn-sm custom_btn" href="{{route('laws.view')}}"><i class="fa fa-list"></i> Law List</a>
       </h3>
      </div>

      <div class="card-body">
        <form method="post" action="{{(@$editData)?route('laws.update',$editData->id):route('laws.store')}}" id="myForm">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-12">
              <label>Title (English) <span style="color:red;">*</span></label>
              <input type="text" name="title_en" id="title_en" class="form-control form-control-sm" value="{{@$editData->title_en}}" placeholder="Enter Title">
            </div>
            
            <div class="form-group col-md-12">
              <label for="description_en">Description (English) <span style="color:red;">*</span></label>
              <textarea name="description_en" id="description_en" class="form-control" rows="5">{{@$editData->description_en}}</textarea>
            </div>

            <div class="form-group col-md-3">
              <button type="submit" class="btn btn-primary btn-sm">{{(@$editData)?"Update":"Submit"}}</button>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>

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

<script type="text/javascript">
    $(document).ready(function () {
      $('textarea[name="description_en"]').each(function(){
          $(this).val($(this).val().trim());
      });

      $('#myForm').validate({
        ignore : [],
        debug : false,
        rules: {
          title_en: {
            required: true,
          },
          description_en: {
            required: true,
          }
        },
        messages: {
          title_en: {
            required: "Please enter the title",
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
