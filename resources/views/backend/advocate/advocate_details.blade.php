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

      @include('backend.advocate.advocate_tab')

      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <table style="width:100%;padding: 3px;">
              <tr>
                <td width="20%"><strong>Total Experience</strong> </td>
                <td>: {{ @$details->experience }}</td>
              </tr>
              <tr>
                <td width="20%"><strong>IMO/What's App</strong> </td>
                <td>: {{ @$details->appointment_contact }}</td>
              </tr>
              <tr>
                <td width="20%"><strong>Last E.Qualification</strong> </td>
                <td>: {{ @$details->short_qualification }}</td>
              </tr>
              <tr>
                <td width="20%"><strong>Enrollment No</strong> </td>
                <td>: {{ @$details->enrollment_no }}</td>
              </tr>
              <tr>
                <td width="20%"><strong>Bar Association</strong> </td>
                <td>: {{ @$details->bar_association }}</td>
              </tr>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>

@endsection