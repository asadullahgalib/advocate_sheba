<!-- Govt. & Social Engagement -->
@if(!empty($advocate->social))
<div class="col-lg-3 col-md-3 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
    <div class="doctor-profile-card">

        <!-- Header -->
        <div class="doctor-profile-title">
            <h3>
                Govt. & Social Engagement
            </h3>
        </div>

        <!-- Main Profile (Dynamic from Database) -->
        <div class="doctor-main-profile">
            {!! $advocate->social !!}
        </div>

    </div>
</div>
@endif