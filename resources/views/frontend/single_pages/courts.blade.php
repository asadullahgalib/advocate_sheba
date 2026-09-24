@extends('frontend.layouts.master')
@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/legal_information.css')}}">

<section class="legal-directory-section">

    <div class="container">

        <!-- =====================================
             COURT DIRECTORY
        ====================================== -->

        <div class="directory-box court-directory-box">

            <div class="section-heading court-heading">
                <h2>Court & Jurisdictions</h2>
                <span></span>
            </div>


            <div class="row justify-content-center">

                <!-- Card 1 -->
                <div class="col-6 col-md-3">

                    <a href="{{route('supreme.court')}}" class="directory-card court-card directory-card2">

                        <div class="directory-icon">
                            <i class="bi bi-bank"></i>
                        </div>

                        <h3>
                            Supreme<br>
                            Court
                        </h3>

                        <div class="title-line"></div>

                        <div class="card-bottom">
                            <span>View Details</span>
                            <i class="bi bi-chevron-right"></i>
                        </div>

                    </a>

                </div>


                <!-- Card 2 -->
                <div class="col-6 col-md-3">

                    <a href="{{route('highcourt.division')}}" class="directory-card court-card directory-card2">

                        <div class="directory-icon">
                            <i class="bi bi-buildings"></i>
                        </div>

                        <h3>
                            High Court<br>
                            Division
                        </h3>

                        <div class="title-line"></div>

                        <div class="card-bottom">
                            <span>View Details</span>
                            <i class="bi bi-chevron-right"></i>
                        </div>

                    </a>

                </div>


                <!-- Card 3 -->
                <div class="col-6 col-md-3">

                    <a href="{{route('district.court')}}" class="directory-card court-card directory-card2">

                        <div class="directory-icon">
                            <i class="bi bi-bank2"></i>
                        </div>

                        <h3>
                            District<br>
                            Courts
                        </h3>

                        <div class="title-line"></div>

                        <div class="card-bottom">
                            <span>View Details</span>
                            <i class="bi bi-chevron-right"></i>
                        </div>

                    </a>

                </div>


                <!-- Card 4 -->
                <div class="col-6 col-md-3">

                    <a href="{{route('tribunals.courts')}}" class="directory-card court-card directory-card2">

                        <div class="directory-icon">
                            <i class="bi bi-file-earmark-check"></i>
                        </div>

                        <h3>
                            Tribunals
                            <br>
                            ....
                        </h3>

                        <div class="title-line"></div>

                        <div class="card-bottom">
                            <span>View Details</span>
                            <i class="bi bi-chevron-right"></i>
                        </div>

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ============================
     LEGAL ARTICLES SECTION START
============================= -->

