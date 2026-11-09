<section class="advocate-faq-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1 col-lg-12">

                <div class="info-banner alert">
                    <div class="row align-items-center">

                        <div class="col-md-1 col-sm-2 text-center mb-3 mb-md-0">
                            <img class="trusted_logo_mobile" src="{{asset('uploads/dashboard_logo_images/'.@$logo->image2)}}" alt="Advocate Sheba Logo" />
                        </div>

                        <div class="col-md-11 col-sm-10">

                            <h3 class="banner-title">
                                Trusted Health Information & Doctor Discovery Platform in Bangladesh
                            </h3>

                            <p class="banner-text">
                                advocatesSheba is a Bangladesh-based health information and doctor discovery platform that helps people find the right doctors, explore healthcare facilities, and access reliable health information.
                            </p>

                            <p class="banner-text">
                                Doctor profiles and hospital listings are created using publicly available information and submitted professional credentials to improve transparency, accessibility, and informed healthcare decisions.
                            </p>

                            <p class="banner-text mb-0">
                                Users can search doctors by specialty, location, hospital, or medical condition, explore healthcare facilities, and access expert-led health education content — all in one trusted platform.
                            </p>

                        </div>
                    </div>
                </div>

                <!-- FAQ Heading -->
                <h3 style="text-align: left; margin-bottom: 35px; font-size: 22px; color: #1c2d42; font-weight: bold;">
                    Frequently Asked Questions (FAQs)
                </h3>

                <!-- Dynamic FAQ Grid -->
                <div class="row">

                    @forelse($faqs as $faq)

                        <div class="col-md-6 col-lg-6 col-sm-12"
                             style="margin-bottom:30px; padding-right: 20px;">

                            <div style="display: flex; align-items: flex-start;">

                                <div style="margin-right: 15px; margin-top: 2px; color: #103C6D; font-size: 20px; line-height: 1;">
                                    <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                </div>

                                <div>

                                    <!-- FAQ Question -->
                                    <p style="font-weight: bold; font-size: 16px; color: #1c2d42; margin-bottom: 8px;">
                                        {{ $faq->question }}
                                    </p>

                                    <!-- FAQ Answer -->
                                    <p style="font-size: 14px; color: #515b6f; line-height: 1.6; text-align: justify;">
                                        {{ $faq->answer }}
                                    </p>

                                </div>

                            </div>
                        </div>

                    @empty

                        <div class="col-12">
                            <p style="font-size: 14px; color: #515b6f;">
                                No FAQs available at the moment.
                            </p>
                        </div>

                    @endforelse

                </div>

            </div>
        </div>
    </div>
</section>


<!-- FAQ CSS -->
<style>

    .advocate-faq-section {
        padding: 40px 0;
        background-color: #f8f9fa;
        margin-bottom: 20px;
        border-radius: 12px;
    }

    .info-banner {
        background-color: #103C6D;
        border: none;
        border-radius: 12px;
        padding: 25px;
        margin-bottom: 40px;
    }

    .banner-logo {
        max-width: 60px;
        height: auto;
    }

    .banner-title {
        font-size: 22px;
        color: #ffffff;
        font-weight: 700;
        margin-bottom: 15px;
        text-align: left;
    }

    .banner-text {
        color: #e9ecef;
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 12px;
    }

</style>
