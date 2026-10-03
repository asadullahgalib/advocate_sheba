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
            Legal Professional Photo Gallery Info
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
              <img src="{{(!empty(@$details->image) && $details->image != 'no_image.jpg') ? url('uploads/advocates_images/'.@$details->image) : url('uploads/no_image.png')}}" class="img-responsive" alt="">
            </div>
          </div>
          </div>
          @include('backend.advocate.advocate_tab')
        </div>
      </div>

      <div class="card-body">
        <table class="table table-bordered table-sm">
          <thead>
          <tr>
            <th width="8%">SL</th>
            <th>Title</th>
            <th>Image</th>
            <th width="13%">Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach($gallery_details as $key=> $value)
            <tr class="text-center">
              <td>{{ $key + 1 }}</td>
              <td>{{ $value->title }}</td>
              <td>
                <img src="{{(!empty(@$value->image))?url('uploads/gallery_images/'.@$value->image):url('uploads/no_image.png')}}" width="50%">
              </td>
              <td>
                <a href="{{ route('human-resource.hrm.slider.edit',$value->id) }}" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>     
                <a id="delete" href="{{ route('human-resource.hrm.slider.delete') }}" data-token="{{csrf_token()}}" data-id="{{$value->id}}" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>
              </td>
            </tr> 
          @endforeach               
          </tbody>
        </table>
      </div>
    
      <!-- নতুন ছবি আপলোড করার ফর্ম -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-12" style="border: 1px solid #cac9c9;">
            <form method="post" action="{{ route('advocates.gallery.details.store', $details->id) }}" id="myForm" enctype="multipart/form-data">
              @csrf
              <div class="form-row">

                <div class="form-group col-md-6">
                  <label for="caption">Caption/Title</label>
                  <input type="text" name="caption" id="caption" class="form-control form-control-sm" placeholder="Enter Photo Caption">
                </div>

                <div class="form-group col-md-4">
                  <label for="image">Upload Gallery Photo <span style="color:red;">*</span></label>
                  <input type="file" name="image" id="image" class="form-control form-control-sm" required>
                </div>

                <div class="form-group col-md-2 text-center" style="z-index: 100;">
                  <label>Preview</label>
                  <div>
                    <img id="showImage" src="{{ url('uploads/no_image.png') }}" style="width: 80px; height: 60px; object-fit: cover; border:1px solid #000;">
                  </div>
                </div>

                <div class="form-group col-md-3" style="padding-top: 10px;">
                  <button type="submit" class="btn btn-primary btn-sm">Add Image</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    <!-- গ্যালারির ছবিগুলো দেখানোর সেকশন -->
    <div class="card-body">
      <hr>
      <h5>Existing Gallery Photos</h5>
      <div class="row" style="padding-top: 15px;">
        @if(isset($gallery_details) && count($gallery_details) > 0)
          @foreach($gallery_details as $photo)
            <div class="col-md-3 col-sm-4 text-center" style="margin-bottom: 20px;">
              <div class="thumbnail" style="border: 1px solid #ddd; padding: 10px; background: #f9f9f9; border-radius: 4px;">
                <img src="{{ url('uploads/gallery_images/'.$photo->image) }}" style="width: 100%; height: 150px; object-fit: cover; border-radius: 2px;">
                <div class="caption" style="padding-top: 5px;">
                  <!-- ডাটাবেজের title কলামটি প্রিন্ট করা হলো -->
                  <p style="margin-bottom: 5px; font-weight: bold;">{{ $photo->title ?? 'No Title' }}</p>
                  
                  <!-- আপনার পছন্দের AJAX ডিলিট বাটন -->
                  <a id="delete" href="{{ route('advocates.gallery.details.delete') }}" data-token="{{ csrf_token() }}" data-id="{{ $photo->id }}" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i> Delete</a>
                </div>
              </div>
            </div>
          @endforeach
        @else
          <div class="col-md-12 text-center">
            <p class="text-muted">এই ইউজারের গ্যালারিতে কোনো ছবি পাওয়া যায়নি।</p>
          </div>
        @endif
      </div>
    </div>

    </div>
  </div>

<script type="text/javascript">
  $(document).ready(function () {  
    // ছবি সিলেক্ট করলে সাথে সাথে বক্সে লাইভ প্রিভিউ দেখানোর ফাংশন
    $('#image').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#showImage').attr('src', e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });

    // ফর্ম ভ্যালিডেশন
    $('#myForm').validate({
      errorClass:'text-danger',
      validClass:'text-success',
      rules: {
        image: {
          required: true,
        }
      }
    });
  });
</script>
@endsection
