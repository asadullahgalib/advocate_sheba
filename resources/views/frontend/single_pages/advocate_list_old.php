@extends('frontend.layouts.master')
@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/find_advocate.css')}}">

@include('frontend.single_pages.single_search_bar')

<!-- ============================
     LEGAL ARTICLES SECTION START
============================= -->

<section class="find-legal-articles-section">

    <div class="container-fluid">

        <!-- ============================
             LEGAL TOPICS HEADER
        ============================= -->

        <div class="section-heading d-flex justify-content-between align-items-center">

            <div class="section-heading-left">

                <div class="section-small-icon">
                    <i class="fa-solid fa-scale-balanced"></i>
                </div>

                <h3>Legal Advocate</h3>

            </div>


            <!-- <a href="#" class="view-all-btn">
                View All Topics
                <i class="fa-solid fa-arrow-right"></i>
            </a> -->

        </div>


        <!-- ============================
             LEGAL TOPICS CARDS
        ============================= -->

        <div class="row advocate-topics-row">


            <!-- Criminal Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="advocate-topic-card">

                    <div class="advocate-topic-icon">
                        <img src="{{asset('frontend/adv.png')}}" alt="Advocate Sheba" style="width:65px;">
                    </div>

                    <h4>Adv. Md. Asadullah Galib</h4>
                    <p>
                        <i class="fa fa-map-pin" style="color:red;"></i> &nbsp; Supreme Court,Dhaka
                    </p>

                    <div class="profile_btn">
                        <button>Criminal</button>
                        <button>Corporate</button>
                    </div>


                    <p>
                        <i class="fa fa-user-circle-o"></i> &nbsp; 8 Years Experience
                    </p>

                    <a href="#">
                        View Profile
                    </a>

                </div>

            </div>


            <!-- Civil Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="advocate-topic-card">

                    <div class="advocate-topic-icon">
                        <img src="{{asset('frontend/adv.png')}}" alt="Advocate Sheba" style="width:65px;">
                    </div>

                    <h4>Adv. Md. Sayem Khan</h4>
                    <p>
                        <i class="fa fa-map-pin" style="color:red;"></i> &nbsp; Supreme Court,Dhaka
                    </p>

                    <div class="profile_btn">
                        <button>Civil</button>
                        <button>Corporate</button>
                    </div>


                    <p>
                        <i class="fa fa-user-circle-o"></i> &nbsp; 8 Years Experience
                    </p>

                    <a href="#">
                        View Profile
                    </a>

                </div>

            </div>


            <!-- Family Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="advocate-topic-card">

                    <div class="advocate-topic-icon">
                        <img src="{{asset('frontend/adv.png')}}" alt="Advocate Sheba" style="width:65px;">
                    </div>

                    <h4>Adv. Md. Sohel Rana</h4>
                    <p>
                        <i class="fa fa-map-pin" style="color:red;"></i> &nbsp; Supreme Court,Dhaka
                    </p>

                    <div class="profile_btn">
                        <button>Family</button>
                        <button>Corporate</button>
                    </div>


                    <p>
                        <i class="fa fa-user-circle-o"></i> &nbsp; 8 Years Experience
                    </p>

                    <a href="#">
                        View Profile
                    </a>

                </div>

            </div>


            <!-- Land Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="advocate-topic-card">

                    <div class="advocate-topic-icon">
                        <img src="{{asset('frontend/adv.png')}}" alt="Advocate Sheba" style="width:65px;">
                    </div>

                    <h4>Adv. Md. Juwel</h4>
                    <p>
                        <i class="fa fa-map-pin" style="color:red;"></i> &nbsp; Supreme Court,Dhaka
                    </p>

                    <div class="profile_btn">
                        <button>Land</button>
                        <button>Corporate</button>
                    </div>


                    <p>
                        <i class="fa fa-user-circle-o"></i> &nbsp; 8 Years Experience
                    </p>

                    <a href="#">
                        View Profile
                    </a>

                </div>

            </div>


            <!-- Labour Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="advocate-topic-card">

                    <div class="advocate-topic-icon">
                        <img src="{{asset('frontend/adv.png')}}" alt="Advocate Sheba" style="width:65px;">
                    </div>

                    <h4>Adv. Md. Abdul Kuddus</h4>
                    <p>
                        <i class="fa fa-map-pin" style="color:red;"></i> &nbsp; Supreme Court,Dhaka
                    </p>

                    <div class="profile_btn">
                        <button>Labour</button>
                        <button>Family</button>
                    </div>


                    <p>
                        <i class="fa fa-user-circle-o"></i> &nbsp; 8 Years Experience
                    </p>

                    <a href="#">
                        View Profile
                    </a>

                </div>

            </div>


            <!-- Criminal Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="advocate-topic-card">

                    <div class="advocate-topic-icon">
                        <img src="{{asset('frontend/adv.png')}}" alt="Advocate Sheba" style="width:65px;">
                    </div>

                    <h4>Adv. Md. Asadullah Galib</h4>
                    <p>
                        <i class="fa fa-map-pin" style="color:red;"></i> &nbsp; Supreme Court,Dhaka
                    </p>

                    <div class="profile_btn">
                        <button>Criminal</button>
                        <button>Corporate</button>
                    </div>


                    <p>
                        <i class="fa fa-user-circle-o"></i> &nbsp; 8 Years Experience
                    </p>

                    <a href="#">
                        View Profile
                    </a>

                </div>

            </div>


            <!-- Civil Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="advocate-topic-card">

                    <div class="advocate-topic-icon">
                        <img src="{{asset('frontend/adv.png')}}" alt="Advocate Sheba" style="width:65px;">
                    </div>

                    <h4>Adv. Md. Sayem Khan</h4>
                    <p>
                        <i class="fa fa-map-pin" style="color:red;"></i> &nbsp; Supreme Court,Dhaka
                    </p>

                    <div class="profile_btn">
                        <button>Civil</button>
                        <button>Corporate</button>
                    </div>


                    <p>
                        <i class="fa fa-user-circle-o"></i> &nbsp; 8 Years Experience
                    </p>

                    <a href="#">
                        View Profile
                    </a>

                </div>

            </div>


            <!-- Family Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="advocate-topic-card">

                    <div class="advocate-topic-icon">
                        <img src="{{asset('frontend/adv.png')}}" alt="Advocate Sheba" style="width:65px;">
                    </div>

                    <h4>Adv. Md. Sohel Rana</h4>
                    <p>
                        <i class="fa fa-map-pin" style="color:red;"></i> &nbsp; Supreme Court,Dhaka
                    </p>

                    <div class="profile_btn">
                        <button>Family</button>
                        <button>Corporate</button>
                    </div>


                    <p>
                        <i class="fa fa-user-circle-o"></i> &nbsp; 8 Years Experience
                    </p>

                    <a href="#">
                        View Profile
                    </a>

                </div>

            </div>


            <!-- Land Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="advocate-topic-card">

                    <div class="advocate-topic-icon">
                        <img src="{{asset('frontend/adv.png')}}" alt="Advocate Sheba" style="width:65px;">
                    </div>

                    <h4>Adv. Md. Juwel</h4>
                    <p>
                        <i class="fa fa-map-pin" style="color:red;"></i> &nbsp; Supreme Court,Dhaka
                    </p>

                    <div class="profile_btn">
                        <button>Land</button>
                        <button>Corporate</button>
                    </div>


                    <p>
                        <i class="fa fa-user-circle-o"></i> &nbsp; 8 Years Experience
                    </p>

                    <a href="#">
                        View Profile
                    </a>

                </div>

            </div>


            <!-- Labour Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="advocate-topic-card">

                    <div class="advocate-topic-icon">
                        <img src="{{asset('frontend/adv.png')}}" alt="Advocate Sheba" style="width:65px;">
                    </div>

                    <h4>Adv. Md. Abdul Kuddus</h4>
                    <p>
                        <i class="fa fa-map-pin" style="color:red;"></i> &nbsp; Supreme Court,Dhaka
                    </p>

                    <div class="profile_btn">
                        <button>Labour</button>
                        <button>Family</button>
                    </div>


                    <p>
                        <i class="fa fa-user-circle-o"></i> &nbsp; 8 Years Experience
                    </p>

                    <a href="#">
                        View Profile
                    </a>

                </div>

            </div>


        </div>

        <div class="row">
            <div class="container mt-3">
              <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item"><a class="page-link" href="#">7</a></li>
                <li class="page-item"><a class="page-link" href="#">8</a></li>
                <li class="page-item"><a class="page-link" href="#">9</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
              </ul>
            </div>
        </div>

    </div>

