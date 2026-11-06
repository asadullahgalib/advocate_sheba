@extends('frontend.layouts.master')
@section('content')

<style>
    /* Video Thumbnail */
    .video-thumb {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        cursor: pointer;
    }

    .video-thumb img {
        width: 100%;
        height: auto;
        display: block;
        transition: all 0.4s ease;
    }

    /* Overlay */
    .video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.45);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }

    /* YouTube Icon */
    .youtube-icon {
        width: 60px;
        height: 60px;
        background: #ff0000;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transform: scale(0.7);
        transition: all 0.3s ease;
    }

    .youtube-icon i {
        color: #fff;
        font-size: 28px;
        margin-left: 4px;
    }

    /* Hover Effect */
    .video-thumb:hover .video-overlay {
        opacity: 1;
        visibility: visible;
    }

    .video-thumb:hover .youtube-icon {
        transform: scale(1);
    }

    /* Image Zoom */
    .video-thumb:hover img {
        transform: scale(1.05);
    }
</style>

<!-- ============================
     VIDEO GALLERY LIST START
============================= -->

<div class="page-content mb-50" style="padding: 0px 0px 10px 0px;background-color: #ffffff;margin-bottom: -20px !important;border-radius: 15px;">

    <div class="container">

        <div class="flex justify-between items-center mt-2">

            <div class="my-4">

                <h2 class="text-lg md:text-xl font-semibold text-gray-800 dark:text-gray-100">
                    Latest Video
                </h2>

                <p class="text-sm text-gray-600 dark:text-gray-400">
                    আইন সম্পর্কে জানুন ভিডিও দেখে
                </p>

            </div>

        </div>

        <div class="row">

            @forelse($videos as $video)

                <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">

                    <div class="post-thumb">

                        <a href="{{ route('video.details', $video->slug) }}">

                            <div class="video-thumb">

                                <img
                                    src="{{ !empty($video->image) ? asset('uploads/video_images/'.$video->image) : asset('frontend/video-1.jpg') }}"
                                    alt="{{ $video->title }}"
                                >

                                <div class="video-overlay">

                                    <div class="youtube-icon">
                                        <i class="fa fa-play"></i>
                                    </div>

                                </div>

                            </div>

                        </a>

                    </div>

                    <div class="entry-content-2">

                        <h4 class="post-title mb-15" style="font-size:17px;margin-top:15px;">

                            <a href="{{ route('video.details', $video->slug) }}">
                                {{ $video->title }}
                            </a>

                        </h4>

                    </div>

                </article>

            @empty

                <div class="col-12 text-center py-4">

                    <p>No videos available right now.</p>

                </div>

            @endforelse

        </div>

    </div>

</div>

<!-- ============================
     VIDEO GALLERY LIST END
============================= -->

@endsection