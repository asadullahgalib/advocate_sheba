@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>Sub Court Detail List
            <a class="btn btn-sm btn-success float-right" href="{{route('sub-court-details.add')}}"><i class="fa fa-plus-circle"></i> Add Sub Court Detail</a>
          </h5>
      </div>

      <div class="card-body">
          <table class="table-sm table-bordered table-striped dt-responsive nowrap" style="width: 100%" id="example1">
            <thead>
              <tr class="text-center">
                <th style="width: 8%;">Sl.</th>
                <th>Court</th>
                <th>Sub Court</th>
                <th>Title</th>
                <th style="width: 12%;">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($allData as $key => $value)
              <tr class="text-center">
                <td>{{$key+1}}</td>
                <td>{{$value->court_name ?? 'N/A'}}</td>
                <td>{{$value->sub_court_name ?? 'N/A'}}</td>
                <td>{{$value->title}}</td>
                <td>
                  <a class="btn btn-sm btn-success" title="Edit" href="{{route('sub-court-details.edit',$value->id)}}"><i class="fa fa-edit"></i></a>
                  <a id="delete" href="{{ route('sub-court-details.delete') }}" data-token="{{csrf_token()}}" data-id="{{$value->id}}" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

    </div>
  </div>

@endsection