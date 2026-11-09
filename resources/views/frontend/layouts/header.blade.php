<link rel="stylesheet" type="text/css" href="{{asset('assets/css/rating.css')}}">

<style>
    /* Registration / Login pill button (top bar) */
    .header-info .auth-pill-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #103C6D;
        color: #ffffff;
        font-size: 14px;
        font-weight: 600;
        padding: 7px 16px;
        border-radius: 30px;
        border: 1px solid #103C6D;
        text-decoration: none;
        white-space: nowrap;
        transition: all 0.25s ease;
    }

    .header-info .auth-pill-btn i {
        font-size: 12px;
    }

    .header-info .auth-pill-btn:hover {
        background: #ffffff;
        color: #103C6D;
    }
</style>

<header class="header-area header-style-1 header-height-2">
    <div class="header-top header-top-ptb-1 d-lg-block">
        <div class="container">
            <div class="row align-items-center" style="padding: 5px 0px;">
                <div class="col-xl-12 col-lg-12">
                    <div class="header-info header-info-right">
                        <ul>
                            <li> 
                                <a class="search-btn" data-bs-toggle="modal" data-bs-target="#searchModal">
                                    <i class="fa fa-search" aria-hidden="true" style="color:#f2b33d !important;"></i> Search
                                </a> 
                            </li>
                            <li> 
                                <a class="auth-pill-btn" href="{{route('registration')}}">
                                    Join as a Advocate <i class="fa-solid fa-arrow-right"></i>
                                </a> 
                            </li>
                            <li class="mobile_top_login"> 
                                <a class="auth-pill-btn" href="{{route('login')}}">
                                    <i class="fa fa-user" aria-hidden="true"></i> Login <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom header-bottom-bg-color sticky-bar" style="background-color: #103C6D;
    border-bottom: 1px solid #103C6D;border-top: 1px solid #103C6D;">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="{{url('')}}">
                        <img src="{{asset('uploads/logo_images/'.@$logo->image)}}" alt="Shastho Plus logo" />
                    </a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-categori-wrap d-none d-lg-block">
                    </div>
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                        <nav>
                            <ul>
                                <a href="{{url('')}}">
                                    <img src="{{asset('uploads/logo_images/'.@$logo->image)}}" style="margin-bottom: -30px;">
                                </a>
                                <li><a class="{{(@$page_type=='home')?'custom_menu':''}}" href="{{url('')}}">Home</a></li>
                                <li><a class="{{(@$page_type=='advocate')?'custom_menu':''}}" href="{{route('our.advocate-list')}}">Advocate</a></li>
                                <li><a class="{{(@$page_type=='barrister')?'custom_menu':''}}" href="{{route('our.barrister-list')}}">Barristers</a></li>
                                <li><a class="{{(@$page_type=='consultant')?'custom_menu':''}}" href="{{route('our.consultant-list')}}">Legal Consultants</a></li>
                                <li><a class="{{(@$page_type=='law_firm')?'custom_menu':''}}" href="{{route('our.law-firm-list')}}">Law Firms</a></li>
                                <li><a class="{{(@$page_type=='legal_information')?'custom_menu':''}}" href="{{route('our.legal-information')}}">Legal Information</a></li>
                                <li><a class="{{(@$page_type=='courts')?'custom_menu':''}}" href="{{route('our.courts')}}">Courts</a></li>
                                <li><a class="{{(@$page_type=='legal_news')?'custom_menu':''}}" href="{{route('our.legal-news')}}">Legal News</a></li>
                                <li><a class="{{(@$page_type=='video')?'custom_menu':''}}" href="{{route('video.list')}}">Videos</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- <div class="hotline d-none d-lg-flex">
                    <a class="doctor_sign_up" href="{{url('/login')}}" title="Join as a Doctor" style="font-size: 18px;font-weight: bold;border: 3px solid #129AF7;padding: 5px 10px;border-radius: 20px;"> Join as a Doctor
                    </a>
                </div> -->
                <div class="header-action-icon-2 d-block d-lg-none">
                    <div class="burger-icon burger-icon-white">
                        <span class="burger-icon-top"></span>
                        <span class="burger-icon-mid"></span>
                        <span class="burger-icon-bottom"></span>
                    </div>
                </div>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                            <a href="{{url('/login')}}" title="Login">
                                <span class="pro-count white" style="color:#fff !important"><i class="fa fa-user"></i> Login</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="{{url('')}}"><img src="{{asset('uploads/logo_images/'.@$logo->image)}}" alt="Shastho Plus logo" /></a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-menu-wrap mobile-header-border">
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu font-heading">
                        <li class="menu-item-has-children"><a href="{{url('')}}">Home</a></li>
                        <li><a class="menu-item-has-children" href="{{route('our.advocate-list')}}">Advocate</a></li>
                        <li><a class="menu-item-has-children" href="{{route('our.barrister-list')}}">Barristers</a></li>
                        <li><a class="menu-item-has-children" href="{{route('our.consultant-list')}}">Legal Consultants</a></li>
                        <li><a class="menu-item-has-children" href="{{route('our.law-firm-list')}}">Law Firms</a></li>
                        <li><a class="menu-item-has-children" href="{{route('our.legal-information')}}">Legal Information</a></li>
                        <li><a class="menu-item-has-children" href="{{route('our.courts')}}">Courts</a></li>
                        <li><a class="menu-item-has-children" href="{{route('our.legal-news')}}">Legal News</a></li>
                        <li><a class="menu-item-has-children" href="{{route('video.list')}}">Videos</a></li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
        </div>
    </div>
