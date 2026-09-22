<section class="section-padding pb-5" style="background:#f5f5f5;padding: 25px 0px 25px 0px;margin-bottom: 15px;border-radius: 15px;">
    <div class="container">
        <div class="row" style="margin-bottom:10px;">
            <div class="col-md-12">
                <h3 style="text-align: left;margin-bottom: 25px;font-size: 20px;color: #1B489D;font-weight: bold;">
                    Related Doctors
                </h3>
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
                                            <img class="default-img" src="{{asset('frontend/doctor.png')}}" alt="Doctors Sheba">
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
                                                <a class="add btn btn-primary btn-sm doctor_profile" href="{{route('doctor-profile')}}" style="padding: 5px 7px !important;background-color: #BF1E2D;background-color: #129AF7;min-width: 120px;width: 120px;"> Profile </a>
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