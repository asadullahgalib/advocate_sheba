@extends('backend.layouts.master')
@section('content')
<!-- color picker -->
<style>
.custom-size .colorpicker-saturation {
	width: 250px;
	height: 250px;
}

.custom-size .colorpicker-hue,
.custom-size .colorpicker-alpha {
	width: 40px;
	height: 250px;
}

.custom-size .colorpicker-color,
.custom-size .colorpicker-color div {
	height: 40px;
}
</style>
      
<div class="col-xl-12">
	<div class="breadcrumb-holder">
		<h1 class="main-title float-left">Manage Color for dashboard</h1>
		<ol class="breadcrumb float-right">
			<li class="breadcrumb-item">Home </li>
			<li class="breadcrumb-item active">Add Color for dashboard</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
<div class="container fullbody">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h5>Add Color for dashboard <a class="btn btn-sm btn-success float-right" href="{{route('setup.color.view')}}"><i class="fa fa-list"></i> List of Color for dashboard</a></h5>
			</div>
			<!-- Form Start-->
			<form method="post" action="{{!empty($editData->id) ? route('setup.color.update',$editData->id) : route('setup.color.store')}}" id="myForm">
				{{csrf_field()}}
				<div class="card-body">
					<div class="show_module_more_event">
						<div class="form-row">
							<div class="form-group col-md-12">
								<label class="control-label">Dashboard Type</label>
								<select id="usertype" name="usertype" class="form-control form-control-sm">
									<option value="">Select Dashboard</option>
									<option value="admin" {{(@$editData->usertype == 'admin')?('selected'):''}}>Admin Dashboard</option>
									<option value="guestspeaker" {{(@$editData->usertype == 'guestspeaker')?('selected'):''}}>Guest Speaker Dashboard</option>
									<option value="participant" {{(@$editData->usertype == 'participant')?('selected'):''}}>Participant Dashboard</option>
								</select>
							</div>

							<div class="form-group col-md-6">
								<label class="control-label">Navbar Background Color</label>
								<div class="input-group input-group-sm colorpicker-component">
									<input type="text" name="navbarbgcode" id="navbarbgcode" class="form-control form-control-sm code" value="{{!empty($editData->navbarbgcode) ? ($editData->navbarbgcode) : ''}}" placeholder="Enter Color Code" readonly="">
									<div class="input-group-append">
										<span class="input-group-text" style="padding-bottom: 0px">
											<span class="input-group-addon"><i  style="padding-left:40px !important"></i></span>
										</span>
									</div>
								</div>
							</div>
    

							<div class="form-group col-md-6">
								<label class="control-label">Navbar Text Color</label>
								
								<div class="input-group input-group-sm colorpicker-component">
									<input type="text" name="navbartxtcode" id="navbartxtcode" class="form-control form-control-sm code" value="{{!empty($editData->navbartxtcode) ? ($editData->navbartxtcode) : ''}}" placeholder="Enter Color Code" readonly="">
									<div class="input-group-append">
										<span class="input-group-text" style="padding-bottom: 0px">
											<span class="input-group-addon"><i  style="padding-left:40px !important"></i></span>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="control-label">Child Navbar Background Color</label>
								
								<div class="input-group input-group-sm colorpicker-component">
									<input type="text" name="childnavbarbgcode" id="childnavbarbgcode" class="form-control form-control-sm code" value="{{!empty($editData->childnavbarbgcode) ? ($editData->childnavbarbgcode) : ''}}" placeholder="Enter Color Code" readonly="">
									<div class="input-group-append">
										<span class="input-group-text" style="padding-bottom: 0px">
											<span class="input-group-addon"><i  style="padding-left:40px !important"></i></span>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="control-label">Child Navbar Text Color</label>
								
								<div class="input-group input-group-sm colorpicker-component">
									<input type="text" name="childnavbartxtcode" id="childnavbartxtcode" class="form-control form-control-sm code" value="{{!empty($editData->childnavbartxtcode) ? ($editData->childnavbartxtcode) : ''}}" placeholder="Enter Color Code" readonly="">
									<div class="input-group-append">
										<span class="input-group-text" style="padding-bottom: 0px">
											<span class="input-group-addon"><i  style="padding-left:40px !important"></i></span>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="control-label">Table Background Color</label>
								
								<div class="input-group input-group-sm colorpicker-component">
									<input type="text" name="tablebgcode" id="tablebgcode" class="form-control form-control-sm code" value="{{!empty($editData->tablebgcode) ? ($editData->tablebgcode) : ''}}" placeholder="Enter Color Code" readonly="">
									<div class="input-group-append">
										<span class="input-group-text" style="padding-bottom: 0px">
											<span class="input-group-addon"><i  style="padding-left:40px !important"></i></span>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label class="control-label">Table Text Color</label>
								
								<div class="input-group input-group-sm colorpicker-component">
									<input type="text" name="tabletxtcode" id="tabletxtcode" class="form-control form-control-sm code" value="{{!empty($editData->tabletxtcode) ? ($editData->tabletxtcode) : ''}}" placeholder="Enter Color Code" readonly="">
									<div class="input-group-append">
										<span class="input-group-text" style="padding-bottom: 0px">
											<span class="input-group-addon"><i  style="padding-left:40px !important"></i></span>
										</span>
									</div>
								</div>
							</div>

						</div>
					</div>
						
					<button type="submit" class="btn btn-success btn-sm">{{(@$editData) ? 'Update' : 'Submit'}}</button>
					<button type="reset" class="btn btn-danger btn-sm">Reset</button>
				</div>
			</form>
			<!--Form End-->
		</div>
	</div>
