@extends('frontend.layouts.master')
@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/legal-service-article.css') }}">

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/law-firms-static-grid.css')}}">

@include('frontend.single_pages.single_search_bar')

<section class="lpc-carousel-section lpc-static-firms-section" style="background: #ebe9e957;">
    <div class="container">

        <div class="flex justify-between items-center mt-2">
          <div class="my-4">
            <h2 id="hospitals-by-location" class="text-lg md:text-xl font-semibold text-gray-800 dark:text-gray-100">
              Legal Barrister
            </h2>
            <p class="text-sm text-gray-600 dark:text-gray-400">
              Explore Legal Barrister
            </p>
          </div>
        </div>

        {{-- ডাইনামিক অ্যাডভোকেট কার্ড --}}
        @include('frontend.advocate.advocate_card_grid')

    </div>
</section>

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

        <!-- Card 3: Law Firm -->
        <div class="col-md-4 col-lg-3">
            <a href="{{route('find.our.law-firm-list')}}" class="practice-area-card" style="text-decoration: none !important;">
                <div class="card-1 find_more_div"
                     onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 6px 20px rgba(0, 32, 91, 0.35)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0, 32, 91, 0.2)';">

                    <h6 style="font-size: 15px; color: #fff; font-family: 'Georgia', serif; font-weight: bold; margin: 0; letter-spacing: 0.5px;">
                        Find Law Firms
                    </h6>
                    <span style="color: #fff; font-size: 18px; font-weight: bold; line-height: 1;">&rarr;</span>
                </div>
            </a>
        </div>

    </div>
</section>

{{-- Legal Articles --}}
@include('frontend.layouts.legal_articles')

{{-- Latest Video --}}
@include('frontend.layouts.latest_video')

@endsection