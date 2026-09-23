@extends('frontend.layouts.master')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/law_firm_details.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/find_law_firm.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/find_advocate.css')}}">

    <main class="main pages" style="background-color: #f5f5f5;border-radius: 15px;margin-bottom: 10px;">
        <div class="page-content pt-50" style="padding:20px 0px 10px 0px !important">
            <div class="container">
                <div class="archive-header-2">

                    <div class="row">
                        <!-- Law Firm Profile -->
                        <div class="col-lg-6 col-md-6 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
                            <div class="doctor-profile-card">
                                <!-- Header -->
                                <div class="doctor-profile-title">
                                    <h3>
                                        Law Firm Profile
                                    </h3>
                                </div>

                                <!-- Main Profile -->
                                <div class="doctor-main-profile">

                                    <!-- Advocate Image -->
                                    <div class="doctor-image-wrapper">

                                        <div class="doctor-image-box">

                                            <!-- আপনার Advocate Image এখানে দিন -->
                                            <img src="{{asset('frontend/firm_logo.jpg')}}"
                                                 alt="গালিব ল অ্যাসোসিয়েটস">

                                        </div>

                                    </div>


                                    <!-- Doctor Information -->
                                    <div class="doctor-info">

                                        <!-- Name -->
                                        <div class="doctor-name">

                                            <h2>
                                                গালিব ল অ্যাসোসিয়েটস 
                                            </h2>


                                        </div>


                                        <!-- Speciality -->
                                        <div class="doctor-speciality">

                                            <strong>
                                                Law Firm: Supreme Court of Bangladesh
                                            </strong>
                                        </div>

                                        <!-- Consultant -->
                                        <div class="doctor-detail-item">

                                            <i class="fa fa-user-circle-o"></i>

                                            <span>
                                                <strong>Led by Adv. Md. Asadullah Galib</strong>
                                            </span>

                                        </div>


                                        <!-- Qualification -->
                                        <div class="doctor-qualification">

                                            <button class="btn btn-primary btn-sm" style="background-color: #c9ebca;color: #166d29;margin: 0px;line-height: 0.8;margin-bottom: 5px;">Bar Registered</button> &nbsp;
                                            <button class="btn btn-primary btn-sm" style="background-color: #c9ebca;color: #166d29;margin: 0px;line-height: 0.8;margin-bottom: 5px;">Est. 2012</button>


                                        </div>


                                        <!-- Rating -->
                                        <div class="doctor-rating">

                                            <i class="fa fa-star-o" style="color:#d89d00;font-size:18px;"></i>

                                            <span class="rating-number">
                                                4.8
                                            </span>

                                            <span class="review-count">
                                                (128 Reviews) . 5 lawyers
                                            </span>

                                        </div>

                                        <!-- Hospital -->
                                        <div class="doctor-detail-item">

                                            <i class="fa fa-map-marker"></i>

                                            <span>
                                                Shahbagh, Dhaka · Kishoreganj branch
                                            </span>

                                        </div>

                                        <div class="firm-info-line">

                                            <i class="fa fa-briefcase"></i>

                                            <span>
                                                Corporate · Family · Property law
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

                        @include('frontend.law_firm.about_firm')
                    </div>
                    <!--end vendor card-->
                </div>
            </div>
        </div>
    </main>

    @include('frontend.law_firm.lawyers')
    @include('frontend.law_firm.team_expertise')

@endsection
