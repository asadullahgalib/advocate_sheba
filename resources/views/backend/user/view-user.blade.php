@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3>User List
          <a class="btn btn-success float-right btn-sm custom_btn" href="{{route('user.add')}}"><i class="fa fa-plus-circle"></i> Add User</a>
        </h3>
      </div>

      <div class="card-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>SL.</th>
              <th>Role</th>
              <th>Name</th>
              <th>Email</th>
              <th>Mobile No</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($allData as $key => $user)
            <tr class="{{$user->id}}">
              <td>{{$key+1}}</td>
              <td>{{@$user['user_role']['name']}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->mobile}}</td>
              <td>
                @if($user->status=='1')
                <span style="padding: 5px;background: skyblue;">Active</span>
                @elseif($user->status=='0')
                <span style="padding: 5px;background: orange;">Inactive</span>
                @endif
              </td>
              <td>
                <a title="Edit" class="btn btn-sm btn-primary" href="{{route('user.edit',$user->id)}}"><i class="fa fa-edit"></i></a>
                <a title="Delete" id="delete" class="btn btn-sm btn-danger" href="{{route('user.delete')}}" data-token="{{csrf_token()}}" data-id="{{$user->id}}"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div><!-- /.card-body -->

    </div>
  </div>

@endsection