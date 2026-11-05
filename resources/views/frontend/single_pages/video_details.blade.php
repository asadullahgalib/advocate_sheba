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

    .video-player-empty {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #cbd5e1;
        font-size: 14px;
        text-align: center;
        padding: 15px;
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

    .video-description-content.expanded .video-description-preview {
        display: none;
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

@php
    // ভিডিওর শিরোনাম (ফাঁকা থাকলে ডিফল্ট)
    $videoTitle = $video->title ?: 'Legal Video';

    // বিবরণ থেকে সাধারণ লেখা (HTML ছাড়া)
    $descPlain   = trim(strip_tags($video->description_en ?? ''));
    $descLimit   = 400;
    $descHasMore = mb_strlen($descPlain) > $descLimit;

    // Video link থেকে embed URL বানানো
    $rawLink  = trim($video->link ?? '');
    $embedUrl = null;

    // iframe কোড দেওয়া থাকলে তার src বের করা
    if (stripos($rawLink, '<iframe') !== false && preg_match('/src=["\']([^"\']+)["\']/i', $rawLink, $srcMatch)) {
        $rawLink = $srcMatch[1];
    }

    if (preg_match('~(?:youtube\.com/(?:watch\?(?:.*&)?v=|embed/|shorts/|live/)|youtu\.be/)([A-Za-z0-9_-]{11})~i', $rawLink, $idMatch)) {
        $embedUrl = 'https://www.youtube.com/embed/' . $idMatch[1];
    } elseif (preg_match('~^https?://~i', $rawLink)) {
        $embedUrl = $rawLink;
    }
@endphp

<main class="video-details-page">
    <div class="container">

        <!-- Breadcrumb -->
        <nav class="video-breadcrumb" aria-label="Breadcrumb">
            <a href="{{ url('') }}">Home</a>
            <span class="separator">/</span>
            <a href="{{ route('video.list') }}">Legal Video</a>
            <span class="separator">/</span>
            <span class="current">{{ $videoTitle }}</span>
        </nav>

        <div class="row g-4">

            <!-- Main Content -->
            <div class="col-lg-8">

                <article class="video-main-card">

                    <!-- Video Heading -->
                    <h1 class="video-main-title">
                        {{ $videoTitle }}
                    </h1>

                    @if($descPlain != '')
                        <p class="video-main-subtitle">
                            {{ \Illuminate\Support\Str::limit($descPlain, 220) }}
                        </p>
                    @endif

                    <!-- Video Player -->
                    <div class="video-player-wrapper">
                        @if($embedUrl)
                            <iframe
                                src="{{ $embedUrl }}"
                                title="{{ $videoTitle }}"
                                loading="lazy"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin"
                                allowfullscreen>
                            </iframe>
                        @else
                            <div class="video-player-empty">
                                ভিডিওটি এই মুহূর্তে দেখা যাচ্ছে না।
                            </div>
                        @endif
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
                                    লিগেল প্রফেশ্নাল বিষয়ক তথ্য ও ভিডিও
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
                            ↗ শেয়ার করুন
                        </button>

                        <button type="button"
                                class="video-action-btn"
                                id="videoCopyBtn">
                            ▢ লিংক কপি
                        </button>

                        <span class="video-date">
                            প্রকাশের তারিখ: {{ $video->created_at ? $video->created_at->format('M d, Y') : '' }}
                        </span>

                    </div>

                </article>

                <!-- Video Description -->
                <section class="video-description-card">

                    <h2 class="video-section-title">
                        ভিডিও সম্পর্কে বিস্তারিত
                    </h2>

                    @if($descPlain != '')

                        <div class="video-description-content" id="videoDescription">

                            @if($descHasMore)

                                <p class="video-description-preview">
                                    {{ \Illuminate\Support\Str::limit($descPlain, $descLimit) }}
                                </p>

                                <!-- Read More Content -->
                                <div class="video-description-extra" id="videoDescriptionExtra">
                                    {!! $video->description_en !!}
                                </div>

                            @else

                                {!! $video->description_en !!}

                            @endif

                        </div>

                        @if($descHasMore)
                            <button type="button"
                                    class="video-read-more-btn"
                                    id="videoReadMoreBtn"
                                    aria-expanded="false"
                                    aria-controls="videoDescriptionExtra">
                                Read more <span class="read-more-arrow">⌄</span>
                            </button>
                        @endif

                    @endif

                    <!-- Content Source -->
                    <div class="bg-gray-50 dark:bg-gray-800/50 p-4 rounded-2xl border border-gray-200 dark:border-gray-700 my-6"><div class="italic text-sm md:text-base bg-white dark:bg-gray-900 p-4 rounded-lg border-l-4 border-[#008080] text-gray-700 dark:text-gray-300 space-y-1"><p><strong>Content Source:</strong> AdvocateSheba Official YouTube Channel</p><p><strong>Legal Expert Featured:</strong> এডভোকেট মোঃ আসাদুল্লাহ গালিব, সুপ্রিম কোড়ট অব বাংলাদেশ ।</p><p><strong>Content Prepared &amp; Published By:</strong> AdvocateSheba Editorial Team</p><p><strong>Last Updated:</strong> {{ $video->updated_at ? $video->updated_at->format('d F Y') : '' }}<a aria-label="Read Doctors24 editorial policy" class="text-[#008080] dark:text-red-400" href="#"> • Read Editorial Policy →</a></p></div></div>

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

                        <a href="{{ route('video.list') }}"
                           class="related-video-view-all">
                            সব ভিডিও →
                        </a>
                    </div>

                    @forelse($relatedVideos as $related)

                        <!-- Related Video -->
                        <a href="{{ route('video.details', $related->slug) }}"
                           class="related-video-item">

                            <div class="related-video-thumb">
                                <img
                                    src="{{ !empty($related->image) ? asset('uploads/video_images/'.$related->image) : asset('frontend/video-1.jpg') }}"
                                    alt="{{ $related->title }}"
                                    loading="lazy">

                                <span class="related-video-play">▶</span>
                            </div>

                            <div class="related-video-info">
                                <h3 class="related-video-title">
                                    {{ $related->title ?: 'Legal Video' }}
                                </h3>

                                <p class="related-video-meta">
                                    {{ \Illuminate\Support\Str::limit(trim(strip_tags($related->description_en ?? '')), 60) }}
                                </p>
                            </div>

                        </a>

                    @empty

                        <p class="related-video-meta">আর কোনো ভিডিও পাওয়া যায়নি।</p>

                    @endforelse

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
                        alert('ভিডিওর লিংক কপি হয়েছে।');
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
                        alert('ভিডিওর লিংক কপি হয়েছে।');
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
            href="{{ route('legal.article.list') }}"
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

            @forelse($legalArticles as $article)

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">

                    <div class="featured-article-card">

                        <div class="article-image">

                            <img
                                src="{{ $article->image ? asset('uploads/news_images/'.$article->image) : asset('frontend/f1.jpg') }}"
                                alt="{{ $article->title }}"
                            >

                            <span class="article-category">
                                {{ $article->law ? $article->law->title_en : 'Legal Article' }}
                            </span>

                        </div>


                        <div class="article-content">

                            <h4>
                                {{ $article->title }}
                            </h4>


                            <div class="article-meta">

                                <span>
                                    <i class="fa-regular fa-calendar"></i>
                                    {{ $article->date ? \Carbon\Carbon::parse($article->date)->format('M d, Y') : 'Date unavailable' }}
                                </span>

                            </div>


                            <a href="{{ route('legal.article.details', $article->slug) }}" class="read-more">
                                Read More
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12 text-center py-4">
                    <p>No legal articles available right now.</p>
                </div>

            @endforelse

        </div>

    </div>

</section>

@endsection