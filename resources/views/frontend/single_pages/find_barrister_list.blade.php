@extends('frontend.layouts.master')
@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/find_advocate.css')}}">

@include('frontend.single_pages.single_search_bar')

<!-- ======== Find Advocate ========== -->

<section class="find-legal-articles-section">

    <div class="container-fluid">

        <div class="section-heading d-flex justify-content-between align-items-center">

            <div class="section-heading-left">

                <div class="section-small-icon">
                    <i class="fa-solid fa-scale-balanced"></i>
                </div>

                <h3>Legal Barrister</h3>

            </div>


            <!-- <a href="#" class="view-all-btn">
                View All Topics
                <i class="fa-solid fa-arrow-right"></i>
            </a> -->

        </div>

        <div class="row advocate-topics-row">


            <!-- Criminal Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="advocate-topic-card">

                    <div class="advocate-topic-icon">
                        <img src="{{asset('frontend/adv.png')}}" alt="Advocate Sheba" style="width:65px;">
                    </div>

                    <h4>Adv. Md. Asadullah Galib</h4>
                    <p>
                        <i class="fa fa-map-pin" style="color:red;"></i> &nbsp; Supreme Court,Dhaka
                    </p>

                    <div class="profile_btn">
                        <button>Criminal</button>
                        <button>Corporate</button>
                    </div>


                    <p>
                        <i class="fa fa-user-circle-o"></i> &nbsp; 8 Years Experience
                    </p>

                    <a href="#">
                        View Profile
                    </a>

                </div>

            </div>


            <!-- Civil Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="advocate-topic-card">

                    <div class="advocate-topic-icon">
                        <img src="{{asset('frontend/adv.png')}}" alt="Advocate Sheba" style="width:65px;">
                    </div>

                    <h4>Adv. Md. Sayem Khan</h4>
                    <p>
                        <i class="fa fa-map-pin" style="color:red;"></i> &nbsp; Supreme Court,Dhaka
                    </p>

                    <div class="profile_btn">
                        <button>Civil</button>
                        <button>Corporate</button>
                    </div>


                    <p>
                        <i class="fa fa-user-circle-o"></i> &nbsp; 8 Years Experience
                    </p>

                    <a href="#">
                        View Profile
                    </a>

                </div>

            </div>


            <!-- Family Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="advocate-topic-card">

                    <div class="advocate-topic-icon">
                        <img src="{{asset('frontend/adv.png')}}" alt="Advocate Sheba" style="width:65px;">
                    </div>

                    <h4>Adv. Md. Sohel Rana</h4>
                    <p>
                        <i class="fa fa-map-pin" style="color:red;"></i> &nbsp; Supreme Court,Dhaka
                    </p>

                    <div class="profile_btn">
                        <button>Family</button>
                        <button>Corporate</button>
                    </div>


                    <p>
                        <i class="fa fa-user-circle-o"></i> &nbsp; 8 Years Experience
                    </p>

                    <a href="#">
                        View Profile
                    </a>

                </div>

            </div>


            <!-- Land Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="advocate-topic-card">

                    <div class="advocate-topic-icon">
                        <img src="{{asset('frontend/adv.png')}}" alt="Advocate Sheba" style="width:65px;">
                    </div>

                    <h4>Adv. Md. Juwel</h4>
                    <p>
                        <i class="fa fa-map-pin" style="color:red;"></i> &nbsp; Supreme Court,Dhaka
                    </p>

                    <div class="profile_btn">
                        <button>Land</button>
                        <button>Corporate</button>
                    </div>


                    <p>
                        <i class="fa fa-user-circle-o"></i> &nbsp; 8 Years Experience
                    </p>

                    <a href="#">
                        View Profile
                    </a>

                </div>

            </div>


            <!-- Labour Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="advocate-topic-card">

                    <div class="advocate-topic-icon">
                        <img src="{{asset('frontend/adv.png')}}" alt="Advocate Sheba" style="width:65px;">
                    </div>

                    <h4>Adv. Md. Abdul Kuddus</h4>
                    <p>
                        <i class="fa fa-map-pin" style="color:red;"></i> &nbsp; Supreme Court,Dhaka
                    </p>

                    <div class="profile_btn">
                        <button>Labour</button>
                        <button>Family</button>
                    </div>


                    <p>
                        <i class="fa fa-user-circle-o"></i> &nbsp; 8 Years Experience
                    </p>

                    <a href="#">
                        View Profile
                    </a>

                </div>

            </div>


            <!-- Criminal Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="advocate-topic-card">

                    <div class="advocate-topic-icon">
                        <img src="{{asset('frontend/adv.png')}}" alt="Advocate Sheba" style="width:65px;">
                    </div>

                    <h4>Adv. Md. Asadullah Galib</h4>
                    <p>
                        <i class="fa fa-map-pin" style="color:red;"></i> &nbsp; Supreme Court,Dhaka
                    </p>

                    <div class="profile_btn">
                        <button>Criminal</button>
                        <button>Corporate</button>
                    </div>


                    <p>
                        <i class="fa fa-user-circle-o"></i> &nbsp; 8 Years Experience
                    </p>

                    <a href="#">
                        View Profile
                    </a>

                </div>

            </div>


            <!-- Civil Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="advocate-topic-card">

                    <div class="advocate-topic-icon">
                        <img src="{{asset('frontend/adv.png')}}" alt="Advocate Sheba" style="width:65px;">
                    </div>

                    <h4>Adv. Md. Sayem Khan</h4>
                    <p>
                        <i class="fa fa-map-pin" style="color:red;"></i> &nbsp; Supreme Court,Dhaka
                    </p>

                    <div class="profile_btn">
                        <button>Civil</button>
                        <button>Corporate</button>
                    </div>


                    <p>
                        <i class="fa fa-user-circle-o"></i> &nbsp; 8 Years Experience
                    </p>

                    <a href="#">
                        View Profile
                    </a>

                </div>

            </div>


            <!-- Family Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="advocate-topic-card">

                    <div class="advocate-topic-icon">
                        <img src="{{asset('frontend/adv.png')}}" alt="Advocate Sheba" style="width:65px;">
                    </div>

                    <h4>Adv. Md. Sohel Rana</h4>
                    <p>
                        <i class="fa fa-map-pin" style="color:red;"></i> &nbsp; Supreme Court,Dhaka
                    </p>

                    <div class="profile_btn">
                        <button>Family</button>
                        <button>Corporate</button>
                    </div>


                    <p>
                        <i class="fa fa-user-circle-o"></i> &nbsp; 8 Years Experience
                    </p>

                    <a href="#">
                        View Profile
                    </a>

                </div>

            </div>


            <!-- Land Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="advocate-topic-card">

                    <div class="advocate-topic-icon">
                        <img src="{{asset('frontend/adv.png')}}" alt="Advocate Sheba" style="width:65px;">
                    </div>

                    <h4>Adv. Md. Juwel</h4>
                    <p>
                        <i class="fa fa-map-pin" style="color:red;"></i> &nbsp; Supreme Court,Dhaka
                    </p>

                    <div class="profile_btn">
                        <button>Land</button>
                        <button>Corporate</button>
                    </div>


                    <p>
                        <i class="fa fa-user-circle-o"></i> &nbsp; 8 Years Experience
                    </p>

                    <a href="#">
                        View Profile
                    </a>

                </div>

            </div>


            <!-- Labour Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="advocate-topic-card">

                    <div class="advocate-topic-icon">
                        <img src="{{asset('frontend/adv.png')}}" alt="Advocate Sheba" style="width:65px;">
                    </div>

                    <h4>Adv. Md. Abdul Kuddus</h4>
                    <p>
                        <i class="fa fa-map-pin" style="color:red;"></i> &nbsp; Supreme Court,Dhaka
                    </p>

                    <div class="profile_btn">
                        <button>Labour</button>
                        <button>Family</button>
                    </div>


                    <p>
                        <i class="fa fa-user-circle-o"></i> &nbsp; 8 Years Experience
                    </p>

                    <a href="#">
                        View Profile
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

