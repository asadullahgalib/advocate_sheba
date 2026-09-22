@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3>Gallery List
          <a class="btn btn-success float-right btn-sm" href="{{route('site-setting.contents.gallery.add')}}"><i class="fa fa-plus-circle"></i> Add Gallery</a>
        </h3>
      </div>

      <div class="card-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>SL.</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($allData as $key => $logo)
            <tr class="{{$logo->id}}">
              <td>{{$key+1}}</td>
              <td><img src="{{(!empty($logo->image))?url('public/upload/logo_images/'.$logo->image):url('public/upload/no_image.png')}}"></td>
              <td>
                <a title="Edit" class="btn btn-sm btn-primary" href="{{route('site-setting.contents.gallery.edit',$logo->id)}}"><i class="fa fa-edit"></i></a>
                <a title="Delete" id="delete" class="btn btn-sm btn-danger" href="{{route('site-setting.contents.gallery.delete')}}" data-token="{{csrf_token()}}" data-id="{{$logo->id}}"><i class="fa fa-trash"></i></a>
              </td>
            </tr>gallery
            @endforeach
          </tbody>
        </table>
      </div><!-- /.card-body -->

    </div>
  </div>

@endsection