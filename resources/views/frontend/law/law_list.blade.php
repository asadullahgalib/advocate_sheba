@extends('frontend.layouts.master')
@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/legal-service-article.css') }}">

<section class="legal-articles-section" style="background: #f7f8fa;padding: 40px 0px;">

    <div class="container-fluid">

        <div class="my-4">
            <h2
                class="text-lg md:text-xl font-semibold text-gray-800 dark:text-gray-100"
            >
                Legal Services
            </h2>

            <p class="text-sm text-gray-600 dark:text-gray-400">
                Explore Legal Knowledge by Topic
            </p>
        </div>

        <div class="row legal-topics-row">

            @forelse($laws as $law)

                <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                    <div class="legal-topic-card">

                        <div class="topic-icon">
                            <i class="{{ $law->icon ?: 'fa-solid fa-scale-balanced' }}"></i>
                        </div>

                        <h4>{{ $law->title_en }}</h4>

                        <p>
                            {{ \Illuminate\Support\Str::limit(strip_tags($law->description_en ?? ''), 100) }}
                        </p>

                        @if(!empty($law->slug))
                            <a href="{{ route('law.details', $law->slug) }}">
                                Explore Articles
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        @endif

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

@endsection