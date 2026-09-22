@extends('backend.layouts.master')
@section('content')
<div class="col-xl-12">
  <div class="breadcrumb-holder">
    <h1 class="main-title float-left">Manage Medicine Category</h1>
    <ol class="breadcrumb float-right">
      <li class="breadcrumb-item"><a href="{{route('home')}}"><strong>Home</strong></a></li>
      <li class="breadcrumb-item active">Medicine Category</li>
    </ol>
    <div class="clearfix"></div>
  </div>
</div>
<div class="container fullbody">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Medicine Category List
          <a href="{{ route('e-prescription.medicine.category.add') }}" class="btn btn-success float-right btn-sm custom_btn" style="margin-right: 10px;"><i class="fa fa-plus-circle"> Medicine Category Add</i></a>
        </h3>
      </div>

      <div class="card-body">
        <table id="example1" class="table table-bordered">
          <thead>
          <tr>
            <th width="8%">SL</th>
            <th>Medicine Category</th>
            <th width="12%">Action</th>
          </tr>
          </thead>
          <tbody>
            @foreach($allData as $key=> $value)
            @php
              $count = App\Model\Product::where('medicine_category_id',$value->id)->count();
            @endphp
            <tr class="text-center">
              <td>{{ $key + 1 }}</td>
              <td>{{ $value->name }}</td>
              <td>
                <a href="{{ route('e-prescription.medicine.category.edit',$value->id) }}" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                @if($count <1)
                <a id="delete" href="{{ route('e-prescription.medicine.category.delete') }}" data-token="{{csrf_token()}}" data-id="{{$value->id}}" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>
                @endif
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