<!-- Who is Barrister -->
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
                                    ব্যারিস্টার কারা ? 
                                </h3>
                                <p style="color:#fff">
                                    ব্যারিস্টার একজন আইনজীবী যিনি আদালতে ক্লায়েন্টের পক্ষে মামলা লড়েন, আইনি পরামর্শ দেন ও দলিল তৈরি করে দেন। 
                                </p>

                                <h3 style="text-align: left;margin-bottom: 15px;font-size: 20px;color: #fff;font-weight: bold;    margin-top: 26px;">
                                    তারা কি করেন ? 
                                </h3>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    আদালতে মামলা পরিচালনা 
                                </p>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    আইনি পরামর্শ প্রদান 
                                </p>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    চুক্তি ও দলিল তৈরি
                                </p>

                                <h3 style="text-align: left;margin-bottom: 15px;font-size: 20px;color: #fff;font-weight: bold;    margin-top: 26px;">
                                    কিভাবে ব্যারিস্টার হওয়া যায় ? 
                                </h3>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    এলএলবি ডিগ্রি সম্পন্ন 
                                </p>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    বার কাউন্সিল এনরোলমেন্ট পরীক্ষা
                                </p>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    ৬ মাস পুপিলেজ সম্পন্ন
                                </p>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    এনরোলমেন্ট সনদ গ্রহণ
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