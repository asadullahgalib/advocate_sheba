@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>Video Gallery List
            <a class="btn btn-sm btn-success float-right" href="{{ route('doctor-profile.video.add') }}">
                <i class="fa fa-plus-circle"></i> Add Video
            </a>
          </h5>
      </div>

      <div class="card-body">
          <table class="table-sm table-bordered table-striped dt-responsive nowrap" style="width: 100%" id="example1">
            <thead>
              <tr class="text-center">
                <th>Sl.</th>
                <th>Image</th>
                <th>Title</th>
                <!-- <th>Link</th> -->
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($allData as $key => $video)
              <tr class="text-center">
                <td style="vertical-align: middle;">{{ $key+1 }}</td>
                <td style="vertical-align: middle;">
                    <img 
                        src="{{ (!empty($video->image)) ? url('uploads/video_images/'.$video->image) : url('uploads/no_image.png') }}" 
                        style="width: 60px; height: 40px; object-fit: cover; border: 1px solid #ccc;" 
                        alt="Thumbnail"
                    >
                </td>
                <td style="vertical-align: middle;">{{ $video->title ?? 'N/A' }}</td>
                <!-- <td style="vertical-align: middle;">
                    <a href="{{ $video->link }}" target="_blank" class="btn btn-xs btn-info">
                        <i class="fa fa-play"></i> Watch Video
                    </a>
                </td> -->
                <td style="vertical-align: middle;">
                  <!-- Edit Button -->
                  <a class="btn btn-sm btn-success" title="Edit" href="{{ route('doctor-profile.video.edit', $video->id) }}">
                    <i class="fa fa-edit"></i>
                  </a>  

                  <!-- Updated Delete Button (শুধু এই বাটনটি আপনার আর্টিকেলের মতো করা হয়েছে) -->
                  <a id="delete" href="{{ route('doctor-profile.video.delete') }}" data-token="{{ csrf_token() }}" data-id="{{ $video->id }}" class="btn btn-sm btn-danger" title="Delete">
                      <i class="fa fa-trash"></i>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

    </div>
  </div>
@endsection
