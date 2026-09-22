@extends('backend.layouts.master')
@section('content')
  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Prescription List
          <a href="{{ route('e-prescription.add') }}" class="btn btn-success float-right btn-sm custom_btn" style="margin-right: 10px;"><i class="fa fa-plus-circle"> Prescription Add</i></a>
        </h3>
      </div>

      <div class="card-body">
        <table id="example1" class="table table-bordered">
          <thead>
          <tr>
            <th width="8%">SL</th>
            <th>Patient Name</th>
            <th>Mobile No</th>
            <th>Age</th>
            <th width="12%">Action</th>
          </tr>
          </thead>
          <tbody>
            <tr class="text-center">
              <td>1</td>
              <td>Sayem</td>
              <td>01928511049</td>
              <td>32</td>
              <td>
                <a href="#" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                <a id="delete" href="#" data-token="#" data-id="#" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></a>
              </td>
            </tr>          
          </tbody>
        </table>
      </div>

    </div>
  </div>

@endsection