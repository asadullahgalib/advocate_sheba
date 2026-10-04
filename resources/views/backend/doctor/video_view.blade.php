@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Video Gallery List
          <a href="{{ route('doctor-profile.video.add') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-plus-circle"> Add Video Gallery</i></a>
        </h3>
      </div>

      <div class="card-body">
        <div class="table table-responsive">
          <table id="example1" class="table table-bordered table-sm">
            <thead>
            <tr>
              <th width="8%">SL</th>
              @if(@Auth::user()->user_category=='admin' || @Auth::user()->user_category=='Developer')
              <th>Legal Professional</th>
              @endif
              <th>Thumbnail</th>
              <th>Link</th>
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
                
                <!-- এখানে পাথের নাম পরিবর্তন করে uploads এবং সাইজ ফিক্সড করা হলো -->
                <td>
                  <img src="{{(!empty($value->image)) ? url('uploads/video_images/'.$value->image) : url('uploads/no_image.png')}}" 
                       width="100" 
                       height="70" 
                       style="width: 100px; height: 70px; object-fit: cover; border-radius: 4px; border: 1px solid #ddd;">
                </td>
                
                <td>{{ $value->link }}</td>
                <td>
                  <a href="{{ route('doctor-profile.video.edit',$value->id) }}" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>     
                  <a id="delete" href="{{ route('doctor-profile.video.delete') }}" data-token="{{csrf_token()}}" data-id="{{$value->id}}" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>
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
