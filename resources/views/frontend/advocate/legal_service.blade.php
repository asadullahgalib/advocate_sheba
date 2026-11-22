{{-- Legal Services --}}
@php
    $hasLaws = isset($advocate_laws) && $advocate_laws->count() > 0;
    $hasPracticeAreas = isset($advocate_practice_areas) && $advocate_practice_areas->count() > 0;
@endphp

@if($hasLaws || $hasPracticeAreas)
<div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
    <div class="lpc-slide">

        <div class="lpc-card">

            <!-- PROFILE BODY -->
            <div class="lpc-body">

                {{-- ===== Legal Services (from advocate_laws) ===== --}}
                @if($hasLaws)
                <div class="doctor-profile-title">
                    <h3>
                        Legal Services
                    </h3>
                </div>

                <div class="row">
                    @foreach($advocate_laws as $advocate_law)
                        @if($advocate_law->law)
                        <div class="col-md-6">
                            <button class="btn" style="background-color: white;color: black;border: 1px solid rgb(16, 60, 109);width: 100%;margin-bottom: 10px;border-radius: 10px;">
                                {{ $advocate_law->law->title_en }}
                            </button>
                        </div>
                        @endif
                    @endforeach
                </div>
                @endif

                {{-- ===== Additional Expertise (from advocate_practice_areas) ===== --}}
                @if($hasPracticeAreas)
                <div class="doctor-profile-title">
                    <h3>
                        Additional Expertise
                    </h3>
                </div>

                <div class="row">
                    <div class="col-md-12" style="text-align:left;">
                        @foreach($advocate_practice_areas as $advocate_practice_area)
                            @if($advocate_practice_area->practice)
                            <button class="btn" style="background-color: #a0cae33d;color: black;border: 1px solid #a0cae33d;margin-bottom: 10px;border-radius: 20px;color: #000;padding: 5px 15px;">
                                {{ $advocate_practice_area->practice->name }}
                            </button>
                            @endif
                        @endforeach
                    </div>
                </div>
                @endif

            </div>

        </div>

    </div>
</div>
@endif