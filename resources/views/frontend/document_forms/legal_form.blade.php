@extends('frontend.layouts.master')
@section('content')

<link rel="stylesheet"
      href="{{ asset('assets/css/legal_form.css') }}">
      
<!-- ==========================================
     PART 1: PDF Viewer & Core Actions Layout
     ========================================== -->

<!-- প্রজেক্টের এক্সটার্নাল লাইব্রেরি (যদি আগে থেকে যুক্ত না থাকে) -->
<link rel="stylesheet" href="https://cloudflare.com">

<div class="container my-5 d-flex justify-content-center">
    <!-- প্রিমিয়াম ইন্টারফেস কার্ড -->
    <div class="card p-3 border-light pdf_size shadow">
        <!-- হেডার ও মেটা ইনফো -->
        <div class="mb-3">
            <h1 class="h5 fw-bold text-dark mb-1">বেইল অ্যাপ্লিকেশন ফরম (Bail Application Form)</h1>
            <div class="text-muted border-top border-bottom py-1.5 my-2" style="font-size: 13px; font-weight: 500; background-color: #fafafa;color: #000 !important;">
                Format: <span class="fw-bold text-success">PDF</span> 
            </div>
        </div>

        <!-- শর্ট ডেসক্রিপশন বক্স -->
        <div class="p-2.5 mb-3 text-secondary rounded-3 border-start border-primary border-4" style="font-size: 0.82rem; font-weight: 500; background-color: #f4f7f9;color: #000 !important;">
            ফৌজদারি মামলায় জামিনের আবেদনের জন্য নির্ধারিত স্ট্যান্ডার্ড ফরম।
        </div>

        <!-- PDF প্রিভিউ কন্টেইনার -->
        <div class="position-relative text-center mb-3 p-2 bg-light border" style="border-radius: 12px;">
            <div class="bg-white p-1 rounded-2 border d-flex justify-content-center overflow-hidden" style="height: 480px;">
                <object data="{{ $pdfUrl }}#toolbar=0&navpanes=0" type="application/pdf" width="100%" height="100%">
                    <embed src="{{ $pdfUrl }}#toolbar=0&navpanes=0" type="application/pdf" width="100%" height="100%" />
                </object>
            </div>
            <div class="mt-2 text-muted" style="font-size: 0.75rem;">
                <i class="fa-solid fa-arrows-up-down me-1"></i> স্ক্রোল করে সম্পূর্ণ পেজগুলো দেখুন
            </div>
        </div>

        <!-- অ্যাকশন বাটন প্যানেল -->
        <div class="d-grid gap-2 mb-3">
            <a href="{{ $pdfUrl }}" download class="btn btn-primary btn-sm py-2.5 fw-bold shadow-sm rounded-3" style="background-color:#063d31">
                Download Full PDF <i class="fa-solid fa-download ms-1"></i>
            </a>

            <div class="row g-2">
                <div class="col-4">
                    <a href="{{ $pdfUrl }}" target="_blank" class="btn btn-sm py-2 text-dark w-100 border rounded-3 bg-secondary bg-opacity-10 fw-semibold" style="font-size: 15px;color: #000 !important;font-weight: bold !important;background-color: #C8D7E4 !important;">
                        Print <i class="fa-solid fa-print ms-0.5 text-muted" style="font-size: 15px;color: #000 !important;"></i>
                    </a>
                </div>
                <div class="col-4">
                    <a href="{{ $pdfUrl }}" download class="btn btn-sm py-2 text-dark w-100 border rounded-3 bg-secondary bg-opacity-10 text-decoration-none text-center d-block fw-semibold" style="font-size: 15px;color: #000 !important;font-weight: bold !important;background-color: #C8D7E4 !important;">
                        Save <i class="fa-solid fa-floppy-disk ms-0.5 text-muted" style="font-size: 15px;color: #000 !important;"></i>
                    </a>
                </div>
                <div class="col-4">
                    <button type="button" onclick="sharePageLink()" class="btn btn-sm py-2 text-dark w-100 border rounded-3 bg-secondary bg-opacity-10 fw-semibold" style="font-size: 15px;color: #000 !important;font-weight: bold !important;background-color: #C8D7E4 !important;">
                        Share <i class="fa-solid fa-share-nodes ms-0.5 text-muted" style="font-size: 15px;color: #000 !important;"></i>
                    </button>
                </div>
            </div>
        </div>

    </div> <!-- মেইন কার্ড শেষ (Part 1 এ শুরু হয়েছিল) -->
</div> <!-- মেইন কন্টেইনার শেষ -->

<div class="container" style="margin: -20px 0px 20px 0px;">
    <div class="row">
        <div class="col-md-3">
            <a href="{{route('find.our.advocate-list')}}"
               class="practice-area-card" 
               style="color: #fff !important;">

                <div class="card-1"
                     style="padding: 15px 5px 10px 6px;
                            margin-bottom: 5px;
                            min-height: 50px;
                            background-color: #000;">

                    <h6 style="font-size:15px;color: #fff;">
                        Find Advocates
                    </h6>

                </div>

            </a>
        </div>

        <div class="col-md-3">
            <a href="{{route('find.our.barrister-list')}}"
               class="practice-area-card" 
               style="color: #fff !important;">

                <div class="card-1"
                     style="padding: 15px 5px 10px 6px;
                            margin-bottom: 5px;
                            min-height: 50px;
                            background-color: #000;">

                    <h6 style="font-size:15px;color: #fff;">
                        Find Barristers
                    </h6>

                </div>

            </a>
        </div>

        <div class="col-md-3">
            <a href="{{route('find.our.consultant-list')}}"
               class="practice-area-card" 
               style="color: #fff !important;">

                <div class="card-1"
                     style="padding: 15px 5px 10px 6px;
                            margin-bottom: 5px;
                            min-height: 50px;
                            background-color: #000;">

                    <h6 style="font-size:15px;color: #fff;">
                        Find Legal Consultants
                    </h6>

                </div>

            </a>
        </div>

        <div class="col-md-3">
            <a href="{{route('find.our.law-firm-list')}}"
               class="practice-area-card" 
               style="color: #fff !important;">

                <div class="card-1"
                     style="padding: 15px 5px 10px 6px;
                            margin-bottom: 5px;
                            min-height: 50px;
                            background-color: #000;">

                    <h6 style="font-size:15px;color: #fff;">
                        Find Law Firms
                    </h6>

                </div>

            </a>
        </div>
    </div>
</div>


<!-- শেয়ার করার জন্য কাস্টম জাভাস্ক্রিপ্ট লজিক -->
<script>
    function sharePageLink() {
        if (navigator.share) {
            navigator.share({
                title: 'Bail Application Form',
                url: window.location.href
            }).catch(console.error);
        } else {
            navigator.clipboard.writeText(window.location.href);
            alert('লিঙ্কটি আপনার ক্লিপবোর্ডে কপি করা হয়েছে!');
        }
    }
</script>

@endsection