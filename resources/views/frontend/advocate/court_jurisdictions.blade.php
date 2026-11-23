<!-- Courts of Practice & Practice Locations -->
@php
    $hasLocations = isset($advocate_locations) && $advocate_locations->count() > 0;
    
    $advocateCourtofPractice = $advocate->social ?? null;
    $advocateCourtofPractice = $advocateCourtofPractice ? trim(strip_tags($advocateCourtofPractice)) : null;
@endphp

@if($hasLocations || $advocateCourtofPractice)
<div class="col-lg-3 col-md-3 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
    <div class="doctor-profile-card">

        {{-- ===== Courts of Practice (From advocate_locations) ===== --}}
        @if($advocateCourtofPractice)
        <div class="doctor-profile-title">
            <h3>
                Courts of Practice
            </h3>
        </div>

        <div class="row">
            <div class="col-md-12" style="text-align:left;">
                {!! $advocate->social !!}
            </div>
        </div>
        @endif

        {{-- ===== Practice Locations (From advocate_locations) ===== --}}
        @if($hasLocations)
        <div class="doctor-profile-title" style="margin-top:20px;">
            <h3>
                Practice Locations
            </h3>
        </div>

        <div class="row">
            <div class="col-md-12" style="text-align:left;">
                @foreach($advocate_locations as $location)
                    @if($location->district)
                    <button class="btn" style="background-color: #a0cae33d;color: black;border: 1px solid #a0cae33d;margin-bottom: 10px;border-radius: 20px;color: #000;padding: 5px 15px;">
                        {{ @$location->district->name }}
                    </button>
                    @endif
                @endforeach
            </div>
        </div>
        @endif

    </div>
</div>
@endif