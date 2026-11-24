@if(!empty(trim(strip_tags((string) $law_firm->chamber, '<img><iframe>'))))
<style>
    /* =========================
       HEADER
    ========================= */

    .law-title {
        text-align: center;
        margin-bottom: 3px;
    }

    .law-title h1 {
        margin: 0;
        font-size: 23px;
        font-weight: 700;
        letter-spacing: -1px;
        color: #12636c;
    }

    .law-subtitle {
        text-align: center;
        font-size: 17px;
        font-weight: 600;
        margin-bottom: 20px;
    }

    /* =========================
       ADDRESS SECTION
       (Admin editor-এর লেখায় এই ক্লাসগুলো আছে)
    ========================= */

    .address-column {
        position: relative;
        padding-left: 0px;
        min-height: 115px;
    }

    .address-title {
        font-size: 23px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .address-text {
        font-size: 17px;
        line-height: 1.45;
    }

    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 768px) {

        .law-title h1 {
            font-size: 25px;
        }

        .law-subtitle {
            font-size: 17px;
        }

        .address-wrapper {
            padding: 20px 15px;
        }

        .address-column {
            padding-left: 0px;
        }

        .address-column:first-child {
            border-right: none;
            border-bottom: 1px solid #ccc;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .address-title {
            font-size: 15px;
            margin-left: 5px;
        }

        .address-text {
            font-size: 15px;
        }
    }
</style>

<!-- Chamber & Office -->
<div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
    <div class="lpc-slide">

        <div class="lpc-card">

            <!-- PROFILE BODY -->

            <div class="lpc-body">

                <!-- HEADER -->
                <div class="law-title" style="text-align:left !important;">
                    <h1> <i class="fa fa-map-marker"></i> Chamber & Office</h1>
                </div>

                <div class="law-subtitle" style="text-align:left !important;">
                    Professional Legal Services
                    @if(!empty($law_firm->court_name))
                        | {{ $law_firm->court_name }}
                    @endif
                </div>

                <!-- ADDRESS (Admin-এর Chamber ট্যাব থেকে) -->
                <div class="address-wrapper">

                    <div class="row">

                        {!! $law_firm->chamber !!}

                        @if(!empty(trim(strip_tags((string) $law_firm->map, '<img><iframe>'))))
                        <div class="col-md-12" style="text-align:left;">
                            <a href="#law-firm-map" class="doctor-outline-btn" style="background-color: #153f70;color: #fff;">

                                <i class="fa fa-map-marker" style="color:#fff"></i>

                                <span>
                                    View on Map
                                </span>

                            </a>
                        </div>
                        @endif

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endif