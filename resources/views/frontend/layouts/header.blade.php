<link rel="stylesheet" type="text/css" href="{{asset('assets/css/rating.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/navbar.css')}}">


{{-- ==========================================
     ADVOCATE SHEBA HEADER
========================================== --}}

<link rel="stylesheet" href="{{asset('assets/css/rating.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/header-custom.css')}}">


<header class="header-area header-style-1 header-height-2">

    <div class="header-bottom header-bottom-bg-color sticky-bar hs-header-bar">

        <div class="container">

            {{-- ================= DESKTOP HEADER ================= --}}

            <div class="hs-nav-wrap d-none d-lg-flex">

                {{-- Logo --}}
                <div class="hs-logo">
                    <a href="{{url('')}}">
                        <img src="{{asset('uploads/logo_images/'.@$logo->image)}}"
                             alt="Advocate Sheba logo">
                    </a>
                </div>


                {{-- Desktop Menu --}}
                <div class="hs-menu font-heading">

                    <nav>
                        <ul>

                            <li>
                                <a class="{{(@$page_type=='home')?'custom_menu':''}}"
                                   href="{{url('')}}">Home</a>
                            </li>

                            <li>
                                <a class="{{(@$page_type=='find_advocate')?'custom_menu':''}}"
                                   href="{{route('find.our.advocate-list')}}">Advocate</a>
                            </li>

                            <li>
                                <a class="{{(@$page_type=='find_barrister')?'custom_menu':''}}"
                                   href="{{route('find.our.barrister-list')}}">Barristers</a>
                            </li>

                            <li>
                                <a class="{{(@$page_type=='find_law_firm')?'custom_menu':''}}"
                                   href="{{route('find.our.law-firm-list')}}">Law Firms</a>
                            </li>

                            <li>
                                <a class="{{(@$page_type=='legal_information')?'custom_menu':''}}"
                                   href="{{route('our.legal-information')}}">Legal Information</a>
                            </li>

                            <li>
                                <a class="{{(@$page_type=='courts')?'custom_menu':''}}"
                                   href="{{route('our.courts')}}">Courts</a>
                            </li>

                            <li>
                                <a class="{{(@$page_type=='legal_article')?'custom_menu':''}}"
                                   href="{{route('legal.article.list')}}">Legal News</a>
                            </li>

                            <li>
                                <a class="{{(@$page_type=='video')?'custom_menu':''}}"
                                   href="{{route('video.list')}}">Videos</a>
                            </li>

                        </ul>
                    </nav>

                </div>


                {{-- Desktop Actions --}}
                <div class="hs-actions">

                    {{-- Desktop Search --}}
                    <a href="javascript:void(0)"
                       class="hs-search-icon"
                       data-bs-toggle="modal"
                       data-bs-target="#searchModal"
                       title="Search">

                        <i class="fa fa-search" aria-hidden="true"></i>

                    </a>


                    {{-- Join Advocate --}}
                    <a class="hs-pill-btn hs-pill-outline"
                       href="{{route('registration')}}">

                        Join as a Advocate
                        <i class="fa-solid fa-arrow-right"></i>

                    </a>


                    {{-- Login --}}
                    <a class="hs-pill-btn hs-pill-gold"
                       href="{{route('login')}}">

                        <i class="fa fa-user" aria-hidden="true"></i>
                        Login

                    </a>

                </div>

            </div>



            {{-- ================= MOBILE HEADER ================= --}}

            <div class="header-wrap header-space-between position-relative d-flex d-lg-none hs-mobile-header">


                {{-- Mobile Menu Button --}}
                <div class="header-action-icon-2 d-block d-lg-none hs-mobile-menu-icon">

                    <div class="burger-icon burger-icon-white">

                        <span class="burger-icon-top"></span>
                        <span class="burger-icon-mid"></span>
                        <span class="burger-icon-bottom"></span>

                    </div>

                </div>



                {{-- Mobile Logo --}}
                <div class="logo logo-width-1 d-block d-lg-none hs-mobile-logo">

                    <a href="{{url('')}}">

                        <img src="{{asset('uploads/logo_images/'.@$logo->image)}}"
                             alt="Advocate Sheba logo">

                    </a>

                </div>



                {{-- Mobile Search + Login --}}
                <div class="header-action-right d-block d-lg-none hs-mobile-right">

                    <div class="hs-mobile-actions">


                        {{-- Mobile Search Icon --}}
                        <a href="javascript:void(0)"
                           class="hs-search-icon hs-mobile-search-icon"
                           data-bs-toggle="modal"
                           data-bs-target="#searchModal"
                           title="Search">

                            <i class="fa fa-search" aria-hidden="true"></i>

                        </a>



                        {{-- Mobile Login --}}
                        <a href="{{url('/login')}}"
                           class="hs-mobile-login"
                           title="Login">

                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>Login</span>

                        </a>


                    </div>

                </div>


            </div>

        </div>

    </div>

