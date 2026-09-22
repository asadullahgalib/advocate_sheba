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
        <h5>
			Withdraw Approval
			<a class="btn btn-sm btn-success float-right" href="{{route('banks.bank.withdraw.view')}}"><i class="fa fa-list"></i> Withdraw List</a>
		</h5>
      </div>

      <div class="card-body">
		<form method="post" action="{{route('banks.bank.withdraw.approval.store',$deposit->id)}}" id="myForm">
        	{{csrf_field()}}
        	
            <input type="hidden" name="bank_id" value="{{$deposit->bank_id}}">
        	<div class="form-row">
            	<div class="form-group col-sm-4">
	                <label>Date</label>
	                <input type="text" name="date" class="form-control form-control-sm singledatepicker" value="{{@$deposit->date}}" placeholder="YYYY-MM-DD" readonly>
              	</div>
              	<div class="form-group col-sm-4">
	                <label class="control-label">Bank Name</label>
	                <input type="text" class="form-control form-control-sm" value="{{$deposit['bank']['name']}}" readonly>
              	</div>
              	<div class="form-group col-sm-4">
	                <label>Bank Stock Amount</label>
	                <input type="text" name="stock_amount" id="stock_amount" value="{{$stock}}" class="form-control form-control-sm" readonly>
              	</div>
              	<div class="form-group col-sm-8">
	                <label>Description</label>
	                <input type="text" name="description" id="description" class="form-control form-control-sm" value="{{$deposit->description}}" readonly>
              	</div>
              	<div class="form-group col-sm-4">
	                <label>Withdraw Amount</label>
	                <input type="number" name="amount" id="amount" class="form-control form-control-sm" value="{{$deposit->amount}}" readonly>
              	</div>
            </div>
        	<div class="form-row">
          		<div class="form-group col-sm-6">
            		<button type="submit" class="btn btn-primary btn-sm">Approve</button>
          		</div>
        	</div>
      	</form>
	</div>

    </div>
  </div>
</div>

@endsection