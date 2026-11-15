@extends('frontend.layouts.master')
@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/legal_information.css')}}">

<link rel="stylesheet"
      href="{{ asset('assets/css/legal_information.css') }}">
<section class="legal-directory-section">

    <div class="container mobile_container_for_legal_information">

        <div class="flex justify-between items-center mt-2">
          <div class="my-4">
            <h2
              id="hospitals-by-location"
              class="text-lg md:text-xl font-semibold text-gray-800 dark:text-gray-100"
            >
              Legal Information
            </h2>
            <p class="text-sm text-gray-600 dark:text-gray-400">
              Explore Our Legal Information
            </p>
          </div>
        </div>

        <!-- =====================================
             LEGAL INFORMATION
        ====================================== -->

        <div class="directory-box legal-info-box">

            <div class="row justify-content-center">

                <!-- Card 1 -->
                <div class="col-6 col-md-3">

                    <a href="{{route('legal.information.rights')}}" class="directory-card legal-card">

                        <div class="directory-icon">
                            <i class="fa fa-book"></i>
                        </div>

                        <h3>
                            Know Your<br>
                            Rights
                        </h3>

                        <p>
                            Learn about your<br>
                            legal rights.
                        </p>

                        <div class="card-bottom">
                            <span>View Details</span>
                            <i class="fa fa-chevron-right"></i>
                        </div>

                    </a>

                </div>


                <!-- Card 2 -->
                <div class="col-6 col-md-3">

                    <a href="{{route('legal.information.terms')}}" class="directory-card legal-card">

                        <div class="directory-icon">
                            <i class="fa fa-book"></i>
                        </div>

                        <h3>
                            Legal<br>
                            Terms
                        </h3>

                        <p>
                            Understand common<br>
                            legal terms.
                        </p>

                        <div class="card-bottom">
                            <span>View Details</span>
                            <i class="fa fa-chevron-right"></i>
                        </div>

                    </a>

                </div>


                <!-- Card 3 -->
                <div class="col-6 col-md-3">

                    <a href="{{route('legal.information.laws')}}" class="directory-card legal-card">

                        <div class="directory-icon">
                            <i class="fa fa-hammer"></i>
                        </div>

                        <h3>
                            Laws of<br>
                            Bangladesh
                        </h3>

                        <p>
                            Explore laws and<br>
                            act of Bangladesh.
                        </p>

                        <div class="card-bottom">
                            <span>View Details</span>
                            <i class="fa fa-chevron-right"></i>
                        </div>

                    </a>

                </div>


                <!-- Card 4 -->
                <div class="col-6 col-md-3">

                    <a href="{{route('legal.information.procudures')}}" class="directory-card legal-card">

                        <div class="directory-icon">
                            <i class="fa fa-file"></i>
                        </div>

                        <h3>
                            Legal<br>
                            Procedures
                        </h3>

                        <p>
                            Step-by-step legal<br>
                            procedures.
                        </p>

                        <div class="card-bottom">
                            <span>View Details</span>
                            <i class="fa fa-chevron-right"></i>
                        </div>

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- Legal Services --}}
@include('frontend.layouts.legal_service')

{{-- Legal Articles --}}
@include('frontend.layouts.legal_articles')

@endsection