<section class="legal-articles-section">

    <div class="container-fluid">

        <!-- ============================
             LEGAL ARTICLES HEADER
        ============================= -->

        <div class="legal-main-header">

            <div class="legal-title-area">

                <div class="legal-main-icon">
                    <i class="fa-solid fa-scale-balanced"></i>
                </div>

                <div>
                    <h2>Legal Services</h2>
                    <p>Explore Legal Knowledge by Topic</p>
                </div>

            </div>

        </div>


        <!-- ============================
             LEGAL TOPICS HEADER
        ============================= -->

        <div class="section-heading d-flex justify-content-between align-items-center">

            <div class="section-heading-left">

                <div class="section-small-icon">
                    <i class="fa-solid fa-book"></i>
                </div>

                <h3>Legal Topics</h3>

            </div>


            <a href="#" class="view-all-btn">
                View All Topics
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>


        <!-- ============================
             LEGAL TOPICS CARDS
        ============================= -->

        <div class="row legal-topics-row">


            <!-- Criminal Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="legal-topic-card">

                    <div class="topic-icon">
                        <i class="fa-solid fa-handcuffs"></i>
                    </div>

                    <h4>Criminal Law</h4>

                    <p>
                        FIR, arrest, bail, trial,
                        charges and your rights.
                    </p>

                    <a href="#">
                        Explore Articles
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Civil Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="legal-topic-card">

                    <div class="topic-icon">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>

                    <h4>Civil Law</h4>

                    <p>
                        Suits, contracts, property
                        disputes and remedies.
                    </p>

                    <a href="#">
                        Explore Articles
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Family Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="legal-topic-card">

                    <div class="topic-icon">
                        <i class="fa-solid fa-people-roof"></i>
                    </div>

                    <h4>Family Law</h4>

                    <p>
                        Marriage, divorce, custody,
                        maintenance and more.
                    </p>

                    <a href="#">
                        Explore Articles
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Land Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="legal-topic-card">

                    <div class="topic-icon">
                        <i class="fa-solid fa-house"></i>
                    </div>

                    <h4>Land Law</h4>

                    <p>
                        Land documents, mutation,
                        ownership and disputes.
                    </p>

                    <a href="#">
                        Explore Articles
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Labour Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="legal-topic-card">

                    <div class="topic-icon">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>

                    <h4>Labour Law</h4>

                    <p>
                        Employment, wages, work
                        rights and disputes.
                    </p>

                    <a href="#">
                        Explore Articles
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Company & Corporate Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="legal-topic-card">

                    <div class="topic-icon">
                        <i class="fa-solid fa-building"></i>
                    </div>

                    <h4>Company &<br>Corporate Law</h4>

                    <p>
                        Companies Act, compliance,
                        contracts and governance.
                    </p>

                    <a href="#">
                        Explore Articles
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Cyber Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="legal-topic-card">

                    <div class="topic-icon">
                        <i class="fa-solid fa-laptop"></i>
                    </div>

                    <h4>Cyber Law</h4>

                    <p>
                        Cyber crimes, digital rights,
                        data protection and more.
                    </p>

                    <a href="#">
                        Explore Articles
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Consumer Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="legal-topic-card">

                    <div class="topic-icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>

                    <h4>Consumer Law</h4>

                    <p>
                        Consumer rights, unfair
                        practices and legal remedies.
                    </p>

                    <a href="#">
                        Explore Articles
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Tax Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="legal-topic-card">

                    <div class="topic-icon">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </div>

                    <h4>Tax Law</h4>

                    <p>
                        Income tax, VAT, tax
                        planning and compliance.
                    </p>

                    <a href="#">
                        Explore Articles
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Islamic Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="legal-topic-card">

                    <div class="topic-icon">
                        <i class="fa-solid fa-mosque"></i>
                    </div>

                    <h4>Islamic Law</h4>

                    <p>
                        Islamic inheritance, Waqf,
                        marriage and other matters.
                    </p>

                    <a href="#">
                        Explore Articles
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>


        </div>


        <!-- ============================
             FEATURED ARTICLES HEADER
        ============================= -->

        <div class="section-heading featured-heading">

            <div class="section-heading-left">

                <div class="featured-star">
                    <i class="fa-solid fa-star"></i>
                </div>

                <h3>Legal Articles</h3>

            </div>


            <a href="#" class="view-all-articles">
                View All Articles
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>


        <!-- ============================
             FEATURED ARTICLES
        ============================= -->

        <div class="row featured-articles-row">


            <!-- Article 1 -->

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">

                <div class="featured-article-card">

                    <div class="article-image">

                        <img src="{{asset('frontend/f1.jpg')}}" alt="Criminal Law">

                        <span class="article-category">
                            Criminal Law
                        </span>

                    </div>


                    <div class="article-content">

                        <h4>
                            What Are Your Rights
                            When You Are Arrested?
                        </h4>


                        <div class="article-meta">

                            <span>
                                <i class="fa-regular fa-calendar"></i>
                                May 4, 2024
                            </span>

                            <span>
                                <i class="fa-regular fa-eye"></i>
                                1.2K Views
                            </span>

                        </div>


                        <a href="{{route('legal.article.details')}}" class="read-more">
                            Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Article 2 -->

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">

                <div class="featured-article-card">

                    <div class="article-image">

                        <img src="{{asset('frontend/f2.jpg')}}" alt="Land Law">

                        <span class="article-category">
                            Land Law
                        </span>

                    </div>


                    <div class="article-content">

                        <h4>
                            What to Check Before
                            Buying a Land?
                        </h4>


                        <div class="article-meta">

                            <span>
                                <i class="fa-regular fa-calendar"></i>
                                Apr 30, 2024
                            </span>

                            <span>
                                <i class="fa-regular fa-eye"></i>
                                980 Views
                            </span>

                        </div>


                        <a href="{{route('legal.article.details')}}" class="read-more">
                            Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Article 3 -->

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">

                <div class="featured-article-card">

                    <div class="article-image">

                        <img src="{{asset('frontend/f3.jpg')}}" alt="Family Law">

                        <span class="article-category">
                            Family Law
                        </span>

                    </div>


                    <div class="article-content">

                        <h4>
                            What is the Legal Process
                            of Divorce in Bangladesh?
                        </h4>


                        <div class="article-meta">

                            <span>
                                <i class="fa-regular fa-calendar"></i>
                                May 1, 2024
                            </span>

                            <span>
                                <i class="fa-regular fa-eye"></i>
                                1.5K Views
                            </span>

                        </div>


                        <a href="{{route('legal.article.details')}}" class="read-more">
                            Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- Article 4 -->

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">

                <div class="featured-article-card">

                    <div class="article-image">

                        <img src="{{asset('frontend/f4.jpg')}}" alt="Corporate Law">

                        <span class="article-category">
                            Corporate Law
                        </span>

                    </div>


                    <div class="article-content">

                        <h4>
                            Steps to Register a Private
                            Limited Company in Bangladesh
                        </h4>


                        <div class="article-meta">

                            <span>
                                <i class="fa-regular fa-calendar"></i>
                                Apr 28, 2024
                            </span>

                            <span>
                                <i class="fa-regular fa-eye"></i>
                                860 Views
                            </span>

                        </div>


                        <a href="{{route('legal.article.details')}}" class="read-more">
                            Read More
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            </div>


        </div>

    </div>

