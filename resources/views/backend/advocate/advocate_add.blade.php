@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          @if(isset($editData))
            Legal Professional Update
          @else
            Legal Professional Add
          @endif
          <a href="{{ route('advocates.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Legal Professional List</i></a>
        </h3>
      </div>

      <form role="form" action="{{(@$editData)?route('advocates.update',$editData->id):route('advocates.store')}}" method="POST" enctype="multipart/form-data" id="MyForm">
        @csrf
          <div class="card-body">
            <div class="form-row">                   
              <div class="form-group col-md-4">
                <label for="name">Name English <span style="color:red">*</span></label>
                <input type="text" name="name" class="form-control form-control-sm" placeholder="Full Name" value="{{ (@$editData)?@$editData->name:old('name') }}"> 
                <font style="color: red"> 
                  {{($errors->has('name'))?($errors->first('name')):''}} 
                </font>                 
              </div>
              <div class="form-group col-md-4">
                <label for="name">Name Bangla <span style="color:red">*</span></label>
                <input type="text" name="name_bn" class="form-control form-control-sm" placeholder="সম্পূর্ণ নামঃ" value="{{ (@$editData)?@$editData->name_bn:old('name_bn') }}"> 
                <font style="color: red"> 
                  {{($errors->has('name_bn'))?($errors->first('name_bn')):''}} 
                </font>                 
              </div>
              <div class="form-group col-md-4">
                <label for="mobile">Contact No </label>
                <input type="text" name="mobile" class="form-control form-control-sm" value="{{ @$editData->mobile }}"> 
                <font style="color: red"> 
                  {{($errors->has('mobile'))?($errors->first('mobile')):''}} 
                </font>                 
              </div>
              
              <div class="form-group col-md-3">
                <label for="designation_id">Designation <span style="color:red">*</span></label>
                <select name="designation_id" class="form-control form-control-sm select2">
                  <option value="">Select Designation</option>
                  @foreach($designations as $designation)
                    <option value="{{ $designation->id }}" {{(@$editData->designation_id == $designation->id)?"selected":""}}>{{ $designation->name }}</option>
                  @endforeach
                </select> 
                <font style="color: red"> 
                  {{($errors->has('designation_id'))?($errors->first('designation_id')):''}} 
                </font>                 
              </div>
              <div class="form-group col-md-3">
                <label for="email">Email <span style="color:red">*</span></label>
                <input type="email" name="email" class="form-control form-control-sm" placeholder="Enter Email Address" value="{{ @$editData->email }}"> 
                <font style="color: red"> 
                  {{($errors->has('email'))?($errors->first('email')):''}} 
                </font>                 
              </div>

              <div class="form-group col-sm-4">
                <label>Image <span style="color:red;">(300px X 300px)</span></label>
                <input type="file" name="image" id="image" class="form-control form-control-sm">
              </div>
              
              <div class="form-group col-sm-2" style="z-index: 100;">
                <img id="showImage" src="{{(!empty($editData->image)) ? url('uploads/advocates_images/'.$editData->image) : url('uploads/no_image.png')}}" style="width: 100px; height: 80px; object-fit: cover; border:1px solid #000;" class="form-control">
              </div>

              <!-- ================= নতুন ফিল্ড শুরু ================= -->
              <div class="form-group col-md-4">
                <label for="bar_no">Bar No<span style="color:red">*</span></label>
                <input type="text" name="bar_no" class="form-control form-control-sm" placeholder="Enter Bar No" value="{{ @$editData->bar_no }}">
              </div>

              <div class="form-group col-md-4">
                <label for="enrollment_no">Enrollment No <span style="color:red">*</span></label>
                <input type="text" name="enrollment_no" class="form-control form-control-sm" placeholder="Enter Enrollment No" value="{{ @$editData->enrollment_no }}">
              </div>

              <!-- ================= District Dropdown ================= -->
              <div class="form-group col-md-4">
                <label for="district_id">Bar Association <span style="color:red">*</span></label>
                <select name="district_id" id="district_id" class="form-control form-control-sm select2">
                  <option value="">Select Bar Association</option>
                  @foreach($districts as $district)
                    <option value="{{ $district->id }}" {{ (@$editData->district_id == $district->id) ? 'selected' : '' }}>
                      {{ $district->name }}
                    </option>
                  @endforeach
                </select>
                <font style="color: red"> 
                  {{($errors->has('district_id'))?($errors->first('district_id')):''}} 
                </font> 
              </div>
              <!-- ================= নতুন ফিল্ড শেষ ================= -->
              
              <div class="form-group col-md-5">
                <label>Total Experience <span style="color:red">*</span></label>
                <input type="text" name="experience" class="form-control form-control-sm" value="{{ @$editData->experience }}"> 
              </div>
              
              <!-- WhatsApp Consultant -->
              <div class="form-group col-md-5">
                <label>WhatsApp Consultant</label>
                <input type="text" name="personal_whatsapp" class="form-control form-control-sm" value="{{ @$editData->personal_whatsapp }}" placeholder="Enter WhatsApp Number">
              </div>

              <div class="form-group col-md-6">
                <label>Chamber Whatsapp </label>
                <input type="text" name="appointment_contact" class="form-control form-control-sm" value="{{ @$editData->appointment_contact }}" placeholder="Contact No"> 
              </div>
              
              <div class="form-group col-md-8">
                <button type="submit" class="btn btn-primary btn-sm">@if(isset($editData)) Update @else Submit @endif</button>
              </div>
            </div>
          </div>
      </form>

    </div>
  </div>

<script type="text/javascript">
  $(document).ready(function () {  
    $('#image').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#showImage').attr('src', e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });

    $('#MyForm').validate({
      rules:{
        name:{ required:true },
        name_bn:{ required:true },
        designation_id:{ required:true },
        email:{ required:true, email:true },
        bar_no:{ required:true },
        enrollment_no:{ required:true },
        district_id:{ required:true },
        experience:{ required:true }
      },
      messages: {      
        name: { required: "Please enter English name" },
        name_bn: { required: "Please enter Bangla name" },
        designation_id: { required: "Please select a designation" },
        email: { required: "Please enter email address", email: "Please enter a valid email" },
        bar_no: { required: "Please enter Bar No" },
        enrollment_no: { required: "Please enter enrollment no" },
        district_id: { required: "Please select a district" },
        experience: { required: "Please enter total experience" }
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