@extends('frontend.layouts.master')
@section('content')
<!-- ============================
     LEGAL ARTICLES LIST START
============================= -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/legal-service-article.css') }}">

<section class="legal-articles-section" style="background: #f7f8fa;padding: 0px 0px 0px 0px;">

    <div class="container-fluid">

        <div class="flex justify-between items-center mt-2">
            <div class="my-4">
                <h2 class="text-lg md:text-xl font-semibold text-gray-800 dark:text-gray-100">
                    Legal Articles
                </h2>

                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Explore Legal Articles
                </p>
            </div>
        </div>

        <div class="row featured-articles-row">

            @forelse($articles as $article)

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

        <div class="d-flex justify-content-center my-4">
            {{ $articles->links() }}
        </div>

    </div>

</section>
<!-- ============================
     LEGAL ARTICLES LIST END
============================= -->
@endsection