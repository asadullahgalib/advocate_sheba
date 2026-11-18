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
              <img src="{{(!empty(@$details->image))?url('uploads/advocates_images/'.@$details->image):url('uploads/no_image.png')}}" class="img-responsive" alt="">
            </div>
          </div>
          </div>
          @include('backend.advocate.advocate_tab')
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
              <td width="20%"><strong>Consultation Fee</strong> </td>
              <td>: {{ @$details->consultation_fee }}</td>
            </tr>
            <tr>
              <td width="20%"><strong>Follow-up Fee</strong> </td>
              <td>: {{ @$details->follow_up_fee }}</td>
            </tr>
            <tr>
              <td width="20%"><strong>IMO/What's App</strong> </td>
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

    </div>
  </div>

@endsection