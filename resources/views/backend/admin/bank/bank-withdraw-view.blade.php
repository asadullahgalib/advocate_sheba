@extends('backend.layouts.master')
@section('content')
<div class="col-xl-12">
  <div class="breadcrumb-holder">
    <h1 class="main-title float-left">Manage Bank Withdraw</h1>
    <ol class="breadcrumb float-right">
      <li class="breadcrumb-item"><a href="{{route('home')}}"><strong>Home</strong></a></li>
      <li class="breadcrumb-item active">Bank Withdraw</li>
    </ol>
    <div class="clearfix"></div>
  </div>
</div>
<div class="container fullbody">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5>Bank Withdraw
			<a class="btn btn-sm btn-success float-right" href="{{route('banks.bank.withdraw.add')}}"><i class="fa fa-plus-circle"></i> Add Withdraw</a>
		</h5>
      </div>

      <div class="card-body">
		<table id="example1" class="table table-bordered table-striped dt-responsive nowrap" style="width: 100%">
			<thead>
				<tr>
					<th width="5%">S/L </th>
					<th>Date</th>
					<th>Amount</th>
					<th>Bank Name</th>
					<th>Description</th>
					<th>Status</th>
					<th width="15%">Action</th>
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
						<a class="btn btn-sm btn-success" title="Approve" href="{{route('banks.bank.withdraw.approval',$deposit->id)}}"><i class="fa fa-check-circle"></i></a>
						<a title="Delete" href="{{ !empty($deposit->id) ? route('banks.bank.withdraw.destroy') : ''}}"  class="delete btn btn-danger btn-sm deleteBtn"  data-token="{{ csrf_token() }}" data-id="{{ $deposit->id }}"><i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                        @endif
						<a class="btn btn-sm btn-info" title="Attach" href="{{route('banks.bank.withdraw.attach',$deposit->id)}}"><i class="fa fa-file"></i></a>
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