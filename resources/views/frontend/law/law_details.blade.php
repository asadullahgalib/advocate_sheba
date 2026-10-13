@extends('frontend.layouts.master')
@section('content')

<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


<link rel="stylesheet"
      href="{{ asset('assets/css/court_details.css') }}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/find_advocate.css')}}">

<style>
    .faq-question{
        min-height: 50px;
        padding: 15px 10px;
        font-size: 19px;
    }
</style>

<div class="doctors-blog-page" style="margin-bottom: 20px;">

    <div class="blog-container">


        <!-- =================================================
             BLOG HEADER
        ================================================== -->

        <div class="blog-header"
             style="padding: 15px 0px 0px 0px; margin-bottom: -15px;">

            <h1 class="blog-title">
                <i class="fa fa-balance-scale"></i> Criminal Law
            </h1>

        </div>


        <!-- =================================================
             OVERVIEW
        ================================================== -->

        <div class="row">

            <div class="col-md-12">

                <div class="blog-article-content">

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>

            </div>

        </div>

        <!-- ===============================
             CIVIL FAQ
        ================================ -->

        <div class="faq-card">

            <div class="faq-accordion"
                 id="civilCourtFaq">


                <!-- CIVIL FAQ 1 -->

                <div class="faq-item active">

                    <button class="faq-question"
                            type="button">

                        <span>
                            Bail Application
                        </span>

                        <i class="bi bi-chevron-up"></i>

                    </button>


                    <div class="faq-answer">

                        <!-- 1 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                Overview:
                            </h6>

                            <p>
                                Criminal Law বা ফৌজদারি আইন হলো এমন আইন, যার মাধ্যমে অপরাধ হিসেবে গণ্য কর্মকাণ্ড নির্ধারণ, অপরাধের তদন্ত ও বিচার এবং আইন অনুযায়ী শাস্তির বিধান নির্ধারিত হয়। বাংলাদেশের ফৌজদারি বিচারব্যবস্থায় বিভিন্ন ধরনের অপরাধের বিচার Sessions Courts ও Magistrates’ Courts-এর মাধ্যমে হয়ে থাকে।
                            </p>

                            <p>Criminal Law-এর গুরুত্বপূর্ণ বিষয়সমূহ</p>
                        </div>

                        <!-- 2 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                Criminal Offence — ফৌজদারি অপরাধঃ 
                            </h6>

                            <p>
                                হত্যা, চুরি, প্রতারণা, মারামারি, জালিয়াতি, অপরাধমূলক ষড়যন্ত্রসহ বিভিন্ন কর্মকাণ্ড আইন অনুযায়ী ফৌজদারি অপরাধ হতে পারে।
                            </p>
                        </div>

                        <!-- 3 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                Investigation — তদন্তঃ
                            </h6>

                            <p>
                                অপরাধের অভিযোগ পাওয়ার পর আইন অনুযায়ী তদন্ত ও প্রমাণ সংগ্রহের প্রক্রিয়া পরিচালিত হয়। তদন্তের ফলাফলের ভিত্তিতে পরবর্তী আইনগত কার্যক্রম এগিয়ে যায়।
                            </p>
                        </div>

                        <!-- 4 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                Criminal Trial — ফৌজদারি বিচারঃ
                            </h6>

                            <p>
                                আদালত অভিযোগ, সাক্ষ্য-প্রমাণ এবং উভয় পক্ষের বক্তব্য বিবেচনা করে মামলার বিচার পরিচালনা করে। মামলার ধরন ও অপরাধের প্রকৃতি অনুযায়ী সংশ্লিষ্ট আদালতে বিচার হতে পারে।
                            </p>
                        </div>

                        <!-- 5 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                Bail — জামিনঃ
                            </h6>

                            <p>
                                মামলার প্রকৃতি ও প্রযোজ্য আইনের বিধান অনুযায়ী কোনো অভিযুক্ত ব্যক্তি জামিনের আবেদন করতে পারেন। জামিনযোগ্যতা মামলার নির্দিষ্ট আইন ও পরিস্থিতির ওপর নির্ভর করে।
                            </p>
                        </div>

                    </div>

                </div>


                <!-- CIVIL FAQ 2 -->

                <div class="faq-item">

                    <button class="faq-question"
                            type="button">

                        <span>
                            Fir Assistance
                        </span>

                        <i class="bi bi-chevron-down"></i>

                    </button>


                    <div class="faq-answer">

                        <p style="margin-bottom:15px">
                            কোনো ব্যক্তিকে গ্রেফতার বা আটক করার ক্ষেত্রে
                            প্রযোজ্য আইন এবং নির্ধারিত আইনগত প্রক্রিয়া
                            অনুসরণ করা গুরুত্বপূর্ণ।
                        </p>

                        <!-- 1 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                গ্রেফতারের কারণ জানার অধিকারঃ
                            </h6>

                            <p>
                                গ্রেফতার বা আটক সংক্রান্ত বিষয়ে
                                প্রযোজ্য আইন অনুযায়ী সংশ্লিষ্ট
                                ব্যক্তিকে প্রয়োজনীয় তথ্য জানানোর
                                বিষয়টি গুরুত্বপূর্ণ।
                            </p>
                        </div>

                        <!-- 2 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                আইনজীবীর সহায়তা নেওয়ার অধিকারঃ
                            </h6>

                            <p>
                                আইনগত প্রক্রিয়ায় একজন ব্যক্তির
                                আইনজীবীর সহায়তা নেওয়ার বিষয়টি
                                প্রযোজ্য আইন অনুযায়ী বিবেচিত হয়।
                            </p>
                        </div>

                        <!-- 3 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                পরিবারকে জানানোর অধিকারঃ
                            </h6>

                            <p>
                                গ্রেফতার বা আটক সংক্রান্ত বিষয়ে
                                পরিবারের সদস্যকে জানানোর বিষয়টি
                                প্রযোজ্য আইন ও পরিস্থিতির
                                ভিত্তিতে বিবেচিত হতে পারে।
                            </p>
                        </div>

                        <!-- 4 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                ২৪ ঘণ্টার মধ্যে আদালতে উপস্থাপনঃ
                            </h6>

                            <p>
                                গ্রেফতার ও আদালতে উপস্থাপন
                                সংক্রান্ত বিষয় প্রযোজ্য আইন
                                এবং নির্ধারিত বিচারিক
                                প্রক্রিয়ার অধীন।
                            </p>
                        </div>

                        <!-- 5 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                বেআইনি আটকের প্রতিকারঃ
                            </h6>

                            <p>
                                বেআইনি আটক সংক্রান্ত বিষয়ে
                                প্রযোজ্য আইন অনুযায়ী সংশ্লিষ্ট
                                ব্যক্তি আইনগত প্রতিকার চাইতে
                                পারেন।
                            </p>
                        </div>

                        <!-- 6 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                রিমান্ড সংক্রান্ত অধিকারঃ
                            </h6>

                            <p>
                                রিমান্ড সংক্রান্ত বিষয় আদালতের
                                বিচারিক প্রক্রিয়া এবং প্রযোজ্য
                                আইনের বিধান অনুযায়ী বিবেচিত হয়।
                            </p>
                        </div>

                    </div>

                </div>


                <!-- CIVIL FAQ 3 -->

                <div class="faq-item">

                    <button class="faq-question"
                            type="button">

                        <span>
                            Trial Representation
                        </span>

                        <i class="bi bi-chevron-down"></i>

                    </button>


                    <div class="faq-answer">

                        <p style="margin-bottom:15px">
                            প্রত্যেক ব্যক্তির জন্য আইন অনুযায়ী
                            ন্যায়বিচার পাওয়ার সুযোগ থাকা একটি
                            গুরুত্বপূর্ণ বিষয়।
                        </p>

                        <!-- 1 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                নিরপেক্ষ শুনানির অধিকারঃ
                            </h6>

                            <p>
                                আদালতের বিচারিক প্রক্রিয়ায়
                                পক্ষগুলোর বক্তব্য ও প্রমাণ
                                বিবেচনা করা হয়।
                            </p>
                        </div>

                        <!-- 2 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                প্রমাণ উপস্থাপনের সুযোগঃ
                            </h6>

                            <p>
                                মামলার প্রকৃতি ও প্রযোজ্য
                                আইন অনুযায়ী পক্ষগুলো তাদের
                                বক্তব্য ও প্রমাণ উপস্থাপনের
                                সুযোগ পেতে পারে।
                            </p>
                        </div>

                        <!-- 3 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                আদালতের সিদ্ধান্তঃ
                            </h6>

                            <p>
                                আদালত সংশ্লিষ্ট মামলা,
                                নথি, প্রমাণ এবং প্রযোজ্য
                                আইন বিবেচনা করে সিদ্ধান্ত
                                প্রদান করে।
                            </p>
                        </div>

                        <!-- 4 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                আপিলের সুযোগঃ
                            </h6>

                            <p>
                                প্রযোজ্য আইন অনুযায়ী নির্দিষ্ট
                                ক্ষেত্রে আদালতের সিদ্ধান্তের
                                বিরুদ্ধে উচ্চতর আদালতে যাওয়ার
                                সুযোগ থাকতে পারে।
                            </p>
                        </div>

                    </div>

                </div>

                <!-- CIVIL FAQ 4 -->

                <div class="faq-item">

                    <button class="faq-question"
                            type="button">

                        <span>
                            Cyber Crime Case
                        </span>

                        <i class="bi bi-chevron-down"></i>

                    </button>


                    <div class="faq-answer">

                        <p style="margin-bottom:15px">
                            প্রত্যেক মানুষের ন্যায়বিচার পাওয়ার অধিকার রয়েছে। আইনগত কোনো সমস্যা বা বিরোধের সম্মুখীন হলে একজন ব্যক্তি তার অধিকার, দায়িত্ব ও সম্ভাব্য আইনগত প্রতিকার সম্পর্কে জানার এবং প্রয়োজন অনুযায়ী আইনজীবীর সহায়তা নেওয়ার সুযোগ পান। আইনি সহায়তা মানুষকে সঠিক আইনগত প্রক্রিয়া বুঝতে এবং নিজের অধিকার রক্ষায় কার্যকর পদক্ষেপ নিতে সাহায্য করে।
                        </p>

                        <!-- 1 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                আইন সম্পর্কে জানার অধিকারঃ
                            </h6>

                            <p>
                                প্রত্যেক ব্যক্তি তার সঙ্গে সংশ্লিষ্ট আইন, অধিকার ও আইনগত প্রক্রিয়া সম্পর্কে প্রয়োজনীয় তথ্য জানার অধিকার রাখেন। সঠিক তথ্য জানা আইনগত সিদ্ধান্ত গ্রহণে সহায়তা করে।
                            </p>
                        </div>

                        <!-- 2 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                আইনজীবীর পরামর্শ নেওয়ার অধিকারঃ
                            </h6>

                            <p>
                                আইনগত সমস্যা দেখা দিলে একজন ব্যক্তি যোগ্য আইনজীবীর কাছ থেকে পরামর্শ নিতে পারেন। আইনজীবী মামলার বিষয়, প্রয়োজনীয় নথি এবং সম্ভাব্য আইনগত পদক্ষেপ সম্পর্কে দিকনির্দেশনা দিতে পারেন।
                            </p>
                        </div>

                        <!-- 3 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                আদালতে নিজের অধিকার রক্ষার অধিকারঃ
                            </h6>

                            <p>
                                কোনো দেওয়ানি বা ফৌজদারি বিষয়ে আদালতের কার্যক্রমের মুখোমুখি হলে একজন ব্যক্তি আইন অনুযায়ী নিজের অধিকার ও স্বার্থ রক্ষার সুযোগ পান। প্রয়োজন অনুযায়ী আইনজীবীর মাধ্যমে আদালতে নিজের বক্তব্য ও দাবি উপস্থাপন করা যায়।
                            </p>
                        </div>

                        <!-- 4 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                ন্যায়বিচার পাওয়ার অধিকারঃ
                            </h6>

                            <p>
                                প্রত্যেক ব্যক্তি আইনসম্মত ও ন্যায্য বিচার পাওয়ার অধিকার রাখেন। আর্থিক বা সামাজিক সীমাবদ্ধতার কারণে আইনগত সহায়তা প্রয়োজন হলে প্রযোজ্য ক্ষেত্রে সরকারি বা আইনগত সহায়তা প্রদানকারী প্রতিষ্ঠানের সহযোগিতা নেওয়ার সুযোগ থাকতে পারে।
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- ============================
     LEGAL ARTICLES SECTION START
