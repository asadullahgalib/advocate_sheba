@extends('backend.layouts.master')

@section('title','Employee Registration')

@push('css')

@endpush

@section('content')

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Manage Employee Details</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Employee Details</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <form method="GET" action="" id="selectForm">
              <input type="hidden" name="employee_user_id" id="employee_user_id" value="{{request()->employee_id}}">
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label class="control-label">Department</label>
                  <select class="form-control form-control-sm" name="department" id="department">
                    <option value="">Select Department</option>
                    @foreach($departments as $department)
                    <option {{request()->department==$department->id?'selected':''}} value="{{$department->id}}">{{$department->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Designation</label>
                  <select class="form-control form-control-sm" name="designation_id" id="designation_id">
                    <option value="">Select Designation</option>
                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Employee</label>
                  <select class="form-control form-control-sm" name="employee_id" id="employee_id">
                    <option value="">Select Employee</option>
                  </select>
                </div>
                <script type="text/javascript">
                  $(function(){
                    var department_id="{{request()->department}}";
                    var designation_id="{{request()->designation_id}}";
                    var employee_id="{{request()->employee_id}}";
                    $('#department').on('change',function(){
                      var department_id=$(this).val();
                      getDesignation(department_id);
                    });
                    if(department_id){            
                      getDesignation(department_id);          
                    }
                    $('#designation_id').on('change',function(){
                      var department_id=$('#department').val();
                      getEmployeeByDesignation(department_id);
                      var designation_id=$(this).val();
                      getEmployeeByDesignation(department_id,designation_id);
                    });
                    function getDesignation(department_id){
                      $.ajax({
                        url:"{{route('designation.get')}}",
                        type:"GET",
                        data:{department_id:department_id},
                        success:function(data){
                          $('#designation_id').html(data);
                          if(designation_id){                 
                            $('#designation_id').val(designation_id).trigger('change');
                          }
                        }
                      });
                    }
                    function getEmployeeByDesignation(department_id,designation_id){
                      $.ajax({
                        url:"{{route('employee.get')}}",
                        type:"GET",
                        data:{department_id:department_id,designation_id:designation_id},
                        success:function(data){
                          $('#employee_id').html(data);
                          if(employee_id){                 
                            $('#employee_id').val(employee_id).trigger('change');
                          }
                        }
                      });
                    }
                    //Select Form Validation
                    $('#selectForm').validate({
                      rules:{
                        department:{
                          required: true
                        },
                        designation_id:{
                          required: true
                        },
                        employee_id:{
                          required: true
                        }
                      },
                      messages:{
                        department:{
                          required: "Please select department."
                        },
                        designation_id:{
                          required: "Please seelct designation."
                        },
                        employee_id:{
                          required: "Please seelct employee."
                        }
                      }
                    });
                  });
                </script>
                <div class="form-group col-md-3">
                  <button type="submit" class="btn btn-sm btn-info" style="margin-top: 28px">Select</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <hr style="border: none;">
        @if(isset($employee))
          <div class="card">
            <div>
              <ul class="nav nav-tabs" role="tablist" id="tabMenu">
                <li class="nav-item">
                  <a class="nav-link active" href="#official" role="tab" data-toggle="tab"><strong>Official</strong></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#personal" role="tab" data-toggle="tab"><strong>Personal</strong></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#education" role="tab" data-toggle="tab"><strong>Education</strong></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact" role="tab" data-toggle="tab"><strong>Contact Details</strong></a>
                </li>
              </ul>
            </div>

            <div class="card-body">
              <div class="tab-content">
                <!--Offical Nav Start-->
                <div role="tabpanel" class="tab-pane fade-in active" id="official">
                  <form method="post" action="{{route('employee.details.official')}}">
                    @csrf
                    <input type="hidden" name="employee_id" id="employee_id" value="{{@$employee->id}}">
                    <div class="form-row">                   
                      <div class="form-group col-md-4">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Full Name" value="{{ @$employee->name }}"> 
                        <font style="color: red"> 
                          {{($errors->has('name'))?($errors->first('name')):''}} 
                        </font>                 
                      </div>
                      <div class="form-group col-md-4">
                        <label for="mobile">Mobile Number</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter Mobile Number" value="{{ @$employee->username }}"> 
                        <font style="color: red"> 
                          {{($errors->has('username'))?($errors->first('username')):''}} 
                        </font>                 
                      </div>
                      <div class="form-group col-md-4">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email Address" value="{{ @$employee->email }}"> 
                        <font style="color: red"> 
                          {{($errors->has('email'))?($errors->first('email')):''}} 
                        </font>                 
                      </div>
                      <div class="form-group col-md-4">
                        <label>Department</label>
                        <select name="department_id" class="form-control select2bs4">
                          <option value="">Select Department</option>
                          @foreach($departments as $department)
                            <option value="{{ $department->id }}" {{(@$employee->department_id == $department->id)?"selected":""}}>{{ $department->name }}</option>
                          @endforeach
                        </select> 
                        <font style="color: red"> 
                          {{($errors->has('department_id'))?($errors->first('department_id')):''}} 
                        </font>                 
                      </div>
                      <div class="form-group col-md-4">
                        <label for="designation_id">Designation</label>
                        <select name="designation_id" class="form-control select2bs4">
                          <option value="">Select Designation</option>
                          @foreach($designations as $designation)
                            <option value="{{ $designation->id }}" {{(@$employee->designation_id == $designation->id)?"selected":""}}>{{ $designation->name }}</option>
                          @endforeach
                        </select> 
                        <font style="color: red"> 
                          {{($errors->has('designation_id'))?($errors->first('designation_id')):''}} 
                        </font>                 
                      </div>
                      <div class="form-group col-md-4">
                        <label>User Role</label>
                        <select name="role_id" class="form-control select2bs4">
                          <option value="">Select Role</option>
                          @foreach($roles as $role)
                            <option value="{{ $role->id }}" {{(@$employee->role_id == $role->id)?"selected":""}}>{{ $role->role_name }}</option>
                          @endforeach
                        </select> 
                        <font style="color: red"> 
                          {{($errors->has('role_id'))?($errors->first('role_id')):''}} 
                        </font>                 
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-sm" id="storeButton">Update Information</button>
                  </form>
                </div>

                <!-- Personal Tab -->
                <div role="tabpanel" class="tab-pane fade-in" id="personal">
                  <form method="post" action="{{route('employee.details.personal')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="employee_id" id="employee_id" value="{{@$employee->id}}">
                    <div class="form-row">
                      <div class="form-group col-sm-4">
                        <label class="control-label"><strong>Father's Name</strong></label>
                        <input type="text" name="fname" id="fname" class="form-control form-control-sm" value="{{@$employee->fname}}" placeholder="Father Name" autocomplete="off">
                      </div>
                      <div class="form-group col-sm-4">
                        <label class="control-label"><strong>Mother's Name</strong></label>
                        <input type="text" name="mname" id="mname" class="form-control form-control-sm" value="{{@$employee->mname}}" placeholder="Mother Name" autocomplete="off">
                      </div>
                      <div class="form-group col-sm-4 text-center" style="z-index: 10000;margin: -70px 0 -6px 0; padding-left: 10%;">
                        <img id="showImage" src="{{(!empty($employee->image))?url('public/upload/employee_images/'.$employee->image):url('public/upload/no_image.png')}}" style="width: 150px; height: 150px" class="form-control">
                      </div>
                      <div class="form-group col-sm-4">
                        <label>Image</label>
                        <input type="file" name="image" id="image" class="form-control form-control-sm">
                      </div>
                      <div class="form-group col-sm-4">
                        <label for="dob">Date of Birth</label>
                        <input type="text" name="dob" class="form-control singledatepicker form-control-sm" placeholder="Enter Date of Birth" value="{{ @$employee->dob }}" autocomplete="off">
                      </div>
                      <div class="form-group col-sm-4">
                        <label class="control-label"><strong>Place of Birth</strong></label>
                        <input type="text" name="birth_place" id="birth_place" class="form-control form-control-sm" value="{{@$employee->birth_place}}" placeholder="Place of Birth" autocomplete="off">
                      </div>
                      <div class="form-group col-sm-3">
                        <label for="gender">Gender</label>
                        <select name="gender" class="form-control form-control-sm">
                          <option value="">Select Gender</option>
                          <option value="Male" @if(@$employee->gender=="Male") selected @endif>Male</option>
                          <option value="Female" @if(@$employee->gender=="Female") selected @endif>Female</option>
                        </select>            
                      </div>
                      <div class="form-group col-sm-3">
                        <label for="religion_id">Religion</label>
                        <select name="religion_id" class="form-control form-control-sm">
                          <option value="">Select Religion</option>
                         @foreach($religions as $religion)
                          <option value="{{$religion->id}}" {{(@$employee->religion_id == $religion->id)?('selected'):''}}>{{$religion->name}}</option>
                         @endforeach
                        </select>          
                      </div>
                      <div class="form-group col-sm-3">
                        <label class="control-label"><strong>Nationality</strong></label>
                        <input type="text" name="nationality" id="nationality" class="form-control form-control-sm" value="{{@$employee->nationality}}" placeholder="Nationality" autocomplete="off">
                      </div>
                      <div class="form-group col-sm-3">
                        <label class="control-label"><strong>NID No.</strong></label>
                        <input type="text" name="nid_no" id="nid_no" class="form-control form-control-sm" value="{{@$employee->nid_no}}" placeholder="NID No." autocomplete="off">
                      </div>
                      <div class="form-group col-sm-3">
                        <label class="control-label"><strong>Blood Group</strong></label>
                        <select class="form-control form-control-sm" name="blood_group" id="blood_group">
                          <option  value="">Select Blood Group</option>
                          <option {{@$employee->blood_group=="A+" ? 'selected':''}} value="A+">A+</option>
                          <option {{@$employee->blood_group=="O+" ? 'selected':''}} value="O+">O+</option>
                          <option {{@$employee->blood_group=="B+" ? 'selected':''}} value="B+">B+</option>
                          <option {{@$employee->blood_group=="AB+" ? 'selected':''}} value="AB+">AB+</option>
                          <option {{@$employee->blood_group=="A-" ? 'selected':''}} value="A-">A-</option>
                          <option {{@$employee->blood_group=="O-" ? 'selected':''}} value="O-">O-</option>
                          <option {{@$employee->blood_group=="B-" ? 'selected':''}} value="B-">B-</option>
                          <option {{@$employee->blood_group=="AB-" ? 'selected':''}} value="AB-">AB-</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-3">
                        <label class="control-label"><strong>Marital Status</strong></label>
                        <select class="form-control form-control-sm" name="marital_status" id="marital_status">
                          <option value="">Select Marital Status</option>
                          <option {{@$employee->marital_status=="single" ? 'selected':''}} value="single">Single</option>
                          <option {{@$employee->marital_status=="married" ? 'selected':''}} value="married">Married</option>
                          <option {{@$employee->marital_status=="widowed" ? 'selected':''}} value="widowed">Widowed</option>
                          <option {{@$employee->marital_status=="divorced" ? 'selected':''}} value="divorced">Divorced</option>
                        </select>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-sm" id="storeButton">Update Information</button>
                  </form>
                </div>

                <!-- Educational Tab -->
                <div role="tabpanel" class="tab-pane fade-in" id="education">
                  <form method="post" action="{{route('employee.details.educational')}}">
                    @csrf
                    <input type="hidden" name="employee_id" id="employee_id" value="{{@$employee->id}}">
                    <div class="form-group">
                      <table class="table-bordered text-center" width="100%">
                        <thead>
                          <tr>
                            <th>Exam Name</th>
                            <th>Subject</th>
                            <th>Institute Name</th>
                            <th width="10%">Passing Year</th>
                            <th width="10%">Result</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="addRow">
                          @if(count($educations)>0)
                          @foreach(@$educations as $education)
                          <tr>
                            <td>
                              <input type="text" name="exam_name[]" class="form-control form-control-sm" value="{{$education->exam_name}}" placeholder="Exam Name">
                            </td>
                            <td>
                              <input type="text" name="subject[]" class="form-control form-control-sm" value="{{$education->subject}}" placeholder="Subject">
                            </td>
                            <td>
                              <input type="text" name="institute_name[]" class="form-control form-control-sm" value="{{$education->institute_name}}" placeholder="Institute Name">
                            </td>
                            <td>
                              <input type="text" name="passing_year[]" class="form-control form-control-sm" value="{{$education->passing_year}}" placeholder="Passing Year">
                            </td>
                            <td>
                              <input type="text" name="result[]" class="form-control form-control-sm" value="{{$education->result}}" placeholder="Result">
                            </td>
                            <td>
                              <a class="btn btn-sm btn-facebook add_more" id="add_more" title="Add More Field"><i class="fa fa-plus"></i></a>
                              <a class="btn btn-sm btn-danger delete_row" title="Delete Row"><i class="fa fa-minus"></i></a>
                            </td>
                          </tr>
                          @endforeach
                          @else
                          <tr>
                            <td>
                              <input type="text" name="exam_name[]" class="form-control form-control-sm" placeholder="Exam Name">
                            </td>
                            <td>
                              <input type="text" name="subject[]" class="form-control form-control-sm" placeholder="Subject">
                            </td>
                            <td>
                              <input type="text" name="institute_name[]" class="form-control form-control-sm" placeholder="Institute Name">
                            </td>
                            <td>
                              <input type="text" name="passing_year[]" class="form-control form-control-sm" placeholder="Passing Year">
                            </td>
                            <td>
                              <input type="text" name="result[]" class="form-control form-control-sm" placeholder="Result">
                            </td>
                            <td><a class="btn btn-sm btn-facebook add_more" id="add_more" title="Add More Field"><i class="fa fa-plus"></i></a></td>
                          </tr>
                          @endif
                        </tbody>
                      </table>
                    </div>
                    <button type="submit" class="btn btn-success btn-sm" id="storeButton">Update Information</button>
                  </form>
                </div>

                <!-- contact Tab -->
                <div role="tabpanel" class="tab-pane fade-in" id="contact">
                  <form method="post" action="{{route('employee.details.contact')}}">
                    @csrf
                    <input type="hidden" name="employee_id" id="employee_id" value="{{@$employee->id}}">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="card">
                          <div class="card-body form-row">
                            <div class="form-group col-sm-12">
                              <label class="control-label"><strong>Present Address</strong></label>
                              <textarea name="present_address" id="present_address" class="form-control form-control-sm" placeholder="Present Address" autocomplete="off">{{@$employee->present_address}}</textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--Permanent Address-->
                      <div class="col-md-6">
                        <div class="card">
                          <div class="card-body">
                            <div class="form-check" style="margin-top: -20px">
                              <label class="form-check-label">
                                <input class="form-check-input" id="checkbox" type="checkbox"> Same as Present Address
                              </label>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-sm-12">
                                <label class="control-label"><strong>Parmanent Address</strong></label>
                                <textarea name="permanent_address" id="permanent_address" class="form-control form-control-sm" placeholder="Parmanent Address" autocomplete="off">{{@$employee->permanent_address}}</textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--Same as present address-->
                        <script type="text/javascript">
                          $(function(){     
                            $('#checkbox').on('change',function(){
                              var present_address=$('#present_address').val();
                              if(this.checked){ 
                                $('#permanent_address').val(present_address);
                              }else{
                                $('#permanent_address').val('');
                              }
                            });
                          });
                        </script>
                      </div>
                    </div>
                    <!--Emergency Contact info-->
                    <div class="card" style="margin-top: 5px">
                      <p class="badge"  style="padding: 5px 10px;border-radius: 0;font-size:14px">Emergency Contact Information</p>
                      <div class="card-body">
                        <div class="form-row">
                          <div class="form-group col-sm-4">
                            <label class="control-label"><strong>Emergency Contact Person</strong></label>
                            <input type="text" name="emergency_contact_name" id="emergency_contact_name" class="form-control form-control-sm" value="{{@$employee->emergency_contact_name}}" placeholder="Emergency Contact Person" autocomplete="off">
                          </div>
                          <div class="form-group col-sm-4">
                            <label class="control-label"><strong>Reletaion With</strong></label>
                            <input type="text" name="relation_with" id="relation_with" class="form-control form-control-sm" value="{{@$employee->relation_with}}" placeholder="Reletaion With" autocomplete="off">
                          </div>
                          <div class="form-group col-sm-4">
                            <label class="control-label"><strong>Emergency Contact No.</strong></label>
                            <input type="text" name="emergency_contact_no" id="emergency_contact_no" class="form-control form-control-sm" value="{{@$employee->emergency_contact_no}}" placeholder="emergency Contact No." autocomplete="off">
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-sm" id="storeButton">Update Information</button>
                  </form>
                </div>
              </div> <!--End Tab Content-->
            </div>
          </div>
        @endif
      </div>
    </div>
  </section>
</div>  

{{-- Handlebar template for Education row add --}}
<script id="education-template" type="text/x-handlebars-template">
  <tr>
    <td>
      <input type="text" name="exam_name[]" class="form-control form-control-sm" placeholder="Exam Name">
    </td>
    <td>
      <input type="text" name="subject[]" class="form-control form-control-sm" placeholder="Subject">
    </td>
    <td>
      <input type="text" name="institute_name[]" class="form-control form-control-sm" placeholder="Institute Name">
    </td>
    <td>
      <input type="text" name="passing_year[]" class="form-control form-control-sm" placeholder="Passing Year">
    </td>
    <td>
      <input type="text" name="result[]" class="form-control form-control-sm" placeholder="Result">
    </td>
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
<script>
 //redirect to specific tab
 $(document).ready(function () {
  $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
 });
</script>

@endsection