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
                <!-- District Name Field -->
                <div class="form-group col-md-6">
                  <label class="control-label">District Name</label>
                  <input type="text" name="name" id="name" class="form-control form-control-sm" value="{{@$editData->name}}" placeholder="District Name">
                </div>

                <!-- Image Input Field with Red Size Notice -->
                <div class="form-group col-md-4">
                  <label for="image">Image <span style="color:red;">(200px X 90px)</span></label>
                  <input type="file" name="image" class="form-control form-control-sm" id="image">
                </div>

                <!-- Image Live Preview Box -->
                <div class="form-group col-md-2" style="padding-top: 10px;">
                  <img id="showImage" src="{{(!empty($editData->image)) ? url('public/uploads/district_images/'.$editData->image) : url('public/upload/no_image.png')}}" style="width: 100px; height: 80px; border:1px solid #000;">
                </div>
              </div>
            </div>
              
            <button type="submit" class="btn btn-success btn-sm">{{(@$editData) ? 'Update' : 'Submit'}}</button>
          </div>
        </form>
        <!--Form End-->

    </div>
  </div>

<!-- jQuery Form Validation and Live Image Preview Script -->
<script>
    $(document).ready(function(){
      // Live Image Preview function
      $('#image').change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
          $('#showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
      });

      // Form Validation
      $('#myForm').validate({
        errorClass:'text-danger',
        validClass:'text-success',
        rules : {
            'name' : {
                required : true,
            },
        },
        messages : {
            'name' : {
                required : 'Please enter district name',
            }
        }
      });
    });
</script>

@endsection
