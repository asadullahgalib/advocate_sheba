<!-- Photo Gallery -->
@if(isset($advocate_galleries) && $advocate_galleries->count() > 0)

<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<!-- Fancybox CSS -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/photo-gallery.css')}}">

<section class="lpc-carousel-section">
    <div class="container">
        <div class="flex justify-between items-center mt-2">
            <div class="my-4">
                <h2 id="hospitals-by-location" class="text-lg md:text-xl font-semibold text-gray-800 dark:text-gray-100">
                    Photo Gallery
                </h2>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Explore Our Photo Gallery
                </p>
            </div>
        </div>

        <div class="lpc-carousel">
            <!-- PREVIOUS BUTTON -->
            <button type="button" class="lpc-arrow lpc-arrow-prev" aria-label="Previous">
                <i class="fa fa-chevron-left"></i>
            </button>

            <!-- VIEWPORT -->
            <div class="lpc-viewport">
                <div class="lpc-track">
                    
                    {{-- ডাইনামিক লুপ শুরু --}}
                    @foreach($advocate_galleries as $gallery)
                    <div class="lpc-slide">
                        <div class="lpc-card">
                            <div class="lpc-image-area">
                                <div class="gallery-item">
                                    <div class="gallery-box">
                                        <a href="{{ asset('uploads/gallery_images/' . $gallery->image) }}" class="fancybox" rel="gallery1" title="{{ $gallery->title ?? 'Gallery Image' }}">
                                            <div class="gallery-image-wrapper">
                                                <img src="{{ asset('uploads/gallery_images/' . $gallery->image) }}" class="zoom img-fluid" alt="{{ $gallery->title ?? 'Gallery Image' }}">
                                            </div>
                                        </a>
                                        @if($gallery->title)
                                        <div class="image-title">
                                            {{ $gallery->title }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- লুপ শেষ --}}

                </div>
            </div>

            <!-- NEXT BUTTON -->
            <button type="button" class="lpc-arrow lpc-arrow-next" aria-label="Next">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>

<!-- jQuery অবশ্যই আগে Load থাকতে হবে -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

<script>
    $(document).ready(function () {
        $('.photo-gallery').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: false,
            navRewind: false,
            autoplay: false,
            responsive: {
                0: { items: 2 },
                600: { items: 3 },
                1000: { items: 4 }
            }
        });

        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none",
            helpers: {
                title: { type: "inside" }
            }
        });
    });
</script>

@endif