<!-- Courts of Practice & Practice Locations -->
@php
    $hasLocations = isset($advocate_locations) && $advocate_locations->count() > 0;
    $hasPracticeAreas = isset($advocate_practice_areas) && $advocate_practice_areas->count() > 0;
@endphp

@if($hasLocations || $hasPracticeAreas)
<div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
    <div class="doctor-profile-card">

        {{-- ===== Courts of Practice (From advocate_locations) ===== --}}
        @if($hasLocations)
        <div class="doctor-profile-title">
            <h3>
                Courts of Practice
            </h3>
        </div>

        <div class="row">
            <div class="col-md-12" style="text-align:left;">
                <ul>
                    @foreach($advocate_locations as $location)
                        @if($location->district)
                        <li style="line-height: 30px;">
                            <i class="fa fa-circle" aria-hidden="true"></i> &nbsp; 
                            <strong>{{ $location->district->name }}</strong> 
                            {{-- যদি আপনার টেবিলে আদালতের নাম আলাদা কলামে থাকে, তাহলে নিচে সেটা বসাবেন, আপাতত ডিস্ট্রিক্টের নাম দেখাচ্ছি --}}
                        </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        @endif

        {{-- ===== Practice Locations (From advocate_practice_areas) ===== --}}
        @if($hasPracticeAreas)
        <div class="doctor-profile-title" style="margin-top:20px;">
            <h3>
                Practice Locations
            </h3>
        </div>

        <div class="row">
            <div class="col-md-12" style="text-align:left;">
                @foreach($advocate_practice_areas as $practice)
                    @if($practice->practice)
                    <button class="btn" style="background-color: #a0cae33d;color: black;border: 1px solid #a0cae33d;margin-bottom: 10px;border-radius: 20px;color: #000;padding: 5px 15px;">
                        {{ $practice->practice->name }}
                    </button>
                    @endif
                @endforeach
            </div>
        </div>
        @endif

    </div>
</div>
@endif