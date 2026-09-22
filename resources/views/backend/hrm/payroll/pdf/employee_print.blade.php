<!DOCTYPE html>
<html>
<head>
	<title>Doctor Details Information</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
							<img src="{{(!empty(@$details->image))?url('public/upload/employee_images/'.@$details->image):url('public/upload/no_image.png')}}" style="width: 90px; height: 90px">
						</td>
					</tr>
				</table>
			</div>
			<div class="col-md-12 text-center">
				<h3 style="font-weight: bold; padding-top: -25px;">Doctor Details Information</h3>
			</div>
			<div class="col-md-12">
				<table class="table">
				  <tr>
				  	<td  colspan="5" style="text-align:center"><strong>Official Information:</strong></td>
				  </tr>
	              <tr>
	                <td colspan="2" width="40%"><strong>Name</strong></td>
	                <td colspan="3">{{@$details->name}}</td>
	              </tr>
	              <tr>
	                <td colspan="2" width="40%"><strong>Qualification</strong></td>
	                <td colspan="3">{{@$details->qualification}}</td>
	              </tr>
	              <tr>
	                <td colspan="2"><strong>Department</strong></td>
	                <td colspan="3">{{@$details['department']['name']}}</td>
	              </tr>
	              <tr>
	                <td colspan="2"><strong>Contact No</strong></td>
	                <td colspan="3">{{@$details->mobile}}</td>
	              </tr>
	              <tr>
	                <td colspan="2"><strong>BMDC No</strong></td>
	                <td colspan="3">{{@$details->mbbs_fcp}}</td>
	              </tr>
	              <tr>
	                <td colspan="2"><strong>Designation</strong></td>
	                <td colspan="3">{{@$details['designation']['name']}}</td>
	              </tr>
	              <tr>
	                <td colspan="2"><strong>Joining Date</strong></td>
	                <td colspan="3">{{date('d-m-Y',strtotime(@$details->join_date))}}</td>
	              </tr>
	              <tr>
	                <td colspan="2"><strong>Email</strong></td>
	                <td colspan="3">{{@$details->email}}</td>
	              </tr>
	              <tr>
	                <td colspan="5" style="text-align:center"><strong>Personal Information:</strong></td>
	              </tr>
	              <tr>
	                <td colspan="2"><strong>Father's Name</strong></td>
	                <td colspan="3">{{@$details->fname}}</td>
	              </tr>
	              <tr>
	                <td colspan="2"><strong>Mother's Name</strong></td>
	                <td colspan="3">{{@$details->mname}}</td>
	              </tr>
	              <tr>
	                <td colspan="2"><strong>Date of Birth</strong></td>
	                <td colspan="3">{{date('d-m-Y',strtotime(@$details->dob))}}</td>
	              </tr>
	              <tr>
	                <td colspan="2"><strong>Gender</strong></td>
	                <td colspan="3">{{@$details->gender}}</td>
	              </tr>
	              <tr>
	                <td colspan="2"><strong>Religion</strong></td>
	                <td colspan="3">{{@$details['religion']['name']}}</td>
	              </tr>
	              <tr>
	                <td colspan="2"><strong>Nationality</strong></td>
	                <td colspan="3">{{@$details->nationality}}</td>
	              </tr>
	              <tr>
	                <td colspan="2"><strong>NID No</strong></td>
	                <td colspan="3">{{@$details->nid_no}}</td>
	              </tr>
	              <tr>
	                <td colspan="2"><strong>Blood Group</strong></td>
	                <td colspan="3">{{@$details->blood_group}}</td>
	              </tr>
	              <tr>
	                <td colspan="2"><strong>Marital Status</strong></td>
	                <td colspan="3">{{@$details->marital_status}}</td>
	              </tr>
	              <tr>
	              	<td colspan="5" style="text-align:center;"><strong>Mailing Information:</strong></td>
	              </tr>
	              <tr>
	                <td colspan="2"><strong>Present Address</strong></td>
	                <td colspan="3">{{@$details->present_address}}</td>
	              </tr>
	              <tr>
	                <td colspan="2"><strong>Permanent Address</strong></td>
	                <td colspan="3">{{@$details->permanent_address}}</td>
	              </tr>
	              <tr>
	                <td colspan="2"><strong>Emergency Contact Person</strong></td>
	                <td colspan="3">{{@$details->emergency_contact_name}}</td>
	              </tr>
	              <tr>
	                <td colspan="2"><strong>Relation With Emergency Contact Person</strong></td>
	                <td colspan="3">{{@$details->relation_with}}</td>
	              </tr>
	              <tr>
	                <td colspan="2"><strong>Emergency Contact Person Mobile</strong></td>
	                <td colspan="3">{{@$details->emergency_contact_no}}</td>
	              </tr>
	              <tr>
	              	<td colspan="5" style="text-align:center"><strong>Education Information:</strong></td>
	              </tr>
	              <tr>
	              	<td><strong>Exam Name</strong></td>
	              	<td><strong>Subject</strong></td>
	              	<td><strong>Institute</strong></td>
	              	<td><strong>Result</strong></td>
	              	<td><strong>Passing Year</strong></td>
	              </tr>
	              @foreach($educations as $edu)
	                <tr>
	                  <td>{{$edu->exam_name}}</td>
	                  <td>{{$edu->subject}}</td>
	                  <td>{{$edu->institute_name}}</td>
	                  <td>{{$edu->result}}</td>
	                  <td>{{$edu->passing_year}}</td>
	                </tr>
	              @endforeach
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