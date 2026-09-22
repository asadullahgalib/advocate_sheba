@extends('frontend.layouts.master')
@section('content')
    <style type="text/css">
        .form-control-borderless {
            border: none;
        }
        .form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
            border: none;
            outline: none;
            box-shadow: none;
        }
        table td, table th {
            padding: 5px 10px !important;
            border: 1px solid #ececec;
            vertical-align: middle;
        }
    </style>
    <section style="padding: 30px 0px 25px 0px;background-color: #f5f5f5;margin-bottom: 15px;border-radius: 15px;">
        <div class="container">
            <div class="row justify-content-center">
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
        </div>
    </section>
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
        input.fee_color_class{
            width: 46px;
            float: left;
            margin-top: -6px;
            border-radius: 0;
            text-align: center;
            color: blue;
            font-weight: bold;
            background-color: greenyellow;
        }
        .disabled-date {
            background-color: #E9ECEF !important;
        }
    </style>
    <main class="main pages" style="background-color: #f5f5f5;">
        <div class="page-content pt-50" style="padding:0px 0px 100px 0px">
            <div class="container">
                <div class="archive-header-2">
                    <h1 class="display-2 mb-50 text-brand"
                        style="font-size: 25px;text-align: center; margin-bottom: 30px !important;">Doctor Booking Form</h1>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xl-4">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <img class="default-img" src="{{ asset('public/upload/employee_images/' . $doctor->image) }}"
                                                alt="Shastho Plus">
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot"
                                            style="width:190px;">{{ @$doctor['department']['name'] }}</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <h2 style="padding-top:0px;font-size: 14px;">{{ $doctor->name }}</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-content-wrap">
                                            <div class="row" style="margin-top: 10px;">
                                                <div class="col-sm-6 doctor_profile_mobile">
                                                    <a class="add btn btn-primary btn-sm doctor_profile doctor_appoint_consultation" style="font-size:12px;padding: 11px 7px !important;background-color: #BF1E2D;background-color: #129AF7;min-width: 162px;width: 162px;"> Consultation Fee: {{ $doctor->consultation_fee }} </a>
                                                </div>
                                                <div class="col-sm-6 doctor_booking_mobile">
                                                    <a class="add btn btn-primary btn-sm doctor_booking custom_fee doctor_appoint_followup" style="font-size:12px;padding: 11px 7px !important;background-color: #fff;color: #000;max-width: 162px;width: 162px;border: 1px solid #129AF7;"> Follow-Up Fee: {{ $doctor->follow_up_fee }} </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-8 col-md-8 col-xl-8 col-sm-8">
                            <form method="POST" action="{{route('our.doctor-store')}}" enctype="multipart/form-data" id="BookingForm">
                                @csrf
                                <input type="hidden" name="doctor_id" value="{{$doctor->id}}">
                                <div class="product-cart-wrap mb-30" style="margin-bottom: 10px !important;">
                                    <div class="product-content-wrap" style="padding: 0px 10px;">
                                        <div class="product-content-wrap" style="padding: 7px 0px;">
                                            <h2 style="font-size: 18px;color: #1B489D;">Doctor Schedule:</h2>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-append">
                                                       <span class="input-group-text" style="padding: 7px 12px;"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control dateWishTimeSlot"
                                                    placeholder="Select Date" name="date" autocomplete="off">
                                                </div>
                                                <font style="color:red">{{($errors->has('date'))?($errors->first('date')):''}}</font>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-append">
                                                       <span class="input-group-text" style="padding: 7px 12px;"><i class="fa fa-clock-o"></i></span>
                                                    </div>
                                                    <select name="time_id" id="slotTime" class="form-control form-control-sm">
                                                        <option value="">Select Time</option>
                                                    </select>
                                                </div>
                                                <font style="color:red">{{($errors->has('time_id'))?($errors->first('time_id')):''}}</font>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-cart-wrap mb-30" style="margin-bottom: 10px !important;">
                                    <div class="product-content-wrap" style="padding: 0px 10px;">
                                        <div class="product-content-wrap" style="padding: 7px 0px;">
                                            <h2 style="font-size: 18px;color: #1B489D;">Patient Details:</h2>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-append">
                                                       <span class="input-group-text" style="padding: 7px 12px;"><i class="fa fa-user"></i></span>
                                                    </div>
                                                    <input type="text" name="name" value="{{old('name')}}" placeholder="Full Name" class="form-control form-control-sm">
                                                </div>
                                                <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-append">
                                                       <span class="input-group-text" style="padding: 7px 12px;"><i class="fa fa-phone"></i></span>
                                                    </div>
                                                    <input type="text" name="mobile" value="{{old('mobile')}}" placeholder="Contact No" class="form-control form-control-sm">
                                                </div>
                                                <font style="color:red">{{($errors->has('mobile'))?($errors->first('mobile')):''}}</font>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-append">
                                                       <span class="input-group-text" style="padding: 7px 12px;"><i class="fa fa-envelope"></i></span>
                                                    </div>
                                                    <input type="email" name="email" value="{{old('email')}}" placeholder="Email Address" class="form-control form-control-sm">
                                                 </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-append">
                                                       <span class="input-group-text" style="padding: 7px 12px;"><i class="fa fa-file-pdf-o"></i></span>
                                                    </div>
                                                    <input type="file" name="image" class="form-control form-control-sm">
                                                 </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-append">
                                                       <span class="input-group-text" style="padding: 7px 12px;"><i class="fa fa-user"></i></span>
                                                    </div>
                                                    <select name="gender" class="form-control form-control-sm">
                                                        <option value="">Select Gender</option>
                                                        <option value="Male" {{(old("gender")=="Male")?"selected":""}}>Male</option>
                                                        <option value="Female" {{(old("gender")=="Female")?"selected":""}}>Female</option>
                                                    </select>
                                                </div>
                                                <font style="color:red">{{($errors->has('gender'))?($errors->first('gender')):''}}</font>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-append">
                                                       <span class="input-group-text" style="padding: 7px 12px;"><i class="fa fa-credit-card"></i></span>
                                                    </div>
                                                    <select name="fee_type" id="fee_type" class="form-control form-control-sm">
                                                        <option value="">Select Fee Type</option>
                                                        <option value="Consultation-Fee">Consultation-Fee</option>
                                                        <option value="Follow-Up-Fee">Follow-Up-Fee</option>
                                                    </select>
                                                </div>
                                                <font style="color:red">{{($errors->has('fee_type'))?($errors->first('fee_type')):''}}</font>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-cart-wrap mb-30" style="margin-bottom: 10px !important;">
                                    <div class="product-content-wrap" style="padding: 0px 10px;">
                                        <div class="product-content-wrap" style="padding: 7px 0px;">
                                            <h2 style="font-size: 18px;color: #1B489D;">Payment:</h2>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 offset-md-3">
                                                <div class="od-payment-section">
                                                    <ul class="od-payment-options">
                                                        <li class="each-method payment-method-nagad">
                                                            <input id="payment-method-handcash" type="radio"
                                                                class="payment-radio" name="payment_method"
                                                                value="Hand Cash">
                                                            <label for="payment-method-handcash">
                                                                <span class="payment-select-checkmark"></span>
                                                                <span>Hand Cash</span>
                                                                <picture>
                                                                    <img width="200" height="87"
                                                                        src="{{ asset('public/frontend/cash.jpg') }}"
                                                                        alt="Nagad" class="entered lazyloaded">
                                                                </picture>
                                                            </label>
                                                            <div class="payment-method-card payment-method-handcash"
                                                                style="background:#fff">
                                                                <div data-id="bio-1" data-orig_data_id="bio-1"
                                                                    data-clear_on_hide="" data-class="wpcf7cf_group"
                                                                    style="height: auto; display: block;" class="">
                                                                    <input type="text" class="show_fee fee_color_class" readonly="">
                                                                    <p style="color:#000;font-weight:bold;text-align: left;"> 
                                                                        <span>TK সেবা পাওয়ার
                                                                        পরে Hand Cash প্রদান করব ।</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @if($doctor->bkash_number !=NULL)
                                                        <li class="each-method payment-method-bkash">
                                                            <input id="payment-method-bkash" type="radio"
                                                                class="payment-radio" name="payment_method"
                                                                value="bkash">
                                                            <label for="payment-method-bkash">
                                                                <span class="payment-select-checkmark"></span>
                                                                <span>Bkash</span>
                                                                <picture>
                                                                    <img width="200" height="89"
                                                                        src="{{ asset('public/frontend/bkash.png') }}"
                                                                        alt="bKash" class="entered lazyloaded">
                                                                </picture>
                                                            </label>
                                                            <div class="payment-method-card payment-method-bkash"
                                                                style="background: #fff;">
                                                                <div data-id="bio-1" data-orig_data_id="bio-1"
                                                                    data-clear_on_hide="" data-class="wpcf7cf_group"
                                                                    style="height: auto; display: block;" class="">
                                                                    <input type="text" class="show_fee fee_color_class" readonly="">
                                                                    <p style="color:#000;font-weight:bold;text-align: left;padding-top: 2px;"> <span>TK</span>
                                                                    </p>
                                                                </div>
                                                                <p style="color:#000;font-weight: bold;margin-top: 15px;text-align: left;">{{@$doctor->bkash_number}}</p>
                                                                <div class="od-payment-input">
                                                                    <div class="each-pyment-input">
                                                                        <label for="bkash_number">Your Bkash Number</label>
                                                                        <span class="wpcf7-form-control-wrap bkash_number">
                                                                            <input type="tel" name="bkash_number"
                                                                                value="" size="40"
                                                                                class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel"
                                                                                id="bkash_number" aria-invalid="false"
                                                                                placeholder="016XXXXXXXX">
                                                                        </span>
                                                                    </div>
                                                                    <div class="each-pyment-input">
                                                                        <label for="bkash_transaction_id">Transaction
                                                                            ID</label>
                                                                        <span
                                                                            class="wpcf7-form-control-wrap bkash_transaction_id">
                                                                            <input type="text"
                                                                                name="bkash_transaction_id" value=""
                                                                                size="40"
                                                                                class="wpcf7-form-control wpcf7-text"
                                                                                id="bkash_transaction_id"
                                                                                aria-invalid="false"
                                                                                placeholder="8C89ODOLMM">
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endif
                                                        @if($doctor->rocket_number !=NULL)
                                                        <li class="each-method payment-method-rocket">
                                                            <input id="payment-method-rocket" type="radio"
                                                                class="payment-radio" name="payment_method"
                                                                value="rocket">
                                                            <label for="payment-method-rocket">
                                                                <span class="payment-select-checkmark"></span>
                                                                <span>Rocket</span>
                                                                <picture>
                                                                    <img width="200" height="107"
                                                                        src="{{ asset('public/frontend/rocket.png') }}"
                                                                        alt="Rocket" class="entered lazyloaded">
                                                                </picture>
                                                            </label>
                                                            <div class="payment-method-card payment-method-rocket"
                                                                style="background:#fff">
                                                                <div data-id="bio-1" data-orig_data_id="bio-1"
                                                                    data-clear_on_hide="" data-class="wpcf7cf_group"
                                                                    style="height: auto; display: block;" class="">
                                                                    <input type="text" class="show_fee fee_color_class" readonly="">
                                                                    <p style="color:#000;font-weight:bold;text-align: left;padding-top: 2px;"> <span>TK</span>
                                                                    </p>
                                                                </div>
                                                                <p style="color:#000;font-weight: bold;margin-top: 15px;text-align: left;">{{@$doctor->rocket_number}}</p>
                                                                <div class="od-payment-input">
                                                                    <div class="each-pyment-input">
                                                                        <label for="rocket_number">Your Rocket
                                                                            Number</label>
                                                                        <span
                                                                            class="wpcf7-form-control-wrap rocket_number">
                                                                            <input type="tel" name="rocket_number"
                                                                                value="" size="40"
                                                                                class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel"
                                                                                id="rocket_number" aria-invalid="false"
                                                                                placeholder="016XXXXXXXX">
                                                                        </span>
                                                                    </div>
                                                                    <div class="each-pyment-input">
                                                                        <label for="rocket_transaction_id">Transaction
                                                                            ID</label>
                                                                        <span
                                                                            class="wpcf7-form-control-wrap rocket_transaction_id">
                                                                            <input type="text"
                                                                                name="rocket_transaction_id"
                                                                                value="" size="40"
                                                                                class="wpcf7-form-control wpcf7-text"
                                                                                id="rocket_transaction_id"
                                                                                aria-invalid="false"
                                                                                placeholder="8C89ODOLMM">
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endif
                                                        @if($doctor->nagad_number !=NULL)
                                                        <li class="each-method payment-method-nagad">
                                                            <input id="payment-method-nagad" type="radio"
                                                                class="payment-radio" name="payment_method"
                                                                value="nagad">
                                                            <label for="payment-method-nagad">
                                                                <span class="payment-select-checkmark"></span>
                                                                <span>Nagad</span>
                                                                <picture>
                                                                    <img width="200" height="87"
                                                                        src="{{ asset('public/frontend/nagad.png') }}"
                                                                        alt="Nagad" class="entered lazyloaded">
                                                                </picture>
                                                            </label>
                                                            <div class="payment-method-card payment-method-nagad"
                                                                style="background:#fff">
                                                                <div data-id="bio-1" data-orig_data_id="bio-1"
                                                                    data-clear_on_hide="" data-class="wpcf7cf_group"
                                                                    style="height: auto; display: block;" class="">
                                                                    <input type="text" class="show_fee fee_color_class" readonly="">
                                                                    <p style="color:#000;font-weight:bold;text-align: left;padding-top: 2px;"> <span>TK</span>
                                                                    </p>
                                                                </div>
                                                                <p style="color:#000;font-weight: bold;margin-top: 15px;text-align: left;">{{@$doctor->nagad_number}}</p>
                                                                <div class="od-payment-input">
                                                                    <div class="each-pyment-input">
                                                                        <label for="nagad_number">Your Nagad Number</label>
                                                                        <span class="wpcf7-form-control-wrap nagad_number">
                                                                            <input type="tel" name="nagad_number"
                                                                                value="" size="40"
                                                                                class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel"
                                                                                id="nagad_number" aria-invalid="false"
                                                                                placeholder="016XXXXXXXX">
                                                                        </span>
                                                                    </div>
                                                                    <div class="each-pyment-input">
                                                                        <label for="nagad_transaction_id">Transaction
                                                                            ID</label>
                                                                        <span
                                                                            class="wpcf7-form-control-wrap nagad_transaction_id">
                                                                            <input type="text"
                                                                                name="nagad_transaction_id" value=""
                                                                                size="40"
                                                                                class="wpcf7-form-control wpcf7-text"
                                                                                id="nagad_transaction_id"
                                                                                aria-invalid="false"
                                                                                placeholder="8C89ODOLMM">
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endif
                                                    </ul>
                                                    <font style="color:red">{{($errors->has('payment_method'))?($errors->first('payment_method')):''}}</font>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 offset-md-3">
                                                <button type="submit" class="btn btn-info"
                                                    style="background:#1B489D;color: #fff;margin: 15px 0px;font-size: 17px;font-weight: bold;width: 100%;">Book
                                                    Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--end vendor card-->
                </div>
            </div>
        </div>
    </main>

    <script type="text/javascript">
        $(document).ready(function () {  
            $('#BookingForm').validate({
              ignore:[],
              rules: {          
                date: {
                  required: true,
                },
                time_id: {
                  required: true,
                },
                name: {
                  required: true,
                  maxlength : 120,
                },
                gender: {
                  required: true,
                },
                fee_type: {
                  required: true,
                },
                payment_method: {
                  required: true,
                },
                mobile: {
                  required: true,
                  maxlength : 120,
                }    
              },
              messages: { 
              },
              errorElement: 'span',
              errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
              },
              highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
              },
              unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
              }
            });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            getHolidays();
        })

        function getHolidays() {
            let doctor_id = "<?php echo $doctor->id; ?>";
            $.post('{{ route('doctor-schedule-date') }}', {
                _token: '{{ csrf_token() }}',
                doctor_id: doctor_id
            }, function(holidays) {
                $('.dateWishTimeSlot').datepicker({
                    format: 'dd-mm-yyyy',
                    autoclose: true,
                    daysOfWeekDisabled: holidays,
                    startDate: "<?= date('d-M-Y') ?>",
                });
            });
        }

        // Doctor Date Wish Time Slot
        $('.dateWishTimeSlot').on('change', function() {
            let doctor_id = "<?php echo $doctor->id; ?>";
            let appoint_date = $(this).val();
            $.post('{{ route('doctor-time-slot') }}', {
                _token: '{{ csrf_token() }}',
                doctor_id: doctor_id,
                appoint_date: appoint_date
            }, function(doctorTimeSlot) {
                $("#slotTime").html("");
                let array_list = [];
                doctorTimeSlot.forEach(function(v, i) {
                    array_list.push(`<option value="${v.id}">${v.name}</option>`);
                });
                $('#slotTime').append(array_list);
            });

        });
    </script>

    <script type="text/javascript">
        $(function(){
            $(document).on('change','#fee_type',function(){
                var fee_type = $('#fee_type').val();
                var doctor_id = "<?php echo $doctor->id; ?>";
                $.ajax({
                    url:"{{route('get-doctor-visit-fee')}}",
                    type:"GET",
                    data:{'fee_type':fee_type,'doctor_id':doctor_id},
                    success:function(data){
                        $('.show_fee').val(data);
                    }
                });
            });
        });
    </script>
@endsection
