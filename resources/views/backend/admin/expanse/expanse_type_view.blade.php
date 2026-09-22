@extends('backend.layouts.master')
@section('content')
<div class="col-xl-12">
  <div class="breadcrumb-holder">
    <h1 class="main-title float-left">Manage Expense Item</h1>
    <ol class="breadcrumb float-right">
      <li class="breadcrumb-item"><a href="{{route('home')}}"><strong>Home</strong></a></li>
      <li class="breadcrumb-item active">Expense Item</li>
    </ol>
    <div class="clearfix"></div>
  </div>
</div>
<div class="container fullbody">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5>Expense Item List
          <a class="btn btn-sm btn-success float-right" href="{{route('human-resource.expenses.type.add')}}"><i class="fa fa-plus-circle"></i> Expense Item Add</a>
        </h5>
      </div>

      <div class="card-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th width="10%">SL. </th>
              <th>Expense Item</th>
              <th width="10%">Action </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($allData as $key => $value)
            <tr class="{{$value->id}}">
              <td>{{$key+1}}</td>
              <td>{{$value->name}}</td>
              <td>
                <a class="btn btn-sm btn-info" title="Edit" href="{{route('human-resource.expenses.type.edit',$value->id)}}"><i class="fa fa-edit"></i></a>
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