<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Font Awesome CSS -->
<link href="{{asset('public/pike/backend/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
<title>Applicant Booking Details</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<style type="text/css">

table {
  border-collapse: collapse;
}
h2 h3{
  margin:0;
  padding:0;
}
.table {
  width: 100%;
  margin-bottom: 1rem;
  background-color: transparent;
}

.table th,
.table td {
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}

.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
}

.table tbody + tbody {
  border-top: 2px solid #dee2e6;
}

.table .table {
  background-color: #fff;
}

.table-bordered {
  border: 1px solid #dee2e6;
}

.table-bordered th,
.table-bordered td {
  border: 1px solid #dee2e6;
}

.table-bordered thead th,
.table-bordered thead td {
  border-bottom-width: 2px;
}

.text-center{
  text-align: center;
}
.text-right{
  text-align: right;
}
table tr td{
  padding: 2px;
}

.table-bordered thead th, .table-bordered td, .table-bordered th{
   border: 1px solid black !important;
}

.table-bordered thead th{
  background-color:  #cacaca; 
}
.bangla {
  font-family: 'nikoshban',sans-serif;
  font-weight:900 !important;
}
.trade_tile{
  font-family: 'Lobster', cursive;
}
@page {
  odd-header-name: odd-header;
  even-header-name: even-header;
  odd-footer-name: odd-footer;
  even-footer-name: even-footer;
}


</style>
<body>
  <div class="container">
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
                <img src="{{asset('public/upload/logo_images/'.@$logo->image)}}">
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
                @if($value->booking_type=='doctor')
                <span style="font-weight:bold;"> Gender  </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                : {{$value->gender}}
                @endif
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
                @if($value->booking_type=='category')
                <span style="font-weight:bold;">Service Name  &nbsp;&nbsp; : {{@$value['category']['name']}} </span><br><br>
                @endif
                @if($value->booking_type=='doctor')
                <span style="font-weight:bold;">Doctor Name  &nbsp;&nbsp; : {{@$value['doctor']['name']}} </span><br><br>
                <span style="font-weight:bold;">Department </span> &nbsp;&nbsp;&nbsp;&nbsp; : {{@$value['doctor']['department']['name']}} <br><br>
                @endif
                <span style="font-weight:bold;">Date </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{date('d-m-Y',strtotime($value->date))}} <br><br>
                @if($value->booking_type=='doctor')
                <span style="font-weight:bold;">Time  </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{@$value['time']['name']}}
                @endif
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
        @php
          $category_payment = App\Model\PaymentNumber::first();
        @endphp
        <table class="table table-bordered" style="margin-bottom: 0px;">
            <tr>
              <td style="padding-left:10px">
                @if($value->booking_type=='doctor')
                <span style="font-weight:bold;">Fee Type </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{$value->fee_type}} <br><br>
                @endif
                <span style="font-weight:bold;">Payment Method </span> &nbsp;&nbsp;&nbsp;&nbsp; : {{$value->payment_method}}
                @if($value->payment_method!='Hand Cash')
                <br><br>
                <span style="font-weight:bold;">From No </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 
                @if($value->payment_method=='bkash')
                {{$value->bkash_number}}
                @elseif($value->payment_method=='rocket')
                {{$value->rocket_number}}
                @elseif($value->payment_method=='nagad')
                {{$value->nagad_number}}
                @endif
                <br><br>
                <span style="font-weight:bold;">Transaction No  </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 
                @if($value->payment_method=='bkash')
                {{$value->bkash_transaction_id}}
                @elseif($value->payment_method=='rocket')
                {{$value->rocket_transaction_id}}
                @elseif($value->payment_method=='nagad')
                {{$value->nagad_transaction_id}}
                @endif
                <br><br>
                <span style="font-weight:bold;">To No  </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 
                @if($value->payment_method=='bkash')
                  @if($value->booking_type=='doctor')
                  {{@$value['doctor']['bkash_number']}}
                  @else
                  {{@$category_payment->bkash}}
                  @endif
                @elseif($value->payment_method=='rocket')
                  @if($value->booking_type=='doctor')
                  {{@$value['doctor']['rocket_number']}}
                  @else
                  {{@$category_payment->rocket}}
                  @endif
                @elseif($value->payment_method=='nagad')
                  @if($value->booking_type=='doctor')
                  {{@$value['doctor']['nagad_number']}}
                  @else
                  {{@$category_payment->nagad}}
                  @endif
                @endif
                @endif
                <br><br>
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
        <table style="width: 100%;margin-top: -10px !important;">
          <tbody>
            <tr>
              <td style="width: 98%;left:-20px !important;" class="text-left">
                  <br><br>
                  Thanks for your Appointment. Our team member will contact with you very soon.<br><br>
                  <span style="font-weight:bold;">Any question Call :</span> {{@$contact->mobile_no}}
              </td>
              <td class="text-center" style="width: 1%"></td>
              <td class="text-center" style="width: 1%"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</body>
</html>
