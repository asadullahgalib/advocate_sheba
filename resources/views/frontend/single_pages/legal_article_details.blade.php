@extends('frontend.layouts.master')
@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/find_advocate.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/article.css')}}">

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/legal-service-article.css') }}">

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
                    <a href="{{ route('legal.article.list') }}">
                        Legal Articles
                    </a>
                </li>

                <li class="breadcrumb-arrow">
                    <i class="fa-solid fa-chevron-right"></i>
                </li>

                <li>
                    <a href="{{ route('legal.article.list') }}">
                        {{ $article->law ? $article->law->title_en : 'Legal Article' }}
                    </a>
                </li>

                <li class="breadcrumb-arrow">
                    <i class="fa-solid fa-chevron-right"></i>
                </li>

                <li class="current">
                    {{ $article->title }}
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

                {{ $article->law ? strtoupper($article->law->title_en) : 'LEGAL ARTICLE' }}

            </div>


            <!-- Title -->
            <h1 class="blog-title">

                {{ $article->title }}

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
                        {{ $article->date ? \Carbon\Carbon::parse($article->date)->format('F d, Y') : 'Date unavailable' }}
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
                        src="{{ $article->image ? asset('uploads/news_images/'.$article->image) : asset('frontend/f1.jpg') }}"
                        alt="{{ $article->title }}"
                        class="blog-featured-image"
                    >


                    <!-- Article Content -->

                    <div class="blog-article-content">

                        {!! $article->description_en !!}

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

                            “{{ \Illuminate\Support\Str::limit(strip_tags($article->description_en), 350) }}”

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

<!-- ============================
     RELATED LEGAL ARTICLES START
============================= -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/legal-service-article.css') }}">

@if($relatedArticles->count() > 0)

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
              Related Legal Articles
            </h2>
            <p class="text-sm text-gray-600 dark:text-gray-400">
              Explore Legal Articles
            </p>
          </div>
          <a
            href="{{ route('legal.article.list') }}"
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

            @foreach($relatedArticles as $related)

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">

                    <div class="featured-article-card">

                        <div class="article-image">

                            <img
                                src="{{ $related->image ? asset('uploads/news_images/'.$related->image) : asset('frontend/f1.jpg') }}"
                                alt="{{ $related->title }}"
                            >

                            <span class="article-category">
                                {{ $related->law ? $related->law->title_en : 'Legal Article' }}
                            </span>

                        </div>


                        <div class="article-content">

                            <h4>
                                {{ $related->title }}
                            </h4>


                            <div class="article-meta">

                                <span>
                                    <i class="fa-regular fa-calendar"></i>
                                    {{ $related->date ? \Carbon\Carbon::parse($related->date)->format('M d, Y') : 'Date unavailable' }}
                                </span>

                            </div>


                            <a href="{{ route('legal.article.details', $related->slug) }}" class="read-more">
                                Read More
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>

@endif

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
              Related Latest Video
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
         * Mouse Wheel দিয়ে horizontal scroll
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