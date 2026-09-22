@extends('backend.layouts.master')
@section('content')
<style type="text/css">
    h4{
        padding-top:10px;
    }
    .card_body{
        border-radius: 10px; 
        background-color: #fff;
        height: 110px;
    }
    .count_cls{
        font-size: 17px;
        font-weight:bold;
        padding-top: 11px;
        text-align: center;
    }
    .count_img{
        width: 25%;
        float: left;
    }
</style>
<div class="container-fluid">

    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Dashboard</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="row">
        @if(@Auth::user()->user_category=='doctor' || @Auth::user()->user_category=='nurse')
        <div class="col-md-4 col-lg-4 col-xl-4 col-sm-4" style="margin-bottom:30px;height: 387px;">
            <div class="card" style="height: 387px;">
                <div class="card-body" style="height: 387px;">
                    <img src="{{ asset('uploads/employee_images/' . @$details->image) }}" style="width:100%;height: 350px;">
                </div>
            </div>
        </div>

        <div class="col-md-8 col-lg-8 col-xl-8 col-sm-8" style="margin-bottom:30px;height: 387px;">
            <div class="card">
                <div class="card-body text-dark card_body" style="height:387px">
                    <h4 class="card-title">Basic Info:</h4>
                    <table class="table table-sm table-borderless">
                        <tr>
                            <th style="font-weight:bold;border-top: 1px solid dodgerblue;">Name</th>
                            <td style="border-top: 1px solid dodgerblue;font-weight: bold;">: &nbsp;&nbsp;{{@$details->name}}</td>
                        </tr>
                        <tr>
                            <th style="font-weight:bold;border-top: 1px solid dodgerblue;">নাম</th>
                            <td style="border-top: 1px solid dodgerblue;font-weight: bold;">: &nbsp;&nbsp;{{@$details->name_bn}}</td>
                        </tr>
                        <tr>
                            <th style="font-weight:bold;border-top: 1px solid dodgerblue;">Deparment</th>
                            <td style="border-top: 1px solid dodgerblue;">: &nbsp;&nbsp;{{@$details['department']['name']}}</td>
                        </tr>
                        <tr>
                            <th style="font-weight:bold;border-top: 1px solid dodgerblue;">BMDC No</th>
                            <td style="border-top: 1px solid dodgerblue;">: &nbsp;&nbsp;{{@$details->mbbs_fcp}}</td>
                        </tr>
                        <tr>
                            <th style="font-weight:bold;border-top: 1px solid dodgerblue;">Qualification</th>
                            <td style="border-top: 1px solid dodgerblue;">: &nbsp;&nbsp;{{@$details->qualification}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        @endif

        <div class="col-md-4 col-lg-4 col-xl-4 col-sm-4" style="margin-bottom:30px;">
            <div class="card">
                <div class="card-body text-dark card_body">
                    <img class="count_img" src="{{asset('frontend/2.png')}}">
                    <p class="count_cls">
                        Today's Appointment <br>
                        ({{@$today_appointment}})
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-lg-4 col-xl-4 col-sm-4" style="margin-bottom:30px;">
            <div class="card">
                <div class="card-body text-dark card_body">
                    <img class="count_img" src="{{asset('frontend/3.png')}}">
                    <p class="count_cls">
                        Upcoming Appointment  <br>
                        ({{@$upcoming_appointment}})
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-lg-4 col-xl-4 col-sm-4" style="margin-bottom:30px;">
            <div class="card">
                <div class="card-body text-dark card_body">
                    <img class="count_img" src="{{asset('frontend/4.png')}}">
                    <p class="count_cls">
                        Cancelled Appointment  <br>
                        ({{@$cancel_appointment}})
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12" style="margin-bottom:30px;">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Booking List:</h3>
                </div>
                <div class="card-body">
                    <div class="table table-responsive">
                      <table id="example1" class="table table-bordered table-striped table-sm">
                        <thead>
                        <tr>
                          <th width="6%">SL</th>
                          @if(@Auth::user()->user_category=='admin' || @Auth::user()->user_category=='Developer')
                          <th>Service/Doctor Name</th>
                          @endif
                          <th width="12%">Date </th>  
                          <th>Time</th>  
                          <th>Applicant Name</th>
                          <th>Contact No</th>
                          <th>Email</th>
                          <th>Fee Type</th>
                          <th>Status</th>
                          <th width="9%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($doctor_bookings as $key => $value)
                          <tr class="text-center">
                            <td>{{ $key + 1 }}</td>
                            @if(@Auth::user()->user_category=='admin' || @Auth::user()->user_category=='Developer')
                            <td>
                                @if($value->booking_type=='doctor')
                                {{ @$value['doctor']['name'] }}
                                @elseif($value->booking_type=='category')
                                {{ @$value['category']['name'] }}
                                @endif
                            </td>
                            @endif
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
                                @if(@Auth::user()->user_category=='admin' || @Auth::user()->user_category=='Developer')
                                <a title="Delete" id="delete" class="btn btn-sm btn-danger" href="{{route('payroll.booking.delete')}}" data-token="{{csrf_token()}}" data-id="{{$value->id}}"><i class="fa fa-trash"></i></a>
                                @endif
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

    </div>

</div>

@endsection