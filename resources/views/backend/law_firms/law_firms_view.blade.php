@extends('backend.layouts.master')
@section('content')

<style>
  .dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 0rem !important;
    padding: 0.5rem 0;
    margin: 0.125rem 0 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: 0.25rem;
}
</style>

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>Law Firm List
            <a class="btn btn-sm btn-success float-right" href="{{route('law-firms.add')}}"><i class="fa fa-plus-circle"></i> Add Law Firm</a>
          </h5>
      </div>

      <div class="card-body">
          <table class="table-sm table-bordered table-striped dt-responsive nowrap" style="width: 100%" id="example1">
            <thead>
              <tr class="text-center">
                <th style="width: 8%;">Sl.</th>
                <th>Firm Name</th>
                <th>Leader</th>
                <th>District</th>
                <th style="width: 15%;">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($allData as $key => $value)
              <tr class="text-center">
                <td>{{$key+1}}</td>
                <td class="text-left">{{ $value->firm_name }}</td>
                <!-- এখানে name_en এর জায়গায় name বসানো হয়েছে -->
                <td class="text-left">{{ $value['leader']['name'] ?? 'N/A' }}</td>
                <td class="text-left">{{ $value['district']['name'] ?? 'N/A' }}</td>
                <td>
                  <!-- Details Button -->
                  <a class="btn btn-sm btn-info" title="Details" href="{{route('law-firms.details', $value->id)}}"><i class="fa fa-eye"></i></a>

                  <!-- Edit Button -->
                  <a class="btn btn-sm btn-success" title="Edit" href="{{route('law-firms.edit', $value->id)}}"><i class="fa fa-edit"></i></a>

                  <!-- Delete Button -->
                  <a id="delete" href="{{ route('law-firms.delete') }}" data-token="{{csrf_token()}}" data-id="{{$value->id}}" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

    </div>
  </div>

@endsection