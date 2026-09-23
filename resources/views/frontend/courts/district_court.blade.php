@extends('frontend.layouts.master')
@section('content')

    <style>
    /* ==========================================================================
       ১. গ্লোবাল এবং লেআউট ব্যাকগ্রাউন্ড (Page Wrapper)
       ========================================================================== */
    .court-system-wrapper {
        background-color: #F8F9FA; 
        font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    }
    
    .main-display-card {
        background-color: #F8F9FA; 
    }
    
    .section-label {
        font-size: 0.72rem;
        font-weight: 700;
        text-transform: uppercase;
        color: #9CA3AF;
        letter-spacing: 0.8px;
    }
    
    .shadow-xs {
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04);
    }

    /* ==========================================================================
       ২. বাম পাশের কার্ড আর্কিটেকচার (OUTER VIEW)
       ========================================================================== */
    .outer-view-card {
        border-radius: 14px;
        border: 1px solid #E5E7EB;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.01);
    }
    
    .content-title-sm {
        color: #1F2937;
        font-size: 0.95rem;
    }
    
    .content-text-sm {
        font-size: 0.84rem;
        color: #4B5563 !important;
    }
    
    .guideline-text {
        font-size: 0.76rem;
        color: #9CA3AF;
        font-style: italic;
    }

    /* ==========================================================================
       ৩. ইন্টারেক্টিভ বাটন গ্রুপ (Tab Navigation Buttons)
       ========================================================================== */
    .court-interactive-btn {
        border-radius: 10px;
        border: 1px solid #E5E7EB !important;
        transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        min-height: 100px;
    }
    
    .court-interactive-btn:hover {
        background-color: #F9FAFB !important;
        border-color: #D1D5DB !important;
        transform: translateY(-1px);
    }
    
    .court-interactive-btn .btn-main-title {
        font-size: 0.88rem;
    }
    
    .court-interactive-btn .btn-action-text {
        font-size: 0.72rem;
        font-weight: 500;
    }
    
    .court-interactive-btn.active {
        background-color: #F0F7FF !important;
        border-color: #3B82F6 !important;
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.08) !important;
    }
    
    .footer-note-text {
        font-size: 0.74rem;
        color: #6B7280 !important;
    }

    /* ==========================================================================
       ৪. ডান পাশের ডার্ক ম্যাট কন্টেইনার (INNER VIEW)
       ========================================================================== */
    .inner-view-container {
        background-color: #F3F4F6 !important; 
        border: 1px solid #E5E7EB;
        border-radius: 14px;
    }
    
    .custom-breadcrumb {
        font-size: 0.72rem;
    }
    
    .custom-breadcrumb .breadcrumb-item + .breadcrumb-item::before {
        content: ">";
        color: #9CA3AF;
    }

    /* ==========================================================================
       ৫. অ্যাকর্ডিয়ন এবং ড্রপডাউন সূক্ষ্ম টিউনিং (Accordion UI)
       ========================================================================== */
    .custom-court-accordion .accordion-item {
        border-radius: 10px !important;
    }
    
    .border-highlight-green {
        border: 1px solid #A7F3D0 !important; 
    }
    
    .custom-court-accordion .accordion-button {
        padding: 12px 16px;
        font-size: 0.84rem;
        box-shadow: none !important;
    }
    
    .custom-court-accordion .accordion-button:not(.collapsed) {
        color: #1F2937;
    }
    
    .custom-court-accordion .accordion-button::after {
        width: 0.82rem;
        height: 0.82rem;
        background-size: 0.82rem;
    }
    
    .court-bullet-list {
        padding-left: 1rem;
        font-size: 0.82rem;
        line-height: 1.6;
    }
    
    .italic-text {
        font-style: italic;
        font-size: 0.78rem;
    }

    /* ==========================================================================
       ৬. নিচে থাকা অ্যাকশন বাটন (Lawyers Practicing Button)
       ========================================================================== */
    .btn-action-lawyer {
        background-color: #FFFFFF;
        border: 1px solid #D1D5DB;
        border-radius: 10px;
        color: #374151;
        font-size: 0.84rem;
        font-weight: 600;
        transition: all 0.2s ease;
    }
    
    .btn-action-lawyer:hover {
        background-color: #F9FAFB;
        border-color: #9CA3AF;
        color: #111827;
    }
