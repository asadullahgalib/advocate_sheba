@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>Practice Area List
            <a class="btn btn-sm btn-success float-right" href="{{route('practice-area.add')}}"><i class="fa fa-plus-circle"></i> Add Practice Area</a>
          </h5>
      </div>

      <div class="card-body">
          <table class="table-sm table-bordered table-striped dt-responsive nowrap" style="width: 100%" id="example1">
            <thead>
              <tr>
                <th>Sl.</th>
                <th>Practice Area Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($allData as $key => $practice)
              <tr class="text-center">
                <td>{{$key+1}}</td>
                <td>{{$practice->name}}</td>
                <td>
                  <a class="btn btn-sm btn-success" title="Edit" href="{{route('practice-area.edit',$practice->id)}}"><i class="fa fa-edit"></i></a>  
                  <a class="btn btn-sm btn-danger" title="Delete" id="delete" href="{{route('practice-area.delete',$practice->id)}}"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

    </div>
  </div>

@endsection
