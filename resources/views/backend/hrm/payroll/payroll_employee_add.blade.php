@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          @if(isset($editData))
            Doctor Update
          @else
            Doctor Add
          @endif
          <a href="{{ route('payroll.employee.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Doctor List</i></a>
        </h3>
      </div>

      <form role="form" action="{{(@$editData)?route('payroll.employee.view.update',$editData->id):route('payroll.employee.view.store')}}" method="POST" enctype="multipart/form-data" id="MyForm">
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
              <div class="form-group col-md-12">
                <label for="name">Qualification <span style="color:red">*</span></label>
                <input type="text" name="qualification" class="form-control form-control-sm" value="{{@$editData->qualification}}"> 
                <font style="color: red"> 
                  {{($errors->has('qualification'))?($errors->first('qualification')):''}} 
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
              <div class="form-group col-md-3">
                <label>Department <span style="color:red">*</span></label>
                <select name="department_id" class="form-control select2">
                  <option value="">Select Department</option>
                  @foreach($departments as $department)
                    <option value="{{ $department->id }}" {{(@$editData->department_id == $department->id)?"selected":""}}>{{ $department->name }}</option>
                  @endforeach
                </select> 
                <font style="color: red"> 
                  {{($errors->has('department_id'))?($errors->first('department_id')):''}} 
                </font>                 
              </div>
              <div class="form-group col-md-3">
                <label for="join_date">Join Date </label>
                <input type="text" name="join_date" class="form-control form-control-sm singledatepicker" placeholder="DD-MM-YYYY" value="{{ @$editData->join_date }}" autocomplete="off"> 
                <font style="color: red"> 
                  {{($errors->has('join_date'))?($errors->first('join_date')):''}} 
                </font>                 
              </div>
              <div class="form-group col-md-3">
                <label>BMDC No <span style="color:red">*</span></label>
                <input type="text" name="mbbs_fcp" class="form-control form-control-sm" value="{{ @$editData->mbbs_fcp }}"> 
              </div>
              <div class="form-group col-md-2">
                <label>Consultation Fee <span style="color:red">*</span></label>
                <input type="text" name="consultation_fee" class="form-control form-control-sm" value="{{ @$editData->consultation_fee }}"> 
              </div>
              <div class="form-group col-md-2">
                <label>Follow-up Fee <span style="color:red">*</span></label>
                <input type="text" name="follow_up_fee" class="form-control form-control-sm" value="{{ @$editData->follow_up_fee }}"> 
              </div>
              <div class="form-group col-md-5">
                <label>Total Experience <span style="color:red">*</span></label>
                <input type="text" name="experience" class="form-control form-control-sm" value="{{ @$editData->experience }}"> 
              </div>
              <div class="form-group col-md-6">
                <label>IMO/What's App </label>
                <input type="text" name="appointment_contact" class="form-control form-control-sm" value="{{ @$editData->appointment_contact }}" placeholder="Contact No"> 
              </div>
              @if(@Auth::user()->role=='1')
              <div class="form-group col-md-3">
                <label for="name">Employee Type <span style="color:red">*</span></label>
                <select name="employee_type" class="form-control form-control-sm">
                  <option value="">Select Type</option>
                  <option value="1" {{(@$editData->employee_type == "1")?"selected":""}}>Internal</option>
                  <option value="2" {{(@$editData->employee_type == "2")?"selected":""}}>External</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="name">Booking Status <span style="color:red">*</span></label>
                <select name="booking_status" class="form-control form-control-sm">
                  <option value="">Select Type</option>
                  <option value="1" {{(@$editData->booking_status == "1")?"selected":""}}>Yes</option>
                  <option value="2" {{(@$editData->booking_status == "2")?"selected":""}}>No</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label>Bkash No </label>
                <input type="text" name="bkash_number" class="form-control form-control-sm" value="{{ @$editData->bkash_number }}"> 
              </div>
              <div class="form-group col-md-3">
                <label>Nagad No </label>
                <input type="text" name="nagad_number" class="form-control form-control-sm" value="{{ @$editData->nagad_number }}"> 
              </div>
              <div class="form-group col-md-3">
                <label>Rocket No </label>
                <input type="text" name="rocket_number" class="form-control form-control-sm" value="{{ @$editData->rocket_number }}"> 
              </div>
              <div class="form-group col-md-3">
                <label>Sort Order </label>
                <input type="number" name="sort" class="form-control form-control-sm" value="{{ @$editData->sort }}" required> 
              </div>
              <div class="form-group col-sm-3">
                <label>E-Card <span style="color:red">(1004px X 1299px)</span></label>
                <input type="file" name="ecard" id="image" class="form-control form-control-sm">
              </div>
              <div class="form-group col-sm-3" style="z-index: 100;">
                <img id="showImage" src="{{(!empty($editData->ecard))?url('public/upload/employee_ecard/'.$editData->ecard):url('public/upload/no_image.png')}}" style="width: 150px; height: 150px" class="form-control">
              </div>
              @endif
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
    $('#MyForm').validate({
      rules:{
        name:{
          required:true
        },
        department_id:{
          required:true
        },
        designation_id:{
          required:true
        },
        email:{
          required:true
        },
        mbbs_fcp:{
          required:true
        },
        employee_type:{
          required:true
        },
        booking_status:{
          required:true
        },
        consultation_fee:{
          required:true
        },
        follow_up_fee:{
          required:true
        },
        qualification:{
          required:true
        },
        experience:{
          required:true
        },
        sort:{
          required:true
        },
        work_place:{
          required:true
        }
      },
      messages: {      
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