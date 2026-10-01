@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>FAQ List
            <a class="btn btn-sm btn-success float-right" href="{{route('faqs.add')}}"><i class="fa fa-plus-circle"></i> Add FAQ</a>
          </h5>
      </div>

      <div class="card-body">
          <table class="table-sm table-bordered table-striped dt-responsive nowrap" style="width: 100%" id="example1">
            <thead>
              <tr class="text-center">
                <th>Sl.</th>
                <th>Serial No</th>
                <th>Question</th>
                <th style="width: 40%;">Answer</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($allData as $key => $faq)
              <tr class="text-center">
                <td>{{$key+1}}</td>
                <td>{{$faq->serial}}</td>
                <td class="text-left">{{$faq->question}}</td>
                <td class="text-left">
                  <div style="max-height: 100px; overflow-y: auto; word-break: break-word; white-space: normal; padding: 5px;">
                    {!! $faq->answer !!}
                  </div>
                </td>
                <td>
                  <a class="btn btn-sm btn-success" title="Edit" href="{{route('faqs.edit',$faq->id)}}"><i class="fa fa-edit"></i></a>
                  <a id="delete" href="{{ route('faqs.delete') }}" data-token="{{csrf_token()}}" data-id="{{$faq->id}}" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

    </div>
  </div>

@endsection
