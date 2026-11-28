@extends('frontend.layouts.master')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script>
    function shareDoctorProfile() {
        if (navigator.share) {
            navigator.share({
                title: 'Advocate Profile',
                text: 'Check out this advocate profile',
                url: window.location.href
            }).then(() => {
                console.log('Successfully shared');
            }).catch((error) => {
                console.log('Error sharing', error);
            });
        } else {
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
        $callNumber = !empty($advocate->appointment_contact) ? $advocate->appointment_contact : $advocate->mobile;

        $specializationText = $advocate_practice_areas
            ->map(function ($item) {
                return optional($item->practice)->name;
            })
            ->filter()
            ->take(2)
            ->implode(', ');
    @endphp

    <main class="main pages" style="background-color: #f5f5f5;border-radius: 15px;margin-bottom: 10px;">
        <div class="page-content pt-50" style="padding:20px 0px 10px 0px !important">
            <div class="container">
                <div class="archive-header-2">

                    <div class="row">
                        <!-- Advocate Profile -->
                        <div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
                            <div class="lpc-slide">
                                <div class="lpc-card">
                                    <div class="lpc-image-area">
                                        <div class="lpc-profile-image">
                                            <img src="{{ !empty($advocate->image) ? url('uploads/advocates_images/'.$advocate->image) : url('uploads/no_image.png') }}" alt="{{ $advocate->name }}">
                                        </div>
                                        <div class="lpc-verified">
                                            <i class="fa fa-check"></i>
                                            Bar Council Verified
                                        </div>
                                    </div>

                                    <div class="lpc-body">
                                        <h3 class="lpc-name">
                                            {{ $advocate->name }}
                                        </h3>
                                        <div class="lpc-designation">
                                            {{ @$advocate->designation->name ?? '' }}
                                        </div>

                                        <div class="lpc-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <strong>4.8</strong>
                                            <span>(61 Reviews)</span>
                                        </div>

                                        <div class="lpc-specialization">
                                            {{ $specializationText }}
                                        </div>

                                        <div class="lpc-court">
                                            {{ $advocate->court_name }}
                                        </div>

                                        <div class="lpc-court-location">
                                            {{ $advocate->present_address }}
                                        </div>

                                        <div class="lpc-divider"></div>

                                        <div class="lpc-info">
                                            <div class="lpc-info-column">
                                                <div class="lpc-info-label">
                                                    Qualification:
                                                </div>
                                                <div class="lpc-info-value">
                                                    {{ $advocate->short_qualification }}
                                                </div>
                                                <div class="lpc-info-label">
                                                    Enrollment No:
                                                </div>
                                                <div class="lpc-info-value">
                                                    {{ $advocate->enrollment_no }}
                                                </div>
                                            </div>

                                                                                        <div class="lpc-info-column">
                                                <div class="lpc-info-label">
                                                    Experience:
                                                </div>
                                                <div class="lpc-info-value">
                                                    {{ $advocate->experience }}
                                                </div>
                                                <div class="lpc-info-label">
                                                    Bar Association:
                                                </div>
                                                <div class="lpc-info-value">
                                                    {{ $advocate->bar_association }}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="doctor-action-buttons">
                                            <div class="row g-3 doctor-bottom-buttons" style="margin-bottom: 15px;">
                                                <div class="col-6">
                                                    <a href="javascript:void(0)" onclick="openDigitalCard()" class="doctor-outline-btn" style="line-height:1.15; text-align:center;">
                                                        <i class="fa fa-id-card"></i>
                                                        <span>View &amp; Save Digital Card</span>
                                                    </a>
                                                </div>

                                                <div class="col-6">
                                                    <a href="javascript:void(0)" onclick="openConsultModal()" class="doctor-outline-btn" style="line-height:1.15; text-align:center;">
                                                        <i class="fa-brands fa-whatsapp"></i>
                                                        <span>WhatsApp Consultation</span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <a href="javascript:void(0)" onclick="shareDoctorProfile()" class="doctor-btn btn-appointment">
                                                    <i class="fa fa-share-alt"></i>
                                                    <span>Share Profile</span>
                                                </a>
                                            </div>
                                        </div>  {{-- doctor-action-buttons --}}
                                    </div>      {{-- lpc-body --}}
                                </div>          {{-- lpc-card --}}
                            </div>              {{-- lpc-slide --}}
                        </div>                  {{-- col-lg-4 --}}

                        @include('frontend.advocate.about_advocate')
                        @include('frontend.advocate.legal_service')
                        @include('frontend.advocate.court_jurisdictions')
                        @include('frontend.advocate.membership')
                        @include('frontend.advocate.training')
                        @include('frontend.advocate.education')
                        @include('frontend.advocate.chamber')
                        @include('frontend.advocate.office_hour')
                        @include('frontend.advocate.map')
                        @include('frontend.advocate.reviews')
                        @include('frontend.advocate.photo_gallery')
                        @include('frontend.advocate.recommented_advocate')
                    </div> <!-- Row শেষ -->
                </div>
            </div>
        </div>
    </main>

    {{-- এই দুইটা সেকশন main এর বাইরে, একদম নিচে থাকবে --}}
    @include('frontend.advocate.legal_topics')
    @include('frontend.advocate.video')

    {{-- মডাল সবসময় একদম শেষে --}}
    @include('frontend.advocate.consult_modal')
        {{-- মডাল সবসময় একদম শেষে --}}
    @include('frontend.advocate.consult_modal')
    @include('frontend.advocate.digital_card_modal')
@endsection