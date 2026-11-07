
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/legal-service-article.css') }}">

<section class="legal-articles-section" style="background: #f7f8fa;padding: 0px 0px 0px 0px;">

    <div class="container-fluid">

        <div class="flex justify-between items-center mt-2">
            <div class="my-4">
                <h2
                    id="hospitals-by-location"
                    class="text-lg md:text-xl font-semibold text-gray-800 dark:text-gray-100"
                >
                    Legal Services
                </h2>

                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Explore Legal Knowledge by Topic
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

        <!-- LEGAL TOPICS DYNAMIC CARDS -->

        <div class="row legal-topics-row">

            @forelse($laws as $law)

                <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                    <div class="legal-topic-card">

                        <div class="topic-icon">
                            <i class="fa-solid fa-scale-balanced"></i>
                        </div>

                        <h4>{{ $law->title_en }}</h4>

                        <p>
                            {{ \Illuminate\Support\Str::limit(strip_tags($law->description_en ?? ''), 100) }}
                        </p>

                        <a href="{{ route('law.details', $law->id) }}">
                            Explore Articles
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </div>

            @empty

                <div class="col-12 text-center py-4">
                    <p>No Legal Services Available.</p>
                </div>

            @endforelse

        </div>

    </div>

</section>
