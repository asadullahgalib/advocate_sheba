@if(!empty(trim(strip_tags((string) $law_firm->map, '<img><iframe>'))))
<!-- Location & Map -->
<div id="law-firm-map" class="col-lg-3 col-md-3 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
    <div class="doctor-profile-card">

        <!-- Header -->
        <div class="doctor-profile-title">
            <h3>
                Location & Map
            </h3>
        </div>

        {!! $law_firm->map !!}

    </div>
</div>
@endif