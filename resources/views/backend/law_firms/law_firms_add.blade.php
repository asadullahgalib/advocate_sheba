@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>
          @if(@$editData)
          Update Law Firm
          @else
          Add Law Firm
          @endif 
          <a class="btn btn-sm btn-success float-right" href="{{route('law-firms.view')}}"><i class="fa fa-list"></i> Law Firm List</a></h5>
      </div>

      <!-- Form Start-->
      <form method="post" action="{{!empty($editData->id) ? route('law-firms.update',$editData->id) : route('law-firms.store') }}" id="myForm">
        {{csrf_field()}}
        <div class="card-body">
          <div class="show_module_more_event">
            <div class="form-row">

              <!-- Leader Dropdown -->
              <div class="form-group col-md-6">
                <label class="control-label" for="leader_id">Select Leader (Advocate) <span style="color:red;">*</span></label>
                <select name="leader_id" id="leader_id" class="form-control form-control-sm">
                  <option value="">Select Leader</option>
                  @foreach($leaders as $leader)
                    <option value="{{ $leader->id }}" {{ (old('leader_id', @$editData->leader_id) == $leader->id) ? 'selected' : '' }}>{{ $leader->name }}</option>
                  @endforeach
                </select>
              </div>

              <!-- District Dropdown -->
              <div class="form-group col-md-6">
                <label class="control-label" for="district_id">Select District <span style="color:red;">*</span></label>
                <select name="district_id" id="district_id" class="form-control form-control-sm">
                  <option value="">Select District</option>
                  @foreach($districts as $district)
                    <option value="{{ $district->id }}" {{ (old('district_id', @$editData->district_id) == $district->id) ? 'selected' : '' }}>{{ $district->name }}</option>
                  @endforeach
                </select>
              </div>

              <!-- Firm Name -->
              <div class="form-group col-md-6">
                <label class="control-label" for="firm_name">Firm Name <span style="color:red;">*</span></label>
                <input type="text" name="firm_name" id="firm_name" class="form-control form-control-sm" value="{{ old('firm_name', @$editData->firm_name) }}" placeholder="Enter Firm Name">
              </div>

              <!-- Established -->
              <div class="form-group col-md-6">
                <label class="control-label" for="established">Established</label>
                <input type="text" name="established" id="established" class="form-control form-control-sm" value="{{ old('established', @$editData->established) }}" placeholder="Enter Established Year">
              </div>

              <!-- Court Name -->
              <div class="form-group col-md-12">
                <label class="control-label" for="court_name">Court Name</label>
                <input type="text" name="court_name" id="court_name" class="form-control form-control-sm" value="{{ old('court_name', @$editData->court_name) }}" placeholder="Enter Court Name">
              </div>

              <!-- Status -->
              <!-- <div class="form-group col-md-6">
                <label class="control-label" for="status">Status</label>
                <select name="status" id="status" class="form-control form-control-sm">
                  <option value="1" {{ old('status', @$editData->status) == 1 ? 'selected' : '' }}>Active</option>
                  <option value="0" {{ old('status', @$editData->status) == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
              </div> -->

              <!-- Abouts with CKEditor -->
              <div class="form-group col-md-12">
                <label class="control-label" for="abouts">About the Firm <span style="color:red;">*</span></label>
                <textarea name="abouts" id="abouts" class="form-control" rows="5" placeholder="Enter About the Firm">{{ old('abouts', @$editData->abouts) }}</textarea>
              </div>

            </div>
          </div>
            
          <button type="submit" class="btn btn-success btn-sm">{{(@$editData) ? 'Update' : 'Submit'}}</button>
        </div>
      </form>
      <!--Form End-->
    </div>
  </div>

<!-- CKEditor Script for multiple textareas -->
<script type="text/javascript">
  $(document).ready(function(){
    var editorIds = ['abouts', 'membership', 'practice', 'training', 'qualification', 'chamber', 'office_hour', 'map', 'social'];
    
    $.each(editorIds, function(index, id) {
        if(document.getElementById(id)) {
            var editor = CKEDITOR.replace(id);
            CKFinder.setupCKEditor(editor, '/ckfinder/');
            
            editor.on('change', function() {
                editor.updateElement();
                $('#' + id).valid();
            });
        }
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
          leader_id: { required: true },
          district_id: { required: true },
          firm_name: { required: true },
          abouts: { required: true }
        },
        messages: {
          leader_id: { required: "Please select a leader" },
          district_id: { required: "Please select a district" },
          firm_name: { required: "Please enter the firm name" },
          abouts: { required: "Please enter firm details" }
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