</div>
<!-- extra html -->

<script>
	$(function () {
		$('.colorpicker-component').colorpicker({
              customClass: 'custom-size',
              sliders: {
                  saturation: {
                      maxLeft: 250,
                      maxTop: 250
                  },
                  hue: {
                      maxTop: 250
                  },
                  alpha: {
                      maxTop: 250
                  }
              }
          });
	});
</script>
<script>


	$(document).on('change','.code',function(){
		var codenavbarbgcode 		= $('#navbarbgcode').val();
		var codenavbartxtcode 		= $('#navbartxtcode').val();
		var codechildnavbarbgcode 	= $('#childnavbarbgcode').val();
		var codechildnavbartxtcode 	= $('#childnavbartxtcode').val();
		var codetablebgcode 		= $('#tablebgcode').val();
		var codetabletxtcode 		= $('#tabletxtcode').val();
		$(".navbarbgcode").css("background-color", codenavbarbgcode);
		$(".navbartxtcode").css("color", codenavbartxtcode);
		$(".pnavbar").css("background-color", codenavbarbgcode);
		$(".cnavbar").css("background-color", codechildnavbarbgcode);
		// $(".childnavbartxtcode").css("color", codechildnavbartxtcode);
		$("table thead").css("background-color", codetablebgcode);
		$("table thead tr th").css("color", codetabletxtcode);
	});




	// $(document).on('change','#colorcode',function(){
	// 	var colorcode = $(this).val();
	// 	$(this).parents('.input-group').find('.code').val(colorcode);
	// });

    $(document).ready(function(){
    	$('#myForm').validate({
    		errorClass:'text-danger',
	      	validClass:'text-success',
	        rules : {
	            'usertype' : {
	                required : true
	            },
	            'navbarbgcode' : {
	                required : true
	            },
	            'navbartxtcode' : {
	                required : true
	            },
	            'childnavbarbgcode' : {
	                required : true
	            },
	            'childnavbartxtcode' : {
	                required : true
	            },
	            'tablebgcode' : {
	                required : true
	            },
	            'tabletxtcode' : {
	                required : true
	            },
	        },
	        messages : {
	            'usertype' : 'Please Select Dashboard Type',
	            'navbarbgcode' : 'Please enter Navbar Background Color',
	            'navbartxtcode' : 'Please enter Navbar Text Color',
	            'childnavbarbgcode' : 'Please enter Child Navbar Background Color',
	            'childnavbartxtcode' : 'Please enter Child Navbar Text Color',
	            'tablebgcode' : 'Please enter Table Background Color',
	            'tabletxtcode' : 'Please enter Table Text Color',
	        }
	    });
    });
</script>

@endsection