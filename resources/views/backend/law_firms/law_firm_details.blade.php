@extends('backend.layouts.master')
@section('content')

<style type="text/css">
  .btn_active{
    background: #F70F9E !important;
    color: #fff !important;
    text-decoration: underline !important;
    border: 1px solid #F70F9E !important;
  }
</style>

<div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Law Firm Details
                <a href="{{ route('law-firms.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Law Firm List</i></a>
            </h3>
        </div>

        <div class="card-body">
            <!-- ফার্মের বেসিক ইনফরমেশন (আইডি চেনার জন্য) -->
            <div class="row mb-4">
                <div class="col-md-12">
                    <table>
                        <tr>
                            <td><strong style="font-size:25px">{{ @$details->firm_name }}</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Leader:</strong> {{ @$details['leader']['name'] ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Court:</strong> {{ @$details->court_name ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Established:</strong> {{ @$details->established ?? 'N/A' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- ট্যাব মেনু -->
            @include('backend.law_firms.law_firm_tab')

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