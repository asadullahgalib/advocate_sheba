<!-- Education & Qualification -->
@php
    // qualification কলামের ডাটা কমা দিয়ে ভাগ করা হচ্ছে
    $qualifications = [];
    if (!empty($advocate->qualification)) {
        // HTML ট্যাগ থাকলে পরিষ্কার করা হচ্ছে
        $cleanQualification = strip_tags($advocate->qualification);
        // কমা দিয়ে explode করা হচ্ছে
        $qualifications = array_filter(array_map('trim', explode(',', $cleanQualification)));
    }
@endphp

@if(count($qualifications) > 0)
<div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
    <div class="doctor-profile-card">

        <!-- Header -->
        <div class="doctor-profile-title">
            <h3>
                Education & Qualification
            </h3>
        </div>

        <!-- Main Profile (Loop) -->
        @foreach($qualifications as $qualification)
        <div class="doctor-main-profile card" style="padding: 5px 0px;background: #f5f5f5;    margin-bottom: 15px;">

            <div style="width: 35px;
                font-size: 25px;
                float: left;
                margin: 15px 0px 5px 10px;">
                <i class="fa fa-graduation-cap" style="color:#155B30;"></i>
            </div>
            <div>
                <h3 style="font-size: 20px;">{{ $qualification }}</h3>
                <p>{{ $advocate->bar_association ?? 'Bar Association' }}</p>
            </div>
        </div>
        @endforeach

        {{-- Enrollment Number থাকলে দেখাবে --}}
        @if(!empty($advocate->enrollment_no))
        <div class="doctor-main-profile card" style="padding: 5px 0px;background: #f5f5f5;    margin-bottom: 15px;">
            <div style="width: 35px;
                font-size: 25px;
                float: left;
                margin: 15px 0px 5px 10px;">
                <i class="fa fa-id-card" style="color:#155B30;"></i>
            </div>
            <div>
                <h3 style="font-size: 20px;">Enrollment No</h3>
                <p>{{ $advocate->enrollment_no }}</p>
            </div>
        </div>
        @endif

    </div>
</div>
@endif