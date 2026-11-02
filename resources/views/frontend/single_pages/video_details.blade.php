@extends('frontend.layouts.master')

@section('content')


<!-- ================= VIDEO DETAILS PAGE START ================= -->

<style>
    .video-details-page {
        --video-primary: #1B489D;
        --video-text: #202936;
        --video-muted: #6b7280;
        --video-border: #e8edf3;
        background: #f7f9fc;
        color: var(--video-text);
        padding: 28px 0 55px;
        font-family: inherit;
    }

    .video-details-page * {
        box-sizing: border-box;
    }

    .video-details-page a {
        text-decoration: none;
    }

    .video-breadcrumb {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 9px;
        margin-bottom: 23px;
        font-size: 13px;
        color: var(--video-muted);
    }

    .video-breadcrumb a {
        color: #526174;
        transition: color .2s ease;
    }

    .video-breadcrumb a:hover {
        color: #1B489D;
    }

    .video-breadcrumb .separator {
        color: #aab3c0;
    }

    .video-breadcrumb .current {
        color: #1B489D;
    }

    .video-main-card,
    .related-video-card,
    .video-description-card {
        background: #fff;
        border: 1px solid var(--video-border);
        border-radius: 13px;
    }

    .video-main-card {
        padding: 23px;
    }

    .video-main-title {
        font-size: 27px;
        font-weight: 750;
        line-height: 1.5;
        color: #172334;
        margin: 0 0 10px;
    }

    .video-main-subtitle {
        font-size: 15px;
        line-height: 1.85;
        color: #667386;
        margin-bottom: 22px;
    }

    /* Video Player */
    .video-player-wrapper {
        position: relative;
        width: 100%;
        aspect-ratio: 16 / 9;
        overflow: hidden;
        background: #10151d;
        border-radius: 11px;
    }

    .video-player-wrapper iframe,
    .video-player-wrapper video {
        width: 100%;
        height: 100%;
        position: absolute;
        inset: 0;
        border: 0;
        display: block;
    }

    /* Video information */
    .video-meta-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 14px;
        padding: 18px 0;
        border-bottom: 1px solid var(--video-border);
    }

    .video-channel {
        display: flex;
        align-items: center;
        gap: 12px;
        min-width: 0;
    }

    .video-channel-avatar {
        width: 49px;
        height: 49px;
        flex-shrink: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #e8f5ff;
        color: #1B489D;
        border-radius: 50%;
        font-size: 20px;
        font-weight: 700;
    }

    .video-channel-name {
        font-size: 15px;
        font-weight: 700;
        color: #202936;
        margin: 0 0 4px;
    }

    .video-channel-info {
        color: var(--video-muted);
        font-size: 12px;
        margin: 0;
    }

    .video-subscribe-btn {
        background: #1B489D;
        color: #fff;
        border: 1px solid #1B489D;
        border-radius: 7px;
        padding: 10px 16px;
        font-size: 13px;
        font-weight: 600;
        white-space: nowrap;
        transition: all .2s ease;
    }

    .video-subscribe-btn:hover {
        background: #087fd0;
        color: #fff;
        border-color: #087fd0;
    }

    .video-action-row {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 10px;
        padding-top: 17px;
    }

    .video-action-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 7px;
        padding: 9px 13px;
        border: 1px solid #e3e8ef;
        border-radius: 7px;
        background: #fff;
        color: #475569;
        font-size: 13px;
        cursor: pointer;
        transition: all .2s ease;
    }

    .video-action-btn:hover {
        border-color: #1B489D;
        color: #1B489D;
        background: #f2f9ff;
    }

    .video-date {
        margin-left: auto;
        font-size: 12px;
        color: var(--video-muted);
    }

    /* Description */
    .video-description-card {
        padding: 23px;
        margin-top: 20px;
    }

    .video-section-title {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 19px;
        font-weight: 750;
        color: #202936;
        margin: 0 0 19px;
    }

    .video-section-title::before {
        content: "";
        display: block;
        width: 4px;
        height: 23px;
        background: #1B489D;
        border-radius: 5px;
        flex-shrink: 0;
    }

    .video-description-text {
        font-size: 14px;
        line-height: 1.95;
        color: #566274;
        margin: 0;
        white-space: pre-line;
    }

    .video-topic-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 19px;
    }

    .video-topic-tag {
        display: inline-block;
        background: #eef7ff;
        color: #087fcf;
        border-radius: 5px;
        padding: 6px 11px;
        font-size: 12px;
    }

    /* Sidebar */
    .related-video-card {
        padding: 20px;
        margin-bottom: 20px;
    }

    .related-video-heading {
        font-size: 19px;
        font-weight: 750;
        color: #202936;
        margin: 0;
    }

    .related-video-heading-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 10px;
        padding-bottom: 16px;
        margin-bottom: 16px;
        border-bottom: 1px solid var(--video-border);
    }

    .related-video-view-all {
        font-size: 12px;
        font-weight: 600;
        color: #1B489D;
        white-space: nowrap;
    }

    .related-video-item {
        display: flex;
        align-items: flex-start;
        gap: 13px;
        padding-bottom: 15px;
        margin-bottom: 15px;
        border-bottom: 1px solid #f0f2f6;
    }

    .related-video-item:last-child {
        padding-bottom: 0;
        margin-bottom: 0;
        border-bottom: 0;
    }

    .related-video-thumb {
        position: relative;
        width: 125px;
        flex: 0 0 125px;
        aspect-ratio: 16 / 10;
        overflow: hidden;
        border-radius: 7px;
        background: #e9eff5;
    }

    .related-video-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform .3s ease;
    }

    .related-video-item:hover .related-video-thumb img {
        transform: scale(1.06);
    }

    .related-video-play {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        justify-content: center;
        align-items: center;
        width: 31px;
        height: 31px;
        border-radius: 50%;
        background: rgba(0, 0, 0, .72);
        color: #fff;
        font-size: 12px;
        padding-left: 2px;
    }

    .related-video-info {
        flex: 1;
        min-width: 0;
    }

    .related-video-title {
        font-size: 13px;
        line-height: 1.6;
        font-weight: 700;
        color: #263244;
        margin: 0 0 7px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .related-video-item:hover .related-video-title {
        color: #1B489D;
    }

    .related-video-meta {
        font-size: 11px;
        line-height: 1.6;
        color: #8490a0;
        margin: 0;
    }

    /* Category card */
    .video-category-card {
        background: #edf7ff;
        border: 1px solid #d7edff;
        border-radius: 12px;
        padding: 22px;
    }

    .video-category-card h4 {
        font-size: 17px;
        font-weight: 750;
        margin-bottom: 10px;
        color: #1e3c59;
    }

    .video-category-card p {
        color: #526b82;
        font-size: 13px;
        line-height: 1.8;
        margin-bottom: 16px;
    }

    .video-category-btn {
        display: inline-block;
        padding: 10px 15px;
        border-radius: 7px;
        background: #1B489D;
        color: #fff;
        font-size: 13px;
        font-weight: 600;
    }

    .video-category-btn:hover {
        background: #087fd0;
        color: #fff;
    }

    /* Responsive */
    @media (max-width: 991.98px) {
        .video-details-page {
            padding: 22px 0 40px;
        }

        .video-main-title {
            font-size: 23px;
        }

        .video-sidebar {
            margin-top: 24px;
        }

        .related-video-thumb {
            width: 150px;
            flex-basis: 150px;
        }
    }

    @media (max-width: 575.98px) {
        .video-details-page {
            padding: 16px 0 30px;
        }

        .video-breadcrumb {
            font-size: 12px;
            margin-bottom: 16px;
            gap: 6px;
        }

        .video-main-card,
        .video-description-card {
            padding: 15px;
            border-radius: 10px;
        }

        .video-main-title {
            font-size: 20px;
            line-height: 1.55;
        }

        .video-main-subtitle {
            font-size: 13px;
            margin-bottom: 16px;
        }

        .video-player-wrapper {
            border-radius: 7px;
        }

        .video-meta-row {
            align-items: flex-start;
            gap: 12px;
        }

        .video-channel-avatar {
            width: 42px;
            height: 42px;
            font-size: 17px;
        }

        .video-subscribe-btn {
            padding: 9px 11px;
            font-size: 12px;
        }

        .video-action-row {
            gap: 8px;
        }

        .video-action-btn {
            padding: 8px 10px;
            font-size: 12px;
        }

        .video-date {
            width: 100%;
            margin-left: 0;
        }

        .video-section-title,
        .related-video-heading {
            font-size: 17px;
        }

        .video-description-text {
            font-size: 13px;
        }

        .related-video-card {
            padding: 15px;
        }

        .related-video-thumb {
            width: 115px;
            flex-basis: 115px;
        }

        .related-video-title {
            font-size: 12px;
            -webkit-line-clamp: 3;
        }
    }

    @media (max-width: 360px) {
        .related-video-thumb {
            width: 95px;
            flex-basis: 95px;
        }

        .video-main-title {
            font-size: 18px;
        }
    }

    /* Description Read More */
    .video-description-content {
        position: relative;
    }

    .video-description-content p {
        font-size: 14px;
        line-height: 1.95;
        color: #566274;
        margin-bottom: 14px;
    }

    .video-description-extra {
        display: none;
    }

    .video-description-content.expanded .video-description-extra {
        display: block;
    }

    .video-read-more-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        margin-top: 2px;
        padding: 0;
        border: 0;
        background: transparent;
        color: #1B489D;
        font-size: 14px;
        font-weight: 700;
        cursor: pointer;
    }

    .video-read-more-btn:hover {
        color: #087fd0;
    }

    .read-more-arrow {
        display: inline-block;
        transition: transform .2s ease;
    }

    .video-read-more-btn[aria-expanded="true"] .read-more-arrow {
        transform: rotate(180deg);
    }

    /* Content Source */
    .video-content-source {
        margin-top: 22px;
        padding-top: 17px;
        border-top: 1px solid #e8edf3;
        font-size: 13px;
        line-height: 1.9;
        overflow-wrap: anywhere;
    }

    .video-content-source strong,
    .video-expert-source strong {
        color: #263244;
    }

    .video-content-source a {
        color: #1B489D;
        margin-left: 4px;
    }

    .video-content-source a:hover {
        text-decoration: underline;
    }

    .video-expert-source {
        margin-top: 12px;
        font-size: 13px;
        line-height: 1.9;
        color: #566274;
        overflow-wrap: anywhere;
    }

    .video-expert-source strong {
        display: block;
        margin-bottom: 3px;
    }

    @media (max-width: 575.98px) {
        .video-description-content p {
            font-size: 13px;
        }

        .video-read-more-btn {
            font-size: 13px;
        }

        .video-content-source,
        .video-expert-source {
            font-size: 12px;
        }
    }

