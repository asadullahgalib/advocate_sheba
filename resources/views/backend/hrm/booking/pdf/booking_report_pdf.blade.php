<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<title>Doctor Booking Report</title>
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
body{
  background-color: #E9D4E9;
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid honeydew;
}
table tr,td{
  vertical-align: middle !important;
}
td.record{
  background-color: #F1F4FF !important;
}
table td.title{
  background-color: #FFFFFF !important;
}
/*body {
  font-family: 'nikoshban',sans-serif;
}
.span{
  font-size: 15px;
}*/
</style>
<body>
  <div class="container">
    <div class="row" style="margin-bottom:5px;">
      <table style="width: 100%">
        <tbody>
          <tr>
            <td style="width: 15%" class="text-center">
              <!-- <img src="{{asset('public/frontend/pdf_logo.jpg')}}" style="width:120px"> -->
            </td>
            <td class="text-center" style="width: 70%">
              <h4 style="font-weight: bold;color:#90268F;font-size: 22px;">
                <strong>Anwer Khan Modern Nursing College</strong>
              </h4>
              <hr style="margin-bottom: 0px;width: 90%;color: #90268F;height: 3px;">
              <h5 style="font-weight: normal;font-size: 14px;">
                20, ARA Center, Dhanmondi #7, Dhaka-1205. Contact: 01954404608, 01771241886, 01742999397
              </h5>
              <h5 style="font-weight: normal;font-size: 14px;">
                Web: www.akmnc.edu.bd Email: akmnc.edu.bd@gmail.com 
              </h5>
            </td>
            <td class="text-center" style="width: 15%">
              
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="row" style="margin-bottom:5px;">
      <div class="col col-sm-12 text-center">
        <table style="width: 100%">
          <tbody>
          <tr>
            <td style="width:10%"></td>
            <td style="text-align:center;font-size: 22px;">
              <h5>
                  Booking Report ({{date('d-m-Y',strtotime($start_date))}} - {{date('d-m-Y',strtotime($end_date))}})
              </h5>
            </td>
            <td style="width:10%"></td>
          </tr>
        </table>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <table class="table table-sm table-bordered" style="margin-bottom:4px">
          <thead>
            <tr>
              <th class="title">SL</th>
              <th class="title">Date</th>
              <th class="title">Time</th>
              <th class="title">Doctor Info</th>
              <th class="title">Patient Info</th>
              <th class="title">Payment Type</th>
              <th class="title">Amount</th>
            </tr>
          </thead>
          <tbody>
            @php
              $total_sum = 0;
            @endphp
            @foreach($allData as $key => $value)
            <tr>
              <td class="title">{{$key+1}}</td>
              <td class="title">{{date('d-m-Y',strtotime($value->date))}}</td>
              <td class="title">{{@$value['time']['name']}}</td>
              <td class="title">{{@$value['doctor']['name']}} - {{@$value['doctor']['department']['name']}}</td>
              <td class="title"> {{$value->name}} - {{$value->mobile}}</td>
              <td class="title"> {{$value->fee_type}}</td>
              <td class="title"> {{$value->amount}}</td>
            </tr>
            @php
              $total_sum += $value->amount;
            @endphp
            @endforeach
            <tr>
              <td class="title" colspan="6" style="font-weight:bold;text-align: right;">Grand Total: </td>
              <td class="title" style="font-weight:bold;"> {{$total_sum}} Tk</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
