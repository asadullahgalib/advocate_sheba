@extends('frontend.layouts.master')

@section('content')

<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/who-is-advocate.css')}}">

<div class="legal-info-container" style="margin-top: 20px;">

    @if($designation)
    <!-- About Designation -->
    <h5 style="margin-bottom:15px;">{{ $designation->title }}</h5>
    <div class="legal-info-card">

        <div class="legal-info-header">

            <div class="legal-info-icon">
                <i class="{{ $designation->icon }}"></i>
            </div>

            <div class="legal-info-content">

                <div class="legal-info-description">
                    {!! $designation->description !!}
                </div>

            </div>
        </div>
    </div>
    @endif

    <!-- Details Cards -->
    @foreach($designation_details as $detail)
    <div class="legal-info-card">

        <div class="legal-info-header">

            <div class="legal-info-icon">
                <i class="{{ $detail->icon }}"></i>
            </div>

            <div class="legal-info-content">

                <h3 class="legal-info-title">{{ $detail->title }}</h3>

                <p class="legal-info-description">
                    {{ $detail->sub_title }}
                </p>

                <button type="button"
                        class="legal-info-toggle"
                        aria-expanded="false">
                    <span class="legal-info-toggle-text">বিস্তারিত পড়ুন</span>
                    <span class="legal-info-arrow">↓</span>
                </button>

            </div>
        </div>

        <div class="legal-info-details" hidden>
            {!! $detail->description_en !!}
        </div>
    </div>
    @endforeach

</div>

@include('frontend.layouts.find_professional')

<script>
(function () {
    function initializeLegalInfoCards() {

        // শুধু এই কম্পোনেন্টের বক্সগুলো নিয়ন্ত্রণ করবে
        const containers = document.querySelectorAll('.legal-info-container');

        containers.forEach(function (container) {

            // একই container-এ listener যেন দ্বিতীয়বার যুক্ত না হয়
            if (container.dataset.legalInfoInitialized === 'true') {
                return;
            }

            container.dataset.legalInfoInitialized = 'true';

            const cards = container.querySelectorAll('.legal-info-card');

            cards.forEach(function (card) {

                const button = card.querySelector('.legal-info-toggle');
                const details = card.querySelector('.legal-info-details');

                if (!button || !details) {
                    return;
                }

                // শুরুতে সব বক্স বন্ধ থাকবে
                card.classList.remove('is-open');
                button.setAttribute('aria-expanded', 'false');
                details.hidden = true;

                button.addEventListener('click', function () {

                    const shouldOpen = !card.classList.contains('is-open');

                    // একই container-এর অন্য বক্সগুলো বন্ধ করা
                    cards.forEach(function (otherCard) {

                        otherCard.classList.remove('is-open');

                        const otherButton =
                            otherCard.querySelector('.legal-info-toggle');

                        const otherDetails =
                            otherCard.querySelector('.legal-info-details');

                        if (otherButton && otherDetails) {
                            otherButton.setAttribute('aria-expanded', 'false');
                            otherDetails.hidden = true;

                            const otherText =
                                otherButton.querySelector('.legal-info-toggle-text');

                            if (otherText) {
                                otherText.textContent = 'বিস্তারিত পড়ুন';
                            }

                            const otherArrow =
                                otherButton.querySelector('.legal-info-arrow');

                            if (otherArrow) {
                                otherArrow.textContent = '↓';
                            }
                        }
                    });

                    // ক্লিক করা বক্সটি আগে বন্ধ থাকলে খুলবে
                    if (shouldOpen) {

                        card.classList.add('is-open');
                        button.setAttribute('aria-expanded', 'true');
                        details.hidden = false;

                        const text =
                            button.querySelector('.legal-info-toggle-text');

                        if (text) {
                            text.textContent = 'সংক্ষিপ্ত করুন';
                        }

                        const arrow =
                            button.querySelector('.legal-info-arrow');

                        if (arrow) {
                            arrow.textContent = '↑';
                        }
                    }
                });
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener(
            'DOMContentLoaded',
            initializeLegalInfoCards
        );
    } else {
        initializeLegalInfoCards();
    }
})();
</script>

@endsection