<style>

    /* =====================================================
       FEATURED LAW FIRMS
    ===================================================== */

    .featured-law-firms-section {
        padding: 15px 0 20px;
        background: #fff;
    }

    .product-cart-wrap{
        border: none !important;
    }


    /* ================= SECTION HEADER ================= */

    .law-firms-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        margin-bottom: 12px;
        gap: 10px;
    }

    .law-firms-title {
        display: flex;
        align-items: center;
        min-width: 0;
        flex: 1;
    }

    .law-firms-title-icon {
        width: 32px;
        height: 32px;
        flex: 0 0 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 8px;
        color: #1B489D;
        background: #f5f9ff;
        border: 1px solid #d9e4f2;
        border-radius: 6px;
        font-size: 15px;
    }

    .law-firms-title h3 {
        margin: 0;
        color: #1B489D;
        font-size: 18px;
        font-weight: 600;
        line-height: 1.2;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }


    /* ================= VIEW ALL ================= */

    .law-firms-view-all {
        flex: 0 0 auto;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        color: #222;
        font-size: 14px;
        font-weight: 700;
        text-decoration: none;
        white-space: nowrap;
    }

    .law-firms-view-all:hover {
        color: #129AF7;
    }


    /* =====================================================
       CAROUSEL
    ===================================================== */

    .featured-law-firms-slider {
        position: relative;
        width: 100%;
    }

    /*
     * IMPORTANT
     * Slick carousel-এর slide যেন proper width নেয়
     */
    .featured-law-firms-slider .product-cart-wrap {
        box-sizing: border-box;
        padding: 0 15px;
        margin-bottom: 10px;
    }

    /* =====================================================
       LAW FIRM CARD
    ===================================================== */

    .law-firm-card {
        background: #f3efef4d !important;
        width: 100%;
        min-height: 140px;
        padding: 25px 10px;
        background: #fff;
        border: 1px solid #e1e6ec;
        border-radius: 7px;
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.04);
        transition: all .25s ease;
    }

    .law-firm-card:hover {
        border-color: #c8d5e5;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.07);
        transform: translateY(-2px);
    }


    /* =====================================================
       CARD INFORMATION
    ===================================================== */

    .law-firm-main {
        display: flex;
        align-items: flex-start;
        gap: 9px;
        min-width: 0;
        margin-bottom: 9px;
    }


    /* ================= LOGO ================= */

    .law-firm-logo {
        width: 100px;
        height: 100px;
        flex: 0 0 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #dfe5eb;
        border-radius: 6px;
        background: #fff;
        overflow: hidden;
    }

    .law-firm-logo img {
        width: 100px;
        height: 100px;
        padding: 10px;
        object-fit: contain;
        display: block;
    }


    /* ================= INFORMATION ================= */

    .law-firm-info {
        min-width: 0;
        flex: 1;
    }

    .law-firm-name {
        margin: 0 0 3px;
        color: #129AF7;
        font-size: 16px;
        font-weight: bold;
        line-height: 1.25;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .law-firm-type {
        margin-bottom: 2px;
        color: #000;
        font-size: 14px;
        line-height: 2;
        font-weight: 600;
    }

    .law-firm-location {
        display: flex;
        align-items: center;
        gap: 4px;
        margin-bottom: 2px;
        color: #555;
        font-size: 13px;
        line-height: 2;
    }

    .law-firm-location i {
        color: #129AF7;
        font-size: 14px;
    }

    .law-firm-practice {
        margin: 0;
        color: #000;
        font-size: 12px;
        line-height: 1.3;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }


    /* =====================================================
       VIEW PROFILE BUTTON
    ===================================================== */

    .law-firm-profile-btn {
        width: 100%;
        height: 29px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
        color: #222;
        background: #fff;
        border: 1px solid #d8dee6;
        border-radius: 3px;
        font-size: 13px;
        text-decoration: none;
        transition: all .25s ease;
    }

    .law-firm-profile-btn:hover {
        color: #fff;
        background: #126d76;
        border-color: #126d76;
    }

    .law-firm-profile-btn i {
        font-size: 9px;
    }

    /* =====================================================
       MOBILE
    ===================================================== */

    @media (max-width: 767.98px) {
        .featured-law-firms-section {
            padding: 12px 0 15px;
        }
        .law-firms-header {
            margin-bottom: 10px;
            gap: 6px;
        }
        .law-firms-title-icon {
            width: 28px;
            height: 28px;
            flex: 0 0 28px;
            margin-right: 6px;
            font-size: 13px;
        }

        .law-firms-title h3 {
            font-size: 14px;
        }

        .law-firms-view-all {
            font-size: 10px;
        }


        /* Mobile card */

        .featured-law-firms-slider .product-cart-wrap {
            padding: 3px;
        }
        .law-firm-card {
            min-height: 135px;

            padding: 8px;
        }
        .law-firm-main {
            gap: 7px;
        }

        .law-firm-logo {
            width: 100px;
            height: 40px;
            flex-basis: 38px;
        }
        .law-firm-logo img {
            width: 90px;
            height: 90px;
            padding: 10px;
        }
        .law-firm-name {
            font-size: 11px;
        }

        .law-firm-type,
        .law-firm-location,
        .law-firm-practice {
            font-size: 10px;
        }
        .law-firm-profile-btn {
            height: 27px;
            font-size: 10px;
        }
        .custom_mobile_btn{
            width: 80px !important;
        }

    }


    @media (max-width: 400px) {

        .law-firms-title h3 {
            font-size: 13px;
        }

        .law-firms-view-all {
            font-size: 10px;
        }

        .law-firms-title-icon {
            width: 26px;
            height: 26px;

            flex-basis: 26px;
        }
        .custom_mobile_btn{
            width: 80px !important;
        }
    }

</style>

<style>

    .featured-law-firms-carousel .slick-prev,
    .featured-law-firms-carousel .slick-next {
        width: 28px;
        height: 28px;

        z-index: 10;

        background: #fff;

        border: 1px solid #d8dee6;
        border-radius: 50%;

        box-shadow: 0 2px 5px rgba(0,0,0,.08);
    }

    .featured-law-firms-carousel .slick-prev {
        left: -10px;
    }

    .featured-law-firms-carousel .slick-next {
        right: -10px;
    }

    .featured-law-firms-carousel .slick-prev:before,
    .featured-law-firms-carousel .slick-next:before {
        display: none;
    }

    .featured-law-firms-carousel .slick-prev i,
    .featured-law-firms-carousel .slick-next i {
        color: #1B489D;
        font-size: 13px;
    }

    .featured-law-firms-carousel .slick-prev:hover,
    .featured-law-firms-carousel .slick-next:hover {
        background: #129AF7;
        border-color: #129AF7;
    }

    .featured-law-firms-carousel .slick-prev:hover i,
    .featured-law-firms-carousel .slick-next:hover i {
        color: #fff;
    }

</style>


<!-- ==========================================================
     FEATURED LAW FIRMS & CHAMBERS
=========================================================== -->

<div class="featured-law-firms-section">

    <div class="container">


        <!-- ==================================================
             HEADER
        =================================================== -->

        <div class="law-firms-header">


            <!-- LEFT TITLE -->

            <div class="law-firms-title">

                <div class="law-firms-title-icon">

                    <i class="fa fa-university"></i>

                </div>

                <h3>
                    legal Consultants
                </h3>

            </div>


            <!-- RIGHT VIEW ALL -->

            <a href="#" class="law-firms-view-all">

                <span>
                    View All Law Firms
                </span>

                <i class="fa fa-long-arrow-right"></i>

            </a>

        </div>



        <!-- ==================================================
             CAROUSEL
        =================================================== -->

        <div class="featured-law-firms-slider">


            <!-- Arrow -->
            <div
                class="slider-arrow slider-arrow-2"
                id="featured-law-firms-arrows">
            </div>


            <!-- SLIDER -->

            <div
                class="featured-law-firms-carousel"
                id="featured-law-firms-carousel">


                @foreach($doctors as $doctor)


                    <!-- ==================================================
                         LAW FIRM CARD
                    =================================================== -->

                    <div class="product-cart-wrap">


                        <div class="law-firm-card">


                            <!-- Firm Information -->

                            <div class="law-firm-main">


                                <!-- Logo -->

                                <div class="law-firm-logo">

                                    <img
                                        src="{{ asset('frontend/daripalla.png') }}"
                                        alt="Rahman & Associates"
                                    >

                                </div>


                                <!-- Information -->

                                <div class="law-firm-info">

                                    <h4 class="law-firm-name">
                                        Rahman &amp; Associates
                                    </h4>

                                    <div class="law-firm-type">
                                        Law Firm
                                    </div>

                                    <div class="law-firm-location">

                                        <i class="fa fa-map-marker"></i>

                                        <span>
                                            Dhaka
                                        </span>

                                    </div>

                                    <p class="law-firm-practice" style="margin-bottom:15px;">
                                        Corporate, Tax, Banking
                                    </p>

                                    <a
                                        href="#"
                                        class="law-firm-profile-btn custom_mobile_btn"
                                     style="width: 130px;">

                                        <span>
                                            View Profile
                                        </span>

                                        <i class="fa fa-long-arrow-right"></i>

                                    </a>

                                </div>

                            </div>


                            <!-- View Profile -->

                            


                        </div>


                    </div>


                @endforeach


            </div>

        </div>

    </div>

</div>

<script>
$(document).ready(function () {

    var $lawFirmCarousel = $('#featured-law-firms-carousel');

    if ($lawFirmCarousel.length && !$lawFirmCarousel.hasClass('slick-initialized')) {

        $lawFirmCarousel.slick({

            slidesToShow: 4,
            slidesToScroll: 1,

            autoplay: true,
            autoplaySpeed: 5000,

            arrows: true,
            dots: false,

            infinite: true,

            prevArrow:
                '<button type="button" class="slick-prev law-firm-prev">' +
                    '<i class="fa fa-angle-left"></i>' +
                '</button>',

            nextArrow:
                '<button type="button" class="slick-next law-firm-next">' +
                    '<i class="fa fa-angle-right"></i>' +
                '</button>',

            responsive: [

                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1
                    }
                },

                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },

                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },

                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }

            ]

        });

    }

});
</script>