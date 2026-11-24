<!-- Education & Qualification -->
@if(!empty(trim(strip_tags((string) $law_firm->qualification, '<img><iframe>'))))
<div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
    <div class="doctor-profile-card">

        <!-- Header -->
        <div class="doctor-profile-title">
            <h3>
                Education & Qualification
            </h3>
        </div>

        {!! $law_firm->qualification !!}

    </div>
</div>
@endif