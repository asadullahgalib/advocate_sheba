@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>Adds List
            <a class="btn btn-sm btn-success float-right" href="{{route('adds.add')}}"><i class="fa fa-plus-circle"></i> Add New</a>
          </h5>
      </div>

      <div class="card-body">
          <table class="table-sm table-bordered table-striped dt-responsive nowrap" style="width: 100%" id="example1">
            <thead>
              <tr class="text-center">
                <th>Sl.</th>
                <th>Position</th>
                <th>Title</th>
                <th>Image</th>
                <th>Link</th>
                <th>Serial</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($allData as $key => $add)
              <tr class="text-center">
                <td>{{$key+1}}</td>
                <td>{{ $add->position ? $add->position->name : '' }}</td>
                <td>{{$add->title}}</td>
                <td>
                  <img src="{{ $add->image ? url('uploads/adds_images/'.$add->image) : url('uploads/no_image.png') }}"
                       style="width:60px;height:60px;object-fit:cover;border:1px solid #ced4da;">
                </td>
                <td style="white-space: normal; text-align: left; min-width: 200px; word-break: break-all;">
                  {{ \Illuminate\Support\Str::limit($add->link, 50) }}
                </td>
                <td>{{$add->serial}}</td>
                <td>
                  <!-- Edit Button -->
                  <a class="btn btn-sm btn-success" title="Edit" href="{{route('adds.edit',$add->id)}}">
                    <i class="fa fa-edit"></i>
                  </a>

                  <!-- Delete Button -->
                  <a id="delete"
                     href="{{ route('adds.delete') }}"
                     data-token="{{csrf_token()}}"
                     data-id="{{$add->id}}"
                     class="btn btn-danger btn-sm"
                     title="Delete">
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