</header>




{{-- ==========================================
     MOBILE MENU
========================================== --}}

<div class="mobile-header-active mobile-header-wrapper-style">

    <div class="mobile-header-wrapper-inner">


        {{-- Mobile Menu Top --}}
        <div class="mobile-header-top">

            <div class="mobile-header-logo">

                <a href="{{url('')}}">

                    <img src="{{asset('uploads/logo_images/'.@$logo->image)}}"
                         alt="Advocate Sheba logo">

                </a>

            </div>


            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">

                <button class="close-style search-close">

                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>

                </button>

            </div>

        </div>



        {{-- Mobile Menu Content --}}
        <div class="mobile-header-content-area">

            <div class="mobile-menu-wrap mobile-header-border">

                <nav>

                    <ul class="mobile-menu font-heading">

                        <li class="menu-item-has-children">
                            <a href="{{url('')}}">Home</a>
                        </li>

                        <li>
                            <a class="menu-item-has-children"
                               href="{{route('find.our.advocate-list')}}">Advocate</a>
                        </li>

                        <li>
                            <a class="menu-item-has-children"
                               href="{{route('find.our.barrister-list')}}">Barristers</a>
                        </li>

                        <li>
                            <a class="menu-item-has-children"
                               href="{{route('find.our.law-firm-list')}}">Law Firms</a>
                        </li>

                        <li>
                            <a class="menu-item-has-children"
                               href="{{route('our.legal-information')}}">Legal Information</a>
                        </li>

                        <li>
                            <a class="menu-item-has-children"
                               href="{{route('our.courts')}}">Courts</a>
                        </li>

                        <li>
                            <a class="menu-item-has-children"
                               href="{{route('legal.article.list')}}">Legal News</a>
                        </li>

                        <li>
                            <a class="menu-item-has-children"
                               href="{{route('video.list')}}">Videos</a>
                        </li>


                        {{-- Join Button --}}
                        <li>

                            <a class="mobile-join-btn"
                               href="{{route('registration')}}">

                                Join as a Advocate
                                <i class="fa-solid fa-arrow-right"></i>

                            </a>

                        </li>

                    </ul>

                </nav>

            </div>

        </div>

    </div>

</div>




{{-- ==========================================
     SEARCH MODAL
========================================== --}}

