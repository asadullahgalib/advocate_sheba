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
      <form method="post" action="{{!empty($editData->id) ? route('law-firms.update',$editData->id) : route('law-firms.store') }}" id="myForm" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="card-body">
          <div class="show_module_more_event">
            <div class="form-row">

              <!-- Leader Dropdown -->
              <div class="form-group col-md-6">
                <label class="control-label" for="leader_id">Select Leader (Advocate) <span style="color:red;">*</span></label>
                <select name="leader_id" id="leader_id" class="form-control form-control-sm select2">
                  <option value="">Select Leader</option>
                  @foreach($leaders as $leader)
                    <option value="{{ $leader->id }}" {{ (old('leader_id', @$editData->leader_id) == $leader->id) ? 'selected' : '' }}>{{ $leader->name }}</option>
                  @endforeach
                </select>
              </div>

              <!-- Firm Name -->
              <div class="form-group col-md-6">
                <label class="control-label" for="firm_name">Firm Name <span style="color:red;">*</span></label>
                <input type="text" name="firm_name" id="firm_name" class="form-control form-control-sm" value="{{ old('firm_name', @$editData->firm_name) }}" placeholder="Enter Firm Name">
                <font style="color: red">{{ ($errors->has('firm_name')) ? $errors->first('firm_name') : '' }}</font>
              </div>

              <!-- Court Name -->
              <div class="form-group col-md-6">
                <label class="control-label" for="court_name">Court Name</label>
                <input type="text" name="court_name" id="court_name" class="form-control form-control-sm" value="{{ old('court_name', @$editData->court_name) }}" placeholder="Enter Court Name">
              </div>

              <!-- Established -->
              <div class="form-group col-md-6">
                <label class="control-label" for="established">Established</label>
                <input type="text" name="established" id="established" class="form-control form-control-sm" value="{{ old('established', @$editData->established) }}" placeholder="Enter Established Year">
              </div>

              <!-- Enrollment No -->
              <div class="form-group col-md-4">
                <label class="control-label" for="enrollment_no">Head Advocate Enrollment No <span style="color:red;">*</span></label>
                <input type="text" name="enrollment_no" id="enrollment_no" class="form-control form-control-sm" value="{{ old('enrollment_no', @$editData->enrollment_no) }}" placeholder="e.g. BCB-123456">
                <font style="color: red">{{ ($errors->has('enrollment_no')) ? $errors->first('enrollment_no') : '' }}</font>
              </div>

              <!-- District Dropdown (Bar Association এর জায়গায়) -->
              <div class="form-group col-md-4">
                <label class="control-label" for="district_id">Bar Association <span style="color:red;">*</span></label>
                <select name="district_id" id="district_id" class="form-control form-control-sm select2">
                  <option value="">Select Bar Association</option>
                  @foreach($districts as $district)
                    <option value="{{ $district->id }}" {{ (old('district_id', @$editData->district_id) == $district->id) ? 'selected' : '' }}>
                      {{ $district->name }}
                    </option>
                  @endforeach
                </select>
                <font style="color: red">{{ ($errors->has('district_id')) ? $errors->first('district_id') : '' }}</font>
              </div>

              <!-- Team Size -->
              <div class="form-group col-md-4">
                <label class="control-label" for="team_size">Team (Total Lawyers) <span style="color:red;">*</span></label>
                <input type="number" min="0" name="team_size" id="team_size" class="form-control form-control-sm" value="{{ old('team_size', @$editData->team_size) }}" placeholder="e.g. 6">
                <font style="color: red">{{ ($errors->has('team_size')) ? $errors->first('team_size') : '' }}</font>
              </div>

              <!-- Image -->
              <div class="form-group col-md-4">
                <label class="control-label">Image <span style="color:red;">(300px X 300px)</span></label>
                <input type="file" name="image" id="image" class="form-control form-control-sm">
                <font style="color: red">{{ ($errors->has('image')) ? $errors->first('image') : '' }}</font>
              </div>

              <!-- Image Preview -->
              <div class="form-group col-md-2" style="z-index: 100;">
                <img id="showImage" src="{{ (!empty($editData->image)) ? url('uploads/law_firm_images/'.$editData->image) : url('uploads/no_image.png') }}" style="width: 100px; height: 100px; object-fit: cover; border:1px solid #000;" class="form-control">
              </div>

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

<!-- Live Image Preview -->
<script type="text/javascript">
  $(document).ready(function () {
    $('#image').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#showImage').attr('src', e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
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
          firm_name: { required: true },
          enrollment_no: { required: true },
          district_id: { required: true }, // bar_association এর জায়গায়
          team_size: { required: true, number: true },
          abouts: { required: true }
        },
        messages: {
          leader_id: { required: "Please select a leader" },
          firm_name: { required: "Please enter the firm name" },
          enrollment_no: { required: "Please enter enrollment no" },
          district_id: { required: "Please select a district" }, // bar_association এর জায়গায়
          team_size: { required: "Please enter team size", number: "Please enter a number" },
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