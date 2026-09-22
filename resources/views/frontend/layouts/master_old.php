<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    @php
        $contact = App\Model\Contact::first();
        $logo = App\Model\Logo::first();
    @endphp
    <meta charset="utf-8" />
    <title>{{@$contact->name}}</title>
    <link rel="canonical" href="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/icon.jpg')}}" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/css/main.css?v=5.2" />
    <!-- Bootstrap -->
    <!-- Font Awesome CSS -->
    <link href="{{asset('pike/backend/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('assets')}}/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- iconmoon Icons -->
    <style type="text/css">
        button.search_btn[type='submit']:hover {
             background-color: #fff !important; 
        }
        .notifyjs-corner{
            z-index: 10000 !important;
        }
        .custom_menu{
            color: #000 !important;
            text-decoration: underline !important;
        }
        a.doctor_profile:hover{
            background-color: #1B489D !important;
        }
        a.doctor_sign_up:hover{
            font-size: 18px;
            font-weight: bold;
            border: 3px solid #129AF7;
            padding: 5px 10px;
            border-radius: 20px;
            color: white !important;
            background-color: #129AF7;
        }
        a.doctor_booking:hover{
            background-color: #129AF7 !important;
            color: #fff !important;
        }
        .invalid-feedback {
            display: none;
            width: 100%;
            font-size: 14px !important;
            color: #dc3545;
        }
        .footer_link a{
            font-size: 15px;
            color: #253D4E;
            display: block;
            font-weight: bold;
            float: left;
            padding: 5px 8px;
        }
        .footer_link a:hover{
            font-size: 15px;
            color: #129AF7;
            display: block;
            font-weight: bold;
            float: left;
            text-decoration: underline;
        }
        .mobile-social-icon a{
            background-color: #129AF7;
        }
        .mobile-social-icon a i{
            background-color: #129AF7;
            color: #fff;
        }
        @media only screen and (min-width:320px) and (max-width:768px){
            .mobile_add{
                display: block !important;
            }
            .desktop_add{
                display: none !important;
            }
            .footer_link{
                display: block !important;
            }
            .custom_faq_img{
                text-align: center !important;
            }
            .custom_faq_img img{
                width: 150px !important;
            }
            .mobile-social-icon{
                margin-left: 35% !important;
                margin-top: 15px !important;
            }
            .doctor_profile_mobile{
                text-align: left !important;
                width: 50% !important;
            }
            .mobile_view_all{
                margin-top: -55px !important;
                margin-left: 70% !important;
            }
            .mobile_view_all a{
                font-size: 15px !important;
            }
            .section-title .title h3{
                font-size: 15px !important;
                margin-top: 8px !important;
                margin-bottom: 38px !important;
            }
            .section-title {
                margin-bottom: -15px !important;
            }
            .section-title .title p{
                font-size: 14px !important;
            }
            h2.find_doctor_h2{
                font-size: 16px !important;
            }
            .custom_btn{
                padding: 10px 5px !important;
                margin-bottom: 5px !important;
                font-size: 12px;
                min-width: 140px;
            }
            .mobile_display{
                display: none !important;
            }
            .mobile_row_class{
                display: block !important;
                margin-top: 10px !important;
            }
            .doctor_booking_mobile{
                text-align: right !important;
                width: 50% !important;
            }
            .mobile_category_format{
                width: 50% !important;
            }
            .item-box-blog{
                border: 1px solid #dadada;
                text-align: center;
                z-index: 4;
                padding: 0px !important;
            }
            .item-box-blog-date {
                position: absolute;
                z-index: 5;
                padding: 2px 7px !important;
                top: -6px !important;
                /* right: 8px; */
                background-color: #41cb52;
            }
            .item-box-blog-date span.mon {
                font-size: 14px !important;
                padding: 3px 1px !important;
            }
            .mobile_h5_format_category{
                font-size: 13px !important;
            }
            button.submit, button[type='submit'] {
                font-size: 11px;
                font-weight: 900;
                padding: 5px 10px !important;
                color: #ffffff;
                border: none;
                background-color: #129AF7;
                border: 1px solid #129AF7;
                border-radius: 10px;
            }
        }
    </style>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.js"></script>
    <link href="{{asset('pike/backend/css/sweetalert.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('pike/backend/js/sweetalert.js') }}"></script>
</head>

