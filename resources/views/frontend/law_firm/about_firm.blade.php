@if(!empty(trim(strip_tags((string) $law_firm->abouts))))
<!-- About the Firm -->
<div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
    <div class="lpc-slide">

        <div class="lpc-card">

            <!-- PROFILE BODY -->

            <div class="lpc-body">
                <!-- Header -->
                <div class="doctor-profile-title">
                    <h3>
                        About the Firm
                    </h3>
                </div>

                <!-- Main Profile -->
                <div class="doctor-main-profile">

                    <!-- ফার্মের সম্পর্কে (Admin-এর About ট্যাব থেকে) -->
                    <div class="firm-about-content" style="width:100%;">

                        {!! $law_firm->abouts !!}

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

<style>
    /* Admin editor-এর লেখায় আগে থেকে doctor-info ক্লাস থাকলে সেটা যেন পুরো প্রস্থ নেয় */
    .firm-about-content .doctor-info {
        width: 100%;
        flex: none;
    }
</style>
@endif