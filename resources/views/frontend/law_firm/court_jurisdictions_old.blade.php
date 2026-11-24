@php
    // ফার্মের কোর্ট: প্রতিটা নতুন লাইন আলাদা আইটেম
    $courtLines = collect(preg_split('/\r\n|\r|\n/', (string) $law_firm->court_name))
        ->map(function ($line) {
            return trim($line);
        })
        ->filter()
        ->values();

    // লিডারের কাজের জেলার তালিকা
    $locationNames = isset($leader_locations)
        ? $leader_locations->map(function ($item) {
              return optional($item->district)->name;
          })->filter()->unique()->values()
        : collect();
@endphp

@if($courtLines->isNotEmpty() || $locationNames->isNotEmpty())
<!-- Courts of Practice & Practice Locations -->
<div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
    <div class="doctor-profile-card">

        @if($courtLines->isNotEmpty())
        <!-- Header -->
        <div class="doctor-profile-title">
            <h3>
                Courts of Practice
            </h3>
        </div>

        <div class="row">
            <div class="col-md-12" style="text-align:left;">
                <ul>
                    @foreach($courtLines as $court)
                    <li style="line-height: 30px;"><i class="fa fa-circle" aria-hidden="true"></i> &nbsp; <strong>{{ $court }}</strong></li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif

        @if($locationNames->isNotEmpty())
        <div class="doctor-profile-title" @if($courtLines->isNotEmpty()) style="margin-top:20px;" @endif>
            <h3>
                Practice Locations
            </h3>
        </div>

        <div class="row">
            <div class="col-md-12" style="text-align:left;">
                @foreach($locationNames as $locationName)
                <button type="button" class="btn" style="background-color: #a0cae33d;color: black;border: 1px solid #a0cae33d;margin-bottom: 10px;border-radius: 20px;color: #000;padding: 5px 15px;">{{ $locationName }}</button>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</div>
@endif