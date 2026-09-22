@extends('backend.layouts.master')
@section('content')
<div class="col-xl-12">
  <div class="breadcrumb-holder">
    <h1 class="main-title float-left">Manage Expense</h1>
    <ol class="breadcrumb float-right">
      <li class="breadcrumb-item"><a href="{{route('home')}}"><strong>Home</strong></a></li>
      <li class="breadcrumb-item active">Expense</li>
    </ol>
    <div class="clearfix"></div>
  </div>
</div>
<div class="container fullbody">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5>Expense List
          <a class="btn btn-sm btn-success float-right" href="{{route('human-resource.expenses.expanse.add')}}"><i class="fa fa-plus-circle"></i> Expense Add</a>
        </h5>
      </div>

      <div class="card-body">
        <table id="example1" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th width="8%">SL. </th>
              <th>Expense Item</th>
              <th>Amount</th>
              <th>Date</th>
              <th>Description</th>
              <th width="13%">Action </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($allData as $key => $expanse)
            <tr class="{{$expanse->id}}">
              <td>{{$key+1}}</td>
              <td>{{@$expanse['expanse_type']['name']}}</td>
              <td>{{$expanse->amount}}</td>
              <td>
                {{date('d-m-Y',strtotime($expanse->date))}}
              </td>
              <td>{{$expanse->details}}</td>
              <td>
                <a class="btn btn-sm btn-primary" title="Edit" href="{{route('human-resource.expenses.expanse.edit',$expanse->id)}}"><i class="fa fa-edit"></i></a>
                <a title="Delete" id="delete" class="btn btn-sm btn-danger" href="{{route('human-resource.expenses.expanse.delete')}}" data-token="{{ csrf_token() }}" data-id="{{ $expanse->id }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                <a class="btn btn-sm btn-info" title="attach" href="{{route('human-resource.expenses.expanse.attach',$expanse->id)}}"><i class="fa fa-file"></i></a>
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