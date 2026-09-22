@extends('frontend.layouts.master')
@section('content')
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="{{asset('public')}}/frontend/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('public')}}/frontend/assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="{{asset('public')}}/frontend/assets/vendors/jquery.min.js"></script>
    <script src="{{asset('public')}}/frontend/assets/owlcarousel/owl.carousel.js"></script>
    <style type="text/css">
        .card .card-header {
            padding: 5px 0px 0px 15px !important;
        }

        .form-group {
            margin-bottom: 0px !important;
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1px 15px !important;
        }
    </style>

    <main class="main pages" style="background-color: #f5f5f5;border-radius: 15px;margin-bottom: 10px;">
        <div class="page-content pt-50" style="padding:20px 0px 10px 0px !important">
            <div class="container">
                <div class="archive-header-2">
                    <h1 class="display-2 mb-50 text-brand"
                        style="font-size: 25px;text-align: center; margin-bottom: 30px !important;">Doctor Profile</h1>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xl-3">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap" style="padding: 0px 0px 0 0px !important;">
                                    <div class="product-img product-img-zoom">
                                        <img class="default-img" src="{{ asset('public/upload/employee_images/' . $doctor->image) }}"
                                                alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-9 col-md-9 col-xl-9 col-sm-9">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap" style="padding: 0px 0px 0 0px !important;">
                                            <div class="product-img product-img-zoom">
                                               <div class="bs-callout bs-callout-danger">
                                                  <h4>Official Information:</h4>
                                                  <p><strong>Name:</strong> Md. Asadullah Galib</p>
                                                  <p><strong>Deparment:</strong> Medical</p>
                                                  <p><strong>Qualification:</strong> Lorem ipsum dolor sit amet</p>
                                                  <p><strong>BMDC No:</strong> Lorem ipsum dolor sit amet</p>
                                                  <p><strong>Code:</strong> 587444</p>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap" style="padding: 0px 0px 0 0px !important;">
                                            <div class="product-img product-img-zoom">
                                               <div class="bs-callout bs-callout-danger">
                                                  <h4>Chamber:</h4>
                                                  <p><strong>Name:</strong> Md. Asadullah Galib</p>
                                                  <p><strong>Details:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap" style="padding: 0px 0px 0 0px !important;">
                                            <div class="product-img product-img-zoom">
                                               <div class="bs-callout bs-callout-danger">
                                                  <h4>Training:</h4>
                                                  <p><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i></strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                                                  <p><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i></strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap" style="padding: 0px 0px 0 0px !important;">
                                            <div class="product-img product-img-zoom">
                                               <div class="bs-callout bs-callout-danger">
                                                  <h4>Achievement:</h4>
                                                  <p><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i></strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                                                  <p><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i></strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap" style="padding: 0px 0px 0 0px !important;">
                                            <div class="product-img product-img-zoom">
                                               <div class="bs-callout bs-callout-danger">
                                                  <h4>Experience:</h4>
                                                  <p><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i></strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                                                  <p><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i></strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap" style="padding: 0px 0px 0 0px !important;">
                                            <div class="product-img product-img-zoom">
                                               <div class="bs-callout bs-callout-danger">
                                                  <h4>Schedule:</h4>
                                                  <p><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i></strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                                                  <p><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i></strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap" style="padding: 0px 0px 0 0px !important;">
                                            <div class="product-img product-img-zoom">
                                               <div class="bs-callout bs-callout-danger">
                                                  <h4>Appointment:</h4>
                                                  <p><strong>Contact No:</strong> 8455555555</p>
                                                  <a class="btn btn-info" href="{{route('our.doctor-details',$doctor->id)}}" style="max-width:150px;">Appointment</a>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>


                    </div>
                    <!--end vendor card-->
                </div>
            </div>
        </div>
    </main>

    <main class="main pages" style="background-color: #f5f5f5;border-radius: 15px;margin-bottom: 10px;">
        <div class="page-content pt-50" style="padding:20px 0px 10px 0px !important">
            <div class="container">
                <div class="archive-header-2">
                    <h1 class="display-2 mb-50 text-brand" style="font-size: 25px;text-align: center; margin-bottom: 30px !important;">Social Media</h1>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a target="_blank" href="#">
                                        <img class="default-img"
                                            src="{{ asset('public/frontend/profile.jpg') }}"
                                            alt="" style="width:100%;">
                                        <img class="hover-img"
                                            src="{{ asset('public/frontend/profile.jpg') }}"
                                            alt="" style="width:100%;">
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot"
                                        style="width:50px;border-radius: 5px 0 15px 0 !important;"><i class="fa fa-facebook"></i></span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2 style="padding-top:15px;font-size: 18px;">Asadullah Galib</h2>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a target="_blank" href="#">
                                        <img class="default-img"
                                            src="{{ asset('public/frontend/profile.jpg') }}"
                                            alt="" style="width:100%;">
                                        <img class="hover-img"
                                            src="{{ asset('public/frontend/profile.jpg') }}"
                                            alt="" style="width:100%;">
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot"
                                        style="width:50px;border-radius: 5px 0 15px 0 !important;"><i class="fa fa-facebook"></i></span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2 style="padding-top:15px;font-size: 18px;">Asadullah Galib</h2>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a target="_blank" href="#">
                                        <img class="default-img"
                                            src="{{ asset('public/frontend/profile.jpg') }}"
                                            alt="" style="width:100%;">
                                        <img class="hover-img"
                                            src="{{ asset('public/frontend/profile.jpg') }}"
                                            alt="" style="width:100%;">
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot"
                                        style="width:50px;border-radius: 5px 0 15px 0 !important;"><i class="fa fa-facebook"></i></span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2 style="padding-top:15px;font-size: 18px;">Asadullah Galib</h2>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a target="_blank" href="#">
                                        <img class="default-img"
                                            src="{{ asset('public/frontend/profile.jpg') }}"
                                            alt="" style="width:100%;">
                                        <img class="hover-img"
                                            src="{{ asset('public/frontend/profile.jpg') }}"
                                            alt="" style="width:100%;">
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot"
                                        style="width:50px;border-radius: 5px 0 15px 0 !important;"><i class="fa fa-facebook"></i></span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2 style="padding-top:15px;font-size: 18px;">Asadullah Galib</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <main class="main pages" style="background-color: #f5f5f5;border-radius: 15px;margin-bottom: 10px;">
        <div class="page-content pt-50" style="padding:20px 0px 10px 0px !important">
            <div class="container">
                <div class="archive-header-2">
                    <h1 class="display-2 mb-50 text-brand" style="font-size: 25px;text-align: center; margin-bottom: 30px !important;">Video Gallery</h1>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap" style="margin-bottom: 27px;">
                                <div class="product-img product-img-zoom">
                                    <iframe width="100%" src="https://www.youtube.com/embed/Qw5r5C7WUNg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap" style="margin-bottom: 27px;">
                                <div class="product-img product-img-zoom">
                                    <iframe width="100%" src="https://www.youtube.com/embed/Qw5r5C7WUNg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap" style="margin-bottom: 27px;">
                                <div class="product-img product-img-zoom">
                                    <iframe width="100%" src="https://www.youtube.com/embed/Qw5r5C7WUNg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap" style="margin-bottom: 27px;">
                                <div class="product-img product-img-zoom">
                                    <iframe width="100%" src="https://www.youtube.com/embed/Qw5r5C7WUNg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap" style="margin-bottom: 27px;">
                                <div class="product-img product-img-zoom">
                                    <iframe width="100%" src="https://www.youtube.com/embed/Qw5r5C7WUNg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap" style="margin-bottom: 27px;">
                                <div class="product-img product-img-zoom">
                                    <iframe width="100%" src="https://www.youtube.com/embed/Qw5r5C7WUNg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <main class="main pages" style="background-color: #f5f5f5;border-radius: 15px;margin-bottom: 10px;">
        <div class="page-content pt-50" style="padding:20px 0px 10px 0px !important">
            <div class="container">
                <div class="archive-header-2">
                    <h1 class="display-2 mb-50 text-brand" style="font-size: 25px;text-align: center; margin-bottom: 30px !important;">News & Health Tips</h1>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <article class="text-center hover-up mb-30 animated">
                            <div class="post-thumb">
                                <a href="blog-post-right.html">
                                    <img class="border-radius-15" src="{{ asset('public/frontend/profile.jpg') }}" alt="">
                                </a>
                                
                            </div>
                            <div class="entry-content-2">
                                <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                    <div>
                                        <span class="post-on mr-10">25 April 2022</span>
                                    </div>
                                </div>
                                <h4 class="post-title mb-15">
                                    <a href="blog-post-right.html" style="font-size:16px;">The Intermediate Guide to Healthy Food</a>
                                </h4>
                                <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                    <div>
                                        <p style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    </div>
                                </div>
                                <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                    <div>
                                        <span class="post-on mr-10">
                                            <a href="" class="btn btn-info btn-sm">Read more</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="text-center hover-up mb-30 animated">
                            <div class="post-thumb">
                                <a href="blog-post-right.html">
                                    <img class="border-radius-15" src="{{ asset('public/frontend/profile.jpg') }}" alt="">
                                </a>
                                
                            </div>
                            <div class="entry-content-2">
                                <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                    <div>
                                        <span class="post-on mr-10">25 April 2022</span>
                                    </div>
                                </div>
                                <h4 class="post-title mb-15">
                                    <a href="blog-post-right.html" style="font-size:16px;">The Intermediate Guide to Healthy Food</a>
                                </h4>
                                <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                    <div>
                                        <p style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    </div>
                                </div>
                                <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                    <div>
                                        <span class="post-on mr-10">
                                            <a href="" class="btn btn-info btn-sm">Read more</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="text-center hover-up mb-30 animated">
                            <div class="post-thumb">
                                <a href="blog-post-right.html">
                                    <img class="border-radius-15" src="{{ asset('public/frontend/profile.jpg') }}" alt="">
                                </a>
                                
                            </div>
                            <div class="entry-content-2">
                                <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                    <div>
                                        <span class="post-on mr-10">25 April 2022</span>
                                    </div>
                                </div>
                                <h4 class="post-title mb-15">
                                    <a href="blog-post-right.html" style="font-size:16px;">The Intermediate Guide to Healthy Food</a>
                                </h4>
                                <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                    <div>
                                        <p style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    </div>
                                </div>
                                <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                    <div>
                                        <span class="post-on mr-10">
                                            <a href="" class="btn btn-info btn-sm">Read more</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="text-center hover-up mb-30 animated">
                            <div class="post-thumb">
                                <a href="blog-post-right.html">
                                    <img class="border-radius-15" src="{{ asset('public/frontend/profile.jpg') }}" alt="">
                                </a>
                                
                            </div>
                            <div class="entry-content-2">
                                <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                    <div>
                                        <span class="post-on mr-10">25 April 2022</span>
                                    </div>
                                </div>
                                <h4 class="post-title mb-15">
                                    <a href="blog-post-right.html" style="font-size:16px;">The Intermediate Guide to Healthy Food</a>
                                </h4>
                                <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                    <div>
                                        <p style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    </div>
                                </div>
                                <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                    <div>
                                        <span class="post-on mr-10">
                                            <a href="" class="btn btn-info btn-sm">Read more</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="item">
                        <article class="text-center hover-up mb-30 animated">
                            <div class="post-thumb">
                                <a href="blog-post-right.html">
                                    <img class="border-radius-15" src="{{ asset('public/frontend/profile.jpg') }}" alt="">
                                </a>
                                
                            </div>
                            <div class="entry-content-2">
                                <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                    <div>
                                        <span class="post-on mr-10">25 April 2022</span>
                                    </div>
                                </div>
                                <h4 class="post-title mb-15">
                                    <a href="blog-post-right.html" style="font-size:16px;">The Intermediate Guide to Healthy Food</a>
                                </h4>
                                <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                    <div>
                                        <p style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                    </div>
                                </div>
                                <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                    <div>
                                        <span class="post-on mr-10">
                                            <a href="" class="btn btn-info btn-sm">Read more</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <main class="main pages" style="background-color: #f5f5f5;border-radius: 15px;margin-bottom: 10px;">
        <div class="page-content pt-50" style="padding:20px 0px 10px 0px !important">
            <div class="container">
                <div class="archive-header-2">
                    <h1 class="display-2 mb-50 text-brand" style="font-size: 25px;text-align: center; margin-bottom: 30px !important;">Photo Gallery</h1>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <a href="https://images.pexels.com/photos/62307/air-bubbles-diving-underwater-blow-62307.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
                            <img  src="https://images.pexels.com/photos/62307/air-bubbles-diving-underwater-blow-62307.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid "  alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://images.pexels.com/photos/38238/maldives-ile-beach-sun-38238.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"  class="fancybox" rel="ligthbox">
                            <img  src="https://images.pexels.com/photos/38238/maldives-ile-beach-sun-38238.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid"  alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://images.pexels.com/photos/158827/field-corn-air-frisch-158827.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="fancybox" rel="ligthbox">
                            <img  src="https://images.pexels.com/photos/158827/field-corn-air-frisch-158827.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="zoom img-fluid "  alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://images.pexels.com/photos/302804/pexels-photo-302804.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="fancybox" rel="ligthbox">
                            <img  src="https://images.pexels.com/photos/302804/pexels-photo-302804.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="zoom img-fluid "  alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
                            <img  src="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid "  alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
                            <img  src="https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid "  alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://images.pexels.com/photos/56005/fiji-beach-sand-palm-trees-56005.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="fancybox" rel="ligthbox">
                            <img  src="https://images.pexels.com/photos/56005/fiji-beach-sand-palm-trees-56005.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="zoom img-fluid "  alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <style type="text/css">
        #demo {
          height:100%;
          position:relative;
          overflow:hidden;
        }
        .green{
          background-color:#6fb936;
        }
        .thumb{
            margin-bottom: 30px;
        }
        .page-top{
            margin-top:85px;
        }
        img.zoom {
            width: 100%;
            height: 200px;
            border-radius:5px;
            object-fit:cover;
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
        }
        .transition {
            -webkit-transform: scale(1.2); 
            -moz-transform: scale(1.2);
            -o-transform: scale(1.2);
            transform: scale(1.2);
        }
        .modal-header {
            border-bottom: none;
        }
        .modal-title {
            color:#000;
        }
        .modal-footer{
          display:none;  
        }
    </style>

    <script>
        $(document).ready(function() {
          var owl = $('.owl-carousel');
          owl.owlCarousel({
            loop: true,
            margin: 10,
            navRewind: false,
            responsive: {
              0: {
                items: 1
              },
              600: {
                items: 3
              },
              1000: {
                items: 4
              }
            }
          })
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });
            $(".zoom").hover(function(){
                    
                $(this).addClass('transition');
            }, function(){
                    
                $(this).removeClass('transition');
            });
        });
    </script>

    <style type="text/css">
        .bs-callout {
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            border-color: #eee;
            border-image: none;
            border-radius: 3px;
            border-style: solid;
            border-width: 1px 1px 1px 5px;
            margin-bottom: 5px;
            padding: 20px;
        }
        .bs-callout:last-child {
            margin-bottom: 0px;
        }
        .bs-callout h4 {
            margin-bottom: 10px;
            margin-top: 0;
        }
        .bs-callout-danger {
            border-left-color: #d9534f;
        }
        .bs-callout-danger h4{
            color: #d9534f;
        }
    </style>
@endsection
