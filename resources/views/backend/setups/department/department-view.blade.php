@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Department List
          <a target="_blank" class="btn btn-primary float-right btn-sm" href="{{route('human-resource.hrm.department.pdf')}}"><i class="fa fa-download"></i> PDF</a>
          <a href="{{ route('human-resource.hrm.department.add') }}" class="btn btn-success float-right btn-sm custom_btn" style="margin-right: 10px;"><i class="fa fa-plus-circle"> Department Add</i></a>
        </h3>
      </div>

      <div class="card-body">
        <table id="example1" class="table table-bordered">
          <thead>
          <tr>
            <th width="8%">SL</th>
            <th>Department Name</th>
            <th>Image</th>
            <th>Sort</th>
            <th width="12%">Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach($allData as $key=> $value)
            @php
              $count = App\User::where('department_id',$value->id)->count();
            @endphp
            <tr class="text-center">
              <td>{{ $key + 1 }}</td>
              <td>{{ $value->name }}</td>
              <td>
                <img src="{{(!empty(@$value->image))?url('public/upload/department_images/'.@$value->image):url('public/upload/no_image.png')}}">
              </td>
              <td>{{ $value->sort }}</td>
              <td>
                <a href="{{ route('human-resource.hrm.department.edit',$value->id) }}" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                @if($count <1)
                <a id="delete" href="{{ route('human-resource.hrm.department.delete') }}" data-token="{{csrf_token()}}" data-id="{{$value->id}}" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>
                @endif
              </td>
            </tr> 
          @endforeach               
          </tbody>
        </table>
      </div>

    </div>
  </div>

@endsection