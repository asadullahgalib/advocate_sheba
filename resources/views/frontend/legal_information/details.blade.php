@extends('frontend.layouts.master')
@section('content')

<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link rel="stylesheet"
      href="{{ asset('assets/css/practice-area-modal.css') }}">

<link rel="stylesheet"
      href="{{ asset('assets/css/court_details.css') }}">
<style>
    .faq-question{
        min-height: 50px;
        padding: 15px 10px;
        font-size: 19px;
    }
</style>

<div class="doctors-blog-page" style="margin-bottom: 20px;">

    <div class="blog-container">


        <!-- =================================================
             BLOG HEADER
        ================================================== -->

        <div class="blog-header"
             style="padding: 15px 0px 0px 0px; margin-bottom: -15px;">

            <h1 class="blog-title">
                <i class="fa fa-bank"></i> {{ $legalInfo->title_en }}
            </h1>

        </div>


        <!-- =================================================
             OVERVIEW
        ================================================== -->

        <div class="row">

            <div class="col-md-12">

                <div class="blog-article-content">

                    <h4 style="margin-bottom: 10px;">
                        {!! $legalInfo->description_en !!}
                    </h4>
                </div>

            </div>

        </div>

        <!-- ===============================
             FAQ
        ================================ -->

        <div class="faq-card">

            <div class="faq-accordion"
                 id="civilCourtFaq">

                @forelse($legalInfo->details as $detail)

                    <div class="faq-item {{ $loop->first ? 'active' : '' }}">

                        <button class="faq-question"
                                type="button">

                            <span>
                                {{ $detail->title_bn }} <br>
                                {{ $detail->title_en }}
                            </span>

                            <i class="bi {{ $loop->first ? 'bi-chevron-up' : 'bi-chevron-down' }}"></i>

                        </button>


                        <div class="faq-answer">

                            {!! $detail->description_en !!}

                        </div>

                    </div>

                @empty

                    <div class="text-center py-4">
                        <p>এই বিষয়ে এখনো কোনো তথ্য যোগ করা হয়নি।</p>
                    </div>

                @endforelse

            </div>

        </div>

        @include('frontend.layouts.find_professional_single')

    </div>

</div>

<!-- =========================================================
     FAQ JAVASCRIPT
========================================================= -->

<script>

document.addEventListener('DOMContentLoaded', function () {


    /*
    |--------------------------------------------------------------------------
    | LEGAL INFORMATION FAQ
    |--------------------------------------------------------------------------
    */

    const civilFaq = document.getElementById('civilCourtFaq');

    if (civilFaq) {

        const civilQuestions =
            civilFaq.querySelectorAll('.faq-question');


        civilQuestions.forEach(function (question) {

            question.addEventListener('click', function () {

                const currentItem =
                    this.closest('.faq-item');

                const isActive =
                    currentItem.classList.contains('active');


                /*
                |--------------------------------------------------------------------------
                | শুধু এই FAQ-এর item বন্ধ হবে
                |--------------------------------------------------------------------------
                */

                civilFaq.querySelectorAll('.faq-item')
                    .forEach(function (item) {

                        item.classList.remove('active');

                        const icon =
                            item.querySelector('.faq-question i');

                        if (icon) {

                            icon.classList.remove('bi-chevron-up');

                            icon.classList.add('bi-chevron-down');

                        }

                    });


                /*
                |--------------------------------------------------------------------------
                | Current FAQ open
                |--------------------------------------------------------------------------
                */

                if (!isActive) {

                    currentItem.classList.add('active');

                    const icon =
                        currentItem.querySelector('.faq-question i');

                    if (icon) {

                        icon.classList.remove('bi-chevron-down');

                        icon.classList.add('bi-chevron-up');

                    }

                }

            });

        });

    }


});

</script>


@endsection