<section style="padding: 25px 0px 10px 0px;background-color: #f5f5f5;margin-bottom: 15px;border-radius: 15px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <h3 style="text-align: center;margin-bottom: 30px;font-size: 25px;color: #1B489D;font-weight: bold;">Categories</h3>
            </div>
            <div class="row">
                @foreach($categories as $category)
                <div class="col-md-2 col-lg-2 col-sm-2 col-xl-2 mobile_category_format">
                    <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                @if($category->id=='1')
                                    <a href="{{route('our.doctor-list')}}">
                                        <img class="default-img" src="{{url('uploads/category_images/'.$category->image)}}" alt="Shastho Plus" />
                                        <img class="hover-img" src="{{url('uploads/category_images/'.$category->image)}}" alt="Shastho Plus" />
                                    </a>
                                @endif
                                @if($category->id=='2')
                                    <a href="{{route('our.category-details',$category->id)}}">
                                        <img class="default-img" src="{{url('uploads/category_images/'.$category->image)}}" alt="Shastho Plus" />
                                        <img class="hover-img" src="{{url('uploads/category_images/'.$category->image)}}" alt="Shastho Plus" />
                                    </a>
                                @endif
                                @if($category->id=='3')
                                    <a href="{{route('our.package-list')}}">
                                        <img class="default-img" src="{{url('uploads/category_images/'.$category->image)}}" alt="Shastho Plus" />
                                        <img class="hover-img" src="{{url('uploads/category_images/'.$category->image)}}" alt="Shastho Plus" />
                                    </a>
                                @endif
                                @if($category->id=='4')
                                    <a href="{{route('our.ambulance-list')}}">
                                        <img class="default-img" src="{{url('uploads/category_images/'.$category->image)}}" alt="Shastho Plus" />
                                        <img class="hover-img" src="{{url('uploads/category_images/'.$category->image)}}" alt="Shastho Plus" />
                                    </a>
                                @endif
                                @if($category->id=='5')
                                    <a href="{{route('our.category-details',$category->id)}}">
                                        <img class="default-img" src="{{url('uploads/category_images/'.$category->image)}}" alt="Shastho Plus" />
                                        <img class="hover-img" src="{{url('uploads/category_images/'.$category->image)}}" alt="Shastho Plus" />
                                    </a>
                                @endif
                                @if($category->id=='6')
                                    <a class="nurseBtn">
                                        <img class="default-img" src="{{url('uploads/category_images/'.$category->image)}}" alt="Shastho Plus" />
                                        <img class="hover-img" src="{{url('uploads/category_images/'.$category->image)}}" alt="Shastho Plus" />
                                    </a>
                                @endif
                            </div>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot" style="width: 128px;height: 25px;"></span>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2 style="font-size:15px;">
                                @if($category->id=='1')
                                    <a href="{{route('our.doctor-list')}}">
                                        {{$category->name}}
                                    </a>
                                @endif
                                @if($category->id=='2')
                                    <a href="{{route('our.category-details',$category->id)}}">
                                        {{$category->name}}
                                    </a>
                                @endif
                                @if($category->id=='3')
                                    <a href="{{route('our.package-list')}}">
                                        {{$category->name}}
                                    </a>
                                @endif
                                @if($category->id=='4')
                                    <a href="{{route('our.ambulance-list')}}">
                                        {{$category->name}}
                                    </a>
                                @endif
                                @if($category->id=='5')
                                    <a href="{{route('our.category-details',$category->id)}}">
                                        {{$category->name}}
                                    </a>
                                @endif
                                @if($category->id=='6')
                                    <a class="nurseBtn">
                                        {{$category->name}}
                                    </a>
                                @endif
                            </h2>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


<div class="modal fade" id="ambulanceModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                @php
                    $catId = 4;
                    $ambulanceInfo = App\Model\Category::where('id',$catId)->first();
                @endphp
                <div class="row">
                    <div class="col-md-12">
                        <p style="text-align: center;font-size: 19px;padding-top: 20px;">
                            For <span style="font-weight:bold;">Ambulance</span>'s Appoinment Booking <br> Please Call at <br>
                        </p>
                    </div>
                    <div class="col-md-4 offset-md-4" style="text-align:center;padding-top: 15px;">
                        <a href="tel:{{$ambulanceInfo->mobile}}" class="btn btn-primary">{{$ambulanceInfo->mobile}}</a>
                    </div>
                    <div class="col-md-12" style="text-align:right;">
                        <button type="button" class="btn btn-secondary appointment_close" data-dismiss="modal" style="text-align: right;">X</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.layouts.doctor_by_speciality')
@include('frontend.layouts.doctor_by_location')


