@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Promotion List
          <a href="{{ route('human-resource.hrm.promotion.add') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-plus-circle"> Add Promotion</i></a>
        </h3>
      </div>

      <div class="card-body">
        <div class="table table-responsive">
          <table id="example1" class="table table-bordered table-sm">
            <thead>
            <tr>
              <th width="8%">SL</th>
              <th>Title</th>
              <th>Sort</th>
              <th>Image</th>
              <th width="10%">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($allData as $key=> $value)
              <tr class="text-center">
                <td>{{ $key + 1 }}</td>
                <td>{{ $value->title }}</td>
                <td>{{ $value->sort }}</td>
                <td>
                  <img src="{{(!empty(@$value->image))?url('public/upload/promotion_images/'.@$value->image):url('public/upload/no_image.png')}}" width="30%">
                </td>
                <td>
                  <a href="{{ route('human-resource.hrm.promotion.edit',$value->id) }}" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>     
                  <a id="delete" href="{{ route('human-resource.hrm.promotion.delete') }}" data-token="{{csrf_token()}}" data-id="{{$value->id}}" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>
                </td>
              </tr> 
            @endforeach               
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>

@endsection