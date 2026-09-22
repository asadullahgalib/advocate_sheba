@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h5>Leave Type List
          <a href="{{route('human-resource.leaves.leave.type.add')}}" class="btn btn-sm btn-success float-right"><i class="fa fa-plus-circle"></i> Leave Type Add</a>
        </h5>
      </div>

      <table id="example1" class="table table-bordered table-hover">
        <thead  >
          <tr>
            <th width="6%">SL</th>
            <th>Leave Type</th>
            <th>Total Day</th>
            <th width="10%">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($leave_types as $leave_type)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$leave_type->leave_type_name}}</td>
            <td>{{$leave_type->number_of_days}}</td>
            <td>
              <a href="{{route('human-resource.leaves.leave.type.edit',$leave_type->id)}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </div>
  </div>

@endsection