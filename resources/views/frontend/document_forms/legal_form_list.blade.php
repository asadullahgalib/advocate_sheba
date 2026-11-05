@extends('frontend.layouts.master')
@section('content')

<div class="container my-5">
    <h3 class="mb-4">Legal Documents &amp; Forms</h3>

    <div class="row">
        @forelse($documents as $document)
        <div class="col-6 col-md-2 mb-3">
            <a href="{{ route('legal.form', $document->slug) }}" class="text-decoration-none text-dark">
                <div class="border rounded-3 bg-white text-center p-3 h-100">
                    <i class="fa-solid fa-file-pdf fa-3x text-primary mb-2"></i>
                    <div style="font-size: 14px;">{{ $document->title }}</div>
                </div>
            </a>
        </div>
        @empty
        <p>কোনো ডকুমেন্ট পাওয়া যায়নি।</p>
        @endforelse
    </div>

    <div class="mt-3">
        {{ $documents->links() }}
    </div>
</div>

@endsection