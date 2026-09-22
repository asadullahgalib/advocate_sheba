<!DOCTYPE html>
<html>
<head>
  <title>Employee Salary Report</title>
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
        <h5 style="font-weight: bold; padding-top: -25px;text-decoration: underline;">Employee Salary Report ({{date('d-m-Y',strtotime($start_date))}} - {{date('d-m-Y',strtotime($end_date))}})</h5>
      </div>
      <div class="col-md-12">
        <table class="table table-sm table-bordered">
          <thead>
              <tr>
                  <th width="5%">SL. </th>
                  <th>HR ID</th>
                  <th>Staff Code</th>
                  <th>Name</th>
                  <th>Designation</th>
                  <th>Mobile</th>
                  <th>Back A/C No</th>
                  <th>Gross Salary</th>
                  <th>Attendance</th>
                  <th>Addition</th>
                  <th>Deduction</th>
                  <th>Payable Salary</th>
              </tr>
          </thead>
          <tbody>
              @php
                 $total_sum = 0;
              @endphp
              @foreach ($allData as $key => $value)
              @php
                $total_addion = $value->salary+$value->gross_salary+$value->medical_alowance+$value->house_rent+$value->others_addition+$value->alowance;
                $total_deduction = $value->tax+$value->advance+$value->others_deduction+$value->provident_fund;
                $payable_salary = $value->grand_total-$value->attendance;
              @endphp
              <tr>
                  <td>{{$key+1}}</td>
                  <td>{{@$value['employee']['id_no']}}</td>
                  <td>{{@$value['employee']['employee_code']}}</td>
                  <td>{{@$value['employee']['name']}}</td>
                  <td>{{@$value['employee']['designation']['name']}}</td>
                  <td>{{@$value['employee']['mobile']}}</td>
                  <td>{{@$value['employee']['bank_account_no']}}</td>
                  <td>{{$value->grand_total}}</td>
                  <td>{{$value->attendance}}</td>
                  <td>{{$total_addion}}</td>
                  <td>{{$total_deduction}}</td>
                  <td>{{$payable_salary}}</td>
                  @php
                    $total_sum += $payable_salary;
                  @endphp
              </tr>
              @endforeach
              <tr>
                <td colspan="11" class="text-right"><strong>Grand Total</strong></td>
                <td><strong>{{$total_sum}} TK</strong></td>
              </tr>
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