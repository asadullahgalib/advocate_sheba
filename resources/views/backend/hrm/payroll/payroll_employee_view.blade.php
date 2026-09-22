@extends('backend.layouts.master')
@section('content')
<style>
  .dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 0rem !important;
    padding: 0.5rem 0;
    margin: 0.125rem 0 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: 0.25rem;
}
</style>

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Doctor List
          <a href="{{ route('payroll.employee.view.add') }}" class="btn btn-warning float-right btn-sm custom_btn"><i class="fa fa-plus-circle"> Doctor Add</i></a>
        </h3>
      </div>

      <div class="card-body">
        <div class="table table-responsive">
          <table id="example1" class="table table-bordered table-sm">
            <thead>
            <tr>
              <th width="8%">SL</th>
              <th>Name</th>
              <th>Designation </th>  
              <th>Department </th>  
              <th>Mobile No</th>
              <th>Email</th>
              <th>Emp. Type</th>
              <th>Booking Status</th>
              <th>Status</th>
              <th>Sort</th>
              <th width="12%">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($allData as $key=>$value)
              @php
                $doctor_booking_count = App\Model\DoctorBooking::where('doctor_id',$value->id)->count();
              @endphp
              <tr class="text-center">
                <td>{{ $key + 1 }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ @$value['designation']['name'] }}</td>
                <td>{{ @$value['department']['name'] }}</td>
                <td>{{ $value->mobile }}</td>
                <td>{{ $value->email }}</td>
                @if(Auth::user()->role=='1')
                <td>
                  @if($value->employee_type=='1')
                  Internal
                  @elseif($value->employee_type=='2')
                  External
                  @endif
                </td>
                <td>
                  @if($value->booking_status=='1')
                  Yes
                  @elseif($value->booking_status=='2')
                  No
                  @endif
                </td>
                <td>
                  @if($value->status=='1')
                  <span style="background: #FF0099;color: #fff;padding: 5px;">Active</span>
                  @elseif($value->status=='0')
                  <span style="background: #FF0099;color: #fff;padding: 5px;">Inactive</span>
                  @endif
                </td>
                @endif
                <td>{{$value->sort}}</td>
                <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Action
                    </button>
                    <div class="dropdown-menu">
                      @if($value->status=='1')
                      <a class="dropdown-item btn btn-primary btn-sm" href="{{ !empty($value->id) ? route('payroll.employee.inactive',$value->id) : '' }}"><i class="fa fa-thumbs-up"></i></a>
                      @elseif($value->status=='0')
                      <a class="dropdown-item btn btn-danger btn-sm" href="{{ !empty($value->id) ? route('payroll.employee.active',$value->id) : '' }}"><i class="fa fa-thumbs-down"></i></a>
                      @endif

                      <a href="{{ route('payroll.employee.view.edit',$value->id) }}" class="dropdown-item btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>

                      <a href="{{ route('payroll.employee.view.edit.passowrd',$value->id) }}" class="dropdown-item btn btn-info btn-sm" title="Password Change"><i class="fa fa-lock"></i></a>  
                     
                      <a href="{{ route('payroll.employee.view.details',$value->id) }}" class="dropdown-item btn btn-success btn-sm" title="Details"><i class="fa fa-eye"></i></a>
                      @if($doctor_booking_count <1)
                      <a id="delete" href="{{ route('payroll.employee.view.destroy') }}" data-token="{{csrf_token()}}" data-id="{{$value->id}}" class="dropdown-item btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>
                      @endif

                      <a target="_blank" href="{{ route('payroll.employee.view.print',$value->id) }}" class="dropdown-item btn btn-warning btn-sm" title="Print"><i class="fa fa-print"></i></a>
                    </div> 
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