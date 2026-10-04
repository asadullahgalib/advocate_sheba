<style>

    /* =========================================
       MAIN SECTION
    ========================================= */
    .legal-home-section {
        padding: 0px 0 15px;
        background: #f5f5f5;
        border-radius: 15px;
        margin-bottom: 15px;
    }

    .legal-home-section .card {
        height: 100%;
        padding: 20px 14px 15px;
        border: 1px solid #e8e8e8;
        border-radius: 10px;
        background: #fff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
    }


    /* =========================================
       SECTION TITLE
    ========================================= */
    .legal-section-title {
        margin-bottom: 25px;
    }

    .legal-section-title-inner {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 12px;
        width: 100%;
    }

    .legal-section-icon {
        flex: 0 0 45px;
        width: 45px;
        height: 45px;

        display: flex;
        align-items: center;
        justify-content: center;

        color: #fff;
        border-radius: 50%;

        font-size: 22px;
    }

    .youtube-section-icon {
        background: #ff0000;
    }

    .pdf-section-icon {
        background: #129AF7;
    }

    .legal-section-heading {
        margin: 0;
        padding: 0;
        color: #1B489D;
        font-size: 20px;
        line-height: 1.2;
        font-weight: 600;
        text-align: left;
    }

    .legal-section-heading span {
        display: block;
        margin-top: 3px;
        color: #111;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.4;
    }

    /* =========================================
       DOCUMENT CARD
    ========================================= */
    .document-item {
        text-align: center;
        margin-bottom: 0px;
        border: 1px solid #e7e0e0ba;
        padding: 7px 0px;
    }

    .document-link {
        display: block;
        text-decoration: none;
        color: inherit;
    }

    .document-icon-box {
        width: 82px;
        height: 82px;

        margin: 0 auto;

        display: flex;
        align-items: center;
        justify-content: center;

        border: 2px solid #8080807a;
        border-radius: 10px;

        background: #fff;

        transition: all 0.3s ease;
    }

    .document-icon-box i {
        color: #129AF7;
        font-size: 48px;
        transition: all 0.3s ease;
    }

    .document-link:hover .document-icon-box {
        border-color: #129AF7;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(18, 154, 247, 0.15);
    }

    .document-link:hover .document-icon-box i {
        transform: scale(1.08);
    }

    .document-title {
        margin-top: 8px;
        margin-bottom: 0;
        line-height: 1.25;
    }

    .document-title a {
        color: #111;
        font-size: 16px;
        font-weight: 500;
        text-decoration: none;
    }

    .document-link:hover .document-title a {
        color: #129AF7;
    }


    /* =========================================
       BOTTOM BUTTON
    ========================================= */
    .section-bottom-btn {
        margin-top: 5px;
        text-align: center;
    }

    .section-bottom-btn a {
        display: inline-block;

        padding: 7px 20px;

        color: #111;
        background: #fff;

        border: 1px solid #aaa;
        border-radius: 3px;

        font-size: 13px;
        text-decoration: none;

        transition: all 0.3s ease;
    }

    .section-bottom-btn a:hover {
        color: #fff;
        background: #129AF7;
        border-color: #129AF7;
    }


    /* =========================================
       MOBILE
       2 ITEMS PER ROW
    ========================================= */
    @media (max-width: 767.98px) {

        .legal-home-section {
            padding: 0px 0 10px;
            border-radius: 10px;
        }

        .legal-home-section .card {
            padding: 15px 8px 12px;
        }

        /*
         * IMPORTANT:
         * Title stays horizontal on mobile.
         * Icon LEFT + Text RIGHT.
         */
        .legal-section-title {
            margin-bottom: 20px;
        }

        .legal-section-title-inner {
            gap: 9px;
            align-items: center;
        }

        .legal-section-icon {
            flex: 0 0 42px;
            width: 42px;
            height: 42px;
            font-size: 20px;
        }

        .legal-section-heading {
            font-size: 17px;
        }

        .legal-section-heading span {
            font-size: 12px;
            margin-top: 2px;
        }

        /* Document */
        .document-icon-box {
            width: 65px;
            height: 65px;
        }

        .document-icon-box i {
            font-size: 38px;
        }

        .document-title {
            margin-top: 6px;
        }

        .document-title a {
            font-size: 14px;
        }

    }


    /* =========================================
       VERY SMALL MOBILE
    ========================================= */
    @media (max-width: 400px) {

        .legal-home-section .card {
            padding-left: 5px;
            padding-right: 5px;
        }

        .legal-section-heading {
            font-size: 16px;
        }

        .legal-section-heading span {
            font-size: 11px;
        }

        .legal-section-icon {
            flex-basis: 40px;
            width: 40px;
            height: 40px;
        }

        .video-title a {
            font-size: 13px;
        }

        .document-title a {
            font-size: 13px;
        }

    }

