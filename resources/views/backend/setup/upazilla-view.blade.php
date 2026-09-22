@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top:40px;">
    <div class="card">
      <div class="card-header">
        <h5>Upazila List
					<a class="btn btn-sm btn-success float-right" href="{{route('setup.upazila.add')}}"><i class="fa fa-plus-circle"></i> Add Upazila</a>
				</h5>
      </div>

      <div class="card-body">
				<table class="table-sm table-bordered table-striped dt-responsive nowrap" style="width: 100%" id="example1">
					<thead  >
						<tr>
							<th>Sl.</th>
							<th>Division</th>
							<th>District Name</th>
							<th>Upazila Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($allData as $key => $value)
						<tr class="text-center">
							<td>{{$key+1}}</td>
							<td>{{@$value['division']['name']}}</td>
							<td>{{@$value['district']['name']}}</td>
							<td>{{$value->name}}</td>
							<td>
								<a class="btn btn-sm btn-success" title="Edit" href="{{route('setup.upazila.edit',$value->id)}}"><i class="fa fa-edit"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>

    </div>
  </div>

@endsection



