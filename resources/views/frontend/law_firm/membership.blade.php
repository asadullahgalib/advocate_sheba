<!-- Professional Memberships -->
@if(!empty(trim(strip_tags((string) $law_firm->membership, '<img><iframe>'))))
<div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
    <div class="doctor-profile-card">

        <!-- Header -->
        <div class="doctor-profile-title">
            <h3>
                Professional Memberships
            </h3>
        </div>

        {!! $law_firm->membership !!}

    </div>
</div>
@endif