@extends('frontend.layouts.master')
@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/article.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/find_advocate.css')}}">

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
                        Blogs
                    </a>
                </li>

                <li class="breadcrumb-arrow">
                    <i class="fa-solid fa-chevron-right"></i>
                </li>

                <li>
                    <a href="#">
                        The Law Counsel
                    </a>
                </li>

                <li class="breadcrumb-arrow">
                    <i class="fa-solid fa-chevron-right"></i>
                </li>

                <li class="current">
                    গ্রেপ্তার হলে আপনার অধিকার কী কী?
                </li>

            </ul>

        </div>



        <!-- =====================================================
             SPECIALIST CATEGORY CAROUSEL
        ====================================================== -->

        <div class="specialist-carousel-wrapper">

            <div class="specialist-carousel">

                <!-- Left Arrow -->
                <button
                    type="button"
                    class="specialist-arrow left"
                    id="specialistPrev">

                    <i class="fa-solid fa-chevron-left"></i>

                </button>


                <!-- Track -->
                <div
                    class="specialist-track"
                    id="specialistTrack">


                    <a href="#" class="specialist-item">
                        TANJIB ALAM & ASSOCIATES
                    </a>

                    <a href="#" class="specialist-item">
                        Doulah & Doulah
                    </a>

                    <a href="#" class="specialist-item">
                        Mahbub & Company
                    </a>

                    <a href="#" class="specialist-item active">
                        The Law Counsel
                    </a>

                    <a href="#" class="specialist-item">
                        Accord Chambers
                    </a>

                    <a href="#" class="specialist-item">
                        TANJIB ALAM & ASSOCIATES
                    </a>

                    <a href="#" class="specialist-item">
                        Doulah & Doulah
                    </a>

                    <a href="#" class="specialist-item">
                        Mahbub & Company
                    </a>

                </div>


                <!-- Right Arrow -->
                <button
                    type="button"
                    class="specialist-arrow right"
                    id="specialistNext">

                    <i class="fa-solid fa-chevron-right"></i>

                </button>

            </div>

        </div>



        <!-- =====================================================
             BLOG HEADER
        ====================================================== -->

        <div class="blog-header">

            <!-- Category -->
            <div class="blog-category-label">

                <i class="fa-solid fa-tag"></i>

                LAW & LEGAL RIGHTS

            </div>


            <!-- Title -->
            <h1 class="blog-title">

                গ্রেপ্তার হলে আপনার অধিকার কী কী?

            </h1>


            <!-- Meta -->
            <div class="blog-meta">

                <div class="meta-item">

                    <i class="fa-regular fa-user"></i>

                    <span>
                        AdvocateSheba Editorial Team
                    </span>

                </div>


                <span class="dot">•</span>


                <div class="meta-item">

                    <i class="fa-regular fa-calendar"></i>

                    <span>
                        September 15, 2026
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
                            কোনো ব্যক্তিকে গ্রেপ্তার করা হলে তিনি আইন দ্বারা
                            স্বীকৃত কিছু মৌলিক অধিকার ভোগ করেন। গ্রেপ্তার মানেই
                            একজন ব্যক্তি তার সব অধিকার হারিয়ে ফেলেছেন—এমনটি নয়।
                            বাংলাদেশের সংবিধান ও প্রচলিত আইন একজন গ্রেপ্তারকৃত
                            ব্যক্তির জন্য বিভিন্ন ধরনের সুরক্ষা ও আইনি অধিকার
                            নিশ্চিত করেছে।
                        </p>


                        <p>
                            তাই গ্রেপ্তারের পরিস্থিতিতে নিজের অধিকার সম্পর্কে
                            জানা অত্যন্ত গুরুত্বপূর্ণ। বিশেষ করে কেন গ্রেপ্তার
                            করা হচ্ছে তা জানা, আইনজীবীর সহায়তা নেওয়া এবং নির্দিষ্ট
                            সময়ের মধ্যে ম্যাজিস্ট্রেটের সামনে হাজির করার মতো
                            বিষয়গুলো একজন গ্রেপ্তারকৃত ব্যক্তির গুরুত্বপূর্ণ
                            অধিকার।
                        </p>



                        <!-- Section -->

                        <h2>
                            গ্রেপ্তার হলে আপনার অধিকার কী কী?
                        </h2>

                        <p>
                            গ্রেপ্তার হওয়ার পর একজন ব্যক্তির কয়েকটি গুরুত্বপূর্ণ
                            মৌলিক ও আইনগত অধিকার রয়েছে। এসব অধিকার সম্পর্কে
                            সচেতন থাকা এবং প্রয়োজন হলে আইনজীবীর সহায়তা নেওয়া
                            অত্যন্ত গুরুত্বপূর্ণ।
                        </p>


                        <ul>

                            <li>
                                কেন গ্রেপ্তার করা হচ্ছে তা জানার অধিকার
                            </li>

                            <li>
                                আইনজীবীর সঙ্গে পরামর্শ ও আইনি সহায়তা নেওয়ার অধিকার
                            </li>

                            <li>
                                ২৪ ঘণ্টার মধ্যে ম্যাজিস্ট্রেটের সামনে হাজির হওয়ার অধিকার
                            </li>

                            <li>
                                বেআইনি বা অযৌক্তিক আটক থেকে সুরক্ষা পাওয়ার অধিকার
                            </li>

                            <li>
                                নিজের বিরুদ্ধে জোরপূর্বক সাক্ষ্য দিতে বাধ্য না হওয়ার অধিকার
                            </li>

                            <li>
                                আদালতে আত্মপক্ষ সমর্থনের সুযোগ পাওয়ার অধিকার
                            </li>

                            <li>
                                আইনের অধীনে জামিনের সুযোগ পাওয়ার অধিকার
                            </li>

                        </ul>



                        <!-- Section -->

                        <h2>
                            গ্রেপ্তারের কারণ জানার অধিকার
                        </h2>

                        <p>
                            কোনো ব্যক্তিকে গ্রেপ্তার করা হলে তাকে গ্রেপ্তারের
                            কারণ সম্পর্কে জানানো গুরুত্বপূর্ণ। একজন ব্যক্তি
                            কোন অভিযোগ বা মামলার কারণে গ্রেপ্তার হচ্ছেন তা
                            জানা তার আইনি প্রতিরক্ষার জন্য প্রয়োজনীয়।
                        </p>


                        <p>
                            গ্রেপ্তারের কারণ জানা থাকলে তিনি তার আইনজীবীর সঙ্গে
                            প্রয়োজনীয় পরামর্শ করতে এবং নিজের আইনি অবস্থান
                            সম্পর্কে যথাযথভাবে প্রস্তুতি নিতে পারেন।
                        </p>



                        <!-- Section -->

                        <h2>
                            আইনজীবীর সহায়তা নেওয়ার অধিকার
                        </h2>

                        <p>
                            গ্রেপ্তার হওয়ার পর একজন ব্যক্তির আইনজীবীর সঙ্গে
                            পরামর্শ করার এবং নিজের পক্ষে আইনি সহায়তা নেওয়ার
                            অধিকার রয়েছে। কোনো মামলায় নিজের অধিকার ও আইনি
                            অবস্থান বুঝতে একজন অভিজ্ঞ আইনজীবীর পরামর্শ
                            গুরুত্বপূর্ণ হতে পারে।
                        </p>


                        <p>
                            বিশেষ করে অভিযোগের ধরন, মামলা জামিনযোগ্য কি না,
                            আদালতে কীভাবে আবেদন করতে হবে এবং পরবর্তী আইনি
                            পদক্ষেপ কী হওয়া উচিত—এসব বিষয়ে আইনজীবী প্রয়োজনীয়
                            দিকনির্দেশনা দিতে পারেন।
                        </p>



                        <!-- Section -->

                        <h2>
                            ২৪ ঘণ্টার মধ্যে ম্যাজিস্ট্রেটের সামনে হাজির করার অধিকার
                        </h2>

                        <p>
                            গ্রেপ্তারের পর একজন ব্যক্তিকে অযথা দীর্ঘ সময়
                            হেফাজতে রাখার সুযোগ নেই। আইন অনুযায়ী, গ্রেপ্তারকৃত
                            ব্যক্তিকে সাধারণভাবে গ্রেপ্তারের স্থান থেকে
                            ম্যাজিস্ট্রেটের আদালতে যাওয়ার জন্য প্রয়োজনীয় সময়
                            বাদ দিয়ে ২৪ ঘণ্টার মধ্যে নিকটস্থ ম্যাজিস্ট্রেটের
                            সামনে হাজির করার বিধান রয়েছে।
                        </p>


                        <p>
                            তবে কোনো ব্যক্তিকে আরও সময় হেফাজতে রাখার প্রয়োজন
                            হলে তা আইনগত প্রক্রিয়ার মাধ্যমে আদালতের অনুমোদনের
                            বিষয় হয়ে দাঁড়ায়। তাই গ্রেপ্তারের পর ২৪ ঘণ্টার
                            বিষয়টি একজন ব্যক্তির জন্য অত্যন্ত গুরুত্বপূর্ণ
                            আইনি সুরক্ষা।
                        </p>



                        <!-- Table -->

                        <div class="blog-table-wrapper">

                            <table class="blog-test-table">

                                <thead>

                                    <tr>

                                        <th>
                                            অধিকার
                                        </th>

                                        <th>
                                            সাধারণ অর্থ
                                        </th>

                                    </tr>

                                </thead>


                                <tbody>

                                    <tr>

                                        <td>
                                            গ্রেপ্তারের কারণ জানার অধিকার
                                        </td>

                                        <td>
                                            কেন গ্রেপ্তার করা হচ্ছে সে বিষয়ে
                                            জানার সুযোগ থাকা
                                        </td>

                                    </tr>


                                    <tr>

                                        <td>
                                            আইনজীবীর সহায়তার অধিকার
                                        </td>

                                        <td>
                                            আইনজীবীর সঙ্গে পরামর্শ ও আইনি
                                            প্রতিরক্ষা নেওয়ার সুযোগ
                                        </td>

                                    </tr>


                                    <tr>

                                        <td>
                                            ২৪ ঘণ্টার মধ্যে ম্যাজিস্ট্রেটের
                                            সামনে হাজির
                                        </td>

                                        <td>
                                            আইনগত প্রক্রিয়া ছাড়া দীর্ঘ সময়
                                            আটক না থাকার সুরক্ষা
                                        </td>

                                    </tr>


                                    <tr>

                                        <td>
                                            আত্মপক্ষ সমর্থনের অধিকার
                                        </td>

                                        <td>
                                            আদালতে নিজের বক্তব্য ও আইনি
                                            প্রতিরক্ষা উপস্থাপনের সুযোগ
                                        </td>

                                    </tr>


                                    <tr>

                                        <td>
                                            জামিনের সুযোগ
                                        </td>

                                        <td>
                                            মামলার ধরন ও আইনের বিধান অনুযায়ী
                                            জামিনের জন্য আবেদন করার সুযোগ
                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>



                        <!-- Section -->

                        <h2>
                            নিজের বিরুদ্ধে জোরপূর্বক সাক্ষ্য না দেওয়ার অধিকার
                        </h2>

                        <p>
                            একজন অভিযুক্ত ব্যক্তিকে নিজের বিরুদ্ধে জোরপূর্বক
                            সাক্ষ্য দিতে বাধ্য করা যায় না। কোনো অভিযোগের
                            মুখোমুখি হলে নিজের আইনগত অবস্থান সম্পর্কে
                            সচেতন থাকা এবং প্রয়োজন অনুযায়ী আইনজীবীর
                            পরামর্শ নেওয়া গুরুত্বপূর্ণ।
                        </p>


                        <p>
                            তদন্ত বা জিজ্ঞাসাবাদের কোনো পর্যায়ে কীভাবে
                            আইনি প্রক্রিয়ায় সহযোগিতা করবেন এবং কোন বিষয়ে
                            আইনজীবীর পরামর্শ প্রয়োজন—তা বুঝতে আইনজীবীর
                            সহায়তা নেওয়া যেতে পারে।
                        </p>



                        <!-- Section -->

                        <h2>
                            আদালতে আত্মপক্ষ সমর্থনের অধিকার
                        </h2>

                        <p>
                            কোনো ব্যক্তি কোনো মামলায় অভিযুক্ত হলে তার বিরুদ্ধে
                            আনা অভিযোগের বিষয়ে আদালতে আত্মপক্ষ সমর্থনের
                            সুযোগ রয়েছে। তিনি নিজের পক্ষে প্রয়োজনীয় আইনি
                            বক্তব্য ও প্রতিরক্ষা উপস্থাপনের সুযোগ পেতে পারেন।
                        </p>


                        <p>
                            মামলার প্রকৃতি অনুযায়ী প্রয়োজনীয় নথিপত্র,
                            সাক্ষ্য-প্রমাণ এবং অন্যান্য আইনি বিষয় বিবেচনা করে
                            একজন আইনজীবী আদালতে যথাযথ প্রতিরক্ষা প্রস্তুত
                            করতে পারেন।
                        </p>



                        <!-- Section -->

                        <h2>
                            জামিনের জন্য আবেদন করার অধিকার
                        </h2>

                        <p>
                            গ্রেপ্তার হওয়ার পর মামলার ধরন ও সংশ্লিষ্ট আইনের
                            বিধান অনুযায়ী একজন ব্যক্তি জামিনের জন্য আবেদন
                            করতে পারেন। তবে জামিন পাওয়া যাবে কি না তা
                            মামলার প্রকৃতি, অভিযোগ, প্রযোজ্য আইন এবং আদালতের
                            বিবেচনার ওপর নির্ভর করে।
                        </p>


                        <p>
                            তাই গ্রেপ্তারের পর দ্রুত একজন আইনজীবীর সঙ্গে
                            যোগাযোগ করে মামলার ধারা ও জামিনের আইনগত
                            সুযোগ সম্পর্কে পরামর্শ নেওয়া গুরুত্বপূর্ণ।
                        </p>



                        <!-- Section -->

                        <h2>
                            গ্রেপ্তারের পর কী করবেন?
                        </h2>

                        <p>
                            গ্রেপ্তার হওয়ার পরিস্থিতি অনেকের জন্যই
                            উদ্বেগজনক হতে পারে। তবে আতঙ্কিত না হয়ে নিজের
                            মৌলিক অধিকার সম্পর্কে সচেতন থাকা এবং আইনগত
                            প্রক্রিয়া অনুসরণ করা গুরুত্বপূর্ণ।
                        </p>


                        <ul>

                            <li>
                                গ্রেপ্তারের কারণ জানার চেষ্টা করুন।
                            </li>

                            <li>
                                সম্ভব হলে দ্রুত পরিবারের সদস্য বা
                                বিশ্বস্ত ব্যক্তিকে বিষয়টি জানান।
                            </li>

                            <li>
                                একজন আইনজীবীর সঙ্গে যোগাযোগ করুন।
                            </li>

                            <li>
                                মামলার নম্বর, ধারা ও থানার তথ্য সম্পর্কে
                                আইনজীবীর কাছ থেকে বিস্তারিত জানুন।
                            </li>

                            <li>
                                কোনো নথিতে স্বাক্ষর করার আগে তার বিষয়বস্তু
                                বুঝে নিন এবং প্রয়োজন হলে আইনজীবীর পরামর্শ নিন।
                            </li>

                            <li>
                                আদালতে হাজির করার সময় নিজের আইনগত অধিকার
                                সম্পর্কে সচেতন থাকুন।
                            </li>

                        </ul>



                        <!-- Section -->

                        <h2>
                            বেআইনি গ্রেপ্তার বা আটক হলে কী করবেন?
                        </h2>

                        <p>
                            কোনো ব্যক্তি যদি মনে করেন তাকে আইনবহির্ভূতভাবে
                            গ্রেপ্তার বা আটক করা হয়েছে, তাহলে বিষয়টি গুরুত্বের
                            সঙ্গে নেওয়া উচিত। এ ধরনের পরিস্থিতিতে দ্রুত
                            একজন আইনজীবীর সঙ্গে যোগাযোগ করে আইনি প্রতিকার
                            সম্পর্কে পরামর্শ নেওয়া যেতে পারে।
                        </p>


                        <p>
                            প্রয়োজন অনুযায়ী আদালতের মাধ্যমে উপযুক্ত আইনি
                            প্রতিকার চাওয়ার সুযোগ থাকতে পারে। কোন প্রতিকার
                            প্রযোজ্য হবে তা নির্ভর করবে গ্রেপ্তার, আটক,
                            মামলার ধারা এবং সংশ্লিষ্ট পরিস্থিতির ওপর।
                        </p>



                        <!-- Section -->

                        <h2>
                            গুরুত্বপূর্ণ কথা
                        </h2>

                        <p>
                            গ্রেপ্তার হওয়া মানেই একজন ব্যক্তি অপরাধী প্রমাণিত
                            হয়ে গেছেন—এমন নয়। আদালতের বিচার ও আইনগত প্রক্রিয়ার
                            মাধ্যমে একজন ব্যক্তির বিরুদ্ধে আনা অভিযোগের
                            নিষ্পত্তি হয়।
                        </p>


                        <p>
                            তাই গ্রেপ্তারের পরিস্থিতিতে ভয় বা আতঙ্কে কোনো
                            সিদ্ধান্ত না নিয়ে নিজের অধিকার সম্পর্কে সচেতন
                            থাকা এবং দ্রুত একজন যোগ্য আইনজীবীর পরামর্শ
                            নেওয়া সবচেয়ে নিরাপদ পদক্ষেপগুলোর একটি।
                        </p>


                        <p>
                            মনে রাখবেন, প্রতিটি মামলার ঘটনা, অভিযোগ ও
                            প্রযোজ্য আইন আলাদা হতে পারে। তাই কোনো নির্দিষ্ট
                            মামলার ক্ষেত্রে সাধারণ তথ্যের ওপর নির্ভর না করে
                            সংশ্লিষ্ট বিষয়ে অভিজ্ঞ আইনজীবীর কাছ থেকে
                            ব্যক্তিগত আইনি পরামর্শ নেওয়া উচিত।
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

                            “গ্রেপ্তার হলেই একজন ব্যক্তি তার সব অধিকার হারান না।
                            গ্রেপ্তারের কারণ জানার অধিকার, আইনজীবীর সহায়তা নেওয়া,
                            নির্দিষ্ট সময়ের মধ্যে ম্যাজিস্ট্রেটের সামনে হাজির হওয়ার
                            অধিকারসহ বিভিন্ন আইনি সুরক্ষা একজন গ্রেপ্তারকৃত
                            ব্যক্তির জন্য গুরুত্বপূর্ণ। তাই গ্রেপ্তারের পরিস্থিতিতে
                            নিজের অধিকার সম্পর্কে সচেতন থাকা এবং প্রয়োজন হলে...”

                        </p>


                        <div class="key-overview-divider"></div>


                        <a href="#" class="overview-link">

                            Need legal help? Find an Advocate

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>

                    </div>


                </aside>


            </div>

        </div>

    </div>
