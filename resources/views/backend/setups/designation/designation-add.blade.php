@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          @if(isset($designations))
            Designation Update
          @else
            Designation Add
          @endif
          <a href="{{ route('human-resource.hrm.designation.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Designation List</i></a>
        </h3>
      </div>

      <form role="form" action="{{(@$designations)?route('human-resource.hrm.designation.update',$designations->id):route('human-resource.hrm.designation.store')}}" method="POST" id="MyForm">
        @csrf
          <div class="card-body">
            <div class="form-row">                   
              <div class="form-group col-md-6">
                <label for="name">Designation Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Designation" value="{{ @$designations->name }}"> 
                <font style="color: red"> 
                  {{($errors->has('name'))?($errors->first('name')):''}} 
                </font>                 
              </div>
              <div class="form-group col-md-6" style="padding-top: 31px;">
                <button type="submit" class="btn btn-primary">@if(isset($designations)) Update @else Submit @endif</button>
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
        name: {
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