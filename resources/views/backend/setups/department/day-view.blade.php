@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Day List
          <a href="{{ route('human-resource.hrm.day.add') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-plus-circle"> Add Day</i></a>
        </h3>
      </div>

      <div class="card-body">
        <table id="example1" class="table table-bordered">
          <thead>
          <tr>
            <th width="8%">SL</th>
            <th>Day</th>
            <th width="10%">Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach($allData as $key=> $value)
            <tr class="text-center">
              <td>{{ $key + 1 }}</td>
              <td>{{ $value->name }}</td>
              <td>
                <a href="{{ route('human-resource.hrm.day.edit',$value->id) }}" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>     
                <!-- <a id="delete" href="{{ route('human-resource.hrm.day.delete') }}" data-token="{{csrf_token()}}" data-id="{{$value->id}}" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>                       -->
              </td>
            </tr> 
          @endforeach               
          </tbody>
        </table>
      </div>

    </div>
  </div>

@endsection