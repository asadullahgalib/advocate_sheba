@extends('backend.layouts.master')
@section('content')
<style type="text/css">
a.btn{
	min-width: 100px;
}
</style>

	<div class="col-md-12" style="padding-top: 40px;">
		<div class="card">
			<div class="card-header">
				<h5>
				{{@$editData ? 'Update Employee LPC' :'Add Employee LPC'}}
			</h5>
			</div>
			<form method="post" action="{{@$editData ? route('hrm.lpc.update') : route('hrm.lpc.store')}}" id="myForm" enctype="multipart/form-data">
				{{csrf_field()}}
				{{-- <input type="hidden" name="earned_leave_id" id="earned_leave_id" value="{{@$editData->id}}"> --}}
				<div class="card-body">
					<div class="form-row">
						<div class="form-group col-sm-4 {{$errors->has('department_id') ? 'is-invalid':''}}">
							<label class="control-label">Department</label>
							<select class="form-control form-control-sm select2" id="department_id">
								<option value="">Select Department</option>
								@foreach($departments as $department)
									<option value="{{$department->id}}">{{$department->department_name_en}}</option>
								@endforeach
							</select>
							@if($errors->has('department_id'))
							<span class="text-danger">
								<strong>{{$errors->first('department_id')}}</strong>
							</span>
							@endif
						</div>
						<div class="form-group col-sm-4 {{$errors->has('employee_id') ? 'is-invalid':''}}">
							<label class="control-label">Employee</label>
							<select class="form-control form-control-sm select2" name="employee_id" id="employee_id">
								<option value="">Select Employee</option>
							</select>
							@if($errors->has('employee_id'))
							<span class="text-danger">
								<strong>{{$errors->first('employee_id')}}</strong>
							</span>
							@endif
						</div>
						<div class="form-group col-sm-4">
							<label class="control-label">Effective From</label>
							<input type="text" name="effective_from" id="effective_from" class="form-control form-control-sm singledatepicker" placeholder="Select Date" autocomplete="off">
						</div>
						<div class="form-group col-md-3">
							<label class="control-label">Pay Scale <span class="text-red">*</span></label>
							<select name="payscale_id" id="payscale_id" class="form-control form-control-sm">
								<option value="">Select Pay Scale</option>
								@foreach($payscales as $payscale)
								<option value="{{$payscale->id}}">{{$payscale->payscale_name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group col-md-3">
							<label class="control-label">Pray Grade <span class="text-red">*</span></label>
							<select name="paygrade_id" id="paygrade_id" class="form-control form-control-sm select2">
								<option value="">Select Pray Grade</option>
							</select>
						</div>
						<div class="form-group col-md-3">
							<label class="control-label">Basic Salary <span class="text-red">*</span></label>
							<input type="text" name="basic_salary" id="basic_salary" class="form-control form-control-sm numeric_only" placeholder="Enter Basic Salary" readonly>
						</div>
						<div class="form-group col-md-3">
							<label class="control-label">Salary Step</label>
							<input type="number" name="salary_step" id="salary_step" class="form-control form-control-sm" placeholder="Enter Salary Step" min="1" readonly>
						</div>
						<div class="form-group col-sm-3">
							<label class="control-label">Full Days Leave Earned<span class="text-red">*</span></label>
							<input type="text" class="form-control form-control-sm {{$errors->has('leave_days')?'is-invalid':''}}" name="full_earned_leave" id="full_earned_leave" placeholder="Leave Days" autocomplete="off">
							@if($errors->has('full_earned_leave'))
							<span class="text-danger">
								<strong>{{$errors->first('full_earned_leave')}}</strong>
							</span>
							@endif
						</div>
						<div class="form-group col-sm-3">
							<label class="control-label">Half Days Leave Earned<span class="text-red">*</span></label>
							<input type="text" class="form-control form-control-sm {{$errors->has('half_earned_leave')?'is-invalid':''}}" name="half_earned_leave" id="half_earned_leave" placeholder="Total Leave Days" autocomplete="off">
							@if($errors->has('half_earned_leave'))
							<span class="text-danger">
								<strong>{{$errors->first('half_earned_leave')}}</strong>
							</span>
							@endif
						</div>
						<div class="form-group col-sm-3">
							<label class="control-label">LPC Number <span class="text-red">*</span></label>
							<input type="text" name="lpc_number" id="lpc_number" class="form-control form-control-sm" value="" placeholder="Enter LPC Number" autocomplete="off">
						</div>
						<div class="form-group col-sm-3">
							<label class="control-label">Lpc Attachment <span class="text-red">*</span></label>
							<input type="file" name="lpc_attachment" id="lpc_attachment" value="" class="form-control form-control-sm">
						</div>
					</div>
					<button type="submit" class="btn btn-success btn-sm">{{@$editData ? 'Update' :'Save'}}</button>
					<a href="{{url()->previous()}}" type="reset" class="btn btn-instagram btn-sm">Back</a>
				</div>
			</form>
		</div>
	</div>
@endsection
@section('page_script')
<script type="text/javascript">
	$(function(){
		$('#department_id').on('change',function(){
			var department_id = $(this).val();
			getEmployeeByDept(department_id);
		})
		function getEmployeeByDept(department_id){
			$.ajax({
				url:"{{route('employee.get.byDept')}}",
				type:"GET",
				data:{department_id:department_id},
				success:function(data){
					$('#employee_id').html(data);
				}
			});
		}

		$('#payscale_id').on('change',function(){
			var payscale_id=$(this).val();
			getPaygradeByPayscale(payscale_id);
		});
		function getPaygradeByPayscale(payscale_id){
			$.ajax({
				url:"{{route('paygrade.get')}}",
				type:"GET",
				data:{payscale_id:payscale_id},
				success:function(data){
					// console.log(data);
					$('#paygrade_id').html(data);
				}
			});
		}
		$('#paygrade_id').on('change',function(){
			var paygrade_id=$(this).val();
			if(paygrade_id){
				$('#salary_step').attr('readonly',false);
			}else{
				$('#salary_step').attr('readonly',true).val('');
			}
			getSalaryByPaygrade(paygrade_id);
		});
		function getSalaryByPaygrade(paygrade_id){
			$.ajax({
				url:"{{route('accounts.salary.get.byPaygrade')}}",
				type:"GET",
				data:{paygrade_id:paygrade_id},
				success:function(data){
					$('#basic_salary').val(data.basic_salary);
					$('#salary_step').val('1').attr('max',data.step_max);
				}
			});
		}//end getSalaryByPaygrade function

		$('#salary_step').on('change',function(){
			var salary_step=$(this).val();
			var paygrade_id=$('#paygrade_id').val();
			getSalaryByStep(salary_step,paygrade_id);
		});
		function getSalaryByStep(salary_step,paygrade_id){
			$.ajax({
				url:"{{route('accounts.salary.get.byStep')}}",
				type:"GET",
				data:{salary_step:salary_step,paygrade_id:paygrade_id},
				success:function(data){
					$('#basic_salary').val(data);
				}
			});
		}//end getSalaryByStep function


	});
</script>

{{-- Form Validation	 --}}
<script>
	$(function(){
		$('#myForm').validate({
			// errorPlacement: function(error, element){
			// 	if (element.closest('.select2')){ error.insertAfter(element.next());}
			// 	else{error.insertAfter(element);}
			// },
			errorPlacement: function(error, element){
				if (element.attr("name") == "department_id" ){ error.insertAfter(element.next()); }
				else if (element.attr("name") == "employee_id" ){ error.insertAfter(element.next()); }
				else if (element.attr("name") == "paygrade_id" ){ error.insertAfter(element.next()); }
				else{error.insertAfter(element);}
			},
			rules:{
				department_id:{
					required: true
				},
				employee_id:{
					required: true
				},
				effective_from:{
					required: true
				},
				paygrade_id:{
					required: true
				},
				full_earned_leave:{
					required: true
				},
				half_earned_leave:{
					required: true
				},
				lpc_number:{
					required: true
				},
				lpc_attachment:{
					required: true
				}
			},
			messages:{
				department_id:{
					required: "Please select department."
				},
				employee_id:{
					required: "Please select employee"
				},
				effective_from:{
					required: "Please select a date"
				},
				paygrade_id:{
					required: "Please select paygrade"
				},
				full_earned_leave:{
					required: "Please enter full earned days"
				},
				half_earned_leave:{
					required: "Please enter half earned days"
				},
				lpc_number:{
					required: "Please enter lpc number"
				},
				lpc_attachment:{
					required: "Please attach lpc as image or pdf"
				}
			}
		});
	});
</script>
@endsection
