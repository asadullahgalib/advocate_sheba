@extends('backend.layouts.master')
@section('content')
<style type="text/css">
  .profile-userpic img {
    float: none;
    margin: 0 auto;
    width: 120px;
    height: 130px;
    background-color: #ddd;
    padding: 3px;
  }
</style>
<style type="text/css">
  .btn_active{
    background: #F70F9E;
    color: #fff;
    text-decoration: underline !important;
  }
</style>

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
            Legal Professional Details Info
            <a href="{{ route('advocates.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Legal Professional List</i></a>
        </h3>
      </div>

      <div class="card-body">
        <div class="row">
          <div class="col-md-8 col-xs-6">
            <table>
              <tr>
                <td><strong style="font-size:25px">{{@$details->name}} - {{@$details->name_bn}}</strong> </td>
              </tr>
              <tr>
                <td>{{@$details->present_address}}</td>
              </tr>
              <tr>
                <td><strong>Mobile No :</strong> {{@$details->mobile}}</td>
              </tr>
              <tr>
                <td><strong>Email :</strong> {{@$details->email}}</td>
              </tr>
            </table>
          </div>
          <div class="col-md-4 col-xs-6">
            <div class="profile-sidebar">
            <div class="profile-userpic text-center">
              <img src="{{(!empty(@$details->image))?url('public/upload/employee_images/'.@$details->image):url('public/upload/no_image.png')}}" class="img-responsive" alt="">
            </div>
          </div>
          </div>
          @include('backend.advocate.advocate_tab')
        </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
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
              <!-- <div class="form-group col-md-12">
                <label for="name">Qualification <span style="color:red">*</span></label>
                <input type="text" name="qualification" class="form-control form-control-sm" value="{{@$editData->qualification}}"> 
                <font style="color: red"> 
                  {{($errors->has('qualification'))?($errors->first('qualification')):''}} 
                </font>                 
              </div> -->
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
              <!-- <div class="form-group col-md-3">
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
              </div> -->
              <!-- <div class="form-group col-md-3">
                <label for="join_date">Join Date </label>
                <input type="text" name="join_date" class="form-control form-control-sm singledatepicker" placeholder="DD-MM-YYYY" value="{{ @$editData->join_date }}" autocomplete="off"> 
                <font style="color: red"> 
                  {{($errors->has('join_date'))?($errors->first('join_date')):''}} 
                </font>                 
              </div> -->
              <!-- <div class="form-group col-md-3">
                <label>BMDC No <span style="color:red">*</span></label>
                <input type="text" name="mbbs_fcp" class="form-control form-control-sm" value="{{ @$editData->mbbs_fcp }}"> 
              </div> -->
              <!-- <div class="form-group col-md-2">
                <label>Consultation Fee <span style="color:red">*</span></label>
                <input type="text" name="consultation_fee" class="form-control form-control-sm" value="{{ @$editData->consultation_fee }}"> 
              </div> -->
              <!-- <div class="form-group col-md-2">
                <label>Follow-up Fee <span style="color:red">*</span></label>
                <input type="text" name="follow_up_fee" class="form-control form-control-sm" value="{{ @$editData->follow_up_fee }}"> 
              </div> -->
              <div class="form-group col-md-5">
                <label>Total Experience <span style="color:red">*</span></label>
                <input type="text" name="experience" class="form-control form-control-sm" value="{{ @$editData->experience }}"> 
              </div>
              <div class="form-group col-md-6">
                <label>IMO/What's App </label>
                <input type="text" name="appointment_contact" class="form-control form-control-sm" value="{{ @$editData->appointment_contact }}" placeholder="Contact No"> 
              </div>
              <!-- @if(@Auth::user()->role=='1')
              <div class="form-group col-md-3">
                <label for="name">Employee Type <span style="color:red">*</span></label>
                <select name="employee_type" class="form-control form-control-sm">
                  <option value="">Select Type</option>
                  <option value="1" {{(@$editData->employee_type == "1")?"selected":""}}>Internal</option>
                  <option value="2" {{(@$editData->employee_type == "2")?"selected":""}}>External</option>
                </select>
              </div> -->
              <!-- <div class="form-group col-md-3">
                <label for="name">Booking Status <span style="color:red">*</span></label>
                <select name="booking_status" class="form-control form-control-sm">
                  <option value="">Select Type</option>
                  <option value="1" {{(@$editData->booking_status == "1")?"selected":""}}>Yes</option>
                  <option value="2" {{(@$editData->booking_status == "2")?"selected":""}}>No</option>
                </select>
              </div> -->
              <!-- <div class="form-group col-md-3">
                <label>Bkash No </label>
                <input type="text" name="bkash_number" class="form-control form-control-sm" value="{{ @$editData->bkash_number }}"> 
              </div> -->
              <!-- <div class="form-group col-md-3">
                <label>Nagad No </label>
                <input type="text" name="nagad_number" class="form-control form-control-sm" value="{{ @$editData->nagad_number }}"> 
              </div> -->
              <!-- <div class="form-group col-md-3">
                <label>Rocket No </label>
                <input type="text" name="rocket_number" class="form-control form-control-sm" value="{{ @$editData->rocket_number }}"> 
              </div> -->
              <!-- <div class="form-group col-md-3">
                <label>Sort Order </label>
                <input type="number" name="sort" class="form-control form-control-sm" value="{{ @$editData->sort }}" required> 
              </div> -->
              
              @endif
              
              <div class="form-group col-md-8">
                <button type="submit" class="btn btn-primary btn-sm">@if(isset($editData)) Update @else Submit @endif</button>
              </div>
            </div>
          </div>
      </form>
        </div>
      </div>
    </div>

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
