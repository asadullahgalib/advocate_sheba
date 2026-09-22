@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">News & Events List
          <a href="{{ route('doctor-profile.news.add') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-plus-circle"> Add News & Events</i></a>
        </h3>
      </div>

      <div class="card-body">
        <div class="table table-responsive">
          <table id="example1" class="table table-bordered table-sm">
            <thead>
            <tr>
              <th width="8%">SL</th>
              @if(@Auth::user()->user_category=='admin' || @Auth::user()->user_category=='Developer')
              <th>Docotr/Nurse Name</th>
              @endif
              <th>Title</th>
              <th width="15%">Date</th>
              <th>Image</th>
              <th width="10%">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($allData as $key=> $value)
              <tr class="text-center">
                <td>{{ $key + 1 }}</td>
                @if(@Auth::user()->user_category=='admin' || @Auth::user()->user_category=='Developer')
                <td>{{@$value['user']['name']}} - {{@$value['user']['department']['name']}}</td>
                @endif
                <td>{{ $value->title }}</td>
                <td>{{ date('d-m-Y',strtotime($value->date)) }}</td>
                <td>
                  <img src="{{(!empty(@$value->image))?url('public/upload/news_images/'.@$value->image):url('public/upload/no_image.png')}}" width="30%">
                </td>
                <td>
                  <a href="{{ route('doctor-profile.news.edit',$value->id) }}" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>     
                  <a id="delete" href="{{ route('doctor-profile.news.delete') }}" data-token="{{csrf_token()}}" data-id="{{$value->id}}" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>
                </td>
              </tr> 
            @endforeach               
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>

@endsection