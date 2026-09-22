@extends('frontend.layouts.master')
@section('content')
  <div class="page-content pt-50 site-statistic" style="background:#f5f5f5">
      <div class="container">
          <div class="row vendor-grid">
              @foreach($abouts as $about)
              <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                  <div class="vendor-wrap style-2 mb-40">
                      <div class="vendor-img-action-wrap">
                          <div class="vendor-img">
                              <a href="#">
                                  <img class="default-img" src="{{(!empty(@$about->image))?url('public/upload/about_images/'.@$about->image):url('public/upload/no_image.png')}}" alt="Shastho Plus" />
                              </a>
                          </div>
                      </div>
                      <div class="vendor-content-wrap">
                          <div class="mb-30">
                              <h4 class="mb-5"><a href="#" style="color:#1B489D">{{$about->title}}</a></h4>
                              <div class="vendor-info d-flex justify-content-between align-items-end mt-30">
                                  <ul class="contact-infor text-muted">
                                      <li style="color:#000 !important;text-align: justify;">
                                          {{$about->description}}</li>
                                      <li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
  </div>

  <div class="page-content pt-50">
        <div class="container">
            <div class="row product-grid-4">
                <h4 class="mb-15 text-brand" style="text-align: center;margin-bottom: 36px !important;">Our Facilities</h4>
                @foreach($facilities as $facility)
                <div class="col-lg-3 col-md-3 col-sm-3 col-xl-3">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="#">
                                    <img class="default-img" src="{{(!empty($facility->image))?url('public/upload/promotion_images/'.$facility->image):url('public/upload/no_image.png')}}" alt="Shastho Plus" />
                                    <img class="hover-img" src="{{(!empty($facility->image))?url('public/upload/promotion_images/'.$facility->image):url('public/upload/no_image.png')}}" alt="Shastho Plus" />
                                </a>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <h2><a href="#">{{$facility->title}}</a></h2>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection