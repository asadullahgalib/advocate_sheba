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

      @include('backend.advocate.advocate_tab')
      
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{route('advocates.engagement.details.store',$details->id)}}" id="myForm">
            @csrf
            <div class="form-row">
              
              <div class="form-group col-md-12">
                <label for="social">Description <span style="color:red;">*</span></label>
                <!-- ইনপুটের নাম name="social" এবং আইডি id="social" করা হলো -->
                <textarea name="social" id="social" class="form-control" rows="5">{!! @$details->social !!}</textarea>
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

        CKEDITOR.dtd.$removeEmpty['i'] = false;

        var editor2 = CKEDITOR.replace('social', {
            allowedContent: true,
            fillEmptyBlocks: false,
            basicEntities: false
        });

        CKFinder.setupCKEditor(editor2, '/ckfinder/');

        editor2.on('change', function() {
            editor2.updateElement();
            $('#myForm').validate().element('#social');
        });

        $('#myForm').on('submit', function() {
            editor2.updateElement();
        });

    });
 </script>

<script type="text/javascript">
    $(document).ready(function () {
      $('textarea[name="social"]').each(function(){
          $(this).val($(this).val().trim());
      });

      $('#myForm').validate({
        ignore : [],
        debug : false,
        rules: {
          social: {
            required: true,
          }
        },
        messages: {
          social: {
            required: "Please enter the engagement description",
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
