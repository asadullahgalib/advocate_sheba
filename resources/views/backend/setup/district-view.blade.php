@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>District List
            <a class="btn btn-sm btn-success float-right" href="{{route('setup.district.add')}}"><i class="fa fa-plus-circle"></i> Add District</a>
          </h5>
      </div>

      <div class="card-body">
          <table class="table-sm table-bordered table-striped dt-responsive nowrap" style="width: 100%" id="example1">
            <thead  >
              <tr>
                <th>Sl.</th>
                <th>Division</th>
                <th>District</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($allData as $key => $district)
              <tr class="text-center">
                <td>{{$key+1}}</td>
                <td>{{@$district['division']['name']}}</td>
                <td>{{$district->name}}</td>
                <td>
                  <a class="btn btn-sm btn-success" title="Edit" href="{{route('setup.district.edit',$district->id)}}"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

    </div>
  </div>

@endsection