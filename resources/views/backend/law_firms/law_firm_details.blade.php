@extends('backend.layouts.master')
@section('content')

<style type="text/css">
  .btn_active{
    background: #F70F9E !important;
    color: #fff !important;
    text-decoration: underline !important;
    border: 1px solid #F70F9E !important;
  }
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
                Law Firm Details
                <a href="{{ route('law-firms.view') }}" class="btn btn-success float-right btn-sm"><i class="fa fa-list"></i> Law Firm List</a>
            </h3>
        </div>

        <div class="card-body">
            <div class="row mb-4">

                <!-- ফার্মের বেসিক ইনফরমেশন -->
                <div class="col-md-8 col-xs-6">
                    <table>
                        <tr>
                            <td><strong style="font-size:25px">{{ @$details->firm_name }}</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Led by:</strong> {{ @$details->leader->name ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Court:</strong> {{ @$details->court_name ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Established:</strong> {{ @$details->established ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Head Advocate Enrollment No:</strong> {{ @$details->enrollment_no ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Bar Association:</strong> {{ @$details->bar_association ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Team:</strong> {{ isset($details->team_size) ? $details->team_size . ' Lawyers' : 'N/A' }}</td>
                        </tr>
                    </table>
                </div>

                <!-- ছবি -->
                <div class="col-md-4 col-xs-6">
                    <div class="profile-sidebar">
                        <div class="profile-userpic text-center">
                            <img src="{{ (!empty(@$details->image)) ? url('uploads/law_firm_images/'.@$details->image) : url('uploads/no_image.png') }}" class="img-responsive" alt="">
                        </div>
                    </div>
                </div>

                <!-- ট্যাব মেনু -->
                @include('backend.law_firms.law_firm_tab')
            </div>

            <!-- ট্যাব কন্টেন্ট -->
            <div class="mt-4">
                <!-- Abouts -->
                <h5 class="border-bottom pb-2">About the Firm</h5>
                <div class="mb-4">{!! @$details->abouts ?? 'N/A' !!}</div>

                <!-- Qualification -->
                <h5 class="border-bottom pb-2">Education & Qualification</h5>
                <div class="mb-4">{!! @$details->qualification ?? 'N/A' !!}</div>

                <!-- Training -->
                <h5 class="border-bottom pb-2">Training & Certification</h5>
                <div class="mb-4">{!! @$details->training ?? 'N/A' !!}</div>

                <!-- Membership -->
                <h5 class="border-bottom pb-2">Professional Memberships</h5>
                <div class="mb-4">{!! @$details->membership ?? 'N/A' !!}</div>

                <!-- Chamber -->
                <h5 class="border-bottom pb-2">Chamber & Office</h5>
                <div class="mb-4">{!! @$details->chamber ?? 'N/A' !!}</div>

                <!-- Map -->
                <h5 class="border-bottom pb-2">Location & Map</h5>
                <div class="mb-4">{!! @$details->map ?? 'N/A' !!}</div>

                <!-- Social -->
                <h5 class="border-bottom pb-2">Social Engagement</h5>
                <div class="mb-4">{!! @$details->social ?? 'N/A' !!}</div>
            </div>

        </div>
    </div>
</div>
@endsection