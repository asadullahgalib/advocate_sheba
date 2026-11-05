
@extends('frontend.layouts.master')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/legal_form.css') }}">

{{-- ==========================================
     LEGAL DOCUMENT DETAILS
========================================== --}}

<div class="container my-5 d-flex justify-content-center">

    <div class="card p-3 border-light pdf_size shadow"
         style="width:100%; max-width:850px; border-radius:12px;">

        {{-- DOCUMENT TITLE --}}

        <div class="mb-3">

            <h1 class="h5 fw-bold text-dark mb-1">
                {{ $document->title }}
            </h1>

            <div class="text-muted border-top border-bottom py-2 my-2"
                 style="font-size:13px;font-weight:500;background-color:#fafafa;color:#000;">

                Format:
                <span class="fw-bold text-success">PDF</span>

            </div>

        </div>


        {{-- DOCUMENT SUB TITLE --}}

        @if(!empty($document->sub_title))

            <div class="p-2 mb-3 text-secondary rounded-3 border-start border-primary border-4"
                 style="font-size:0.82rem;font-weight:500;background-color:#f4f7f9;color:#000;">

                {{ $document->sub_title }}

            </div>

        @endif


        {{-- PDF PREVIEW --}}

        @if($pdfUrl)

            <div class="position-relative text-center mb-3 p-2 bg-light border"
                 style="border-radius:12px;">

                <div class="bg-white p-1 rounded-2 border d-flex justify-content-center overflow-hidden"
                     style="height:480px;">

                    <object
                        data="{{ $pdfUrl }}#toolbar=0&navpanes=0"
                        type="application/pdf"
                        width="100%"
                        height="100%">

                        <embed
                            src="{{ $pdfUrl }}#toolbar=0&navpanes=0"
                            type="application/pdf"
                            width="100%"
                            height="100%">

                        Your browser does not support PDF preview.

                        <a href="{{ $pdfUrl }}" target="_blank">
                            Open PDF
                        </a>

                    </object>

                </div>

                <div class="mt-2 text-muted" style="font-size:0.75rem;">

                    <i class="fa-solid fa-arrows-up-down me-1"></i>
                    স্ক্রোল করে সম্পূর্ণ পেজগুলো দেখুন

                </div>

            </div>


            {{-- PDF ACTION BUTTONS --}}

            <div class="d-grid gap-2 mb-3">

                {{-- DOWNLOAD --}}

                <a href="{{ $pdfUrl }}"
                   download
                   class="btn btn-primary btn-sm py-2 fw-bold shadow-sm rounded-3"
                   style="background-color:#063d31;border-color:#063d31;">

                    Download Full PDF
                    <i class="fa-solid fa-download ms-1"></i>

                </a>


                {{-- PRINT / SAVE / SHARE --}}

                <div class="row g-2">

                    {{-- PRINT --}}

                    <div class="col-4">

                        <a href="{{ $pdfUrl }}"
                           target="_blank"
                           class="btn btn-sm py-2 text-dark w-100 border rounded-3 fw-semibold"
                           style="font-size:14px;background-color:#C8D7E4;">

                            Print
                            <i class="fa-solid fa-print ms-1"></i>

                        </a>

                    </div>


                    {{-- SAVE --}}

                    <div class="col-4">

                        <a href="{{ $pdfUrl }}"
                           download
                           class="btn btn-sm py-2 text-dark w-100 border rounded-3 fw-semibold"
                           style="font-size:14px;background-color:#C8D7E4;">

                            Save
                            <i class="fa-solid fa-floppy-disk ms-1"></i>

                        </a>

                    </div>


                    {{-- SHARE --}}

                    <div class="col-4">

                        <button
                            type="button"
                            onclick="sharePageLink()"
                            class="btn btn-sm py-2 text-dark w-100 border rounded-3 fw-semibold"
                            style="font-size:14px;background-color:#C8D7E4;">

                            Share
                            <i class="fa-solid fa-share-nodes ms-1"></i>

                        </button>

                    </div>

                </div>

            </div>


        @else

            {{-- PDF NOT AVAILABLE --}}

            <div class="alert alert-warning text-center">

                <i class="fa-solid fa-file-circle-exclamation me-1"></i>

                এই ফরমের PDF এখনো আপলোড করা হয়নি।

            </div>

        @endif

    </div>

</div>


{{-- ==========================================
     FIND LEGAL PROFESSIONALS
========================================== --}}

<div class="container mb-4">

    <div class="row g-2">

        <div class="col-md-3 col-6">

            <a href="{{ route('find.our.advocate-list') }}"
               class="practice-area-card text-decoration-none">

                <div class="card-1 p-3 text-center"
                     style="min-height:50px;background-color:#000;">

                    <h6 class="mb-0" style="font-size:14px;color:#fff;">
                        Find Advocates
                    </h6>

                </div>

            </a>

        </div>


        <div class="col-md-3 col-6">

            <a href="{{ route('find.our.barrister-list') }}"
               class="practice-area-card text-decoration-none">

                <div class="card-1 p-3 text-center"
                     style="min-height:50px;background-color:#000;">

                    <h6 class="mb-0" style="font-size:14px;color:#fff;">
                        Find Barristers
                    </h6>

                </div>

            </a>

        </div>


        <div class="col-md-3 col-6">

            <a href="{{ route('find.our.consultant-list') }}"
               class="practice-area-card text-decoration-none">

                <div class="card-1 p-3 text-center"
                     style="min-height:50px;background-color:#000;">

                    <h6 class="mb-0" style="font-size:14px;color:#fff;">
                        Find Legal Consultants
                    </h6>

                </div>

            </a>

        </div>


        <div class="col-md-3 col-6">

            <a href="{{ route('find.our.law-firm-list') }}"
               class="practice-area-card text-decoration-none">

                <div class="card-1 p-3 text-center"
                     style="min-height:50px;background-color:#000;">

                    <h6 class="mb-0" style="font-size:14px;color:#fff;">
                        Find Law Firms
                    </h6>

                </div>

            </a>

        </div>

    </div>

</div>


{{-- ==========================================
     SHARE FUNCTION
========================================== --}}

<script>

function sharePageLink() {

    const shareData = {
        title: @json($document->title),
        url: window.location.href
    };

    if (navigator.share) {

        navigator.share(shareData)
            .catch(function(error) {
                console.log('Sharing cancelled or failed:', error);
            });

    } else if (navigator.clipboard && window.isSecureContext) {

        navigator.clipboard.writeText(window.location.href)
            .then(function() {
                alert('লিঙ্কটি কপি করা হয়েছে!');
            })
            .catch(function() {
                alert('লিঙ্ক কপি করা সম্ভব হয়নি।');
            });

    } else {

        prompt('এই লিঙ্কটি কপি করুন:', window.location.href);

    }

}

</script>

@endsection
