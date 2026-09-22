<!DOCTYPE html>
<html>
<head>
	<title>Doctor Report</title>
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
			padding: 4px;
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
				<h3 style="font-weight: bold; padding-top: -25px;">Doctor List</h3>
			</div>
			<div class="col-md-12">
				<table class="table table-bordered table-sm">
	              <thead>
		            <tr>
		            	<th>SL</th>
		            	<th>Name</th>
			            <th>Department</th>
			            <th>Designation</th>
			            <th>Mobile</th>
			            <th>Join Date</th>
			            <th>Email</th>
		            </tr>
		          </thead>
		          <tbody>
		            @foreach($allData as $key=> $value)
		            <tr>
		            	<td>{{$key+1}}</td>
		                <td>{{ $value->name }}</td>
		                <td>{{ @$value['department']['name'] }}</td>
		                <td>{{ @$value['designation']['name'] }}</td>
		                <td>{{ $value->mobile }}</td>
		                <td>{{ date('Y-m-d',strtotime($value->join_date)) }}</td>
		                <td>{{ $value->email }}</td>
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