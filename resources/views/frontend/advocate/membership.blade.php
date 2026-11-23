<!-- Professional Memberships -->
@if(!empty($advocate->membership))
<div class="col-lg-3 col-md-3 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">

    <div class="doctor-profile-card">

        <div class="doctor-profile-title">
            <h3>Professional Memberships</h3>
        </div>

        {!! $advocate->membership !!}

    </div>

</div>
@endif