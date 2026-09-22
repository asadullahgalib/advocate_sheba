@extends('backend.layouts.master')

@section('title','Manage Year')

@push('css')

@endpush

@section('content')

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>ম্যানেজ বছর/সেশন</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">হোম</a></li>
            <li class="breadcrumb-item active">বছর/সেশন</li>
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
                @if(isset($years))
                  বছর/সেশন আপডেট
                @else
                  বছর/সেশন যোগ
                @endif
              </h3>
              <a href="{{ route('setups.student.year.view') }}" class="btn btn-success float-right btn-sm"><i class="fa fa-list"> বছর/সেশন তালিকা</i></a>
            </div>
            <form role="form" action="{{(@$years)?route('setups.student.year.update',$years->id):route('setups.student.year.store')}}" method="POST" id="MyForm">
            @csrf
              <div class="card-body">
                <div class="form-row">                   
                  <div class="form-group col-md-6">
                    <label for="name">বছর/সেশন</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Year/Session" value="{{ @$years->name }}"> 
                    <font style="color: red"> 
                      {{($errors->has('name'))?($errors->first('name')):''}} 
                    </font>                 
                  </div>
                  <div class="form-group col-md-6" style="padding-top: 31px;">
                    <button type="submit" class="btn btn-primary">@if(isset($years)) আপডেট @else সাবমিট @endif</button>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                
              </div>
            </form>            
          </div> 
        </div>        
      </div>
    </div>
  </section>
</div>

<script type="text/javascript">
  $(document).ready(function () {  
    $('#MyForm').validate({
      rules: {           
        name: {
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