</div>

<!-- SEARCH MODAL -->
<div class="modal fade hs-search-modal" id="searchModal" tabindex="-1"
     aria-labelledby="searchModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered hs-modal-dialog">

        <div class="modal-content hs-modal-content">

            <button type="button" class="hs-modal-close" data-bs-dismiss="modal" aria-label="Close">
                &times;
            </button>

            <!-- Heading -->
            <div class="hs-modal-heading">
                <h2>
                    Find the Right
                    <span>Legal Professional</span>
                </h2>
                <p class="hs-desc">
                    আপনার প্রয়োজনের জন্য সঠিক আইনজীবী ও আইনি পরামর্শদাতা খুঁজে নিন
                </p>
                <p class="hs-count">
                    Barristers:1,500. Advocates:2,200. Law Firms:250.<br>
                    Legal Consultant:3,700. Lawyers:7650.
                </p>
            </div>

            <form class="hs-search-form" action="#" method="GET">

                <!-- First row -->
                <div class="hs-main-row">

                    <input type="text"
                           name="search"
                           class="form-control"
                           placeholder="Search by Name, Enrollment Number, Bar Number">

                    <button type="submit" class="btn hs-main-btn" style="background:#103C6D !important; border:1px solid #103C6D !important; color:#ffffff;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </button>

                </div>

                <!-- Second row -->
                <div class="hs-advanced-row">

                    <!-- Practice Area -->
                    <div class="hs-select">
                        <div class="hs-select-box">
                            <span class="hs-selected-text">Practice Area</span>
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <div class="hs-options">
                            <div class="hs-option" data-value="">Practice Area</div>
                            <div class="hs-option" data-value="criminal-law">Criminal Law</div>
                            <div class="hs-option" data-value="civil-law">Civil Law</div>
                            <div class="hs-option" data-value="family-law">Family Law</div>
                            <div class="hs-option" data-value="corporate-law">Corporate Law</div>
                        </div>
                        <input type="hidden" name="practice_area" value="">
                    </div>

                    <!-- Location -->
                    <div class="hs-select">
                        <div class="hs-select-box">
                            <span class="hs-selected-text">Location</span>
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <div class="hs-options">
                            <div class="hs-option" data-value="">Location</div>
                            <div class="hs-option" data-value="dhaka">Dhaka</div>
                            <div class="hs-option" data-value="chattogram">Chattogram</div>
                            <div class="hs-option" data-value="sylhet">Sylhet</div>
                            <div class="hs-option" data-value="rajshahi">Rajshahi</div>
                        </div>
                        <input type="hidden" name="location" value="">
                    </div>

                    <!-- Court -->
                    <div class="hs-select hs-court">
                        <div class="hs-select-box">
                            <span class="hs-selected-text">Court</span>
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <div class="hs-options">
                            <div class="hs-option" data-value="">Court</div>
                            <div class="hs-option" data-value="supreme-court">Supreme Court</div>
                            <div class="hs-option" data-value="high-court">High Court</div>
                            <div class="hs-option" data-value="district-court">District Court</div>
                        </div>
                        <input type="hidden" name="court" value="">
                    </div>

                    <button type="submit" class="btn hs-advanced-btn">
                        <i class="fa fa-search"></i> Search
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

