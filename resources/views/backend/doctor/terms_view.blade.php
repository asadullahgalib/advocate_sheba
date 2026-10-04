@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>Terms & Conditions List
            <a class="btn btn-sm btn-success float-right" href="{{route('terms.add')}}"><i class="fa fa-plus-circle"></i> Add Terms</a>
          </h5>
      </div>

      <div class="card-body">
          <table class="table-sm table-bordered table-striped dt-responsive nowrap" style="width: 100%" id="example1">
            <thead>
              <tr class="text-center">
                <th>Sl.</th>
                <th>Title</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($allData as $key => $term)
              <tr class="text-center">
                <td>{{$key+1}}</td>
                <td>{{$term->name}}</td>
                <td>
                  <!-- Edit Button -->
                  <a class="btn btn-sm btn-success" title="Edit" href="{{route('terms.edit',$term->id)}}">
                    <i class="fa fa-edit"></i>
                  </a>
                  <a id="delete" href="{{ route('terms.delete') }}" data-token="{{ csrf_token() }}" data-id="{{ $term->id }}" class="btn btn-danger btn-sm" title="Delete">
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
