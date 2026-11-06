@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>
          @if(@$editData)
          Update Legal Detail
          @else
          Add Legal Detail
          @endif 
          <a class="btn btn-sm btn-success float-right" href="{{route('legal-information-details.view')}}"><i class="fa fa-list"></i> Legal Details List</a></h5>
      </div>

      <!-- Form Start-->
        <form method="post" action="{{!empty($editData->id) ? route('legal-information-details.update',$editData->id) : route('legal-information-details.store') }}" id="myForm">
          {{csrf_field()}}
          <div class="card-body">
            <div class="show_module_more_event">
              <div class="form-row">

                <!-- Main Legal Information Dropdown -->
                <div class="form-group col-md-6">
                  <label class="control-label">Select Main Legal Title <span style="color:red;">*</span></label>
                  <select name="legal_information_id" id="legal_information_id" class="form-control form-control-sm">
                    <option value="">Select Main Title</option>
                    @foreach($legalInformations as $legal)
                      <option value="{{ $legal->id }}" {{ (@$editData->legal_information_id == $legal->id) ? 'selected' : '' }}>{{ $legal->title_en }}</option>
                    @endforeach
                  </select>
                </div>

                <!-- Serial Number -->
                <div class="form-group col-md-6">
                  <label class="control-label">Serial Number</label>
                  <input type="number" name="serial" id="serial" class="form-control form-control-sm" value="{{@$editData->serial}}" placeholder="Enter Serial (e.g. 1, 2, 3)">
                </div>

                <!-- Title Bengali -->
                <div class="form-group col-md-6">
                  <label class="control-label">Title (Bengali) <span style="color:red;">*</span></label>
                  <input type="text" name="title_bn" id="title_bn" class="form-control form-control-sm" value="{{@$editData->title_bn}}" placeholder="Enter Bengali Title">
                </div>

                <!-- Title English -->
                <div class="form-group col-md-6">
                  <label class="control-label">Title (English) <span style="color:red;">*</span></label>
                  <input type="text" name="title_en" id="title_en" class="form-control form-control-sm" value="{{@$editData->title_en}}" placeholder="Enter English Title">
                </div>

                <!-- Description English with CKEditor -->
                <div class="form-group col-md-12">
                  <label class="control-label">Description (English) <span style="color:red;">*</span></label>
                  <textarea name="description_en" id="description_en" class="form-control" rows="5" placeholder="Enter English Description">{{@$editData->description_en}}</textarea>
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
          legal_information_id: {
            required: true,
          },
          title_bn: {
            required: true,
          },
          title_en: {
            required: true,
          },
          description_en: {
            required: true,
          }
        },
        messages: {
          legal_information_id: {
            required: "Please select the main legal title",
          },
          title_bn: {
            required: "Please enter the title in Bengali",
          },
          title_en: {
            required: "Please enter the title in English",
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
