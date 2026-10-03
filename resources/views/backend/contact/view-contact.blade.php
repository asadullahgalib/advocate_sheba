@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3>Company Info List
          <a class="btn btn-success float-right btn-sm custom_btn" href="{{route('site-setting.contents.contact.add')}}"><i class="fa fa-plus-circle"></i> Add Company Info</a>
        </h3>
      </div>

      <div class="card-body">
        <div class="table table-responsive">
          <table id="example1" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th width="4%">SL.</th>
                <th>Name</th>
                <th>Mobile No</th>
                <th>Email</th>
                <th>Address</th>
                <th width="5%">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($allData as $key => $contact)
              <tr class="text-center">
                <td>{{$key+1}}</td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->mobile_no}}</td>
                <td>{{$contact->email}}</td> 
                <td>{{$contact->address}}</td>
                <td>
                  <a title="Edit" class="btn btn-sm btn-primary" href="{{route('site-setting.contents.contact.edit',$contact->id)}}"><i class="fa fa-edit"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div><!-- /.card-body -->

    </div>
  </div>

@endsection