</section>


<section style="padding: 5px 0px 5px 0px;
    background-color: #f5f5f5;
    margin-bottom: 0px;
    border-radius: 15px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="row alert alert-success" style="background:#123b6d;border-color:#123b6d;">
                    <div class="col-md-8 col-lg-8 col-sm-8 offset-md-2 offset-lg-2 offset-sm-2">
                        <div class="row">
                            <div class="col-md-1 col-lg-1 col-xl-1 col-sm-1 custom_faq_img">
                                <img src="{{asset('frontend')}}/round-logo.png" alt="" />
                            </div>
                            <div class="col-md-11 col-lg-11 col-xl-11 col-sm-11">
                                <h3 style="text-align: left;margin-bottom: 15px;font-size: 20px;color: #fff;font-weight: bold;">
                                    এডভোকেট কারা ? 
                                </h3>
                                <p style="color:#fff">
                                    এডভোকেট একজন আইনজীবী যিনি আদালতে ক্লায়েন্টের পক্ষে মামলা লড়েন, আইনি পরামর্শ দেন ও দলিল তৈরি করে দেন। 
                                </p>

                                <h3 style="text-align: left;margin-bottom: 15px;font-size: 20px;color: #fff;font-weight: bold;    margin-top: 26px;">
                                    তারা কি করেন ? 
                                </h3>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    আদালতে মামলা পরিচালনা 
                                </p>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    আইনি পরামর্শ প্রদান 
                                </p>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    চুক্তি ও দলিল তৈরি
                                </p>

                                <h3 style="text-align: left;margin-bottom: 15px;font-size: 20px;color: #fff;font-weight: bold;    margin-top: 26px;">
                                    কিভাবে এডভোকেট হওয়া যায় ? 
                                </h3>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    এলএলবি ডিগ্রি সম্পন্ন 
                                </p>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    বার কাউন্সিল এনরোলমেন্ট পরীক্ষা
                                </p>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    ৬ মাস পুপিলেজ সম্পন্ন
                                </p>
                                <p style="color:#fff">
                                    <i class="fa fa-dot-circle-o" style="color:#fff;"></i> &nbsp;
                                    এনরোলমেন্ট সনদ গ্রহণ
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection