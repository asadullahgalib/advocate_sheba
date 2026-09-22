@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>Division List
            <a class="btn btn-sm btn-success float-right" href="{{route('setup.division.add')}}"><i class="fa fa-plus-circle"></i> Add Division</a>
          </h5>
      </div>

      <div class="card-body">
          <table class="table-sm table-bordered table-striped dt-responsive nowrap" style="width: 100%" id="example1">
            <thead  >
              <tr>
                <th>Sl.</th>
                <th>Division Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($allData as $key => $division)
              <tr class="text-center">
                <td>{{$key+1}}</td>
                <td>{{$division->name}}</td>
                <td>
                  <a class="btn btn-sm btn-success" title="Edit" href="{{route('setup.division.edit',$division->id)}}"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

    </div>
  </div>

@endsection