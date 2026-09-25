@extends('frontend.layouts.master')
@section('content')

<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link rel="stylesheet"
      href="{{ asset('assets/css/practice-area-modal.css') }}">

<link rel="stylesheet"
      href="{{ asset('assets/css/court_details.css') }}">
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
                <i class="fa fa-bank"></i> Legal Procedures
            </h1>

        </div>


        <!-- =================================================
             OVERVIEW
        ================================================== -->

        <div class="row">

            <div class="col-md-12">

                <div class="blog-article-content">

                    <h4 style="margin-bottom: 10px;">
                        আইনি প্রক্রিয়া
                    </h4>
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
                            <!-- <i class="fa fa-car" aria-hidden="true" style="font-size: 25px;border: 1px solid #b9b9c3;padding: 10px;border-radius: 100%;"></i>  -->
                            ফৌজদারি প্রক্রিয়া <br>
                            Criminal Procedures
                        </span>

                        <i class="bi bi-chevron-up"></i>

                    </button>


                    <div class="faq-answer">

                        <p style="margin-bottom:15px">
                            মৌলিক অধিকার হলো সংবিধান কর্তৃক স্বীকৃত
                            এমন অধিকার যা একজন নাগরিকের স্বাধীনতা,
                            মর্যাদা, সমতা এবং ন্যায়বিচার নিশ্চিত করার
                            জন্য গুরুত্বপূর্ণ।
                        </p>

                        <!-- 1 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                সমতার অধিকারঃ
                            </h6>

                            <p>
                                আইনের দৃষ্টিতে সকল নাগরিকের
                                সমান অধিকার এবং সমান সুরক্ষা
                                পাওয়ার বিষয়টি সমতার অধিকারের
                                অন্তর্ভুক্ত।
                            </p>
                        </div>

                        <!-- 2 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                স্বাধীনতার অধিকারঃ
                            </h6>

                            <p>
                                আইন দ্বারা নির্ধারিত সীমার
                                মধ্যে একজন নাগরিকের বিভিন্ন
                                মৌলিক স্বাধীনতা ও অধিকার
                                থাকতে পারে।
                            </p>
                        </div>

                        <!-- 3 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                আইনের দৃষ্টিতে সমতাঃ
                            </h6>

                            <p>
                                প্রত্যেক ব্যক্তির ক্ষেত্রে
                                আইন প্রয়োগের সময় সমতার নীতি
                                গুরুত্বপূর্ণ।
                            </p>
                        </div>

                        <!-- 4 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                বৈষম্য থেকে সুরক্ষাঃ
                            </h6>

                            <p>
                                আইনগত অধিকার প্রয়োগের ক্ষেত্রে
                                অন্যায় বৈষম্য থেকে সুরক্ষার
                                বিষয়টি গুরুত্বপূর্ণ।
                            </p>
                        </div>

                    </div>

                </div>


                <!-- CIVIL FAQ 2 -->

                <div class="faq-item">

                    <button class="faq-question"
                            type="button">

                        <span>
                            <!-- <i class="fa fa-file-pdf-o" aria-hidden="true" style="font-size: 25px;border: 1px solid #b9b9c3;padding: 10px;border-radius: 100%;"></i>  -->
                            দেওয়ানি প্রক্রিয়া <br>
                            Civil Procedures
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
                            <!-- <i class="fa fa-users" aria-hidden="true" style="font-size: 25px;border: 1px solid #b9b9c3;padding: 10px;border-radius: 100%;"></i>  -->
                            পারিবারিক প্রক্রিয়া <br>
                            Family Procedures
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
                            <!-- <i class="fa fa-home" aria-hidden="true" style="font-size: 25px;border: 1px solid #b9b9c3;padding: 10px;border-radius: 100%;"></i>  -->
                            সম্পত্তি ও জমি প্রক্রিয়া <br>
                            Property Procedures
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

                <!-- CIVIL FAQ 5 -->

                <div class="faq-item">

                    <button class="faq-question"
                            type="button">

                        <span>
                            <!-- <i class="fa fa-id-card-o" aria-hidden="true" style="font-size: 25px;border: 1px solid #b9b9c3;padding: 10px;border-radius: 100%;"></i>   -->
                            নাগরিক সনদ প্রিক্রিয়া <br>
                            Citizen Certificate Procedures
                        </span>

                        <i class="bi bi-chevron-down"></i>

                    </button>


                    <div class="faq-answer">

                        <p style="margin-bottom:15px">
                            নারীর অধিকার হলো সমাজ, পরিবার, কর্মক্ষেত্র ও রাষ্ট্রীয় জীবনে নারীর সমান মর্যাদা, নিরাপত্তা, স্বাধীনতা ও আইনগত সুরক্ষা নিশ্চিত করার জন্য স্বীকৃত অধিকারসমূহ। কোনো নারী তার অধিকার লঙ্ঘিত হলে প্রযোজ্য আইন অনুযায়ী প্রতিকার ও আইনগত সহায়তা চাইতে পারেন।
                        </p>

                        <!-- 1 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                সমান অধিকার ও মর্যাদাঃ
                            </h6>

                            <p>
                                নারী আইন ও সমাজের চোখে সমান মর্যাদা ও অধিকার পাওয়ার অধিকার রাখেন। শিক্ষা, কর্মসংস্থান, সম্পত্তি ও সামাজিক জীবনে বৈষম্যের বিরুদ্ধে আইনগত সুরক্ষা রয়েছে।
                            </p>
                        </div>

                        <!-- 2 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                সহিংসতা ও নির্যাতন থেকে সুরক্ষাঃ
                            </h6>

                            <p>
                                শারীরিক, মানসিক, যৌন বা পারিবারিক নির্যাতনের শিকার হলে একজন নারী আইনগত প্রতিকার চাইতে পারেন। নির্যাতনের ধরন অনুযায়ী সংশ্লিষ্ট কর্তৃপক্ষ ও আদালতের মাধ্যমে প্রয়োজনীয় ব্যবস্থা নেওয়া যেতে পারে।
                            </p>
                        </div>

                        <!-- 3 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                সম্পত্তি ও উত্তরাধিকারের অধিকারঃ
                            </h6>

                            <p>
                                প্রযোজ্য ব্যক্তিগত আইন ও অন্যান্য সংশ্লিষ্ট আইনের অধীনে নারীর সম্পত্তি ও উত্তরাধিকার সংক্রান্ত অধিকার থাকতে পারে। এসব অধিকার নিয়ে বিরোধ সৃষ্টি হলে আইনগত পরামর্শ ও আদালতের আশ্রয় নেওয়া যায়।
                            </p>
                        </div>

                        <!-- 4 -->
                        <div style="margin-bottom: 12px;">
                            <h6>
                                কর্মক্ষেত্রে অধিকার ও নিরাপত্তাঃ
                            </h6>

                            <p>
                                নারী কর্মক্ষেত্রে সম্মানজনক ও নিরাপদ পরিবেশে কাজ করার অধিকার রাখেন। যৌন হয়রানি, বৈষম্য বা অন্যান্য অনিয়মের শিকার হলে প্রযোজ্য আইন ও প্রতিষ্ঠানের নির্ধারিত প্রক্রিয়া অনুযায়ী প্রতিকার চাওয়া যেতে পারে।
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="row" style="margin-top: 15px;">
            <div class="col-md-3">
                <a href="{{route('find.our.advocate-list')}}"
                   class="practice-area-card" 
                   style="color: #fff !important;">

                    <div class="card-1"
                         style="padding: 15px 5px 10px 6px;
                                margin-bottom: 5px;
                                min-height: 50px;
                                background-color: #000;">

                        <h6 style="font-size:15px;color: #fff;">
                            Find Advocates
                        </h6>

                    </div>

                </a>
            </div>

            <div class="col-md-3">
                <a href="{{route('find.our.barrister-list')}}"
                   class="practice-area-card" 
                   style="color: #fff !important;">

                    <div class="card-1"
                         style="padding: 15px 5px 10px 6px;
                                margin-bottom: 5px;
                                min-height: 50px;
                                background-color: #000;">

                        <h6 style="font-size:15px;color: #fff;">
                            Find Barristers
                        </h6>

                    </div>

                </a>
            </div>

            <div class="col-md-3">
                <a href="{{route('find.our.consultant-list')}}"
                   class="practice-area-card" 
                   style="color: #fff !important;">

                    <div class="card-1"
                         style="padding: 15px 5px 10px 6px;
                                margin-bottom: 5px;
                                min-height: 50px;
                                background-color: #000;">

                        <h6 style="font-size:15px;color: #fff;">
                            Find Legal Consultants
                        </h6>

                    </div>

                </a>
            </div>

            <div class="col-md-3">
                <a href="{{route('find.our.law-firm-list')}}"
                   class="practice-area-card" 
                   style="color: #fff !important;">

                    <div class="card-1"
                         style="padding: 15px 5px 10px 6px;
                                margin-bottom: 5px;
                                min-height: 50px;
                                background-color: #000;">

                        <h6 style="font-size:15px;color: #fff;">
                            Find Law Firms
                        </h6>

                    </div>

                </a>
            </div>
        </div>

    </div>

</div>

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