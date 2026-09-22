@extends('backend.layouts.master')
@section('content')
<div class="content-page">
    
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
						<h2 class="main-title float-left">Manage Bank</h2>
						<ol class="breadcrumb float-right">
							<li class="breadcrumb-item">Home</li>
							<li class="breadcrumb-item">Bank</li>
						</ol>
						<div class="clearfix"></div>
					</div>
                </div>
            </div>
            <!-- end row -->
            
            <div class="container fullbody">
				<div class="col-md-12" style="padding-top: 40px;">
					<div class="card">
						<div class="card-header">
							<h5>{{(@$editData) ? ("Update Bank") : "Add Bank"}}
								<a class="btn btn-sm btn-success float-right" href="{{route('banks.bank.view')}}"><i class="fa fa-list"></i> Bank Name List</a>
							</h5>
						</div>
						<div class="card-body">
							<form method="post" action="{{!empty($editData->id) ? route('banks.bank.update',$editData->id) : route('banks.bank.store')}}" id="myForm" enctype="multipart/form-data">
				            	{{csrf_field()}}
				            	<div class="form-row">
					            	<div class="form-group col-md-6">
						                <label>Bank Name</label>
						                <input type="text" name="name" class="form-control" value="{{@$editData->name}}" placeholder="Write Bank Name">
					              	</div>
					            </div>
				            	<div class="form-row">
				              		<div class="form-group col-md-6">
				                		<button type="submit" class="btn btn-primary">{{(@$editData) ? 'Update' : 'Submit'}}</button>
				              		</div>
				            	</div>
				          	</form>
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
<script>
    $(document).ready(function(){
    	$('#myForm').validate({
    		errorClass:'text-danger',
	      	validClass:'text-success',
	        rules : {
	            name : {
	                required : true
	            }
	        },
	        messages : {
	        	
	        }
	    });
    });
</script>

@endsection