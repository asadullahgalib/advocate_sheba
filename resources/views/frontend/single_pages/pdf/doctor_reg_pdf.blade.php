<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Font Awesome CSS -->
<link href="{{asset('public/pike/backend/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
<title>Registration Details</title>
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
                Register
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
                <!-- <span style="font-weight:bold;"> Date  </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                : {{date('d-m-Y',strtotime(@$value->created_at))}} -->
              </td>
              <td class="text-center" style="width: 22%"></td>
              <td class="text-left" style="width: 37%;">
                <span style="font-weight:bold;"> Date  </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                 : {{date('d-m-Y',strtotime(@$value->created_at))}}
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="row" style="margin-bottom:20px;margin-top: 50px;">
      <div class="col-sm-12">
        <table class="table table-bordered" style="margin-bottom: 10px;">
            <tr>
              <th style="background:#0398D6;color:#fff;font-weight: bold;text-align: left; width: 100%;">
                @if($value->user_category=='nursing')
                Nurse Details:
                @elseif($value->user_category=='doctor')
                Doctor Details:
                @endif
              </th>
            </tr>
            <tr>
              <td style="padding-left:10px;padding-top: 30px;padding-bottom: 30px;">
                <span style="font-weight:bold;">Name  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{@$value->name}} </span><br><br>
                <span style="font-weight:bold;">Qualification  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{@$value->qualification}} </span><br><br>
                <span style="font-weight:bold;">Department </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{@$value['department']['name']}} <br><br>
                <span style="font-weight:bold;">Contact No  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{@$value->mobile}} </span><br><br>
                <span style="font-weight:bold;">MBDC|BDS|Others : {{@$value->mbbs_fcp}} </span><br><br>
                <span style="font-weight:bold;">Work Place  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{@$value->work_place}} </span><br><br>
                <span style="font-weight:bold;">Status  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 
                  @if($value->status=='0')
                  Pending
                  @elseif($value->status=='1')
                  Active
                  @endif
                </span><br><br>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <table style="width: 100%;margin-top: -10px !important;">
          <tbody>
            <tr>
              <td style="width: 98%;left:-20px !important;" class="text-left">
                  <br><br>
                  Thanks for your registration. Our team member will contact with you very soon.<br><br>
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
