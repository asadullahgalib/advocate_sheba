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
          <!-- ফর্ম অ্যাকশন রুটের নাম চেম্বার স্টোর অনুযায়ী ঠিক করা হলো -->
          <form method="post" action="{{route('advocates.chamber.details.store',$details->id)}}" id="myForm">
            @csrf
            <div class="form-row">
              
              <div class="form-group col-md-12">
                <label for="chamber">Description <span style="color:red;">*</span></label>
                <!-- লারাভেল ব্লেড সিনট্যাক্স দিয়ে ডাটা শো করানো হলো -->
                <textarea name="chamber" id="chamber" class="form-control" rows="5">{!! @$details->chamber !!}</textarea>
              </div>

              <div class="form-group col-md-3">
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    </div>
  </div>

  <script type="text/javascript">
  $(document).ready(function(){
    var editor2 = CKEDITOR.replace('chamber');
    CKFinder.setupCKEditor(editor2, '/ckfinder/');
    
    editor2.on('change', function() {
        editor2.updateElement();
        // CKEditor চেঞ্জ হলে সরাসরি ভ্যালিডেশন চেক করবে
        $('#myForm').validate().element('#chamber');
    });
  });
</script>

<script type="text/javascript">
    $(document).ready(function () {
      $('textarea[name="chamber"]').each(function(){
          $(this).val($(this).val().trim());
      });

      $('#myForm').validate({
        ignore : [],
        debug : false,
        rules: {
          // title_en রুলসটি বাদ দেওয়া হয়েছে যা আগে ফর্ম সাবমিট আটকে দিচ্ছিল
          chamber: {
            required: true,
          }
        },
        messages: {
          chamber: {
            required: "Please enter the description",
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
