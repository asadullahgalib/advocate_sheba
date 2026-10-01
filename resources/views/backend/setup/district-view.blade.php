@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>District List
            <a class="btn btn-sm btn-success float-right" href="{{route('setup.district.add')}}"><i class="fa fa-plus-circle"></i> Add District</a>
          </h5>
      </div>

      <div class="card-body">
          <table class="table-sm table-bordered table-striped dt-responsive nowrap" style="width: 100%" id="example1">
            <thead>
              <tr class="text-center">
                <th>Sl.</th>
                <th>Image</th>
                <th>District Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($allData as $key => $district)
              <tr class="text-center">
                <td>{{$key+1}}</td>
                <td>
                  <img src="{{ (!empty($district->image)) ? url('uploads/district_images/'.$district->image) : url('uploads/no_image.png') }}" style="width: 60px; height: 40px; border: 1px solid #ddd; object-fit: contain;">
                </td>
                <td>{{$district->name}}</td>
                <td>
                  <a class="btn btn-sm btn-success" title="Edit" href="{{route('setup.district.edit',$district->id)}}"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

    </div>
  </div>

@endsection
