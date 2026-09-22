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
            <li class="breadcrumb-item active">বিষয় বরাদ্দ</li>
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
            <h3 class="card-title">বিষয় বরাদ্দ তালিকা</h3>
            <a href="{{ route('setups.assign.subject.add') }}" class="btn btn-success float-right btn-sm"><i class="fa fa-plus-circle"> বিষয় বরাদ্দ যোগ</i></a>
          </div>
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th width="12%">সিরিয়াল</th>
                <th>ক্লাসের নাম</th>
                <th width="12%">একশন</th>
              </tr>
              </thead>
              <tbody>
              @foreach($assignSubjects as $key=>$assignSubject)
                <tr class="{{$assignSubject->id}}">
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $assignSubject->student_class->name }}</td>
                  <td>
                  	<a href="{{ route('setups.assign.subject.edit',$assignSubject->class_id) }}" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>     
                  	<a href="{{ route('setups.assign.subject.details',$assignSubject->class_id) }}" class="btn btn-primary btn-sm" title="Details"><i class="fa fa-eye"></i></a>
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