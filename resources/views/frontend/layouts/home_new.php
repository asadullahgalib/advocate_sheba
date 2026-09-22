<!DOCTYPE html>
<html lang="eng">
<head>
        <!--================= Meta tag =================-->
        <meta charset="utf-8">
        <title>Doctors Sheba</title>
        <meta name="description" content="">
        <!--================= Responsive Tag =================-->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--================= Favicon =================-->
        <link rel="apple-touch-icon" href="{{asset('frontend/new')}}/assets/images/fav.jpg">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/new')}}/assets/images/fav.jpg">        
        <!--================= Bootstrap V5 css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/new')}}/assets/css/bootstrap.min.css">
        <!--================= Menus css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/new')}}/assets/css/menus.css">               
        <!--================= Animate css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/new')}}/assets/css/animate.css">
        <!--================= Owl Carousel css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/new')}}/assets/css/owl.carousel.css">
        <!--================= Elegant icon css  =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/new')}}/assets/fonts/elegant-icon.css">
        <!--================= Magnific Popup css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/new')}}/assets/css/magnific-popup.css">
        <!--================= Animations css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/new')}}/assets/css/animations.css">  
        <!--================= style css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/new')}}/assets/css/style.css">
        <!--================= Custom Spacing css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/new')}}/assets/css/custom-spacing.css">
        <!--================= Responsive css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/new')}}/assets/css/responsive.css">
    </head>
    <body> 
        <!--================= Preloader Section Start Here =================-->        
        <!-- <div id="react__preloader">
            <div id="react__circle_loader"></div>
            <div class="react__loader_logo"><img src="{{asset('frontend/new')}}/assets/images/preload.png" alt="Preload"></div>
        </div> -->        
        <!--================= Preloader Section End Here =================-->

        <!--================= Header Section Start Here =================-->
        <header id="react-header" class="react-header">
            <div class="topbar-area style1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="topbar-contact">
                               <ul>                                   
                                   <li>
                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                       <a href="tel:+880 1861-187676"> +880 1861-187676</a>
                                   </li>
                                   <li>
                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                       <a href="mailto:info@doctorsshebabd.com">info@doctorsshebabd.com</a>
                                   </li>
                                   
                               </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 text-right">
                            <div class="toolbar-sl-share">
                                <ul class="social-links">
                                    <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                                    <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                                    <li><a href="#"><span aria-hidden="true" class="social_linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-part">
                <div class="container">
                    <!--================= Menu Start Here =================-->
                    <div class="react-main-menu">
                        <nav>
                            <!--================= Menu Toggle btn =================-->
                            <div class="menu-toggle">
                                <div class="logo"><a href="{{url('')}}" class="logo-text"> <img src="{{asset('frontend/new')}}/assets/images/loogo.jpg" alt="logo"> </a></div>
                                <button type="button" id="menu-btn">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!--================= Menu Structure =================--> 
                            <div class="react-inner-menus">
                                <ul id="backmenu" class="react-menus home react-sub-shadow">
                                    <li> <a href="{{url('')}}">Home</a></li>
                                    <li> <a href="#">Doctors</a></li>
                                    <li> <a href="#">Hospitals</a></li>
                                    <li> <a href="#">Diagnostics</a></li>
                                    <li> <a href="#">Ambulance Service</a></li>
                                    <li> <a href="#">Blood Donar</a></li>
                                    <li> <a href="#">Pharmacy</a></li>

                                    <!-- <li> <a href="#">Home</a>
                                        <ul>
                                            <li> <a href="{{url('')}}">Home One</a></li>
                                            <li> <a href="index-two.html">Home Two</a></li>
                                        </ul>
                                    </li> -->

                                    <li> <a href="#">Contact</a></li>
                                </ul>                                
                                <div class="searchbar-part"> 
                                    <div class="react-login">
                                    <a href="login.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></a>
                                    </div>                                                                       
                                    <form class="search-form">
                                        <input type="text" class="form-input" placeholder="Search Doctors">
                                        <button type="submit" class="form-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <!--=================  Menu End Here  =================-->
                </div>
            </div>
        </header>
        <!--================= Header Section End Here =================-->

        <!--================= Wrapper Start Here =================-->
        <div class="react-wrapper">
            <div class="react-wrapper-inner">
                
                <!--================= Slider Section Start Here =================-->
                <div class="react-slider-part">
                    <div class="home-sliders home2 owl-carousel">
                        <div class="single-slide">
                            <div class="slider-img">
                                <img class="desktop" src="{{asset('frontend/new')}}/assets/images/slider/bg-2.jpg" alt="Slider Image 1">
                                <img class="mobile" src="{{asset('frontend/new')}}/assets/images/slider/11.jpg" alt="Slider Image 1">
                            </div>
                            <div class="container">
                                <div class="slider-content">
                                    <div class="content-part">
                                        <!-- <span class="slider-pretitle">Great Quality Cocial life</span> -->
                                        <h2 class="slider-title">
                                            Discover the world of<br>
                                            possible university.
                                        </h2>
                                        <div class="slider-btn">
                                            <!-- <a href="about.html" class="react-btn-border">Admissions</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                        <div class="single-slide">
                            <div class="slider-img">
                                <img class="desktop" src="{{asset('frontend/new')}}/assets/images/slider/bg-3.jpg" alt="Slider Image 1">
                                <img class="mobile" src="{{asset('frontend/new')}}/assets/images/slider/12.jpg" alt="Slider Image 1">
                            </div>
                            <div class="container">
                                <div class="slider-content">
                                    <div class="content-part">
                                        <!-- <span class="slider-pretitle">Great Quality Cocial life</span> -->
                                        <h2 class="slider-title">
                                            Discover the world of<br>
                                            possible university.
                                        </h2>
                                        <div class="slider-btn">
                                            <!-- <a href="about.html" class="react-btn-border">Admissions</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
                <!--================= Slider Section End Here =================-->

                <!--=================  Popular Topics Section Start Here ================= -->
                <div class="react_populars_topics pt---120 pb---120" style="padding: 40px 0px 10px 0px;">
                    <div class="container"> 
                        <div class="react__title__section react__title__section2" style="padding-bottom: 0px;">
                            <div class="row align-v">
                                <div class="col-md-8 doctor_left_div">
                                    <h2 class="react__tittle" style="font-size: 20px;margin-bottom: -15px;">Doctors by Specialty </h2>
                                    <p>Find the right doctor by specialty</p>
                                </div>
                                <div class="col-md-4 text-right doctor_right_div">
                                    <a href="#" style="background:#fff;color: #00306e;">
                                        View all <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                    </a>
                                </div>
                            </div>
                            
                        </div>                       
                        <div class="row pt---30" style="padding-top: 5px;">
                            <div class="col-md-3 doctor_custom_div">
                                <div class="item__inner" style="padding: 5px 30px 20px;">                                    
                                    <!-- <div class="icon">
                                        <img src="assets/images/topics/1.svg" alt="Icon image">
                                    </div> -->
                                    <div class="react-content">
                                       <h3 class="react-title">
                                          <a href="#">Cancer Specialist</a>
                                          <p>300 Doctor</p>
                                       </h3>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-md-3 doctor_custom_div">
                                <div class="item__inner" style="padding: 5px 30px 20px;">                                    
                                    <!-- <div class="icon">
                                        <img src="assets/images/topics/1.svg" alt="Icon image">
                                    </div> -->
                                    <div class="react-content">
                                       <h3 class="react-title">
                                          <a href="#">Cardiologist</a>
                                          <p>300 Doctor</p>
                                       </h3>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-md-3 doctor_custom_div">
                                <div class="item__inner" style="padding: 5px 30px 20px;">                                    
                                    <!-- <div class="icon">
                                        <img src="assets/images/topics/1.svg" alt="Icon image">
                                    </div> -->
                                    <div class="react-content">
                                       <h3 class="react-title">
                                          <a href="#">Child Specialist</a>
                                          <p>300 Doctor</p>
                                       </h3>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-md-3 doctor_custom_div">
                                <div class="item__inner" style="padding: 5px 30px 20px;">                                    
                                    <!-- <div class="icon">
                                        <img src="assets/images/topics/1.svg" alt="Icon image">
                                    </div> -->
                                    <div class="react-content">
                                       <h3 class="react-title">
                                          <a href="#">Diabetologist</a>
                                          <p>300 Doctor</p>
                                       </h3>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-md-3 doctor_custom_div">
                                <div class="item__inner" style="padding: 5px 30px 20px;">                                    
                                    <!-- <div class="icon">
                                        <img src="assets/images/topics/1.svg" alt="Icon image">
                                    </div> -->
                                    <div class="react-content">
                                       <h3 class="react-title">
                                          <a href="#">Gynecologist</a>
                                          <p>300 Doctor</p>
                                       </h3>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-md-3 doctor_custom_div">
                                <div class="item__inner" style="padding: 5px 30px 20px;">                                    
                                    <!-- <div class="icon">
                                        <img src="assets/images/topics/1.svg" alt="Icon image">
                                    </div> -->
                                    <div class="react-content">
                                       <h3 class="react-title">
                                          <a href="#">Cancer Specialist</a>
                                          <p>300 Doctor</p>
                                       </h3>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-md-3 doctor_custom_div">
                                <div class="item__inner" style="padding: 5px 30px 20px;">                                    
                                    <!-- <div class="icon">
                                        <img src="assets/images/topics/1.svg" alt="Icon image">
                                    </div> -->
                                    <div class="react-content">
                                       <h3 class="react-title">
                                          <a href="#">Neurologist</a>
                                          <p>300 Doctor</p>
                                       </h3>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-md-3 doctor_custom_div">
                                <div class="item__inner" style="padding: 5px 30px 20px;">                                    
                                    <!-- <div class="icon">
                                        <img src="assets/images/topics/1.svg" alt="Icon image">
                                    </div> -->
                                    <div class="react-content">
                                       <h3 class="react-title">
                                          <a href="#">Cancer Specialist</a>
                                          <p>300 Doctor</p>
                                       </h3>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=================  Popular Topics Section End Here ================= -->

                <!--=================  Popular Topics Section Start Here ================= -->
                <div class="react_populars_topics pt---120 pb---120" style="padding: 0px 0px 10px 0px;">
                    <div class="container"> 
                        <div class="react__title__section react__title__section2" style="padding-bottom: 0px;">
                            <div class="row align-v">
                                <div class="col-md-8 doctor_left_div">
                                    <h2 class="react__tittle" style="font-size: 20px;margin-bottom: -15px;">Doctors by Location </h2>
                                    <p>Find the right doctor by location</p>
                                </div>
                                <div class="col-md-4 text-right doctor_right_div">
                                    <a href="#" style="background:#fff;color: #00306e;">
                                        View all <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                    </a>
                                </div>
                            </div>
                            
                        </div>                       
                        <div class="row pt---30" style="padding-top: 5px;">
                            <div class="col-md-3 doctor_custom_div">
                                <div class="item__inner" style="padding: 5px 30px 20px;">                                    
                                    <!-- <div class="icon">
                                        <img src="assets/images/topics/1.svg" alt="Icon image">
                                    </div> -->
                                    <div class="react-content">
                                       <h3 class="react-title">
                                          <a href="#">Dhaka</a>
                                       </h3>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-md-3 doctor_custom_div">
                                <div class="item__inner" style="padding: 5px 30px 20px;">                                    
                                    <!-- <div class="icon">
                                        <img src="assets/images/topics/1.svg" alt="Icon image">
                                    </div> -->
                                    <div class="react-content">
                                       <h3 class="react-title">
                                          <a href="#">Rangpur</a>
                                       </h3>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-md-3 doctor_custom_div">
                                <div class="item__inner" style="padding: 5px 30px 20px;">                                    
                                    <!-- <div class="icon">
                                        <img src="assets/images/topics/1.svg" alt="Icon image">
                                    </div> -->
                                    <div class="react-content">
                                       <h3 class="react-title">
                                          <a href="#">Gazipur</a>
                                       </h3>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-md-3 doctor_custom_div">
                                <div class="item__inner" style="padding: 5px 30px 20px;">                                    
                                    <!-- <div class="icon">
                                        <img src="assets/images/topics/1.svg" alt="Icon image">
                                    </div> -->
                                    <div class="react-content">
                                       <h3 class="react-title">
                                          <a href="#">Rajhshahi</a>
                                       </h3>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-md-3 doctor_custom_div">
                                <div class="item__inner" style="padding: 5px 30px 20px;">                                    
                                    <!-- <div class="icon">
                                        <img src="assets/images/topics/1.svg" alt="Icon image">
                                    </div> -->
                                    <div class="react-content">
                                       <h3 class="react-title">
                                          <a href="#">Narayanganj</a>
                                       </h3>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-md-3 doctor_custom_div">
                                <div class="item__inner" style="padding: 5px 30px 20px;">                                    
                                    <!-- <div class="icon">
                                        <img src="assets/images/topics/1.svg" alt="Icon image">
                                    </div> -->
                                    <div class="react-content">
                                       <h3 class="react-title">
                                          <a href="#">Bogra</a>
                                       </h3>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-md-3 doctor_custom_div">
                                <div class="item__inner" style="padding: 5px 30px 20px;">                                    
                                    <!-- <div class="icon">
                                        <img src="assets/images/topics/1.svg" alt="Icon image">
                                    </div> -->
                                    <div class="react-content">
                                       <h3 class="react-title">
                                          <a href="#">Cumillah</a>
                                       </h3>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-md-3 doctor_custom_div">
                                <div class="item__inner" style="padding: 5px 30px 20px;">                                    
                                    <!-- <div class="icon">
                                        <img src="assets/images/topics/1.svg" alt="Icon image">
                                    </div> -->
                                    <div class="react-content">
                                       <h3 class="react-title">
                                          <a href="#">Khulna</a>
                                       </h3>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=================  Popular Topics Section End Here ================= -->

                <!--=================  Service Section Start Here ================= -->
                <div class="react_popular_topics pt---100 pb---70">
                    <div class="container"> 
                        <div class="react__title__section text-left">
                            <h2 class="react__tittle">Academics</h2>
                            <img src="{{asset('frontend/new')}}/assets/images/line.png" alt="image">
                        </div>                       
                        <div class="row">
                            <div class="col-md-3">
                                <div class="item__inner">                                    
                                    <div class="icon">
                                        <img src="{{asset('frontend/new')}}/assets/images/service/1.png" alt="image">
                                    </div>
                                    <div class="react-content">
                                        <h3 class="react-title"><a href="coureses-grid.html">Let’s Talk Science</a></h3>
                                        <a href="#" class="r__link">Learn More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item__inner">                                    
                                    <div class="icon">
                                        <img src="{{asset('frontend/new')}}/assets/images/service/2.png" alt="image">
                                    </div>
                                    <div class="react-content">
                                        <h3 class="react-title"><a href="coureses-grid.html">Innovative Courses</a></h3>
                                        <a href="#" class="r__link">Learn More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item__inner">                                    
                                    <div class="icon">
                                        <img src="{{asset('frontend/new')}}/assets/images/service/3.png" alt="image">
                                    </div>
                                    <div class="react-content">
                                        <h3 class="react-title"><a href="coureses-grid.html">Cloud Storage</a></h3>
                                        <a href="#" class="r__link">Learn More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item__inner">                                    
                                    <div class="icon">
                                        <img src="{{asset('frontend/new')}}/assets/images/service/4.png" alt="image">
                                    </div>
                                    <div class="react-content">
                                        <h3 class="react-title"><a href="coureses-grid.html">Online Education</a></h3>
                                        <a href="#" class="r__link">Learn More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=================  Service Section End Here ================= -->

                <!--=================  About Section Start Here ================= -->
                <div class="about__area about__area_one p-relative pt---10 pb---120">
                    <div class="container">                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about__image">
                                    <img src="{{asset('frontend/new')}}/assets/images/about/ab.png" alt="About">
                                    <img class="react__shape__ab" src="{{asset('frontend/new')}}/assets/images/about/badge.png" alt="Shape Image">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about__content">
                                    <h2 class="about__title">Welcome to <br> <em>Echooling LMS Platform</em></h2>
                                    <p class="about__paragraph">Education is both the act of teaching knowledge to others and<br> the act of receiving knowledge from someone else.</p>
                                    <p class="about__paragraph2"> Have questions?  <a href="#"> Get Free Guide </a></p>
                                    <p>Education also refers to the knowledge received through schooling instruction <br>and to the institution of teaching as a whole. The main purpose of education <br>is the integral development of a person.</p>
                                    <ul>
                                        <li><a href="about.html" class="more-about"> Read More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a></li>
                                        <li class="last-li">
                                            <em>Get Support</em>
                                            <a href="mailto:support@react.com">support@react.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--================= About Section End Here ================= -->

                <!--=================  Campus Section Start Here ================= -->
                <div class="campus_sec pt---100 pb---110">
                    <div class="container">
                        <div class="react__title__section text-center">
                            <h2 class="react__tittle">Campus Life</h2>
                            <img src="{{asset('frontend/new')}}/assets/images/line.png" alt="image">
                        </div>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="about__content">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('frontend/new')}}/assets/images/campus/1.svg" alt="image">
                                            </div>
                                            <div class="text">
                                                <h4>Do More, Stress Less</h4>
                                                <p>Why I say old chap that is spiffing he legged <br>it in my flat easy peasy.</p>
                                            </div>
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('frontend/new')}}/assets/images/campus/2.svg" alt="image">
                                            </div>
                                            <div class="text">
                                                <h4>The Business Intelligence</h4>
                                                <p>Why I say old chap that is spiffing he legged <br>it in my flat easy peasy.</p>
                                            </div>
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{asset('frontend/new')}}/assets/images/campus/3.svg" alt="image">
                                            </div>
                                            <div class="text">
                                                <h4>System Administration</h4>
                                                <p>Why I say old chap that is spiffing he legged <br>it in my flat easy peasy.</p>
                                            </div>
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                        </li>
                                    </ul>  
                                </div>                              
                            </div>
                            <div class="col-lg-5">                                
                                <div class="about__image">
                                    <img src="{{asset('frontend/new')}}/assets/images/campus/4.png" alt="image">
                                    <img class="shape-1" src="{{asset('frontend/new')}}/assets/images/campus/shape.png" alt="image">
                                </div>                                
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#" class="more-about"> More about Campus Life <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                        </div>
                    </div>
                </div>
                <!--================= Campus Section End Here ================= -->

                <!--================= Popular Course Section Start Here =================-->
                <div class="popular__course__area pt---100 pb---100">
                    <div class="container">
                        <div class="react__title__section text-center">
                            <h2 class="react__tittle">Popular Courses</h2>
                            <img src="{{asset('frontend/new')}}/assets/images/line.png" alt="image">
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="course__item mb-30">
                                    <div class="course__thumb">
                                        <a href="coureses-single.html"><img src="{{asset('frontend/new')}}/assets/images/course/1.png" alt="image"></a>
                                    </div>
                                    <div class="course__inner">
                                        <ul>
                                            <li>UX Design</li>
                                            <li>24 Lessons</li>
                                        </ul>
                                        <h3 class="react-course-title"><a href="coureses-single.html">Dave conservatoire is the<br> Entirely free online.</a></h3>
                                        <div class="course__card-icon d-flex align-items-center">
                                            <div class="course__card-icon--1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                <span>77 Students</span>
                                            </div>                                            
                                            <div class="react__user">
                                                $68.00
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="course__item mb-30">
                                    <div class="course__thumb">
                                        <a href="coureses-single.html"><img src="{{asset('frontend/new')}}/assets/images/course/2.png" alt="image"></a>
                                    </div>
                                    <div class="course__inner">
                                        <ul>
                                            <li>UX Design</li>
                                            <li>39 Lessons</li>
                                        </ul>
                                        <h3 class="react-course-title"><a href="coureses-single.html">Strategy law and <br> Organization foundation.</a></h3>
                                        <div class="course__card-icon d-flex align-items-center">
                                            <div class="course__card-icon--1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                <span>99 Students</span>
                                            </div>                                            
                                            <div class="react__user">
                                                $99.00
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="course__item mb-30">
                                    <div class="course__thumb">
                                        <a href="coureses-single.html"><img src="{{asset('frontend/new')}}/assets/images/course/3.png" alt="image"></a>
                                    </div>
                                    <div class="course__inner">
                                        <ul>
                                            <li>UX Design</li>
                                            <li>20 Lessons</li>
                                        </ul>
                                        <h3 class="react-course-title"><a href="coureses-single.html">Python for Data Science & <br> Machine Learning</a></h3>
                                        <div class="course__card-icon d-flex align-items-center">
                                            <div class="course__card-icon--1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                <span>68 Students</span>
                                            </div>                                            
                                            <div class="react__user">
                                                $79.00
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="course__item mb-30">
                                    <div class="course__thumb">
                                        <a href="coureses-single.html"><img src="{{asset('frontend/new')}}/assets/images/course/4.png" alt="image"></a>
                                    </div>
                                    <div class="course__inner">
                                        <ul>
                                            <li>UX Design</li>
                                            <li>26 Lessons</li>
                                        </ul>
                                        <h3 class="react-course-title"><a href="coureses-single.html">The complete web develop <br>Ment bootcamp.</a></h3>
                                        <div class="course__card-icon d-flex align-items-center">
                                            <div class="course__card-icon--1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                <span>84 Students</span>
                                            </div>                                            
                                            <div class="react__user">
                                                $120.00
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#" class="view-courses"> View All Courses <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                        </div>
                    </div>
                </div>
                <!--================= Popular Course Section End Here =================-->

                <!--================= Counter Section Start Here =================-->
                <div class="count__area pb---110">
                    <div class="container count__width">
                        <div class="row">
                            <div class="col-xxl-11 col-xl-11 col-lg-11 offset-lg-1">
                                <div class="row">
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                        <div class="count__content">
                                            <p class="count__content--paragraph">Successfully <br>Trained</p>
                                            <h3 class="count__content--title-1 counter">1478</h3>
                                            <p class="count__content--paragraph2">Enrolled Learners</p>                                            
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                        <div class="count__content">
                                            <p class="count__content--paragraph">Available <br>Courses</p>
                                            <h3 class="count__content--title-1 counter">1731</h3>
                                            <p class="count__content--paragraph2">Countrywide Awards</p>                                            
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                        <div class="count__content">
                                            <p class="count__content--paragraph">Scheduled <br>Events</p>
                                            <h3 class="count__content--title-1 counter">280</h3>
                                            <p class="count__content--paragraph2">Success Events</p>                                            
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                        <div class="count__content">
                                            <p class="count__content--paragraph">Getting <br>Featured on</p>
                                            <h3 class="count__content--title-1 counter">1045</h3>
                                            <p class="count__content--paragraph2">Online Courses</p>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--================= Counter Section End Here =================-->

                <!--================= Upcoming Event Section Start Here =================-->
                <div class="react-upcoming__event blog__area">
                    <div class="container">
                        <div class="react__title__section text-center">
                            <h2 class="react__tittle">Upcoming Events</h2>
                            <img src="{{asset('frontend/new')}}/assets/images/line.png" alt="image">
                        </div>
                        <div class="event-slider owl-carousel">
                            <div class="event__card">
                                <div class="event__card--content">
                                    <div class="event__card--content-area">
                                        <div class="event__card--date"><em>10</em> April, 2022</div>
                                        <div class="event_time">10:30 AM - 12:30PM</div>
                                        <h3 class="event__card--title"><a href="#">A Better Alternative To <br> Grading Student Writing</a></h3>
                                        <div class="event_location"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> New York, USA</div>
                                        <a class="event__card--link" href="#"> Find Out More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                    </div>
                                </div>
                            </div>
                            <div class="event__card">
                                <div class="event__card--content">
                                    <div class="event__card--content-area">
                                        <div class="event__card--date"><em>14</em> February, 2022</div>
                                        <div class="event_time">12:00 AM - 01:30PM</div>
                                        <h3 class="event__card--title"><a href="#">12 Things Successful <br> Mompreneurs</a></h3>
                                        <div class="event_location"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> New York, USA</div>
                                        <a class="event__card--link" href="#"> Find Out More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                    </div>
                                </div>
                            </div>
                            <div class="event__card">
                                <div class="event__card--content">
                                    <div class="event__card--content-area">
                                        <div class="event__card--date"><em>26</em> March, 2022</div>
                                        <div class="event_time">01:30 AM - 02:00PM</div>
                                        <h3 class="event__card--title"><a href="#">Ethics in AI Live Event<br> Machines Judging.</a></h3>
                                        <div class="event_location"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> New York, USA</div>
                                        <a class="event__card--link" href="#"> Find Out More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                    </div>
                                </div>
                            </div>
                            <div class="event__card">
                                <div class="event__card--content">
                                    <div class="event__card--content-area">
                                        <div class="event__card--date"><em>19</em> April, 2022</div>
                                        <div class="event_time">03:00 AM - 04:30PM</div>
                                        <h3 class="event__card--title"><a href="#">The Importance Of <br> Intrinsic Motivation.</a></h3>
                                        <div class="event_location"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> New York, USA</div>
                                        <a class="event__card--link" href="#"> Find Out More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                    </div>
                                </div>
                            </div>
                            <div class="event__card">
                                <div class="event__card--content">
                                    <div class="event__card--content-area">
                                        <div class="event__card--date"><em>10</em> April, 2022</div>
                                        <div class="event_time">10:30 AM - 12:30PM</div>
                                        <h3 class="event__card--title"><a href="#">A Better Alternative To <br> Grading Student Writing</a></h3>
                                        <div class="event_location"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> New York, USA</div>
                                        <a class="event__card--link" href="#"> Find Out More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
                <!--================= Upcoming Event Section End Here =================-->
                <!--================= Clients Section Start Here =================--> 
                <div class="react-clients react-clientso home-testimonial pt---90 pb---120">
                    <div class="container">
                        <div class="react__title__section text-center">
                            <h2>What our student saying</h2>
                            <img src="{{asset('frontend/new')}}/assets/images/line.png" alt="image">
                        </div>
                        <div class="container">
                            <div class="client-slider owl-carousel">
                                <div class="single-client">
                                    <div class="client-bottom">                                        
                                        <span class="client-author"><img src="{{asset('frontend/new')}}/assets/images/testimonial/testimonial.png" alt="Testimonials"> </span>
                                    </div>                                    
                                    <div class="client-content">
                                        <span class="client-title">Justin Case <em> Student</em></span>
                                        <p>Nulla porttitor accumsan tincidunt. vamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in.</p>
                                        <div class="testimonial__ratings">
                                            <em class="icon_star"></em>
                                            <em class="icon_star"></em>
                                            <em class="icon_star"></em>
                                            <em class="icon_star"></em>
                                            <em class="icon_star_alt"></em>
                                            <span><em>4.9</em> (14 Reviews)</span>
                                        </div>
                                        <img class="comma" src="{{asset('frontend/new')}}/assets/images/testimonial/coma.png" alt="image">
                                    </div>                                
                                </div>
                                <div class="single-client">
                                    <div class="client-bottom">                                        
                                        <span class="client-author"><img src="{{asset('frontend/new')}}/assets/images/testimonial/testimonial.png" alt="Testimonials"> </span>
                                    </div>                                    
                                    <div class="client-content">
                                        <span class="client-title">Justin Case <em> Student</em></span>
                                        <p>Nulla porttitor accumsan tincidunt. vamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in.</p>
                                        <div class="testimonial__ratings">
                                            <em class="icon_star"></em>
                                            <em class="icon_star"></em>
                                            <em class="icon_star"></em>
                                            <em class="icon_star"></em>
                                            <em class="icon_star_alt"></em>
                                            <span><em>4.9</em> (14 Reviews)</span>
                                        </div>
                                        <img class="comma" src="{{asset('frontend/new')}}/assets/images/testimonial/coma.png" alt="image">
                                    </div>                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>             
                <!--================= Clients Section End Here =================--> 

                <!--================= Blog Section Start Here =================-->
                <div class="react-blog__area blog__area pt---120 pb---120 graybg-home">
                    <div class="container blog__width">
                        <div class="react__title__section text-center">                           
                            <h2 class="react__tittle"> Echooling News and Blogs </h2>
                            <img src="{{asset('frontend/new')}}/assets/images/line.png" alt="image">
                        </div>
                        <div class="row">
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="blog__card mb-50">
                                    <div class="blog__thumb w-img p-relative">
                                        <a class="blog__thumb--image" href="blog-details.html">
                                            <img src="{{asset('frontend/new')}}/assets/images/blog/1.jpg" alt="This the first card image">
                                        </a>
                                        <em class="b_date">April 12</em>
                                    </div>
                                    <div class="blog__card--content">
                                        <div class="blog__card--content-area mb-25">
                                            <span class="blog__card--date">Campaigns</span>
                                            <h3 class="blog__card--title"><a href="blog-details.html">Fostering future Schools <br> & social Innovation</a></h3>
                                        </div>
                                        <div class="blog__card--icon ">
                                            <div class="blog__card--icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <span>Nerte Gronw</span>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="blog__card mb-50">
                                    <div class="blog__thumb w-img p-relative">
                                        <a class="blog__thumb--image" href="blog-details.html">
                                            <img src="{{asset('frontend/new')}}/assets/images/blog/2.jpg" alt="This the first card image">
                                        </a>
                                        <em class="b_date">April 18</em>
                                    </div>
                                    <div class="blog__card--content">
                                        <div class="blog__card--content-area mb-25">
                                            <span class="blog__card--date">Education</span>
                                            <h3 class="blog__card--title"><a href="blog-details.html">The Surprising Reason <br> CollegeTuition</a></h3>
                                        </div>
                                        <div class="blog__card--icon d-flex align-items-center">
                                            <div class="blog__card--icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <span>Charlie Doyle</span>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="blog__card mb-50">
                                    <div class="blog__thumb w-img p-relative">
                                        <a class="blog__thumb--image" href="blog-details.html">
                                            <img src="{{asset('frontend/new')}}/assets/images/blog/3.jpg" alt="This the first card image">
                                        </a>
                                        <em class="b_date">June 16</em>
                                    </div>
                                    <div class="blog__card--content">
                                        <div class="blog__card--content-area mb-25">
                                            <span class="blog__card--date">Students</span>
                                            <h3 class="blog__card--title"><a href="blog-details.html">Those other <br> College Expenses about</a></h3>
                                        </div>
                                        <div class="blog__card--icon d-flex align-items-center">
                                            <div class="blog__card--icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <span>Owen Christ</span>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="blog__card mb-50">
                                    <div class="blog__thumb w-img p-relative">
                                        <a class="blog__thumb--image" href="blog-details.html">
                                            <img src="{{asset('frontend/new')}}/assets/images/blog/3.jpg" alt="This the first card image">
                                        </a>
                                        <em class="b_date">May 22</em>
                                    </div>
                                    <div class="blog__card--content">
                                        <div class="blog__card--content-area mb-25">
                                            <span class="blog__card--date">Strategy</span>
                                            <h3 class="blog__card--title"><a href="blog-details.html">Those other <br> College Expenses about</a></h3>
                                        </div>
                                        <div class="blog__card--icon d-flex align-items-center">
                                            <div class="blog__card--icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <span>Owen Christ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
                <!--================= Blog Section End Here =================-->
            </div>
        </div>
        <!--================= Wrapper End Here =================-->

        <!--================= Footer Section Start Here =================-->
        <footer id="react-footer" class="react-footer home-main">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 md-mb-30">
                            <div class="footer-widget footer-widget-1">
                                <div class="footer-logo white" style="margin-bottom: 35px;">
                                    <a href="{{url('')}}" class="logo-text"> <img src="{{asset('frontend/new')}}/assets/images/loogo.jpg" alt="logo"></a>
                                </div>
                                <ul class="footer-address">
                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg><a href="tel:+880 1861-187676"> +880 1861-187676 </a></li>
                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><a href="mailto:info@doctorsshebabd.com"> info@doctorsshebabd.com </a></li>
                                </ul>                               
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-30">
                            <div class="footer-widget footer-widget-2">
                                <h3 class="footer-title">About Us</h3>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">How It Works</a></li>
                                        <li><a href="#">For Doctors</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-30">
                            <div class="footer-widget footer-widget-3">
                                <h3 class="footer-title">Useful Links</h3>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="#">User Guide</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms of Use</a></li>
                                        <li><a href="#">Editorial Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="copyright">  
                <div class="container">                  
                    <div class="react-copy-left">Copyright © 2026 &nbsp; <a href="#">DoctorsShebabd</a> &nbsp; A disruptive Doctors Sheba BD </div>
                    <div class="react-copy-right">
                        <ul class="social-links">
                            <li class="follow">Follow us</li>
                            <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                            <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                            <li><a href="#"><span aria-hidden="true" class="social_linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--================= Footer Section End Here =================-->
        
        <!--================= Scroll to Top Start =================-->
        <div id="backscrollUp" class="home">
            <span aria-hidden="true" class="arrow_carrot-up"></span>
        </div> 
        <!--================= Scroll to Top End =================-->

        <!--================= Jquery latest version =================-->
        <script src="{{asset('frontend/new')}}/assets/js/jquery.min.js"></script>
        <!--================= Modernizr js =================-->
        <script src="{{asset('frontend/new')}}/assets/js/modernizr-2.8.3.min.js"></script>
        <!--================= Bootstrap js =================-->
        <script src="{{asset('frontend/new')}}/assets/js/bootstrap.min.js"></script>
        <!--================= Owl Carousel js =================-->
        <script src="{{asset('frontend/new')}}/assets/js/owl.carousel.min.js"></script>
        <!--================= Magnific Popup =================-->
        <script src="{{asset('frontend/new')}}/assets/js/jquery.magnific-popup.min.js"></script>
        <!--================= Counter up js =================-->
        <script src="{{asset('frontend/new')}}/assets/js/jquery.counterup.min.js"></script>
        <script src="{{asset('frontend/new')}}/assets/js/waypoints.min.js"></script>
        <!--================= Wow js =================-->
        <script src="{{asset('frontend/new')}}/assets/js/wow.min.js"></script>                
        <!--================= menus js =================-->
        <script src="{{asset('frontend/new')}}/assets/js/menus.js"></script>
        <!--================= Plugins js =================-->
        <script src="{{asset('frontend/new')}}/assets/js/plugins.js"></script>       
      <!--================= Main js =================-->
        <script src="{{asset('frontend/new')}}/assets/js/main.js"></script>
    </body>
</html>