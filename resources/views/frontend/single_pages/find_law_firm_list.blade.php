@extends('frontend.layouts.master')
@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/find_law_firm.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/find_advocate.css')}}">

@include('frontend.single_pages.single_search_bar')

<!-- =========================
     LAW FIRMS SECTION
========================= -->

<section class="law-firms-section py-4">

    <div class="container-fluid">

        <div class="row g-3">

            <!-- ================= CARD 01 ================= -->
            <div class="col-md-3">

                <div class="law-firm-card">

                    <!-- Title -->
                    <div class="law-firm-title">
                        Law Firm Profile
                    </div>

                    <!-- Logo + Name -->
                    <div class="firm-header">

                        <div class="firm-logo">
                            <i class="fa fa-balance-scale"></i>
                        </div>

                        <div class="firm-name-area">

                            <h3>
                                গালিব ল অ্যাসোসিয়েটস
                            </h3>

                            <p>
                                Law Firm · Supreme Court of Bangladesh
                            </p>

                        </div>

                    </div>


                    <!-- Led By -->
                    <div class="firm-info-line">
                        <i class="fa fa-user"></i>

                        <span>
                            Led by Adv. Md. Asadullah Galib
                        </span>
                    </div>


                    <!-- Badges -->
                    <div class="firm-badges">

                        <span class="badge-registered">
                            Bar Registered
                        </span>

                        <span class="badge-established">
                            Est. 2012
                        </span>

                    </div>


                    <!-- Rating -->
                    <div class="firm-info-line">

                        <i class="fa fa-star"></i>

                        <span>
                            4.7 (312 reviews) · 6 lawyers
                        </span>

                    </div>


                    <!-- Location -->
                    <div class="firm-info-line">

                        <i class="fa fa-map-marker"></i>

                        <span>
                            Shahbagh, Dhaka · Kishoreganj branch
                        </span>

                    </div>


                    <!-- Practice Area -->
                    <div class="firm-info-line">

                        <i class="fa fa-briefcase"></i>

                        <span>
                            Corporate · Family · Property law
                        </span>

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


                    <!-- Buttons -->
                    <div class="firm-actions">

                        <a href="tel:+8801000000000"
                           class="firm-action-btn">

                            <i class="fa fa-phone"></i>

                            <span>Call</span>

                        </a>


                        <a href="https://wa.me/8801000000000"
                           class="firm-action-btn">

                            <i class="fa fa-whatsapp"></i>

                            <span>WhatsApp</span>

                        </a>

                    </div>


                    <!-- Share -->
                    <a href="{{route('our.law-firm-details')}}" 
                            class="share-profile-btn">

                        <i class="fa fa-eye"></i>

                        <span>
                            View Details
                        </span>

                    </a>

                </div>

            </div>


            <!-- ================= CARD 02 ================= -->
            <div class="col-md-3">

                <div class="law-firm-card">

                    <div class="law-firm-title">
                        Law Firm Profile
                    </div>

                    <div class="firm-header">

                        <div class="firm-logo">
                            <i class="fa fa-balance-scale"></i>
                        </div>

                        <div class="firm-name-area">

                            <h3>
                                Rahman & Associates
                            </h3>

                            <p>
                                Law Firm · Supreme Court of Bangladesh
                            </p>

                        </div>

                    </div>


                    <div class="firm-info-line">

                        <i class="fa fa-user"></i>

                        <span>
                            Led by Adv. Md. Rahman
                        </span>

                    </div>


                    <div class="firm-badges">

                        <span class="badge-registered">
                            Bar Registered
                        </span>

                        <span class="badge-established">
                            Est. 2015
                        </span>

                    </div>


                    <div class="firm-info-line">

                        <i class="fa fa-star"></i>

                        <span>
                            4.8 (185 reviews) · 5 lawyers
                        </span>

                    </div>


                    <div class="firm-info-line">

                        <i class="fa fa-map-marker"></i>

                        <span>
                            Motijheel, Dhaka
                        </span>

                    </div>


                    <div class="firm-info-line">

                        <i class="fa fa-briefcase"></i>

                        <span>
                            Civil · Corporate · Family law
                        </span>

                    </div>


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


                    <div class="specialization">

                        <div class="specialization-title">
                            অতিরিক্ত বিশেষজ্ঞতা:
                        </div>

                        <div class="specialization-text">

                            দেওয়ানী
                            <b>•</b>
                            কোম্পানি
                            <b>•</b>
                            পারিবারিক

                        </div>

                    </div>


                    <div class="firm-divider"></div>


                    <div class="firm-address">

                        <div class="address-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>

                        <div class="address-content">

                            <strong>
                                চেম্বারের পূর্ণ ঠিকানা:
                            </strong>

                            <p>
                                মতিঝিল, ঢাকা,
                                <br>
                                [বাড়ি নং, রোড, এলাকা]
                            </p>

                        </div>

                    </div>


                    <div class="firm-actions">

                        <a href="tel:+8801000000000"
                           class="firm-action-btn">

                            <i class="fa fa-phone"></i>
                            <span>Call</span>

                        </a>

                        <a href="https://wa.me/8801000000000"
                           class="firm-action-btn">

                            <i class="fa fa-whatsapp"></i>
                            <span>WhatsApp</span>

                        </a>

                    </div>


                    <a href="{{route('our.law-firm-details')}}" 
                            class="share-profile-btn">

                        <i class="fa fa-eye"></i>

                        <span>
                            View Details
                        </span>

                    </a>

                </div>

            </div>


            <!-- ================= CARD 03 ================= -->
            <div class="col-md-3">

                <div class="law-firm-card">

                    <div class="law-firm-title">
                        Law Firm Profile
                    </div>

                    <div class="firm-header">

                        <div class="firm-logo">
                            <i class="fa fa-balance-scale"></i>
                        </div>

                        <div class="firm-name-area">

                            <h3>
                                Ahmed Legal Associates
                            </h3>

                            <p>
                                Law Firm · High Court Division
                            </p>

                        </div>

                    </div>


                    <div class="firm-info-line">

                        <i class="fa fa-user"></i>

                        <span>
                            Led by Adv. Md. Ahmed
                        </span>

                    </div>


                    <div class="firm-badges">

                        <span class="badge-registered">
                            Bar Registered
                        </span>

                        <span class="badge-established">
                            Est. 2018
                        </span>

                    </div>


                    <div class="firm-info-line">

                        <i class="fa fa-star"></i>

                        <span>
                            4.6 (126 reviews) · 4 lawyers
                        </span>

                    </div>


                    <div class="firm-info-line">

                        <i class="fa fa-map-marker"></i>

                        <span>
                            Dhanmondi, Dhaka
                        </span>

                    </div>


                    <div class="firm-info-line">

                        <i class="fa fa-briefcase"></i>

                        <span>
                            Criminal · Family · Property law
                        </span>

                    </div>


                    <div class="practice-box">

                        <div class="practice-title">
                            প্র্যাকটিস আদালত:
                        </div>

                        <div class="practice-text">

                            Supreme Court of Bangladesh
                            <br>

                            <span>
                                High Court Division
                            </span>

                            <br>

                            জেলা জজ আদালত
                            <b>•</b>
                            সেশন জজ আদালত

                        </div>

                    </div>


                    <div class="specialization">

                        <div class="specialization-title">
                            অতিরিক্ত বিশেষজ্ঞতা:
                        </div>

                        <div class="specialization-text">

                            ফৌজদারী
                            <b>•</b>
                            দেওয়ানী
                            <b>•</b>
                            জমি-জমা

                        </div>

                    </div>


                    <div class="firm-divider"></div>


                    <div class="firm-address">

                        <div class="address-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>

                        <div class="address-content">

                            <strong>
                                চেম্বারের পূর্ণ ঠিকানা:
                            </strong>

                            <p>
                                ধানমন্ডি, ঢাকা,
                                <br>
                                [বাড়ি নং, রোড, এলাকা]
                            </p>

                        </div>

                    </div>


                    <div class="firm-actions">

                        <a href="tel:+8801000000000"
                           class="firm-action-btn">

                            <i class="fa fa-phone"></i>
                            <span>Call</span>

                        </a>

                        <a href="https://wa.me/8801000000000"
                           class="firm-action-btn">

                            <i class="fa fa-whatsapp"></i>
                            <span>WhatsApp</span>

                        </a>

                    </div>


                    <a href="{{route('our.law-firm-details')}}" 
                            class="share-profile-btn">

                        <i class="fa fa-eye"></i>

                        <span>
                            View Details
                        </span>

                    </a>

                </div>

            </div>


            <!-- ================= CARD 04 ================= -->
            <div class="col-md-3">

                <div class="law-firm-card">

                    <div class="law-firm-title">
                        Law Firm Profile
                    </div>

                    <div class="firm-header">

                        <div class="firm-logo">
                            <i class="fa fa-balance-scale"></i>
                        </div>

                        <div class="firm-name-area">

                            <h3>
                                Karim Law Chambers
                            </h3>

                            <p>
                                Law Firm · Supreme Court
                            </p>

                        </div>

                    </div>


                    <div class="firm-info-line">

                        <i class="fa fa-user"></i>

                        <span>
                            Led by Adv. Md. Karim
                        </span>

                    </div>


                    <div class="firm-badges">

                        <span class="badge-registered">
                            Bar Registered
                        </span>

                        <span class="badge-established">
                            Est. 2016
                        </span>

                    </div>


                    <div class="firm-info-line">

                        <i class="fa fa-star"></i>

                        <span>
                            4.7 (210 reviews) · 7 lawyers
                        </span>

                    </div>


                    <div class="firm-info-line">

                        <i class="fa fa-map-marker"></i>

                        <span>
                            Shahbagh, Dhaka
                        </span>

                    </div>


                    <div class="firm-info-line">

                        <i class="fa fa-briefcase"></i>

                        <span>
                            Corporate · Civil · Tax law
                        </span>

                    </div>


                    <div class="practice-box">

                        <div class="practice-title">
                            প্র্যাকটিস আদালত:
                        </div>

                        <div class="practice-text">

                            Supreme Court of Bangladesh
                            <br>

                            <span>
                                High Court Division & Appellate Division
                            </span>

                            <br>

                            জেলা জজ আদালত
                            <b>•</b>
                            সেশন জজ আদালত

                        </div>

                    </div>


                    <div class="specialization">

                        <div class="specialization-title">
                            অতিরিক্ত বিশেষজ্ঞতা:
                        </div>

                        <div class="specialization-text">

                            কোম্পানি
                            <b>•</b>
                            দেওয়ানী
                            <b>•</b>
                            কর
                            <b>•</b>
                            বাণিজ্যিক

                        </div>

                    </div>


                    <div class="firm-divider"></div>


                    <div class="firm-address">

                        <div class="address-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>

                        <div class="address-content">

                            <strong>
                                চেম্বারের পূর্ণ ঠিকানা:
                            </strong>

                            <p>
                                শাহবাগ, ঢাকা,
                                <br>
                                [বাড়ি নং, রোড, এলাকা]
                            </p>

                        </div>

                    </div>


                    <div class="firm-actions">

                        <a href="tel:+8801000000000"
                           class="firm-action-btn">

                            <i class="fa fa-phone"></i>
                            <span>Call</span>

                        </a>

                        <a href="https://wa.me/8801000000000"
                           class="firm-action-btn">

                            <i class="fa fa-whatsapp"></i>
                            <span>WhatsApp</span>

                        </a>

                    </div>


                    <a href="{{route('our.law-firm-details')}}" 
                            class="share-profile-btn">

                        <i class="fa fa-eye"></i>

                        <span>
                            View Details
                        </span>

                    </a>

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

</section>

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