@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          @if(isset($value))
            Doctor Booking Approval
          @else
            Doctor Booking Add
          @endif
          <a href="{{ route('payroll.booking.view') }}" class="btn btn-success float-right btn-sm"><i class="fa fa-list"> Doctor Booking List</i></a>
        </h3>
      </div>

      <form role="form" action="{{route('payroll.booking.approval-store',$value->id)}}" method="POST" enctype="multipart/form-data" id="MyForm">
        @csrf
          <div class="card-body">
            <div class="row" style="margin-bottom:5px;">
              <div class="col-md-12">
                <table style="width: 100%;">
                  <tbody>
                    <tr>
                      <td style="width: 30%;color:#0398D6;font-size: 50px;font-weight: bold;">
                        INVOICE
                      </td>
                      <td class="text-center" style="width: 15%;">
                      </td>
                      <td class="text-center" style="width: 55%">
                        <img src="{{asset('public/frontend/akmmch.png')}}">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <table style="width: 100%">
                  <tbody>
                    <tr>
                      <td style="width: 30%;">
                        <span style="font-weight:bold;">Invoice No  </span> : {{@$value->code}}
                      </td>
                      <td class="text-center" style="width: 22%"></td>
                      <td class="text-left" style="width: 37%;">
                        Bill To
                      </td>
                    </tr>
                    <tr>
                      <td style="width: 30%;">
                        <span style="font-weight:bold;"> Date  </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        : {{date('d-m-Y',strtotime(@$value->created_at))}}
                      </td>
                      <td class="text-center" style="width: 22%"></td>
                      <td class="text-left" style="width: 37%;">
                        <span style="font-weight:bold;"> Name  </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                         : {{$value->name}}
                      </td>
                    </tr>
                    <tr>
                      <td style="width: 30%;">
                      </td>
                      <td class="text-center" style="width: 22%"></td>
                      <td class="text-left" style="width: 37%;">
                        <span style="font-weight:bold;"> Contact No  </span> : {{$value->mobile}}
                      </td>
                    </tr>
                    <tr>
                      <td style="width: 30%;">
                      </td>
                      <td class="text-center" style="width: 22%"></td>
                      <td class="text-left" style="width: 37%;">
                        <span style="font-weight:bold;"> Email  </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                        : {{$value->email}}
                      </td>
                    </tr>
                    <tr>
                      <td style="width: 30%;">
                      </td>
                      <td class="text-center" style="width: 22%"></td>
                      <td class="text-left" style="width: 37%;">
                        <span style="font-weight:bold;"> Gender  </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        : {{$value->gender}}
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="row" style="margin-bottom:20px;">
              <div class="col-sm-12">
                <table style="width: 100%">
                  <tbody>
                    <tr>
                      <td style="width: 98%;left:-20px !important;" class="text-left">
                        <p style="color:#0398D6;font-weight:bold;">
                         Service Details:
                        </p>
                      </td>
                      <td class="text-center" style="width: 1%"></td>
                      <td class="text-center" style="width: 1%"></td>
                    </tr>
                  </tbody>
                </table>
                <table class="table table-bordered" style="margin-bottom: 10px;">
                    <tr>
                      <th style="background:#0398D6;color:#fff;font-weight: bold;text-align: left; width: 70%;">Description</th>
                      <th style="background:#0398D6;color:#fff;font-weight: bold;text-align: center;width: 30%;">Amount</th>
                    </tr>
                    <tr>
                      <td style="padding-left:10px">
                        <span style="font-weight:bold;">Doctor Name  &nbsp;&nbsp; : {{@$value['doctor']['name']}} </span><br>
                        <span style="font-weight:bold;">Department </span> &nbsp;&nbsp;&nbsp;&nbsp; : {{@$value['doctor']['department']['name']}} <br>
                        <span style="font-weight:bold;">Date </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{date('d-m-Y',strtotime($value->date))}} <br>
                        <span style="font-weight:bold;">Time  </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{@$value['time']['name']}}
                      </td>
                      <td style="text-align:center;vertical-align: middle;font-weight: bold;">
                        <p>
                          {{$value->amount}} BDT
                        </p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <table style="width: 100%;margin-top: 10px !important;">
                  <tbody>
                    <tr>
                      <td style="width: 98%;text-align: center;" class="text-left">
                        <span style="font-weight: bold">Amount</span> (In Word) : <span style="font-weight: bold">{{@$word}} Taka Only.</span>
                      </td>
                      <td class="text-center" style="width: 1%"></td>
                      <td class="text-center" style="width: 1%"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <table style="width: 100%">
                  <tbody>
                    <tr>
                      <td style="width: 98%;left:-20px !important;" class="text-left">
                        <p style="color:#0398D6;font-weight:bold;">
                         Payment Details:
                        </p>
                      </td>
                      <td class="text-center" style="width: 1%"></td>
                      <td class="text-center" style="width: 1%"></td>
                    </tr>
                  </tbody>
                </table>
                <table class="table table-bordered" style="margin-bottom: 0px;">
                    <tr>
                      <td style="padding-left:10px">
                        <span style="font-weight:bold;">Fee Type </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{$value->fee_type}} <br>
                        <span style="font-weight:bold;">Payment Method </span> &nbsp;&nbsp;&nbsp;&nbsp; : {{$value->payment_method}}
                        @if($value->payment_method!='Hand Cash')
                        <br>
                        <span style="font-weight:bold;">From No </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 
                        @if($value->payment_method=='bkash')
                        {{$value->bkash_number}}
                        @elseif($value->payment_method=='rocket')
                        {{$value->rocket_number}}
                        @elseif($value->payment_method=='nagad')
                        {{$value->nagad_number}}
                        @endif
                        <br>
                        <span style="font-weight:bold;">Transaction No  </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 
                        @if($value->payment_method=='bkash')
                        {{$value->bkash_transaction_id}}
                        @elseif($value->payment_method=='rocket')
                        {{$value->rocket_transaction_id}}
                        @elseif($value->payment_method=='nagad')
                        {{$value->nagad_transaction_id}}
                        @endif
                        <br>
                        <span style="font-weight:bold;">To No  </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 
                        @if($value->payment_method=='bkash')
                        {{@$value['doctor']['bkash_number']}}
                        @elseif($value->payment_method=='rocket')
                        {{@$value['doctor']['rocket_number']}}
                        @elseif($value->payment_method=='nagad')
                        {{@$value['doctor']['nagad_number']}}
                        @endif
                        @endif
                        <br>
                        <span style="font-weight:bold;">Appointment Status </span>  : 
                        @if($value->status=='0')
                        Pending
                        @elseif($value->status=='1')
                        Completed
                        @elseif($value->status=='2')
                        Cancelled
                        @endif
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="form-row" style="margin-top:10px">
              <div class="form-group col-md-3">
                <label>Status <span style="color:red">*</span></label>
                <select name="status" class="form-control form-control-sm select2">
                  <option value="">Select Status</option>
                  <option value="0" {{($value->status=='0')?'selected':''}}>Pending</option>
                  <option value="1" {{($value->status=='1')?'selected':''}}>Completed</option>
                  <option value="2" {{($value->status=='2')?'selected':''}}>Cancelled</option>
                </select>
              </div>
              <div class="form-group col-md-2" style="padding-top:30px;">
                <button type="submit" class="btn btn-primary btn-sm btn-block">Confirm</button>
              </div>
            </div>
          </div>
        </form>            

    </div>
  </div>

<script type="text/javascript">
  $(document).ready(function () {  
    $('#MyForm').validate({
      rules: {           
        status: {
          required: true,
        }
      },
      messages: { 
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
</script>
@endsection