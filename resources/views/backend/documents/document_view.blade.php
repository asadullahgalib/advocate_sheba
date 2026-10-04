@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>Document List
            <a class="btn btn-sm btn-success float-right" href="{{route('documents.add')}}"><i class="fa fa-plus-circle"></i> Add Document</a>
          </h5>
      </div>

      <div class="card-body">
          <table class="table-sm table-bordered table-striped dt-responsive nowrap" style="width: 100%" id="example1">
            <thead>
              <tr class="text-center">
                <th>Sl.</th>
                <th>Title</th>
                <th>Sub Title</th>
                <th>PDF File</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($allData as $key => $value)
              <tr class="text-center">
                <td>{{$key+1}}</td>
                <td>{{$value->title}}</td>
                <td>{{$value->sub_title ?? 'N/A'}}</td>
                <td>
                  @if($value->pdf_file)
                    <a href="{{ asset('uploads/document_files/'.$value->pdf_file) }}" target="_blank" class="btn btn-xs btn-info">
                      <i class="fa fa-file-pdf-o"></i> View PDF
                    </a>
                  @else
                    <span class="badge badge-warning">No File</span>
                  @endif
                </td>
                <td>
                  <!-- Edit Button -->
                  <a class="btn btn-sm btn-success" title="Edit" href="{{route('documents.edit',$value->id)}}">
                    <i class="fa fa-edit"></i>
                  </a>  
                  <a id="delete" href="{{ route('documents.delete') }}" data-token="{{csrf_token()}}" data-id="{{$value->id}}" class="btn btn-danger btn-sm" title="Delete">
                    <i class="fa fa-trash"></i>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

    </div>
  </div>
@endsection
