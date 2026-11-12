@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>
          @if(@$editData)
          Update Legal Professional Detail
          @else
          Add Legal Professional Detail
          @endif 
          <a class="btn btn-sm btn-success float-right" href="{{route('legal-professional-details.view')}}"><i class="fa fa-list"></i> Legal Professional Details List</a></h5>
      </div>

      <!-- Form Start-->
        <form method="post" action="{{!empty($editData->id) ? route('legal-professional-details.update',$editData->id) : route('legal-professional-details.store') }}" id="myForm">
          {{csrf_field()}}
          <div class="card-body">

            <div class="show_module_more_event">
              <div class="form-row">

                <!-- Designation Dropdown -->
                <div class="form-group col-md-6">
                  <label class="control-label" for="designation_id">Select Designation <span style="color:red;">*</span></label>
                  <select name="designation_id" id="designation_id" class="form-control form-control-sm">
                    <option value="">Select Designation</option>
                    @foreach($designations as $designation)
                      <option value="{{ $designation->id }}" {{ (old('designation_id', @$editData->designation_id) == $designation->id) ? 'selected' : '' }}>{{ $designation->name }}</option>
                    @endforeach
                  </select>
                </div>

                <!-- Sort -->
                <div class="form-group col-md-6">
                  <label class="control-label" for="sort">Sort <span style="color:red;">*</span></label>
                  <input type="number" name="sort" id="sort" class="form-control form-control-sm" value="{{ old('sort', @$editData->sort) }}" placeholder="Enter Sort (e.g. 1, 2, 3)">
                </div>

                <!-- Title -->
                <div class="form-group col-md-6">
                  <label class="control-label" for="title">Title <span style="color:red;">*</span></label>
                  <input type="text" name="title" id="title" class="form-control form-control-sm" value="{{ old('title', @$editData->title) }}" placeholder="Enter Title">
                </div>

                <!-- Icon -->
                <div class="form-group col-md-6">
                  <label class="control-label" for="icon">Icon <span style="color:red;">*</span></label>
                  <input type="text" name="icon" id="icon" class="form-control form-control-sm" value="{{ old('icon', @$editData->icon) }}" placeholder="Enter Icon class (e.g. fa fa-gavel)">
                </div>

                <!-- Sub Title -->
                <div class="form-group col-md-12">
                  <label class="control-label" for="sub_title">Sub Title <span style="color:red;">*</span></label>
                  <textarea name="sub_title" id="sub_title" class="form-control" rows="3" placeholder="Enter Sub Title">{{ old('sub_title', @$editData->sub_title) }}</textarea>
                </div>

                <!-- Description English with CKEditor -->
                <div class="form-group col-md-12">
                  <label class="control-label" for="description_en">Description (English) <span style="color:red;">*</span></label>
                  <textarea name="description_en" id="description_en" class="form-control" rows="5" placeholder="Enter English Description">{{ old('description_en', @$editData->description_en) }}</textarea>
                </div>

                {{--
                <!-- Meta Title -->
                <div class="form-group col-md-12">
                  <label class="control-label" for="meta_title">Meta Title <span style="color:red;">*</span></label>
                  <input type="text" name="meta_title" id="meta_title" class="form-control form-control-sm" value="{{ old('meta_title', @$editData->meta_title) }}" placeholder="Enter Meta Title">
                </div>

                <!-- Meta Description -->
                <div class="form-group col-md-6">
                  <label class="control-label" for="meta_description">Meta Description <span style="color:red;">*</span></label>
                  <textarea name="meta_description" id="meta_description" class="form-control" rows="3" placeholder="Enter Meta Description">{{ old('meta_description', @$editData->meta_description) }}</textarea>
                </div>

                <!-- Meta Keyword -->
                <div class="form-group col-md-6">
                  <label class="control-label" for="meta_keyword">Meta Keyword <span style="color:red;">*</span></label>
                  <textarea name="meta_keyword" id="meta_keyword" class="form-control" rows="3" placeholder="Enter Meta Keyword (comma separated)">{{ old('meta_keyword', @$editData->meta_keyword) }}</textarea>
                </div>
                --}}

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
          designation_id: {
            required: true,
          },
          sort: {
            required: true,
            number: true,
          },
          title: {
            required: true,
          },
          icon: {
            required: true,
          },
          sub_title: {
            required: true,
          },
          description_en: {
            required: true,
          }
          // meta_title: {
          //   required: true,
          // },
          // meta_description: {
          //   required: true,
          // },
          // meta_keyword: {
          //   required: true,
          // }
        },
        messages: {
          designation_id: {
            required: "Please select the designation",
          },
          sort: {
            required: "Please enter the sort number",
            number: "Sort must be a number",
          },
          title: {
            required: "Please enter the title",
          },
          icon: {
            required: "Please enter the icon",
          },
          sub_title: {
            required: "Please enter the sub title",
          },
          description_en: {
            required: "Please enter the description",
          }
          // meta_title: {
          //   required: "Please enter the meta title",
          // },
          // meta_description: {
          //   required: "Please enter the meta description",
          // },
          // meta_keyword: {
          //   required: "Please enter the meta keyword",
          // }
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