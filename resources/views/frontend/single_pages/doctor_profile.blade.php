@extends('frontend.layouts.master')
@section('content')
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="{{asset('public')}}/frontend/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('public')}}/frontend/assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="{{asset('public')}}/frontend/assets/vendors/jquery.min.js"></script>
    <script src="{{asset('public')}}/frontend/assets/owlcarousel/owl.carousel.js"></script>
    <style type="text/css">
        @media only screen and (min-width:320px) and (max-width:720px){
            .custom_table{
                margin-top: 25px !important;
                color: #1B489D;
                font-size: 11px;
            }
            td.name_cls{
                font-size: 13px !important;
            }
            .mobile_profile_img{
                height: 418px !important;
                min-height: 418px !important;
            }
            /*.mobile_profile_img img{
                height: 350px !important;
            }*/
            .mobile_height{
                height: 350px !important;
            }
        }
        .custom_hot{
            width:200px !important;
            font-size: 17px !important;
        }
        .form-control-borderless {
            border: none;
        }
        .form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
            border: none;
            outline: none;
            box-shadow: none;
        }
    </style>
    @php
        $contact = App\Model\Contact::first();
    @endphp

    <main class="main pages" style="background-color: #f5f5f5;border-radius: 15px;margin-bottom: 10px;">
        <div class="page-content pt-50" style="padding:20px 0px 10px 0px !important">
            <div class="container">
                <div class="archive-header-2">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap" style="padding: 0px 0px 0 0px !important;">
                                    <div class="product-img product-img-zoom">
                                       <div class="bs-callout bs-callout-danger">
                                          <img class="default-img" src="{{asset('public/upload/profile_images/'.@$contact->image)}}" alt="Shastho Plus" width="100%">
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center" style="padding: 0px 0px 25px 0px;">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm" method="GET" action="{{route('our.doctor-find')}}">
                                <div class="card-body row no-gutters align-items-center" style="padding: 5px 15px !important;">
                                    <div class="col-auto">
                                        <i class="fa fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" name="name" type="search" placeholder="Search doctors name" value="{{old('name')}}" min="3" required>
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                            <div class="product-cart-wrap mb-30" style="border-left:1px solid #1B489D;">
                                <div class="product-img-action-wrap">
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot" style="width:190px;font-size: 17px !important;">Basic Info</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-xl-4 col-sm-4">
                                            <img src="{{ asset('public/upload/employee_images/' . $doctor->image) }}" alt="Shastho Plus">
                                            <div class="product-content-wrap">
                                                <h2 style="padding-top:0px;font-size: 14px;">
                                                    {{$doctor->name}}
                                                </h2>
                                                <div class="row" style="margin-top: 10px;">
                                                    <div class="col-sm-6 doctor_profile_mobile">
                                                        <a id="ecardBtn" class="add btn btn-primary btn-sm doctor_profile" style="padding: 5px 7px !important;background-color: #BF1E2D;background-color: #129AF7;min-width: 120px;width: 120px;"> E-Card </a>
                                                    </div>
                                                    <div class="col-sm-6 doctor_booking_mobile">
                                                        @if($doctor->booking_status=="1")
                                                        <a class="add btn btn-primary btn-sm doctor_booking" href="{{route('our.doctor-details',$doctor->id)}}" style="padding: 5px 7px !important;background-color: #fff;color: #000;max-width: 120px;width: 120px;border: 1px solid #129AF7;"> Appointment </a>
                                                        @elseif($doctor->booking_status=="2")
                                                        <a class="add btn btn-primary btn-sm doctor_booking appointmentBtn" data-id="{{$doctor->id}}"  style="padding: 5px 7px !important;background-color: #fff;color: #000;max-width: 120px;width: 120px;border: 1px solid #129AF7;"> Appointment </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-xl-8 col-sm-8">
                                            
                                            <table class="table table-sm custom_table">
                                                <tr>
                                                    <td class="name_cls" style="font-weight:bold;text-align:left !important;">
                                                        {{@$doctor->name}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="name_cls" style="font-weight:bold;text-align:left !important;">
                                                        {{@$doctor->name_bn}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:left !important;">
                                                        {{@$doctor['department']['name']}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:left !important;">
                                                        {{@$doctor->mbbs_fcp}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:left !important;">
                                                        {{@$doctor->qualification}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 16px !important;text-align: left;">
                                                        <strong>Speciality</strong>
                                                    </td>
                                                </tr>
                                                @foreach($specialities as $speciality)
                                                <tr>
                                                    <td style="text-align:left !important;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;&nbsp; {{$speciality->speciality}}</td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="ecardModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <img src="{{(!empty($doctor->ecard))?url('public/upload/employee_ecard/'.$doctor->ecard):url('public/upload/no_image.png')}}" alt="Shastho Plus">
                                            </div>
                                            <div class="col-md-12" style="text-align:right;">
                                                <button type="button" class="btn btn-secondary ecard_close" data-dismiss="modal" style="text-align: right;">X</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            $(document).on('click','#ecardBtn',function(){
                                $('#ecardModal').modal('show');
                              });
                            $(document).on('click','.close,.ecard_close',function(){
                                $('#ecardModal').modal('hide');
                            });  
                        </script>

                        <div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                            <div class="product-cart-wrap mb-30 mobile_height" style="height:250px;border-left:1px solid #1B489D;">
                                <div class="product-img-action-wrap">
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot" style="width:190px;font-size: 17px !important;">Experience</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12">
                                            <table class="table table-sm custom_table">
                                                @foreach($experiences as $experience)
                                                <tr>
                                                    <td style="text-align:left !important;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;&nbsp; {{$experience->experience}}</td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                            <div class="product-cart-wrap mb-30 mobile_height" style="height:250px;border-left:1px solid #1B489D;">
                                <div class="product-img-action-wrap">
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot" style="width:190px;font-size: 17px !important;">Training & Others</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12">
                                            <table class="table table-sm custom_table">
                                                @foreach($trainings as $trn)
                                                <tr>
                                                    <td style="text-align:left !important;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;&nbsp; {{$trn->training}}</td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                            <div class="product-cart-wrap mb-30 mobile_height" style="height:250px;border-left:1px solid #1B489D;">
                                <div class="product-img-action-wrap">
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot" style="width:190px;font-size: 17px !important;">Work Place</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12">
                                            <table class="table table-sm custom_table">
                                                @foreach($work_places as $work)
                                                <tr>
                                                    <td style="text-align:left !important;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;&nbsp; {{$work->workplace}}</td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if($doctor->user_category !='nursing')
                        <div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                            <div class="product-cart-wrap mb-30 mobile_height" style="height:250px;border-left:1px solid #1B489D;">
                                <div class="product-img-action-wrap">
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot" style="width:190px;font-size: 17px !important;">Chamber</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12">
                                            <table class="table table-sm custom_table">
                                                @foreach($chambers as $cham)
                                                <tr>
                                                    <td style="text-align:left !important;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;&nbsp; {{$cham->chamber_name}}</td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                            <div class="product-cart-wrap mb-30 mobile_height" style="height:250px;border-left:1px solid #1B489D;">
                                <div class="product-img-action-wrap">
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot" style="width:190px;font-size: 17px !important;">Schedule</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12">
                                            <table class="table table-sm custom_table">
                                                @foreach($profile_times as $time)
                                                <tr>
                                                    <td style="text-align:left !important;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;&nbsp; {{$time->time}}</td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                            <div class="product-cart-wrap mb-30 mobile_height" style="height:250px;border-left:1px solid #1B489D;">
                                <div class="product-img-action-wrap">
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot" style="width:190px;font-size: 17px !important;">Appointment</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12" style="text-align:left;">
                                            <p style="margin-top:30px;font-size: 18px;color: #1B489D;">
                                                <strong>Contact No:</strong> <br>
                                                 <span style="font-size:14px !important;">
                                                     {{@$doctor->appointment_contact}}
                                                 </span>
                                            </p>
                                            @if($doctor->booking_status=="1")
                                            <a class="btn btn-info" href="{{route('our.doctor-details',$doctor->id)}}" style="width: 160px;color: #fff;">Appointment</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

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
                    @foreach($social_medias as $media)
                    <div class="item">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a target="_blank" href="{{$media->link}}">
                                        <img class="default-img"
                                            src="{{ asset('public/upload/social_images/'.$media->image) }}"
                                            alt="Shastho Plus" style="width:100%;">
                                        <img class="hover-img"
                                            src="{{ asset('public/upload/social_images/'.$media->image) }}"
                                            alt="Shastho Plus" style="width:100%;">
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot"
                                        style="width:50px;border-radius: 5px 0 15px 0 !important;"><i class="fa fa-{{$media->icon}}"></i></span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2 style="padding-top:15px;font-size: 16px;">
                                    <a href="{{$media->link}}" target="_blank">{{$media->name}}</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                    @foreach($video_galleries as $video)
                    <div class="item">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap" style="padding: 5px 10px 0px 10px !important;">
                                <div class="product-img product-img-zoom">
                                    <a target="_blank" href="{{$video->link}}">
                                        <img class="default-img"
                                            src="{{ asset('public/upload/video_images/'.$video->image) }}"
                                            alt="Shastho Plus" style="width:100%;">
                                        <img class="hover-img"
                                            src="{{ asset('public/upload/video_images/'.$video->image) }}"
                                            alt="Shastho Plus" style="width:100%;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                    @foreach($news_events as $news)
                    <div class="item" style="border: 1px solid #ddd;border-radius: 15px;">
                        <article class="text-center hover-up mb-30 animated">
                            <div class="post-thumb">
                                <a href="{{route('our.news.details',$news->id)}}">
                                    <img class="border-radius-15" src="{{ asset('public/upload/news_images/'.$news->image) }}" alt="Shastho Plus">
                                </a>
                                
                            </div>
                            <div class="entry-content-2">
                                <!-- <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                    <div>
                                        <span class="post-on mr-10">{{date('d-m-Y',strtotime($news->date))}}</span>
                                    </div>
                                </div> -->
                                <h4 class="post-title mb-15">
                                    <a href="{{route('our.news.details',$news->id)}}" style="font-size:16px;">{{$news->title}}</a>
                                </h4>
                                <!-- <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                    <div>
                                        <d style="text-align: justify;">
                                            <?php echo substr(@$news->editor1,0,200); ?>
                                        </d>
                                    </div>
                                </div> -->
                                <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                    <div>
                                        <span class="post-on mr-10">
                                            <a href="{{route('our.news.details',$news->id)}}" class="btn btn-info btn-sm">Read more</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endforeach
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
                    @foreach($photo_galleries as $photo)
                    <div class="item">
                        <a href="{{ asset('public/upload/photo_images/'.$photo->image) }}" class="fancybox" rel="ligthbox">
                            <img  src="{{ asset('public/upload/photo_images/'.$photo->image) }}" class="zoom img-fluid "  alt="Shastho Plus">
                        </a>
                    </div>
                    @endforeach
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
            border-left-color: #1B489D;
        }
        .bs-callout-danger h4{
            color: #1B489D;
            font-size: 18px !important;
        }
    </style>
@endsection
