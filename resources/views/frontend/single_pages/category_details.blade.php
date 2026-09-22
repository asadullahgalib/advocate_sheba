@extends('frontend.layouts.master')
@section('content')
<style type="text/css">
    .card .card-header{
        padding: 5px 0px 0px 15px !important;
    }
    .form-group {
        margin-bottom: 0px !important;
    }
    .card-body {
        flex: 1 1 auto;
        padding: 1px 15px !important;
    }
    span.custom {
        cursor: pointer;
    }
    #upload-photo {
       opacity: 0;
       position: absolute;
       z-index: 1;
    }
    .accept {
        width: 90px;
        height: 65px;
        border-radius: 10px;
        padding: 5px;
    }
</style>
<main class="main pages">
   <div class="page-content pt-50" style="padding:0px 0px 200px 0px">
      <div class="container">
         <div class="archive-header-2">
            <h1 class="display-2 mb-50 text-brand" style="font-size: 25px;text-align: center; margin-bottom: 30px !important;">{{@$category->name}} Booking Form</h1>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xl-4">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="#">
                                    <img class="default-img" src="{{asset('public/upload/category_images/'.@$category->image)}}" alt="Shastho Plus">
                                    <img class="hover-img" src="{{asset('public/upload/category_images/'.@$category->image)}}" alt="Shastho Plus">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-xl-8 col-sm-8">

                    <form method="POST" action="{{route('our.category-details.store')}}" id="BookingForm" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="category_id" value="{{@$category->id}}">
                        <div class="product-cart-wrap mb-30" style="margin-bottom: 10px !important;">
                            <div class="product-content-wrap" style="padding: 7px 10px;">
                                 <h2 style="font-size: 18px;color: #1B489D;    padding: 15px 0px;">Patient Details:</h2>
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
                                    <div class="form-group col-md-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-append" style="width:100%">
                                               <span class="input-group-text custom" style="padding: 7px 12px;"><i class="fa fa-file" style="margin-right:10px;"></i> Upload Prescription</span>
                                            </div>
                                            <input type="file" name="image" class="form-control form-control-sm" id="upload-photo" style="width:100%">
                                         </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                               <span class="input-group-text" style="padding: 41px 12px;"><i class="fa fa-envelope"></i></span>
                                            </div>
                                            <textarea name="description" class="form-control form-control-sm" placeholder="Write test name or others" style="height:100px"></textarea>
                                         </div>
                                    </div>
                                    <div class="form-group col-md-6 offset-md-3">
                                        <button type="submit" class="btn btn-info"
                                            style="background:#1B489D;color: #fff;margin: 15px 0px;font-size: 17px;font-weight: bold;width: 100%;">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-cart-wrap mb-30" style="margin-bottom: 10px !important;">
                            <div class="product-content-wrap" style="padding: 0px 10px;background: whitesmoke;">
                                <div class="product-content-wrap" style="padding: 7px 0px;">
                                    <h2 style="font-size: 18px;color: #1B489D;">Payment No: 01315225563 (Personal)</h2>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 text-center" style="background: whitesmoke;">
                                        <img class="accept" src="https://travellopediabd.com/public/frontend/images/ac4.jpg">
                                        <img class="accept" src="https://travellopediabd.com/public/frontend/images/ac5.jpg">
                                        <img class="accept" src="https://travellopediabd.com/public/frontend/images/ac6.jpg">
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
            name: {
              required : true,
              maxlength : 120,
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
@endsection