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
      <div class="row">
        <div class="col-md-12">
          <table style="width:100%;padding: 3px;">
            <tr>
              <td colspan="2"><h6><strong style="text-decoration: underline;">Official Info :</strong></h6></td>
            </tr>
            <tr>
              <td width="20%"><strong>Designation</strong> </td>
              <td>: {{ @$details['designation']['name'] }}</td>
            </tr>
            <tr>
              <td width="20%"><strong>Join Date</strong> </td>
              <td>: {{ date('d-m-Y',strtotime(@$details->join_date)) }}</td>
            </tr>
            <tr>
              <td width="20%"><strong>Department</strong> </td>
              <td>: {{ @$details['department']['name'] }}</td>
            </tr>
            <tr>
              <td width="20%"><strong>BMDC No</strong> </td>
              <td>: {{ @$details->mbbs_fcp }}</td>
            </tr>
            <tr>
              <td width="20%"><strong>Qualification</strong> </td>
              <td>: {{ @$details->qualification }}</td>
            </tr>
            <tr>
              <td width="20%"><strong>Experience</strong> </td>
              <td>: {{ @$details->experience }}</td>
            </tr>
            <tr>
              <td width="20%"><strong>Work Place</strong> </td>
              <td>: {{ @$details->work_place }}</td>
            </tr>
            <tr>
              <td width="20%"><strong>Consultation Fee</strong> </td>
              <td>: {{ @$details->consultation_fee }}</td>
            </tr>
            <tr>
              <td width="20%"><strong>Follow-up Fee</strong> </td>
              <td>: {{ @$details->follow_up_fee }}</td>
            </tr>
            <tr>
              <td width="20%"><strong>IMO / What's App</strong> </td>
              <td>: {{ @$details->appointment_contact }}</td>
            </tr>
            <tr>
              <td colspan="2"><h6><strong style="text-decoration: underline;">Personal Info :</strong></h6></td>
            </tr>
            <tr>
              <td width="20%"><strong>Fathers' Name</strong> </td>
              <td>: {{ @$details->fname }}</td>
            </tr>
            <tr>
              <td width="20%"><strong>Mother's Name</strong> </td>
              <td>: {{$details->mname}}</td>
            <tr>
              <td width="20%"><strong>Date of Birth</strong> </td>
              <td>: {{date('d-m-Y',strtotime(@$details->dob))}}</td>
            </tr>
            </tr>
            <tr>
              <td width="20%"><strong>Gender</strong> </td>
              <td>: {{@$details->gender}}</td>
            </tr>
            <tr>
              <td width="20%"><strong>Religion</strong> </td>
              <td>: {{@$details['religion']['name']}}</td>
            </tr>
            <tr>
              <td width="20%"><strong>Nationality</strong> </td>
              <td>: {{@$details->nationality}}</td>
            </tr>
            <tr>
              <td width="20%"><strong>NID No</strong> </td>
              <td>: {{@$details->nid_no}}</td>
            </tr>
            <tr>
              <td width="20%"><strong>Blood Group</strong> </td>
              <td>: {{@$details->blood_group}}</td>
            </tr>
            <tr>
              <td width="20%"><strong>Marrital Status</strong> </td>
              <td>: {{@$details->marital_status}}</td>
            </tr>
            <tr>
              <td colspan="2"><h6><strong style="text-decoration: underline;">Mailing Info :</strong></h6></td>
            </tr>
            <tr>
              <td width="20%"><strong>Present Address</strong> </td>
              <td>: {{@$details->present_address}}</td>
            </tr>
            <tr>
              <td width="20%"><strong>Permanent Address</strong> </td>
              <td>: {{@$details->permanent_address}}</td>
            </tr>
            <tr>
              <td width="20%"><strong>Emergency Contact Person</strong> </td>
              <td>: {{@$details->emergency_contact_name}}</td>
            </tr>
            <tr>
              <td width="20%"><strong>Relation With Emergency Contact Person</strong> </td>
              <td>: {{@$details->relation_with}}</td>
            </tr>
            <tr>
              <td width="20%"><strong>Emergency Contact Person Mobile</strong> </td>
              <td>: {{@$details->emergency_contact_no}}</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <td colspan="5"><h6><strong style="text-decoration: underline;">Qualification :</strong></h6></td>
          <table class="table table-bordered table-striped dt-responsive table-sm" style="width: 100%">
            <thead>
              <tr>
                <th>Qualification</th>
                <th>Institute</th>
              </tr>
            </thead>
            <tbody>
              @foreach($educations as $edu)
                <tr class="text-center">
                  <td>{{$edu->qualification}}</td>
                  <td>{{$edu->institute_name}}</td>
                </tr>
              @endforeach   
            </tbody>
          </table>
        </div>

        <div class="col-md-12">
          <td colspan="5"><h6><strong style="text-decoration: underline;">Work Place :</strong></h6></td>
          <table class="table table-bordered table-striped dt-responsive table-sm" style="width: 100%">
            <thead>
              <tr>
                <th>Work Place</th>
                <!-- <th>Details/Mobile No</th> -->
              </tr>
            </thead>
            <tbody>
              @foreach($work_places as $edu)
                <tr class="text-center">
                  <td>{{$edu->workplace}}</td>
                  <!-- <td>{{$edu->details}}</td> -->
                </tr>
              @endforeach   
            </tbody>
          </table>
        </div>

        <div class="col-md-12">
          <td colspan="5"><h6><strong style="text-decoration: underline;">Chamber :</strong></h6></td>
          <table class="table table-bordered table-striped dt-responsive table-sm" style="width: 100%">
            <thead>
              <tr>
                <th>Chamber Name</th>
                <!-- <th>Details</th> -->
              </tr>
            </thead>
            <tbody>
              @foreach($chambers as $edu)
                <tr class="text-center">
                  <td>{{$edu->chamber_name}}</td>
                  <!-- <td>{{$edu->chamber_details}}</td> -->
                </tr>
              @endforeach   
            </tbody>
          </table>
        </div>

        <div class="col-md-12">
          <td colspan="1"><h6><strong style="text-decoration: underline;">Experience :</strong></h6></td>
          <table class="table table-bordered table-striped dt-responsive table-sm" style="width: 100%">
            <thead>
              <tr>
                <th>Details</th>
              </tr>
            </thead>
            <tbody>
              @foreach($experiences as $achv)
                <tr class="text-center">
                  <td>{{$achv->experience}}</td>
                </tr>
              @endforeach   
            </tbody>
          </table>
        </div>

        <div class="col-md-12">
          <td colspan="1"><h6><strong style="text-decoration: underline;">Day-Time :</strong></h6></td>
          <table class="table table-bordered table-striped dt-responsive table-sm" style="width: 100%">
            <thead>
              <tr>
                <th>Details</th>
              </tr>
            </thead>
            <tbody>
              @foreach($profile_times as $dayt)
                <tr class="text-center">
                  <td>{{$dayt->time}}</td>
                </tr>
              @endforeach   
            </tbody>
          </table>
        </div>

        <div class="col-md-12">
          <td colspan="2"><h6><strong style="text-decoration: underline;">Training/Achievement :</strong></h6></td>
          <table class="table table-bordered table-striped dt-responsive table-sm" style="width: 100%">
            <thead>
              <tr>
                <th>Training</th>
                <th>Achievement</th>
              </tr>
            </thead>
            <tbody>
              @foreach($trainings as $trn)
                <tr class="text-center">
                  <td>{{$trn->training}}</td>
                  <td>{{$trn->achievement}}</td>
                </tr>
              @endforeach   
            </tbody>
          </table>
        </div>

        <div class="col-md-12">
          <td colspan="1"><h6><strong style="text-decoration: underline;">Speciality :</strong></h6></td>
          <table class="table table-bordered table-striped dt-responsive table-sm" style="width: 100%">
            <thead>
              <tr>
                <th>Details</th>
              </tr>
            </thead>
            <tbody>
              @foreach($specialities as $sp)
                <tr class="text-center">
                  <td>{{$sp->speciality}}</td>
                </tr>
              @endforeach   
            </tbody>
          </table>
        </div>

        <div class="col-md-12">
          <td colspan="2"><h6><strong style="text-decoration: underline;">Visiting Time :</strong></h6></td>
          <table class="table table-bordered table-striped dt-responsive table-sm" style="width: 100%">
            <thead>
              <tr>
                <th>Day</th>
                <th>Time</th>
              </tr>
            </thead>
            <tbody>
              @foreach($assign_times as $assign_time)
                <tr class="text-center">
                  <td>{{@$assign_time['day']['name']}}</td>
                  <td>{{@$assign_time['time']['name']}}</td>
                </tr>
              @endforeach   
            </tbody>
          </table>
        </div>

      </div>
    </div>

    </div>
  </div>

@endsection