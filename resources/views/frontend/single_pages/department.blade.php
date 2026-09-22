@extends('frontend.layouts.master')
@section('content')
<section class="popular-categories section-padding" style="background-color:#f5f5f5;padding: 5px 0px 250px 0px;">
    <div class="container">
        <div class="section-title">
          <div class="title text-center">
              <h3 style="color: #1B489D;font-size: 25px;">Departments</h3>
          </div>
          <div class="slider-arrow slider-arrow-2 flex-right carausel-8-columns-arrow" id="carausel-8-columns-arrows"></div>
        </div>
        <div class="carausel-8-columns-cover position-relative">
              <div class="carausel-8-columns" id="carausel-8-columns">
                @foreach($departments as $department)
                  <div class="card-1">
                      <figure class="img-hover-scale overflow-hidden">
                          <a href="{{route('our.department-wise-doctor',$department->id)}}">
                            <img src="{{url('public/upload/department_images/'.$department->image)}}" alt="Shastho Plus">
                          </a>
                      </figure>
                      <h6 style="font-size:15px">
                          <a href="{{route('our.department-wise-doctor',$department->id)}}">{{$department->name}}</a>
                      </h6>
                  </div>
                @endforeach
              </div>
        </div>
    </div>
</section>
@endsection