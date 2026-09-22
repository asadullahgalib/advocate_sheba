@extends('backend.layouts.master')
@section('content')
  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Designation List
          <a target="_blank" class="btn btn-primary float-right btn-sm custom_btn" href="{{route('human-resource.hrm.designation.pdf')}}"><i class="fa fa-download"></i> PDF</a>
          <a href="{{ route('human-resource.hrm.designation.add') }}" class="btn btn-success float-right btn-sm" style="margin-right: 10px;"><i class="fa fa-plus-circle"> Designation Add</i></a>
        </h3>
      </div>

      <div class="card-body">
        <table id="example1" class="table table-bordered">
          <thead>
          <tr>
            <th width="8%">SL</th>
            <th>Designation Name</th>
            <th width="10%">Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach($designations as $key=>$designation)
            <tr class="text-center">
              <td>{{ $key + 1 }}</td>
              <td>{{ $designation->name }}</td>
              <td>
                <a href="{{ route('human-resource.hrm.designation.edit',$designation->id) }}" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>     
                <!-- <a id="delete" href="{{ route('human-resource.hrm.designation.delete') }}" data-token="{{csrf_token()}}" data-id="{{$designation->id}}" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>                       -->
              </td>
            </tr> 
          @endforeach               
          </tbody>
        </table>
      </div>

    </div>
  </div>

@endsection