<!-- Training & Certifications -->
@if(!empty(trim(strip_tags((string) $law_firm->training, '<img><iframe>'))))
<div class="col-lg-3 col-md-3 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
    <div class="doctor-profile-card">

        <!-- Header -->
        <div class="doctor-profile-title">
            <h3>
                Certifications & Training
            </h3>
        </div>

        {!! $law_firm->training !!}

    </div>
</div>
@endif