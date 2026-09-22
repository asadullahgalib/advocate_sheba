@extends('backend.layouts.master')
@section('content')
<div class="col-xl-12">
  <div class="breadcrumb-holder">
    <h1 class="main-title float-left">Manage Table</h1>
    <ol class="breadcrumb float-right">
      <li class="breadcrumb-item"><a href="{{route('home')}}"><strong>Home</strong></a></li>
      <li class="breadcrumb-item active">Table</li>
    </ol>
    <div class="clearfix"></div>
  </div>
</div>
<div class="container fullbody">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3>Table List
          <a class="btn btn-success float-right btn-sm" href="{{route('setup.table.add')}}"><i class="fa fa-plus-circle"></i> Add Table</a>
        </h3>
      </div>

      <div class="card-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th width="6%">SL.</th>
              <th>Table Name</th>
              <th>Capacity</th>
              <th>Icon</th>
              <th width="12%">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($allData as $key => $value)
            <tr class="{{$value->id}}">
              <td>{{$key+1}}</td>
              <td>{{$value->name}}</td>
              <td>{{$value->capacity}}</td>
              <td><img src="{{(!empty($value->image))?url('public/upload/table_images/'.$value->image):url('public/upload/no_image.png')}}" width="130px" height="160px"></td>
              <td>
                <a title="Edit" class="btn btn-sm btn-primary" href="{{route('setup.table.edit',$value->id)}}"><i class="fa fa-edit"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div><!-- /.card-body -->

    </div>
  </div>
</div>

@endsection