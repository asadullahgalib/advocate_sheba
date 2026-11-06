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
              <input type="text" name="title_en" id="title_en" class="form-control form-control-sm" value="{{@$editData->title_en}}" placeholder="Enter Title" maxlength="191">
            </div>
            
            <!-- Subtitle Field (Max 100 ক্যারেক্টার লক করা হয়েছে) -->
            <div class="form-group col-md-12">
              <label>Subtitle <span style="color:red;">*</span></label>
              <input type="text" name="description_en" id="description_en" class="form-control form-control-sm" value="{{@$editData->description_en}}" placeholder="Enter Subtitle" maxlength="100">
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
    $(document).ready(function () {
      $('#myForm').validate({
        rules: {
          title_en: {
            required: true,
            maxlength: 191
          },
          description_en: {
            required: true,
            maxlength: 100 // ১০০ ক্যারেক্টার লিমিট
          }
        },
        messages: {
          title_en: {
            required: "Please enter the title",
            maxlength: "Title cannot be longer than 191 characters"
          },
          description_en: {
            required: "Please enter the subtitle",
            maxlength: "Subtitle cannot be longer than 100 characters" // এরর মেসেজ
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
