@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          @if(isset($editData))
            SMS Update
          @else
            SMS Add
          @endif
          <a href="{{ route('human-resource.hrm.sms.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> SMS List</i></a>
        </h3>
      </div>

      <form role="form" action="{{(@$editData)?route('human-resource.hrm.sms.update',$editData->id):route('human-resource.hrm.sms.store')}}" method="POST" enctype="multipart/form-data" id="MyForm">
        @csrf
          <div class="card-body">
            <div class="form-row">                   
              <div class="form-group col-md-12">
                <label for="name">Doctor Booking SMS</label>
                <textarea name="booking_msg" class="form-control">{{@$editData->booking_msg}}</textarea>
              </div>
              <div class="form-group col-md-12">
                <label for="name">Doctor Registration SMS</label>
                <textarea name="signup_msg" class="form-control">{{@$editData->signup_msg}}</textarea>
              </div>
              <div class="form-group col-md-12">
                <label for="name">Doctor Approve SMS</label>
                <textarea name="doctor_approve_msg" class="form-control">{{@$editData->doctor_approve_msg}}</textarea>
              </div>
              <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary btn-sm">@if(isset($editData)) Update @else Submit @endif</button>
              </div>
            </div>
          </div>
        </form>            

    </div>
  </div>

<script type="text/javascript">
  $(document).ready(function () {  
    $('#MyForm').validate({
      rules: {           
        booking_msg: {
          required: true,
        },
        signup_msg: {
          required: true,
        },
        doctor_approve_msg: {
          required: true,
        },     
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