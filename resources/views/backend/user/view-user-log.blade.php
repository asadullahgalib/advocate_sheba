@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3>User List
        </h3>
      </div>

      <div class="card-body">
        <table id="example1" class="table table-bordered table-hover table-sm table-responsive">
          <thead>
            <tr>
              <th>SL.</th>
              <th>HR ID</th>
              <th>Staff Code</th>
              <th>Name</th>
              <th>Designation</th>
              <th>Mobile</th>
              <th>A/C No</th>
              <th>Access Time</th>
            </tr>
          </thead>
          <tbody>
            @foreach($allData as $key => $value)
            <tr class="{{$value->id}}">
              <td>{{$key+1}}</td>
              <td>{{@$value['user']['name']}}</td>
              <td>{{@$value['user']['id_no']}}</td>
              <td>{{@$value['user']['employee_code']}}</td>
              <td>{{@$value['user']['designation']['name']}}</td>
              <td>{{@$value['user']['mobile']}}</td>
              <td>{{@$value['user']['bank_account_no']}}</td>
              <td>{{$value->access_in_time}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div><!-- /.card-body -->

    </div>
  </div>

@endsection