</style>


<!-- =========================================
     MAIN SECTION
========================================= -->
<div class="page-content legal-home-section">

    <div class="container">
        <div class="flex justify-between items-center mt-2">
          <div class="my-4">
            <h2
              id="hospitals-by-location"
              class="text-lg md:text-xl font-semibold text-gray-800 dark:text-gray-100"
            >
              Legal Documents & Forms
            </h2>
            <p class="text-sm text-gray-600 dark:text-gray-400">
              বিভিন্ন আইনি ডকুমেন্ট ও ফর্ম ডাউনলোড করুন
            </p>
          </div>
          <a
            href="#"
            aria-label=""
            class="flex items-center gap-1 text-[#008080] text-sm font-semibold hover:underline transition"
          >
            View All
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="18"
              height="18"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-chevron-right"
              aria-hidden="true"
            >
              <path d="m9 18 6-6-6-6"></path>
            </svg>
          </a>
        </div>

        <div class="row g-3">

            <!-- =====================================
                 RIGHT SIDE - LEGAL DOCUMENTS
            ====================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                <div class="card">

                    <!-- Documents -->
                    <div class="row g-3">


                        <!-- Document 01 -->
                        <article class="col-xl-2 col-lg-2 col-md-2 col-6 document-item">

                            <a href="{{route('legal.form')}}" class="document-link">

                                <div class="document-icon-box">
                                    <i class="fa fa-file-pdf-o"></i>
                                </div>

                                <h4 class="document-title">
                                    <a href="{{route('legal.form')}}">
                                        Legal Forms
                                    </a>
                                </h4>

                            </a>

                        </article>


                        <!-- Document 02 -->
                        <article class="col-xl-2 col-lg-2 col-md-2 col-6 document-item">

                            <a href="{{route('legal.form')}}" class="document-link">

                                <div class="document-icon-box">
                                    <i class="fa fa-file-pdf-o"></i>
                                </div>

                                <h4 class="document-title">
                                    <a href="#">
                                        Applications
                                    </a>
                                </h4>

                            </a>

                        </article>


                        <!-- Document 03 -->
                        <article class="col-xl-2 col-lg-2 col-md-2 col-6 document-item">

                            <a href="{{route('legal.form')}}" class="document-link">

                                <div class="document-icon-box">
                                    <i class="fa fa-file-pdf-o"></i>
                                </div>

                                <h4 class="document-title">
                                    <a href="#">
                                        Affidavit Info
                                    </a>
                                </h4>

                            </a>

                        </article>


                        <!-- Document 04 -->
                        <article class="col-xl-2 col-lg-2 col-md-2 col-6 document-item">

                            <a href="{{route('legal.form')}}" class="document-link">

                                <div class="document-icon-box">
                                    <i class="fa fa-file-pdf-o"></i>
                                </div>

                                <h4 class="document-title">
                                    <a href="#">
                                        Court Forms
                                    </a>
                                </h4>

                            </a>

                        </article>


                        <!-- Document 05 -->
                        <article class="col-xl-2 col-lg-2 col-md-2 col-6 document-item">

                            <a href="{{route('legal.form')}}" class="document-link">

                                <div class="document-icon-box">
                                    <i class="fa fa-file-pdf-o"></i>
                                </div>

                                <h4 class="document-title">
                                    <a href="#">
                                        Govt. Forms
                                    </a>
                                </h4>

                            </a>

                        </article>


                        <!-- Document 06 -->
                        <article class="col-xl-2 col-lg-2 col-md-2 col-6 document-item">

                            <a href="{{route('legal.form')}}" class="document-link">

                                <div class="document-icon-box">
                                    <i class="fa fa-file-pdf-o"></i>
                                </div>

                                <h4 class="document-title">
                                    <a href="#">
                                        Document Guide
                                    </a>
                                </h4>

                            </a>

                        </article>


                        <!-- Document 07 -->
                        <article class="col-xl-2 col-lg-2 col-md-2 col-6 document-item">

                            <a href="{{route('legal.form')}}" class="document-link">

                                <div class="document-icon-box">
                                    <i class="fa fa-file-pdf-o"></i>
                                </div>

                                <h4 class="document-title">
                                    <a href="#">
                                        Legal Forms
                                    </a>
                                </h4>

                            </a>

                        </article>


                        <!-- Document 08 -->
                        <article class="col-xl-2 col-lg-2 col-md-2 col-6 document-item">

                            <a href="{{route('legal.form')}}" class="document-link">

                                <div class="document-icon-box">
                                    <i class="fa fa-file-pdf-o"></i>
                                </div>

                                <h4 class="document-title">
                                    <a href="#">
                                        Applications
                                    </a>
                                </h4>

                            </a>

                        </article>

                        <!-- Document 09 -->
                        <article class="col-xl-2 col-lg-2 col-md-2 col-6 document-item">

                            <a href="{{route('legal.form')}}" class="document-link">

                                <div class="document-icon-box">
                                    <i class="fa fa-file-pdf-o"></i>
                                </div>

                                <h4 class="document-title">
                                    <a href="#">
                                        Applications
                                    </a>
                                </h4>

                            </a>

                        </article>

                        <!-- Document 10 -->
                        <article class="col-xl-2 col-lg-2 col-md-2 col-6 document-item">

                            <a href="{{route('legal.form')}}" class="document-link">

                                <div class="document-icon-box">
                                    <i class="fa fa-file-pdf-o"></i>
                                </div>

                                <h4 class="document-title">
                                    <a href="#">
                                        Applications
                                    </a>
                                </h4>

                            </a>

                        </article>

                        <!-- Document 11 -->
                        <article class="col-xl-2 col-lg-2 col-md-2 col-6 document-item">

                            <a href="{{route('legal.form')}}" class="document-link">

                                <div class="document-icon-box">
                                    <i class="fa fa-file-pdf-o"></i>
                                </div>

                                <h4 class="document-title">
                                    <a href="#">
                                        Applications
                                    </a>
                                </h4>

                            </a>

                        </article>

                        <!-- Document 12 -->
                        <article class="col-xl-2 col-lg-2 col-md-2 col-6 document-item">

                            <a href="{{route('legal.form')}}" class="document-link">

                                <div class="document-icon-box">
                                    <i class="fa fa-file-pdf-o"></i>
                                </div>

                                <h4 class="document-title">
                                    <a href="#">
                                        Applications
                                    </a>
                                </h4>

                            </a>

                        </article>


                    </div>

                </div>

            </div>


        </div>

    </div>

