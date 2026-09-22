@extends('frontend.layouts.master')
@section('content')
<section style="padding: 25px 0px 30px 0px;background-color: #f5f5f5;margin-bottom: 20px;">
    <div class="container mb-30">
        <div class="row" style="text-align: center;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <div class="title text-center">
                    <h3 style="color: #1B489D;font-size: 25px;padding-bottom: 25px;">Ambulance List</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row product-grid">
                    @foreach($packages as $package)
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a>
                                        <img class="default-img" src="{{asset('public/upload/ambulance_images/'.$package->image)}}" alt="Shastho Plus" /0>
                                        <img class="hover-img" src="{{asset('public/upload/ambulance_images/'.$package->image)}}" alt="Shastho Plus" /0>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2>
                                    <a>{{$package->title}}</a>
                                </h2>
                                <d style="text-align: justify;color: #000;">
                                    <?php echo $package->editor1; ?>
                                </d>
                                <br>
                                <a class="btn btn-primary add-cart ambulanceBtn" data-id="{{$package->id}}" style="background-color: #1B489D;color: #fff;font-weight: bold;padding: 9px;border-radius: 5px;">Book Now </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="ambulanceModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p style="text-align: center;font-size: 19px;padding-top: 20px;">
                                For <span id="package_title" style="font-weight:bold;"></span> Please Call at <br>
                            </p>
                        </div>
                        <div class="col-md-4 offset-md-4" style="text-align:center;padding-top: 15px;">
                            <a href="" class="btn btn-primary" id="package_no"></a>
                        </div>
                        <div class="col-md-12" style="text-align:right;">
                            <button type="button" class="btn btn-secondary ambulance_close" data-dismiss="modal" style="text-align: right;">X</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).on('click','.ambulanceBtn',function(){
            var id = $(this).attr("data-id");
            $.ajax({
              url: "{{ route('get-ambulance-appointment-number') }}",
              type: "GET",
              data:{id:id},
              success: function(data){
                var mobile = data.mobile
                $('#package_title').text(data.title);
                $('#package_no').text(mobile);
                $("#package_no").attr("href",'tel:'+mobile);
                $('#ambulanceModal').modal('show');
              }
            });
          });
        $(document).on('click','.close,.ambulance_close',function(){
            $('#ambulanceModal').modal('hide');
        });  
    </script>

@endsection