<section class="popular-categories section-padding" style="background-color:#f5f5f5;padding: 5px 0px 25px 0px;margin-bottom: 15px;border-radius: 15px;">
    <div class="container">
        <div class="section-title">
          <div class="title text-center">
              <h3 style="color: #1B489D;font-size: 25px;">Departments</h3>
          </div>
          <div class="slider-arrow slider-arrow-2 flex-right carausel-8-columns-arrow" id="carausel-8-columns-arrows"></div>
        </div>
        <div class="carausel-8-columns-cover position-relative">
              <div class="carausel-8-columns" id="carausel-8-columns">
                @foreach($departments as $department)
                  <div class="card-1">
                      <figure class="img-hover-scale overflow-hidden">
                          <a href="{{route('our.department-wise-doctor',$department->id)}}">
                            <img src="{{url('uploads/department_images/'.$department->image)}}" alt="Shastho Plus">
                          </a>
                      </figure>
                      <h6 style="font-size:15px">
                          <a href="{{route('our.department-wise-doctor',$department->id)}}">{{$department->name}}</a>
                      </h6>
                  </div>
                @endforeach
              </div>
        </div>
    </div>
</section>

<link rel="stylesheet" href="{{asset('frontend')}}/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="{{asset('frontend')}}/assets/vendors/jquery.min.js"></script>
    <script src="{{asset('frontend')}}/assets/owlcarousel/owl.carousel.js"></script>
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

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <main class="main pages" style="background-color: #f5f5f5;border-radius: 15px;margin-bottom: 10px;">
        <div class="page-content pt-50" style="padding:20px 0px 10px 0px !important">
            <div class="container">
                <div class="archive-header-2">
                    <h1 class="display-2 mb-50 text-brand" style="font-size: 25px;text-align: center; margin-bottom: 30px !important;">On & Offline Doctors</h1>
                </div>
                <div class="owl-carousel owl-theme">
                    @foreach($online_doctors as $online_doctor)
                    <div class="item">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <img class="default-img" src="{{asset('uploads/employee_images/'.$online_doctor->image)}}" alt="Shastho Plus">
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot" style="width:190px;">{{@$online_doctor['department']['name']}}</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2 style="padding-top:0px;font-size: 14px;">
                                    {{$online_doctor->name}}
                                </h2>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-sm-6 doctor_profile_mobile">
                                        <a class="add btn btn-primary btn-sm doctor_profile" href="{{route('our.doctor-profile',$online_doctor->id)}}" style="padding: 5px 7px !important;background-color: #BF1E2D;background-color: #129AF7;min-width: 120px;width: 120px;"> Profile </a>
                                    </div>
                                    <div class="col-sm-6 doctor_booking_mobile">
                                        @if($online_doctor->booking_status=="1")
                                        <a class="add btn btn-primary btn-sm doctor_booking" href="{{route('our.doctor-details',$online_doctor->id)}}" style="padding: 5px 7px !important;background-color: #fff;color: #000;max-width: 120px;width: 120px;border: 1px solid #129AF7;"> Appointment </a>
                                        @elseif($online_doctor->booking_status=="2")
                                        <a class="add btn btn-primary btn-sm doctor_booking appointmentBtn" data-id="{{$online_doctor->id}}"  style="padding: 5px 7px !important;background-color: #fff;color: #000;max-width: 120px;width: 120px;border: 1px solid #129AF7;"> Appointment </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
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

<section class="section-padding pb-5" style="background:#f5f5f5;padding: 25px 0px 25px 0px;margin-bottom: 15px;border-radius: 15px;">
    <div class="container">
        <div class="row" style="margin-bottom:10px;">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <h3 style="text-align: center;margin-bottom: 25px;font-size: 25px;color: #1B489D;font-weight: bold;">Offline Doctors </h3>
            </div>
            <div class="col-md-4" style="text-align:right;">
                <a href="{{route('our.doctor-list')}}" class="float-right btn btn-primary btn-sm" style="font-size: 15px;color: #fff;font-weight: bold;background-color: #129AF7;">View All</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                <div class="tab-content" id="myTabContent-1">
                    <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                        <div class="carausel-4-columns-cover arrow-center position-relative">
                            <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
                            <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
                                @foreach($doctors as $doctor)
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <img class="default-img" src="{{asset('uploads/employee_images/'.$doctor->image)}}" alt="Shastho Plus">
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot" style="width:190px;">{{@$doctor['department']['name']}}</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <h2 style="padding-top:0px;font-size: 14px;">
                                            {{$doctor->name}}
                                        </h2>
                                        <div class="row" style="margin-top: 10px;">
                                            <div class="col-sm-6 doctor_profile_mobile">
                                                <a class="add btn btn-primary btn-sm doctor_profile" href="{{route('our.doctor-profile',$doctor->id)}}" style="padding: 5px 7px !important;background-color: #BF1E2D;background-color: #129AF7;min-width: 120px;width: 120px;"> Profile </a>
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
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--End tab-pane-->
                </div>
                <!--End tab-content-->
            </div>
            <!--End Col-lg-9-->
        </div>
    </div>
</section>
<!--End Best Sales-->