<body>
    @include('frontend.layouts.header')
    <main class="main">
        @yield('content')
    </main>
    @include('frontend.layouts.footer')

    @if(Session::get('bookingMessage'))
    <script type="text/javascript" charset="utf-8" async defer>
    swal("Congratulations!","Your booking is successfully completed","success");
    </script>
    @endif
    @if(Session::get('categoryBookingMessage'))
    <script type="text/javascript" charset="utf-8" async defer>
    swal("Successful!","Your is prescription successfully uploaded","success");
    </script>
    @endif

    @if(Session::get('signupMessage'))
    <script type="text/javascript" charset="utf-8" async defer>
    swal("Congratulations!","Your registration is successfully completed","success");
    </script>
    @endif

    @if(Session::get('findNoDoctorMessage'))
    <script type="text/javascript" charset="utf-8" async defer>
    swal("Sorry!","Sorry, no one was found with this name","success");
    </script>
    @endif
    
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="{{asset('assets')}}/imgs/theme/loading.gif" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor JS-->
    <script src="{{asset('assets')}}/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{asset('assets')}}/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="{{asset('assets')}}/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets')}}/js/plugins/slick.js"></script>
    <script src="{{asset('assets')}}/js/plugins/jquery.syotimer.min.js"></script>
    <script src="{{asset('assets')}}/js/plugins/waypoints.js"></script>
    <script src="{{asset('assets')}}/js/plugins/wow.js"></script>
    <script src="{{asset('assets')}}/js/plugins/perfect-scrollbar.js"></script>
    <script src="{{asset('assets')}}/js/plugins/magnific-popup.js"></script>
    <script src="{{asset('assets')}}/js/plugins/select2.min.js"></script>
    <script src="{{asset('assets')}}/js/plugins/counterup.js"></script>
    <script src="{{asset('assets')}}/js/plugins/jquery.countdown.min.js"></script>
    <script src="{{asset('assets')}}/js/plugins/images-loaded.js"></script>
    <script src="{{asset('assets')}}/js/plugins/isotope.js"></script>
    <script src="{{asset('assets')}}/js/plugins/scrollup.js"></script>
    <script src="{{asset('assets')}}/js/plugins/jquery.vticker-min.js"></script>
    <script src="{{asset('assets')}}/js/plugins/jquery.theia.sticky.js"></script>
    <script src="{{asset('assets')}}/js/plugins/jquery.elevatezoom.js"></script>
    <!-- Template  JS -->
    <script src="{{asset('assets')}}/js/main.js?v=5.2"></script>
    <script src="{{asset('assets')}}/js/shop.js?v=5.2"></script>
    <script src="{{ asset('pike/backend/js/validate.min.js') }}"></script>
    <script src="{{ asset('pike/backend/js/additional-methods.js') }}"></script>
    @if(session()->has('success'))
      <script type="text/javascript">
        $(function(){
          $.notify("{{session()->get('success')}}",{globalPosition:'top right',className:'success'});
        });
      </script>
    @endif

    <div class="modal fade" id="appointmentModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p style="text-align: center;font-size: 19px;padding-top: 20px;">
                                For <span id="doctor_name" style="font-weight:bold;"></span>'s Appoinment Booking <br> Please Call at <br>
                            </p>
                        </div>
                        <div class="col-md-4 offset-md-4" style="text-align:center;padding-top: 15px;">
                            <a href="" class="btn btn-primary" id="doctor_no"></a>
                        </div>
                        <div class="col-md-12" style="text-align:right;">
                            <button type="button" class="btn btn-secondary appointment_close" data-dismiss="modal" style="text-align: right;">X</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).on('click','.appointmentBtn',function(){
            var id = $(this).attr("data-id");
            $.ajax({
              url: "{{ route('get-doctor-appointment-number') }}",
              type: "GET",
              data:{id:id},
              success: function(data){
                var appointment_contact = data.appointment_contact
                $('#doctor_name').text(data.name);
                $('#doctor_no').text(appointment_contact);
                $("#doctor_no").attr("href",'tel:'+appointment_contact);
                $('#appointmentModal').modal('show');
              }
            });
          });
        $(document).on('click','.close,.appointment_close',function(){
            $('#appointmentModal').modal('hide');
        });  
    </script>

    <div class="modal fade" id="nurseModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p style="text-align: center;font-size: 19px;padding-top: 20px;">
                                For <span style="font-weight:bold;">Nursing Service </span> <br> Please Call at <br>
                            </p>
                        </div>
                        <div class="col-md-4 offset-md-4" style="text-align:center;padding-top: 15px;">
                            <a href="tel:01315225563" class="btn btn-primary">01315225563</a>
                        </div>
                        <div class="col-md-12" style="text-align:right;">
                            <button type="button" class="btn btn-secondary nurse_close" data-dismiss="modal" style="text-align: right;">X</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).on('click','.nurseBtn',function(){
            $('#nurseModal').modal('show');
        });
        $(document).on('click','.close,.nurse_close',function(){
            $('#nurseModal').modal('hide');
        });  
    </script>

    <script>
        $(document).ready(function(){
            $('#name').keyup(function(){
                var name = $(this).val();
                if(name != ''){
                    $.ajax({
                        url:"{{route('get.search.doctor')}}",
                        type:"GET",
                        data:{name:name},
                        success: function(data){
                            $('#doctorStatus').fadeIn();
                            $('#doctorStatus').html(data);
                        }
                    });
                }
            });
        });
        $(document).on('click','li',function(){
            $('#name').val($(this).text());
            $('#doctorStatus').fadeOut();
        });
    </script>
</body>

</html>