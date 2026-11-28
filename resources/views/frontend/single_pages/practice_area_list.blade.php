@extends('frontend.layouts.master')
@section('content')

@php
    $practiceAreas = [
        'Civil Law',
        'Criminal Law',
        'Land & Property Law',
        'Family Law',
        'Cyber & Technology Law',
        'Human Rights Law',
        'Labour & Employment Law',
        'Administrative Law',
        'Corporate & Company Law',
        'Commercial & Business Law',
        'Banking & Finance Law',
        'Tax Law',
        'Customs, VAT & Excise Law',
        'Admiralty & Maritime Law',
        'Environmental Law',
        'Intellectual Property Law',
        'Bankruptcy & Insolvency Law',
        'Artha Rin (Loan Recovery)',
        'Constitutional Law',
        'International Law',
        'Women & Child Rights',
        'Marriage & Divorce',
        'Land Survey & Mutation',
    ];
@endphp

<style>
    @media only screen and (min-width: 320px) and (max-width: 768px) {
        .section-title .title p {
            font-size: 14px !important;
            margin-top: -33px;
            margin-bottom: 25px;
            font-style: italic;
        }
    }
</style>
<link rel="stylesheet" href="{{ asset('assets/css/practice-area-modal.css') }}">

<section class="popular-categories section-padding"
         style="background-color:#f5f5f5; padding:0px 0px 0px 0px; margin-bottom:15px; border-radius:15px;">

    <div class="container">
        <div class="flex justify-between items-center mt-2">
            <div class="my-4">
                <h2 class="text-lg md:text-xl font-semibold text-gray-800 dark:text-gray-100">
                    Find Legal Professionals by Practice Area
                </h2>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Explore Practice Area
                </p>
            </div>
        </div>

        <div class="row">
            @foreach($practiceAreas as $area)
                <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-3">
                    <a href="#"
                       class="practice-area-card"
                       data-area-name="{{ $area }}"
                       data-bs-toggle="modal"
                       data-bs-target="#practiceAreaModal">

                        <div class="card-1"
                             style="padding:25px 5px 10px 10px; margin-bottom:5px; min-height:70px;">
                            <h6 style="font-size:15px">{{ $area }}</h6>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- =========================================================
     FIRST MODAL
========================================================= -->
<div class="modal fade provider-type-modal"
     id="practiceAreaModal"
     tabindex="-1"
     aria-labelledby="practiceAreaModalLabel"
     aria-hidden="true">

    <div class="modal-dialog provider-modal-dialog modal-sm">
        <div class="modal-content provider-modal-content">

            <button type="button" class="provider-modal-close" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-times-circle"></i>
            </button>

            <div class="modal-body provider-modal-body">

                <h4 class="provider-modal-title" id="practiceAreaModalLabel">
                    Find <span id="modalAreaName">property law</span> expert
                </h4>

                <p class="provider-modal-subtitle">Select provider type</p>

                <div class="provider-type-grid">

                    <button type="button" class="provider-type-btn" data-provider-type="advocate"
                            data-bs-toggle="modal" data-bs-target="#locationSelectionModal" data-bs-dismiss="modal">
                        Advocate
                    </button>

                    <button type="button" class="provider-type-btn" data-provider-type="barrister"
                            data-bs-toggle="modal" data-bs-target="#locationSelectionModal" data-bs-dismiss="modal">
                        Barrister
                    </button>

                    <button type="button" class="provider-type-btn" data-provider-type="law-firm"
                            data-bs-toggle="modal" data-bs-target="#locationSelectionModal" data-bs-dismiss="modal">
                        Law firm
                    </button>

                    <button type="button" class="provider-type-btn" data-provider-type="legal-consultant"
                            data-bs-toggle="modal" data-bs-target="#locationSelectionModal" data-bs-dismiss="modal">
                        Legal consultants
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- =========================================================
     SECOND MODAL
========================================================= -->
<div class="modal fade practice-area-modal"
     id="locationSelectionModal"
     tabindex="-1"
     aria-labelledby="locationSelectionModalLabel"
     aria-hidden="true">

    <div class="modal-dialog practice-area-modal-dialog">
        <div class="modal-content practice-area-modal-content">

            <button type="button" class="practice-area-close" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa fa-times-circle"></i>
            </button>

            <div class="modal-body practice-area-modal-body">

                <h4 class="practice-area-title" id="locationSelectionModalLabel">
                    Find <span id="modalAreaName2">property law</span> advocate <br>
                    <span style="font-size:13px">Select Location</span>
                </h4>

                <div class="practice-area-grid">
                    @foreach(['Dhaka','Khulna','Rangpur','Rajshahi','Barisal','Gazipur','Sylhet','Kishoreganj','Comilla','Feni'] as $city)
                        <a href="{{ route('our.location-wise-list') }}" class="practice-area-option">
                            {{ $city }}
                        </a>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    // কার্ডে ক্লিক করলে modal এর শিরোনামে Practice Area এর নাম বসবে
    document.querySelectorAll('.practice-area-card').forEach(function (card) {
        card.addEventListener('click', function () {
            var name = this.getAttribute('data-area-name');
            document.getElementById('modalAreaName').textContent = name;
            document.getElementById('modalAreaName2').textContent = name;
        });
    });

});
</script>

@endsection