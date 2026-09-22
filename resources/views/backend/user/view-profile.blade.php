@extends('backend.layouts.master')
@section('content')
<div class="col-xl-12">
  <div class="breadcrumb-holder">
    <h1 class="main-title float-left">User Profile</h1>
    <ol class="breadcrumb float-right">
      <li class="breadcrumb-item"><a href="{{route('home')}}"><strong>Home</strong></a></li>
      <li class="breadcrumb-item active">Profile</li>
    </ol>
    <div class="clearfix"></div>
  </div>
</div>
<div class="container fullbody">
  <div class="col-md-12">
    <div class="card">

      <section class="col-md-4 offset-md-4">
          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="{{(!empty($user->image))?url('public/upload/user_images/'.$user->image):url('public/upload/no_image.png')}}"
                     alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">{{$user->name}}</h3>

              <p class="text-muted text-center">{{$user->address}}</p>

              <table width="100%" class="table table-bordered">
                <tbody>
                  <tr>
                    <td>Mobile No</td>
                    <td>{{$user->mobile}}</td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>{{$user->email}}</td>
                  </tr>
                  <tr>
                    <td>Gender</td>
                    <td>{{$user->gender}}</td>
                  </tr>
                </tbody>
              </table>

              <a href="{{route('profiles.edit')}}" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </section>

    </div>
  </div>
</div>

@endsection