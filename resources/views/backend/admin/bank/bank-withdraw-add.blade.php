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
			{{(@$editData) ? ("Update Withdraw") : "Add Withdraw"}}
			<a class="btn btn-sm btn-success float-right" href="{{route('banks.bank.withdraw.view')}}"><i class="fa fa-list"></i> Withdraw List</a>
		</h5>
      </div>

      <div class="card-body">
		<form method="post" action="{{!empty($editData->id) ? route('banks.bank.withdraw.update',$editData->id) : route('banks.bank.withdraw.store')}}" enctype="multipart/form-data" id="myForm">
        	{{csrf_field()}}
        	<div class="form-row">
            	<div class="form-group col-sm-4">
	                <label>Date</label>
	                <input type="text" name="date" class="form-control singledatepicker" value="{{(@$editData)?($editData->date):($cdate)}}" readonly>
              	</div>
              	<div class="form-group col-sm-4">
	                <label class="control-label">Bank Name</label>
					<select name="bank_id" id="bank_id" class="bank_id form-control">
						<option value="">Select Bank</option>
						@foreach($banks as $bank)
						<option value="{{$bank->bank_id}}">{{$bank['bank']['name']}}</option>
						@endforeach
					</select>
              	</div>
              	<div class="form-group col-sm-4">
	                <label>Bank Stock Amount</label>
	                <input type="text" name="stock_amount" id="stock_amount" class="form-control" readonly>
              	</div>
              	<div class="form-group col-sm-7">
	                <label>Description</label>
	                <input type="text" name="description" id="description" class="form-control">
              	</div>
              	<div class="form-group col-sm-2">
	                <label>Withdraw Amount</label>
	                <input type="number" name="amount" id="amount" class="form-control">
              	</div>
              	<div class="form-group col-sm-3">
	                <label>Attach</label>
	                <input type="file" name="file" class="form-control">
              	</div>
            </div>
        	<div class="form-row">
          		<div class="form-group col-sm-6">
            		<button type="submit" class="btn btn-primary btn-sm">{{(@$editData) ? 'Update' : 'Submit'}}</button>
          		</div>
        	</div>
      	</form>
	</div>

    </div>
  </div>
</div>

<script type="text/javascript">
	$(function(){
		$(document).on('change','.bank_id',function(){
			var bank_id = $('#bank_id').val();
			$.ajax({
				url:"{{route('banks.bank.withdraw.get-stock')}}",
				type:"GET",
				data:{'bank_id':bank_id},
				success:function(data){
	                $('#stock_amount').val(data);
				}
			});
		});
	});
</script>

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