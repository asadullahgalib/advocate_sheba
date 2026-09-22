@extends('backend.layouts.master')

@section('title','Student Year')

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
    <div class="row">
      <div class="col-12">          
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">বছর/সেশন তালিকা</h3>
            <a href="{{ route('setups.student.year.add') }}" class="btn btn-success float-right btn-sm"><i class="fa fa-plus-circle"> বছর/সেশন যোগ</i></a>
          </div>
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th width="15%">সিরিয়াল</th>
                <th>বছর/সেশন</th>
                <th width="15%">একশন</th>
              </tr>
              </thead>
              <tbody>
              @foreach($years as $key=>$year)
                <tr class="{{$year->id}}">
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $year->name }}</td>
                  <td>
                  	<a href="{{ route('setups.student.year.edit',$year->id) }}" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>     
                  	<!-- <a id="delete" href="{{ route('setups.student.year.delete') }}" data-token="{{csrf_token()}}" data-id="{{$year->id}}" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>                       -->
                  </td>
                </tr> 
              @endforeach               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>  

@endsection

@push('js')

@endpush