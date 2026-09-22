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
            <h3 class="card-title">বিষয় বরাদ্দের বিস্তারিত তথ্য</h3>
            <a href="{{ route('setups.assign.subject.view') }}" class="btn btn-success float-right btn-sm"><i class="fa fa-list"> বিষয় বরাদ্দ তালিকা</i></a>
          </div>
          <div class="card-body">
            <h4><strong>ক্লাস : </strong>{{ $assignSubjects[0]->student_class->name }}</h4>
            <table class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>সিরিয়াল</th>
                <th>বিষয়ের নাম</th>
                <th>গ্রুপ</th>
                <th>বিষয়ের ধরণ</th>
              </tr>
              </thead>
              <tbody>
              @foreach($assignSubjects as $key=> $assignSubject)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $assignSubject['subject']['name'] }}</td>
                  <td>{{ $assignSubject['group']['name'] }}</td>
                  <td>
                    @if($assignSubject->subject_status=='1')
                    Main Subject
                    @elseif($assignSubject->subject_status=='2')
                    Optional Subject
                    @elseif($assignSubject->subject_status=='3')
                    Extra Subject
                    @endif
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