</div>

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

                <h3>Related Legal Articles</h3>

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
                    Related Legal Articles Videos
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

<!-- ======== SPECIALIST CAROUSEL JAVASCRIPT ====== -->

<script>

    document.addEventListener("DOMContentLoaded", function () {

        const track = document.getElementById("specialistTrack");

        const prevBtn = document.getElementById("specialistPrev");

        const nextBtn = document.getElementById("specialistNext");


        /*
         * কতটুকু scroll করবে
         */
        function getScrollAmount() {

            return Math.min(
                track.clientWidth * 0.75,
                650
            );

        }


        /*
         * Previous
         */
        prevBtn.addEventListener("click", function () {

            track.scrollBy({

                left: -getScrollAmount(),

                behavior: "smooth"

            });

        });


        /*
         * Next
         */
        nextBtn.addEventListener("click", function () {

            track.scrollBy({

                left: getScrollAmount(),

                behavior: "smooth"

            });

        });


        /*
         * Mouse Wheel দিয়ে horizontal scroll
         * desktop-এ সুন্দরভাবে কাজ করবে
         */
        track.addEventListener(
            "wheel",
            function (event) {

                if (Math.abs(event.deltaY) > Math.abs(event.deltaX)) {

                    event.preventDefault();

                    track.scrollLeft += event.deltaY;

                }

            },
            {
                passive: false
            }
        );


    });

</script>

@endsection