<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employee List</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th style="font-weight:bold;"> 1</th>
				<th style="font-weight:bold;"> Name</th>
				<th style="font-weight:bold;"> Department</th>
				<th style="font-weight:bold;"> Designation</th>
				<th style="font-weight:bold;"> Mobile No</th>
				<th style="font-weight:bold;"> Join Date</th>
				<th style="font-weight:bold;"> Email</th>
				<th style="font-weight:bold;"> Present Address</th>
				<th style="font-weight:bold;"> NID No</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pdata as $key => $data)
			@php
				$department = App\Model\Department::where('id',$data['department_id'])->first();
				$designation = App\Model\Designation::where('id',$data['designation_id'])->first();
			@endphp
			<tr>
				<td>{{$key+1}}</td>
				<td>{{$data['name']}}</td>
				<td>{{@$department->name}}</td>
				<td>{{@$designation->name}}</td>
				<td>{{$data['mobile']}}</td>
				<td>{{date('d-m-Y',strtotime($data['join_date']))}}</td>
				<td>{{$data['email']}}</td>
				<td>{{$data['present_address']}}</td>
				<td>{{$data['nid_no']}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>