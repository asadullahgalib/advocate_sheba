@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          Select Criteria
          <a href="{{ route('payroll.employee.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Doctor List</i></a>
        </h3>
      </div>

          <div class="card-body">
            <form method="POST" action="{{route('payroll.employee.report.pdf')}}" id="myForm" target="_blank">
              @csrf
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label>Department <span style="color:red">*</span></label>
                    <select name="department_id" id="department_id" class="form-control select2">
                      <option value="">Select Department</option>
                      @foreach($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                      @endforeach
                    </select>             
                  </div>
                  <div class="form-group col-md-4">
                    <label for="designation_id">Designation <span style="color:red">*</span></label>
                    <select name="designation_id" id="designation_id" class="form-control select2">
                      <option value="">Select Designation</option>
                      @foreach($designations as $designation)
                        <option value="{{ $designation->id }}">{{ $designation->name }}</option>
                      @endforeach
                    </select>            
                  </div>
                  <div class="col-md-4" style="padding-top:30px">
                      <a class="btn btn-primary btn-sm" id="search"><i class="fa fa-search"></i> Search</a>
                      <button type="submit" name="button" value="pdf" class="btn btn-sm btn-success"><i class="fa fa-file-pdf-o"></i> PDF</button>
                      <button type="submit" name="button" value="excel" class="btn btn-sm btn-warning"><i class="fa fa-file-excel-o"></i> Excel</button>
                   </div>
                </div>
            </form>
          </div>

          <div class="card-body">
             <div id="DocumentResults"></div>
             <script id="document-template" type="text/x-handlebars-template">
                <table class="table-sm table-bordered table-striped dt-responsive" style="width: 100%">
                    <thead>
                        <tr>
                @{{{thsource}}}
                        </tr>
                    </thead>
                    <tbody>
                      @{{{tdsource}}}
                    </tbody>
                </table>
             </script>
          </div>

    </div>
  </div>

<script type="text/javascript">
  $(document).on('click','#search',function(){
    var department_id = $('#department_id').val();
    var designation_id = $('#designation_id').val();
    $.ajax({
      url: "{{route('payroll.employee.report.handlebar')}}",
      type: "get",
      data: {
        'department_id': department_id,
        'designation_id': designation_id,
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