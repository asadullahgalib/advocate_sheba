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
</style>
@if(@$page_type !='nursing')
<section style="padding: 30px 0px 25px 0px;background-color: #f5f5f5;margin-bottom: 15px;border-radius: 15px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <form class="card card-sm" method="POST" action="{{route('our.doctor-find')}}">
                    @csrf
                    <div class="card-body row no-gutters align-items-center" style="padding: 5px 15px !important;">
                        <div class="col-auto">
                            <i class="fa fa-search h4 text-body"></i>
                        </div>
                        <!--end of col-->
                        <div class="col">
                            <input class="form-control form-control-lg form-control-borderless" name="name" type="search" placeholder="Search doctors name" id="name" value="{{old('name')}}" min="3" autocomplete="off" required>
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
            <div class="col-12 col-md-10 col-lg-8" id="doctorStatus">
            </div>
        </div>
    </div>
</section>

<section class="popular-categories section-padding"  style="background-color:#f5f5f5;padding: 5px 0px 25px 0px;margin-bottom: 15px;border-radius: 15px;">
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
@endif
<section class="section-padding pb-5" style="background:#f5f5f5;padding: 30px 0px 35px 0px;margin-bottom: 15px;border-radius: 15px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row product-grid-4">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="title text-center">
                            <h3 style="color: #1B489D;font-size: 25px;margin-bottom: 20px;">
                                @if(@$page_type =='doctor')
                                    Doctor List
                                @elseif(@$page_type =='nursing')
                                    Nurse List
                                @endif
                            </h3>
                        </div>
                    </div>
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
            <div class="col-lg-12 col-md-12 col-sm-12" style="margin-bottom: 40px;">
                {{$doctors->links()}}
            </div>
        </div>
    </div>
</section>
@endsection