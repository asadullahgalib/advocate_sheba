<!DOCTYPE html>
<html>
<head>
  <title>Bank Balance Reprot</title>
  <style type="text/css">
    table{
      border-collapse: collapse;
    }
    h2 h3{
      margin: 0;
      padding: 0;
    }
    .table{
      width: 100%;
      margin-bottom: 1rem;
      background-color: transparent;
    }
    .table th,
    .table td{
      padding: 0.75rem;
      vertical-align: top;
      border-top: 1px solid #dee2e6;
    }
    .table thead th{
      vertical-align: bottom;
      border-bottom: 2px solid #dee2e6;
    }
    .table tbody + tbody{
      border-top: 2px solid #dee2e6;
    }
    .table .table{
      background-color: #fff;
    }
    .table-bordered {
      border: 1px solid #dee2e6;
    }
    .table-bordered th,
    .table-bordered td{
      border: 1px solid #dee2e6;
    }
    .table-bordered thead th,
    .table-bordered thead td{
      border-bottom-width: 2px;
    }
    .text-center{
      text-align: center;
    }
    .text-right{
      text-align: right;
    }
    table tr td{
      padding: 5px;
    }
    .table-bordered thead th,
    .table-bordered td,
    .table-bordered th{
      border: 1px solid black !important;
    }
    .table-bordered thead th{
      background-color: #cacaca;
    }
    table tr,th,td{
      text-align: center;
    }  
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <table width="80%">
          <tr>
            <td width="33%" class="text-center">
              <img src="{{url('public/upload/logo_images/'.@$school->image)}}" style="width: 90px; height: 90px">
            </td>
            <td class="text-center" width="63%">
              <h4><strong>{{ $school->name }}</strong></h4>
              <h5><strong>{{ $school->address }}</strong></h5>
            </td>
            <td class="text-center">
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-12 text-center">
        <h5 style="font-weight: bold; padding-top: -25px;text-decoration: underline;">Bank Balance Report</h5>
      </div>
      <div class="col-md-12">
        <table class="table table-sm table-bordered">
          <thead>
            <tr>
              <th>S/L </th>
              <th>Bank Name</th>
              <th>Account Name</th>
              <th>Account No</th>
              <th>Deposit</th>
              <th>Withdraw</th>
              <th>Balance</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($allData as $key => $value)
            @php
              $deposit = App\Model\BankDeposit::where('bank_id',$value->bank_id)->where('status','1')->sum('amount');
              $withdraw = App\Model\BankWithdraw::where('bank_id',$value->bank_id)->where('status','1')->sum('amount');
            @endphp
            <tr class="{{$value->id}}">
              <td>{{$key+1}}</td>
              <td>{{$value['bank']['name']}}</td>
              <td>{{$value['bank']['account_name']}}</td>
              <td>{{$value['bank']['account_no']}}</td>
              <td>{{$deposit}}</td>
              <td>{{$withdraw}}</td>
              <td>{{$value->amount}}</td>
            </tr>
            @endforeach
          </tbody>
        </table><br>
        <i style="font-size: 10px; float: right;">Print Date: {{ date("d M Y") }}</i>
      </div>
      <div class="col-md-12">
        <table border="0" width="100%">
          <tbody>
            <tr>
              <td style="width: 30%"></td>
              <td style="width: 30%"></td>
              <td style="width: 40%; text-align: center;">
                <hr style="border: solid 1px; width: 60%; color: #000; margin-bottom: 0px;">
                <p style="text-align: center;">Authority Signature</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>    
  </div>
</body>
</html>