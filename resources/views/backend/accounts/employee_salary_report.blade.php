@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h5>Salary Report
      </div>

      <div class="card-body">
				<form method="POST" action="{{route('employee.salary.pdf')}}" id="myForm" target="_blank">
					@csrf
					<div class="form-row">
						<div class="col-md-5">
              <label>Salary Status</label>
              <select name="status" id="status" class="form-control form-control-sm select2">
              	<option value="">Select Status</option>
              	<option value="0">Pending</option>
              	<option value="1">Confirmed</option>
              </select>
          	</div>
						<div class="col-md-2">
							<label>Start Date</label>
			        <input type="text" name="start_date" id="start_date" class="form-control form-control-sm singledatepicker" placeholder="YYYY-MM-DD" readonly>
						</div>
						<div class="col-md-2">
							<label>End Date</label>
			        <input type="text" name="end_date" id="end_date" class="form-control form-control-sm singledatepicker" placeholder="YYYY-MM-DD" readonly>
						</div>
						<div class="col-md-3" style="padding-top:30px;">
							<a class="btn btn-primary btn-sm" id="search"><i class="fa fa-search"></i> Search</a>
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-download"></i> Download</button>
						</div>
					</div>
				</form>
			</div>

			<div class="card-body">
          <div id="DocumentResults"></div>
          <script id="document-template" type="text/x-handlebars-template">
          <table class="table-sm table-bordered table-striped dt-responsive" style="width: 100%">
              <tbody>
              	@{{{tdsource}}}
              </tbody>
          </table>
          </script>
			</div>

    </div>
  </div>

<script type="text/javascript">
	$("#myForm").submit(function( event ) {
		var status = $('#status').val();
		var start_date = $('#start_date').val();
		var end_date = $('#end_date').val();
		if (status == ''){
			$('.notifyjs-corner').html('');
			$.notify("Status is required", {globalPosition: 'top right',className: 'error'});
			event.preventDefault();
		}else{
			return true;
		}
		if (start_date == ''){
			$('.notifyjs-corner').html('');
			$.notify("Start Date is required", {globalPosition: 'top right',className: 'error'});
			event.preventDefault();
		}else{
			return true;
		}
		if (end_date == ''){
			$('.notifyjs-corner').html('');
			$.notify("End Date is required", {globalPosition: 'top right',className: 'error'});
			event.preventDefault();
		}else{
			return true;
		}
	});
</script>

<script type="text/javascript">
	$(document).ready(function () {
		$(document).on("click","#search", function () {
			var status = $('#status').val();
			var start_date = $('#start_date').val();
			var end_date = $('#end_date').val();
			if(status==''){
				$.notify("Status is required", {globalPosition: 'top right',className: 'error'});
				return false;
			}
			if(start_date==''){
				$.notify("Start Date is required", {globalPosition: 'top right',className: 'error'});
				return false;
			}
			if(end_date==''){
				$.notify("End Date is required", {globalPosition: 'top right',className: 'error'});
				return false;
			}
		});
	});
</script>

<script type="text/javascript">
	$(document).on('click','#search',function(){
		var status = $('#status').val();
		var start_date = $('#start_date').val();
		var end_date = $('#end_date').val();
		$.ajax({
			url: "{{route('employee.salary.handlebar')}}",
			type: "get",
			data: {
				'status': status,
				'start_date': start_date,
				'end_date': end_date,
			},
			beforeSend: function() {
			},
			success: function (data) {
				var source = $("#document-template").html();
				var template = Handlebars.compile(source);
				var html = template(data);
				$('#DocumentResults').html(html);
				$('[data-toggle="tooltip"]').tooltip();
			}
		});
	});
</script>
@endsection