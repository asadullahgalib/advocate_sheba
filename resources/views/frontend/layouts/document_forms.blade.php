<style>
/* =========================================
   LEGAL DOCUMENTS HOME SECTION
========================================= */

.legal-home-section {
    background: #f5f5f5;
    border-radius: 16px;
    padding: 24px 0 15px;
    margin: 0 0 15px;
}

.legal-home-container {
    width: 83%;
    max-width: 1600px;
    margin: auto;
}

/* Header */
.legal-home-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
}

.legal-home-header h2 {
    font-size: 21px;
    font-weight: 600;
    color: #164a9b;
    margin: 0 0 2px;
}

.legal-home-header p {
    font-size: 14px;
    color: #111;
    margin: 0;
}

.legal-view-all {
    color: #164a9b;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    white-space: nowrap;
}

.legal-view-all:hover {
    color: #008080;
}

/* Main White Card */
.legal-documents-card {
    background: #fff;
    border: 1px solid #e5e5e5;
    border-radius: 11px;
    padding: 20px 6px 14px;
    box-shadow: 0 3px 8px rgba(0,0,0,0.03);
}

/* Document Grid */
.legal-documents-grid {
    display: grid;
    grid-template-columns: repeat(6, minmax(0, 1fr));
    gap: 16px 0;
}

/* Single Document */
.legal-document-item {
    min-height: 136px;
    border: 1px solid #e8e2e2;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    text-decoration: none !important;
    padding: 8px;
    transition: all .25s ease;
}

.legal-document-item:hover {
    background: #f8fbff;
    border-color: #168df5;
}

.legal-pdf-icon {
    width: 82px;
    height: 82px;
    border: 2px solid #c9c9c9;
    border-radius: 11px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 13px;
    transition: all .25s ease;
}

.legal-pdf-icon i {
    font-size: 48px;
    color: #168df5;
}

.legal-document-item:hover .legal-pdf-icon {
    border-color: #168df5;
}

.legal-document-item h4 {
    font-size: 15px;
    font-weight: 400;
    color: #111;
    margin: 0;
    line-height: 1.4;
    overflow-wrap: anywhere;
}

.legal-empty {
    grid-column: 1 / -1;
    text-align: center;
    padding: 30px;
    color: #777;
}

/* Responsive */
@media (max-width: 991px) {
    .legal-home-container {
        width: 94%;
    }

    .legal-documents-grid {
        grid-template-columns: repeat(3, minmax(0, 1fr));
    }
}

@media (max-width: 575px) {
    .legal-home-section {
        padding: 18px 0;
    }

    .legal-home-header h2 {
        font-size: 17px;
    }

    .legal-home-header p {
        font-size: 12px;
    }

    .legal-view-all {
        font-size: 12px;
    }

    .legal-documents-card {
        padding: 12px 5px;
    }

    .legal-documents-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 10px 0;
    }

    .legal-document-item {
        min-height: 120px;
    }

    .legal-pdf-icon {
        width: 68px;
        height: 68px;
    }

    .legal-pdf-icon i {
        font-size: 40px;
    }

    .legal-document-item h4 {
        font-size: 13px;
    }
}
</style>


<!-- =========================================
     LEGAL DOCUMENTS HOME SECTION
========================================= -->

<div class="legal-home-section">

    <div class="legal-home-container">

        <!-- Header -->
        <div class="legal-home-header">

            <div>
                <h2>Legal Documents &amp; Forms</h2>
                <p>বিভিন্ন আইনি ডকুমেন্ট ও ফর্ম ডাউনলোড করুন</p>
            </div>

            <a href="{{ route('legal.form.list') }}" class="legal-view-all">
                View All <i class="fa fa-angle-right"></i>
            </a>

        </div>

        <!-- Documents -->
        <div class="legal-documents-card">

            <div class="legal-documents-grid">

                @forelse($documents as $document)

                    <a href="{{ route('legal.form', $document->slug) }}"
                       class="legal-document-item">

                        <div class="legal-pdf-icon">
                            <i class="fa fa-file-pdf-o"></i>
                        </div>

                        <h4>{{ $document->title }}</h4>

                    </a>

                @empty

                    <div class="legal-empty">
                        কোনো ডকুমেন্ট পাওয়া যায়নি।
                    </div>

                @endforelse

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