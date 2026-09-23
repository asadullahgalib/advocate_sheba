@extends('frontend.layouts.master')
@section('content')

@include('frontend.single_pages.single_search_bar')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/find_law_firm.css')}}">

<main class="main pages" style="background-color: #f5f5f5;border-radius: 15px;margin-bottom: 10px;">
    <div class="page-content pt-50" style="padding:20px 0px 10px 0px !important">
        <div class="container">
            <div class="archive-header-2">

                <div class="row">
                    <!-- Law Firm 1 -->
                    <div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
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

                            <!-- Practice Court -->
                            <div class="practice-box">

                                <div class="practice-title">
                                    প্র্যাকটিস আদালত:
                                </div>

                                <div class="practice-text">

                                    Supreme Court of Bangladesh
                                    <br>

                                    <span>
                                        (High Court Division & Appellate Division)
                                    </span>

                                    <br>

                                    জেলা জজ আদালত
                                    <b>•</b>
                                    সেশন জজ আদালত
                                    <b>•</b>
                                    ম্যাজিস্ট্রেট আদালত

                                </div>

                            </div>


                            <!-- Specialization -->
                            <div class="specialization">

                                <div class="specialization-title">
                                    অতিরিক্ত বিশেষজ্ঞতা:
                                </div>

                                <div class="specialization-text">

                                    ফৌজদারী
                                    <b>•</b>
                                    দেওয়ানী
                                    <b>•</b>
                                    পারিবারিক
                                    <b>•</b>
                                    জমি-জমা

                                </div>

                            </div>


                            <!-- Divider -->
                            <div class="firm-divider"></div>


                            <!-- Address -->
                            <div class="firm-address">

                                <div class="address-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>

                                <div class="address-content">

                                    <strong>
                                        চেম্বারের পূর্ণ ঠিকানা:
                                    </strong>

                                    <p>
                                        কিশোরগঞ্জ ২৫০ শয্যা হাসপাতালের পাশে,
                                        <br>
                                        [বাড়ি নং, রোড, এলাকা, থানা]
                                    </p>

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

                                    <a href="{{route('our.law-firm-details')}}"
                                        class="doctor-btn btn-appointment">

                                        <i class="fa fa-eye"></i>

                                        <span>
                                            View Details
                                        </span>

                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Law Firm 2 -->
                    <div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
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
                                            Rahman & Associates
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

                            <!-- Practice Court -->
                            <div class="practice-box">

                                <div class="practice-title">
                                    প্র্যাকটিস আদালত:
                                </div>

                                <div class="practice-text">

                                    Supreme Court of Bangladesh
                                    <br>

                                    <span>
                                        (High Court Division & Appellate Division)
                                    </span>

                                    <br>

                                    জেলা জজ আদালত
                                    <b>•</b>
                                    সেশন জজ আদালত
                                    <b>•</b>
                                    ম্যাজিস্ট্রেট আদালত

                                </div>

                            </div>


                            <!-- Specialization -->
                            <div class="specialization">

                                <div class="specialization-title">
                                    অতিরিক্ত বিশেষজ্ঞতা:
                                </div>

                                <div class="specialization-text">

                                    ফৌজদারী
                                    <b>•</b>
                                    দেওয়ানী
                                    <b>•</b>
                                    পারিবারিক
                                    <b>•</b>
                                    জমি-জমা

                                </div>

                            </div>


                            <!-- Divider -->
                            <div class="firm-divider"></div>


                            <!-- Address -->
                            <div class="firm-address">

                                <div class="address-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>

                                <div class="address-content">

                                    <strong>
                                        চেম্বারের পূর্ণ ঠিকানা:
                                    </strong>

                                    <p>
                                        কিশোরগঞ্জ ২৫০ শয্যা হাসপাতালের পাশে,
                                        <br>
                                        [বাড়ি নং, রোড, এলাকা, থানা]
                                    </p>

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

                                    <a href="{{route('our.law-firm-details')}}"
                                        class="doctor-btn btn-appointment">

                                        <i class="fa fa-eye"></i>

                                        <span>
                                            View Details
                                        </span>

                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Law Firm 3 -->
                    <div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
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
                                            Ahmed Legal Associates
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

                            <!-- Practice Court -->
                            <div class="practice-box">

                                <div class="practice-title">
                                    প্র্যাকটিস আদালত:
                                </div>

                                <div class="practice-text">

                                    Supreme Court of Bangladesh
                                    <br>

                                    <span>
                                        (High Court Division & Appellate Division)
                                    </span>

                                    <br>

                                    জেলা জজ আদালত
                                    <b>•</b>
                                    সেশন জজ আদালত
                                    <b>•</b>
                                    ম্যাজিস্ট্রেট আদালত

                                </div>

                            </div>


                            <!-- Specialization -->
                            <div class="specialization">

                                <div class="specialization-title">
                                    অতিরিক্ত বিশেষজ্ঞতা:
                                </div>

                                <div class="specialization-text">

                                    ফৌজদারী
                                    <b>•</b>
                                    দেওয়ানী
                                    <b>•</b>
                                    পারিবারিক
                                    <b>•</b>
                                    জমি-জমা

                                </div>

                            </div>


                            <!-- Divider -->
                            <div class="firm-divider"></div>


                            <!-- Address -->
                            <div class="firm-address">

                                <div class="address-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>

                                <div class="address-content">

                                    <strong>
                                        চেম্বারের পূর্ণ ঠিকানা:
                                    </strong>

                                    <p>
                                        কিশোরগঞ্জ ২৫০ শয্যা হাসপাতালের পাশে,
                                        <br>
                                        [বাড়ি নং, রোড, এলাকা, থানা]
                                    </p>

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

                                    <a href="{{route('our.law-firm-details')}}"
                                        class="doctor-btn btn-appointment">

                                        <i class="fa fa-eye"></i>

                                        <span>
                                            View Details
                                        </span>

                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="container mt-3">
                      <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                        <li class="page-item"><a class="page-link" href="#">8</a></li>
                        <li class="page-item"><a class="page-link" href="#">9</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Legal Articles -->
