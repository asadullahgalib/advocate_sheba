@extends('backend.layouts.master')
@section('content')
<div class="col-xl-12">
  <div class="breadcrumb-holder">
    <h1 class="main-title float-left">Manage Medicine</h1>
    <ol class="breadcrumb float-right">
      <li class="breadcrumb-item"><a href="{{route('home')}}"><strong>Home</strong></a></li>
      <li class="breadcrumb-item active">Medicine</li>
    </ol>
    <div class="clearfix"></div>
  </div>
</div>
<div class="container fullbody">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          @if(isset($editData))
            Medicine Update
          @else
            Medicine Add
          @endif
          <a href="{{ route('e-prescription.product.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Medicine Name List</i></a>
        </h3>
      </div>

      <form role="form" action="{{(@$editData)?route('e-prescription.product.update',$editData->id):route('e-prescription.product.store')}}" method="POST" id="MyForm">
        @csrf
          <div class="card-body">
            <div class="form-row">
            <div class="form-group col-md-4">
                <label for="name">Medicine Category <span style="color:red;">*</span> </label>
                <select name="medicine_category_id" class="form-control form-control-sm select2">
                  <option value="">Select Category</option>
                  @foreach($categories as $category)
                  <option value="{{$category->id}}" {{(@$editData->medicine_category_id == $category->id)?('selected'):''}}>{{$category->name}}</option>
                  @endforeach
                </select>               
              </div>                   
              <div class="form-group col-md-8">
                <label for="name">Medicine Name <span style="color:red;">*</span> </label>
                <input type="text" name="name" class="form-control form-control-sm" value="{{ @$editData->name }}"> 
                <font style="color: red"> 
                  {{($errors->has('name'))?($errors->first('name')):''}} 
                </font>                 
              </div>
              <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary">@if(isset($editData)) Update @else Submit @endif</button>
              </div>
            </div>
          </div>
        </form>            

    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function () {  
    $('#MyForm').validate({
      rules: {
        medicine_category_id: {
          required: true,
        },         
        name: {
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