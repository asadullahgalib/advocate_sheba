@extends('frontend.layouts.master')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>

        /* =========================================
           Advocate Profile Card
        ========================================= */

        .doctor-profile-card {
            background: #ffffff;
            border-radius: 22px;
            padding: 20px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.12);
            border: 1px solid #eeeeee;
            overflow: hidden;
        }

        /* Header */
        .doctor-profile-title {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .doctor-profile-number {
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

        .doctor-profile-title h3 {
            margin: 0;
            color: #12636c;
            font-size: 20px;
            font-weight: 700;
        }


        /* =========================================
           Main Profile
           সবসময় পাশাপাশি থাকবে
        ========================================= */

        .doctor-main-profile {
            display: flex !important;
            flex-direction: row !important;
            align-items: flex-start;
            gap: 15px;
            width: 100%;
        }


        /* =========================================
           Advocate Image
        ========================================= */

        .doctor-image-wrapper {
            width: 40%;
            min-width: 40%;
            position: relative;
        }

        .doctor-image-box {
            width: 100%;
            height: 210px;
            border-radius: 16px;
            overflow: hidden;
            background: #eeeeee;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.12);
        }

        .doctor-image-box img {
            /*width: 100%;
            height: 100%;*/
            object-fit: cover;
            display: block;
        }


        /* Verified */
        .doctor-verified {
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

        .doctor-verified i {
            color: #159d62;
            font-size: 16px;
        }


        /* =========================================
           Doctor Information
        ========================================= */

        .doctor-info {
            width: 60%;
            flex: 1;
            min-width: 0;
            padding-top: 2px;
        }


        /* Name */

        .doctor-name {
            display: flex;
            align-items: center;
            gap: 4px;
            margin-bottom: 5px;
        }

        .doctor-name h2 {
            font-size: 17px;
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

        .doctor-name .verified-icon {
            color: #198bea;
            font-size: 18px;
            flex-shrink: 0;
        }


        /* Speciality */

        .doctor-speciality {
            font-size: 14px;
            margin-bottom: 10px;
            line-height: 1.3;
        }

        .doctor-speciality strong {
            color: #12636c;
        }

        .doctor-speciality span {
            color: #111111;
        }


        /* Qualification */

        .doctor-qualification {
            color: #222222;
            font-size: 11px;
            line-height: 1.4;
            margin-bottom: 10px;
        }


        /* =========================================
           Rating
        ========================================= */

        .doctor-rating {
            display: flex;
            align-items: center;
            gap: 3px;
            margin-bottom: 12px;
            flex-wrap: nowrap;
        }

        .doctor-rating .star {
            color: #f5b400;
            font-size: 18px;
            line-height: 1;
        }

        .doctor-rating .rating-number {
            color: #d89d00;
            font-size: 19px;
            font-weight: 600;
            margin-left: 2px;
        }

        .doctor-rating .review-count {
            color: #111111;
            font-size: 10px;
            white-space: nowrap;
        }


        /* =========================================
           Detail Items
        ========================================= */

        .doctor-detail-item {
            display: flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 8px;
            color: #111111;
            font-size: 11px;
            line-height: 1.25;
        }

        .doctor-detail-item i {
            width: 20px;
            min-width: 20px;
            text-align: center;
            color: #1263a0;
            font-size: 18px;
        }

        .doctor-detail-item strong {
            font-weight: 700;
        }


        /* =========================================
           Buttons
        ========================================= */

        .doctor-action-buttons {
            margin-top: 18px;
        }

        .doctor-btn {
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

        .doctor-btn i {
            font-size: 18px;
        }

        .doctor-btn:hover {
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

        .doctor-bottom-buttons {
            margin-top: 10px;
        }

        .doctor-outline-btn {
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

        .doctor-outline-btn i {
            color: #126d76;
            font-size: 18px;
        }

        .doctor-outline-btn:hover {
            background: #126d76;
            color: #ffffff;
        }

        .doctor-outline-btn:hover i {
            color: #ffffff;
        }


        /* =========================================
           Desktop - col-md-4 একটু বড় হলে
        ========================================= */

        @media (min-width: 992px) {

            .doctor-profile-card {
                padding: 24px;
                height: 480px;
            }

            .doctor-profile-number {
                width: 35px;
                height: 35px;
                min-width: 35px;
                font-size: 25px;
            }

            .doctor-profile-title h3 {
                font-size: 23px;
            }

            .doctor-main-profile {
                gap: 18px;
            }

            .doctor-image-box {
                height: 225px;
            }

            .doctor-verified {
                min-height: 52px;
                font-size: 13px;
            }

            .doctor-verified i {
                font-size: 19px;
            }

            .doctor-name h2 {
                font-size: 18px;
            }

            .doctor-name .verified-icon {
                font-size: 21px;
            }

            .doctor-speciality {
                font-size: 17px;
            }

            .doctor-qualification {
                font-size: 13px;
            }

            .doctor-rating .star {
                font-size: 22px;
            }

            .doctor-rating .rating-number {
                font-size: 23px;
            }

            .doctor-rating .review-count {
                font-size: 12px;
            }

            .doctor-detail-item {
                font-size: 13px;
            }

            .doctor-btn {
                height: 52px;
                font-size: 17px;
            }

            .doctor-outline-btn {
                height: 52px;
                font-size: 14px;
            }
        }


        /* =========================================
           Small Mobile
           পাশাপাশি থাকবে, শুধু আরও ছোট হবে
        ========================================= */

        @media (max-width: 575.98px) {

            .doctor-profile-card {
                padding: 14px;
                border-radius: 17px;
            }

            .doctor-profile-title {
                margin-bottom: 14px;
                gap: 7px;
            }

            .doctor-profile-number {
                width: 35px;
                height: 35px;
                min-width: 35px;
                font-size: 19px;
            }

            .doctor-profile-title h3 {
                font-size: 17px;
            }

            .doctor-main-profile {
                gap: 10px;
            }

            .doctor-image-box {
                height: 175px;
                border-radius: 13px;
            }

            .doctor-verified {
                min-height: 37px;
                font-size: 8px;
                gap: 2px;
            }

            .doctor-verified i {
                font-size: 13px;
            }

            .doctor-name {
                gap: 3px;
            }

            .doctor-name h2 {
                font-size: 16px;
            }

            .doctor-name .verified-icon {
                font-size: 15px;
            }

            .doctor-speciality {
                font-size: 12px;
                margin-bottom: 7px;
            }

            .doctor-qualification {
                font-size: 9px;
                margin-bottom: 7px;
            }

            .doctor-rating {
                gap: 2px;
                margin-bottom: 8px;
            }

            .doctor-rating .star {
                font-size: 14px;
            }

            .doctor-rating .rating-number {
                font-size: 16px;
            }

            .doctor-rating .review-count {
                font-size: 8px;
            }

            .doctor-detail-item {
                gap: 4px;
                margin-bottom: 6px;
                font-size: 8.5px;
            }

            .doctor-detail-item i {
                width: 16px;
                min-width: 16px;
                font-size: 15px;
            }

            .doctor-action-buttons {
                margin-top: 12px;
            }

            .doctor-btn {
                height: 42px;
                border-radius: 10px;
                font-size: 13px;
            }

            .doctor-btn i {
                font-size: 16px;
            }

            .doctor-bottom-buttons {
                margin-top: 8px;
            }

            .doctor-outline-btn {
                height: 42px;
                border-radius: 10px;
                font-size: 10px;
            }

            .doctor-outline-btn i {
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

            .doctor-profile-card {
                padding: 11px;
            }

            .doctor-main-profile {
                gap: 8px;
            }

            .doctor-image-box {
                height: 155px;
            }

            .doctor-name h2 {
                font-size: 14px;
            }

            .doctor-name .verified-icon {
                font-size: 13px;
            }

            .doctor-speciality {
                font-size: 10px;
            }

            .doctor-qualification {
                font-size: 8px;
            }

            .doctor-rating .star {
                font-size: 12px;
            }

            .doctor-rating .rating-number {
                font-size: 14px;
            }

            .doctor-rating .review-count {
                font-size: 7px;
            }

            .doctor-detail-item {
                font-size: 7.5px;
            }

            .doctor-detail-item i {
                font-size: 13px;
            }

            .doctor-btn {
                height: 38px;
                font-size: 11px;
            }

            .doctor-outline-btn {
                height: 38px;
                font-size: 9px;
            }
            .profile_specialties_img{
               width: 60px !important;
            }
        }

    </style>
    <main class="main pages" style="background-color: #f5f5f5;border-radius: 15px;margin-bottom: 10px;">
        <div class="page-content pt-50" style="padding:20px 0px 10px 0px !important">
            <div class="container">
                <div class="archive-header-2">

                    <div class="row">
                        <!-- Advocate Profile -->
                        <div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
                            <div class="doctor-profile-card">
                                <!-- Header -->
                                <div class="doctor-profile-title">
                                    <h3>
                                        Advocate Profile
                                    </h3>
                                </div>


                                <!-- Main Profile -->
                                <div class="doctor-main-profile">

                                    <!-- Advocate Image -->
                                    <div class="doctor-image-wrapper">

                                        <div class="doctor-image-box">

                                            <!-- আপনার Advocate Image এখানে দিন -->
                                            <img src="{{asset('frontend/adv.png')}}"
                                                 alt="এড. মোঃ আসাদুল্লাহ গালিব">

                                        </div>

                                        <!-- Verified -->
                                        <div class="doctor-verified">

                                            <i class="fa fa-check" style="border: 1px solid #155B30;
                                                padding: 3px;
                                                border-radius: 25px;
                                                background: #155B30;
                                                color: white;font-size: 15px;"></i>

                                            <span>
                                                Bar Council Verified
                                            </span>

                                        </div>

                                    </div>


                                    <!-- Doctor Information -->
                                    <div class="doctor-info">

                                        <!-- Name -->
                                        <div class="doctor-name">

                                            <h2>
                                                এড. মোঃ আসাদুল্লাহ গালিব 
                                            </h2>


                                        </div>


                                        <!-- Speciality -->
                                        <div class="doctor-speciality">

                                            <strong>
                                                Advocate
                                            </strong>
                                        </div>


                                        <!-- Qualification -->
                                        <div class="doctor-qualification">

                                            Supreme Court of Bangladesh

                                        </div>


                                        <!-- Rating -->
                                        <div class="doctor-rating">

                                            <i class="fa fa-star-o" style="color:#d89d00;font-size:18px;"></i>
                                            <i class="fa fa-star-o" style="color:#d89d00;font-size:18px;"></i>

                                            <span class="rating-number">
                                                4.8
                                            </span>

                                            <span class="review-count">
                                                (128 Reviews)
                                            </span>

                                        </div>


                                        <!-- Experience -->
                                        <div class="doctor-detail-item">

                                            <i class="fa fa-user-md"></i>

                                            <span>
                                                <strong>10 Years</strong> Practice
                                            </span>

                                        </div>


                                        <!-- Consultant -->
                                        <!-- <div class="doctor-detail-item">

                                            <i class="fa fa-user-circle-o"></i>

                                            <span>
                                                <strong>Associate Consultant</strong>
                                            </span>

                                        </div> -->


                                        <!-- Hospital -->
                                        <div class="doctor-detail-item">

                                            <i class="fa fa-map-marker"></i>

                                            <span>
                                                Kishoreganj 250 Bed Hospital
                                            </span>

                                        </div>

                                    </div>

                                </div>


                                <!-- Action Buttons -->
                                <div class="doctor-action-buttons">

                                    <!-- WhatsApp + Share -->
                                    <div class="row g-3 doctor-bottom-buttons" style="margin-bottom: 15px;">

                                        <!-- WhatsApp -->
                                        <div class="col-6">

                                            <a href="tel:+8801700000000"
                                               class="doctor-outline-btn">

                                                <i class="fa fa-phone"></i>

                                                <span>
                                                    Call
                                                </span>

                                            </a>

                                        </div>


                                        <!-- Share -->
                                        <div class="col-6">

                                            <a href="https://wa.me/8801700000000" target="_blank"
                                               class="doctor-outline-btn">

                                                <i class="fa fa-whatsapp"></i>

                                                <span>
                                                    WhatsApp
                                                </span>

                                            </a>

                                        </div>

                                    </div>

                                    <!-- Appointment -->
                                    <div class="mb-3">

                                        <a href="javascript:void(0)" onclick="shareDoctorProfile()"
                                            class="doctor-btn btn-appointment">

                                            <i class="fa fa-share-alt"></i>

                                            <span>
                                                Share Profile
                                            </span>

                                        </a>

                                    </div>
                                </div>

                            </div>
                        </div>

                        @include('frontend.advocate.about_doctor')
                        @include('frontend.advocate.practice_area')
                        @include('frontend.advocate.court_jurisdictions')
                        @include('frontend.advocate.education')
                        @include('frontend.advocate.training')
                        @include('frontend.advocate.membership')
                        @include('frontend.advocate.social_engagement')
                        @include('frontend.advocate.chamber')
                        @include('frontend.advocate.map')
                        @include('frontend.advocate.reviews')
                        @include('frontend.advocate.faq')
                        @include('frontend.advocate.photo_gallery')
                        @include('frontend.advocate.philosophy')
                        @include('frontend.advocate.legal_topics')
                        @include('frontend.advocate.video')
                        @include('frontend.advocate.recommented_advocate')

                    </div>
                    <!--end vendor card-->
                </div>
            </div>
        </div>
    </main>
@endsection
