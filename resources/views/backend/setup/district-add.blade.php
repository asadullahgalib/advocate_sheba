@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>
          @if(@$editData)
          Update District
          @else
          Add District
          @endif 
          <a class="btn btn-sm btn-success float-right" href="{{route('setup.district.view')}}"><i class="fa fa-list"></i> District List</a></h5>
      </div>

      <!-- Form Start-->
        <form method="post" action="{{!empty($editData->id) ? route('setup.district.update',$editData->id) : route('setup.district.store')}}" id="myForm" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="card-body">
            <div class="show_module_more_event">
              <div class="form-row">
                
                <!-- ডিস্ট্রিক্ট নেম ইনপুট -->
                <div class="form-group col-md-6">
                  <label class="control-label">District Name</label>
                  <input type="text" name="name" id="name" class="form-control form-control-sm" value="{{@$editData->name}}" placeholder="District Name">
                </div>

                <!-- ইমেজ আপলোড ইনপুট -->
                <div class="form-group col-md-4">
                  <label class="control-label">District Image</label>
                  <input type="file" name="image" id="image" class="form-control form-control-sm">
                </div>

                <!-- ইমেজ লাইভ প্রিভিউ বক্স -->
                <div class="form-group col-md-2" style="padding-top: 5px;">
                  <img id="showImage" src="{{ (!empty($editData->image)) ? url('upload/district_images/'.$editData->image) : url('no_image.jpg') }}" style="width: 80px; height: 80px; border: 1px solid #ddd; object-fit: cover;">
                </div>

              </div>
            </div>
              
            <button type="submit" class="btn btn-success btn-sm">{{(@$editData) ? 'Update' : 'Submit'}}</button>
          </div>
        </form>
        <!--Form End-->

    </div>
  </div>

<script type="text/javascript">
    $(document).ready(function(){
      // ফর্ম ভ্যালিডেশন
      $('#myForm').validate({
          errorClass:'text-danger',
          validClass:'text-success',
          rules : {
              'name' : {
                  required : true,
              }
          },
          messages : {
              'name' : {
                  required : 'Please enter district name',
              }
          }
      });

      // ইমেজ সিলেক্ট করলে সাথে সাথে লাইভ প্রিভিউ দেখানোর স্ক্রিপ্ট
      $('#image').change(function(e){
          var reader = new FileReader();
          reader.onload = function(e){
              $('#showImage').attr('src', e.target.result);
          }
          reader.readAsDataURL(e.target.files['0']);
      });
    });
</script>

@endsection
