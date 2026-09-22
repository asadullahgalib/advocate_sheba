@extends('backend.layouts.master')
@section('content')
<style type="text/css">
  .btn_active{
    background: #F70F9E;
    color: #fff;
    text-decoration: underline !important;
  }
</style>
<style type="text/css">
  .profile-userpic img {
    float: none;
    margin: 0 auto;
    width: 120px;
    height: 130px;
    background-color: #ddd;
    padding: 3px;
  }
</style>

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
            Doctor Details Information
            <a href="{{ route('payroll.employee.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Doctor List</i></a>
        </h3>
      </div>

      <div class="card-body">
        <div class="row">
          <div class="col-md-8 col-xs-6">
            <table>
              <tr>
                <td><strong style="font-size:25px">{{@$details->name}} - {{@$details->name_bn}}</strong> </td>
              </tr>
              <tr>
                <td>{{@$details->present_address}}</td>
              </tr>
              <tr>
                <td><strong>Mobile No :</strong> {{@$details->username}}</td>
              </tr>
              <tr>
                <td><strong>Email :</strong> {{@$details->email}}</td>
              </tr>
            </table>
          </div>
          <div class="col-md-4 col-xs-6">
            <div class="profile-sidebar">
            <div class="profile-userpic text-center">
              <img src="{{(!empty(@$details->image))?url('public/upload/employee_images/'.@$details->image):url('public/upload/no_image.png')}}" class="img-responsive" alt="" >
            </div>
          </div>
          </div>
          <div class="col-md-12">
            <a href="{{route('payroll.employee.view.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='statement')?'btn_active':''}}" title="Statement"> Details</a>
            <a href="{{route('payroll.employee.official.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='official')?'btn_active':''}}" title="Official">Official</a>
            <a href="{{route('payroll.employee.personal.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='personal')?'btn_active':''}}" title="Personal"> Personal </a>
            <a href="{{route('payroll.employee.contact.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='contact')?'btn_active':''}}" title="Contact"> Mailing</a>
            <a href="{{route('payroll.employee.education.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='education')?'btn_active':''}}" title="Qualification"> Qualification</a>
            <a href="{{route('payroll.employee.experience.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='experience')?'btn_active':''}}" title="Experience"> Experience</a>
            <a href="{{route('payroll.employee.achievement.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='training')?'btn_active':''}}" title="Training/Achievement"> Training</a>
            <a href="{{route('payroll.employee.daytime.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='daytime')?'btn_active':''}}" title="DayTime"> DayTime</a>
            <a href="{{route('payroll.employee.speciality.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='speciality')?'btn_active':''}}" title="Speciality"> Speciality</a>
            <a href="{{route('payroll.employee.workplace.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='workplace')?'btn_active':''}}" title="Speciality"> WorkPlace</a>
            <a href="{{route('payroll.employee.chamber.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='chamber')?'btn_active':''}}" title="Speciality"> Chamber</a>
            <a href="{{route('payroll.employee.time.assign.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='time_assign')?'btn_active':''}}" title="Contact"> Time Assign</a>
          </div>
        </div>
    </div>
    <div class="card-body">
        <form method="post" action="{{route('payroll.employee.details.chamber')}}">
            @csrf
            <input type="hidden" name="employee_id" id="employee_id" value="{{@$details->id}}">
            <div class="form-group">
              <table class="table-bordered text-center" width="100%">
                <thead>
                  <tr>
                    <th>Chamber Name</th>
                    <!-- <th>Details</th> -->
                    <th width="10%">Action</th>
                  </tr>
                </thead>
                <tbody id="addRow">
                  @if(count($chambers)>0)
                  @foreach(@$chambers as $education)
                  <tr>
                    <td>
                      <input type="text" name="chamber_name[]" class="form-control form-control-sm" value="{{$education->chamber_name}}" placeholder="Chamber Name">
                    </td>
                    <!-- <td>
                      <input type="text" name="chamber_details[]" class="form-control form-control-sm" value="{{$education->chamber_details}}" placeholder="Chamber Details">
                    </td> -->
                    <td>
                      <a class="btn btn-sm btn-facebook add_more" id="add_more" title="Add More Field"><i class="fa fa-plus"></i></a>
                      <a class="btn btn-sm btn-danger delete_row" title="Delete Row"><i class="fa fa-minus"></i></a>
                    </td>
                  </tr>
                  @endforeach
                  @else
                  <tr>
                    <td>
                      <input type="text" name="chamber_name[]" class="form-control form-control-sm" placeholder="Chamber Name">
                    </td>
                    <!-- <td>
                      <input type="text" name="chamber_details[]" class="form-control form-control-sm" placeholder="Chamber Details">
                    </td> -->
                    <td><a class="btn btn-sm btn-facebook add_more" id="add_more" title="Add More Field"><i class="fa fa-plus"></i></a></td>
                  </tr>
                  @endif
                </tbody>
              </table>
            </div>
            <button type="submit" class="btn btn-success btn-sm" id="storeButton">Update Information</button>
          </form>
    </div>   

    </div>
  </div>

<script id="education-template" type="text/x-handlebars-template">
  <tr>
    <td>
      <input type="text" name="chamber_name[]" class="form-control form-control-sm" placeholder="Chamber Name">
    </td>
    <!-- <td>
      <input type="text" name="chamber_details[]" class="form-control form-control-sm" placeholder="Chamber Details">
    </td> -->
    <td><a class="btn btn-sm btn-danger delete_row" title="Delete Row"><i class="fa fa-minus"></i></a></td>
  </tr>
</script>

<script type="text/javascript">
  $(function(){ 
    $('.add_more').on('click',function(){
      var source   = $("#education-template").html();
      var template = Handlebars.compile(source);            
      $("#addRow").append(template());
    });

    //Delete Row in Education
    $(document).on('click','.delete_row',function(){      
      var row=$(this).closest("tr");      
      row.remove();       
    }); 
  });
</script>
@endsection