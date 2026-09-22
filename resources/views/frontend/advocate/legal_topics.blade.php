<style>
    /* ==============================
       Video / Health Topic Thumbnail
       ============================== */

    .health-topic-thumb {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        width: 100%;
    }

    .health-topic-thumb img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 15px;
        transition: transform 0.4s ease;
    }

    /* ==============================
       TOP DATE BADGE
       ============================== */

    .topic-date-badge {
        position: absolute;
        top: 10px;
        left: 10px;
        z-index: 5;

        background: rgba(0, 0, 0, 0.90);
        color: #fff;

        padding: 6px 10px;
        border-radius: 6px;

        font-size: 13px;
        font-weight: 600;

        display: flex;
        align-items: center;
        gap: 6px;

        line-height: 1;
    }

    .topic-date-badge i {
        color: #fff;
        font-size: 14px;
    }


    /* ==============================
       BOTTOM SPECIALIST BADGE
       ============================== */

    .topic-specialist-badge {
        position: absolute;
        left: 10px;
        bottom: 10px;
        z-index: 5;

        background: #155B30;
        color: #fff;

        padding: 7px 13px;
        border-radius: 6px;

        font-size: 14px;
        font-weight: 600;

        display: flex;
        align-items: center;
        gap: 7px;

        line-height: 1;
    }

    .topic-specialist-badge i {
        font-size: 13px;
    }


    /* ==============================
       HOVER OVERLAY
       ============================== */

    .topic-hover-overlay {
        position: absolute;
        top: 0;
        left: 0;

        width: 100%;
        height: 100%;

        background: rgba(0, 0, 0, 0.35);

        display: flex;
        align-items: center;
        justify-content: center;

        opacity: 0;
        visibility: hidden;

        transition: all 0.3s ease;

        z-index: 4;
    }

    .health-topic-thumb:hover .topic-hover-overlay {
        opacity: 1;
        visibility: visible;
    }

    .health-topic-thumb:hover .topic-youtube-icon {
        transform: scale(1);
    }


    /* ==============================
       IMAGE HOVER ZOOM
       ============================== */

    .health-topic-thumb:hover img {
        transform: scale(1.04);
    }


    /* ==============================
       MOBILE RESPONSIVE
       ============================== */

    @media (max-width: 575px) {

        .topic-date-badge {
            top: 8px;
            left: 8px;
            padding: 5px 8px;
            font-size: 11px;
        }

        .topic-specialist-badge {
            left: 8px;
            bottom: 8px;
            padding: 6px 10px;
            font-size: 12px;
        }

        .topic-youtube-icon {
            width: 48px;
            height: 48px;
        }

        .topic-youtube-icon i {
            font-size: 21px;
        }
    }
</style>

