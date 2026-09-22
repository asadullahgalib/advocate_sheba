<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>

    /* =========================================
       Doctor Profile Card
    ========================================= */

    .advocate-profile-card {
        background: #ffffff;
        border-radius: 22px;
        padding: 20px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.12);
        border: 1px solid #eeeeee;
        overflow: hidden;
    }

    /* Header */
    .advocate-profile-title {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
    }

    .advocate-profile-number {
        width: 35px;
        height: 35px;
        min-width: 35px;
        background: #16a085;
        color: #ffffff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        font-weight: 700;
    }

    .advocate-profile-title h3 {
        margin: 0;
        color: #12636c;
        font-size: 20px;
        font-weight: 700;
    }


    /* =========================================
       Main Profile
       সবসময় পাশাপাশি থাকবে
    ========================================= */

    .advocate-main-profile {
        display: flex !important;
        flex-direction: row !important;
        align-items: flex-start;
        gap: 15px;
        width: 100%;
    }


    /* =========================================
       Doctor Image
    ========================================= */

    .advocate-image-wrapper {
        width: 35%;
        min-width: 35%;
        position: relative;
    }

    .advocate-image-box {
        width: 100%;
        height: 210px;
        border-radius: 16px;
        overflow: hidden;
        background: #eeeeee;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.12);
    }

    .advocate-image-box img {
        /*width: 100%;
        height: 100%;*/
        object-fit: cover;
        display: block;
    }


    /* Verified */
    .advocate-verified {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;

        min-height: 45px;

        background: #ffffff;
        border-radius: 0 0 15px 15px;

        display: flex;
        align-items: center;
        justify-content: center;

        gap: 3px;

        color: #12636c;
        font-size: 10px;
        font-weight: 700;

        box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.08);
    }

    .advocate-verified i {
        color: #159d62;
        font-size: 16px;
    }


    /* =========================================
       Doctor Information
    ========================================= */

    .advocate-info {
        width: 60%;
        flex: 1;
        min-width: 0;
        padding-top: 2px;
    }


    /* Name */

    .advocate-name {
        display: flex;
        align-items: center;
        gap: 4px;
        margin-bottom: 5px;
    }

    .advocate-name h2 {
        font-size: 19px;
        font-weight: 700;
        color: #111111;
        margin: 0;

        /* নাম বেশি বড় হলে পরের লাইনে যাবে */
        white-space: normal;
        overflow-wrap: break-word;
        word-wrap: break-word;

        /* Available space অনুযায়ী নাম থাকবে */
        flex: 1;
        min-width: 0;

        line-height: 1.25;
    }

    .advocate-name .verified-icon {
        color: #198bea;
        font-size: 18px;
        flex-shrink: 0;
    }


    /* Speciality */

    .advocate-speciality {
        font-size: 14px;
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .advocate-speciality strong {
        color: #12636c;
    }

    .advocate-speciality span {
        color: #111111;
    }


    /* Qualification */

    .advocate-qualification {
        color: #222222;
        font-size: 11px;
        line-height: 1.4;
        margin-bottom: 10px;
    }


    /* =========================================
       Rating
    ========================================= */

    .advocate-rating {
        display: flex;
        align-items: center;
        gap: 3px;
        margin-bottom: 12px;
        flex-wrap: nowrap;
    }

    .advocate-rating .star {
        color: #f5b400;
        font-size: 18px;
        line-height: 1;
    }

    .advocate-rating .rating-number {
        color: #d89d00;
        font-size: 19px;
        font-weight: 600;
        margin-left: 2px;
    }

    .advocate-rating .review-count {
        color: #111111;
        font-size: 10px;
        white-space: nowrap;
    }


    /* =========================================
       Detail Items
    ========================================= */

    .advocate-detail-item {
        display: flex;
        align-items: center;
        gap: 6px;
        margin-bottom: 8px;
        color: #111111;
        font-size: 11px;
        line-height: 1.25;
    }

    .advocate-detail-item i {
        width: 20px;
        min-width: 20px;
        text-align: center;
        color: #1263a0;
        font-size: 18px;
    }

    .advocate-detail-item strong {
        font-weight: 700;
    }


    /* =========================================
       Buttons
    ========================================= */

    .advocate-action-buttons {
        margin-top: 18px;
    }

    .advocate-btn {
        width: 100%;
        height: 45px;

        border-radius: 12px;
        border: none;

        display: flex;
        align-items: center;
        justify-content: center;

        gap: 7px;

        font-size: 15px;
        font-weight: 600;

        text-decoration: none;

        transition: all 0.25s ease;
    }

    .advocate-btn i {
        font-size: 18px;
    }

    .advocate-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    }


    /* Appointment */

    .btn-appointment {
        background: #126d76;
        color: #ffffff;
    }

    .btn-appointment:hover {
        background: #0e5961;
        color: #ffffff;
    }


    /* Call */

    .btn-call {
        background: #147dea;
        color: #ffffff;
    }

    .btn-call:hover {
        background: #0869cf;
        color: #ffffff;
    }


    /* Bottom Buttons */

    .advocate-bottom-buttons {
        margin-top: 10px;
    }

    .advocate-outline-btn {
        width: 100%;
        height: 45px;

        border: 2px solid #126d76;
        border-radius: 12px;

        background: #ffffff;
        color: #101536;

        display: flex;
        align-items: center;
        justify-content: center;

        gap: 5px;

        font-size: 13px;
        font-weight: 600;

        text-decoration: none;

        transition: all 0.25s ease;
    }

    .advocate-outline-btn i {
        color: #126d76;
        font-size: 18px;
    }

    .advocate-outline-btn:hover {
        background: #126d76;
        color: #ffffff;
    }

    .advocate-outline-btn:hover i {
        color: #ffffff;
    }


    /* =========================================
       Desktop - col-md-4 একটু বড় হলে
    ========================================= */

    @media (min-width: 992px) {

        .advocate-profile-card {
            padding: 20px 10px;
            height: 295px;
        }

        .advocate-profile-number {
            width: 35px;
            height: 35px;
            min-width: 35px;
            font-size: 25px;
        }

        .advocate-profile-title h3 {
            font-size: 23px;
        }

        .advocate-main-profile {
            gap: 18px;
        }

        .advocate-image-box {
            height: 112px;
        }

        .advocate-verified {
            min-height: 52px;
            font-size: 13px;
        }

        .advocate-verified i {
            font-size: 19px;
        }

        .advocate-name h2 {
            font-size: 17px;
        }

        .advocate-name .verified-icon {
            font-size: 21px;
        }

        .advocate-speciality {
            font-size: 17px;
        }

        .advocate-qualification {
            font-size: 13px;
        }

        .advocate-rating .star {
            font-size: 22px;
        }

        .advocate-rating .rating-number {
            font-size: 23px;
        }

        .advocate-rating .review-count {
            font-size: 12px;
        }

        .advocate-detail-item {
            font-size: 13px;
        }

        .advocate-btn {
            height: 52px;
            font-size: 17px;
        }

        .advocate-outline-btn {
            height: 30px;
            font-size: 14px;
        }
    }


    /* =========================================
       Small Mobile
       পাশাপাশি থাকবে, শুধু আরও ছোট হবে
    ========================================= */

    @media (max-width: 575.98px) {

        .advocate-profile-card {
            padding: 14px;
            border-radius: 17px;
        }

        .advocate-profile-title {
            margin-bottom: 14px;
            gap: 7px;
        }

        .advocate-profile-number {
            width: 35px;
            height: 35px;
            min-width: 35px;
            font-size: 19px;
        }

        .advocate-profile-title h3 {
            font-size: 17px;
        }

        .advocate-main-profile {
            gap: 10px;
        }

        .advocate-image-box {
            height: 175px;
            border-radius: 13px;
        }

        .advocate-verified {
            min-height: 37px;
            font-size: 8px;
            gap: 2px;
        }

        .advocate-verified i {
            font-size: 13px;
        }

        .advocate-name {
            gap: 3px;
        }

        .advocate-name h2 {
            font-size: 16px;
        }

        .advocate-name .verified-icon {
            font-size: 15px;
        }

        .advocate-speciality {
            font-size: 12px;
            margin-bottom: 7px;
        }

        .advocate-qualification {
            font-size: 9px;
            margin-bottom: 7px;
        }

        .advocate-rating {
            gap: 2px;
            margin-bottom: 8px;
        }

        .advocate-rating .star {
            font-size: 14px;
        }

        .advocate-rating .rating-number {
            font-size: 16px;
        }

        .advocate-rating .review-count {
            font-size: 8px;
        }

        .advocate-detail-item {
            gap: 4px;
            margin-bottom: 6px;
            font-size: 8.5px;
        }

        .advocate-detail-item i {
            width: 16px;
            min-width: 16px;
            font-size: 15px;
        }

        .advocate-action-buttons {
            margin-top: 12px;
        }

        .advocate-btn {
            height: 42px;
            border-radius: 10px;
            font-size: 13px;
        }

        .advocate-btn i {
            font-size: 16px;
        }

        .advocate-bottom-buttons {
            margin-top: 8px;
        }

        .advocate-outline-btn {
            height: 42px;
            border-radius: 10px;
            font-size: 10px;
        }

        .advocate-outline-btn i {
            font-size: 15px;
        }
    }

    .custom_doctor_profile_bottom{
        margin-bottom: 15px;
    }


    /* =========================================
       Extra Small Mobile
    ========================================= */

    @media (max-width: 400px) {

        .advocate-profile-card {
            padding: 11px;
        }

        .advocate-main-profile {
            gap: 8px;
        }

        .advocate-image-box {
            height: 155px;
        }

        .advocate-name h2 {
            font-size: 14px;
        }

        .advocate-name .verified-icon {
            font-size: 13px;
        }

        .advocate-speciality {
            font-size: 10px;
        }

        .advocate-qualification {
            font-size: 8px;
        }

        .advocate-rating .star {
            font-size: 12px;
        }

        .advocate-rating .rating-number {
            font-size: 14px;
        }

        .advocate-rating .review-count {
            font-size: 7px;
        }

        .advocate-detail-item {
            font-size: 7.5px;
        }

        .advocate-detail-item i {
            font-size: 13px;
        }

        .advocate-btn {
            height: 38px;
            font-size: 11px;
        }

        .advocate-outline-btn {
            height: 38px;
            font-size: 9px;
        }
        .profile_specialties_img{
           width: 60px !important;
        }
    }

