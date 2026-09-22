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
                <td><strong>Mobile No :</strong> {{@$details->username}}</td>
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
        <form method="post" action="{{route('doctor-profile.details.contact')}}">
          @csrf
          <input type="hidden" name="employee_id" id="employee_id" value="{{@$details->id}}">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-body form-row">
                  <div class="form-group col-sm-12">
                    <label class="control-label"><strong>Present Address</strong></label>
                    <textarea name="present_address" id="present_address" class="form-control form-control-sm" placeholder="Present Address" autocomplete="off">{{@$details->present_address}}</textarea>
                  </div>
                </div>
              </div>
            </div>
            <!--Permanent Address-->
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="form-check" style="margin-top: -20px">
                    <label class="form-check-label">
                      <input class="form-check-input" id="checkbox" type="checkbox"> Permanent address is same the current address ?
                    </label>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-sm-12">
                      <label class="control-label"><strong>Permanent Address</strong></label>
                      <textarea name="permanent_address" id="permanent_address" class="form-control form-control-sm" placeholder="Parmanent Address" autocomplete="off">{{@$details->permanent_address}}</textarea>
                    </div>
                  </div>
                </div>
              </div>
              <!--Same as present address-->
              <script type="text/javascript">
                $(function(){     
                  $('#checkbox').on('change',function(){
                    var present_address=$('#present_address').val();
                    if(this.checked){ 
                      $('#permanent_address').val(present_address);
                    }else{
                      $('#permanent_address').val('');
                    }
                  });
                });
              </script>
            </div>
          </div>
          <!--Emergency Contact info-->
          <div class="card" style="margin-top: 5px">
            <p class="badge"  style="padding: 5px 10px;border-radius: 0;font-size:14px">Emergency Contact Information</p>
            <div class="card-body">
              <div class="form-row">
                <div class="form-group col-sm-4">
                  <label class="control-label"><strong>Emergency Contact Person</strong></label>
                  <input type="text" name="emergency_contact_name" id="emergency_contact_name" class="form-control form-control-sm" value="{{@$details->emergency_contact_name}}" placeholder="Emergency Contact Person" autocomplete="off">
                </div>
                <div class="form-group col-sm-4">
                  <label class="control-label"><strong>Relation with Emergency Contact Person</strong></label>
                  <input type="text" name="relation_with" id="relation_with" class="form-control form-control-sm" value="{{@$details->relation_with}}" placeholder="Reletaion With" autocomplete="off">
                </div>
                <div class="form-group col-sm-4">
                  <label class="control-label"><strong>Emergency Contact Person Mobile No</strong></label>
                  <input type="text" name="emergency_contact_no" id="emergency_contact_no" class="form-control form-control-sm" value="{{@$details->emergency_contact_no}}" placeholder="emergency Contact No." autocomplete="off">
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-success btn-sm" id="storeButton">Update Information</button>
        </form>
    </div>     

    </div>
  </div>

@endsection