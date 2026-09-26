@extends('frontend.layouts.master')
@section('content')
<!-- PDF প্রিভিউয়ার মেইন কার্ড -->
<div class="card p-3 border-light mx-auto my-4 shadow-sm" style="max-width: 450px; width: 100%; border-radius: 16px;">
    
    <!-- ব্রেডক্রাম্ব -->
    <div class="text-muted mb-2" style="font-size: 0.75rem;">
        Home > Court Forms > Court & Legal Forms > Bail App...
    </div>
    
    <!-- হেডার এবং ফাইল ইনফো -->
    <div class="mb-3">
        <h1 class="h5 fw-bold text-dark mb-1">বেইল অ্যাপ্লিকেশন ফরম (Bail Application Form)</h1>
        <div class="text-muted border-top border-bottom py-1 my-2" style="font-size: 0.75rem;">
            Format: PDF | Pages: <span id="total-pages-info">-</span> | Size: 180 KB
        </div>
    </div>

    <!-- বিবরণ বক্স -->
    <div class="p-2 mb-3 bg-secondary bg-opacity-10 border text-dark rounded-3" style="font-size: 0.85rem; font-weight: 500;">
        ফৌজদারি মামলায় জামিনের আবেদনের জন্য নির্ধারিত স্ট্যান্ডার্ড ফরম।
    </div>

    <!-- PDF স্লাইডার উইজেট (Arrow সহ) -->
    <div class="position-relative text-center mb-3 p-2 bg-light border rounded-3">
        
        <!-- বামে যাওয়ার Arrow বাটন -->
        <button id="prev-page" class="position-absolute start-0 top-50 translate-middle-y bg-dark bg-opacity-75 text-white border-0 rounded-circle d-flex align-items-center justify-content-center shadow" style="width: 42px; height: 42px; margin-left: 15px; z-index: 10;">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <!-- PDF রেন্ডার ক্যানভাস কন্টেইনার -->
        <div class="bg-white p-2 rounded-2 border d-flex justify-content-center overflow-hidden">
            <canvas id="pdf-render" class="img-fluid border border-light"></canvas>
        </div>

        <!-- ডানে যাওয়ার Arrow বাটন -->
        <button id="next-page" class="position-absolute end-0 top-50 translate-middle-y bg-dark bg-opacity-75 text-white border-0 rounded-circle d-flex align-items-center justify-content-center shadow" style="width: 42px; height: 42px; margin-right: 15px; z-index: 10;">
            <i class="fa-solid fa-chevron-right"></i>
        </button>

        <!-- পেজ কাউন্টার -->
        <div class="mt-2 fw-bold text-secondary" style="font-size: 0.85rem;">
            <span id="page-num">1</span> of <span id="page-count">2</span>
        </div>
    </div>

    <!-- ডাউনলোড, প্রিন্ট, সেভ ও শেয়ার বাটনসমূহ -->
    <div class="d-grid gap-2">
        <a href="{{ $pdfUrl }}" download class="btn btn-primary btn-sm py-2 fw-bold shadow-sm">
            Download Full PDF <i class="fa-solid fa-download ms-1"></i>
        </a>

        <div class="row g-2">
            <div class="col-4">
                <button onclick="printPdf()" class="btn btn-sm py-2 text-dark w-100 border bg-secondary bg-opacity-10">
                    Print <i class="fa-solid fa-print ms-1"></i>
                </button>
            </div>
            <div class="col-4">
                <a href="{{ $pdfUrl }}" download class="btn btn-sm py-2 text-dark w-100 border bg-secondary bg-opacity-10 text-decoration-none">
                    Save <i class="fa-solid fa-floppy-disk ms-1"></i>
                </a>
            </div>
            <div class="col-4">
                <button onclick="sharePdf()" class="btn btn-sm py-2 text-dark w-100 border bg-secondary bg-opacity-10">
                    Share <i class="fa-solid fa-link ms-1"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- প্রিন্ট করার হিডেন আইফ্রেম -->
<iframe id="pdf-print-iframe" style="display:none;"></iframe>
<!-- PDF.js CDN (যদি আপনার মাস্টার লেআউটে না থাকে তবেই এটি যোগ করবেন) -->
<script src="https://cloudflare.com"></script>

<script>
    // কন্ট্রোলার থেকে ডাইনামিকালি আসা ইউআরএল গ্রহণ
    const url = "{{ $pdfUrl }}"; 

    let pdfDoc = null,
        pageNum = 1,
        pageIsRendering = false,
        pageNumIsPending = null;

    const scale = 1.2, 
        canvas = document.getElementById('pdf-render'),
        ctx = canvas.getContext('2d');

    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cloudflare.com';

    // পেজ রেন্ডার করার ফাংশন
    const renderPage = num => {
        pageIsRendering = true;
        pdfDoc.getPage(num).then(page => {
            const viewport = page.getViewport({ scale });
            canvas.height = viewport.height;
            canvas.width = viewport.width;

            const renderCtx = { canvasContext: ctx, viewport };
            page.render(renderCtx).promise.then(() => {
                pageIsRendering = false;
                if (pageNumIsPending !== null) {
                    renderPage(pageNumIsPending);
                    pageNumIsPending = null;
                }
            });
            document.getElementById('page-num').textContent = num;
        });
    };

    const queueRenderPage = num => {
        if (pageIsRendering) { pageNumIsPending = num; } else { renderPage(num); }
    };

    // বাম দিকের Arrow বাটনের কাজ
    document.getElementById('prev-page').addEventListener('click', () => {
        if (pageNum <= 1) return;
        pageNum--;
        queueRenderPage(pageNum);
    });

    // ডান দিকের Arrow বাটনের কাজ
    document.getElementById('next-page').addEventListener('click', () => {
        if (pageNum >= pdfDoc.numPages) return;
        pageNum++;
        queueRenderPage(pageNum);
    });

    // পিডিএফ ফাইল ব্রাউজারে ইনিশিয়ালাইজ করা
    pdfjsLib.getDocument(url).promise.then(pdfDoc_ => {
        pdfDoc = pdfDoc_;
        document.getElementById('page-count').textContent = pdfDoc.numPages;
        document.getElementById('total-pages-info').textContent = pdfDoc.numPages;
        renderPage(pageNum);
    }).catch(err => { 
        console.error('PDF লোড হতে পারেনি:', err); 
    });

    // প্রিন্ট অ্যাকশন ফাংশন
    function printPdf() {
        const iframe = document.getElementById('pdf-print-iframe');
        iframe.src = url;
        iframe.onload = function() {
            iframe.contentWindow.focus();
            iframe.contentWindow.print();
        };
    }

    // শেয়ার অ্যাকশন ফাংশন
    function sharePdf() {
        if (navigator.share) {
            navigator.share({ title: 'Legal Form', url: window.location.href }).catch(console.error);
        } else {
            navigator.clipboard.writeText(window.location.href);
            alert('ফর্মের লিঙ্কটি সফলভাবে কপি হয়েছে!');
        }
    }
</script>


@endsection