@extends('frontend.layouts.master')
@section('content')
<style type="text/css">
   .vendor-wrap .vendor-img-action-wrap img {
   max-width: 100%;
   }
   .form-control {
       padding: 0px !important;
   }
   .form-group {
      margin-bottom: -5px !important;
   }
   @media only screen and (min-width:320px) and (max-width:720px){
      .custom_registration{
         padding: 0px 30px !important;
      }
   }
</style>
<main class="main pages" style="background-color:#f5f5f5;padding: 50px 0px;margin-bottom: 100px;">
   <div class="page-content pt-50" style="padding-top:0px !important">
      <div class="container">
         <div class="row">
            <div class="col-xl-10 offset-xl-1 col-md-10 offset-md-1 col-lg-10 offset-lg-1 col-sm-10 offset-sm-1">
               <div class="product-cart-wrap mb-30 custom_registration" style="margin-bottom:0px !important">
                  <div class="product-img-action-wrap" style="padding: 0px 0px 0 0px !important;">
                     <div class="row">
                        <div class="col-md-8 py-5 border">
                           <h2 style="font-size: 18px;color: #1B489D;margin-top: -15px;padding-bottom: 18px;text-align: center;"> Register <span style="font-size:25px;">&reg;</span></h2>
                           <div class="row">
                              <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-xl-10 offset-xl-1 col-sm-10 offset-sm-1">
                                 <form method="POST" action="{{route('our.doctor-reg.store')}}" id="RegistrationForm">
                                    @csrf
                                    <div class="row">
                                       <div class="form-group col-md-6">
                                          <div class="input-group mb-3">
                                             <div class="input-group-append">
                                                 <span class="input-group-text" style="padding: 7px 12px;"><i class="fa fa-user"></i></span>
                                             </div>
                                             <input type="text" class="form-control" value="{{old('name')}}" name="name" placeholder="Full Name *">
                                          </div>
                                          <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                                       </div>
                                       <div class="form-group col-md-6">
                                          <div class="input-group mb-3">
                                             <div class="input-group-append">
                                                 <span class="input-group-text" style="padding: 7px 12px;"><i class="fa fa-user"></i></span>
                                             </div>
                                             <input type="text" class="form-control" value="{{old('qualification')}}" name="qualification" placeholder="Qualification *">
                                          </div>
                                          <font style="color:red">{{($errors->has('qualification'))?($errors->first('qualification')):''}}</font>
                                       </div>
                                       <div class="form-group col-md-6">
                                          <div class="input-group mb-3">
                                             <div class="input-group-append">
                                                 <span class="input-group-text" style="padding: 6px 12px;"><i class="fa fa-user"></i></span>
                                             </div>
                                             <select class="form-control" name="department_id">
                                                <option value="">Select Department</option>
                                                @foreach($departments as $department)
                                                <option value="{{$department->id}}" {{(old("department_id"))?"selected":""}}>{{$department->name}}</option>
                                                @endforeach
                                             </select>
                                          </div>
                                          <font style="color:red">{{($errors->has('department_id'))?($errors->first('department_id')):''}}</font>
                                       </div>
                                       <div class="form-group col-md-6">
                                          <div class="input-group mb-3">
                                             <div class="input-group-append">
                                                 <span class="input-group-text" style="padding: 7px 12px;"><i class="fa fa-phone"></i></span>
                                             </div>
                                             <input type="text" class="form-control" value="{{old('mobile')}}" name="mobile" placeholder="Contact No *">
                                          </div>
                                          <font style="color:red">{{($errors->has('mobile'))?($errors->first('mobile')):''}}</font>
                                       </div>
                                       <div class="form-group col-md-6">
                                          <div class="input-group mb-3">
                                             <div class="input-group-append">
                                                 <span class="input-group-text" style="padding: 7px 12px;"><i class="fa fa-user"></i></span>
                                             </div>
                                             <input type="text" class="form-control" value="{{old('mbbs_fcp')}}" name="mbbs_fcp" placeholder="BMDC|BDS|Others">
                                          </div>
                                       </div>
                                       <div class="form-group col-md-6">
                                          <div class="input-group mb-3">
                                             <div class="input-group-append">
                                                 <span class="input-group-text" style="padding: 7px 12px;"><i class="fa fa-user"></i></span>
                                             </div>
                                             <input type="text" class="form-control" value="{{old('work_place')}}" name="work_place" placeholder="Work Place *">
                                          </div>
                                          <font style="color:red">{{($errors->has('work_place'))?($errors->first('work_place')):''}}</font>
                                       </div>
                                       <div class="form-group col-md-12 text-center">
                                          <button type="submit" class="btn btn-info btn-sm" style="background:#1B489D;color: #fff;min-width: 150px;font-weight: bold;">Submit</button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 py-5 bg-primary text-white text-center">
                           <div class=" ">
                              <div class="card-body">
                                 <img src="{{asset('public/frontend/doct.png')}}" style="width:100%">
                                 <h2 class="py-3" style="font-size: 23px;color: #fff;">WELCOME TO OUR SITE</h2>
                                 <p style="font-size: 16px;color: #fff;padding-top: 30px;">For Any Support Please Call at</p>
                                 <a class="add btn btn-primary btn-sm doctor_profile" style="font-size:12px;padding: 11px 7px !important;background-color: #BF1E2D;background-color: #447DC3;min-width: 162px;width: 162px;"> {{@$contact->mobile_no}} </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>

<script type="text/javascript">
  $(document).ready(function () {  
      $('#RegistrationForm').validate({
        ignore:[],
        rules: {          
          name: {
            required: true,
            maxlength : 100,
          },
          qualification: {
            required: true,
            maxlength : 200,
          },
          department_id: {
            required: true,
          },
          mobile: {
            required: true,
            maxlength : 15,
            minlength: 11,
          },
          work_place: {
            required: true,
            maxlength : 120,
          },
          // email: {
          //   required: true,
          //   maxlength : 100,
          // },
          // experience: {
          //   required: true,
          //   maxlength : 120,
          // },
          // password: {
          //   required: true,
          // },
          // password2: {
          //   required: true,
          //   equalTo : '#password'
          // },
        },
        messages: { 
          password : {
            required : 'Please enter password',
          },
          password2 : {
            required : 'Please enter confirm password',
            equalTo : 'Confirm password does not match',
          }
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