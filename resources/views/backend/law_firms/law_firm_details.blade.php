@extends('backend.layouts.master')
@section('content')
<div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Law Firm Details <a href="{{ route('law-firms.view') }}" class="btn btn-success float-right btn-sm"><i class="fa fa-list"></i> List</a></h3>
        </div>
        <div class="card-body">
            @include('backend.law_firms.law_firm_tab')
            
            <div class="mt-3">
                <h3>{{ @$details->firm_name }}</h3>
                <p class="mb-1"><strong>Court:</strong> {{ @$details->court_name ?? 'N/A' }}</p>
                <p class="mb-1"><strong>Established:</strong> {{ @$details->established ?? 'N/A' }}</p>
                <p class="mb-1"><strong>Leader:</strong> {{ @$details['leader']['name'] ?? 'N/A' }}</p>
                <p class="mb-3"><strong>District:</strong> {{ @$details['district']['name'] ?? 'N/A' }}</p>
                
                <hr>

                <h5>About the Firm</h5>
                <div class="mb-3">{!! @$details->abouts !!}</div>

                <h5>Education & Qualification</h5>
                <div class="mb-3">{!! @$details->qualification !!}</div>

                <h5>Training & Certification</h5>
                <div class="mb-3">{!! @$details->training !!}</div>

                <h5>Professional Memberships</h5>
                <div class="mb-3">{!! @$details->membership !!}</div>

                <h5>Chamber & Office</h5>
                <div class="mb-3">{!! @$details->chamber !!}</div>

                <h5>Location & Map</h5>
                <div class="mb-3">{!! @$details->map !!}</div>

                <h5>Social Engagement</h5>
                <div class="mb-3">{!! @$details->social !!}</div>
            </div>
        </div>
    </div>
</div>
@endsection