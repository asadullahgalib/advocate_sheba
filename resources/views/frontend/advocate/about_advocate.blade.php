{{-- About Advocate --}}
@php
    $advocateAbout = $advocate->abouts ?? null;
    $advocateAbout = $advocateAbout ? trim(strip_tags($advocateAbout)) : null;
@endphp

@if($advocateAbout)
<div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
    <div class="lpc-slide">
        <div class="lpc-card">
            <div class="lpc-body">
                <!-- Header -->
                <div class="doctor-profile-title">
                    <h3>
                        About Advocate
                    </h3>
                </div>

                <!-- Main Profile -->
                <div class="doctor-main-profile">
                    <div class="doctor-info">
                        {!! $advocate->abouts !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif