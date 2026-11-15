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
              Law Firms
            </h2>
            <p class="text-sm text-gray-600 dark:text-gray-400">
              Explore Law Firms
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
            <!-- =========
                 VIEWPORT == -->

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

                                    <img src="{{ asset('frontend/firm_logo.png') }}"
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
                                    গালিব ল অ্যাসোসিয়েটস
                                </h3>


                                <div class="lpc-designation">
                                    Law Firm
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
                                    <strong>Led by Adv. Md. Asadullah Galib</strong>
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
                                            Established:
                                        </div>

                                        <div class="lpc-info-value">
                                            2012
                                        </div>


                                        <div class="lpc-info-label">
                                            Head Advocate Enrollment No:
                                        </div>

                                        <div class="lpc-info-value">
                                            BCB-XXXXXX
                                        </div>

                                    </div>


                                    <!-- RIGHT -->

                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Team:
                                        </div>

                                        <div class="lpc-info-value">
                                            6 Lawyers
                                        </div>


                                        <div class="lpc-info-label">
                                            Bar Association:
                                        </div>

                                        <div class="lpc-info-value">
                                            Dhaka Bar Association
                                        </div>

                                    </div>

                                </div>


                                <!-- VIEW Details -->

                                <a href="{{route('our.law-firm-details')}}"
                                   class="lpc-profile-button">

                                    <i class="fa fa-eye"></i>

                                    View Details

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

                                    <img src="{{ asset('frontend/firm_logo.png') }}"
                                         alt="Adv. Md. Asadullah">

                                </div>

                                <div class="lpc-verified">

                                    <i class="fa fa-check"></i>

                                    Bar Council Verified

                                </div>

                            </div>


                            <!-- PROFILE BODY -->

                            <div class="lpc-body">


                                <h3 class="lpc-name">
                                    রহমান ল অ্যাসোসিয়েটস
                                </h3>


                                <div class="lpc-designation">
                                    Law Firm
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
                                    <strong>Led by Adv. Md. Asadullah Galib</strong>
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
                                            Established:
                                        </div>

                                        <div class="lpc-info-value">
                                            2012
                                        </div>


                                        <div class="lpc-info-label">
                                            Head Advocate Enrollment No:
                                        </div>

                                        <div class="lpc-info-value">
                                            BCB-XXXXXX
                                        </div>

                                    </div>


                                    <!-- RIGHT -->

                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Team:
                                        </div>

                                        <div class="lpc-info-value">
                                            6 Lawyers
                                        </div>


                                        <div class="lpc-info-label">
                                            Bar Association:
                                        </div>

                                        <div class="lpc-info-value">
                                            Dhaka Bar Association
                                        </div>

                                    </div>

                                </div>


                                <!-- VIEW Details -->

                                <a href="{{route('our.law-firm-details')}}"
                                   class="lpc-profile-button">

                                    <i class="fa fa-eye"></i>

                                    View Details

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

                                    <img src="{{ asset('frontend/firm_logo.png') }}"
                                         alt="Adv. Sara Ahmed">

                                </div>

                                <div class="lpc-verified">

                                    <i class="fa fa-check"></i>

                                    Bar Council Verified

                                </div>

                            </div>


                            <!-- PROFILE BODY -->

                            <div class="lpc-body">


                                <h3 class="lpc-name">
                                    আহমাদ ল অ্যাসোসিয়েটস
                                </h3>


                                <div class="lpc-designation">
                                    Law Firm
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
                                    <strong>Led by Adv. Md. Asadullah Galib</strong>
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
                                            Established:
                                        </div>

                                        <div class="lpc-info-value">
                                            2012
                                        </div>


                                        <div class="lpc-info-label">
                                            Head Advocate Enrollment No:
                                        </div>

                                        <div class="lpc-info-value">
                                            BCB-XXXXXX
                                        </div>

                                    </div>


                                    <!-- RIGHT -->

                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Team:
                                        </div>

                                        <div class="lpc-info-value">
                                            6 Lawyers
                                        </div>


                                        <div class="lpc-info-label">
                                            Bar Association:
                                        </div>

                                        <div class="lpc-info-value">
                                            Dhaka Bar Association
                                        </div>

                                    </div>

                                </div>


                                <!-- VIEW Details -->

                                <a href="{{route('our.law-firm-details')}}"
                                   class="lpc-profile-button">

                                    <i class="fa fa-eye"></i>

                                    View Details

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

                                    <img src="{{ asset('frontend/firm_logo.png') }}"
                                         alt="Adv. Tanvir Hasan">

                                </div>

                                <div class="lpc-verified">

                                    <i class="fa fa-check"></i>

                                    Bar Council Verified

                                </div>

                            </div>


                            <!-- PROFILE BODY -->

                            <div class="lpc-body">


                                <h3 class="lpc-name">
                                    করিম ল অ্যাসোসিয়েটস
                                </h3>


                                <div class="lpc-designation">
                                    Law Firm
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
                                    <strong>Led by Adv. Md. Asadullah Galib</strong>
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
                                            Established:
                                        </div>

                                        <div class="lpc-info-value">
                                            2012
                                        </div>


                                        <div class="lpc-info-label">
                                            Head Advocate Enrollment No:
                                        </div>

                                        <div class="lpc-info-value">
                                            BCB-XXXXXX
                                        </div>

                                    </div>


                                    <!-- RIGHT -->

                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Team:
                                        </div>

                                        <div class="lpc-info-value">
                                            6 Lawyers
                                        </div>


                                        <div class="lpc-info-label">
                                            Bar Association:
                                        </div>

                                        <div class="lpc-info-value">
                                            Dhaka Bar Association
                                        </div>

                                    </div>

                                </div>


                                <!-- VIEW Details -->

                                <a href="{{route('our.law-firm-details')}}"
                                   class="lpc-profile-button">

                                    <i class="fa fa-eye"></i>

                                    View Details

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

                                    <img src="{{ asset('frontend/firm_logo.png') }}"
                                         alt="Adv. Mahmudul Hasan">

                                </div>

                                <div class="lpc-verified">

                                    <i class="fa fa-check"></i>

                                    Bar Council Verified

                                </div>

                            </div>


                            <!-- PROFILE BODY -->

                            <div class="lpc-body">


                                <h3 class="lpc-name">
                                    ফারহানা ল অ্যাসোসিয়েটস
                                </h3>


                                <div class="lpc-designation">
                                    Law Firm
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
                                    <strong>Led by Adv. Md. Asadullah Galib</strong>
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
                                            Established:
                                        </div>

                                        <div class="lpc-info-value">
                                            2012
                                        </div>


                                        <div class="lpc-info-label">
                                            Head Advocate Enrollment No:
                                        </div>

                                        <div class="lpc-info-value">
                                            BCB-XXXXXX
                                        </div>

                                    </div>


                                    <!-- RIGHT -->

                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Team:
                                        </div>

                                        <div class="lpc-info-value">
                                            6 Lawyers
                                        </div>


                                        <div class="lpc-info-label">
                                            Bar Association:
                                        </div>

                                        <div class="lpc-info-value">
                                            Dhaka Bar Association
                                        </div>

                                    </div>

                                </div>


                                <!-- VIEW Details -->

                                <a href="{{route('our.law-firm-details')}}"
                                   class="lpc-profile-button">

                                    <i class="fa fa-eye"></i>

                                    View Details

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

                                    <img src="{{ asset('frontend/firm_logo.png') }}"
                                         alt="Adv. Nusrat Jahan">

                                </div>

                                <div class="lpc-verified">

                                    <i class="fa fa-check"></i>

                                    Bar Council Verified

                                </div>

                            </div>


                            <!-- PROFILE BODY -->

                            <div class="lpc-body">


                                <h3 class="lpc-name">
                                    শফিক ল অ্যাসোসিয়েটস
                                </h3>


                                <div class="lpc-designation">
                                    Law Firm
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
                                    <strong>Led by Adv. Md. Asadullah Galib</strong>
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
                                            Established:
                                        </div>

                                        <div class="lpc-info-value">
                                            2012
                                        </div>


                                        <div class="lpc-info-label">
                                            Head Advocate Enrollment No:
                                        </div>

                                        <div class="lpc-info-value">
                                            BCB-XXXXXX
                                        </div>

                                    </div>


                                    <!-- RIGHT -->

                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Team:
                                        </div>

                                        <div class="lpc-info-value">
                                            6 Lawyers
                                        </div>


                                        <div class="lpc-info-label">
                                            Bar Association:
                                        </div>

                                        <div class="lpc-info-value">
                                            Dhaka Bar Association
                                        </div>

                                    </div>

                                </div>


                                <!-- VIEW Details -->

                                <a href="{{route('our.law-firm-details')}}"
                                   class="lpc-profile-button">

                                    <i class="fa fa-eye"></i>

                                    View Details

                                </a>


                            </div>

                        </div>

                    </div>


                </div>

            </div>
        </div>

    </div>

</section>

{{-- Legal Articles --}}
@include('frontend.layouts.legal_articles')

{{-- Latest Video --}}
@include('frontend.layouts.latest_video')

<style>
    .find_more_div{
        padding: 12px 20px;
        margin-bottom: 15px;
        min-height: 45px;
        background-color: #103C6D !important;
        border-radius: 12px;
        box-shadow: rgba(0, 32, 91, 0.2) 0px 4px 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: 0.3s;
        border: 1px solid rgba(255, 255, 255, 0.1);
        transform: translateY(0px);
        margin: 0px 15px 7px 15px;
    }
    .find_more_div:hover{
        background-color: #1B489D !important;
    }
</style>

<section class="join-professional-section" style="margin-bottom: 15px;">

    <!-- Legal Category Cards Section (3 Columns Each) -->
    <div class="row justify-content-center" style="margin-top: 5px;">
        
        <h5 style="text-align: center;margin-bottom: 10px; width: 100%;"> অন্যান্য আইনি পেশাজীবী খুঁজুন </h5>

        <!-- Card 1: Advocate -->
        <div class="col-md-4 col-lg-3">
            <a href="{{route('find.our.advocate-list')}}" class="practice-area-card" style="text-decoration: none !important;">
                <div class="card-1 find_more_div"
                     onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 6px 20px rgba(0, 32, 91, 0.35)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0, 32, 91, 0.2)';">
                    
                    <h6 style="font-size: 15px; color: #fff; font-family: 'Georgia', serif; font-weight: bold; margin: 0; letter-spacing: 0.5px;">
                        Find Advocates
                    </h6>
                    <span style="color: #fff; font-size: 18px; font-weight: bold; line-height: 1;">&rarr;</span>
                </div>
            </a>
        </div>

        <!-- Card 2: Barrister -->
        <div class="col-md-4 col-lg-3">
            <a href="{{route('find.our.barrister-list')}}" class="practice-area-card" style="text-decoration: none !important;">
                <div class="card-1 find_more_div"
                     onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 6px 20px rgba(0, 32, 91, 0.35)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0, 32, 91, 0.2)';">
                    
                    <h6 style="font-size: 15px; color: #fff; font-family: 'Georgia', serif; font-weight: bold; margin: 0; letter-spacing: 0.5px;">
                        Find Barristers
                    </h6>
                    <span style="color: #fff; font-size: 18px; font-weight: bold; line-height: 1;">&rarr;</span>
                </div>
            </a>
        </div>

        <!-- Card 3: Legal Consultant -->
        <div class="col-md-4 col-lg-3">
            <a href="{{route('find.our.consultant-list')}}" class="practice-area-card" style="text-decoration: none !important;">
                <div class="card-1 find_more_div"
                     onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 6px 20px rgba(0, 32, 91, 0.35)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0, 32, 91, 0.2)';">
                    
                    <h6 style="font-size: 15px; color: #fff; font-family: 'Georgia', serif; font-weight: bold; margin: 0; letter-spacing: 0.5px;">
                        Find Legal Consultants
                    </h6>
                    <span style="color: #fff; font-size: 18px; font-weight: bold; line-height: 1;">&rarr;</span>
                </div>
            </a>
        </div>

    </div>
</section>

@endsection