<style>
    /* ===== Header Search Modal ===== */
    .hs-search-modal .hs-modal-dialog {
        max-width: 760px;
    }

    .hs-search-modal .hs-modal-content {
        position: relative;
        padding: 25px 20px 20px;
        background: #103C6D;
        border: 0;
        border-radius: 15px;
        overflow: visible;
    }

    .hs-modal-close {
        position: absolute;
        top: 6px;
        right: 14px;
        background: transparent;
        border: 0;
        font-size: 28px;
        line-height: 1;
        color: #ffffff;
        cursor: pointer;
    }

    /* Heading */
    .hs-modal-heading {
        text-align: left;
        margin-bottom: 12px;
    }

    .hs-modal-heading h2 {
        margin: 0 0 5px;
        color: #ffffff;
        font-size: 36px;
        font-weight: 700;
        line-height: 1.15;
    }

    .hs-modal-heading h2 span {
        display: block;
        color: #f2b33d;
    }

    .hs-modal-heading .hs-desc {
        margin: 0 0 6px;
        color: #ffffff;
        font-size: 15px;
        line-height: 1.5;
    }

    .hs-modal-heading .hs-count {
        margin: 0;
        color: #ffffff;
        font-size: 15px;
        font-weight: bold;
        line-height: 1.5;
    }

    /* White search box */
    .hs-search-form {
        padding: 8px 10px;
        background: #ffffff;
        border-radius: 15px;
    }

    .hs-main-row {
        display: grid;
        grid-template-columns: 1fr 115px;
        gap: 7px;
        margin-bottom: 7px;
    }

    .hs-main-row .form-control {
        height: 48px;
        padding: 0 14px;
        border: 1px solid #e2e5e9;
        border-radius: 6px;
        box-shadow: none;
        font-size: 13px;
        color: #555f70;
    }

    .hs-main-btn {
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 6px !important;
    }

    .hs-main-btn:hover {
        background: #087fd0 !important;
        border-color: #087fd0 !important;
    }

    .hs-advanced-row {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 115px;
        gap: 7px;
    }

    .hs-select {
        position: relative;
    }

    .hs-select-box {
        position: relative;
        display: flex;
        align-items: center;
        height: 48px;
        padding: 0 32px 0 12px;
        background: #ffffff;
        border: 1px solid #e2e5e9;
        border-radius: 6px;
        color: #555f70;
        font-size: 12px;
        cursor: pointer;
        box-sizing: border-box;
    }

    .hs-selected-text {
        display: block;
        width: 100%;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .hs-select-box i {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        color: #778292;
        font-size: 9px;
        transition: transform 0.2s ease;
    }

    .hs-select.open .hs-select-box i {
        transform: translateY(-50%) rotate(180deg);
    }

    .hs-options {
        position: absolute;
        top: calc(100% + 4px);
        left: 0;
        width: 100%;
        max-height: 220px;
        overflow-y: auto;
        background: #ffffff;
        border: 1px solid #e2e5e9;
        border-radius: 6px;
        box-shadow: 0 6px 18px rgba(0,0,0,0.15);
        opacity: 0;
        visibility: hidden;
        transform: translateY(-5px);
        transition: all 0.2s ease;
        z-index: 9999;
    }

    .hs-select.open .hs-options {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .hs-option {
        padding: 10px 12px;
        color: #555f70;
        font-size: 12px;
        cursor: pointer;
    }

    .hs-option:hover {
        background: #f4f7fb;
        color: #123b6d;
    }

    .hs-option.selected {
        background: #f0f5fb;
        color: #123b6d;
        font-weight: 600;
    }

    .hs-advanced-btn {
        height: 48px;
        padding: 0 9px !important;
        background: #f2b33d !important;
        border: 1px solid #f2b33d !important;
        border-radius: 6px !important;
        color: #ffffff;
        font-size: 15px;
        font-weight: 600;
        white-space: nowrap;
    }

    .hs-advanced-btn:hover {
        background: #103C6D !important;
        border-color: #103C6D !important;
    }

    @media (max-width: 767px) {
        .hs-modal-heading {
            text-align: center;
        }

        .hs-modal-heading h2 {
            font-size: 26px;
        }

        .hs-modal-heading .hs-desc,
        .hs-modal-heading .hs-count {
            font-size: 12px;
        }

        .hs-main-row {
            grid-template-columns: 1fr 55px;
        }

        .hs-advanced-row {
            grid-template-columns: 1fr 1fr;
        }

        .hs-court,
        .hs-advanced-btn {
            grid-column: 1 / -1;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const hsSelects = document.querySelectorAll('.hs-select');

    hsSelects.forEach(function (select) {

        const box = select.querySelector('.hs-select-box');
        const options = select.querySelectorAll('.hs-option');
        const text = select.querySelector('.hs-selected-text');
        const hidden = select.querySelector('input[type="hidden"]');

        box.addEventListener('click', function (e) {
            e.stopPropagation();

            hsSelects.forEach(function (other) {
                if (other !== select) {
                    other.classList.remove('open');
                }
            });

            select.classList.toggle('open');
        });

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

    document.addEventListener('click', function () {
        hsSelects.forEach(function (select) {
            select.classList.remove('open');
        });
    });

});
</script>