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
          <!-- ফর্ম অ্যাকশন রুটের নাম ম্যাপ স্টোর অনুযায়ী সেট করা হলো -->
          <form method="post" action="{{route('advocates.map.details.store',$details->id)}}">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="map">Map Address <span style="color:red;">*</span></label>
                <input type="text" name="map_address" class="form-control" value="{{@$details->map_address}}">
              </div>

              <div class="form-group col-md-12">
                <label for="map">Map Link <span style="color:red;">*</span></label>
                <input type="text" name="map" class="form-control" value="{{@$details->map}}">
              </div>

              <div class="form-group col-md-12">
                <label for="map">Embed Link <span style="color:red;">*</span></label>
                <textarea name="map_embed" id="map_embed" class="form-control" rows="5" required>{{ @$details->map_embed }}</textarea>
              </div>

              <div class="form-group col-md-3">
                <button type="submit" class="btn btn-primary btn-sm">Update Map</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    </div>
  </div>
@endsection
