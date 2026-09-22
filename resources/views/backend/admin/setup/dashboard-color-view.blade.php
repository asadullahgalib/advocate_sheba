@extends('backend.layouts.master')
@section('content')

<div class="col-xl-12">
	<div class="breadcrumb-holder">
		<h1 class="main-title float-left">Manage Color for Dashboard</h1>
		<ol class="breadcrumb float-right">
			<li class="breadcrumb-item">Home </li>
			<li class="breadcrumb-item active">Color for Dashboard</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
<div class="container fullbody">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h5>List of Color for Dashboard
					<!-- <a class="btn btn-sm btn-success float-right" href="{{route('setup.color.add')}}"><i class="fa fa-plus-circle"></i> Add Color for Dashboard</a> -->
				</h5>
			</div>
			<div class="card-body">
				<table class="table-sm table-bordered table-striped dt-responsive nowrap" style="width: 100%" id="datatable">
						<thead  >
							<tr>
								<th>Sl.</th>
								<th>User Type</th>
								<th>Nabvar Color</th>
								<th>Child Nabvar Color</th>
								<th>Table Color</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							    <?php
							        if(Auth()->user()->usertype == '1'){
							            $usertype = 'admin';
							        }else{
							            $usertype = Auth()->user()->usertype;
							        }
							        $dashboardColors = DB::table('dashboard_colors')->where('usertype',$usertype)->first();
							    ?>
							@foreach($allData as $key => $color)
							<?php 
								if($color->usertype == 'admin'){
									$usertype = 'Admin';
								}else if($color->usertype == 'guestspeaker'){
									$usertype = 'Guest Speaker';
								}else if($color->usertype == 'participant'){
									$usertype = 'Participant';
								}
							?>
							<tr class="{{$color->id}}">
								<td>{{$key+1}}</td>
								<td>{{$usertype}}</td>
								<td class="text-center">
									<span style ="background:{{@$color->navbarbgcode}}; padding: 5px 25px 5px 25px; border-radius: 8px"></span>
									<span style ="background:{{@$color->navbartxtcode}}; padding: 5px 25px 5px 25px; border-radius: 8px; margin-left: 5px"></span>
								</td>
								<td class="text-center">
									<span style ="background:{{@$color->childnavbarbgcode}}; padding: 5px 25px 5px 25px; border-radius: 8px"></span>
									<span style ="background:{{@$color->childnavbartxtcode}}; padding: 5px 25px 5px 25px; border-radius: 8px; margin-left: 5px"></span>
								</td>
								<td class="text-center">
									<span style ="background:{{@$color->tablebgcode}}; padding: 5px 25px 5px 25px; border-radius: 8px"></span>
									<span style ="background:{{@$color->tabletxtcode}}; padding: 5px 25px 5px 25px; border-radius: 8px; margin-left: 5px"></span>
								</td>
								<td>
									<a class="btn btn-sm btn-success" title="Edit" href="{{route('setup.color.edit',$color->id)}}"><i class="fa fa-edit"></i></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
			</div>
		</div>
	</div>
</div>
@endsection