@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3>Add Contact
          <a class="btn btn-success float-right btn-sm" href="{{route('site-setting.contents.contact.view')}}"><i class="fa fa-list"></i> Contact List</a>
        </h3>
      </div>

      <div class="card-body">
        <form method="post" action="{{route('site-setting.contents.contact.store')}}" id="myForm" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="address">Address</label>
              <input type="text" name="address" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label for="mobile_no">Mobile</label>
              <input type="text" name="mobile_no" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group col-md-6" style="padding-top: 30px;">
              <input type="submit" value="Submit" class="btn btn-primary">
            </div>
          </div>
        </form>
      </div><!-- /.card-body -->

    </div>
  </div>

@endsection