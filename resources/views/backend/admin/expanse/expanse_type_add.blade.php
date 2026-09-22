@extends('backend.layouts.master')
@section('content')
<div class="col-xl-12">
  <div class="breadcrumb-holder">
    <h1 class="main-title float-left">Manage Expense Item</h1>
    <ol class="breadcrumb float-right">
      <li class="breadcrumb-item"><a href="{{route('home')}}"><strong>Home</strong></a></li>
      <li class="breadcrumb-item active">Expense Item</li>
    </ol>
    <div class="clearfix"></div>
  </div>
</div>
<div class="container fullbody">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5>{{(@$editData) ? ("Expense Item Update") : "Expense Item Add"}}
          <a class="btn btn-sm btn-success float-right" href="{{route('human-resource.expenses.type.view')}}"><i class="fa fa-list"></i> Expense Item List</a>
        </h5>
      </div>

      <div class="card-body">
        <form method="post" action="{{!empty($editData->id) ? route('human-resource.expenses.type.update',$editData->id) : route('human-resource.expenses.type.store')}}" id="myForm" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-row">
          <div class="form-group col-md-6">
              <label>Expense Item</label>
              <input type="text" name="name" class="form-control" value="{{@$editData->name}}" placeholder="Write Expense Item">
              <font color="red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <button type="submit" class="btn btn-primary">{{(@$editData) ? 'Update' : 'Submit'}}</button>
            </div>
        </div>
      </form>
      </div><!-- /.card-body -->

    </div>
  </div>
</div>

<script>
    $(document).ready(function(){
      $('#myForm').validate({
        errorClass:'text-danger',
          validClass:'text-success',
          rules : {
              name : {
                  required : true
              }
          },
          messages : {
            
          }
      });
    });
</script>

@endsection