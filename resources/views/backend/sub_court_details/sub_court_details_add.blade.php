@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>
          @if(@$editData)
          Update Sub Court Detail
          @else
          Add Sub Court Detail
          @endif 
          <a class="btn btn-sm btn-success float-right" href="{{route('sub-court-details.view')}}"><i class="fa fa-list"></i> Sub Court Details List</a></h5>
      </div>

      <!-- Form Start-->
        <form method="post" action="{{!empty($editData->id) ? route('sub-court-details.update',$editData->id) : route('sub-court-details.store') }}" id="myForm">
          {{csrf_field()}}
          <div class="card-body">
            <div class="show_module_more_event">
              <div class="form-row">

                <!-- Court Dropdown -->
                <div class="form-group col-md-6">
                  <label class="control-label">Select Court <span style="color:red;">*</span></label>
                  <select name="court_id" id="court_id" class="form-control form-control-sm">
                    <option value="">Select Court</option>
                    @foreach($courts as $court)
                      <option value="{{ $court->id }}" {{ (@$editData->court_id == $court->id) ? 'selected' : '' }}>{{ $court->name }}</option>
                    @endforeach
                  </select>
                </div>

                <!-- Sub Court Dropdown (dependent) -->
                <div class="form-group col-md-6">
                  <label class="control-label">Select Sub Court <span style="color:red;">*</span></label>
                  <select name="sub_court_id" id="sub_court_id" class="form-control form-control-sm">
                    <option value="">Select Sub Court</option>
                    @if(isset($subCourts))
                      @foreach($subCourts as $sub)
                        <option value="{{ $sub->id }}" {{ (@$editData->sub_court_id == $sub->id) ? 'selected' : '' }}>{{ $sub->name }}</option>
                      @endforeach
                    @endif
                  </select>
                </div>

                <!-- Title -->
                <div class="form-group col-md-12">
                  <label class="control-label">Title <span style="color:red;">*</span></label>
                  <input type="text" name="title" id="title" class="form-control form-control-sm" value="{{@$editData->title}}" placeholder="Enter Title">
                </div>

                <!-- Description English with CKEditor -->
                <div class="form-group col-md-12">
                  <label class="control-label">Description (English)</label>
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

<!-- Dependent Dropdown Script -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#court_id').on('change', function(){
      var court_id = $(this).val();
      var subCourtSelect = $('#sub_court_id');
      subCourtSelect.html('<option value="">Loading...</option>');

      if (court_id) {
        $.ajax({
          url: "{{ url('sub-court-details/get-sub-courts') }}/" + court_id,
          type: "GET",
          dataType: "json",
          success: function(data){
            subCourtSelect.html('<option value="">Select Sub Court</option>');
            $.each(data, function(key, value){
              subCourtSelect.append('<option value="'+value.id+'">'+value.name+'</option>');
            });
          }
        });
      } else {
        subCourtSelect.html('<option value="">Select Sub Court</option>');
      }
    });
  });
</script>

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
      $('#myForm').validate({
        ignore : [],
        debug : false,
        rules: {
          court_id: {
            required: true,
          },
          sub_court_id: {
            required: true,
          },
          title: {
            required: true,
          }
        },
        messages: {
          court_id: {
            required: "Please select the court",
          },
          sub_court_id: {
            required: "Please select the sub court",
          },
          title: {
            required: "Please enter the title",
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