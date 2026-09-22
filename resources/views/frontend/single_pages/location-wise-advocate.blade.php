@extends('frontend.layouts.master')
@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/find_advocate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/article.css')}}">

<div class="doctors-blog-page">
    <div class="blog-container">


        <!-- =====================================================
             BREADCRUMB
        ====================================================== -->

        <div class="doctors-blog-breadcrumb">

            <ul>

                <li>
                    <a href="{{ url('/') }}">
                        Home
                    </a>
                </li>

                <li class="breadcrumb-arrow">
                    <i class="fa-solid fa-chevron-right"></i>
                </li>

                <li>
                    <a href="#">
                        TANJIB ALAM & ASSOCIATES
                    </a>
                </li>

                <li class="breadcrumb-arrow">
                    <i class="fa-solid fa-chevron-right"></i>
                </li>

                <li>
                    <a href="#">
                        Advocate
                    </a>
                </li>

                <li class="breadcrumb-arrow">
                    <i class="fa-solid fa-chevron-right"></i>
                </li>

                <li class="current">
                    Dhaka
                </li>

            </ul>

        </div>

        <!-- =====================================================
             BLOG HEADER
        ====================================================== -->

        <div class="blog-header">

            <!-- Title -->
            <h1 class="blog-title">

                Property law advocates in Dhaka.

            </h1>

            <!-- Meta -->
            <div class="blog-meta">

                <div class="meta-item">

                    <i class="fa-regular fa-user"></i>

                    <span>
                        Find experience and trusted property law advocate in Dhaka.
                    </span>

                </div>

            </div>

        </div>



        <!-- =====================================================
             MAIN BLOG CONTENT
        ====================================================== -->

        <div class="blog-main-section">

            <div class="blog-content-row">


                <!-- =================================================
                     LEFT ARTICLE
                ================================================== -->

                <article class="blog-article">


                    <!-- Featured Image -->

                    <img
                        src="{{asset('frontend/f1.jpg')}}"
                        alt="গ্রেপ্তার হলে আপনার অধিকার কী কী?"
                        class="blog-featured-image"
                    >


                    <!-- Article Content -->

                    <div class="blog-article-content">

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                        </p>

                        <p>
                             Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                    </div>

                </article>



                <!-- =================================================
                     RIGHT SIDEBAR
                ================================================== -->

                <aside>


                    <!-- Key Overview -->

                    <div class="key-overview-card">

                        <div class="key-overview-title">

                            KEY OVERVIEW

                        </div>


                        <p class="key-overview-text">

                            “ Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. ”

                        </p>


                        <div class="key-overview-divider" style="margin: 10px 0px 0px 0px;"></div>


                        <a href="#" class="overview-link">

                            <i class="fa-solid fa-user-circle-o" style="font-size: 20px;"></i>

                            <span style="font-size: 20px;">124 Advocates</span> <br>
                            <p style="margin-left: -145px;padding-top: 45px;">
                                available property law in dhaka.
                            </p>

                        </a>

                    </div>


                </aside>


            </div>

        </div>

    </div>
</div>

<!-- ======== Find Advocate ========== -->

<section class="find-legal-articles-section">

    <div class="container-fluid">

        <div class="section-heading d-flex justify-content-between align-items-center">

            <div class="section-heading-left">

                <div class="section-small-icon">
                    <i class="fa-solid fa-scale-balanced"></i>
                </div>

                <h3>Legal Advocate</h3>

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

<section class="" style="padding:20px 0px">

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="row">
                    <div class="col-md-4">
                        <a class="btn btn-success btn-block" href="#" style="border-radius: 15px;margin-bottom: 10px;width: 100%;background: #000;"> <i class="fa fa-user"></i> &nbsp; Find Advoates </a>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-success btn-block" href="#" style="border-radius: 15px;margin-bottom: 10px;width: 100%;background: #000;"> <i class="fa fa-user"></i> &nbsp; Find Barristers </a>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-success btn-block" href="#" style="border-radius: 15px;margin-bottom: 10px;width: 100%;background: #000;"> <i class="fa fa-user"></i> &nbsp; Find Legal Consultants </a>
                    </div>
                </div>
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

@endsection