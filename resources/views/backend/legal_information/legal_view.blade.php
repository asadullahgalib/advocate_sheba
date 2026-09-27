@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>Legal Information List
            <a class="btn btn-sm btn-success float-right" href="{{route('legal-information.add')}}"><i class="fa fa-plus-circle"></i> Add Legal Info</a>
          </h5>
      </div>

      <div class="card-body">
          <table class="table-sm table-bordered table-striped dt-responsive nowrap" style="width: 100%" id="example1">
            <thead>
              <tr class="text-center">
                <th>Sl.</th>
                <th>Title (English)</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($allData as $key => $legal)
              <tr class="text-center">
                <td>{{$key+1}}</td>
                <td>{{$legal->title_en}}</td>
                <td>
                  <!-- Edit Button -->
                  <a class="btn btn-sm btn-success" title="Edit" href="{{route('legal-information.edit',$legal->id)}}">
                    <i class="fa fa-edit"></i>
                  </a>  
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

    </div>
  </div>
@endsection
