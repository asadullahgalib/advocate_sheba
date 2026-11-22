@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>
          @if(@$editData)
          Update Location Meta
          @else
          Add Location Meta
          @endif
          <a class="btn btn-sm btn-success float-right" href="{{route('location-meta.view')}}"><i class="fa fa-list"></i> Location Meta List</a></h5>
      </div>

      <!-- Form Start-->
        <form method="post" action="{{!empty($editData->id) ? route('location-meta.update',$editData->id) : route('location-meta.store') }}" id="myForm">
          {{csrf_field()}}
          <div class="card-body">
            <div class="show_module_more_event">
              <div class="form-row">

                <!-- Meta Title -->
                <div class="form-group col-md-6">
                  <label class="control-label">Meta Title <span style="color:red;">*</span></label>
                  <input type="text" name="meta_title" id="meta_title" class="form-control form-control-sm" value="{{@$editData->meta_title}}" placeholder="Enter Meta Title">
                </div>

                <!-- Status -->
                <div class="form-group col-md-6">
                  <label class="control-label">Status <span style="color:red;">*</span></label>
                  <select name="status" id="status" class="form-control form-control-sm">
                    <option value="1" {{ @$editData->status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ (@$editData && @$editData->status == 0) ? 'selected' : '' }}>Inactive</option>
                  </select>
                </div>

                <!-- Meta Keyword -->
                <div class="form-group col-md-12">
                  <label class="control-label">Meta Keyword <span style="color:red;">*</span></label>
                  <textarea name="meta_keyword" id="meta_keyword" class="form-control" rows="4" placeholder="Enter Meta Keywords">{{@$editData->meta_keyword}}</textarea>
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

<!-- jQuery Validation Script -->
<script type="text/javascript">
    $(document).ready(function () {
      $('#myForm').validate({
        ignore : [],
        debug : false,
        rules: {
          meta_title: {
            required: true,
          },
          meta_keyword: {
            required: true,
          },
          meta_description: {
            required: true,
          },
          status: {
            required: true,
          }
        },
        messages: {
          meta_title: {
            required: "Please enter the meta title",
          },
          meta_keyword: {
            required: "Please enter the meta keywords",
          },
          meta_description: {
            required: "Please enter the meta description",
          },
          status: {
            required: "Please select the status",
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