@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3>Edit Company Info
          <a class="btn btn-success float-right btn-sm custom_btn" href="{{route('site-setting.contents.contact.view')}}"><i class="fa fa-list"></i> Company Info List</a>
        </h3>
      </div>

      <div class="card-body">
        <form method="post" action="{{route('site-setting.contents.contact.update',$editData->id)}}" id="myForm" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="name">Company Name</label>
              <input type="text" name="name" value="{{$editData->name}}" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label for="mobile_no">Mobile No</label>
              <input type="text" name="mobile_no" value="{{$editData->mobile_no}}" class="form-control">
            </div>
            
            <div class="form-group col-md-4">
              <label for="email">Email</label>
              <input type="email" name="email" value="{{$editData->email}}" class="form-control">
            </div>
            <div class="form-group col-md-12">
              <label for="address">Address</label>
              <input type="text" name="address" value="{{$editData->address}}" class="form-control">
            </div>

            <div class="form-group col-md-4">
              <label for="facebook">Facebook</label>
              <input type="text" name="facebook" value="{{$editData->facebook}}" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label for="youtube">Youtube</label>
              <input type="text" name="youtube" value="{{$editData->youtube}}" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label for="twitter">Twitter</label>
              <input type="text" name="twitter" value="{{$editData->twitter}}" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label for="instagram">Instagram</label>
              <input type="text" name="instagram" value="{{$editData->instagram}}" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label for="linkedin">Linkedin</label>
              <input type="text" name="linkedin" value="{{$editData->linkedin}}" class="form-control">
            </div>
            <!-- <div class="form-group col-md-4">
              <label for="image">Profile Image <span style="color: red;">(Size:1920px X 320px)</span></label>
              <input type="file" name="image" class="form-control" id="image">
            </div>
            <div class="form-group col-md-3">
              <img id="showImage" src="{{(!empty($editData->image))?url('uploads/profile_images/'.$editData->image):url('uploads/no_image.png')}}" style="width: 300px; height: 150px" class="form-control">
            </div> -->
            <div class="form-group col-md-12">
              <input type="submit" value="Update" class="btn btn-primary">
            </div>
          </div>
        </form>
      </div><!-- /.card-body -->

    </div>
  </div>

<script type="text/javascript">
  $(document).ready(function () {  
    $('#myForm').validate({
      rules:{
        name:{
          required:true
        },
        mobile_no:{
          required:true
        },
        email:{
          required:true,
          email: true
        },
        address:{
          required:true
        }
      },
      messages: {      
        name: {
          required: "Please enter company name"
        },
        mobile_no: {
          required: "Please enter mobile number"
        },
        email: {
          required: "Please enter email address",
          email: "Please enter a valid email address"
        },
        address: {
          required: "Please enter address"
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