<div class="modal fade hs-search-modal"
     id="searchModal"
     tabindex="-1"
     aria-labelledby="searchModalLabel"
     aria-hidden="true">


    <div class="modal-dialog modal-dialog-centered hs-modal-dialog">


        <div class="modal-content hs-modal-content">


            {{-- Close Button --}}
            <button type="button"
                    class="hs-modal-close"
                    data-bs-dismiss="modal"
                    aria-label="Close">

                &times;

            </button>



            {{-- Modal Heading --}}
            <div class="hs-modal-heading">

                <h2>

                    Find the Right

                    <span>Legal Professional</span>

                </h2>


                <p class="hs-desc">

                    আপনার প্রয়োজনের জন্য সঠিক আইনজীবী ও আইনি পরামর্শদাতা খুঁজে নিন

                </p>


                <p class="hs-count">

                    Barristers:1,500. Advocates:2,200. Law Firms:250. Lawyers:3950.

                </p>

            </div>




            {{-- Search Form --}}
            <form class="hs-search-form" action="#" method="GET">


                {{-- First Row --}}
                <div class="hs-main-row">


                    <input type="text"
                           name="search"
                           class="form-control"
                           placeholder="Search by Name, Enrollment Number, Bar Number">


                    <button type="submit"
                            class="btn hs-main-btn">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             width="18"
                             height="18"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="#ffffff"
                             stroke-width="3"
                             stroke-linecap="round"
                             stroke-linejoin="round">

                            <circle cx="11" cy="11" r="7"></circle>

                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>

                        </svg>

                    </button>

                </div>




                {{-- Second Row --}}
                <div class="hs-advanced-row">


                    {{-- Practice Area --}}
                    <div class="hs-select">

                        <div class="hs-select-box">

                            <span class="hs-selected-text">Practice Area</span>

                            <i class="fa fa-chevron-down"></i>

                        </div>


                        <div class="hs-options">

                            <div class="hs-option" data-value="">
                                Practice Area
                            </div>

                            <div class="hs-option" data-value="criminal-law">
                                Criminal Law
                            </div>

                            <div class="hs-option" data-value="civil-law">
                                Civil Law
                            </div>

                            <div class="hs-option" data-value="family-law">
                                Family Law
                            </div>

                            <div class="hs-option" data-value="corporate-law">
                                Corporate Law
                            </div>

                        </div>


                        <input type="hidden" name="practice_area" value="">

                    </div>




                    {{-- Location --}}
                    <div class="hs-select">

                        <div class="hs-select-box">

                            <span class="hs-selected-text">Location</span>

                            <i class="fa fa-chevron-down"></i>

                        </div>


                        <div class="hs-options">

                            <div class="hs-option" data-value="">
                                Location
                            </div>

                            <div class="hs-option" data-value="dhaka">
                                Dhaka
                            </div>

                            <div class="hs-option" data-value="chattogram">
                                Chattogram
                            </div>

                            <div class="hs-option" data-value="sylhet">
                                Sylhet
                            </div>

                            <div class="hs-option" data-value="rajshahi">
                                Rajshahi
                            </div>

                        </div>


                        <input type="hidden" name="location" value="">

                    </div>




                    {{-- Court --}}
                    <div class="hs-select hs-court">

                        <div class="hs-select-box">

                            <span class="hs-selected-text">Court</span>

                            <i class="fa fa-chevron-down"></i>

                        </div>


                        <div class="hs-options">

                            <div class="hs-option" data-value="">
                                Court
                            </div>


                            {{-- Dynamic Court --}}
                            @php

                                $searchCourts = \App\Model\Court::where('status', 1)->get();

                            @endphp


                            @foreach($searchCourts as $sCourt)

                                <div class="hs-option"
                                     data-value="{{ $sCourt->slug ?? $sCourt->id }}">

                                    {{ $sCourt->name }}

                                </div>

                            @endforeach


                        </div>


                        <input type="hidden" name="court" value="">

                    </div>




                    {{-- Advanced Search Button --}}
                    <button type="submit" class="btn hs-advanced-btn">

                        <i class="fa fa-search"></i>
                        Search

                    </button>


                </div>


            </form>


        </div>

    </div>

</div>




{{-- ==========================================
     CUSTOM SELECT JAVASCRIPT
========================================== --}}

<script>

document.addEventListener('DOMContentLoaded', function () {


    const hsSelects = document.querySelectorAll('.hs-select');


    hsSelects.forEach(function (select) {


        const box = select.querySelector('.hs-select-box');

        const options = select.querySelectorAll('.hs-option');

        const text = select.querySelector('.hs-selected-text');

        const hidden = select.querySelector('input[type="hidden"]');



        // Open / Close Dropdown
        box.addEventListener('click', function (e) {

            e.stopPropagation();


            hsSelects.forEach(function (other) {

                if (other !== select) {

                    other.classList.remove('open');

                }

            });


            select.classList.toggle('open');

        });




        // Select Option
        options.forEach(function (option) {


            option.addEventListener('click', function (e) {

                e.stopPropagation();


                text.textContent = option.textContent.trim();

                hidden.value = option.getAttribute('data-value');



                options.forEach(function (item) {

                    item.classList.remove('selected');

                });


                option.classList.add('selected');

                select.classList.remove('open');


            });


        });


    });




    // Close Dropdown on Outside Click
    document.addEventListener('click', function () {

        hsSelects.forEach(function (select) {

            select.classList.remove('open');

        });

    });



});

</script>
