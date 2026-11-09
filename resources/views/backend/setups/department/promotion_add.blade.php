@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          @if(isset($editData))
            Promotion Update
          @else
            Promotion Create
          @endif
          <a href="{{ route('human-resource.hrm.promotion.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Promotion List</i></a>
        </h3>
      </div>

      <form role="form" action="{{ isset($editData) ? route('human-resource.hrm.promotion.update', $editData->id) : route('human-resource.hrm.promotion.store') }}" method="POST" id="myForm">
        @csrf
        <div class="card-body">
          <div class="form-row">

            <div class="form-group col-md-12">
              <label for="title">Title <span style="color:red">*</span></label>
              <input type="text" name="title" id="title" class="form-control form-control-sm" value="{{ isset($editData) ? $editData->title : old('title') }}" placeholder="Write title">
              <font style="color: red;">{{ ($errors->has('title')) ? $errors->first('title') : '' }}</font>
            </div>

            <div class="form-group col-md-8">
              <label for="link">Link</label>
              <input type="text" name="link" id="link" class="form-control form-control-sm" value="{{ isset($editData) ? $editData->link : old('link') }}" placeholder="https://example.com">
            </div>

            <div class="form-group col-md-4">
              <label for="serial">Serial</label>
              <input type="number" name="serial" id="serial" class="form-control form-control-sm" value="{{ isset($editData) ? $editData->serial : old('serial') }}" placeholder="1">
            </div>

            <div class="form-group col-md-3" style="padding-top:10px;">
              <button type="submit" class="btn btn-primary btn-sm">@if(isset($editData)) Update @else Submit @endif</button>
            </div>

          </div>
        </div>
      </form>

    </div>
  </div>

@endsection