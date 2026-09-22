<!-- Owl Carousel CSS -->
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


<!-- Fancybox CSS -->
<link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">


<main class="main pages gallery-section">

    <div class="page-content gallery-page-content">

        <div class="container">

            <!-- Gallery Title -->
            <div class="archive-header-2">

                <h1 class="display-2 mb-50 text-brand gallery-title" style="    color: #12636c !important;">
                    Photo Gallery
                </h1>

            </div>


            <!-- Photo Gallery -->
            <div class="owl-carousel owl-theme photo-gallery">


                <!-- Image 1 -->
                <div class="gallery-item">

                    <div class="gallery-box">

                        <a href="{{ asset('frontend/f1.jpg') }}"
                           class="fancybox"
                           rel="gallery1"
                           title="ব্যক্তিগত ছবি">

                            <div class="gallery-image-wrapper">

                                <img src="{{ asset('frontend/f1.jpg') }}"
                                     class="zoom img-fluid"
                                     alt="ব্যক্তিগত ছবি">

                            </div>

                        </a>

                        <div class="image-title">
                            ব্যক্তিগত ছবি
                        </div>

                    </div>

                </div>


                <!-- Image 2 -->
                <div class="gallery-item">

                    <div class="gallery-box">

                        <a href="{{ asset('frontend/f2.jpg') }}"
                           class="fancybox"
                           rel="gallery1"
                           title="আদালতের ছবি">

                            <div class="gallery-image-wrapper">

                                <img src="{{ asset('frontend/f2.jpg') }}"
                                     class="zoom img-fluid"
                                     alt="আদালতের ছবি">

                            </div>

                        </a>

                        <div class="image-title">
                            আদালতের ছবি
                        </div>

                    </div>

                </div>


                <!-- Image 3 -->
                <div class="gallery-item">

                    <div class="gallery-box">

                        <a href="{{ asset('frontend/f3.jpg') }}"
                           class="fancybox"
                           rel="gallery1"
                           title="চেম্বারের ছবি">

                            <div class="gallery-image-wrapper">

                                <img src="{{ asset('frontend/f3.jpg') }}"
                                     class="zoom img-fluid"
                                     alt="চেম্বারের ছবি">

                            </div>

                        </a>

                        <div class="image-title">
                            চেম্বারের ছবি
                        </div>

                    </div>

                </div>


                <!-- Image 4 -->
                <div class="gallery-item">

                    <div class="gallery-box">

                        <a href="{{ asset('frontend/f4.jpg') }}"
                           class="fancybox"
                           rel="gallery1"
                           title="সেমিনার বা অনুষ্ঠানের ছবি">

                            <div class="gallery-image-wrapper">

                                <img src="{{ asset('frontend/f4.jpg') }}"
                                     class="zoom img-fluid"
                                     alt="সেমিনার বা অনুষ্ঠানের ছবি">

                            </div>

                        </a>

                        <div class="image-title">
                            সেমিনার বা অনুষ্ঠানের ছবি
                        </div>

                    </div>

                </div>


            </div>


            <!-- View All Button -->
            <div class="row" style="margin-top:10px;">

                <div class="col-12 text-center practice_area_mobile_div">

                    <a href="#"
                       class="btn"
                       style="
                           background: #fff;
                           border: 1px solid #155B30;
                           color: #155B30;
                           font-weight: bold;
                       ">

                        View All Photos
                        <i class="fa fa-arrow-right"></i>

                    </a>

                </div>

            </div>

        </div>

    </div>

</main>

<style>
    /* =========================================================
   MAIN GALLERY
   ========================================================= */

.gallery-section {

    background-color: #ffffff;
    border-radius: 15px;
    margin-bottom: 10px;
    margin-top: 5px;
    overflow: hidden;

}


.gallery-page-content {

    padding: 20px 0 !important;

}


/* =========================================================
   GALLERY TITLE
   ========================================================= */

.gallery-title {

    font-size: 25px;
    text-align: center;
    margin-bottom: 30px !important;

}


/* =========================================================
   OWL CAROUSEL
   ========================================================= */

.photo-gallery {

    width: 100%;

}


/*
|--------------------------------------------------------------------------
| Gallery Item
|--------------------------------------------------------------------------
|
| এখানে width দেওয়া যাবে না।
| Owl Carousel নিজেই প্রতিটি item-এর width control করবে।
|
*/

