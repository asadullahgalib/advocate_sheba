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
            <a href="{{route('doctor-profile.view.details')}}" class="btn btn-primary btn-sm {{(@$page_title=='statement')?'btn_active':''}}" title="Statement"> Details</a>
            <a href="{{route('doctor-profile.official.details')}}" class="btn btn-primary btn-sm {{(@$page_title=='official')?'btn_active':''}}" title="Official">Official</a>
            <a href="{{route('doctor-profile.personal.details')}}" class="btn btn-primary btn-sm {{(@$page_title=='personal')?'btn_active':''}}" title="Personal"> Personal </a>
            <a href="{{route('doctor-profile.contact.details')}}" class="btn btn-primary btn-sm {{(@$page_title=='contact')?'btn_active':''}}" title="Contact"> Mailing</a>
            <a href="{{route('doctor-profile.education.details')}}" class="btn btn-primary btn-sm {{(@$page_title=='education')?'btn_active':''}}" title="Qualification"> Qualification</a>
            <a href="{{route('doctor-profile.experience.details')}}" class="btn btn-primary btn-sm {{(@$page_title=='experience')?'btn_active':''}}" title="Experience"> Experience</a>
            <a href="{{route('doctor-profile.achievement.details')}}" class="btn btn-primary btn-sm {{(@$page_title=='training')?'btn_active':''}}" title="Training/Achievement"> Training</a>
            @if(Auth::user()->user_categor=='doctor')
            <a href="{{route('doctor-profile.daytime.details')}}" class="btn btn-primary btn-sm {{(@$page_title=='daytime')?'btn_active':''}}" title="DayTime"> DayTime</a>
            @endif
            <a href="{{route('doctor-profile.speciality.details')}}" class="btn btn-primary btn-sm {{(@$page_title=='speciality')?'btn_active':''}}" title="Speciality"> Speciality</a>
            <a href="{{route('doctor-profile.workplace.details')}}" class="btn btn-primary btn-sm {{(@$page_title=='workplace')?'btn_active':''}}" title="Speciality"> WorkPlace</a>
            @if(Auth::user()->user_categor=='doctor')
            <a href="{{route('doctor-profile.chamber.details')}}" class="btn btn-primary btn-sm {{(@$page_title=='chamber')?'btn_active':''}}" title="Speciality"> Chamber</a>
            @endif
          </div>
        </div>
    </div>
    <div class="card-body">
      <form method="post" action="{{route('doctor-profile.details.official')}}" id="MyForm">
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
              <select name="designation_id" class="form-control form-control-sm select2">
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
                <label>Appointment for <span style="color:red">*</span></label>
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