============================= -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/legal-service-article.css') }}">

<section class="legal-articles-section" style="background: #f7f8fa;padding: 0px 0px 0px 0px;">

    <div class="container-fluid">

        <!-- ============================
             FEATURED ARTICLES HEADER
        ============================= -->

        <div class="flex justify-between items-center mt-2">
          <div class="my-4">
            <h2
              id="hospitals-by-location"
              class="text-lg md:text-xl font-semibold text-gray-800 dark:text-gray-100"
            >
              Legal Articles
            </h2>
            <p class="text-sm text-gray-600 dark:text-gray-400">
              Explore Legal Articles
            </p>
          </div>
          <a
            href="#"
            aria-label=""
            class="flex items-center gap-1 text-[#008080] text-sm font-semibold hover:underline transition"
          >
            View All
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="18"
              height="18"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-chevron-right"
              aria-hidden="true"
            >
              <path d="m9 18 6-6-6-6"></path>
            </svg>
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
<div class="page-content mb-50" style="padding: 0px 0px 10px 0px;background-color: #ffffff;margin-bottom: -20px !important;border-radius: 15px;">
    <div class="container">
        <div class="flex justify-between items-center mt-2">
          <div class="my-4">
            <h2
              id="hospitals-by-location"
              class="text-lg md:text-xl font-semibold text-gray-800 dark:text-gray-100"
            >
              Latest Video
            </h2>
            <p class="text-sm text-gray-600 dark:text-gray-400">
              আইন সম্পর্কে জানুন ভিডিও দেখে
            </p>
          </div>
          <a
            href="#"
            aria-label=""
            class="flex items-center gap-1 text-[#008080] text-sm font-semibold hover:underline transition"
          >
            View All
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="18"
              height="18"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-chevron-right"
              aria-hidden="true"
            >
              <path d="m9 18 6-6-6-6"></path>
            </svg>
          </a>
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

