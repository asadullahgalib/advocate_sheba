@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          @if(isset($editData))
            Number Update
          @else
            Number Add
          @endif
          <a href="{{ route('human-resource.hrm.number.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Number List</i></a>
        </h3>
      </div>

      <form role="form" action="{{(@$editData)?route('human-resource.hrm.number.update',$editData->id):route('human-resource.hrm.number.store')}}" method="POST" id="MyForm">
        @csrf
          <div class="card-body">
            <div class="form-row">                   
              <div class="form-group col-md-4">
                <label for="name">Bkash</label>
                <input type="text" name="bkash" class="form-control" value="{{ @$editData->bkash }}"> 
              </div>
              <div class="form-group col-md-4">
                <label for="name">Nagad</label>
                <input type="text" name="nagad" class="form-control" value="{{ @$editData->nagad }}"> 
              </div>
              <div class="form-group col-md-4">
                <label for="name">Rocket</label>
                <input type="text" name="rocket" class="form-control" value="{{ @$editData->rocket }}"> 
              </div>
              <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary">@if(isset($editData)) Update @else Submit @endif</button>
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
        bkash: {
          required: true,
        },
        nagad: {
          required: true,
        },
        rocket: {
          required: true,
        }      
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