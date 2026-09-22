@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Booking List
        </h3>
      </div>

      <div class="card-body">
        <div class="table table-responsive">
          <table id="example1" class="table table-bordered table-sm">
            <thead>
            <tr>
              <th width="8%">SL</th>
              <th>Date </th>  
              <th>Time</th>  
              <th>Applicant Name</th>
              <th>Contact No</th>
              <th>Email</th>
              <th>Fee Type</th>
              <th>Status</th>
              <th width="8%">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($allData as $key => $value)
              <tr class="text-center">
                <td>{{ $key + 1 }}</td>
                <td>{{ date('d-m-Y',strtotime($value->date)) }}</td>
                <td>{{ @$value['time']['name'] }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->mobile }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->fee_type }}</td>
                <td>
                  @if($value->status=='0')
                  Pending
                  @elseif($value->status=='1')
                  Completed
                  @elseif($value->status=='2')
                  Cancelled
                  @endif
                </td>
                <td>
                  <a target="_blank" href="{{ route('doctor-profile.booking.pdf',$value->code) }}" class="btn btn-success btn-sm" title="Print"><i class="fa fa-print"></i></a>
                </td>
              </tr> 
            @endforeach               
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>

@endsection