<section class="legal-articles-section" style="background-color: #ffffff;padding: 0px 20px 20px;">

    <div class="container-fluid">

        <!-- ============================
             FEATURED ARTICLES HEADER
        ============================= -->

        <div class="section-heading featured-heading">

            <div class="section-heading-left">

                <div class="featured-star">
                    <i class="fa-solid fa-star"></i>
                </div>

                <h3>Legal Articles</h3>

            </div>


            <a href="#" class="view-all-articles">
                View All Articles
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>


        <!-- ============================
             FEATURED ARTICLES
        ============================= -->

        <div class="row featured-articles-row">


            <!-- Article 1 -->

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">

                <div class="featured-article-card">

                    <div class="article-image">

                        <img src="{{asset('frontend/f1.jpg')}}" alt="Criminal Law">

                        <span class="article-category">
                            Criminal Law
                        </span>

                    </div>


                    <div class="article-content">

                        <h4>
                            What Are Your Rights
                            When You Are Arrested?
                        </h4>


                        <div class="article-meta">

                            <span>
                                <i class="fa-regular fa-calendar"></i>
                                May 4, 2024
                            </span>

                            <span>
                                <i class="fa-regular fa-eye"></i>
                                1.2K Views
                            </span>

                        </div>


                        <a href="{{route('legal.article.details')}}" class="read-more">
                            Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Article 2 -->

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">

                <div class="featured-article-card">

                    <div class="article-image">

                        <img src="{{asset('frontend/f2.jpg')}}" alt="Land Law">

                        <span class="article-category">
                            Land Law
                        </span>

                    </div>


                    <div class="article-content">

                        <h4>
                            What to Check Before
                            Buying a Land?
                        </h4>


                        <div class="article-meta">

                            <span>
                                <i class="fa-regular fa-calendar"></i>
                                Apr 30, 2024
                            </span>

                            <span>
                                <i class="fa-regular fa-eye"></i>
                                980 Views
                            </span>

                        </div>


                        <a href="{{route('legal.article.details')}}" class="read-more">
                            Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Article 3 -->

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">

                <div class="featured-article-card">

                    <div class="article-image">

                        <img src="{{asset('frontend/f3.jpg')}}" alt="Family Law">

                        <span class="article-category">
                            Family Law
                        </span>

                    </div>


                    <div class="article-content">

                        <h4>
                            What is the Legal Process
                            of Divorce in Bangladesh?
                        </h4>


                        <div class="article-meta">

                            <span>
                                <i class="fa-regular fa-calendar"></i>
                                May 1, 2024
                            </span>

                            <span>
                                <i class="fa-regular fa-eye"></i>
                                1.5K Views
                            </span>

                        </div>


                        <a href="{{route('legal.article.details')}}" class="read-more">
                            Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Article 4 -->

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">

                <div class="featured-article-card">

                    <div class="article-image">

                        <img src="{{asset('frontend/f4.jpg')}}" alt="Corporate Law">

                        <span class="article-category">
                            Corporate Law
                        </span>

                    </div>


                    <div class="article-content">

                        <h4>
                            Steps to Register a Private
                            Limited Company in Bangladesh
                        </h4>


                        <div class="article-meta">

                            <span>
                                <i class="fa-regular fa-calendar"></i>
                                Apr 28, 2024
                            </span>

                            <span>
                                <i class="fa-regular fa-eye"></i>
                                860 Views
                            </span>

                        </div>


                        <a href="{{route('legal.article.details')}}" class="read-more">
                            Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>


        </div>

    </div>