</style>
<section class="section-padding pb-5" style="background:#f5f5f5;padding: 0px 0px 25px 0px;margin-bottom: 15px;border-radius: 15px;margin: -25px 0px -15px 0px;">
    <div class="container">

        <div class="section-title">
            <div class="title text-center">
                <h3 style="color: #1B489D;font-size: 20px;text-align: left;">
                    <!-- <i class="fa fa-check" style="background: #129AF7;
                        color: #fff;
                        padding: 4px;
                        border-radius: 15px;"></i> --> 
                        Recommented Advocates
                </h3>
            </div>
            <!-- <div class="title text-center mobile_view_all">
                <h3 style="color: #1B489D;font-size: 20px;">
                    <a href="#">View all <i class="fa fa-arrow-right"></i> </a>
                </h3>
            </div> -->
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                <div class="tab-content" id="myTabContent-1">
                    <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                        <div class="carausel-4-columns-cover arrow-center position-relative">
                            <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
                            <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
                                @foreach($doctors as $doctor)
                                <div class="product-cart-wrap mb-30">
                                    <!-- Doctor Profile -->
                                    <div class="wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
                                        <div class="advocate-profile-card">

                                            <!-- Main Profile -->
                                            <div class="advocate-main-profile">

                                                <!-- Doctor Image -->
                                                <div class="advocate-image-wrapper">

                                                    <div class="advocate-image-box">

                                                        <!-- আপনার Doctor Image এখানে দিন -->
                                                        <img src="{{asset('frontend/adv.png')}}"
                                                             alt="Advocate Sheba">

                                                    </div>
                                                </div>


                                                <!-- Doctor Information -->
                                                <div class="advocate-info">

                                                    <!-- Name -->
                                                    <div class="advocate-name">

                                                        <h2>
                                                            মোঃ আসাদুল্লাহ গালিব
                                                        </h2>

                                                    </div>


                                                    <!-- Designation -->
                                                    <div class="advocate-speciality">

                                                        Advocate

                                                    </div>


                                                    <!-- Court -->
                                                    <div class="advocate-qualification">

                                                        Supreme Court of Bangladesh

                                                    </div>

                                                    <!-- Address -->
                                                    <div class="advocate-detail-item">

                                                        <i class="fa fa-map-marker"></i>

                                                        <span>
                                                            Dhaka
                                                        </span>

                                                    </div>

                                                    <!-- Experience -->
                                                    <div class="advocate-detail-item">

                                                        <i class="fa fa-user-md"></i>

                                                        <span>
                                                            Corporate Law, Civil Law
                                                        </span>

                                                    </div>

                                                    <div class="advocate-name">
                                                        <h2 style="font-size: 16px;color:#00b80a;">
                                                            <i class="fa fa-check verified-icon" style="border: 1px solid #129AF7;
                                                                padding: 3px;
                                                                border-radius: 25px;
                                                                background: #00b80a;
                                                                color: white;font-size: 11px;"></i>
                                                            Verified 

                                                        </h2>

                                                    </div>

                                                </div>

                                            </div>


                                            <!-- Action Buttons -->
                                            <div class="advocate-action-buttons">

                                                <!-- WhatsApp + Share -->
                                                <div class="row g-3 advocate-bottom-buttons">

                                                    <!-- WhatsApp -->
                                                    <div class="col-6">

                                                        <a href="tel:+8801700000000"
                                                           class="advocate-outline-btn">

                                                            <i class="fa fa-phone"></i>

                                                            <span>
                                                                Call Now
                                                            </span>

                                                        </a>

                                                    </div>


                                                    <!-- Share -->
                                                    <div class="col-6">

                                                        <a href="{{route('advocate-profile')}}"
                                                           class="advocate-outline-btn">

                                                            <span>
                                                                View Profile
                                                            </span>

                                                            <i class="fa fa-arrow-right"></i>

                                                        </a>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--End tab-pane-->
                </div>
                <!--End tab-content-->
            </div>
            <!--End Col-lg-9-->
        </div>
    </div>
</section>
