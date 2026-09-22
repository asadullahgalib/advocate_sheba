@extends('frontend.layouts.master')
@section('content')
<style>
    .custom_department{
        background: #fff;
          border: 1px solid red;
          -webkit-box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.05);
                  box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.05);
          -webkit-transition: 0.2s;
          transition: 0.2s;
          box-sizing: border-box !important;
    }
</style>
<section class="popular-categories section-padding">
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
              <div class="card-1 {{(@$department_title==$department->name)?'custom_department':''}}">
                  <figure class="img-hover-scale overflow-hidden">
                      <a href="{{route('our.department-wise-doctor',$department->id)}}">
                        <img src="{{url('public/upload/department_images/'.$department->image)}}" alt="Shastho Plus">
                      </a>
                  </figure>
                  <h6>
                      <a href="{{route('our.department-wise-doctor',$department->id)}}">{{$department->name}}</a>
                  </h6>
              </div>
            @endforeach
          </div>
      </div>
  </div>
</section>
<section class="section-padding pb-5" style="background-color:#f5f5f5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row product-grid-4">
                    @foreach($doctors as $doctor)
                    <div class="col-md-3 col-xl-3 col-sm-3 col-lg-3">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <img class="default-img" src="{{asset('public/upload/employee_images/'.$doctor->image)}}" alt="Shastho Plus">
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot" style="width:190px;">{{@$doctor['department']['name']}}</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2 style="padding-top:15px;font-size: 18px;">
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
                                        <a class="add btn btn-primary btn-sm doctor_booking appointmentBtn" data-id="{{$doctor->id}}" style="padding: 5px 7px !important;background-color: #fff;color: #000;max-width: 120px;width: 120px;border: 1px solid #129AF7;"> Appointment </a>
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
    </div>
</section>
@endsection