</section>

<!-- Video Gallery -->
<div class="page-content mb-50" style="padding: 25px 0px 10px 0px;background-color: #f7f8fa;margin-bottom: -20px !important;border-radius: 15px;">
    <div class="container">
        <div class="section-title">
            <div class="title text-center">
                <h3 style="color: #1B489D;font-size: 23px;text-align: left;">
                    <i class="bi bi-youtube" aria-hidden="true" style="color:red;"></i> 
                    Latest Video
                    <br>
                    <p style="margin-top: 7px;font-size: 13px;">আইন সম্পর্কে জানুন ভিডিও দেখে</p>
                </h3>
            </div>
            <div class="title text-center mobile_view_all">
                <h3 style="color: #1B489D;font-size: 20px;">
                    <a href="#">View all <i class="fa fa-arrow-right"></i> </a>
                </h3>
            </div>
        </div>
        <div class="row">

            <!-- Video 01 -->
            <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                <div class="post-thumb">

                    <a href="#">

                        <div class="video-thumb">

                            <img 
                                src="{{asset('frontend/video-1.jpg')}}" 
                                alt="Cardiologist in Bangladesh"
                            >

                            <div class="video-overlay">
                                <div class="youtube-icon">
                                    <i class="fa fa-play"></i>
                                </div>
                            </div>

                        </div>

                    </a>

                </div>

                <div class="entry-content-2">
                    <h4 class="post-title mb-15" style="font-size:17px;margin-top: 15px;">
                        <a href="#">
                            জমি বিক্রির আগে যে বিষয় গুলো জানা দরকার
                        </a>
                    </h4>
                </div>
            </article>


            <!-- Video 02 -->
            <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                <div class="post-thumb">

                    <a href="#">

                        <div class="video-thumb">

                            <img 
                                src="{{asset('frontend/video-2.jpg')}}" 
                                alt="Heart Specialist Doctor"
                            >

                            <div class="video-overlay">
                                <div class="youtube-icon">
                                    <i class="fa fa-play"></i>
                                </div>
                            </div>

                        </div>

                    </a>

                </div>

                <div class="entry-content-2">
                    <h4 class="post-title mb-15" style="font-size:17px;margin-top: 15px;">
                        <a href="#">
                            নারীর আইনি অধিকার ও নিরাপত্তা
                        </a>
                    </h4>
                </div>
            </article>


            <!-- Video 03 -->
            <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                <div class="post-thumb">

                    <a href="#">

                        <div class="video-thumb">

                            <img 
                                src="{{asset('frontend/video-3.jpg')}}" 
                                alt="Heart Specialist Doctor"
                            >

                            <div class="video-overlay">
                                <div class="youtube-icon">
                                    <i class="fa fa-play"></i>
                                </div>
                            </div>

                        </div>

                    </a>

                </div>

                <div class="entry-content-2">
                    <h4 class="post-title mb-15" style="font-size:17px;margin-top: 15px;">
                        <a href="#">
                            পারিবারিক বিরোধ নিস্পত্তি ও আপোস মীমাংসা
                        </a>
                    </h4>
                </div>
            </article>


            <!-- Video 04 -->
            <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                <div class="post-thumb">

                    <a href="#">

                        <div class="video-thumb">

                            <img 
                                src="{{asset('frontend/video-4.jpg')}}" 
                                alt="Heart Specialist Doctor"
                            >

                            <div class="video-overlay">
                                <div class="youtube-icon">
                                    <i class="fa fa-play"></i>
                                </div>
                            </div>

                        </div>

                    </a>

                </div>

                <div class="entry-content-2">
                    <h4 class="post-title mb-15" style="font-size:17px;margin-top: 15px;">
                        <a href="#">
                            আইনি পরামর্শ
                        </a>
                    </h4>
                </div>
            </article>

        </div>
    </div>
