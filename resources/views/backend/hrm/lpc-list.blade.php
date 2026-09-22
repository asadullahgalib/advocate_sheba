@extends('backend.layouts.master')
@section('content')
<div class="col-xl-12">
	<div class="breadcrumb-holder">
		<h1 class="main-title float-left">Manage Employee LPC</h1>
		<ol class="breadcrumb float-right">
			<li class="breadcrumb-item">Home </li>
			<li class="breadcrumb-item active">Employee LPC</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
<div class="container fullbody">
	<div class="col-md-12">
		<div class="card">
			<div class="card">
				<div class="card-header">
					<h5>Employee LPC List <a href="{{route('hrm.lpc.add')}}" class="btn btn-sm btn-facebook float-right"><i class="fa fa-plus"></i>
					Add Employee LPC</a></h5>
				</div>
				<div class="card-body">
					<table class="table-sm table-bordered table-striped dt-responsive nowrap" style="width: 100%" id="datatable">
						<thead  >
							<tr>
								<th>Sl.</th>
								<th>Employee Name</th>
								<th>Full Earned Leave</th>
								<th>Half Earned Leave</th>
								<th>Attachment</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($lpcs as $lpc)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$lpc['user_info']->name}}</td>
								<td>{{$lpc->full_earned_leave.' Days'}}</td>
								<td>{{$lpc->half_earned_leave.' Days'}}</td>
								<td>
									<a href="{{url('public/backend/images/lpc/'.$lpc->lpc_attachment)}}" target="blank">
										<img src="{{url('public/backend/images/lpc/'.$lpc->lpc_attachment)}}" style="width: 100px; width: 150px;">
									</a>
								</td>
								<td>
									<a href="{{route('hrm.lpc.edit',$lpc->id)}}" class="btn btn-sm btn-instagram"><i class="fa fa-pencil"></i></a>
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
@endsection
