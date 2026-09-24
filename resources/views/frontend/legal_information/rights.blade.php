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
                <i class="fa fa-bank"></i> Know Your Rights
            </h1>

        </div>


        <!-- =================================================
             OVERVIEW
        ================================================== -->

        <div class="row">

            <div class="col-md-12">

                <div class="blog-article-content">

                    <h4 style="margin-bottom: 10px;">
                        আপনার অধিকার সম্পর্কে জানুন
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
                            মৌলিক অধিকার <br>
                            Foundamental Rights
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
                            গ্রেফতার ও আটক অধিকার <br>
                            Arrest and Detention Rights
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
                            ন্যায় বিচার পাওয়ার অধিকার <br>
                            Rights to Justice
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
                            আইনি সহায়তার অধিকার <br>
                            Legal Aid
                        </span>

                        <i class="bi bi-chevron-down"></i>

                    </button>


                    <div class="faq-answer">

                        <p>
                            দেওয়ানি আদালতের বিভিন্ন স্তর ও এখতিয়ার রয়েছে। মামলার
                            প্রকৃতি, আর্থিক মূল্য এবং প্রযোজ্য আইন অনুযায়ী সংশ্লিষ্ট
                            আদালত মামলাটি শুনানি ও নিষ্পত্তি করে।
                        </p>

                    </div>

                </div>

                <!-- CIVIL FAQ 5 -->

                <div class="faq-item">

                    <button class="faq-question"
                            type="button">

                        <span>
                            নারীর অধিকার <br>
                            Women's Rights
                        </span>

                        <i class="bi bi-chevron-down"></i>

                    </button>


                    <div class="faq-answer">

                        <p>
                            দেওয়ানি আদালতের বিভিন্ন স্তর ও এখতিয়ার রয়েছে। মামলার
                            প্রকৃতি, আর্থিক মূল্য এবং প্রযোজ্য আইন অনুযায়ী সংশ্লিষ্ট
                            আদালত মামলাটি শুনানি ও নিষ্পত্তি করে।
                        </p>

                    </div>

                </div>

            </div>

        </div>

        <div style="margin-top: 15px;">

            <a href="#"
               class="practice-area-card"
               data-bs-toggle="modal"
               data-bs-target="#districtCivilCourtModal"
               style="color: #fff !important;">

                <div class="card-1"
                     style="padding: 15px 5px 10px 6px;
                            margin-bottom: 5px;
                            min-height: 50px;
                            max-width: 240px;
                            background-color: #000;">

                    <h6 style="font-size:15px;color: #fff;">
                        Find Lawyers
                    </h6>

                </div>

            </a>

        </div>

    </div>

</div>



<!-- =========================================================
     CIVIL COURTS MODAL
========================================================= -->

<div class="modal fade provider-type-modal"
     id="districtCivilCourtModal"
     tabindex="-1"
     aria-labelledby="districtCivilCourtModalLabel"
     aria-hidden="true">

    <div class="modal-dialog provider-modal-dialog modal-sm">

        <div class="modal-content provider-modal-content">


            <!-- CLOSE BUTTON -->

            <button type="button"
                    class="provider-modal-close"
                    data-bs-dismiss="modal"
                    aria-label="Close">

                <i class="bi bi-x-lg"></i>

            </button>


            <div class="modal-body provider-modal-body">


                <!-- TITLE -->

                <h4 class="provider-modal-title"
                    id="districtCivilCourtModalLabel">

                    Find civil law expert

                </h4>


                <!-- SUBTITLE -->

                <p class="provider-modal-subtitle">

                    Select provider type

                </p>


                <!-- PROVIDER TYPE BUTTONS -->

                <div class="provider-type-grid">


                    <!-- ADVOCATE -->

                    <a href="#"
                       class="provider-type-btn">

                        Find <br>
                        Advocate

                    </a>


                    <!-- BARRISTER -->

                    <a href="#"
                       class="provider-type-btn">

                        Find <br>
                        Barrister

                    </a>


                    <!-- LAW FIRM -->

                    <a href="#"
                       class="provider-type-btn">

                        Find <br>
                        Law firm

                    </a>


                    <!-- LEGAL CONSULTANTS -->

                    <a href="#"
                       class="provider-type-btn">

                        Legal Find <br>
                        consultants

                    </a>


                </div>

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