@extends('backend.layouts.master')
@section('content')

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3>Company Info List
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
                <th>Profile Image</th>
                <th width="5%">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($allData as $key => $contact)
              <tr class="text-center">
                <td>{{$key+1}}</td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->mobile_no}}</td>
                <td>
                  <img id="showImage" src="{{(!empty($contact->image))?url('uploads/profile_images/'.$contact->image):url('uploads/no_image.png')}}" width="70%">
                </td>
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