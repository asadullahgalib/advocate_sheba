@extends('frontend.layouts.master')
@section('content')
<section style="padding: 100px 0px 350px 0px;background-color: #f5f5f5;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <h3 style="text-align: center;margin-bottom: 30px;font-size: 25px;color: #1B489D;font-weight: bold;">Please download the link below:</h3>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12 text-center">
                    <a target="_blank" href="{{route('our.doctor-reg.download')}}" style="background-color: #ED9324;padding: 10px;border-radius: 5px;color: #fff;font-size: 18px;font-weight: bold;"><i class="fa fa-download"></i> Download</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection