@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3>Logo List
          @if($countLogo<1)
          <a class="btn btn-success float-right btn-sm custom_btn" href="{{route('site-setting.contents.logo.add')}}"><i class="fa fa-plus-circle"></i> Add Logo</a>
          @endif
        </h3>
      </div>

      <div class="card-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>SL.</th>
              <th>Logo</th>
              <th>Dashboard/Login</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($allData as $key => $logo)
            <tr class="text-center">
              <td>{{$key+1}}</td>
              <td>
                <img src="{{(!empty($logo->image))?url('uploads/logo_images/'.$logo->image):url('uploads/no_image.png')}}">
              </td>
              <td>
                <img src="{{(!empty($logo->image2))?url('uploads/dashboard_logo_images/'.$logo->image2):url('uploads/no_image.png')}}" width="250px">
              </td>
              <td>
                <a title="Edit" class="btn btn-sm btn-primary" href="{{route('site-setting.contents.logo.edit',$logo->id)}}"><i class="fa fa-edit"></i></a>
                <!-- <a title="Delete" id="delete" class="btn btn-sm btn-danger" href="{{route('site-setting.contents.logo.delete')}}" data-token="{{csrf_token()}}" data-id="{{$logo->id}}"><i class="fa fa-trash"></i></a> -->
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div><!-- /.card-body -->

    </div>
  </div>

@endsection