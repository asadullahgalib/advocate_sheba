@extends('frontend.layouts.master')
@section('content')

<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link rel="stylesheet"
      href="{{ asset('assets/css/court_details.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/find_advocate.css') }}">

<style>
    .faq-question {
        min-height: 50px;
        padding: 15px 10px;
        font-size: 19px;
    }

    /* title_en: বাংলা title-এর মতোই একই size, weight ও color */
    .faq-question .faq-title-en {
        display: block;
        font-size: inherit;
        font-weight: inherit;
        color: inherit;
        line-height: inherit;
    }
</style>

<div class="doctors-blog-page" style="margin-bottom: 20px;">

    <div class="blog-container">

        <!-- BLOG HEADER -->

        <div class="blog-header"
             style="padding: 15px 0px 0px 0px; margin-bottom: -15px;">

            <h1 class="blog-title">
                <i class="fa fa-balance-scale"></i>
                {{ $law->title_en }}
            </h1>

        </div>


        <!-- OVERVIEW -->

        <div class="row">

            <div class="col-md-12">

                <div class="blog-article-content">

                    {!! $law->description_en !!}

                </div>

            </div>

        </div>


        <!-- LAW DETAILS ACCORDION -->

        <div class="faq-card">

            <div class="faq-accordion" id="civilCourtFaq">

                @forelse($law->lawDetails as $key => $detail)

                    <div class="faq-item {{ $key == 0 ? 'active' : '' }}">

                        <button class="faq-question" type="button">

                            <span>
                                {{ $detail->title_bn ?: $detail->title_en }}
                                @if($detail->title_bn && $detail->title_en)
                                    <span class="faq-title-en">{{ $detail->title_en }}</span>
                                @endif
                            </span>

                            <i class="bi {{ $key == 0 ? 'bi-chevron-up' : 'bi-chevron-down' }}"></i>

                        </button>

                        <div class="faq-answer">

                            {!! $detail->description_en !!}

                        </div>

                    </div>

                @empty

                    <div class="text-center p-4">
                        <p>No information available.</p>
                    </div>

                @endforelse

            </div>

        </div>

    </div>

</div>


<!-- ============================
     LEGAL ARTICLES SECTION START
============================= -->

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/legal-service-article.css') }}">

<section class="legal-articles-section"
         style="background: #f7f8fa;padding: 0px 0px 0px 0px;">

    <div class="container-fluid">

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


        <div class="row featured-articles-row">

            <!-- Article 1 -->

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">

                <div class="featured-article-card">

                    <div class="article-image">

                        <img src="{{ asset('frontend/f1.jpg') }}" alt="Criminal Law">

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

                        <a href="#" class="read-more">
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

                        <img src="{{ asset('frontend/f2.jpg') }}" alt="Land Law">

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

                        <a href="#" class="read-more">
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

                        <img src="{{ asset('frontend/f3.jpg') }}" alt="Family Law">

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

                        <a href="#" class="read-more">
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

                        <img src="{{ asset('frontend/f4.jpg') }}" alt="Corporate Law">

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

                        <a href="#" class="read-more">
                            Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- VIDEO THUMBNAIL STYLE -->

<style>

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

    .video-thumb:hover .video-overlay {
        opacity: 1;
        visibility: visible;
    }

    .video-thumb:hover .youtube-icon {
        transform: scale(1);
    }

    .video-thumb:hover img {
        transform: scale(1.05);
    }

</style>


<!-- LATEST VIDEO SECTION -->

<div class="page-content mb-50"
     style="padding: 0px 0px 10px 0px;background-color: #ffffff;margin-bottom: -20px !important;border-radius: 15px;">

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
                                src="{{ asset('frontend/video-1.jpg') }}"
                                alt="Legal Video"
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

                    <h4 class="post-title mb-15"
                        style="font-size:17px;margin-top: 15px;">

                        <a href="#">
                            জমি বিক্রির আগে যে বিষয় গুলো জানা দরকার
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
                                src="{{ asset('frontend/video-2.jpg') }}"
                                alt="Legal Video"
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

                    <h4 class="post-title mb-15"
                        style="font-size:17px;margin-top: 15px;">

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
                                src="{{ asset('frontend/video-3.jpg') }}"
                                alt="Legal Video"
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

                    <h4 class="post-title mb-15"
                        style="font-size:17px;margin-top: 15px;">

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
                                src="{{ asset('frontend/video-4.jpg') }}"
                                alt="Legal Video"
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

                    <h4 class="post-title mb-15"
                        style="font-size:17px;margin-top: 15px;">

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


<!-- FAQ JAVASCRIPT -->

<script>

document.addEventListener('DOMContentLoaded', function () {

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