.photo-gallery .gallery-item {

    padding: 8px;
    box-sizing: border-box;

}


/* =========================================================
   GALLERY BOX
   ========================================================= */

.photo-gallery .gallery-box {

    width: 100%;
    background: #ffffff;
    border: 1px solid #dcdcdc;
    border-radius: 6px;
    padding: 5px;
    overflow: hidden;
    transition: all 0.3s ease;

}


.photo-gallery .gallery-box:hover {

    border-color: #155B30;
    box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);

}


/* =========================================================
   IMAGE WRAPPER
   ========================================================= */

.gallery-image-wrapper {

    width: 100%;
    height: 200px;
    overflow: hidden;
    border-radius: 4px;

}


.gallery-image-wrapper img {

    width: 100% !important;
    height: 100% !important;

    object-fit: cover;

    display: block;

    transition: transform 0.3s ease;

}


/* =========================================================
   IMAGE HOVER
   ========================================================= */

.gallery-image-wrapper:hover img {

    transform: scale(1.05);

}


/* =========================================================
   IMAGE TITLE
   ========================================================= */

.image-title {

    width: 100%;

    min-height: 55px;

    display: flex;

    align-items: center;

    justify-content: center;

    text-align: center;

    padding: 8px;

    font-size: 16px;

    font-weight: 600;

    color: #333;

    line-height: 1.4;

}


.gallery-box:hover .image-title {

    color: #155B30;

}


/* =========================================================
   OWL NAVIGATION
   ========================================================= */

.photo-gallery .owl-nav button {

    font-size: 28px !important;

}


.photo-gallery .owl-nav button:hover {

    background: transparent !important;

}


/* =========================================================
   FANCYBOX TITLE
   ========================================================= */

.fancybox-title {

    font-size: 16px !important;

    font-weight: 600 !important;

    text-align: center !important;

    color: #000 !important;

    padding: 10px 15px !important;

}


/* =========================================================
   DESKTOP
   4 ITEMS
   ========================================================= */

@media (min-width: 1000px) {

    .photo-gallery .gallery-item {

        padding: 8px;

    }

    .gallery-image-wrapper {

        height: 200px;

    }

}


/* =========================================================
   TABLET
   3 ITEMS
   ========================================================= */

@media (min-width: 600px) and (max-width: 999px) {

    .photo-gallery .gallery-item {

        padding: 7px;

    }

    .gallery-image-wrapper {

        height: 180px;

    }

}


/* =========================================================
   MOBILE
   2 ITEMS
   ========================================================= */

@media (max-width: 599px) {

    .gallery-section {

        margin-top: -20px;
        border-radius: 10px;

    }


    .gallery-page-content {

        padding: 15px 5px !important;

    }


    .gallery-title {

        font-size: 22px;
        margin-bottom: 20px !important;

    }


    .photo-gallery .gallery-item {

        padding: 5px;

    }


    .photo-gallery .gallery-box {

        padding: 4px;

    }


    .gallery-image-wrapper {

        height: 130px;

    }


    .image-title {

        font-size: 13px;
        min-height: 48px;

    }

}


/* =========================================================
   VERY SMALL MOBILE
   ========================================================= */

@media (max-width: 400px) {

    .gallery-image-wrapper {

        height: 110px;

    }


    .image-title {

        font-size: 12px;
        min-height: 42px;

    }

}
</style>

<!-- jQuery অবশ্যই আগে Load থাকতে হবে -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


<script>

$(document).ready(function () {


    /* =====================================================
       OWL CAROUSEL
       ===================================================== */

    $('.photo-gallery').owlCarousel({

        loop: true,

        margin: 0,

        nav: true,

        dots: false,

        navRewind: false,

        autoplay: false,

        responsive: {

            /* Mobile = 2 */
            0: {
                items: 2
            },

            /* Tablet = 3 */
            600: {
                items: 3
            },

            /* Desktop = 4 */
            1000: {
                items: 4
            }

        }

    });


    /* =====================================================
       FANCYBOX
       ===================================================== */

    $(".fancybox").fancybox({

        openEffect: "none",

        closeEffect: "none",

        helpers: {

            title: {

                type: "inside"

            }

        }

    });


});

</script>