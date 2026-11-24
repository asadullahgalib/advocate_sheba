@php
    // লিডারের Law-এর নামের তালিকা
    $lawNames = isset($leader_laws)
        ? $leader_laws->map(function ($item) {
              return optional($item->law)->title_en;
          })->filter()->unique()->values()
        : collect();

    // লিডারের Practice Area-র নামের তালিকা
    $practiceNames = isset($leader_practice_areas)
        ? $leader_practice_areas->map(function ($item) {
              return optional($item->practice)->name;
          })->filter()->unique()->values()
        : collect();
@endphp

@if($lawNames->isNotEmpty() || $practiceNames->isNotEmpty())
<!-- Legal Services -->
<div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
    <div class="lpc-slide">

        <div class="lpc-card">

            <!-- PROFILE BODY -->

            <div class="lpc-body">

                @if($lawNames->isNotEmpty())
                <!-- Header -->
                <div class="doctor-profile-title">
                    <h3>
                        Legal Services
                    </h3>
                </div>

                <div class="row">
                    @foreach($lawNames as $lawName)
                    <div class="col-md-6">
                        <button type="button" class="btn" style="background-color: white;color: black;border: 1px solid rgb(16, 60, 109);width: 100%;margin-bottom: 10px;border-radius: 10px;">{{ $lawName }}</button>
                    </div>
                    @endforeach
                </div>
                @endif

                @if($practiceNames->isNotEmpty())
                <div class="doctor-profile-title">
                    <h3>
                        Additional Expertise
                    </h3>
                </div>

                <div class="row">
                    <div class="col-md-12" style="text-align:left;">
                        @foreach($practiceNames as $practiceName)
                        <button type="button" class="btn" style="background-color: #a0cae33d;color: black;border: 1px solid #a0cae33d;margin-bottom: 10px;border-radius: 20px;color: #000;padding: 5px 15px;">{{ $practiceName }}</button>
                        @endforeach
                    </div>
                </div>
                @endif

            </div>

        </div>

    </div>
</div>
@endif