@include('frontend.layouts.find_professional')

<!-- =========================================================
     FAQ JAVASCRIPT
========================================================= -->

<script>

document.addEventListener('DOMContentLoaded', function () {


    /*
    |--------------------------------------------------------------------------
    | CIVIL COURTS FAQ
    |--------------------------------------------------------------------------
    */

    const civilFaq = document.getElementById('civilCourtFaq');

    if (civilFaq) {

        const civilQuestions =
            civilFaq.querySelectorAll('.faq-question');


        civilQuestions.forEach(function (question) {

            question.addEventListener('click', function () {

                const currentItem =
                    this.closest('.faq-item');

                const isActive =
                    currentItem.classList.contains('active');


                /*
                |--------------------------------------------------------------------------
                | শুধু Civil FAQ-এর item বন্ধ হবে
                |--------------------------------------------------------------------------
                */

                civilFaq.querySelectorAll('.faq-item')
                    .forEach(function (item) {

                        item.classList.remove('active');

                        const icon =
                            item.querySelector('.faq-question i');

                        if (icon) {

                            icon.classList.remove('bi-chevron-up');

                            icon.classList.add('bi-chevron-down');

                        }

                    });


                /*
                |--------------------------------------------------------------------------
                | Current Civil FAQ open
                |--------------------------------------------------------------------------
                */

                if (!isActive) {

                    currentItem.classList.add('active');

                    const icon =
                        currentItem.querySelector('.faq-question i');

                    if (icon) {

                        icon.classList.remove('bi-chevron-down');

                        icon.classList.add('bi-chevron-up');

                    }

                }

            });

        });

    }


});

</script>


@endsection