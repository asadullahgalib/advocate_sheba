@extends('backend.layouts.master')
@section('content')
<div class="col-xl-12">
  <div class="breadcrumb-holder">
    <h1 class="main-title float-left">Bank Balance</h1>
    <ol class="breadcrumb float-right">
      <li class="breadcrumb-item"><a href="{{route('home')}}"><strong>Home</strong></a></li>
      <li class="breadcrumb-item active">Balance</li>
    </ol>
    <div class="clearfix"></div>
  </div>
</div>
<div class="container fullbody">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5>Bank Balance List
			<a class="btn btn-sm btn-success float-right" target="_blank" href="{{route('banks.bank.stock.pdf')}}"><i class="fa fa-download"></i> Download</a>
		</h5>
      </div>

      <div class="card-body">
		<table id="example1" class="table table-bordered table-striped dt-responsive nowrap" style="width: 100%">
			<thead>
				<tr>
					<th>S/L </th>
					<th>Bank Name</th>
					<th>Account Name</th>
					<th>Account No</th>
					<th>Deposit</th>
					<th>Withdraw</th>
					<th>Balance</th>
					<th width="7%">Action </th>
				</tr>
			</thead>
			<tbody>
				@foreach ($allData as $key => $value)
				@php
					$deposit = App\Model\BankDeposit::where('bank_id',$value->bank_id)->where('status','1')->sum('amount');
					$withdraw = App\Model\BankWithdraw::where('bank_id',$value->bank_id)->where('status','1')->sum('amount');
				@endphp
				<tr class="{{$value->id}}">
					<td>{{$key+1}}</td>
					<td>{{$value['bank']['name']}}</td>
					<td>{{$value['bank']['account_name']}}</td>
					<td>{{$value['bank']['account_no']}}</td>
					<td>{{$deposit}}</td>
					<td>{{$withdraw}}</td>
					<td>{{$value->amount}}</td>
					<td>
						<a target="_blank" class="btn btn-sm btn-info" title="Details" href="{{route('banks.bank.stock-bank-wise.pdf',$value->bank_id)}}"><i class="fa fa-eye"></i></a>
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