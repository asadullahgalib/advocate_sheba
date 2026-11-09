@extends('frontend.layouts.master')

@section('content')

<style>

/* =====================================
   ADVOCATE SHEBA - TERM PAGE
===================================== */

.term-page {
    width: 100%;
    background: #ffffff;
    padding: 45px 0 60px;
}

.term-container {
    width: 100%;
    max-width: 1440px;
    margin: 0 auto;
    padding: 0 30px;
}

/* Page Header */

.term-header {
    margin-bottom: 28px;
    padding-bottom: 20px;
    border-bottom: 1px solid #eeeeee;
}

.term-header h1 {
    font-size: 32px;
    font-weight: 700;
    color: #173f63;
    margin: 0;
    line-height: 1.4;
}

.term-header .title-line {
    width: 55px;
    height: 4px;
    background: #c18b38;
    margin-top: 12px;
    border-radius: 5px;
}

/* Description */

.term-content {
    color: #333333;
    font-size: 15px;
    line-height: 1.9;
    overflow-wrap: anywhere;
}

.term-content p {
    margin-bottom: 18px;
}

.term-content h1,
.term-content h2,
.term-content h3,
.term-content h4 {
    color: #173f63;
    font-weight: 700;
    margin-top: 28px;
    margin-bottom: 15px;
    line-height: 1.5;
}

.term-content h2 {
    font-size: 23px;
}

.term-content h3 {
    font-size: 19px;
}

.term-content ul,
.term-content ol {
    padding-left: 25px;
    margin-bottom: 20px;
}

.term-content li {
    margin-bottom: 8px;
}

.term-content li::marker {
    color: #c18b38;
}

.term-content a {
    color: #16558a;
    text-decoration: none;
}

.term-content a:hover {
    color: #c18b38;
    text-decoration: underline;
}

.term-content strong,
.term-content b {
    color: #253f59;
}

.term-content img {
    max-width: 100%;
    height: auto;
}

.term-content table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

.term-content th,
.term-content td {
    border: 1px solid #e5e9ef;
    padding: 12px;
}

.term-content th {
    background: #f5f7fa;
    color: #173f63;
}

/* Responsive */

@media (max-width: 768px) {

    .term-page {
        padding: 30px 0 40px;
    }

    .term-container {
        padding: 0 18px;
    }

    .term-header h1 {
        font-size: 25px;
    }

    .term-content {
        font-size: 14px;
        line-height: 1.8;
    }

    .term-content h2 {
        font-size: 21px;
    }

}

@media (max-width: 480px) {

    .term-container {
        padding: 0 15px;
    }

    .term-header h1 {
        font-size: 23px;
    }

}

</style>


<!-- TERM PAGE START -->

<section class="term-page">

    <div class="term-container">

        <!-- Page Title -->

        <div class="term-header">

            <h1>{{ $term->name }}</h1>

            <div class="title-line"></div>

        </div>


        <!-- Dynamic Content -->

        <div class="term-content">

            {!! $term->description_en !!}

        </div>

    </div>

</section>

<!-- TERM PAGE END -->

@endsection
