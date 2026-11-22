<!-- Location & Map -->
<div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
    <div class="doctor-profile-card">

        <!-- Header -->
        <div class="doctor-profile-title">
            <h3>
                Location & Map
            </h3>
        </div>

        @if(!empty($advocate->present_address))
            <p style="font-weight: bold; margin-bottom: 16px;">
                <i class="fa fa-map-marker"></i> {{ $advocate->present_address }}
            </p>
        @else
            <p style="font-weight: bold; margin-bottom: 16px; color: #777;">
                <i class="fa fa-map-marker"></i> Address not available
            </p>
        @endif

        @if(!empty($advocate->map))
            @if(\Illuminate\Support\Str::contains($advocate->map, '<iframe'))
                <div class="advocate-map-wrapper" style="width: 100%; overflow: hidden;">
                    {!! $advocate->map !!}
                </div>
            @else
                <iframe src="{{ $advocate->map }}" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
            @endif
        @else
            <div style="height: 320px; background: #f8f9fa; border: 1px dashed #ddd; display: flex; align-items: center; justify-content: center; color: #888; border-radius: 6px;">
                <p style="margin: 0;"><i class="fa fa-map-o"></i> Map location not added yet</p>
            </div>
        @endif

    </div>
</div>
