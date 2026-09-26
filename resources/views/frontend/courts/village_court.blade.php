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
                <i class="fa fa-bank"></i> Village Court
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
                        Village Court are an important part of the judicial system
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
                 <div class="faq-card mb-4">

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
                                               স্থানীয় পর্যায়ে ছোট বিরোধ নিষ্পত্তির জন্য গঠিত আদালত, ইউনিয়ন পরিষদ কেন্দ্রিক গ্রাম আদালত আইন, ২০০৬ 
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
                                                একই ইউনিয়নের বাসিন্দাদের মধ্যকার বিরোধ, সীমিত আর্থিক অংক ও ছোট ফৌজদারি অপরাধ।
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
                                    <!-- CIVIL FAQ 3 -->

                                    <div class="faq-item">

                                        <button class="faq-question"
                                                type="button">

                                            <span>
                                                Appeal Process
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
                                    <!-- CIVIL FAQ 3 -->

                                    <div class="faq-item">

                                        <button class="faq-question"
                                                type="button">

                                            <span>
                                                Lawer Practicing Here
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
                        <!-- Modal-button-start-here -->
                            <div class="row mb-3" style="margin-top: 15px;">
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
                            <!-- Modal-button-ends-here -->

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