@extends('frontend.layouts.master')
@section('content')
<!-- ==========================================
     PART 1: PDF Viewer & Core Actions Layout
     ========================================== -->

<!-- প্রজেক্টের এক্সটার্নাল লাইব্রেরি (যদি আগে থেকে যুক্ত না থাকে) -->
<link rel="stylesheet" href="https://cloudflare.com">

<div class="container my-5 d-flex justify-content-center">
    <!-- প্রিমিয়াম ইন্টারফেস কার্ড -->
    <div class="card p-3 border-light shadow" style="max-width: 450px; width: 100%; border-radius: 16px; background-color: #ffffff;">
        <!-- হেডার ও মেটা ইনফো -->
        <div class="mb-3">
            <h1 class="h5 fw-bold text-dark mb-1">বেইল অ্যাপ্লিকেশন ফরম (Bail Application Form)</h1>
            <div class="text-muted border-top border-bottom py-1.5 my-2" style="font-size: 0.75rem; font-weight: 500; background-color: #fafafa;">
                Format: <span class="fw-bold text-danger">PDF</span> | Pages: <span class="fw-bold text-dark">2</span> | Size: 180 KB
            </div>
        </div>

        <!-- শর্ট ডেসক্রিপশন বক্স -->
        <div class="p-2.5 mb-3 text-secondary rounded-3 border-start border-primary border-4" style="font-size: 0.82rem; font-weight: 500; background-color: #f4f7f9;">
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
            <a href="{{ $pdfUrl }}" download class="btn btn-primary btn-sm py-2.5 fw-bold shadow-sm rounded-3">
                Download Full PDF <i class="fa-solid fa-download ms-1"></i>
            </a>

            <div class="row g-2">
                <div class="col-4">
                    <a href="{{ $pdfUrl }}" target="_blank" class="btn btn-sm py-2 text-dark w-100 border rounded-3 bg-secondary bg-opacity-10 fw-semibold" style="font-size: 0.8rem;">
                        Print <i class="fa-solid fa-print ms-0.5 text-muted"></i>
                    </a>
                </div>
                <div class="col-4">
                    <a href="{{ $pdfUrl }}" download class="btn btn-sm py-2 text-dark w-100 border rounded-3 bg-secondary bg-opacity-10 text-decoration-none text-center d-block fw-semibold" style="font-size: 0.8rem;">
                        Save <i class="fa-solid fa-floppy-disk ms-0.5 text-muted"></i>
                    </a>
                </div>
                <div class="col-4">
                    <button type="button" onclick="sharePageLink()" class="btn btn-sm py-2 text-dark w-100 border rounded-3 bg-secondary bg-opacity-10 fw-semibold" style="font-size: 0.8rem;">
                        Share <i class="fa-solid fa-share-nodes ms-0.5 text-muted"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- এই পার্ট ১ এর শেষ সীমানা; এর ঠিক নিচেই পার্ট ২ যুক্ত হবে -->
<!-- ==========================================
     PART 2: Dynamic Finder Grid & Share JS
     ========================================== -->

        <!-- Find Legal Professional সেকশন শুরু -->
        <div class="card p-3 border-light shadow-sm bg-white mt-3" style="border-radius: 12px; background: linear-gradient(to bottom, #ffffff, #fafafa);">
            
            <!-- ফাইন্ডার সেকশন টাইটেল -->
            <div class="fw-bold text-dark mb-3" style="font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.5px;">
                <i class="fa-solid fa-magnifying-glass me-1 text-primary"></i> Find Legal Professional
            </div>
            
            <!-- ২ কলামের রেস্পন্সিভ গ্রিড (পাশাপাশি বাটন দেখানোর জন্য) -->
            <div class="row g-2">
                
                <!-- ১. Find Advocates -->
                <div class="col-6">
                    <a href="{{ route('find.our.advocate-list') }}" class="text-decoration-none d-block">
                        <div class="d-flex justify-content-between align-items-center text-white py-2.5 px-3 h-100 transition" 
                             style="background-color: #15171c; border-radius: 8px; min-height: 48px;">
                            <span style="font-size: 0.8rem; font-weight: 500;">Find Advocates</span>
                            <i class="fa-solid fa-chevron-right" style="font-size: 9px; opacity: 0.7;"></i>
                        </div>
                    </a>
                </div>

                <!-- ২. Find Barristers -->
                <div class="col-6">
                    <a href="{{ route('find.our.barrister-list') }}" class="text-decoration-none d-block">
                        <div class="d-flex justify-content-between align-items-center text-white py-2.5 px-3 h-100 transition" 
                             style="background-color: #15171c; border-radius: 8px; min-height: 48px;">
                            <span style="font-size: 0.8rem; font-weight: 500;">Find Barristers</span>
                            <i class="fa-solid fa-chevron-right" style="font-size: 9px; opacity: 0.7;"></i>
                        </div>
                    </a>
                </div>

                <!-- ৩. Find Legal Consultants -->
                <div class="col-6">
                    <a href="{{ route('find.our.consultant-list') }}" class="text-decoration-none d-block">
                        <div class="d-flex justify-content-between align-items-center text-white py-2.5 px-3 h-100 transition" 
                             style="background-color: #15171c; border-radius: 8px; min-height: 48px;">
                            <span style="font-size: 0.8rem; font-weight: 500;">Find Legal Consultants</span>
                            <i class="fa-solid fa-chevron-right" style="font-size: 9px; opacity: 0.7;"></i>
                        </div>
                    </a>
                </div>

                <!-- ৪. Find Law Firms -->
                <div class="col-6">
                    <a href="{{ route('find.our.law-firm-list') }}" class="text-decoration-none d-block">
                        <div class="d-flex justify-content-between align-items-center text-white py-2.5 px-3 h-100 transition" 
                             style="background-color: #15171c; border-radius: 8px; min-height: 48px;">
                            <span style="font-size: 0.8rem; font-weight: 500;">Find Law Firms</span>
                            <i class="fa-solid fa-chevron-right" style="font-size: 9px; opacity: 0.7;"></i>
                        </div>
                    </a>
                </div>

            </div>
        </div>
        <!-- Find Legal Professional সেকশন শেষ -->

    </div> <!-- মেইন কার্ড শেষ (Part 1 এ শুরু হয়েছিল) -->
</div> <!-- মেইন কন্টেইনার শেষ -->


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