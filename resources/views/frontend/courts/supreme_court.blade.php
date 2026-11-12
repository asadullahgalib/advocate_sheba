@extends('frontend.layouts.master')
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="{{ asset('assets/css/practice-area-modal.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/court_details.css') }}">

<div class="doctors-blog-page">
    <div class="blog-container">

        <!-- =================================================
             BLOG HEADER (Dynamic Court Name)
        ================================================== -->
        <div class="blog-header" style="padding: 15px 0px 0px 0px; margin-bottom: -15px;">
            <h1 class="blog-title">
                <i class="fa fa-bank"></i> {{ $court->name }}
            </h1>
        </div>

        <!-- =================================================
             OVERVIEW (Dynamic Court Description)
        ================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="blog-article-content">
                    <h4 style="margin-bottom: 10px;">Overview</h4>
                    {{-- ডাটাবেস থেকে CKEditor এর HTML আসতে পারে তাই {!! !!} ব্যবহার করা হলো --}}
                    <div class="court-overview-text">
                        {!! $court->description_en !!}
                    </div>
                </div>
            </div>
        </div>

        <!-- =================================================
             TAB SYSTEM (Dynamic Sub Courts)
        ================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="district-court-tabs">

                    <!-- TAB BUTTONS -->
                    <ul class="nav district-tab-buttons" id="districtCourtTab" role="tablist">
                        @foreach($subCourts as $key => $subCourt)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link {{ $key == 0 ? 'active' : '' }}"
                                    id="tab-btn-{{ $subCourt->id }}"
                                    data-bs-toggle="tab"
                                    data-bs-target="#tab-content-{{ $subCourt->id }}"
                                    type="button"
                                    role="tab"
                                    aria-controls="tab-content-{{ $subCourt->id }}"
                                    aria-selected="{{ $key == 0 ? 'true' : 'false' }}">
                                {{ $subCourt->name }}
                            </button>
                        </li>
                        @endforeach
                    </ul>

                    <!-- TAB CONTENT -->
                    <div class="tab-content district-tab-content" id="districtCourtTabContent">
                        @foreach($subCourts as $key => $subCourt)
                        <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}"
                             id="tab-content-{{ $subCourt->id }}"
                             role="tabpanel"
                             aria-labelledby="tab-btn-{{ $subCourt->id }}"
                             tabindex="0">

                            <!-- Sub Court Overview -->
                            <h4>{{ $subCourt->name }} — Overview</h4>
                            <div>
                                {!! $subCourt->description_en !!}
                            </div>

                            <!-- Sub Court Details (FAQ) -->
                            <div class="faq-card {{ $key > 0 ? 'criminal-faq-card' : '' }}">
                                <div class="faq-accordion" id="faqAccordion-{{ $subCourt->id }}">
                                    
                                    @php
                                        // এই Sub Court এর অধীনে থাকা Details গুলো আনছি
                                        $details = \App\Model\SubCourtDetail::where('sub_court_id', $subCourt->id)->get();
                                    @endphp

                                    @foreach($details as $dKey => $detail)
                                    <div class="faq-item {{ $dKey == 0 ? 'active' : '' }}">
                                        <button class="faq-question" type="button">
                                            <span>{{ $detail->title }}</span>
                                            <i class="bi {{ $dKey == 0 ? 'bi-chevron-up' : 'bi-chevron-down' }}"></i>
                                        </button>

                                        <div class="faq-answer">
                                            <p>{!! $detail->description_en !!}</p>
                                        </div>
                                    </div>
                                    @endforeach

                                    @if($details->isEmpty())
                                        <p class="text-muted">No details found for this court.</p>
                                    @endif

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    @include('frontend.layouts.find_professional_single')

                </div>
            </div>
        </div>

    </div>
</div>

<!-- =========================================================
     FAQ JAVASCRIPT (Multiple Tabs Supported)
========================================================= -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    // সব Accordion কে খুঁজে বের করছি (যাতে যতগুলো Tab থাকুক সবগুলোতে কাজ করে)
    const allFaqAccordions = document.querySelectorAll('.faq-accordion');

    allFaqAccordions.forEach(function (faq) {
        const questions = faq.querySelectorAll('.faq-question');

        questions.forEach(function (question) {
            question.addEventListener('click', function () {
                const currentItem = this.closest('.faq-item');
                const isActive = currentItem.classList.contains('active');

                // শুধু এই FAQ-এর ভেতরের item বন্ধ হবে
                faq.querySelectorAll('.faq-item').forEach(function (item) {
                    item.classList.remove('active');
                    const icon = item.querySelector('.faq-question i');
                    if (icon) {
                        icon.classList.remove('bi-chevron-up');
                        icon.classList.add('bi-chevron-down');
                    }
                });

                // Current item open
                if (!isActive) {
                    currentItem.classList.add('active');
                    const icon = currentItem.querySelector('.faq-question i');
                    if (icon) {
                        icon.classList.remove('bi-chevron-down');
                        icon.classList.add('bi-chevron-up');
                    }
                }
            });
        });
    });
});
</script>

@endsection