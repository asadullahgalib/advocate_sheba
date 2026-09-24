@extends('frontend.layouts.master')
@section('content')

<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link rel="stylesheet"
      href="{{ asset('assets/css/practice-area-modal.css') }}">

<link rel="stylesheet"
      href="{{ asset('assets/css/court_details.css') }}">


<div class="doctors-blog-page">

    <div class="blog-container">


        <!-- =================================================
             BLOG HEADER
        ================================================== -->

        <div class="blog-header"
             style="padding: 15px 0px 0px 0px; margin-bottom: -15px;">

            <h1 class="blog-title">
                <i class="fa fa-bank"></i> District Courts
            </h1>

        </div>


        <!-- =================================================
             OVERVIEW
        ================================================== -->

        <div class="row">

            <div class="col-md-12">

                <div class="blog-article-content">

                    <h4 style="margin-bottom: 10px;">
                        Overview
                    </h4>

                    <p>
                        District Courts are an important part of the judicial system
                        where different civil and criminal matters are heard and
                        determined according to the applicable laws and jurisdiction
                        of the respective courts.
                    </p>

                    <p>
                        Depending on the nature of a dispute or offence, a matter may
                        fall within the jurisdiction of Civil Courts or Criminal
                        Courts. Each court deals with cases according to its
                        prescribed legal authority, procedure and subject matter.
                    </p>

                </div>

            </div>

        </div>


        <!-- =================================================
             TAB SYSTEM
        ================================================== -->

        <div class="row">

            <div class="col-md-12">

                <div class="district-court-tabs">


                    <!-- ===============================
                         TAB BUTTONS
                    ================================ -->

                    <ul class="nav district-tab-buttons"
                        id="districtCourtTab"
                        role="tablist">


                        <!-- ===============================
                             CIVIL COURTS TAB
                        ================================ -->

                        <li class="nav-item" role="presentation">

                            <button class="nav-link active"
                                    id="courts-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#courts-content"
                                    type="button"
                                    role="tab"
                                    aria-controls="courts-content"
                                    aria-selected="true">

                                Civil Courts

                            </button>

                        </li>


                        <!-- ===============================
                             CRIMINAL COURTS TAB
                        ================================ -->

                        <li class="nav-item" role="presentation">

                            <button class="nav-link"
                                    id="criminal-courts-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#criminal-courts-content"
                                    type="button"
                                    role="tab"
                                    aria-controls="criminal-courts-content"
                                    aria-selected="false">

                                Criminal Courts

                            </button>

                        </li>

                    </ul>


                    <!-- ===============================
                         TAB CONTENT
                    ================================ -->

                    <div class="tab-content district-tab-content"
                         id="districtCourtTabContent">


                        <!-- =================================================
                             CIVIL COURTS CONTENT
                        ================================================== -->

                        <div class="tab-pane fade show active"
                             id="courts-content"
                             role="tabpanel"
                             aria-labelledby="courts-tab"
                             tabindex="0">

                            <h4>
                                Civil Courts — Overview
                            </h4>

                            <p>
                                Civil Courts হলো এমন আদালত যেখানে ব্যক্তি, প্রতিষ্ঠান বা সংস্থার মধ্যে
                                <strong style="font-weight: bold;">
                                    সম্পত্তি, অর্থ, চুক্তি, অধিকার, পারিবারিক ও অন্যান্য দেওয়ানি বিষয়ক বিরোধ
                                </strong>
                                আইন অনুযায়ী নিষ্পত্তি করা হয়। District Courts-এর অধীনে বিভিন্ন ধরনের
                                দেওয়ানি আদালত তাদের নির্ধারিত এখতিয়ারের মধ্যে এসব মামলা শুনানি ও নিষ্পত্তি করে।
                            </p>

                            <p>
                                দেওয়ানি আদালতে সাধারণত কোনো অপরাধের শাস্তি দেওয়ার পরিবর্তে পক্ষগুলোর
                                <strong style="font-weight: bold;">
                                    আইনগত অধিকার নির্ধারণ, ক্ষতিপূরণ, পাওনা আদায়, সম্পত্তির অধিকার প্রতিষ্ঠা,
                                    নিষেধাজ্ঞা (Injunction) এবং অন্যান্য দেওয়ানি প্রতিকার
                                </strong>
                                প্রদানের বিষয় বিবেচনা করা হয়।
                            </p>

                            <p>
                                একজন ব্যক্তি তার অধিকার বা স্বার্থ ক্ষুণ্ণ হয়েছে মনে করলে প্রযোজ্য আইন ও
                                আদালতের এখতিয়ারের ভিত্তিতে দেওয়ানি মামলা করতে পারেন। মামলার ধরন ও প্রকৃতির
                                ওপর ভিত্তি করে আদালত প্রয়োজনীয় নথি, সাক্ষ্য-প্রমাণ ও উভয় পক্ষের বক্তব্য
                                বিবেচনা করে সিদ্ধান্ত প্রদান করে।
                            </p>


                            <h5>
                                Civil Courts-এ কী ধরনের মামলা হতে পারে?
                            </h5>

                            <ul>

                                <li>
                                    জমি ও সম্পত্তি সংক্রান্ত বিরোধ
                                </li>

                                <li>
                                    মালিকানা ও দখল সংক্রান্ত মামলা
                                </li>

                                <li>
                                    টাকা-পয়সা বা পাওনা আদায়ের মামলা
                                </li>

                                <li>
                                    চুক্তি সংক্রান্ত বিরোধ
                                </li>

                                <li>
                                    ক্ষতিপূরণ সংক্রান্ত দাবি
                                </li>

                                <li>
                                    স্থায়ী বা অস্থায়ী নিষেধাজ্ঞার আবেদন
                                </li>

                                <li>
                                    ঘোষণামূলক মামলা (Declaration Suit)
                                </li>

                                <li>
                                    উত্তরাধিকার ও সম্পত্তির অধিকার সংক্রান্ত বিরোধ
                                </li>

                                <li>
                                    অন্যান্য দেওয়ানি অধিকার ও স্বার্থ সংক্রান্ত মামলা
                                </li>

                            </ul>


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
                                                Jurisdiction
                                            </span>

                                            <i class="bi bi-chevron-up"></i>

                                        </button>


                                        <div class="faq-answer">

                                            <p>
                                                Civil Courts-এর jurisdiction বা এখতিয়ার নির্ধারণের ক্ষেত্রে
                                                মামলার বিষয়বস্তু, দাবির ধরন, অর্থের পরিমাণ এবং প্রযোজ্য আইন
                                                বিবেচনা করা হয়। কোন আদালতে মামলা দায়ের করতে হবে তা সংশ্লিষ্ট
                                                আইনের বিধান ও আদালতের এখতিয়ারের ওপর নির্ভর করে।
                                            </p>

                                        </div>

                                    </div>


                                    <!-- CIVIL FAQ 2 -->

                                    <div class="faq-item">

                                        <button class="faq-question"
                                                type="button">

                                            <span>
                                                Case Types
                                            </span>

                                            <i class="bi bi-chevron-down"></i>

                                        </button>


                                        <div class="faq-answer">

                                            <p>
                                                Civil Courts-এ সম্পত্তি, টাকা-পয়সা, চুক্তি, মালিকানা,
                                                দখল, ক্ষতিপূরণ, নিষেধাজ্ঞা, ঘোষণা এবং অন্যান্য দেওয়ানি
                                                অধিকার সংক্রান্ত মামলা হতে পারে।
                                            </p>

                                        </div>

                                    </div>


                                    <!-- CIVIL FAQ 3 -->

                                    <div class="faq-item">

                                        <button class="faq-question"
                                                type="button">

                                            <span>
                                                Structures
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


                            <!-- ===============================
                                 CIVIL LAWYER MODAL BUTTON
                            ================================ -->

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
                                            Lawyers Practicing Area
                                        </h6>

                                    </div>

                                </a>

                            </div>

                        </div>


                        <!-- =================================================
                             CRIMINAL COURTS CONTENT
                        ================================================== -->

                        <div class="tab-pane fade"
                             id="criminal-courts-content"
                             role="tabpanel"
                             aria-labelledby="criminal-courts-tab"
                             tabindex="0">


                            <h4>
                                Criminal Courts — Overview
                            </h4>


                            <p>
                                Criminal Courts হলো এমন আদালত যেখানে
                                <strong style="font-weight: bold;">
                                    অপরাধ সংঘটনের অভিযোগ, ফৌজদারি মামলা, অভিযুক্ত ব্যক্তির
                                    বিচার এবং আইন অনুযায়ী শাস্তি বা অন্যান্য আইনগত প্রতিকার
                                </strong>
                                সংক্রান্ত বিষয় শুনানি ও নিষ্পত্তি করা হয়।
                            </p>


                            <p>
                                কোনো ব্যক্তি বা প্রতিষ্ঠানের বিরুদ্ধে অপরাধ সংঘটনের অভিযোগ
                                উঠলে প্রযোজ্য আইন ও নির্ধারিত বিচারিক প্রক্রিয়া অনুসরণ করে
                                মামলাটি Criminal Courts-এর মাধ্যমে পরিচালিত হতে পারে।
                                আদালত মামলার নথি, সাক্ষ্য-প্রমাণ, সাক্ষীদের বক্তব্য এবং
                                উভয় পক্ষের আইনগত উপস্থাপনা বিবেচনা করে সিদ্ধান্ত প্রদান করে।
                            </p>


                            <p>
                                Criminal proceedings-এর ক্ষেত্রে অভিযোগের প্রকৃতি, অপরাধের
                                ধরন এবং প্রযোজ্য আইনের ওপর ভিত্তি করে সংশ্লিষ্ট আদালতের
                                jurisdiction নির্ধারিত হয়। মামলার প্রতিটি ধাপে আইনগত
                                প্রক্রিয়া ও আদালতের নির্দেশনা অনুসরণ করা গুরুত্বপূর্ণ।
                            </p>


                            <h5>
                                Criminal Courts-এ কী ধরনের মামলা হতে পারে?
                            </h5>


                            <ul>

                                <li>
                                    চুরি ও ছিনতাই সংক্রান্ত মামলা
                                </li>

                                <li>
                                    প্রতারণা ও জালিয়াতি সংক্রান্ত মামলা
                                </li>

                                <li>
                                    মারামারি ও আঘাত সংক্রান্ত মামলা
                                </li>

                                <li>
                                    হত্যাকাণ্ড সংক্রান্ত মামলা
                                </li>

                                <li>
                                    মাদকদ্রব্য সংক্রান্ত মামলা
                                </li>

                                <li>
                                    নারী ও শিশু নির্যাতন সংক্রান্ত মামলা
                                </li>

                                <li>
                                    ফৌজদারি ষড়যন্ত্র ও অন্যান্য অপরাধ সংক্রান্ত মামলা
                                </li>

                                <li>
                                    বিশেষ আইন অনুযায়ী সংঘটিত অপরাধের মামলা
                                </li>

                                <li>
                                    অন্যান্য ফৌজদারি অপরাধ সংক্রান্ত মামলা
                                </li>

                            </ul>


                            <!-- ===============================
                                 CRIMINAL FAQ
                            ================================ -->

                            <div class="faq-card criminal-faq-card">

                                <div class="faq-accordion"
                                     id="criminalCourtFaq">


                                    <!-- CRIMINAL FAQ 1 -->

                                    <div class="faq-item active">

                                        <button class="faq-question"
                                                type="button">

                                            <span>
                                                Jurisdiction
                                            </span>

                                            <i class="bi bi-chevron-up"></i>

                                        </button>


                                        <div class="faq-answer">

                                            <p>
                                                Criminal Courts-এর jurisdiction নির্ভর করে অপরাধের
                                                ধরন, প্রযোজ্য আইন এবং সংশ্লিষ্ট আদালতের নির্ধারিত
                                                এখতিয়ারের ওপর। মামলার প্রকৃতি অনুযায়ী কোন আদালতে
                                                বিচার হবে তা আইন দ্বারা নির্ধারিত হতে পারে।
                                            </p>

                                        </div>

                                    </div>


                                    <!-- CRIMINAL FAQ 2 -->

                                    <div class="faq-item">

                                        <button class="faq-question"
                                                type="button">

                                            <span>
                                                Criminal Case Types
                                            </span>

                                            <i class="bi bi-chevron-down"></i>

                                        </button>


                                        <div class="faq-answer">

                                            <p>
                                                Criminal Courts-এ ব্যক্তি বা প্রতিষ্ঠানের বিরুদ্ধে
                                                সংঘটিত বিভিন্ন অপরাধের অভিযোগে মামলা হতে পারে।
                                                অপরাধের প্রকৃতি ও প্রযোজ্য আইনের ভিত্তিতে মামলার
                                                ধরন এবং বিচারিক প্রক্রিয়া নির্ধারিত হয়।
                                            </p>

                                        </div>

                                    </div>


                                    <!-- CRIMINAL FAQ 3 -->

                                    <div class="faq-item">

                                        <button class="faq-question"
                                                type="button">

                                            <span>
                                                Criminal Proceedings
                                            </span>

                                            <i class="bi bi-chevron-down"></i>

                                        </button>


                                        <div class="faq-answer">

                                            <p>
                                                Criminal proceedings-এর বিভিন্ন পর্যায়ে অভিযোগ,
                                                তদন্ত, সাক্ষ্য-প্রমাণ, শুনানি এবং আদালতের সিদ্ধান্ত
                                                গুরুত্বপূর্ণ ভূমিকা পালন করে। প্রতিটি ধাপ সংশ্লিষ্ট
                                                আইন ও আদালতের নির্ধারিত প্রক্রিয়া অনুযায়ী পরিচালিত হয়।
                                            </p>

                                        </div>

                                    </div>


                                </div>

                            </div>


                            <!-- ===============================
                                 CRIMINAL LAWYER MODAL BUTTON
                            ================================ -->

                            <div style="margin-top: 15px;">

                                <a href="#"
                                   class="practice-area-card"
                                   data-bs-toggle="modal"
                                   data-bs-target="#districtCriminalCourtModal"
                                   style="color: #fff !important;">

                                    <div class="card-1"
                                         style="padding: 15px 5px 10px 6px;
                                                margin-bottom: 5px;
                                                min-height: 50px;
                                                max-width: 240px;
                                                background-color: #000;">

                                        <h6 style="font-size:15px;color: #fff;">
                                            Lawyers Practicing Area
                                        </h6>

                                    </div>

                                </a>

                            </div>


                        </div>


                    </div>

                </div>

            </div>

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
     CRIMINAL COURTS MODAL
========================================================= -->

<div class="modal fade provider-type-modal"
     id="districtCriminalCourtModal"
     tabindex="-1"
     aria-labelledby="districtCriminalCourtModalLabel"
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
                    id="districtCriminalCourtModalLabel">

                    Find criminal law expert

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

                        Find <br>
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



    /*
    |--------------------------------------------------------------------------
    | CRIMINAL COURTS FAQ
    |--------------------------------------------------------------------------
    */

    const criminalFaq =
        document.getElementById('criminalCourtFaq');


    if (criminalFaq) {

        const criminalQuestions =
            criminalFaq.querySelectorAll('.faq-question');


        criminalQuestions.forEach(function (question) {

            question.addEventListener('click', function () {

                const currentItem =
                    this.closest('.faq-item');

                const isActive =
                    currentItem.classList.contains('active');


                /*
                |--------------------------------------------------------------------------
                | শুধু Criminal FAQ-এর item বন্ধ হবে
                |--------------------------------------------------------------------------
                */

                criminalFaq.querySelectorAll('.faq-item')
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
                | Current Criminal FAQ open
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