</div>

<style>
        /* =====================================
       LEGAL ARTICLES MAIN SECTION
    ===================================== */

    .legal-articles-section {
        background: #f7f8fa;
        padding: 30px 20px 25px;
    }

    .page-item.active .page-link {
        z-index: 3;
        color: #fff;
        background-color: #000 !important;
        border-color: #000 !important;
    }

    .profile_btn{
        margin-bottom: 10px;
    }
    .profile_btn button{
        background: #E3E8FB;
        font-size: 13px;
        font-weight: bold;
        border: 1px solid #E3E8FB;
        border-radius: 5px;
        margin: 0px 2px;
        margin-bottom: 10px;
    }


    /* =====================================
       MAIN HEADER
    ===================================== */

    .legal-main-header {
        margin-bottom: 20px;
    }

    .legal-title-area {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .legal-main-icon {
        width: 105px;
        height: 105px;
        border-radius: 15px;
        background: #063d31;

        display: flex;
        align-items: center;
        justify-content: center;

        box-shadow: 0 5px 15px rgba(0,0,0,0.12);
    }

    .legal-main-icon i {
        font-size: 55px;
        color: #c59a43;
    }

    .legal-title-area h2 {
        margin: 0;
        color: #07382d;
        font-size: 42px;
        font-weight: 700;
    }

    .legal-title-area p {
        margin: 5px 0 0;
        font-size: 22px;
        font-weight: 500;
        color: #8b6b2f;
    }


    /* =====================================
       SECTION HEADING
    ===================================== */

    .section-heading {
        display: flex;
        justify-content: space-between;
        align-items: center;

        margin-bottom: 18px;
    }

    .section-heading-left {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .section-heading-left h3 {
        margin: 0;
        font-size: 25px;
        font-weight: 700;
        color: #07382d;
    }

    .section-small-icon {
        width: 42px;
        height: 42px;

        background: #07382d;
        color: #c59a43;

        border-radius: 7px;

        display: flex;
        align-items: center;
        justify-content: center;
    }

    .topic-icon-advocate img{
        width: 65px;
    }

    .section-small-icon i {
        font-size: 20px;
    }


    /* =====================================
       VIEW ALL BUTTON
    ===================================== */

    .view-all-btn {
        text-decoration: none;

        color: #07382d;
        font-size: 16px;
        font-weight: 600;

        border: 1px solid #bfc8c4;
        border-radius: 10px;

        padding: 10px 18px;

        transition: 0.3s;
    }

    .view-all-btn i {
        margin-left: 10px;
    }

    .view-all-btn:hover {
        background: #07382d;
        color: #ffffff;
    }


    /* =====================================
       TOPIC GRID
    ===================================== */

    .legal-topics-row-advocate {
        margin-left: -8px;
        margin-right: -8px;
    }

    .legal-topics-row-advocate > div {
        padding-left: 8px;
        padding-right: 8px;
        margin-bottom: 16px;
    }


    /* =====================================
       CUSTOM 5 COLUMN
    ===================================== */

    @media (min-width: 1200px) {

        .col-xl-5-custom2 {
            width: 25%;
            flex: 0 0 25%;
        }

    }


    /* =====================================
       LEGAL TOPIC CARD
    ===================================== */

    .legal-topic-card-advocate {
        height: 100%;

        background: #ffffff;

        border: 1px solid #e2e5e5;

        border-radius: 14px;

        text-align: center;

        padding: 22px 15px 16px;

        box-shadow: 0 4px 12px rgba(0,0,0,0.06);

        transition: 0.3s;

        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .legal-topic-card-advocate:hover {
        transform: translateY(-5px);

        box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    }


    /* =====================================
       TOPIC ICON
    ===================================== */

    .topic-icon-advocate {
        width: 100px;
        height: 100px;

        border-radius: 50%;

        background: #E3E8FB;

        display: flex;
        align-items: center;
        justify-content: center;

        margin-bottom: 15px;
    }

    .topic-icon-advocate i {
        font-size: 55px;
        color: #07382d;
    }


    /* =====================================
       TOPIC TEXT
    ===================================== */

    .legal-topic-card-advocate h4 {
        font-size: 20px;
        font-weight: 700;

        color: #155B30;

        margin-bottom: 10px;

        line-height: 1.25;
    }

    .legal-topic-card-advocate p {
        color: #000;
        font-size: 13px;
        line-height: 1.7;
        margin-bottom: 15px;
        flex-grow: 1;
        font-weight: 600;
    }

    .legal-topic-card-advocate a {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 12px;
        width: 100%;
        /* border-top: 1px solid #0e1110; */
        /* padding-top: 15px; */
        text-decoration: none;
        color: #07382d;
        font-size: 15px;
        font-weight: 600;
        border: 1px solid #155B30;
        padding: 5px;
        max-width: 100px;
        border-radius: 10px;
    }

    .legal-topic-card-advocate a i {
        transition: 0.3s;
    }

    .legal-topic-card-advocate a:hover i {
        transform: translateX(5px);
    }


    /* =====================================
       FEATURED ARTICLES
    ===================================== */

    .featured-heading {
        margin-top: 28px;
    }

    .featured-star {
        color: #c59a43;
        font-size: 30px;
    }

    .view-all-articles {
        color: #07382d;

        text-decoration: none;

        font-size: 16px;

        font-weight: 600;
    }

    .view-all-articles i {
        margin-left: 8px;
    }


    /* =====================================
       FEATURED ARTICLE CARD
    ===================================== */

    .featured-articles-row {
        margin-left: -10px;
        margin-right: -10px;
    }

    .featured-articles-row > div {
        padding-left: 10px;
        padding-right: 10px;

        margin-bottom: 20px;
    }

    .featured-article-card {
        background: #ffffff;

        border-radius: 12px;

        overflow: hidden;

        border: 1px solid #e2e5e5;

        box-shadow: 0 4px 12px rgba(0,0,0,0.06);

        height: 100%;

        transition: 0.3s;
    }

    .featured-article-card:hover {
        transform: translateY(-5px);

        box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    }


    /* =====================================
       ARTICLE IMAGE
    ===================================== */

    .article-image {
        position: relative;

        height: 170px;

        overflow: hidden;
    }

    .article-image img {
        width: 100%;
        height: 100%;

        object-fit: cover;

        transition: 0.4s;
    }

    .featured-article-card:hover .article-image img {
        transform: scale(1.08);
    }


    /* =====================================
       ARTICLE CATEGORY
    ===================================== */

    .article-category {
        position: absolute;

        left: 12px;
        bottom: 10px;

        background: #07634e;

        color: #ffffff;

        padding: 5px 12px;

        border-radius: 5px;

        font-size: 12px;

        font-weight: 600;
    }


    /* =====================================
       ARTICLE CONTENT
    ===================================== */

    .article-content {
        padding: 17px 15px;
    }

    .article-content h4 {
        font-size: 18px;

        line-height: 1.45;

        font-weight: 700;

        color: #1d2825;

        min-height: 80px;

        margin-bottom: 15px;
    }


    /* =====================================
       ARTICLE META
    ===================================== */

    .article-meta {
        display: flex;

        justify-content: space-between;

        align-items: center;

        margin-bottom: 18px;

        color: #69736f;

        font-size: 12px;
    }

    .article-meta i {
        margin-right: 4px;
    }


    /* =====================================
       READ MORE
    ===================================== */

    .read-more {
        color: #07382d;

        text-decoration: none;

        font-size: 15px;

        font-weight: 600;
    }

    .read-more i {
        margin-left: 10px;

        transition: 0.3s;
    }

    .read-more:hover {
        color: #0b805f;
    }

    .read-more:hover i {
        transform: translateX(5px);
    }


    /* =====================================
       TABLET RESPONSIVE
    ===================================== */

    @media (max-width: 991px) {

        .legal-title-area h2 {
            font-size: 34px;
        }

        .legal-title-area p {
            font-size: 18px;
        }

    }


    /* =====================================
       MOBILE RESPONSIVE
    ===================================== */

    @media (max-width: 575px) {

        .legal-articles-section {
            padding: 20px 8px 30px;
        }


        /* Main Header */

        .legal-main-icon {
            width: 70px;
            height: 70px;
            border-radius: 12px;
        }

        .legal-main-icon i {
            font-size: 35px;
        }

        .legal-title-area {
            gap: 12px;
        }

        .legal-title-area h2 {
            font-size: 25px;
        }

        .legal-title-area p {
            font-size: 14px;
            margin-top: 2px;
        }


        /* Heading */

        .section-heading-left h3 {
            font-size: 20px;
        }

        .section-small-icon {
            width: 35px;
            height: 35px;
        }

        .view-all-btn {
            padding: 7px 10px;
            font-size: 12px;
        }


        /* Mobile Topic Cards */

        .legal-topics-row-advocate {
            margin-left: -3px;
            margin-right: -3px;
        }

        .legal-topics-row-advocate > div {
            padding-left: 3px;
            padding-right: 3px;
            margin-bottom: 6px;
        }

        .legal-topic-card-advocate {
            padding: 15px 8px 12px;
            border-radius: 10px;
        }


        .topic-icon-advocate {
            width: 65px;
            height: 65px;
            margin-bottom: 10px;
        }

        .topic-icon-advocate img{
            width: 42px !important;
        }

        .topic-icon-advocate i {
            font-size: 34px;
        }


        .legal-topic-card-advocate h4 {
            font-size: 16px;
            margin-bottom: 7px;
        }

        .legal-topic-card-advocate p {
            color: #000;
            font-size: 11px;
            line-height: 1.5;
            margin-bottom: 15px;
            flex-grow: 1;
            font-weight: 600;
        }

        .legal-topic-card-advocate a {
            font-size: 12px;
            gap: 6px;
            padding-top: 10px;
        }


        /* Featured Header */

        .featured-star {
            font-size: 22px;
        }

        .view-all-articles {
            font-size: 12px;
        }


        /* Featured Article */

        .featured-articles-row > div {
            padding-left: 5px;
            padding-right: 5px;
        }

        .article-image {
            height: 130px;
        }

        .article-content {
            padding: 12px 10px;
        }

        .article-content h4 {
            font-size: 15px;
            min-height: auto;
            margin-bottom: 12px;
        }

        .article-meta {
            font-size: 10px;
            gap: 5px;
            flex-wrap: wrap;
        }

        .read-more {
            font-size: 13px;
        }

    }
</style>