</section>


<!-- ============================
     LEGAL ARTICLES SECTION END
    ============================= -->

    <style>
        /* =====================================
       LEGAL ARTICLES MAIN SECTION
    ===================================== */

    .legal-articles-section {
        background: #f7f8fa;
        padding: 30px 20px 40px;
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

    .legal-topics-row {
        margin-left: -8px;
        margin-right: -8px;
    }

    .legal-topics-row > div {
        padding-left: 8px;
        padding-right: 8px;
        margin-bottom: 16px;
    }


    /* =====================================
       CUSTOM 5 COLUMN
    ===================================== */

    @media (min-width: 1200px) {

        .col-xl-5-custom {
            width: 20%;
            flex: 0 0 20%;
        }

    }


    /* =====================================
       LEGAL TOPIC CARD
    ===================================== */

    .legal-topic-card {
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

    .legal-topic-card:hover {
        transform: translateY(-5px);

        box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    }


    /* =====================================
       TOPIC ICON
    ===================================== */

    .topic-icon {
        width: 100px;
        height: 100px;

        border-radius: 50%;

        background: #f0f3f2;

        display: flex;
        align-items: center;
        justify-content: center;

        margin-bottom: 15px;
    }

    .topic-icon i {
        font-size: 55px;
        color: #07382d;
    }


    /* =====================================
       TOPIC TEXT
    ===================================== */

    .legal-topic-card h4 {
        font-size: 20px;
        font-weight: 700;

        color: #152b27;

        margin-bottom: 10px;

        line-height: 1.25;
    }

    .legal-topic-card p {
        color: #52605c;

        font-size: 14px;

        line-height: 1.7;

        margin-bottom: 15px;

        flex-grow: 1;
    }

    .legal-topic-card a {
        display: flex;
        justify-content: center;
        align-items: center;

        gap: 12px;

        width: 100%;

        border-top: 1px solid #e1e5e3;

        padding-top: 15px;

        text-decoration: none;

        color: #07382d;

        font-size: 15px;

        font-weight: 600;
    }

    .legal-topic-card a i {
        transition: 0.3s;
    }

    .legal-topic-card a:hover i {
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

        .legal-topics-row {
            margin-left: -3px;
            margin-right: -3px;
        }

        .legal-topics-row > div {
            padding-left: 3px;
            padding-right: 3px;
            margin-bottom: 6px;
        }

        .legal-topic-card {
            padding: 15px 8px 12px;
            border-radius: 10px;
        }


        .topic-icon {
            width: 65px;
            height: 65px;
            margin-bottom: 10px;
        }

        .topic-icon i {
            font-size: 34px;
        }


        .legal-topic-card h4 {
            font-size: 16px;
            margin-bottom: 7px;
        }

        .legal-topic-card p {
            font-size: 11px;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        .legal-topic-card a {
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

@endsection