@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">SMS List
        </h3>
      </div>

      <div class="card-body">
        <table id="example1" class="table table-bordered">
          <thead>
          <tr>
            <th width="8%">SL</th>
            <th>Doctor Booking</th>
            <th>Doctor Registration</th>
            <th>Doctor Approve</th>
            <th width="10%">Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach($allData as $key=> $value)
            <tr class="text-center">
              <td>{{ $key + 1 }}</td>
              <td>{{ $value->booking_msg }}</td>
              <td>{{ $value->signup_msg }}</td>
              <td>{{ $value->doctor_approve_msg }}</td>
              <td>
                <a href="{{ route('human-resource.hrm.sms.edit',$value->id) }}" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a> 
              </td>
            </tr> 
          @endforeach               
          </tbody>
        </table>
      </div>

    </div>
  </div>

@endsection