</style>

<main class="video-details-page">
    <div class="container">

        <!-- Breadcrumb -->
        <nav class="video-breadcrumb" aria-label="Breadcrumb">
            <a href="{{url('')}}">Home</a>
            <span class="separator">/</span>
            <a href="#">Legal Video</a>
            <span class="separator">/</span>
            <a href="#">Land Law</a>
            <span class="separator">/</span>
            <span class="current">জমি বিক্রির আগে যে বিষয় গুলো জানা দরকার</span>
        </nav>

        <div class="row g-4">

            <!-- Main Content -->
            <div class="col-lg-8">

                <article class="video-main-card">

                    <!-- Video Heading -->
                    <h1 class="video-main-title">
                        জমি বিক্রির আগে যে বিষয় গুলো জানা দরকার! জরুরি কাগজপত্র ও সতর্কতা
                    </h1>

                    <p class="video-main-subtitle">
                        জমি মানুষের জীবনের অন্যতম মূল্যবান সম্পদ। কেউ নিজের প্রয়োজনে, কেউ ব্যবসায়িক কারণে, আবার কেউ আর্থিক সংকট মোকাবিলার জন্য জমি বিক্রি করে থাকেন।
                    </p>

                    <!-- Video Player -->
                    <div class="video-player-wrapper">
                        <iframe
                            src="https://www.youtube.com/embed/u6f4IPmE1z0?si=E9n_V3sldaOKWqrt"
                            title="জমি বিক্রির আগে যে বিষয় গুলো জানা দরকার"
                            loading="lazy"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen>
                        </iframe>
                    </div>

                    <!-- Channel Information -->
                    <div class="video-meta-row">

                        <div class="video-channel">
                            <div class="video-channel-avatar">
                                <i class="fa fa-balance-scale"></i>
                            </div>

                            <div>
                                <h3 class="video-channel-name">
                                    AdvocateSheba
                                </h3>

                                <p class="video-channel-info">
                                    লিগেল প্রফেশ্নাল বিষয়ক তথ্য ও ভিডিও
                                </p>
                            </div>
                        </div>

                        <a href="https://www.youtube.com/"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="video-subscribe-btn">
                            ▶ Subscribe
                        </a>

                    </div>

                    <!-- Actions -->
                    <div class="video-action-row">

                        <button type="button"
                                class="video-action-btn"
                                id="videoShareBtn">
                            ↗ শেয়ার করুন
                        </button>

                        <button type="button"
                                class="video-action-btn"
                                id="videoCopyBtn">
                            ▢ লিংক কপি
                        </button>

                        <span class="video-date">
                            প্রকাশের তারিখ: Jul 14, 2026
                        </span>

                    </div>

                </article>

                <!-- Video Description -->
                <section class="video-description-card">

                    <h2 class="video-section-title">
                        ভিডিও সম্পর্কে বিস্তারিত
                    </h2>

                    <div class="video-description-content" id="videoDescription">
                        <p>
                            জমি মানুষের জীবনের অন্যতম মূল্যবান সম্পদ। কেউ নিজের প্রয়োজনে, কেউ ব্যবসায়িক কারণে, আবার কেউ আর্থিক সংকট মোকাবিলার জন্য জমি বিক্রি করে থাকেন। তবে জমি বিক্রি করা শুধু ক্রেতার সঙ্গে দাম নির্ধারণ করে দলিল সম্পাদন করার মধ্যেই সীমাবদ্ধ নয়। জমির মালিকানা নিশ্চিত করা, প্রয়োজনীয় কাগজপত্র প্রস্তুত রাখা, সঠিক মূল্য নির্ধারণ এবং আইনগত জটিলতা এড়িয়ে চলার মতো গুরুত্বপূর্ণ বিষয়গুলো আগে থেকেই জানা প্রয়োজন। সামান্য অসতর্কতার কারণে জমি বিক্রির পরেও মামলা, আর্থিক ক্ষতি কিংবা নানা ধরনের সমস্যার সম্মুখীন হতে পারেন।
                        </p>

                        <p>
                            তাই জমি বিক্রির সিদ্ধান্ত নেওয়ার আগে নিচের বিষয়গুলো ভালোভাবে জেনে নেওয়া উচিত।
                        </p>

                        <!-- Read More Content -->
                        <div class="video-description-extra" id="videoDescriptionExtra">
                            <div contenteditable="true" aria-label="Start writing" aria-multiline="true" role="textbox" translate="no" class="ProseMirror content-xaiQhS leading-relaxed"><h5 dir="auto"><span>জমি বিক্রির আগে যে বিষয়গুলো জানা দরকার</span></h5><p dir="auto"><span>জমি মানুষের জীবনের অন্যতম মূল্যবান সম্পদ। কেউ নিজের প্রয়োজনে, কেউ ব্যবসায়িক কারণে, আবার কেউ আর্থিক সংকট মোকাবিলার জন্য জমি বিক্রি করে থাকেন। তবে জমি বিক্রি করা শুধু ক্রেতার সঙ্গে দাম নির্ধারণ করে দলিল সম্পাদন করার মধ্যেই সীমাবদ্ধ নয়। জমির মালিকানা নিশ্চিত করা, প্রয়োজনীয় কাগজপত্র প্রস্তুত রাখা, সঠিক মূল্য নির্ধারণ এবং আইনগত জটিলতা এড়িয়ে চলার মতো গুরুত্বপূর্ণ বিষয়গুলো আগে থেকেই জানা প্রয়োজন। সামান্য অসতর্কতার কারণে জমি বিক্রির পরেও মামলা, আর্থিক ক্ষতি কিংবা নানা ধরনের সমস্যার সম্মুখীন হতে পারেন।</span></p><p dir="auto"><span>তাই জমি বিক্রির সিদ্ধান্ত নেওয়ার আগে নিচের বিষয়গুলো ভালোভাবে জেনে নেওয়া উচিত।</span></p><h5 dir="auto"><span>১. জমির মালিকানা নিশ্চিত করুন</span></h5><p dir="auto" class="isSelectedEnd"><span>জমি বিক্রির আগে সর্বপ্রথম নিশ্চিত হতে হবে, জমিটির বৈধ মালিকানা আপনার রয়েছে কি না। জমিটি নিজের নামে ক্রয় করা হলে ক্রয় দলিল, উত্তরাধিকারসূত্রে পাওয়া হলে ওয়ারিশ-সংক্রান্ত কাগজপত্র এবং অন্যান্য ক্ষেত্রে মালিকানা অর্জনের প্রমাণ যাচাই করতে হবে।</span></p><p dir="auto" class="isSelectedEnd"><span>শুধু খতিয়ান বা নামজারি থাকলেই যে জমির নিরঙ্কুশ মালিকানা প্রমাণিত হয়, এমন নয়। জমির পূর্ববর্তী মালিকানা, দলিলের ধারাবাহিকতা এবং সংশ্লিষ্ট রেকর্ডও যাচাই করা জরুরি।</span></p><h5 dir="auto"><span>২. প্রয়োজনীয় কাগজপত্র প্রস্তুত রাখুন</span></h5><p dir="auto" class="isSelectedEnd"><span>জমি বিক্রির সময় ক্রেতা সাধারণত জমির বিভিন্ন কাগজপত্র দেখতে চান। তাই আগেই প্রয়োজনীয় কাগজপত্র সংগ্রহ করে রাখা ভালো।</span></p><p dir="auto" class="isSelectedEnd"><span>গুরুত্বপূর্ণ কাগজপত্রের মধ্যে রয়েছে—</span></p><ul data-spread="false"><li><p dir="auto" class="isSelectedEnd"><span>জমির মূল দলিল বা মালিকানা অর্জনের প্রাসঙ্গিক দলিল।</span></p></li><li><p dir="auto" class="isSelectedEnd"><span>সর্বশেষ খতিয়ান ও প্রযোজ্য পূর্ববর্তী খতিয়ান।</span></p></li><li><p dir="auto" class="isSelectedEnd"><span>নামজারি বা মিউটেশনের কাগজপত্র।</span></p></li><li><p dir="auto" class="isSelectedEnd"><span>হালনাগাদ ভূমি উন্নয়ন কর পরিশোধের দাখিলা।</span></p></li><li><p dir="auto" class="isSelectedEnd"><span>মৌজা ম্যাপ বা প্রয়োজনীয় নকশা।</span></p></li><li><p dir="auto" class="isSelectedEnd"><span>উত্তরাধিকারসূত্রে পাওয়া জমির ক্ষেত্রে ওয়ারিশ সনদসহ প্রাসঙ্গিক কাগজপত্র।</span></p></li><li><p dir="auto" class="isSelectedEnd"><span>জমি বন্ধক, মামলা বা অন্য কোনো দায়ের আওতায় থাকলে সংশ্লিষ্ট তথ্য ও কাগজপত্র।</span></p></li></ul><p dir="auto" class="isSelectedEnd"><span>জমির ধরন ও মালিকানা অর্জনের পদ্ধতি অনুযায়ী কাগজপত্রের প্রয়োজনীয়তা ভিন্ন হতে পারে। তাই দলিল সম্পাদনের আগে সংশ্লিষ্ট সাব-রেজিস্ট্রি অফিস বা ভূমি আইন বিষয়ে অভিজ্ঞ আইনজীবীর পরামর্শ নেওয়া উচিত।</span></p><h5 dir="auto"><span>৩. জমির দাগ, খতিয়ান ও পরিমাণ মিলিয়ে দেখুন</span></h5><p dir="auto" class="isSelectedEnd"><span>জমির দলিলে উল্লেখিত দাগ নম্বর, খতিয়ান নম্বর, মৌজা, জমির শ্রেণি এবং পরিমাণ বাস্তব জমির সঙ্গে মিলিয়ে দেখা অত্যন্ত গুরুত্বপূর্ণ।</span></p><p dir="auto" class="isSelectedEnd"><span>অনেক ক্ষেত্রে কাগজে জমির পরিমাণ এক রকম থাকলেও বাস্তবে দখলে থাকা জমির পরিমাণ কম বা বেশি হতে পারে। আবার একই দাগে একাধিক মালিকের জমি থাকতে পারে। এ ধরনের সমস্যা এড়াতে প্রয়োজন হলে অভিজ্ঞ আমিন বা সার্ভেয়ার দিয়ে জমি পরিমাপ করিয়ে নিন।</span></p><h5 dir="auto"><span>৪. জমির বর্তমান বাজারমূল্য নির্ধারণ করুন</span></h5><p dir="auto" class="isSelectedEnd"><span>জমি বিক্রির আগে সঠিক বাজারমূল্য জানা অত্যন্ত জরুরি। তাড়াহুড়া করে কম দামে জমি বিক্রি করলে আর্থিক ক্ষতি হতে পারে। আবার অতিরিক্ত দাম চাইলে উপযুক্ত ক্রেতা পেতেও দেরি হতে পারে।</span></p><p dir="auto" class="isSelectedEnd"><span>বাজারমূল্য নির্ধারণের সময় বিবেচনা করুন—</span></p><ul data-spread="false"><li><p dir="auto" class="isSelectedEnd"><span>জমির অবস্থান ও যোগাযোগব্যবস্থা।</span></p></li><li><p dir="auto" class="isSelectedEnd"><span>রাস্তার প্রস্থ এবং জমিতে প্রবেশের সুবিধা।</span></p></li><li><p dir="auto" class="isSelectedEnd"><span>আশপাশের জমির সাম্প্রতিক বিক্রয়মূল্য।</span></p></li><li><p dir="auto" class="isSelectedEnd"><span>জমির শ্রেণি ও ব্যবহারযোগ্যতা।</span></p></li><li><p dir="auto" class="isSelectedEnd"><span>বিদ্যুৎ, পানি, বাজার, শিক্ষাপ্রতিষ্ঠানসহ প্রয়োজনীয় সুবিধার নৈকট্য।</span></p></li><li><p dir="auto" class="isSelectedEnd"><span>ভবিষ্যতে এলাকার উন্নয়নের সম্ভাবনা।</span></p></li></ul><p dir="auto" class="isSelectedEnd"><span>শুধু সরকারি নির্ধারিত মূল্য বা অন্যের কথার ওপর নির্ভর না করে স্থানীয় বাজার যাচাই করে বাস্তবসম্মত মূল্য নির্ধারণ করুন।</span></p><h5 dir="auto"><span>৫. জমির দখল ও সীমানা পরিষ্কার রাখুন</span></h5><p dir="auto" class="isSelectedEnd"><span>জমি বিক্রির আগে নিশ্চিত হোন, জমির সীমানা স্পষ্ট এবং জমির দখলসংক্রান্ত কোনো বিরোধ নেই। প্রতিবেশীর সঙ্গে সীমানা নিয়ে সমস্যা, চলাচলের রাস্তা নিয়ে বিরোধ অথবা অন্য কারও দখল থাকলে তা বিক্রির আগে সমাধানের উদ্যোগ নিন।</span></p><p dir="auto" class="isSelectedEnd"><span>জমিতে অন্য কারও বসতঘর, স্থাপনা বা ব্যবহার থাকলে বিষয়টি গোপন না করে ক্রেতাকে পরিষ্কারভাবে জানান। জমির প্রকৃত অবস্থা সম্পর্কে স্বচ্ছতা বজায় রাখলে ভবিষ্যতের বিরোধ কমে।</span></p><h5 dir="auto"><span>৬. জমিতে মামলা, বন্ধক বা অন্য কোনো দায় আছে কি না যাচাই করুন</span></h5><p dir="auto" class="isSelectedEnd"><span>জমি বিক্রির আগে খোঁজ নিন, জমিটি কোনো আদালতের মামলা, নিষেধাজ্ঞা, ব্যাংকঋণের বন্ধক, অধিগ্রহণের প্রক্রিয়া বা অন্য কোনো আইনগত জটিলতার আওতায় রয়েছে কি না।</span></p><p dir="auto" class="isSelectedEnd"><span>যৌথ মালিকানার জমি হলে সব সহমালিকের অধিকার ও সম্মতির বিষয়টিও গুরুত্বের সঙ্গে বিবেচনা করতে হবে। উত্তরাধিকারসূত্রে পাওয়া জমির ক্ষেত্রে সব ওয়ারিশের অংশ এবং বিক্রেতার প্রকৃত বিক্রয়যোগ্য স্বত্ব নিশ্চিত করা প্রয়োজন।</span></p><p dir="auto" class="isSelectedEnd"><span>কোনো বিরোধ বা দায় থাকলে তা গোপন করে বিক্রি করার চেষ্টা না করে আগে আইনগত অবস্থান পরিষ্কার করুন।</span></p><h5 dir="auto"><span>৭. ক্রেতার পরিচয় ও অর্থের উৎস সম্পর্কে সতর্ক থাকুন</span></h5><p dir="auto" class="isSelectedEnd"><span>জমি কেনার আগ্রহ দেখালেই অপরিচিত কাউকে সব মূল কাগজপত্র দিয়ে দেওয়া উচিত নয়। ক্রেতার পরিচয়, যোগাযোগের তথ্য এবং লেনদেনের শর্ত সম্পর্কে নিশ্চিত হোন।</span></p><p dir="auto" class="isSelectedEnd"><span>বায়না বা অগ্রিম অর্থ গ্রহণের সময় লিখিত চুক্তি করুন। সেখানে জমির বিবরণ, মোট মূল্য, অগ্রিম অর্থ, অবশিষ্ট টাকা পরিশোধের সময়সীমা এবং চুক্তি ভঙ্গের শর্ত স্পষ্টভাবে উল্লেখ রাখুন।</span></p><p dir="auto" class="isSelectedEnd"><span>অর্থ গ্রহণের ক্ষেত্রে ব্যাংকিং চ্যানেল বা যাচাইযোগ্য লেনদেনের পদ্ধতি ব্যবহার করা নিরাপদ। টাকা পরিশোধের প্রমাণ ও রসিদ সংরক্ষণ করুন।</span></p><h5 dir="auto"><span>৮. দলিল সম্পাদনের আগে সব শর্ত বুঝে নিন</span></h5><p dir="auto" class="isSelectedEnd"><span>জমি বিক্রির দলিল একটি গুরুত্বপূর্ণ আইনগত নথি। দলিলে জমির পরিচিতি, দাগ ও খতিয়ান নম্বর, পরিমাণ, সীমানা, বিক্রয়মূল্য এবং পক্ষগুলোর সঠিক তথ্য থাকা জরুরি।</span></p><p dir="auto" class="isSelectedEnd"><span>দলিলের খসড়া ভালোভাবে পড়ে বুঝে নিন। কোনো তথ্য ভুল থাকলে স্বাক্ষরের আগে সংশোধন করুন। প্রয়োজনে অভিজ্ঞ দলিল লেখক ও আইনজীবীর সহায়তা নিন।</span></p><p dir="auto" class="isSelectedEnd"><span>বিশেষভাবে মনে রাখবেন, সম্পূর্ণ মূল্য বুঝে পাওয়ার আগে দলিলে মূল্য পরিশোধের বিষয়ে অসত্য ঘোষণা করা উচিত নয়। জমি বিক্রির ক্ষেত্রে প্রযোজ্য নিবন্ধন, কর, ফি এবং অন্যান্য আইনগত আনুষ্ঠানিকতা যথাযথভাবে সম্পন্ন করতে হবে।</span></p><h5 dir="auto"><span>৯. বিক্রয়-সংক্রান্ত খরচ ও কর সম্পর্কে জানুন</span></h5><p dir="auto" class="isSelectedEnd"><span>জমি বিক্রির সঙ্গে বিভিন্ন ধরনের কর, ফি, দলিল প্রস্তুত-সংক্রান্ত খরচ এবং অন্যান্য ব্যয় যুক্ত থাকতে পারে। কোন খরচ কে বহন করবেন, তা ক্রেতা ও বিক্রেতার মধ্যে আগেই পরিষ্কার করে নেওয়া ভালো।</span></p><p dir="auto" class="isSelectedEnd"><span>প্রযোজ্য আইন অনুযায়ী বিক্রেতার কোনো কর বা দায় পরিশোধের প্রয়োজন থাকলে তা যাচাই করুন। জমির অবস্থান, শ্রেণি, লেনদেনের ধরন এবং প্রচলিত বিধানের ওপর খরচ নির্ভর করতে পারে। তাই বর্তমান নিয়ম ও প্রযোজ্য হার সম্পর্কে সংশ্লিষ্ট কর্তৃপক্ষের কাছ থেকে নিশ্চিত তথ্য নিন।</span></p><h5 dir="auto"><span>১০. উত্তরাধিকার ও পাওয়ার অব অ্যাটর্নির ক্ষেত্রে বাড়তি সতর্কতা অবলম্বন করুন</span></h5><p dir="auto" class="isSelectedEnd"><span>উত্তরাধিকারসূত্রে পাওয়া জমি বিক্রি করার সময় ওয়ারিশদের পরিচয়, প্রাপ্য অংশ এবং মালিকানা-সংক্রান্ত কাগজপত্র যাচাই করতে হবে। একজন ওয়ারিশ সাধারণত নিজের আইনগত অধিকার ও অংশের বাইরে অন্যের অংশ বিক্রি করতে পারেন না।</span></p><p dir="auto" class="isSelectedEnd"><span>আবার প্রতিনিধি বা পাওয়ার অব অ্যাটর্নির মাধ্যমে জমি বিক্রি হলে ক্ষমতাপত্রের বৈধতা, পরিধি এবং কার্যকারিতা যাচাই করা জরুরি। প্রয়োজনে আইনজীবীর পরামর্শ নিয়ে নিশ্চিত হোন যে প্রতিনিধি সংশ্লিষ্ট জমি বিক্রির জন্য যথাযথ ক্ষমতাপ্রাপ্ত।</span></p><h5 dir="auto"><span>১১. জমি বিক্রির পর সব প্রমাণ সংরক্ষণ করুন</span></h5><p dir="auto" class="isSelectedEnd"><span>দলিল সম্পাদন ও নিবন্ধনের পর বিক্রয়-সংক্রান্ত সব গুরুত্বপূর্ণ কাগজপত্র যত্নসহকারে সংরক্ষণ করুন। যেমন—</span></p><ul data-spread="false"><li><p dir="auto" class="isSelectedEnd"><span>নিবন্ধিত দলিলের কপি বা প্রাপ্তিসংক্রান্ত প্রমাণ।</span></p></li><li><p dir="auto" class="isSelectedEnd"><span>টাকা গ্রহণের রসিদ ও ব্যাংক লেনদেনের প্রমাণ।</span></p></li><li><p dir="auto" class="isSelectedEnd"><span>বায়নাপত্র বা বিক্রয়-সংক্রান্ত চুক্তি।</span></p></li><li><p dir="auto" class="isSelectedEnd"><span>প্রযোজ্য কর ও ফি পরিশোধের রসিদ।</span></p></li><li><p dir="auto" class="isSelectedEnd"><span>ক্রেতার সঙ্গে সম্পাদিত অন্যান্য লিখিত সমঝোতা।</span></p></li></ul><p dir="auto"><span>এসব নথি ভবিষ্যতে কোনো প্রশ্ন, বিরোধ বা আইনগত প্রয়োজন দেখা দিলে কাজে আসতে পারে।</span></p>
                            </div>
                        </div>
                    </div>

                    <button type="button"
                            class="video-read-more-btn"
                            id="videoReadMoreBtn"
                            aria-expanded="false"
                            aria-controls="videoDescriptionExtra">
                        Read more <span class="read-more-arrow">⌄</span>
                    </button>

                    <!-- Content Source -->
                    <div class="bg-gray-50 dark:bg-gray-800/50 p-4 rounded-2xl border border-gray-200 dark:border-gray-700 my-6"><div class="italic text-sm md:text-base bg-white dark:bg-gray-900 p-4 rounded-lg border-l-4 border-[#008080] text-gray-700 dark:text-gray-300 space-y-1"><p><strong>Content Source:</strong> AdvocateSheba Official YouTube Channel</p><p><strong>Legal Expert Featured:</strong> এডভোকেট মোঃ আসাদুল্লাহ গালিব, সুপ্রিম কোড়ট অব বাংলাদেশ ।</p><p><strong>Content Prepared &amp; Published By:</strong> AdvocateSheba Editorial Team</p><p><strong>Last Updated:</strong> 14 July 2026<a aria-label="Read Doctors24 editorial policy" class="text-[#008080] dark:text-red-400" href="#"> • Read Editorial Policy →</a></p></div></div>

                    <style>
                        .my-6{margin-top:1.5rem;margin-bottom:1.5rem;}
                        .space-y-1>:not([hidden])~:not([hidden]){--tw-space-y-reverse:0;margin-top:calc(.25rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(.25rem * var(--tw-space-y-reverse));}
                        .rounded-2xl{border-radius:1rem;}
                        .rounded-lg{border-radius:var(--radius);}
                        .border{border-width:1px;}
                        .border-l-4{border-left-width:4px;}
                        .border-\[\#008080\]{--tw-border-opacity:1;border-color:rgb(0 128 128/var(--tw-border-opacity,1));}
                        .border-gray-200{--tw-border-opacity:1;border-color:rgb(229 231 235/var(--tw-border-opacity,1));}
                        .bg-gray-50{--tw-bg-opacity:1;background-color:rgb(249 250 251/var(--tw-bg-opacity,1));}
                        .bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255/var(--tw-bg-opacity,1));}
                        .p-4{padding:1rem;}
                        .text-sm{font-size:.875rem;line-height:1.25rem;}
                        .italic{font-style:italic;}
                        .text-\[\#008080\]{--tw-text-opacity:1;color:rgb(0 128 128/var(--tw-text-opacity,1));}
                        .text-gray-700{--tw-text-opacity:1;color:rgb(55 65 81/var(--tw-text-opacity,1));}
                        @media (min-width:768px){
                            .md\:text-base{font-size:1rem;line-height:1.5rem;}
                        }
                    </style>

                </section>


            </div>

            <!-- Sidebar -->
            <aside class="col-lg-4 video-sidebar">

                <section class="related-video-card">

                    <div class="related-video-heading-row">
                        <h2 class="related-video-heading">
                            সম্পর্কিত ভিডিও
                        </h2>

                        <a href="#"
                           class="related-video-view-all">
                            সব ভিডিও →
                        </a>
                    </div>

                    <!-- Related Video 1 -->
                    <a href="{{route('video.details')}}"
                       class="related-video-item">

                        <div class="related-video-thumb">
                            <img
                                src="{{asset('frontend/video-1.jpg')}}"
                                alt="পেটব্যথার কারণ"
                                loading="lazy">

                            <span class="related-video-play">▶</span>
                        </div>

                        <div class="related-video-info">
                            <h3 class="related-video-title">
                                জমি বিক্রির আগে যে বিষয় গুলো জানা দরকার
                            </h3>

                            <p class="related-video-meta">
                                জমি বিষয়ক আলোচনা
                            </p>
                        </div>

                    </a>

                    <!-- Related Video 2 -->
                    <a href="{{route('video.details')}}"
                       class="related-video-item">

                        <div class="related-video-thumb">
                            <img
                                src="{{asset('frontend/video-2.jpg')}}"
                                alt="লিভারের যত্ন"
                                loading="lazy">

                            <span class="related-video-play">▶</span>
                        </div>

                        <div class="related-video-info">
                            <h3 class="related-video-title">
                                নারীর আইনি অধিকার ও নিরাপত্তা
                            </h3>

                            <p class="related-video-meta">
                                নারীর আইনি অধিকার ও নিরাপত্তা বিষয়ক পরামর্শ
                            </p>
                        </div>

                    </a>

                    <!-- Related Video 3 -->
                    <a href="{{route('video.details')}}"
                       class="related-video-item">

                        <div class="related-video-thumb">
                            <img
                                src="{{asset('frontend/video-3.jpg')}}"
                                alt="অপারেশনের প্রস্তুতি"
                                loading="lazy">

                            <span class="related-video-play">▶</span>
                        </div>

                        <div class="related-video-info">
                            <h3 class="related-video-title">
                                পারিবারিক বিরোধ নিস্পত্তি ও আপোস মীমাংসা
                            </h3>

                            <p class="related-video-meta">
                                পারিবারিক বিরোধ নিস্পত্তি বিষয়ক পরামর্শ
                            </p>
                        </div>

                    </a>

                    <!-- Related Video 4 -->
                    <a href="{{route('video.details')}}"
                       class="related-video-item">

                        <div class="related-video-thumb">
                            <img
                                src="{{asset('frontend/video-4.jpg')}}"
                                alt="স্বাস্থ্য সচেতনতা"
                                loading="lazy">

                            <span class="related-video-play">▶</span>
                        </div>

                        <div class="related-video-info">
                            <h3 class="related-video-title">
                                আইনি পরামর্শ
                            </h3>

                            <p class="related-video-meta">
                                আইনি পরামর্শ বিষয়ক আলোচনা
                            </p>
                        </div>

                    </a>

                </section>

            </aside>

        </div>
    </div>
</main>

<script>
    (function () {
        const shareBtn = document.getElementById('videoShareBtn');
        const copyBtn = document.getElementById('videoCopyBtn');

        if (shareBtn) {
            shareBtn.addEventListener('click', async function () {
                const shareData = {
                    title: document.title,
                    text: document.querySelector('.video-main-title')?.innerText || '',
                    url: window.location.href
                };

                try {
                    if (navigator.share) {
                        await navigator.share(shareData);
                    } else if (navigator.clipboard) {
                        await navigator.clipboard.writeText(shareData.url);
                        alert('ভিডিওর লিংক কপি হয়েছে।');
                    } else {
                        window.prompt('ভিডিওর লিংক কপি করুন:', shareData.url);
                    }
                } catch (error) {
                    if (error.name !== 'AbortError') {
                        window.prompt('ভিডিওর লিংক কপি করুন:', shareData.url);
                    }
                }
            });
        }

        if (copyBtn) {
            copyBtn.addEventListener('click', async function () {
                const url = window.location.href;

                try {
                    if (navigator.clipboard) {
                        await navigator.clipboard.writeText(url);
                        alert('ভিডিওর লিংক কপি হয়েছে।');
                    } else {
                        window.prompt('ভিডিওর লিংক কপি করুন:', url);
                    }
                } catch (error) {
                    window.prompt('ভিডিওর লিংক কপি করুন:', url);
                }
            });
        }
    })();

    (function () {
        const description = document.getElementById('videoDescription');
        const readMoreBtn = document.getElementById('videoReadMoreBtn');

        if (!description || !readMoreBtn) return;

        readMoreBtn.addEventListener('click', function () {
            const isExpanded =
                readMoreBtn.getAttribute('aria-expanded') === 'true';

            description.classList.toggle('expanded', !isExpanded);

            readMoreBtn.setAttribute(
                'aria-expanded',
                String(!isExpanded)
            );

            readMoreBtn.innerHTML = isExpanded
                ? 'Read more <span class="read-more-arrow">⌄</span>'
                : 'Read less <span class="read-more-arrow">⌄</span>';
        });
    })();

</script>

<!-- ================= VIDEO DETAILS PAGE END ================= -->

@include('frontend.layouts.find_professional')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/legal-service-article.css') }}">

<section class="legal-articles-section" style="background: #f7f8fa;padding: 0px 0px 0px 0px;">

    <div class="container-fluid">

        <!-- ============================
             FEATURED ARTICLES HEADER
        ============================= -->

        <div class="flex justify-between items-center mt-2">
          <div class="my-4">
            <h2
              id="hospitals-by-location"
              class="text-lg md:text-xl font-semibold text-gray-800 dark:text-gray-100"
            >
              Legal Articles
            </h2>
            <p class="text-sm text-gray-600 dark:text-gray-400">
              Explore Legal Articles
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

@endsection