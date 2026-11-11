@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
        @if(isset($editData))
        Update Legal Information
        @else
        Add Legal Information
        @endif
        <a class="btn btn-success float-right btn-sm custom_btn" href="{{route('legal-information.view')}}"><i class="fa fa-list"></i> Legal Info List</a>
       </h3>
      </div>

      <div class="card-body">
        <form method="post" action="{{(@$editData)?route('legal-information.update',$editData->id):route('legal-information.store')}}" id="myForm">
          @csrf
          <div class="form-row">
            
            <!-- Title Field (Max 191) -->
            <div class="form-group col-md-12">
              <label>Title <span style="color:red;">*</span></label>
              <input type="text" name="title_en" id="title_en" class="form-control form-control-sm" value="{{ old('title_en', @$editData->title_en) }}" placeholder="Enter Title" maxlength="191">
            </div>
            
            <!-- Subtitle Field (Max 100 ক্যারেক্টার লক করা হয়েছে) -->
            <div class="form-group col-md-12">
              <label>Subtitle <span style="color:red;">*</span></label>
              <input type="text" name="description_en" id="description_en" class="form-control form-control-sm" value="{{ old('description_en', @$editData->description_en) }}" placeholder="Enter Subtitle" maxlength="100">
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

            <div class="form-group col-md-3" style="padding-top:10px;">
              <button type="submit" class="btn btn-primary btn-sm">{{(@$editData)?"Update":"Submit"}}</button>
            </div>
          </div>
        </form>
      </div><!-- /.card-body -->

    </div>
  </div>

<script type="text/javascript">
    $(document).ready(function () {
      $('#myForm').validate({
        rules: {
          title_en: {
            required: true,
            maxlength: 191
          },
          description_en: {
            required: true,
            maxlength: 100
          },
          meta_title: {
            required: true
          },
          meta_description: {
            required: true
          },
          meta_keyword: {
            required: true
          }
        },
        messages: {
          title_en: {
            required: "Please enter the title",
            maxlength: "Title cannot be longer than 191 characters"
          },
          description_en: {
            required: "Please enter the subtitle",
            maxlength: "Subtitle cannot be longer than 100 characters"
          },
          meta_title: {
            required: "Please enter the meta title"
          },
          meta_description: {
            required: "Please enter the meta description"
          },
          meta_keyword: {
            required: "Please enter the meta keywords"
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
