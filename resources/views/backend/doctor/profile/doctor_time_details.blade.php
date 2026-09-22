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
            <a href="{{route('doctor-profile.view.details')}}" class="btn btn-primary btn-sm {{(@$page_title=='statement')?'btn_active':''}}" title="Statement"> Details</a>
            <a href="{{route('doctor-profile.official.details')}}" class="btn btn-primary btn-sm {{(@$page_title=='official')?'btn_active':''}}" title="Official">Official</a>
            <a href="{{route('doctor-profile.personal.details')}}" class="btn btn-primary btn-sm {{(@$page_title=='personal')?'btn_active':''}}" title="Personal"> Personal </a>
            <a href="{{route('doctor-profile.contact.details')}}" class="btn btn-primary btn-sm {{(@$page_title=='contact')?'btn_active':''}}" title="Contact"> Mailing</a>
            <a href="{{route('doctor-profile.education.details')}}" class="btn btn-primary btn-sm {{(@$page_title=='education')?'btn_active':''}}" title="Qualification"> Qualification</a>
            <a href="{{route('doctor-profile.experience.details')}}" class="btn btn-primary btn-sm {{(@$page_title=='experience')?'btn_active':''}}" title="Experience"> Experience</a>
            <a href="{{route('doctor-profile.achievement.details')}}" class="btn btn-primary btn-sm {{(@$page_title=='training')?'btn_active':''}}" title="Training/Achievement"> Training</a>
            @if(Auth::user()->user_categor=='doctor')
            <a href="{{route('doctor-profile.daytime.details')}}" class="btn btn-primary btn-sm {{(@$page_title=='daytime')?'btn_active':''}}" title="DayTime"> DayTime</a>
            @endif
            <a href="{{route('doctor-profile.speciality.details')}}" class="btn btn-primary btn-sm {{(@$page_title=='speciality')?'btn_active':''}}" title="Speciality"> Speciality</a>
            <a href="{{route('doctor-profile.workplace.details')}}" class="btn btn-primary btn-sm {{(@$page_title=='workplace')?'btn_active':''}}" title="Speciality"> WorkPlace</a>
            @if(Auth::user()->user_categor=='doctor')
            <a href="{{route('doctor-profile.chamber.details')}}" class="btn btn-primary btn-sm {{(@$page_title=='chamber')?'btn_active':''}}" title="Speciality"> Chamber</a>
            @endif
          </div>
        </div>
      </div>
      <div class="card-body">

        <form role="form" action="{{route('doctor-profile.details.time.assign')}}" method="POST" id="MyForm">
        @csrf
          <input type="hidden" name="doctor_id" id="doctor_id" value="{{@$details->id}}">
          <div class="add_item"> 
              @if(count($assign_times)>0)
              @foreach(@$assign_times as $assign_time)
              <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                <div class="form-row"> 
                  <div class="form-group col-md-5">
                    <label>Day</label>
                    <select name="day_id[]" class="form-control form-control-sm">
                      @foreach($days as $day)
                      <option value="{{$day->id}}" {{($assign_time->day_id == $day->id)?"selected":""}}>{{$day->name}}</option>
                      @endforeach
                    </select>                 
                  </div>                
                  <div class="form-group col-md-5">
                    <label>Time</label>
                    <select name="time_id[]" class="form-control form-control-sm">
                      @foreach($times as $time)
                      <option value="{{$time->id}}" {{($assign_time->time_id == $time->id)?"selected":""}}>{{$time->name}}</option>
                      @endforeach
                    </select>                 
                  </div>                    
                  <div class="form-group col-md-1" style="padding-top: 28px;">
                    <div class="form-row">
                      <span class="btn btn-success btn-sm addeventmore"><i class="fa fa-plus-circle"></i></span>
                      <span class="btn btn-danger btn-sm removeeventmore"><i class="fa fa-minus-circle"></i></span>
                    </div>
                  </div>
                </div> 
              </div>
              @endforeach
              @else
              <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                <div class="form-row"> 
                  <div class="form-group col-md-5">
                    <label>Day</label>
                    <select name="day_id[]" class="form-control form-control-sm">
                      @foreach($days as $day)
                      <option value="{{$day->id}}">{{$day->name}}</option>
                      @endforeach
                    </select>            
                  </div>                
                  <div class="form-group col-md-5">
                    <label>Time</label>
                    <select name="time_id[]" class="form-control form-control-sm">
                      @foreach($times as $time)
                      <option value="{{$time->id}}">{{$time->name}}</option>
                      @endforeach
                    </select>           
                  </div>                    
                  <div class="form-group col-md-1" style="padding-top: 28px;">
                    <div class="form-row">
                      <span class="btn btn-success btn-sm addeventmore"><i class="fa fa-plus-circle"></i></span>
                      <span class="btn btn-danger btn-sm removeeventmore"><i class="fa fa-minus-circle"></i></span>
                    </div>
                  </div>
                </div> 
              </div>
              @endif                       
          </div>
          <button type="submit" class="btn btn-primary btn-sm">Update Information</button>  
        </form>
        
      </div>   

    </div>
  </div>

<div style="visibility: hidden;">                     
  <div class="whole_extra_item_add" id="whole_extra_item_add">
    <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
      <div class="form-row"> 
        <div class="form-group col-md-5">
          <label>Day</label>
          <select name="day_id[]" class="form-control form-control-sm">
            @foreach($days as $day)
            <option value="{{$day->id}}">{{$day->name}}</option>
            @endforeach
          </select>            
        </div>                
        <div class="form-group col-md-5">
          <label>Time</label>
          <select name="time_id[]" class="form-control form-control-sm">
            @foreach($times as $time)
            <option value="{{$time->id}}">{{$time->name}}</option>
            @endforeach
          </select>           
        </div>                    
        <div class="form-group col-md-1" style="padding-top: 28px;">
          <div class="form-row">
            <span class="btn btn-success btn-sm addeventmore"><i class="fa fa-plus-circle"></i></span>
            <span class="btn btn-danger btn-sm removeeventmore"><i class="fa fa-minus-circle"></i></span>
          </div>
        </div>
      </div> 
    </div>
  </div>                            
</div>

<script type="text/javascript">
  $(document).ready(function(){
    var counter = 0;
    $(document).on("click",".addeventmore",function(){
      var whole_extra_item_add = $("#whole_extra_item_add").html();
      $(this).closest(".add_item").append(whole_extra_item_add);
      counter++;
    });
    $(document).on("click",".removeeventmore",function(event){
      $(this).closest(".delete_whole_extra_item_add").remove();
      counter -= 1
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function () {  
    $('#MyForm').validate({
      rules: {           
        "fee_category_id": {
          required: true,
        },
        "class_id[]": {
          required: true,
        },
        "amount[]": {
          required: true,
        }       
      },
      messages: {     
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
</script>
@endsection