@extends('backend.layouts.master')
@section('content')
<style type="text/css">
  .btn_active{
    background: #F70F9E;
    color: #fff;
    text-decoration: underline !important;
  }
</style>
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

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
            Doctor Details Info
            <a href="{{ route('payroll.employee.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Doctor List</i></a>
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
          <div class="col-md-12">
            <a href="{{route('payroll.employee.view.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='statement')?'btn_active':''}}" title="Statement"> Details</a>
            <a href="{{route('payroll.employee.official.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='official')?'btn_active':''}}" title="Official">Official</a>
            <a href="{{route('payroll.employee.personal.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='personal')?'btn_active':''}}" title="Personal"> Personal </a>
            <a href="{{route('payroll.employee.contact.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='contact')?'btn_active':''}}" title="Contact"> Mailing</a>
            <a href="{{route('payroll.employee.education.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='education')?'btn_active':''}}" title="Qualification"> Qualification</a>
            <a href="{{route('payroll.employee.experience.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='experience')?'btn_active':''}}" title="Experience"> Experience</a>
            <a href="{{route('payroll.employee.achievement.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='training')?'btn_active':''}}" title="Training/Achievement"> Training</a>
            <a href="{{route('payroll.employee.daytime.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='daytime')?'btn_active':''}}" title="DayTime"> DayTime</a>
            <a href="{{route('payroll.employee.speciality.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='speciality')?'btn_active':''}}" title="Speciality"> Speciality</a>
            <a href="{{route('payroll.employee.workplace.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='workplace')?'btn_active':''}}" title="Speciality"> WorkPlace</a>
            <a href="{{route('payroll.employee.chamber.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='chamber')?'btn_active':''}}" title="Speciality"> Chamber</a>
            <a href="{{route('payroll.employee.time.assign.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='time_assign')?'btn_active':''}}" title="Contact"> Time Assign</a>
          </div>
        </div>
    </div>
    <div class="card-body">
      <form method="post" action="{{route('payroll.employee.details.official')}}" id="MyForm">
          @csrf
          <input type="hidden" name="employee_id" id="employee_id" value="{{@$details->id}}">
          <div class="form-row">                   
            <div class="form-group col-md-4">
              <label for="name">Name English</label>
              <input type="text" name="name" class="form-control form-control-sm" placeholder="Full Name" value="{{ @$details->name }}"> 
              <font style="color: red"> 
                {{($errors->has('name'))?($errors->first('name')):''}} 
              </font>                 
            </div>
            <div class="form-group col-md-4">
                <label for="name">Name Bangla <span style="color:red">*</span></label>
                <input type="text" name="name_bn" class="form-control form-control-sm" placeholder="সম্পূর্ণ নামঃ" value="{{ (@$details)?@$details->name_bn:old('name_bn') }}"> 
            </div>
            <div class="form-group col-md-4">
              <label for="mobile">Contact No</label>
              <input type="text" name="mobile" class="form-control form-control-sm" placeholder="Enter Mobile Number" value="{{ @$details->mobile }}"> 
              <font style="color: red"> 
                {{($errors->has('mobile'))?($errors->first('mobile')):''}} 
              </font>                 
            </div>
            <div class="form-group col-md-6">
                <label for="name">Qualification <span style="color:red">*</span></label>
                <input type="text" name="qualification" class="form-control form-control-sm" value="{{@$details->qualification}}"> 
                <font style="color: red"> 
                  {{($errors->has('qualification'))?($errors->first('qualification')):''}} 
                </font>                 
              </div>
            <div class="form-group col-md-3">
              <label for="designation_id">Designation</label>
              <select name="designation_id" class="form-control select2 form-control-sm">
                <option value="">Select Designation</option>
                @foreach($designations as $designation)
                  <option value="{{ $designation->id }}" {{(@$details->designation_id == $designation->id)?"selected":""}}>{{ $designation->name }}</option>
                @endforeach
              </select> 
              <font style="color: red"> 
                {{($errors->has('designation_id'))?($errors->first('designation_id')):''}} 
              </font>                 
            </div>
            
            <div class="form-group col-md-3">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control form-control-sm" placeholder="Enter Email Address" value="{{ @$details->email }}"> 
              <font style="color: red"> 
                {{($errors->has('email'))?($errors->first('email')):''}} 
              </font>                 
            </div>
            <div class="form-group col-md-3">
              <label>Department</label>
              <select name="department_id" class="form-control select2bs4">
                <option value="">Select Department</option>
                @foreach($departments as $department)
                  <option value="{{ $department->id }}" {{(@$details->department_id == $department->id)?"selected":""}}>{{ $department->name }}</option>
                @endforeach
              </select> 
              <font style="color: red"> 
                {{($errors->has('department_id'))?($errors->first('department_id')):''}} 
              </font>                 
            </div>

            <div class="form-group col-md-3">
                <label for="join_date">Join Date <span style="color:red">*</span></label>
                <input type="text" name="join_date" class="form-control form-control-sm singledatepicker" placeholder="DD-MM-YYYY" value="{{ @$details->join_date }}" autocomplete="off"> 
                <font style="color: red"> 
                  {{($errors->has('join_date'))?($errors->first('join_date')):''}} 
                </font>                 
            </div>
            <div class="form-group col-md-3">
              <label>BMDC No <span style="color:red">*</span></label>
              <input type="text" name="mbbs_fcp" class="form-control form-control-sm" value="{{ @$details->mbbs_fcp }}"> 
            </div>
            <div class="form-group col-md-3">
                <label>Consultation Fee <span style="color:red">*</span></label>
                <input type="text" name="consultation_fee" class="form-control form-control-sm" value="{{ @$details->consultation_fee }}"> 
              </div>
              <div class="form-group col-md-3">
                <label>Follow-up Fee <span style="color:red">*</span></label>
                <input type="text" name="follow_up_fee" class="form-control form-control-sm" value="{{ @$details->follow_up_fee }}"> 
              </div>
              <div class="form-group col-md-6">
                <label>Total Experience <span style="color:red">*</span></label>
                <input type="text" name="experience" class="form-control form-control-sm" value="{{ @$details->experience }}"> 
              </div>
              <div class="form-group col-md-3">
                <label>IMO/What's App <span style="color:red">*</span></label>
                <input type="text" name="appointment_contact" class="form-control form-control-sm" value="{{ @$details->appointment_contact }}" placeholder="Contact No"> 
              </div>
          </div>
          <button type="submit" class="btn btn-success btn-sm" id="storeButton">Update Information</button>
        </form>
    </div>

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