<header class="header-area header-style-1 header-height-2">
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="{{url('')}}"><img src="{{asset('uploads/logo_images/'.@$logo->image)}}" alt="Shastho Plus logo" /></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-categori-wrap d-none d-lg-block">
                    </div>
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                        <nav>
                            <ul>
                                <a href="{{url('')}}">
                                    <img src="{{asset('uploads/logo_images/'.@$logo->image)}}" style="width: 300px;margin-bottom: -20px;">
                                </a>
                                <li><a class="{{(@$page_type=='home')?'custom_menu':''}}" href="{{url('')}}">Home</a></li>
                                <li><a class="{{(@$page_type=='category')?'custom_menu':''}}" href="{{route('our.category-list')}}">Categories</a></li>
                                <li><a class="{{(@$page_type=='doctor')?'custom_menu':''}}" href="{{route('our.doctor-list')}}">Find</a></li>
                                <li><a class="{{(@$page_type=='facilities')?'custom_menu':''}}" href="{{route('our.promotion-list')}}">Facilities</a></li>
                                <li><a class="{{(@$page_type=='doctor-registration')?'custom_menu':''}}" href="{{route('our.doctor-registration')}}">Registration</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="hotline d-none d-lg-flex">
                    <a href="{{url('/login')}}" title="Login" style="font-size: 18px;">
                        <span class="pro-count white" style="color:#1B489D !important"><i class="fa fa-user"></i> Login</span>
                    </a>
                </div>
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
                        <li class="menu-item-has-children"><a href="{{route('our.category-list')}}">Categories</a></li>
                        <!-- <li class="menu-item-has-children"><a href="{{route('our.department-list')}}">Departments</a></li> -->
                        <li class="menu-item-has-children"><a href="{{route('our.doctor-list')}}">Find</a></li>
                        <li class="menu-item-has-children"><a href="{{route('our.promotion-list')}}">Facilities</a></li>
                        <li class="menu-item-has-children"><a href="{{route('our.doctor-registration')}}">Registration</a></li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
        </div>
    </div>
</div>