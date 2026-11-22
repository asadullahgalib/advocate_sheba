<!-- ============================
     LEGAL ARTICLES SECTION START
============================= -->

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/legal-service-article.css') }}">

<section class="legal-articles-section" style="background: #f7f8fa;padding: 0px 0px 0px 0px;">

    <div class="container-fluid">

        <!-- FEATURED ARTICLES HEADER -->

        <div class="flex justify-between items-center mt-2">

            <div class="my-4">
                <h2 id="hospitals-by-location" class="text-lg md:text-xl font-semibold text-gray-800 dark:text-gray-100">
                    Legal Articles
                </h2>

                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Explore Legal Articles
                </p>
            </div>

            <a href="{{ route('legal.article.list') }}" aria-label="" class="flex items-center gap-1 text-[#008080] text-sm font-semibold hover:underline transition">
                View All

                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>

        </div>


        <!-- FEATURED ARTICLES -->

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

<!-- ============================
     LEGAL ARTICLES SECTION END
============================= -->