<div class="page-content mb-50" style="margin-top: 15px;    margin-bottom: 0px !important;">

    <div class="container">

        <div class="section-title">

            <div class="title text-center">
                <h3 style="color: #1B489D;font-size: 20px;text-align: left;">
                    Latest Legal Topics
                    <br>
                    <span style="color: #000;font-size: 13px;">Your Guide to Better Justice</span>
                </h3>
            </div>

            <div class="title text-center mobile_view_all">
                <h3 style="color: #1B489D;font-size: 20px;">
                    <a href="#">
                        View all
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </h3>
            </div>

        </div>


        <div class="row">

            <div class="col-lg-12">

                <div class="loop-grid">

                    <div class="row">


                        <!-- =====================================
                             VIDEO / TOPIC 01
                             ===================================== -->

                        <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">

                            <div class="post-thumb">

                                <a href="#">

                                    <div class="health-topic-thumb">

                                        <!-- Image -->
                                        <img
                                            src="{{ asset('frontend/video-4.jpg') }}"
                                            alt="Cardiologist in Bangladesh"
                                        >


                                        <!-- TOP DATE -->
                                        <div class="topic-date-badge">

                                            <i class="fa fa-calendar"></i>

                                            <span>
                                                Aug 12, 2026
                                            </span>

                                        </div>


                                        <!-- BOTTOM SPECIALIST -->
                                        <div class="topic-specialist-badge">

                                            <i class="fa fa-tag"></i>

                                            <span>
                                                Land Specialist
                                            </span>

                                        </div>

                                    </div>

                                </a>

                            </div>


                            <div class="entry-content-2">

                                <h4
                                    class="post-title mb-15"
                                    style="font-size:17px;"
                                >

                                    <a href="#">

                                        জমি জমার আইনি স্মস্যাঃ সমাধান ও প্রতিকার

                                    </a>

                                </h4>

                            </div>

                        </article>



                        <!-- =====================================
                             VIDEO / TOPIC 02
                             ===================================== -->

                        <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">

                            <div class="post-thumb">

                                <a href="#">

                                    <div class="health-topic-thumb">

                                        <!-- Image -->
                                        <img
                                            src="{{ asset('frontend/video-3.jpg') }}"
                                            alt="Endocrinologist in Bangladesh"
                                        >


                                        <!-- TOP DATE -->
                                        <div class="topic-date-badge">

                                            <i class="fa fa-calendar"></i>

                                            <span>
                                                Aug 12, 2026
                                            </span>

                                        </div>


                                        <!-- BOTTOM SPECIALIST -->
                                        <div class="topic-specialist-badge">

                                            <i class="fa fa-tag"></i>

                                            <span>
                                                Civil Specialist
                                            </span>

                                        </div>

                                    </div>

                                </a>

                            </div>


                            <div class="entry-content-2">

                                <h4
                                    class="post-title mb-15"
                                    style="font-size:17px;"
                                >

                                    <a href="#">

                                        পারিবারিক বিরোধঃ আইনি ও সালিশ

                                    </a>

                                </h4>

                            </div>

                        </article>



                        <!-- =====================================
                             VIDEO / TOPIC 03
                             ===================================== -->

                        <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">

                            <div class="post-thumb">

                                <a href="#">

                                    <div class="health-topic-thumb">

                                        <!-- Image -->
                                        <img
                                            src="{{ asset('frontend/video-1.jpg') }}"
                                            alt="Chest Specialist in Bangladesh"
                                        >


                                        <!-- TOP DATE -->
                                        <div class="topic-date-badge">

                                            <i class="fa fa-calendar"></i>

                                            <span>
                                                Aug 12, 2026
                                            </span>

                                        </div>


                                        <!-- BOTTOM SPECIALIST -->
                                        <div class="topic-specialist-badge">

                                            <i class="fa fa-tag"></i>

                                            <span>
                                                Criminal Specialist
                                            </span>

                                        </div>

                                    </div>

                                </a>

                            </div>


                            <div class="entry-content-2">

                                <h4
                                    class="post-title mb-15"
                                    style="font-size:17px;"
                                >

                                    <a href="#">

                                        অপরাধঃ আইনি ও প্রতিকার

                                    </a>

                                </h4>

                            </div>

                        </article>



                        <!-- =====================================
                             VIDEO / TOPIC 04
                             ===================================== -->

                        <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">

                            <div class="post-thumb">

                                <a href="#">

                                    <div class="health-topic-thumb">

                                        <!-- Image -->
                                        <img
                                            src="{{ asset('frontend/video-2.jpg') }}"
                                            alt="Specialist Doctor"
                                        >


                                        <!-- TOP DATE -->
                                        <div class="topic-date-badge">

                                            <i class="fa fa-calendar"></i>

                                            <span>
                                                Aug 12, 2026
                                            </span>

                                        </div>


                                        <!-- BOTTOM SPECIALIST -->
                                        <div class="topic-specialist-badge">

                                            <i class="fa fa-tag"></i>

                                            <span>
                                                Civil Specialist
                                            </span>

                                        </div>

                                    </div>

                                </a>

                            </div>


                            <div class="entry-content-2">

                                <h4
                                    class="post-title mb-15"
                                    style="font-size:17px;"
                                >

                                    <a href="#">

                                        জমি জমার আইনি স্মস্যাঃ সমাধান ও প্রতিকার

                                    </a>

                                </h4>

                            </div>

                        </article>


                    </div>

                </div>

            </div>

        </div>

    </div>

</div>