</style>
<main class="main pages" style="background-color: #f5f5f5; border-radius: 15px; margin-bottom: 10px;">
    <div class="page-content pt-50" style="padding: 20px 0px 10px 0px !important;">
        <div class="container">
            <div class="archive-header-2">
                <div class="court-system-wrapper py-4">
                    <div class="card main-display-card p-4 border-0">
                        
                        <!-- শিরোনাম এরিয়া -->
                        <div class="d-flex align-items-center mb-4 ps-2">
                            <div class="me-3 d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; background: #eef2f6; border-radius: 8px;">
                                <i class="fa-solid fa-building-columns text-secondary fs-4"></i>
                            </div>
                            <h3 class="fw-bold m-0 text-dark" style="font-size: 1.6rem; letter-spacing: -0.5px;">District Courts</h3>
                        </div>

                        <!-- বুটস্ট্র্যাপের মেইন রো (Row) যা দুই অংশকে পাশাপাশি ৬ বাই ৬ করে রাখবে -->
                        <div class="row g-4">
                            
                            <!-- ================= [বাম পাশ - OUTER VIEW (সমান ৫০% চওড়া)] ================= -->
                            <div class="col-lg-6 col-md-12 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
                                <div class="section-label mb-2 ps-1">বাহির (OUTER)</div>
                                <div class="outer-view-card bg-white p-4 h-100 d-flex flex-column justify-content-between">
                                    <div>
                                        <!-- Overview Block -->
                                        <div class="mb-4">
                                            <h6 class="content-title-sm fw-bold mb-2">Overview</h6>
                                            <p class="content-text-sm text-secondary lh-lg mb-0">
                                                জেলা পর্যায়ের বিচার ব্যবস্থা, দেওয়ানি ও ফৌজদারি — দুটি শাখায় বিভক্ত।
                                            </p>
                                        </div>
                                        
                                        <!-- গাইডলাইন নির্দেশনা টেক্সট -->
                                        <p class="guideline-text mb-3">
                                            নিচের যেকোনো একটিতে ট্যাপ করলে ভিতরের পেজটি খুলবে ↓
                                        </p>
                                        
                                        <!-- বাটন গ্রুপ (Bootstrap Nav-Pills) -->
                                        <div class="nav flex-row row g-3" id="court-tab-system" role="tablist">
                                            <!-- Civil Courts Button -->
                                            <div class="col-6">
                                                <button class="nav-link active w-100 court-interactive-btn p-3 bg-white text-start d-flex flex-column justify-content-between" 
                                                        id="pill-civil-tab" data-bs-toggle="pill" data-bs-target="#panel-civil" type="button" role="tab" aria-controls="panel-civil" aria-selected="true">
                                                    <span class="btn-main-title text-dark fw-bold mb-2">Civil Courts</span>
                                                    <span class="btn-action-text text-primary text-center w-100">View Details <i class="fa-solid fa-angle-right ms-1 small"></i></span>
                                                </button>
                                            </div>
                                            
                                            <!-- Criminal Courts Button -->
                                            <div class="col-6">
                                                <button class="nav-link w-100 court-interactive-btn p-3 bg-white text-start d-flex flex-column justify-content-between" 
                                                        id="pill-criminal-tab" data-bs-toggle="pill" data-bs-target="#panel-criminal" type="button" role="tab" aria-controls="panel-criminal" aria-selected="false">
                                                    <span class="btn-main-title text-dark fw-bold mb-2">Criminal Courts</span>
                                                    <span class="btn-action-text text-primary text-center w-100">View Details <i class="fa-solid fa-angle-right ms-1 small"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- ফুটার বিশেষ দ্রষ্টব্য নোট -->
                                    <div class="mt-4 pt-3 border-top border-light-subtle">
                                        <p class="footer-note-text text-muted mb-0 lh-base">
                                            <span class="text-danger fw-bold">*</span> ঢাকা/চট্টগ্রামে Criminal Courts এর নাম হবে "Metropolitan Sessions/Magistrate"
                                        </p>
                                    </div>
                                </div>
                            </div> <!-- বাম পাশ শেষ -->
                            <!-- ================= [ডান পাশ - INNER VIEW (সমান ৫০% চওড়া)] ================= -->
                            <div class="col-lg-6 col-md-12">
                                <div class="section-label mb-2 ps-1">ভিতর (INNER) — CIVIL / CRIMINAL COURTS</div>
                                <div class="tab-content h-100" id="court-tab-content-system">
                                    
                                    <!-- ----------------- কন্টেন্ট প্যানেল ১: Civil Courts ----------------- -->
                                    <div class="tab-pane fade show active h-100" id="panel-civil" role="tabpanel" aria-labelledby="pill-civil-tab">
                                        <div class="inner-view-container p-4 h-100 d-flex flex-column">
                                            <nav aria-label="breadcrumb" class="mb-3">
                                                <ol class="breadcrumb custom-breadcrumb mb-0">
                                                    <li class="breadcrumb-item text-muted">District Courts</li>
                                                    <li class="breadcrumb-item active text-dark fw-semibold" aria-current="page">Civil Courts</li>
                                                </ol>
                                            </nav>
                                            
                                            <div class="bg-white p-3 rounded-3 shadow-xs border-0 mb-3">
                                                <h6 class="content-title-sm fw-bold mb-2">Overview</h6>
                                                <p class="content-text-sm text-secondary mb-0 lh-base">
                                                    দেওয়ানি মামলার জন্য জেলা পর্যায়ের আদালত ব্যবস্থা।
                                                </p>
                                            </div>

                                            <div class="accordion custom-court-accordion" id="accordionCivil">
                                                <div class="accordion-item mb-2 border-0 shadow-xs rounded-3 overflow-hidden border-highlight-green">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#drop-civ-jurisdiction" aria-expanded="true">
                                                            Jurisdiction
                                                        </button>
                                                    </h2>
                                                    <div id="drop-civ-jurisdiction" class="accordion-collapse collapse show" data-bs-parent="#accordionCivil">
                                                        <div class="accordion-body text-secondary bg-white pt-1 pb-3">
                                                            <ul class="court-bullet-list mb-0">
                                                                <li>আর্থিক অংক অনুযায়ী ভাগ <span class="text-muted italic-text">(pecuniary)</span></li>
                                                                <li>আঞ্চলিক <span class="text-muted italic-text">territorial jurisdiction</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="accordion-item mb-2 border-0 shadow-xs rounded-3 overflow-hidden border-highlight-green">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#drop-civ-casetypes" aria-expanded="true">
                                                            Case types
                                                        </button>
                                                    </h2>
                                                    <div id="drop-civ-casetypes" class="accordion-collapse collapse show" data-bs-parent="#accordionCivil">
                                                        <div class="accordion-body text-secondary bg-white pt-1 pb-3">
                                                            <ul class="court-bullet-list mb-0">
                                                                <li>সম্পত্তি বিরোধ • চুক্তি সংক্রান্ত মামলা • পারিবারিক সম্পত্তি</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <button class="btn btn-action-lawyer w-100 text-start py-3 px-4 mt-auto shadow-sm">
                                                <i class="fa-solid fa-gavel text-muted small me-2"></i> Lawyers practicing here
                                            </button>
                                        </div>
                                    </div>
                                    <!-- ----------------- কন্টেন্ট প্যানেল ২: Criminal Courts ----------------- -->
                                    <div class="tab-pane fade h-100" id="panel-criminal" role="tabpanel" aria-labelledby="pill-criminal-tab">
                                        <div class="inner-view-container p-4 h-100 d-flex flex-column">
                                            <nav aria-label="breadcrumb" class="mb-3">
                                                <ol class="breadcrumb custom-breadcrumb mb-0">
                                                    <li class="breadcrumb-item text-muted">District Courts</li>
                                                    <li class="breadcrumb-item active text-dark fw-semibold" aria-current="page">Criminal Courts</li>
                                                </ol>
                                            </nav>
                                            
                                            <div class="bg-white p-3 rounded-3 shadow-xs border-0 mb-3">
                                                <h6 class="content-title-sm fw-bold mb-2">Overview</h6>
                                                <p class="content-text-sm text-secondary mb-0 lh-base">
                                                    ফৌজদারি বা অপরাধমূলক মামলার জন্য জেলা পর্যায়ের আদালত ব্যবস্থা।
                                                </p>
                                            </div>
                                            
                                            <div class="accordion custom-court-accordion" id="accordionCriminal">
                                                <div class="accordion-item mb-4 border-0 shadow-xs rounded-3 overflow-hidden">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button fw-bold text-dark bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#drop-crim-jurisdiction" aria-expanded="true">
                                                            Jurisdiction
                                                        </button>
                                                    </h2>
                                                    <div id="drop-crim-jurisdiction" class="accordion-collapse collapse show" data-bs-parent="#accordionCriminal">
                                                        <div class="accordion-body text-secondary bg-white pt-1 pb-3">
                                                            <!-- ২ ভাগে বিভক্ত জুরিসডিকশন কন্টেন্ট -->
                                                            <div class="row g-2">
                                                                <div class="col-6 border-end">
                                                                    <strong>আইনি ক্ষমতা:</strong><br>
                                                                    শাস্তি দেওয়ার আইনি ক্ষমতা।
                                                                </div>
                                                                <div class="col-6 ps-3">
                                                                    <strong>এক্তিয়ার:</strong><br>
                                                                    থানা ভিত্তিক মামলার এক্তিয়ার।
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <button class="btn btn-action-lawyer w-100 text-start py-3 px-4 mt-auto shadow-sm">
                                                <i class="fa-solid fa-gavel text-muted small me-2"></i> Lawyers practicing here
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
