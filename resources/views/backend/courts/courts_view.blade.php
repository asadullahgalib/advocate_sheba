@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>Court List
            <a class="btn btn-sm btn-success float-right" href="{{route('courts.add')}}"><i class="fa fa-plus-circle"></i> Add Court</a>
          </h5>
      </div>

      <div class="card-body">
          <table class="table-sm table-bordered table-striped dt-responsive nowrap" style="width: 100%" id="example1">
            <thead>
              <tr class="text-center">
                <th style="width: 8%;">Sl.</th>
                <th>Name</th>
                <th style="width: 12%;">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($allData as $key => $value)
              <tr class="text-center">
                <td>{{$key+1}}</td>
                <td>{{$value->name}}</td>
                <td>
                  <a class="btn btn-sm btn-success" title="Edit" href="{{route('courts.edit',$value->id)}}"><i class="fa fa-edit"></i></a>
                  <!-- <a id="delete" href="{{ route('courts.delete') }}" data-token="{{csrf_token()}}" data-id="{{$value->id}}" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a> -->
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

    </div>
  </div>

@endsection