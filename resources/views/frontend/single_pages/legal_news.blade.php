@extends('frontend.layouts.master')
@section('content')
<!-- ============================
     LEGAL ARTICLES SECTION START
============================= -->

<section class="legal-articles-section">

    <div class="container-fluid">

        <!-- ============================
             FEATURED ARTICLES HEADER
        ============================= -->

        <div class="section-heading featured-heading">

            <div class="section-heading-left">

                <div class="featured-star">
                    <i class="fa-solid fa-star"></i>
                </div>

                <h3>Legal News</h3>

            </div>

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


<!-- ============================
     LEGAL ARTICLES SECTION END
    ============================= -->

    <style>
        /* =====================================
       LEGAL ARTICLES MAIN SECTION
    ===================================== */

    .legal-articles-section {
        background: #f7f8fa;
        padding: 30px 20px 40px;
    }


    /* =====================================
       MAIN HEADER
    ===================================== */

    .legal-main-header {
        margin-bottom: 20px;
    }

    .legal-title-area {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .legal-main-icon {
        width: 105px;
        height: 105px;
        border-radius: 15px;
        background: #063d31;

        display: flex;
        align-items: center;
        justify-content: center;

        box-shadow: 0 5px 15px rgba(0,0,0,0.12);
    }

    .legal-main-icon i {
        font-size: 55px;
        color: #c59a43;
    }

    .legal-title-area h2 {
        margin: 0;
        color: #07382d;
        font-size: 42px;
        font-weight: 700;
    }

    .legal-title-area p {
        margin: 5px 0 0;
        font-size: 22px;
        font-weight: 500;
        color: #8b6b2f;
    }


    /* =====================================
       SECTION HEADING
    ===================================== */

    .section-heading {
        display: flex;
        justify-content: space-between;
        align-items: center;

        margin-bottom: 18px;
    }

    .section-heading-left {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .section-heading-left h3 {
        margin: 0;
        font-size: 25px;
        font-weight: 700;
        color: #07382d;
    }

    .section-small-icon {
        width: 42px;
        height: 42px;

        background: #07382d;
        color: #c59a43;

        border-radius: 7px;

        display: flex;
        align-items: center;
        justify-content: center;
    }

    .section-small-icon i {
        font-size: 20px;
    }


    /* =====================================
       VIEW ALL BUTTON
    ===================================== */

    .view-all-btn {
        text-decoration: none;

        color: #07382d;
        font-size: 16px;
        font-weight: 600;

        border: 1px solid #bfc8c4;
        border-radius: 10px;

        padding: 10px 18px;

        transition: 0.3s;
    }

    .view-all-btn i {
        margin-left: 10px;
    }

    .view-all-btn:hover {
        background: #07382d;
        color: #ffffff;
    }


    /* =====================================
       TOPIC GRID
    ===================================== */

    .legal-topics-row {
        margin-left: -8px;
        margin-right: -8px;
    }

    .legal-topics-row > div {
        padding-left: 8px;
        padding-right: 8px;
        margin-bottom: 16px;
    }


    /* =====================================
       CUSTOM 5 COLUMN
    ===================================== */

    @media (min-width: 1200px) {

        .col-xl-5-custom {
            width: 20%;
            flex: 0 0 20%;
        }

    }


    /* =====================================
       LEGAL TOPIC CARD
    ===================================== */

    .legal-topic-card {
        height: 100%;

        background: #ffffff;

        border: 1px solid #e2e5e5;

        border-radius: 14px;

        text-align: center;

        padding: 22px 15px 16px;

        box-shadow: 0 4px 12px rgba(0,0,0,0.06);

        transition: 0.3s;

        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .legal-topic-card:hover {
        transform: translateY(-5px);

        box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    }


    /* =====================================
       TOPIC ICON
    ===================================== */

    .topic-icon {
        width: 100px;
        height: 100px;

        border-radius: 50%;

        background: #f0f3f2;

        display: flex;
        align-items: center;
        justify-content: center;

        margin-bottom: 15px;
    }

    .topic-icon i {
        font-size: 55px;
        color: #07382d;
    }


    /* =====================================
       TOPIC TEXT
    ===================================== */

    .legal-topic-card h4 {
        font-size: 20px;
        font-weight: 700;

        color: #152b27;

        margin-bottom: 10px;

        line-height: 1.25;
    }

    .legal-topic-card p {
        color: #52605c;

        font-size: 14px;

        line-height: 1.7;

        margin-bottom: 15px;

        flex-grow: 1;
    }

    .legal-topic-card a {
        display: flex;
        justify-content: center;
        align-items: center;

        gap: 12px;

        width: 100%;

        border-top: 1px solid #e1e5e3;

        padding-top: 15px;

        text-decoration: none;

        color: #07382d;

        font-size: 15px;

        font-weight: 600;
    }

    .legal-topic-card a i {
        transition: 0.3s;
    }

    .legal-topic-card a:hover i {
        transform: translateX(5px);
    }


    /* =====================================
       FEATURED ARTICLES
    ===================================== */

    .featured-heading {
        margin-top: 28px;
    }

    .featured-star {
        color: #c59a43;
        font-size: 30px;
    }

    .view-all-articles {
        color: #07382d;

        text-decoration: none;

        font-size: 16px;

        font-weight: 600;
    }

    .view-all-articles i {
        margin-left: 8px;
    }


    /* =====================================
       FEATURED ARTICLE CARD
    ===================================== */

    .featured-articles-row {
        margin-left: -10px;
        margin-right: -10px;
    }

    .featured-articles-row > div {
        padding-left: 10px;
        padding-right: 10px;

        margin-bottom: 20px;
    }

    .featured-article-card {
        background: #ffffff;

        border-radius: 12px;

        overflow: hidden;

        border: 1px solid #e2e5e5;

        box-shadow: 0 4px 12px rgba(0,0,0,0.06);

        height: 100%;

        transition: 0.3s;
    }

    .featured-article-card:hover {
        transform: translateY(-5px);

        box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    }


    /* =====================================
       ARTICLE IMAGE
    ===================================== */

    .article-image {
        position: relative;

        height: 170px;

        overflow: hidden;
    }

    .article-image img {
        width: 100%;
        height: 100%;

        object-fit: cover;

        transition: 0.4s;
    }

    .featured-article-card:hover .article-image img {
        transform: scale(1.08);
    }


    /* =====================================
       ARTICLE CATEGORY
    ===================================== */

    .article-category {
        position: absolute;

        left: 12px;
        bottom: 10px;

        background: #07634e;

        color: #ffffff;

        padding: 5px 12px;

        border-radius: 5px;

        font-size: 12px;

        font-weight: 600;
    }


    /* =====================================
       ARTICLE CONTENT
    ===================================== */

    .article-content {
        padding: 17px 15px;
    }

    .article-content h4 {
        font-size: 18px;

        line-height: 1.45;

        font-weight: 700;

        color: #1d2825;

        min-height: 80px;

        margin-bottom: 15px;
    }


    /* =====================================
       ARTICLE META
    ===================================== */

    .article-meta {
        display: flex;

        justify-content: space-between;

        align-items: center;

        margin-bottom: 18px;

        color: #69736f;

        font-size: 12px;
    }

    .article-meta i {
        margin-right: 4px;
    }


    /* =====================================
       READ MORE
    ===================================== */

    .read-more {
        color: #07382d;

        text-decoration: none;

        font-size: 15px;

        font-weight: 600;
    }

    .read-more i {
        margin-left: 10px;

        transition: 0.3s;
    }

    .read-more:hover {
        color: #0b805f;
    }

    .read-more:hover i {
        transform: translateX(5px);
    }


    /* =====================================
       TABLET RESPONSIVE
    ===================================== */

    @media (max-width: 991px) {

        .legal-title-area h2 {
            font-size: 34px;
        }

        .legal-title-area p {
            font-size: 18px;
        }

    }


    /* =====================================
       MOBILE RESPONSIVE
    ===================================== */

    @media (max-width: 575px) {

        .legal-articles-section {
            padding: 20px 8px 30px;
        }


        /* Main Header */

        .legal-main-icon {
            width: 70px;
            height: 70px;
            border-radius: 12px;
        }

        .legal-main-icon i {
            font-size: 35px;
        }

        .legal-title-area {
            gap: 12px;
        }

        .legal-title-area h2 {
            font-size: 25px;
        }

        .legal-title-area p {
            font-size: 14px;
            margin-top: 2px;
        }


        /* Heading */

        .section-heading-left h3 {
            font-size: 20px;
        }

        .section-small-icon {
            width: 35px;
            height: 35px;
        }

        .view-all-btn {
            padding: 7px 10px;
            font-size: 12px;
        }


        /* Mobile Topic Cards */

        .legal-topics-row {
            margin-left: -3px;
            margin-right: -3px;
        }

        .legal-topics-row > div {
            padding-left: 3px;
            padding-right: 3px;
            margin-bottom: 6px;
        }

        .legal-topic-card {
            padding: 15px 8px 12px;
            border-radius: 10px;
        }


        .topic-icon {
            width: 65px;
            height: 65px;
            margin-bottom: 10px;
        }

        .topic-icon i {
            font-size: 34px;
        }


        .legal-topic-card h4 {
            font-size: 16px;
            margin-bottom: 7px;
        }

        .legal-topic-card p {
            font-size: 11px;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        .legal-topic-card a {
            font-size: 12px;
            gap: 6px;
            padding-top: 10px;
        }


        /* Featured Header */

        .featured-star {
            font-size: 22px;
        }

        .view-all-articles {
            font-size: 12px;
        }


        /* Featured Article */

        .featured-articles-row > div {
            padding-left: 5px;
            padding-right: 5px;
        }

        .article-image {
            height: 130px;
        }

        .article-content {
            padding: 12px 10px;
        }

        .article-content h4 {
            font-size: 15px;
            min-height: auto;
            margin-bottom: 12px;
        }

        .article-meta {
            font-size: 10px;
            gap: 5px;
            flex-wrap: wrap;
        }

        .read-more {
            font-size: 13px;
        }

    }
</style>

<style>
    /* Video Thumbnail */
    .video-thumb {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        cursor: pointer;
    }

    .video-thumb img {
        width: 100%;
        height: auto;
        display: block;
        transition: all 0.4s ease;
    }

    /* Overlay */
    .video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.45);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }

    /* YouTube Icon */
    .youtube-icon {
        width: 60px;
        height: 60px;
        background: #ff0000;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transform: scale(0.7);
        transition: all 0.3s ease;
    }

    .youtube-icon i {
        color: #fff;
        font-size: 28px;
        margin-left: 4px;
    }

    /* Hover Effect */
    .video-thumb:hover .video-overlay {
        opacity: 1;
        visibility: visible;
    }

    .video-thumb:hover .youtube-icon {
        transform: scale(1);
    }

    /* Image Zoom */
    .video-thumb:hover img {
        transform: scale(1.05);
    }
</style>
<div class="page-content mb-50" style="padding: 25px 0px 10px 0px;background-color: #ffffff;margin-bottom: -20px !important;border-radius: 15px;">
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