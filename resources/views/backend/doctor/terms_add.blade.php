@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
        @if(isset($editData))
        Update Terms & Conditions
        @else
        Add Terms & Conditions
        @endif
        <a class="btn btn-success float-right btn-sm custom_btn" href="{{route('terms.view')}}"><i class="fa fa-list"></i> Terms List</a>
       </h3>
      </div>

      <div class="card-body">
        <form method="post" action="{{(@$editData)?route('terms.update',$editData->id):route('terms.store')}}" id="myForm">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-12">
              <label>Title <span style="color:red;">*</span></label>
              <!-- Migration array input profile column table check kore 'name' use kora holo -->
              <input type="text" name="name" id="name" class="form-control form-control-sm" value="{{@$editData->name}}" placeholder="Enter Title">
            </div>
            
            <div class="form-group col-md-12">
              <label for="description_en">Description <span style="color:red;">*</span></label>
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

<!-- CKEditor with Validation Fix -->
<script type="text/javascript">
  $(document).ready(function(){
    var editor2 = CKEDITOR.replace('description_en');
    CKFinder.setupCKEditor(editor2, '/ckfinder/');
    
    editor2.on('change', function() {
        editor2.updateElement();
        $('#description_en').valid(); // Validation triggers automatically on type
    });
  });
</script>

<!-- jQuery Validation Configuration -->
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
          description_en: {
            required: true,
          }
        },
        messages: {
          name: {
            required: "Please enter the title/name",
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
