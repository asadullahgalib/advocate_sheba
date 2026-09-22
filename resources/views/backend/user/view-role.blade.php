@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
          <h3>Role List
            <a class="btn btn-success float-right btn-sm custom_btn" href="{{route('user.role.add')}}"><i class="fa fa-plus-circle"></i> Add Role</a>
          </h3>
      </div>

      <div class="card-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th width="6%">SL.</th>
              <th>Role Name</th>
              <th width="12%">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($allData as $key => $value)
            <tr class="text-center">
              <td>{{$key+1}}</td>
              <td>{{$value->name}}</td>
              <td>
                <a title="Edit" class="btn btn-sm btn-primary" href="{{route('user.role.edit',$value->id)}}"><i class="fa fa-edit"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div><!-- /.card-body -->

    </div>
  </div>

@endsection