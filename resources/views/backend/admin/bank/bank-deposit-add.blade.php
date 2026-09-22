@extends('backend.layouts.master')
@section('content')
<div class="col-xl-12">
  <div class="breadcrumb-holder">
    <h1 class="main-title float-left">Manage Bank Deposit</h1>
    <ol class="breadcrumb float-right">
      <li class="breadcrumb-item"><a href="{{route('home')}}"><strong>Home</strong></a></li>
      <li class="breadcrumb-item active">Bank Deposit</li>
    </ol>
    <div class="clearfix"></div>
  </div>
</div>
<div class="container fullbody">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5>
			{{(@$editData) ? ("Update Deposit") : "Add Deposit"}}
			<a class="btn btn-sm btn-success float-right" href="{{route('banks.bank.deposit.view')}}"><i class="fa fa-list"></i> Bank Deposit List</a>
		</h5>
      </div>

      <div class="card-body">
		<form method="post" action="{{!empty($editData->id) ? route('banks.bank.deposit.update',$editData->id) : route('banks.bank.deposit.store')}}" enctype="multipart/form-data" id="myForm">
        	{{csrf_field()}}
        	<div class="form-row">
            	<div class="form-group col-sm-4">
	                <label>Date</label>
	                <input type="text" name="date" class="form-control singledatepicker" value="{{(@$editData)?($editData->date):($cdate)}}" readonly>
              	</div>
              	<div class="form-group col-sm-4">
	                <label>Amount</label>
	                <input type="number" name="amount" class="form-control" value="{{@$editData->amount}}" placeholder="Write Amount">
              	</div>
              	<div class="form-group col-sm-4">
	                <label class="control-label">Bank Name</label>
					<select name="bank_id" id="bank_id" class="bank_id form-control">
						<option value="">Select Bank</option>
						@foreach($banks as $bank)
						<option value="{{$bank->id}}" {{(@$editData->bank_id==$bank->id)?"selected":""}}>{{$bank->name}}</option>
						@endforeach
					</select>
              	</div>
              	<div class="form-group col-sm-8">
	                <label>Description</label>
	                <input type="text" name="description" class="form-control" value="{{@$editData->description}}" placeholder="Write Description">
              	</div>
              	<div class="form-group col-sm-4">
	                <label>Attach</label>
	                <input type="file" name="file" class="form-control">
              	</div>
            </div>
        	<div class="form-row">
          		<div class="form-group col-sm-6">
            		<button type="submit" class="btn btn-primary">{{(@$editData) ? 'Update' : 'Submit'}}</button>
          		</div>
        	</div>
      	</form>
	</div>

    </div>
  </div>
</div>

<script>
    $(document).ready(function(){
    	$('#myForm').validate({
    		errorClass:'text-danger',
	      	validClass:'text-success',
	        rules : {
	            bank_id : {
	                required : true
	            },
	            date : {
	                required : true
	            },
	            amount : {
	                required : true
	            },
	        },
	        messages : {
	        	
	        }
	    });
    });
</script>

@endsection