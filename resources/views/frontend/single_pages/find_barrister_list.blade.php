@extends('frontend.layouts.master')
@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/legal-service-article.css') }}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/law-firms-static-grid.css')}}">

@include('frontend.single_pages.single_search_bar')

<section class="lpc-carousel-section lpc-static-firms-section" style="background: #ebe9e957;">
    <div class="container">

        <div class="flex justify-between items-center mt-2">
          <div class="my-4">
            <h2
              id="hospitals-by-location"
              class="text-lg md:text-xl font-semibold text-gray-800 dark:text-gray-100"
            >
              Legal Barrister
            </h2>
            <p class="text-sm text-gray-600 dark:text-gray-400">
              Explore Legal Barrister
            </p>
          </div>

          <!-- <a
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
          </a> -->
          
        </div>

        <div class="lpc-carousel">
            <!-- =========  VIEWPORT == -->

            <div class="lpc-viewport">

                <div class="lpc-track">


                    <!-- ==================================
                         PROFILE CARD 1
                    =================================== -->

                    <div class="lpc-slide">

                        <div class="lpc-card">


                            <!-- PROFILE IMAGE -->

                            <div class="lpc-image-area">

                                <div class="lpc-profile-image">

                                    <img src="{{asset('frontend/adv.png')}}"
                                         alt="Adv. Rafiqul Islam">

                                </div>


                                <!-- VERIFIED -->

                                <div class="lpc-verified">

                                    <i class="fa fa-check"></i>

                                    Bar Council Verified

                                </div>

                            </div>



                            <!-- PROFILE BODY -->

                            <div class="lpc-body">


                                <h3 class="lpc-name">
                                    Adv. Rafiqul Islam
                                </h3>


                                <div class="lpc-designation">
                                    Legal Consultant
                                </div>


                                <!-- RATING -->

                                <div class="lpc-rating">

                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>

                                    <strong>4.8</strong>

                                    <span>
                                        (61 Reviews)
                                    </span>

                                </div>


                                <!-- SPECIALIZATION -->

                                <div class="lpc-specialization">
                                    Corporate & Tax Advisory Specialist
                                </div>


                                <!-- COURT -->

                                <div class="lpc-court">
                                    Supreme Court of Bangladesh
                                </div>

                                <div class="lpc-court-location">
                                    District & Sessions Judge Court, Dhaka
                                </div>


                                <!-- DIVIDER -->

                                <div class="lpc-divider"></div>


                                <!-- INFORMATION -->

                                <div class="lpc-info">


                                    <!-- LEFT -->

                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Qualification:
                                        </div>

                                        <div class="lpc-info-value">
                                            LL.B, LL.M
                                        </div>


                                        <div class="lpc-info-label">
                                            Enrollment No:
                                        </div>

                                        <div class="lpc-info-value">
                                            BCB-XXXXXX
                                        </div>

                                    </div>


                                    <!-- RIGHT -->

                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Experience:
                                        </div>

                                        <div class="lpc-info-value">
                                            15 Years of Experience
                                        </div>


                                        <div class="lpc-info-label">
                                            Bar Association:
                                        </div>

                                        <div class="lpc-info-value">
                                            Dhaka Bar Association
                                        </div>

                                    </div>

                                </div>


                                <!-- VIEW PROFILE -->

                                <a href="{{route('advocate-profile')}}"
                                   class="lpc-profile-button">

                                    <i class="fa fa-eye"></i>

                                    View Profile

                                </a>


                            </div>

                        </div>

                    </div>



                    <!-- ==================================
                         PROFILE CARD 2
                    =================================== -->

                    <div class="lpc-slide">

                        <div class="lpc-card">

                            <div class="lpc-image-area">

                                <div class="lpc-profile-image">

                                    <img src="{{asset('frontend/adv.png')}}"
                                         alt="Adv. Md. Asadullah">

                                </div>

                                <div class="lpc-verified">

                                    <i class="fa fa-check"></i>

                                    Bar Council Verified

                                </div>

                            </div>


                            <div class="lpc-body">

                                <h3 class="lpc-name">
                                    Adv. Md. Asadullah
                                </h3>

                                <div class="lpc-designation">
                                    Advocate
                                </div>


                                <div class="lpc-rating">

                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>

                                    <strong>4.7</strong>

                                    <span>
                                        (48 Reviews)
                                    </span>

                                </div>


                                <div class="lpc-specialization">
                                    Civil & Criminal Law Specialist
                                </div>


                                <div class="lpc-court">
                                    Supreme Court of Bangladesh
                                </div>

                                <div class="lpc-court-location">
                                    Dhaka Judge Court, Dhaka
                                </div>


                                <div class="lpc-divider"></div>


                                <div class="lpc-info">

                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Qualification:
                                        </div>

                                        <div class="lpc-info-value">
                                            LL.B, LL.M
                                        </div>

                                        <div class="lpc-info-label">
                                            Enrollment No:
                                        </div>

                                        <div class="lpc-info-value">
                                            BCB-123456
                                        </div>

                                    </div>


                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Experience:
                                        </div>

                                        <div class="lpc-info-value">
                                            12 Years of Experience
                                        </div>

                                        <div class="lpc-info-label">
                                            Bar Association:
                                        </div>

                                        <div class="lpc-info-value">
                                            Dhaka Bar Association
                                        </div>

                                    </div>

                                </div>


                                <a href="{{route('advocate-profile')}}"
                                   class="lpc-profile-button">

                                    <i class="fa fa-eye"></i>

                                    View Profile

                                </a>

                            </div>

                        </div>

                    </div>



                    <!-- ==================================
                         PROFILE CARD 3
                    =================================== -->

                    <div class="lpc-slide">

                        <div class="lpc-card">

                            <div class="lpc-image-area">

                                <div class="lpc-profile-image">

                                    <img src="{{asset('frontend/adv.png')}}"
                                         alt="Adv. Sara Ahmed">

                                </div>

                                <div class="lpc-verified">

                                    <i class="fa fa-check"></i>

                                    Bar Council Verified

                                </div>

                            </div>


                            <div class="lpc-body">

                                <h3 class="lpc-name">
                                    Adv. Sara Ahmed
                                </h3>

                                <div class="lpc-designation">
                                    Advocate
                                </div>


                                <div class="lpc-rating">

                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>

                                    <strong>4.9</strong>

                                    <span>
                                        (73 Reviews)
                                    </span>

                                </div>


                                <div class="lpc-specialization">
                                    Family & Property Law Specialist
                                </div>


                                <div class="lpc-court">
                                    Supreme Court of Bangladesh
                                </div>

                                <div class="lpc-court-location">
                                    Dhaka Judge Court, Dhaka
                                </div>


                                <div class="lpc-divider"></div>


                                <div class="lpc-info">

                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Qualification:
                                        </div>

                                        <div class="lpc-info-value">
                                            LL.B, LL.M
                                        </div>

                                        <div class="lpc-info-label">
                                            Enrollment No:
                                        </div>

                                        <div class="lpc-info-value">
                                            BCB-456789
                                        </div>

                                    </div>


                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Experience:
                                        </div>

                                        <div class="lpc-info-value">
                                            10 Years of Experience
                                        </div>

                                        <div class="lpc-info-label">
                                            Bar Association:
                                        </div>

                                        <div class="lpc-info-value">
                                            Dhaka Bar Association
                                        </div>

                                    </div>

                                </div>


                                <a href="{{route('advocate-profile')}}"
                                   class="lpc-profile-button">

                                    <i class="fa fa-eye"></i>

                                    View Profile

                                </a>

                            </div>

                        </div>

                    </div>



                    <!-- ==================================
                         PROFILE CARD 4
                    =================================== -->

                    <div class="lpc-slide">

                        <div class="lpc-card">

                            <div class="lpc-image-area">

                                <div class="lpc-profile-image">

                                    <img src="{{asset('frontend/adv.png')}}"
                                         alt="Adv. Tanvir Hasan">

                                </div>

                                <div class="lpc-verified">

                                    <i class="fa fa-check"></i>

                                    Bar Council Verified

                                </div>

                            </div>


                            <div class="lpc-body">

                                <h3 class="lpc-name">
                                    Adv. Tanvir Hasan
                                </h3>

                                <div class="lpc-designation">
                                    Legal Consultant
                                </div>


                                <div class="lpc-rating">

                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>

                                    <strong>4.6</strong>

                                    <span>
                                        (39 Reviews)
                                    </span>

                                </div>


                                <div class="lpc-specialization">
                                    Banking & Corporate Law Specialist
                                </div>


                                <div class="lpc-court">
                                    Supreme Court of Bangladesh
                                </div>

                                <div class="lpc-court-location">
                                    District Court, Dhaka
                                </div>


                                <div class="lpc-divider"></div>


                                <div class="lpc-info">

                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Qualification:
                                        </div>

                                        <div class="lpc-info-value">
                                            LL.B, LL.M
                                        </div>

                                        <div class="lpc-info-label">
                                            Enrollment No:
                                        </div>

                                        <div class="lpc-info-value">
                                            BCB-987654
                                        </div>

                                    </div>


                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Experience:
                                        </div>

                                        <div class="lpc-info-value">
                                            8 Years of Experience
                                        </div>

                                        <div class="lpc-info-label">
                                            Bar Association:
                                        </div>

                                        <div class="lpc-info-value">
                                            Dhaka Bar Association
                                        </div>

                                    </div>

                                </div>


                                <a href="{{route('advocate-profile')}}"
                                   class="lpc-profile-button">

                                    <i class="fa fa-eye"></i>

                                    View Profile

                                </a>

                            </div>

                        </div>

                    </div>



                    <!-- ==================================
                         PROFILE CARD 5
                    =================================== -->

                    <div class="lpc-slide">

                        <div class="lpc-card">

                            <div class="lpc-image-area">

                                <div class="lpc-profile-image">

                                    <img src="{{asset('frontend/adv.png')}}"
                                         alt="Adv. Mahmudul Hasan">

                                </div>

                                <div class="lpc-verified">

                                    <i class="fa fa-check"></i>

                                    Bar Council Verified

                                </div>

                            </div>


                            <div class="lpc-body">

                                <h3 class="lpc-name">
                                    Adv. Mahmudul Hasan
                                </h3>

                                <div class="lpc-designation">
                                    Barrister
                                </div>


                                <div class="lpc-rating">

                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>

                                    <strong>4.9</strong>

                                    <span>
                                        (84 Reviews)
                                    </span>

                                </div>


                                <div class="lpc-specialization">
                                    Constitutional & Writ Specialist
                                </div>


                                <div class="lpc-court">
                                    Supreme Court of Bangladesh
                                </div>

                                <div class="lpc-court-location">
                                    Supreme Court Bar, Dhaka
                                </div>


                                <div class="lpc-divider"></div>


                                <div class="lpc-info">

                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Qualification:
                                        </div>

                                        <div class="lpc-info-value">
                                            LL.B, LL.M
                                        </div>

                                        <div class="lpc-info-label">
                                            Enrollment No:
                                        </div>

                                        <div class="lpc-info-value">
                                            BCB-654321
                                        </div>

                                    </div>


                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Experience:
                                        </div>

                                        <div class="lpc-info-value">
                                            18 Years of Experience
                                        </div>

                                        <div class="lpc-info-label">
                                            Bar Association:
                                        </div>

                                        <div class="lpc-info-value">
                                            Supreme Court Bar Association
                                        </div>

                                    </div>

                                </div>


                                <a href="{{route('advocate-profile')}}"
                                   class="lpc-profile-button">

                                    <i class="fa fa-eye"></i>

                                    View Profile

                                </a>

                            </div>

                        </div>

                    </div>



                    <!-- ==================================
                         PROFILE CARD 6
                    =================================== -->

                    <div class="lpc-slide">

                        <div class="lpc-card">

                            <div class="lpc-image-area">

                                <div class="lpc-profile-image">

                                    <img src="{{asset('frontend/adv.png')}}"
                                         alt="Adv. Nusrat Jahan">

                                </div>

                                <div class="lpc-verified">

                                    <i class="fa fa-check"></i>

                                    Bar Council Verified

                                </div>

                            </div>


                            <div class="lpc-body">

                                <h3 class="lpc-name">
                                    Adv. Nusrat Jahan
                                </h3>

                                <div class="lpc-designation">
                                    Legal Consultant
                                </div>


                                <div class="lpc-rating">

                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>

                                    <strong>4.7</strong>

                                    <span>
                                        (52 Reviews)
                                    </span>

                                </div>


                                <div class="lpc-specialization">
                                    Family & Human Rights Specialist
                                </div>


                                <div class="lpc-court">
                                    Supreme Court of Bangladesh
                                </div>

                                <div class="lpc-court-location">
                                    District Court, Dhaka
                                </div>


                                <div class="lpc-divider"></div>


                                <div class="lpc-info">

                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Qualification:
                                        </div>

                                        <div class="lpc-info-value">
                                            LL.B, LL.M
                                        </div>

                                        <div class="lpc-info-label">
                                            Enrollment No:
                                        </div>

                                        <div class="lpc-info-value">
                                            BCB-741258
                                        </div>

                                    </div>


                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Experience:
                                        </div>

                                        <div class="lpc-info-value">
                                            9 Years of Experience
                                        </div>

                                        <div class="lpc-info-label">
                                            Bar Association:
                                        </div>

                                        <div class="lpc-info-value">
                                            Dhaka Bar Association
                                        </div>

                                    </div>

                                </div>


                                <a href="{{route('advocate-profile')}}"
                                   class="lpc-profile-button">

                                    <i class="fa fa-eye"></i>

                                    View Profile

                                </a>

                            </div>

                        </div>

                    </div>


                </div>

            </div>


        </div>

    </div>

</section>

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

@endsection