@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Add List
          <a href="{{ route('adds.add') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-plus-circle"> Add New</i></a>
        </h3>
      </div>

      <div class="card-body">
        <div class="table table-responsive">
          <table id="example1" class="table table-bordered table-sm table-striped">
            <thead>
            <tr>
              <th width="8%">SL</th>
              <th>Position</th>
              <th>Title</th>
              <th>Link</th>
              <th width="8%">Serial</th>
              <th>Image</th>
              <th width="10%">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($allData as $key => $value)
              <tr class="text-center">
                <td style="vertical-align: middle;">{{ $key + 1 }}</td>

                <td style="vertical-align: middle;">{{ @$value->position->name }}</td>

                <td style="vertical-align: middle;">{{ $value->title }}</td>

                <td style="vertical-align: middle;">
                  @if(!empty($value->link))
                    <a href="{{ $value->link }}" target="_blank">{{ \Illuminate\Support\Str::limit($value->link, 30) }}</a>
                  @endif
                </td>

                <td style="vertical-align: middle;">{{ $value->serial }}</td>

                <td style="vertical-align: middle;">
                  <img src="{{ (!empty($value->image)) ? url('uploads/adds_images/'.$value->image) : url('uploads/no_image.png') }}"
                       width="80"
                       height="80"
                       style="width: 80px; height: 80px; object-fit: cover; border-radius: 4px; border: 1px solid #ddd;">
                </td>

                <td style="vertical-align: middle;">
                  <a href="{{ route('adds.edit', $value->id) }}" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                  <a id="delete" href="{{ route('adds.delete') }}" data-token="{{ csrf_token() }}" data-id="{{ $value->id }}" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>
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