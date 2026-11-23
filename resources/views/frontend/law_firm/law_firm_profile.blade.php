@extends('frontend.layouts.master')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script>
    function shareDoctorProfile() {
        if (navigator.share) {
            navigator.share({
                title: 'Law Firm Profile',
                text: 'Check out this law firm profile',
                url: window.location.href
            }).then(() => {
                console.log('Successfully shared');
            }).catch((error) => {
                console.log('Error sharing', error);
            });
        } else {
            // যদি ব্রাউজার শেয়ার সাপোর্ট না করে, তবে লিংক কপি করে দিবে
            var dummy = document.createElement('input'),
                text = window.location.href;
            document.body.appendChild(dummy);
            dummy.value = text;
            dummy.select();
            document.execCommand('copy');
            document.body.removeChild(dummy);
            alert('Profile link copied to clipboard!');
        }
    }
    </script>
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
           সবসময় পাশাপাশি থাকবে
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

            /* নাম বেশি বড় হলে পরের লাইনে যাবে */
            white-space: normal;
            overflow-wrap: break-word;
            word-wrap: break-word;

            /* Available space অনুযায়ী নাম থাকবে */
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
           Desktop - col-md-4 একটু বড় হলে
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

        /* শুধু দুইটি কার্ডের Height সমান রাখা */
        .custom_doctor_profile_bottom {
            align-self: stretch;
        }

        .custom_doctor_profile_bottom .lpc-slide {
            height: 100%;
        }

        .custom_doctor_profile_bottom .lpc-card {
            height: 100%;
        }
    </style>

    @php
        // LawFirmController-এ ছবি যে ফোল্ডারে সেভ হয় সেটা এখানে দিন (শেষে / থাকবে)
        $lawFirmImageFolder = 'uploads/law_firm_images/';

        // লিডার অ্যাডভোকেট
        $leader = $law_firm->leader;

        // কল নাম্বার: লিডারের appointment_contact আগে, না থাকলে mobile
        $callNumber = !empty(optional($leader)->appointment_contact)
            ? $leader->appointment_contact
            : optional($leader)->mobile;

        // WhatsApp নাম্বার: শুধু সংখ্যা রেখে বাংলাদেশের কোড (88) যোগ
        $waNumber = preg_replace('/[^0-9]/', '', (string) $callNumber);

        if (!empty($waNumber)) {
            if (substr($waNumber, 0, 3) === '880') {
                // আগে থেকেই কান্ট্রি কোড আছে
            } elseif (substr($waNumber, 0, 1) === '0') {
                $waNumber = '88' . $waNumber;
            } else {
                $waNumber = '880' . $waNumber;
            }
        }

        // Enrollment No ও Bar Association: ফার্মের নিজের থাকলে সেটা, না থাকলে লিডারের
        $enrollmentNo   = !empty($law_firm->enrollment_no) ? $law_firm->enrollment_no : optional($leader)->enrollment_no;
        $barAssociation = !empty($law_firm->bar_association) ? $law_firm->bar_association : optional($leader)->bar_association;
    @endphp

    <main class="main pages" style="background-color: #f5f5f5;border-radius: 15px;margin-bottom: 10px;">
        <div class="page-content pt-50" style="padding:20px 0px 10px 0px !important">
            <div class="container">
                <div class="archive-header-2">

                    <div class="row">
                        <!-- Law Firm Profile -->
                        <div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
                            <div class="lpc-slide">

                                <div class="lpc-card">


                                    <!-- PROFILE IMAGE -->

                                    <div class="lpc-image-area">

                                        <div class="lpc-profile-image">

                                            <img src="{{ !empty($law_firm->image) ? url($lawFirmImageFolder.$law_firm->image) : asset('frontend/firm_logo.png') }}"
                                                 alt="{{ $law_firm->firm_name }}">

                                        </div>


                                        <!-- VERIFIED -->

                                        <div class="lpc-verified">

                                            <i class="fa fa-check"></i>

                                            Bar Council Verified

                                        </div>

                                    </div>



                                    <!-- PROFILE BODY -->

                                    <div class="lpc-body">


                                        <h3 class="lpc-name">
                                            {{ $law_firm->firm_name }}
                                        </h3>


                                        <div class="lpc-designation">
                                            Law Firm
                                        </div>


                                        <!-- RATING -->

                                        <div class="lpc-rating">

                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>

                                            <strong>4.8</strong>

                                            <span>
                                                (61 Reviews)
                                            </span>

                                        </div>


                                        <!-- LEADER -->

                                        <div class="lpc-specialization">
                                            @if(!empty($leader))
                                                <strong>Led by {{ $leader->name }}</strong>
                                            @endif
                                        </div>


                                        <!-- COURT -->

                                        <div class="lpc-court">
                                            {{ $law_firm->court_name }}
                                        </div>

                                        <!-- জেলা (একবারই দেখাবে) -->
                                        <div class="lpc-court-location">
                                            {{ $firm_district_name }}
                                        </div>


                                        <!-- DIVIDER -->

                                        <div class="lpc-divider"></div>


                                        <!-- INFORMATION -->

                                        <div class="lpc-info">


                                            <!-- LEFT -->

                                            <div class="lpc-info-column">

                                                <div class="lpc-info-label">
                                                    Established:
                                                </div>

                                                <div class="lpc-info-value">
                                                    {{ $law_firm->established }}
                                                </div>


                                                <div class="lpc-info-label">
                                                    Head Advocate Enrollment No:
                                                </div>

                                                <div class="lpc-info-value">
                                                    {{ $enrollmentNo }}
                                                </div>

                                            </div>


                                            <!-- RIGHT -->

                                            <div class="lpc-info-column">

                                                <div class="lpc-info-label">
                                                    Team:
                                                </div>

                                                <div class="lpc-info-value">
                                                    @if(!empty($law_firm->team_size))
                                                        {{ $law_firm->team_size }} Lawyers
                                                    @endif
                                                </div>


                                                <div class="lpc-info-label">
                                                    Bar Association:
                                                </div>

                                                <div class="lpc-info-value">
                                                    {{ $barAssociation }}
                                                </div>

                                            </div>

                                        </div>


                                        <!-- Action Buttons -->
                                        <div class="doctor-action-buttons">

                                            <!-- Call + WhatsApp -->
                                            <div class="row g-3 doctor-bottom-buttons" style="margin-bottom: 15px;">

                                                <!-- Call -->
                                                <div class="col-6">

                                                    @if(!empty($callNumber))
                                                        <a href="tel:{{ $callNumber }}"
                                                           class="doctor-outline-btn"
                                                           onclick="return confirm('Do you want to call {{ $callNumber }}?');">

                                                            <i class="fa fa-phone"></i>

                                                            <span>
                                                                Call
                                                            </span>

                                                        </a>
                                                    @else
                                                        <a href="javascript:void(0)"
                                                           class="doctor-outline-btn"
                                                           style="opacity:0.5; cursor:not-allowed;">

                                                            <i class="fa fa-phone"></i>

                                                            <span>
                                                                Call
                                                            </span>

                                                        </a>
                                                    @endif

                                                </div>


                                                <!-- WhatsApp -->
                                                <div class="col-6">

                                                    @if(!empty($waNumber))
                                                        <a href="https://wa.me/{{ $waNumber }}" target="_blank"
                                                           class="doctor-outline-btn">

                                                            <i class="fa fa-whatsapp"></i>

                                                            <span>
                                                                WhatsApp
                                                            </span>

                                                        </a>
                                                    @else
                                                        <a href="javascript:void(0)"
                                                           class="doctor-outline-btn"
                                                           style="opacity:0.5; cursor:not-allowed;">

                                                            <i class="fa fa-whatsapp"></i>

                                                            <span>
                                                                WhatsApp
                                                            </span>

                                                        </a>
                                                    @endif

                                                </div>

                                            </div>

                                            <!-- Share Profile -->
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

                            </div>
                        </div>

                        @include('frontend.law_firm.about_firm')
                        @include('frontend.law_firm.firm_president')
                        @include('frontend.law_firm.law_firm_team')
                        @include('frontend.law_firm.legal_service')
                        @include('frontend.law_firm.court_jurisdictions')
                        @include('frontend.law_firm.membership')
                        @include('frontend.law_firm.training')
                        @include('frontend.law_firm.education')
                        @include('frontend.law_firm.chamber')
                        @include('frontend.law_firm.office_hour')
                        @include('frontend.law_firm.map')
                        @include('frontend.law_firm.reviews')
                        @include('frontend.law_firm.social_engagement')
                        @include('frontend.law_firm.photo_gallery')
                        @include('frontend.law_firm.legal_topics')
                        @include('frontend.law_firm.video')

                    </div>
                    <!--end vendor card-->
                </div>
            </div>
        </div>
    </main>
@endsection