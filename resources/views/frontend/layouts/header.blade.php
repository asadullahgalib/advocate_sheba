<link rel="stylesheet" type="text/css" href="{{asset('assets/css/rating.css')}}">

<header class="header-area header-style-1 header-height-2">
    <div class="header-top header-top-ptb-1 d-lg-block">
        <div class="container">
            <div class="row align-items-center" style="padding: 5px 0px;">
                <div class="col-xl-12 col-lg-12">
                    <div class="header-info header-info-right">
                        <ul>
                            <li> 
                                <a class="search-btn" data-bs-toggle="modal" data-bs-target="#searchModal">
                                    <i class="fa fa-search" aria-hidden="true"></i> Search
                                </a> 
                            </li>
                            <li> 
                                <a href="#">
                                    <i class="fa fa-sign-in" aria-hidden="true"></i> Registration
                                </a> 
                            </li>
                            <li class="mobile_top_login"> 
                                <a href="#">
                                    <i class="fa fa-user" aria-hidden="true"></i> Login
                                </a> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom header-bottom-bg-color sticky-bar">
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
                                <li><a class="" href="#">Legal Information</a></li>
                                <li><a class="" href="#">Courts</a></li>
                                <li><a class="" href="#">Legal News</a></li>
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
                                <span class="pro-count white"><i class="fa fa-user"></i> Login</span>
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
                        <li><a class="menu-item-has-children" href="#">Legal Information</a></li>
                        <li><a class="menu-item-has-children" href="#">Courts</a></li>
                        <li><a class="menu-item-has-children" href="#">Legal News</a></li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="searchModal" tabindex="-1"
     aria-labelledby="searchModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered review-modal-dialog">

        <div class="modal-content review-modal-content">

            <!-- Close Button -->
            <button type="button"
                    class="review-modal-close"
                    data-bs-dismiss="modal"
                    aria-label="Close">

                <i class="bi bi-x-lg"></i>

            </button>


            <div class="modal-body review-modal-body">

                <form action="#" method="POST" id="doctorReviewForm">

                    @csrf

                    <!-- Email -->
                    <div class="review-form-group email-group"  style="margin-bottom: 15px;">

                        <input type="search"
                               name="search" 
                               class="form-control"
                               placeholder="Search Here*"
                               required>

                    </div>


                    <!-- Submit -->
                    <button type="submit"
                            class="submit-review-btn"
                            style="padding: 5px 40px;">

                        Search

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>