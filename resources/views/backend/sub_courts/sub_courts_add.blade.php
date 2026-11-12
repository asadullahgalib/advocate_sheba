@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>
          @if(@$editData)
          Update Sub Court
          @else
          Add Sub Court
          @endif 
          <a class="btn btn-sm btn-success float-right" href="{{route('sub-courts.view')}}"><i class="fa fa-list"></i> Sub Courts List</a></h5>
      </div>

      <!-- Form Start-->
        <form method="post" action="{{!empty($editData->id) ? route('sub-courts.update',$editData->id) : route('sub-courts.store') }}" id="myForm">
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

                <!-- Sub Court Name -->
                <div class="form-group col-md-6">
                  <label class="control-label">Sub Court Name <span style="color:red;">*</span></label>
                  <input type="text" name="name" id="name" class="form-control form-control-sm" value="{{@$editData->name}}" placeholder="Enter Sub Court Name">
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
          name: {
            required: true,
          }
        },
        messages: {
          court_id: {
            required: "Please select the court",
          },
          name: {
            required: "Please enter the sub court name",
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