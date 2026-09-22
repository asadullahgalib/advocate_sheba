@extends('backend.layouts.master')
@section('content')
<div class="col-xl-12">
  <div class="breadcrumb-holder">
    <h1 class="main-title float-left">Manage Reason</h1>
    <ol class="breadcrumb float-right">
      <li class="breadcrumb-item"><a href="{{route('home')}}"><strong>Home</strong></a></li>
      <li class="breadcrumb-item active">Reason</li>
    </ol>
    <div class="clearfix"></div>
  </div>
</div>
<div class="container fullbody">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5>{{(@$editData) ? ("Update Reason") : "Add Reason"}}
          <a class="btn btn-sm btn-success float-right" href="{{route('stocks.reason.view')}}"><i class="fa fa-list"></i> Reason List</a>
        </h5>
      </div>

      <div class="card-body">
        <form method="post" action="{{!empty($editData->id) ? route('stocks.reason.update',$editData->id) : route('stocks.reason.store')}}" id="myForm" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-row">
                  <div class="form-group col-md-6">
                      <label>Reason</label>
                      <input type="text" name="name" class="form-control" value="{{@$editData->name}}" placeholder="Write Name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <button type="submit" class="btn btn-primary">{{(@$editData) ? 'Update' : 'Submit'}}</button>
                    </div>
                </div>
              </form>
      </div>
    </div>
    <!-- /.card -->

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