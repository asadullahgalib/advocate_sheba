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
            Dotor Details Info
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
              <img src="{{(!empty(@$details->image))?url('public/upload/employee_images/'.@$details->image):url('public/upload/no_image.png')}}" class="img-responsive" alt="" >
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
      <form method="post" action="{{route('doctor-profile.details.personal')}}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="employee_id" id="employee_id" value="{{@$details->id}}">
        <div class="form-row">
          <div class="form-group col-sm-3">
            <label class="control-label"><strong>Father's Name</strong></label>
            <input type="text" name="fname" id="fname" class="form-control form-control-sm" value="{{@$details->fname}}" placeholder="Father Name" autocomplete="off">
          </div>
          <div class="form-group col-sm-3">
            <label class="control-label"><strong>Mother's Name</strong></label>
            <input type="text" name="mname" id="mname" class="form-control form-control-sm" value="{{@$details->mname}}" placeholder="Mother Name" autocomplete="off">
          </div>
          <div class="form-group col-sm-3">
            <label for="dob">Date of Birth</label>
            <input type="text" name="dob" class="form-control singledatepicker form-control-sm" placeholder="Enter Date of Birth" value="{{ @$details->dob }}" autocomplete="off">
          </div>
          <div class="form-group col-sm-3">
            <label for="gender">Gender</label>
            <select name="gender" class="form-control form-control-sm">
              <option value="">Select Gender</option>
              <option value="Male" @if(@$details->gender=="Male") selected @endif>Male</option>
              <option value="Female" @if(@$details->gender=="Female") selected @endif>Female</option>
            </select>            
          </div>
          <div class="form-group col-sm-3">
            <label for="religion_id">Religion</label>
            <select name="religion_id" class="form-control form-control-sm">
              <option value="">Select Religion</option>
             @foreach($religions as $religion)
              <option value="{{$religion->id}}" {{(@$details->religion_id == $religion->id)?('selected'):''}}>{{$religion->name}}</option>
             @endforeach
            </select>          
          </div>
          <div class="form-group col-sm-3">
            <label class="control-label"><strong>Nationality</strong></label>
            <input type="text" name="nationality" id="nationality" class="form-control form-control-sm" value="{{@$details->nationality}}" placeholder="Nationality" autocomplete="off">
          </div>
          <div class="form-group col-sm-3">
            <label class="control-label"><strong>NID No</strong></label>
            <input type="text" name="nid_no" id="nid_no" class="form-control form-control-sm" value="{{@$details->nid_no}}" placeholder="NID No." autocomplete="off">
          </div>
          <div class="form-group col-sm-3">
            <label class="control-label"><strong>Blood Group</strong></label>
            <select class="form-control form-control-sm" name="blood_group" id="blood_group">
              <option  value="">Select Blood Group</option>
              <option {{@$details->blood_group=="A+" ? 'selected':''}} value="A+">A+</option>
              <option {{@$details->blood_group=="O+" ? 'selected':''}} value="O+">O+</option>
              <option {{@$details->blood_group=="B+" ? 'selected':''}} value="B+">B+</option>
              <option {{@$details->blood_group=="AB+" ? 'selected':''}} value="AB+">AB+</option>
              <option {{@$details->blood_group=="A-" ? 'selected':''}} value="A-">A-</option>
              <option {{@$details->blood_group=="O-" ? 'selected':''}} value="O-">O-</option>
              <option {{@$details->blood_group=="B-" ? 'selected':''}} value="B-">B-</option>
              <option {{@$details->blood_group=="AB-" ? 'selected':''}} value="AB-">AB-</option>
            </select>
          </div>
          <div class="form-group col-sm-3">
            <label class="control-label"><strong>Marrital Status</strong></label>
            <select class="form-control form-control-sm" name="marital_status" id="marital_status">
              <option value="">Select Marital Status</option>
              <option {{@$details->marital_status=="single" ? 'selected':''}} value="single">Single</option>
              <option {{@$details->marital_status=="married" ? 'selected':''}} value="married">Married</option>
              <option {{@$details->marital_status=="widowed" ? 'selected':''}} value="widowed">Widowed</option>
              <option {{@$details->marital_status=="divorced" ? 'selected':''}} value="divorced">Divorced</option>
            </select>
          </div>
          <div class="form-group col-sm-3">
            <label>Image <span style="color:red">(1080px X 1080px)</span></label>
            <input type="file" name="image" id="image" class="form-control form-control-sm">
          </div>
          <div class="form-group col-sm-3" style="z-index: 100;">
            <img id="showImage" src="{{(!empty($details->image))?url('public/upload/employee_images/'.$details->image):url('public/upload/no_image.png')}}" style="width: 150px; height: 150px" class="form-control">
          </div>
        </div>
        <button type="submit" class="btn btn-success btn-sm" id="storeButton">Update Information</button>
      </form>
    </div>

    </div>
  </div>

@endsection