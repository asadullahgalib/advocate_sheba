@extends('frontend.layouts.master')
@section('content')
<section style="padding: 25px 0px 30px 0px;background-color: #f5f5f5;margin-bottom: 20px;">
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
                                        <img class="default-img" src="{{url('public/upload/category_images/'.$category->image)}}" alt="Shastho Plus" />
                                        <img class="hover-img" src="{{url('public/upload/category_images/'.$category->image)}}" alt="Shastho Plus" />
                                    </a>
                                @endif
                                @if($category->id=='2')
                                    <a href="{{route('our.category-details',$category->id)}}">
                                        <img class="default-img" src="{{url('public/upload/category_images/'.$category->image)}}" alt="Shastho Plus" />
                                        <img class="hover-img" src="{{url('public/upload/category_images/'.$category->image)}}" alt="Shastho Plus" />
                                    </a>
                                @endif
                                @if($category->id=='3')
                                    <a href="{{route('our.package-list')}}">
                                        <img class="default-img" src="{{url('public/upload/category_images/'.$category->image)}}" alt="Shastho Plus" />
                                        <img class="hover-img" src="{{url('public/upload/category_images/'.$category->image)}}" alt="Shastho Plus" />
                                    </a>
                                @endif
                                @if($category->id=='4')
                                    <a href="{{route('our.ambulance-list')}}">
                                        <img class="default-img" src="{{url('public/upload/category_images/'.$category->image)}}" alt="Shastho Plus" />
                                        <img class="hover-img" src="{{url('public/upload/category_images/'.$category->image)}}" alt="Shastho Plus" />
                                    </a>
                                @endif
                                @if($category->id=='5')
                                    <a href="{{route('our.category-details',$category->id)}}">
                                        <img class="default-img" src="{{url('public/upload/category_images/'.$category->image)}}" alt="Shastho Plus" />
                                        <img class="hover-img" src="{{url('public/upload/category_images/'.$category->image)}}" alt="Shastho Plus" />
                                    </a>
                                @endif
                                @if($category->id=='6')
                                    <a class="nurseBtn">
                                        <img class="default-img" src="{{url('public/upload/category_images/'.$category->image)}}" alt="Shastho Plus" />
                                        <img class="hover-img" src="{{url('public/upload/category_images/'.$category->image)}}" alt="Shastho Plus" />
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
<section style="padding: 30px 0px 30px 0px;background-color: #f5f5f5;margin-bottom: 70px;border-radius: 15px;">
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

<script>
    $(document).on('click','.myAmbulanceBtn',function(){
        $('#ambulanceModal').modal('show');
      });
    $(document).on('click','.close,.appointment_close',function(){
        $('#ambulanceModal').modal('hide');
    });  
</script>

@endsection