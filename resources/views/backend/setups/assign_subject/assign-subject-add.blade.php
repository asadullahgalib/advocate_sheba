@extends('backend.layouts.master')

@section('title','Assign Subject')

@push('css')

@endpush

@section('content')

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>ম্যানেজ বিষয় বরাদ্দ</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">হোম</a></li>
            <li class="breadcrumb-item active">
              বিষয় বরাদ্দ
            </li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                বিষয় বরাদ্দ যোগ
              </h3>
              <a href="{{ route('setups.assign.subject.view') }}" class="btn btn-success float-right btn-sm"><i class="fa fa-list"> বিষয় বরাদ্দ তালিকা</i></a>
            </div>            
            <div class="card-body">
              <form role="form" action="{{ route('setups.assign.subject.store') }}" method="POST" id="MyForm">
              @csrf
                <div class="add_item"> 
                  <div class="form-row"> 
                    <div class="form-group col-md-3">
                      <label for="class_id">ক্লাসের নাম</label>
                      <select name="class_id" class="form-control select2bs4">
                        <option value="">Select Class</option>
                          @foreach($classes as $class)
                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                          @endforeach
                      </select>                 
                    </div>                  
                  </div>
                  <div class="form-row"> 
                    <div class="form-group col-md-2">
                      <label for="subject_id">বিষয়ের নাম</label>
                      <select name="subject_id[]" class="form-control">
                        <option value="">Select Subject</option>
                          @foreach($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                          @endforeach
                      </select>                 
                    </div>
                    <div class="form-group col-md-2">
                      <label for="group_id">গ্রুপ</label>
                      <select name="group_id[]" class="form-control">
                        <option value="">Select Group</option>
                          @foreach($groups as $group)
                            <option value="{{ $group->id }}">{{ $group->name }}</option>
                          @endforeach
                      </select>                 
                    </div>
                    <div class="form-group col-md-2">
                      <label for="subject_status">বিষয়ের ধরণ</label>
                      <select name="subject_status[]" class="form-control">
                        <option value="">Select Status</option>
                            <option value="1">Main</option>
                            <option value="2">Optional</option>
                            <option value="3">Extra</option>
                      </select>                 
                    </div>
                    <div class="form-group col-md-1" style="padding-top: 35px;">
                      <span class="btn btn-success btn-sm addeventmore" style="margin-right: 5px;"><i class="fa fa-plus-circle"></i></span>
                    </div>
                  </div>                                  
                </div>
                <button type="submit" class="btn btn-primary">সাবমিট</button>  
              </form> 
            </div>                     
          </div> 
        </div>        
      </div>
    </div>
  </section>
</div>

<div style="visibility: hidden;">                     
  <div class="whole_extra_item_add" id="whole_extra_item_add">
    <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
      <div class="form-row">
        <div class="form-group col-md-2">
          <label for="subject_id">বিষয়ের নাম</label>
          <select name="subject_id[]" class="form-control">
            <option value="">Select Subject</option>
              @foreach($subjects as $subject)
                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
              @endforeach
          </select>                 
        </div>
        <div class="form-group col-md-2">
          <label for="group_id">গ্রুপ</label>
          <select name="group_id[]" class="form-control">
            <option value="">Select Group</option>
              @foreach($groups as $group)
                <option value="{{ $group->id }}">{{ $group->name }}</option>
              @endforeach
          </select>                 
        </div>
        <div class="form-group col-md-2">
          <label for="subject_status">বিষয়ের ধরণ</label>
          <select name="subject_status[]" class="form-control">
            <option value="">Status</option>
            <option value="1">Main</option>
            <option value="2">Optional</option>
            <option value="3">Extra</option>
          </select>                 
        </div>
        <div class="form-group col-md-1" style="padding-top: 35px;">
          <div class="form-row">
            <span class="btn btn-success btn-sm addeventmore" style="margin-right: 5px;"><i class="fa fa-plus-circle"></i></span>
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
        "class_id": {
          required: true,
        },
        "subject_id[]": {
          required: true,
        },
        "full_mark[]": {
          required: true,
        },  
        "pass_mark[]": {
          required: true,
        },
        "written_mark[]": {
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

@push('js')

@endpush