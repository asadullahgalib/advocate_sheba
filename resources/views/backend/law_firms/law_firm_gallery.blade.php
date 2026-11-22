@extends('backend.layouts.master')
@section('content')

<div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Law Firm Photo Gallery
                <a href="{{ route('law-firms.view') }}" class="btn btn-success float-right btn-sm"><i class="fa fa-list"></i> Law Firm List</a>
            </h3>
        </div>

        <div class="card-body">

            @include('backend.law_firms.law_firm_header')

            <!-- ছবি আপলোড করার ফর্ম -->
            <div class="card-body mt-4" style="border: 1px solid #cac9c9; padding: 15px;">
                <form method="post" action="{{ route('law-firms.gallery.details.store', $details->id) }}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="caption">Caption/Title</label>
                            <input type="text" name="caption" id="caption" class="form-control form-control-sm" placeholder="Enter Photo Caption">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="image">Upload Gallery Photo <span style="color:red;">*(500px X 500px)</span></label>
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

            <!-- গ্যালারির ছবিগুলো দেখানোর সেকশন -->
            <div class="card-body mt-3">
                <hr>
                <h5>Existing Gallery Photos</h5>
                <div class="row" style="padding-top: 15px;">
                    @if(isset($gallery_details) && count($gallery_details) > 0)
                        @foreach($gallery_details as $photo)
                            <div class="col-md-3 col-sm-4 text-center" style="margin-bottom: 20px;">
                                <div class="thumbnail" style="border: 1px solid #ddd; padding: 10px; background: #f9f9f9; border-radius: 4px;">
                                    <img src="{{ url('uploads/law_firm_gallery_images/'.$photo->image) }}" style="width: 100%; height: 150px; object-fit: cover; border-radius: 2px;">
                                    <div class="caption" style="padding-top: 5px;">
                                        <p style="margin-bottom: 5px; font-weight: bold;">{{ $photo->title ?? 'No Title' }}</p>
                                        <a id="delete" href="{{ route('law-firms.gallery.details.delete') }}" data-token="{{ csrf_token() }}" data-id="{{ $photo->id }}" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-md-12 text-center">
                            <p class="text-muted">এই ফার্মের গ্যালারিতে কোনো ছবি পাওয়া যায়নি।</p>
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function () {  
    // ছবি সিলেক্ট করলে সাথে সাথে লাইভ প্রিভিউ
    $('#image').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#showImage').attr('src', e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });

    $('#myForm').validate({
      errorClass:'text-danger',
      validClass:'text-success',
      rules: {
        image: { required: true }
      }
    });
  });
</script>
@endsection