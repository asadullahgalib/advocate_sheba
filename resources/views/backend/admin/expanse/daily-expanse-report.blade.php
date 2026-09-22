@extends('backend.layouts.master')
@section('content')
<div class="col-xl-12">
  <div class="breadcrumb-holder">
    <h1 class="main-title float-left">Manage Expense Report</h1>
    <ol class="breadcrumb float-right">
      <li class="breadcrumb-item"><a href="{{route('home')}}"><strong>Home</strong></a></li>
      <li class="breadcrumb-item active">Expense Report</li>
    </ol>
    <div class="clearfix"></div>
  </div>
</div>
<div class="container fullbody">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5>Select Criteria</h5>
      </div>

      <div class="card-body">
          <form method="POST" action="{{route('human-resource.expenses.expanse.date.wise.pdf')}}" id="myForm" target="_blank">
            @csrf
            <div class="form-row">
               <div class="form-group col-md-3">
                <label class="control-label">Expense Item <span style="color: red;">*</span></label>
                <select name="expanse_type_id" id="expanse_type_id" class="expanse_type_id form-control form-control-sm select2">
                   <option value="">Select Expense Item</option>
                  @foreach($expanse_types as $etype)
                    <option value="{{$etype->id}}">{{$etype->name}}</option>
                    @endforeach
                  </select>
              </div>
              <div class="col-md-3">
                <label>Start Date</label>
                  <input type="text" name="start_date" id="start_date" class="form-control form-control-sm singledatepicker" placeholder="YYYY-MM-DD" readonly>
              </div>
              <div class="col-md-3">
                <label>End Date</label>
                 <input type="text" name="end_date" id="end_date" class="form-control form-control-sm singledatepicker" placeholder="YYYY-MM-DD" readonly>
              </div>
              <div class="col-md-3" style="padding-top:30px">
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
</div>

<script type="text/javascript">
  $(function(){
    $(document).on('change','#project_id',function(){
      var project_id = $('#project_id').val();
      $.ajax({
        url:"{{route('get-expanse-type')}}",
        type:"GET",
        data:{project_id:project_id},
        success:function(data){
          var html = '<option value="">Select Expanse Type</option>';
          $.each( data, function( key, v ) {
            html +='<option value="'+v.expanse_type_id+'">'+v.expanse_type.name+'</option>';
          });
          $('#expanse_type_id').html(html);
        }
      });
    });
  });
</script>

<script type="text/javascript">
  $("#myForm").submit(function( event ) {
    var expanse_type_id = $('#expanse_type_id').val();
    var start_date = $('#start_date').val();
    var end_date = $('#end_date').val();
    if (start_date==''){
      $('.notifyjs-corner').html('');
      $.notify("Start Date is required", {globalPosition: 'top right',className: 'error'});
      event.preventDefault();
    }else{
      return true;
    }
    if (end_date==''){
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
      var expanse_type_id  = $('#expanse_type_id').val();
      var start_date = $('#start_date').val();
      var end_date = $('#end_date').val();
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
    var expanse_type_id = $('#expanse_type_id').val();
    var start_date = $('#start_date').val();
    var end_date = $('#end_date').val();
    $.ajax({
      url: "{{route('human-resource.expenses.expanse.date.wise.handlebar')}}",
      type: "get",
      data: {
        'expanse_type_id': expanse_type_id,
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