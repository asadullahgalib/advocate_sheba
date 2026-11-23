<!-- Location & Map -->
@if(!empty($advocate->map_address))
<div class="col-lg-3 col-md-3 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
    <div class="doctor-profile-card">

        <!-- Header -->
        <div class="doctor-profile-title">
            <h3>
                Location & Map
            </h3>
        </div>

        <p style="font-weight: bold;margin-bottom: 16px;"> <i class="fa fa-map-marker"></i> {{@$advocate->map_address}} </p> 

        {!! @$advocate->map_embed !!}

    </div>
</div>
@endif