@extends('backend.layouts.master')
@section('content')
<div class="content-page">
    
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
						<h2 class="main-title float-left">Manage Bank Deposit</h2>
						<ol class="breadcrumb float-right">
							<li class="breadcrumb-item">Home</li>
							<li class="breadcrumb-item">Bank Deposit</li>
						</ol>
						<div class="clearfix"></div>
					</div>
                </div>
            </div>
            <!-- end row -->
            
            <div class="container fullbody">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h5>Pending List
							</h5>
						</div>
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped dt-responsive table-responsive" style="width: 100%">
								<thead>
									<tr>
										<th>S/L </th>
										<th>Date</th>
										<th>Amount</th>
										<th>Bank Name</th>
										<th>Description</th>
										<th width="8%">Status</th>
										<th>Action </th>
									</tr>
								</thead>
								<tbody>
									@foreach ($allData as $key => $deposit)
									<tr class="{{$deposit->id}}">
										<td>{{$key+1}}</td>
										<td>{{date('d-m-Y',strtotime($deposit->date))}}</td>
										<td>{{$deposit->amount}}</td>
										<td>{{$deposit['bank']['name']}}</td>
										<td>{{$deposit->description}}</td>
										<td>
											@if($deposit->status=='0')
											<span style="background: #FC463A;padding: 1px;">Pending</span>
											@elseif($deposit->status=='1')
											<span style="background: #1B9F5E;padding: 1px;">Approved</span>
											@endif
										</td>
										<td>
											@if($deposit->status=='0')
											<a title="Approve" class="approveBtn btn btn-sm btn-info" href="{{ !empty($deposit->id) ? route('banks.bank.deposit.approval') : ''}}" data-token="{{ csrf_token() }}" data-id="{{ $deposit->id }}"><i class="fa fa-check-circle" aria-hidden="true"></i></a>
											@endif
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
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</div>
<!-- END content-page -->

@endsection