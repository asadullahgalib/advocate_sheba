@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          @if(isset($editData))
            Password Update
          @else
            Doctor Add
          @endif
          <a href="{{ route('payroll.employee.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Doctor List</i></a>
        </h3>
      </div>

      <form role="form" action="{{route('payroll.employee.view.update.passowrd',$editData->id)}}" method="POST" enctype="multipart/form-data" id="MyForm">
        @csrf
          <div class="card-body">
            <div class="form-row">                   
              <div class="form-group col-md-6">
                <label for="name">Password <span style="color:red">*</span></label>
                <input type="text" name="password" class="form-control form-control-sm" placeholder="Enter Password here"> 
              </div>
              <div class="form-group col-md-8">
                <button type="submit" class="btn btn-primary btn-sm">@if(isset($editData)) Update Password @else Submit @endif</button>
              </div>
            </div>
          </div>
        </form>

    </div>
  </div>

<script type="text/javascript">
  $(document).ready(function () {  
    $('#MyForm').validate({
      rules:{
        password:{
          required:true
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