</div>

<section style="padding: 5px 0px 5px 0px;
    background-color: #f5f5f5;
    margin-bottom: 0px;
    border-radius: 15px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="row alert alert-success" style="background:#123b6d;border-color:#123b6d;">
                    <div class="col-md-8 col-lg-8 col-sm-8 offset-md-2 offset-lg-2 offset-sm-2">
                        <div class="row">
                            <div class="col-md-1 col-lg-1 col-xl-1 col-sm-1 custom_faq_img">
                                <img src="{{asset('frontend')}}/round-logo.png" alt="" />
                            </div>
                            <div class="col-md-11 col-lg-11 col-xl-11 col-sm-11">
                                <h3 style="text-align: left;margin-bottom: 15px;font-size: 20px;color: #fff;font-weight: bold;">
                                    ল ফার্ম কারা ? 
                                </h3>
                                <p style="color:#fff">
                                    ল ফার্ম হলো এক বা একাধিক আইনজীবীর সমন্বয়ে পরিচালিত একটি পেশাদার প্রতিষ্ঠান, যা ব্যক্তি ও প্রতিষ্ঠানের বিভিন্ন আইনগত বিষয়ে পরামর্শ ও প্রতিনিধিত্ব প্রদান করে।
                                </p>

                                <h3 style="text-align: left;margin-bottom: 15px;font-size: 20px;color: #fff;font-weight: bold;    margin-top: 26px;">
                                    তারা কি করেন ? 
                                </h3>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    মামলা পরিচালনা 
                                </p>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    আইনি পরামর্শ প্রদান
                                </p>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    চুক্তি ও দলিল তৈরি
                                </p>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    কর্পোরেট আইনগত সেবা
                                </p>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    সম্পত্তি ও জমি সংক্রান্ত সেবা
                                </p>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    আইনগত নোটিশ ও বিরোধ নিষ্পত্তি
                                </p>

                                <h3 style="text-align: left;margin-bottom: 15px;font-size: 20px;color: #fff;font-weight: bold;    margin-top: 26px;">
                                    কিভাবে ল ফার্ম গঠন করা যায় ? 
                                </h3>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    যোগ্য আইনজীবীদের সমন্বয়ে ফার্ম গঠন
                                </p>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    প্রয়োজনীয় আইনগত ও প্রশাসনিক আনুষ্ঠানিকতা সম্পন্ন
                                </p>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    প্র্যাকটিস এরিয়া নির্ধারণ
                                </p>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    এঅফিস ও পেশাদার ব্যবস্থাপনা তৈরি
                                </p>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    ক্লায়েন্টদের জন্য আইনগত সেবা প্রদান
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection