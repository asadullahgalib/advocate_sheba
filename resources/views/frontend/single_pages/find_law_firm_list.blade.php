@extends('frontend.layouts.master')
@section('content')

@php
    // LawFirmController-এ ছবি যে ফোল্ডারে সেভ হয় সেটা এখানে দিন (শেষে / থাকবে)
    $lawFirmImageFolder = 'uploads/law_firm_images/';
@endphp

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
        </div>

        <div class="lpc-carousel">

            <!-- VIEWPORT -->
            <div class="lpc-viewport">

                <div class="lpc-track">

                    @forelse($law_firms as $firm)
                    <!-- LAW FIRM CARD -->
                    <div class="lpc-slide">

                        <div class="lpc-card">

                            <!-- FIRM IMAGE -->
                            <div class="lpc-image-area">

                                <div class="lpc-profile-image">
                                    <img src="{{ !empty($firm->image) ? url($lawFirmImageFolder.$firm->image) : asset('frontend/firm_logo.png') }}"
                                         alt="{{ $firm->firm_name }}">
                                </div>

                                <!-- VERIFIED -->
                                <div class="lpc-verified">
                                    <i class="fa fa-check"></i>
                                    Bar Council Verified
                                </div>

                            </div>

                            <!-- FIRM BODY -->
                            <div class="lpc-body">

                                <h3 class="lpc-name">
                                    {{ $firm->firm_name }}
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

                                <!-- LEADER -->
                                <div class="lpc-specialization">
                                    @if(!empty($firm->leader))
                                        <strong>Led by {{ $firm->leader->name }}</strong>
                                    @endif
                                </div>

                                <!-- COURT -->
                                <div class="lpc-court">
                                    {{ $firm->court_name }}
                                </div>

                                <div class="lpc-court-location">
                                    {{ optional($firm->leader)->present_address }}
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
                                            {{ $firm->established }}
                                        </div>

                                        <div class="lpc-info-label">
                                            Head Advocate Enrollment No:
                                        </div>

                                        <div class="lpc-info-value">
                                            {{ !empty($firm->enrollment_no) ? $firm->enrollment_no : optional($firm->leader)->enrollment_no }}
                                        </div>

                                    </div>

                                    <!-- RIGHT -->
                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Team:
                                        </div>

                                        <div class="lpc-info-value">
                                            @if(!empty($firm->team_size))
                                                {{ $firm->team_size }} Lawyers
                                            @endif
                                        </div>

                                        <div class="lpc-info-label">
                                            Bar Association:
                                        </div>

                                        <div class="lpc-info-value">
                                            {{ !empty($firm->bar_association) ? $firm->bar_association : optional($firm->leader)->bar_association }}
                                        </div>

                                    </div>

                                </div>

                                <!-- VIEW Details -->
                                <a href="{{ !empty($firm->slug) ? route('law.firm.details', $firm->slug) : '#' }}"
                                   class="lpc-profile-button">
                                    <i class="fa fa-eye"></i>
                                    View Details
                                </a>

                            </div>

                        </div>

                    </div>
                    @empty
                    <div style="width:100%; text-align:center; padding:30px 0;">
                        এই মুহূর্তে কোনো তথ্য পাওয়া যায়নি।
                    </div>
                    @endforelse

                </div>

            </div>
        </div>

        <!-- Pagination -->
        <div style="display:flex; justify-content:center; margin:20px 0 30px;">
            {{ $law_firms->links() }}
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

    </div>
</section>

@endsection