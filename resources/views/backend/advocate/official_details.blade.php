@extends('backend.layouts.master')
@section('content')
<style type="text/css">
  .profile-userpic img {
    float: none;
    margin: 0 auto;
    width: 120px;
    height: 130px;
    background-color: #ddd;
    padding: 3px;
  }
</style>
<style type="text/css">
  .btn_active{
    background: #F70F9E;
    color: #fff;
    text-decoration: underline !important;
  }
</style>

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
            Legal Professional Details Info
            <a href="{{ route('advocates.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Legal Professional List</i></a>
        </h3>
      </div>

      <div class="card-body">
        <div class="row">
          <div class="col-md-8 col-xs-6">
            <table>
              <tr>
                <td><strong style="font-size:25px">{{@$details->name}} - {{@$details->name_bn}}</strong> </td>
              </tr>
              <tr>
                <td>{{@$details->present_address}}</td>
              </tr>
              <tr>
                <td><strong>Mobile No :</strong> {{@$details->mobile}}</td>
              </tr>
              <tr>
                <td><strong>Email :</strong> {{@$details->email}}</td>
              </tr>
            </table>
          </div>
          <div class="col-md-4 col-xs-6">
            <div class="profile-sidebar">
            <div class="profile-userpic text-center">
              <img src="{{(!empty(@$details->image))?url('uploads/advocates_images/'.@$details->image):url('uploads/no_image.png')}}" class="img-responsive" alt="">
            </div>
          </div>
          </div>
          @include('backend.advocate.advocate_tab')
        </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <!-- ফর্ম ট্যাগে সঠিক অ্যাকশন রুট এবং enctype সেট করা আছে -->
          <form role="form" action="{{ route('advocates.official.details.store', $details->id) }}" method="POST" enctype="multipart/form-data" id="MyForm">
        @csrf
          <div class="card-body">
            <div class="form-row">                   
              <div class="form-group col-md-4">
                <label for="name">Name English <span style="color:red">*</span></label>
                <input type="text" name="name" class="form-control form-control-sm" placeholder="Full Name" value="{{ (@$editData)?@$editData->name:old('name') }}"> 
                <font style="color: red"> 
                  {{($errors->has('name'))?($errors->first('name')):''}} 
                </font>                 
              </div>
              <div class="form-group col-md-4">
                <label for="name">Name Bangla <span style="color:red">*</span></label>
                <input type="text" name="name_bn" class="form-control form-control-sm" placeholder="সম্পূর্ণ নামঃ" value="{{ (@$editData)?@$editData->name_bn:old('name_bn') }}"> 
                <font style="color: red"> 
                  {{($errors->has('name_bn'))?($errors->first('name_bn')):''}} 
                </font>                 
              </div>
              <div class="form-group col-md-4">
                <label for="mobile">Contact No </label>
                <input type="text" name="mobile" class="form-control form-control-sm" value="{{ @$editData->mobile }}"> 
                <font style="color: red"> 
                  {{($errors->has('mobile'))?($errors->first('mobile')):''}} 
                </font>                 
              </div>
              
              <div class="form-group col-md-4">
                <label for="designation_id">Designation <span style="color:red">*</span></label>
                <select name="designation_id" class="form-control form-control-sm select2">
                  <option value="">Select Designation</option>
                  @foreach($designations as $designation)
                    <option value="{{ $designation->id }}" {{(@$editData->designation_id == $designation->id)?"selected":""}}>{{ $designation->name }}</option>
                  @endforeach
                </select> 
                <font style="color: red"> 
                  {{($errors->has('designation_id'))?($errors->first('designation_id')):''}} 
                </font>                 
              </div>
              <div class="form-group col-md-4">
                <label for="email">Email <span style="color:red">*</span></label>
                <input type="email" name="email" class="form-control form-control-sm" placeholder="Enter Email Address" value="{{ @$editData->email }}"> 
                <font style="color: red"> 
                  {{($errors->has('email'))?($errors->first('email')):''}} 
                </font>                 
              </div>
              <div class="form-group col-md-4">
                <label>Total Experience <span style="color:red">*</span></label>
                <input type="text" name="experience" class="form-control form-control-sm" value="{{ @$editData->experience }}"> 
              </div>
              
              <div class="form-group col-md-4">
                <label>IMO/What's App </label>
                <input type="text" name="appointment_contact" class="form-control form-control-sm" value="{{ @$editData->appointment_contact }}" placeholder="Contact No"> 
              </div>

              <!-- মেইন প্রোফাইলের মতো ইমেজ আপলোড অপশন -->
              <div class="form-group col-sm-4">
                <label>Image <span style="color:red;">(300px X 300px)</span></label>
                <input type="file" name="image" id="image" class="form-control form-control-sm">
              </div>
              
              <!-- স্কয়ার ৩০০x৩০০ রেশিওর লাইভ ইমেজ প্রিভিউ বক্স -->
              <div class="form-group col-sm-2" style="z-index: 100;">
                <img id="showImage" src="{{(!empty($editData->image)) ? url('uploads/advocates_images/'.$editData->image) : url('uploads/no_image.png')}}" style="width: 100px; height: 100px; aspect-ratio: 1/1; object-fit: cover; border:1px solid #000;" class="form-control">
              </div>
              <!-- ১০. ফর্ম সাবমিট ও আপডেট বাটন সেকশন -->
              <div class="form-group col-md-12" style="padding-top: 15px;">
                <button type="submit" class="btn btn-primary btn-sm">@if(isset($editData)) Update @else Submit @endif</button>
              </div>
            </div>
          </div>
      </form>
        </div>
      </div>
    </div>

    </div>
  </div>

<!-- জাভাস্ক্রিপ্ট এবং লাইভ ইমেজ প্রিভিউ স্ক্রিপ্ট -->
<script type="text/javascript">
  $(document).ready(function () {  
    
    // ছবি সিলেক্ট করার সাথে সাথে চারকোনা বক্সে লাইভ থাম্বনেইল চেঞ্জ করার ফাংশন
    $('#image').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#showImage').attr('src', e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });

    // jQuery Validation স্ক্রিপ্ট
    $('#MyForm').validate({
      rules:{
        name:{
          required:true
        },
        name_bn:{
          required:true
        },
        designation_id:{
          required:true
        },
        email:{
          required:true,
          email:true
        },
        experience:{
          required:true
        }
      },
      messages: {      
        name: { required: "Please enter English name" },
        name_bn: { required: "Please enter Bangla name" },
        designation_id: { required: "Please select a designation" },
        email: { required: "Please enter email address", email: "Please enter a valid email" },
        experience: { required: "Please enter total experience" }
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
