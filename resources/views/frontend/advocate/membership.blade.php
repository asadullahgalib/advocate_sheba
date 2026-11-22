<!-- Professional Memberships -->
@if(!empty($advocate->membership))
<div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
    <div class="doctor-profile-card">

        <!-- Header -->
        <div class="doctor-profile-title">
            <h3>
                Professional Memberships
            </h3>
        </div>

        <!-- Main Profile (Dynamic from Database) -->
        <div class="doctor-main-profile">
            {!! $advocate->membership !!}
        </div>

    </div>
</div>
@endif