@extends('frontend.layouts.master')

@section('content')

<style>
/* =========================================
   PROFESSIONAL CONTACT PAGE
========================================= */

.ct {
    --brand: #0f2542;
    --accent: #b8893b;
    --ink: #172033;
    --muted: #687386;
    --line: #e8ebf0;
    --soft: #f8f9fb;

    max-width: 1200px;
    margin: auto;
    padding: 45px 18px 80px;
    color: var(--ink);
    font-family: inherit;
}

.ct * {
    box-sizing: border-box;
}

/* Breadcrumb */

.ct-crumb {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 22px;
    color: var(--muted);
    font-size: 14px;
}

.ct-crumb a {
    color: var(--muted);
    text-decoration: none;
    transition: .2s;
}

.ct-crumb a:hover {
    color: var(--accent);
}

.ct-crumb .separator {
    color: #c1c7d0;
}

.ct-crumb b {
    color: var(--brand);
    font-weight: 600;
}

/* Page Heading */

.ct-heading {
    margin-bottom: 35px;
}

.ct-title {
    position: relative;
    font-size: 34px;
    font-weight: 800;
    line-height: 1.3;
    color: var(--brand);
    margin: 0 0 12px;
}

.ct-title::after {
    content: "";
    display: block;
    width: 55px;
    height: 3px;
    background: var(--accent);
    border-radius: 5px;
    margin-top: 13px;
}

.ct-sub {
    max-width: 680px;
    margin: 0;
    color: var(--muted);
    font-size: 15px;
    line-height: 1.8;
}

/* Main Layout */

.ct-grid {
    display: grid;
    grid-template-columns: 1.65fr 1fr;
    gap: 26px;
    align-items: start;
}

/* Common Card */

.ct-card {
    background: #fff;
    border: 1px solid var(--line);
    border-radius: 13px;
    box-shadow: 0 4px 20px rgba(15,37,66,.045);
}

/* =========================================
   CONTACT FORM
========================================= */

.ct-form {
    padding: 32px;
}

.ct-form-heading {
    margin-bottom: 27px;
    padding-bottom: 20px;
    border-bottom: 1px solid var(--line);
}

.ct-form-heading h2 {
    font-size: 22px;
    font-weight: 750;
    color: var(--brand);
    margin: 0 0 7px;
}

.ct-form-heading p {
    margin: 0;
    color: var(--muted);
    font-size: 14px;
    line-height: 1.6;
}

/* Form Rows */

.ct-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 18px;
    margin-bottom: 21px;
}

.ct-field {
    margin-bottom: 21px;
}

.ct-row .ct-field {
    margin-bottom: 0;
}

.ct-field label {
    display: block;
    margin-bottom: 9px;
    font-size: 14px;
    font-weight: 650;
    color: #273449;
}

.ct-field label i {
    color: #dc4444;
    font-style: normal;
}

/* Input Fields */

.ct-field input[type="text"],
.ct-field input[type="email"],
.ct-field textarea {
    display: block;
    width: 100%;
    min-height: 49px;
    padding: 12px 15px;
    border: 1px solid #e1e5eb;
    border-radius: 8px;
    background: #fff;
    color: var(--ink);
    font-family: inherit;
    font-size: 14px;
    outline: none;
    transition: all .25s ease;
}

.ct-field textarea {
    min-height: 155px;
    resize: vertical;
    line-height: 1.7;
}

.ct-field input::placeholder,
.ct-field textarea::placeholder {
    color: #a2aab7;
}

.ct-field input:focus,
.ct-field textarea:focus {
    border-color: var(--accent);
    box-shadow: 0 0 0 3px rgba(184,137,59,.10);
}

/* Privacy Agreement */

.ct-agree {
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 5px 0 25px;
    color: #596579;
    font-size: 13px;
    cursor: pointer;
}

.ct-agree input {
    width: 16px;
    height: 16px;
    accent-color: var(--brand);
    cursor: pointer;
    flex: none;
}

.ct-agree a {
    color: var(--brand);
    font-weight: 650;
    text-decoration: none;
}

.ct-agree a:hover {
    color: var(--accent);
    text-decoration: underline;
}

/* Submit Button */

.ct-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    min-height: 48px;
    padding: 12px 29px;
    background: var(--brand);
    color: #fff;
    border: 0;
    border-radius: 8px;
    font-family: inherit;
    font-size: 14px;
    font-weight: 650;
    cursor: pointer;
    transition: all .25s ease;
}

.ct-btn:hover {
    background: var(--accent);
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(184,137,59,.20);
}

.ct-btn svg {
    flex: none;
}

/* =========================================
   CONTACT INFORMATION
========================================= */

.ct-side {
    display: flex;
    flex-direction: column;
    gap: 17px;
}

.ct-info {
    padding: 23px;
    transition: all .25s ease;
}

.ct-info:hover {
    transform: translateY(-3px);
    border-color: rgba(184,137,59,.35);
    box-shadow: 0 9px 25px rgba(15,37,66,.07);
}

/* Icon & Heading */

.ct-head {
    display: flex;
    align-items: center;
    gap: 14px;
    margin-bottom: 17px;
}

.ct-ico {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 47px;
    height: 47px;
    flex: none;
    background: #f8f3ea;
    border: 1px solid #f0e6d5;
    border-radius: 10px;
}

.ct-ico svg {
    width: 22px;
    height: 22px;
}

.ct-head h4 {
    margin: 0 0 4px;
    color: var(--brand);
    font-size: 17px;
    font-weight: 750;
}

.ct-head small {
    display: block;
    color: var(--muted);
    font-size: 12px;
}

/* Information Values */

.ct-val {
    display: inline-block;
    color: #263449;
    font-size: 15px;
    font-weight: 650;
    text-decoration: none;
    word-break: break-word;
    transition: .2s;
}

a.ct-val:hover {
    color: var(--accent);
}

.ct-info p {
    margin: 0;
    color: #566174;
    font-size: 14px;
    line-height: 1.8;
}

/* Bottom Note */

.ct-note {
    display: flex;
    align-items: flex-start;
    gap: 11px;
    padding: 16px;
    background: #f8f9fb;
    border: 1px solid var(--line);
    border-radius: 9px;
}

.ct-note svg {
    flex: none;
    margin-top: 2px;
    color: var(--accent);
}

.ct-note p {
    margin: 0;
    color: var(--muted);
    font-size: 13px;
    line-height: 1.7;
}

/* =========================================
   RESPONSIVE
========================================= */

@media(max-width: 991px) {
    .ct-grid {
        grid-template-columns: 1.3fr 1fr;
        gap: 18px;
    }

    .ct-form {
        padding: 25px;
    }

    .ct-info {
        padding: 20px;
    }
}

@media(max-width: 767px) {
    .ct {
        padding: 30px 15px 55px;
    }

    .ct-grid {
        grid-template-columns: 1fr;
    }

    .ct-title {
        font-size: 28px;
    }

    .ct-heading {
        margin-bottom: 25px;
    }

    .ct-side {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }

    .ct-note {
        grid-column: 1 / -1;
    }
}

@media(max-width: 520px) {
    .ct-row {
        grid-template-columns: 1fr;
        gap: 19px;
    }

    .ct-form {
        padding: 22px 17px;
    }

    .ct-form-heading h2 {
        font-size: 20px;
    }

    .ct-side {
        grid-template-columns: 1fr;
    }

    .ct-title {
        font-size: 26px;
    }

    .ct-btn {
        width: 100%;
    }
}

</style>


<div class="ct">

    {{-- Breadcrumb --}}
    <div class="ct-crumb">
        <a href="{{ url('/') }}">হোম</a>
        <span class="separator">/</span>
        <b>যোগাযোগ</b>
    </div>


    {{-- Page Heading --}}
    <div class="ct-heading">

        <h1 class="ct-title">যোগাযোগ করুন</h1>

        <p class="ct-sub">
            আইনি পরামর্শ, মতামত, অভিযোগ অথবা যেকোনো তথ্যের জন্য
            আমাদের সাথে যোগাযোগ করুন। আমরা আপনার সহযোগিতায় সর্বদা প্রস্তুত।
        </p>

    </div>


    {{-- Main Grid --}}
    <div class="ct-grid">


        {{-- Contact Form --}}
        <div class="ct-card ct-form">

            <div class="ct-form-heading">

                <h2>আমাদের বার্তা পাঠান</h2>

                <p>
                    নিচের ফর্মটি পূরণ করে আপনার প্রশ্ন বা মতামত আমাদের জানান।
                </p>

            </div>


            <form action="#" method="post">

                @csrf

                {{-- Name & Email --}}
                <div class="ct-row">

                    <div class="ct-field">

                        <label for="ct-name">
                            আপনার নাম <i>*</i>
                        </label>

                        <input
                            type="text"
                            id="ct-name"
                            name="name"
                            placeholder="আপনার পূর্ণ নাম"
                        >

                    </div>


                    <div class="ct-field">

                        <label for="ct-email">
                            ইমেইল ঠিকানা <i>*</i>
                        </label>

                        <input
                            type="email"
                            id="ct-email"
                            name="email"
                            placeholder="example@gmail.com"
                        >

                    </div>

                </div>


                {{-- Phone --}}
                <div class="ct-field">

                    <label for="ct-phone">
                        মোবাইল নম্বর
                    </label>

                    <input
                        type="text"
                        id="ct-phone"
                        name="phone"
                        placeholder="01XXXXXXXXX"
                    >

                </div>


                {{-- Message --}}
                <div class="ct-field">

                    <label for="ct-message">
                        আপনার বার্তা <i>*</i>
                    </label>

                    <textarea
                        id="ct-message"
                        name="message"
                        placeholder="আপনার প্রশ্ন, মতামত বা বিস্তারিত বার্তা এখানে লিখুন..."
                    ></textarea>

                </div>


                {{-- Agreement --}}
                <label class="ct-agree">

                    <input
                        type="checkbox"
                        name="agree"
                        value="1"
                    >

                    <b>
                        আমি প্রাইভেসি পলিসিতে সম্মত।
                    </b>

                </label>


                {{-- Submit --}}
                <button type="submit" class="ct-btn">

                    <svg
                        width="17"
                        height="17"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <path d="M22 2L11 13"/>
                        <path d="M22 2l-7 20-4-9-9-4 20-7z"/>
                    </svg>

                    বার্তা পাঠান

                </button>

            </form>

        </div>



        {{-- Contact Information --}}
        <div class="ct-side">


            {{-- Email --}}
            <div class="ct-card ct-info">

                <div class="ct-head">

                    <div class="ct-ico">

                        <svg viewBox="0 0 24 24" fill="none"
                             stroke="#b8893b" stroke-width="1.8"
                             stroke-linecap="round" stroke-linejoin="round">

                            <rect x="3" y="5" width="18" height="14" rx="2"/>
                            <path d="M3 7l9 6 9-6"/>

                        </svg>

                    </div>

                    <div>
                        <h4>ইমেইল ঠিকানা</h4>
                        <small>যেকোনো জিজ্ঞাসা ও আপডেটের জন্য</small>
                    </div>

                </div>

                @if(@$contactInfo->email)
                    <a class="ct-val"
                       href="mailto:{{ $contactInfo->email }}">
                        {{ $contactInfo->email }}
                    </a>
                @else
                    <span class="ct-val">—</span>
                @endif

            </div>



            {{-- Phone --}}
            <div class="ct-card ct-info">

                <div class="ct-head">

                    <div class="ct-ico">

                        <svg viewBox="0 0 24 24" fill="none"
                             stroke="#b8893b" stroke-width="1.8"
                             stroke-linecap="round" stroke-linejoin="round">

                            <path d="M22 16.9v3a2 2 0 0 1-2.2 2
                            19.8 19.8 0 0 1-8.6-3.1
                            19.5 19.5 0 0 1-6-6
                            A19.8 19.8 0 0 1 2.1 4.2
                            2 2 0 0 1 4.1 2h3
                            a2 2 0 0 1 2 1.7
                            c.1 1 .4 1.9.7 2.8
                            a2 2 0 0 1-.5 2.1
                            L8.1 9.9a16 16 0 0 0 6 6
                            l1.3-1.3a2 2 0 0 1 2.1-.4
                            c.9.3 1.8.6 2.8.7
                            a2 2 0 0 1 1.7 2z"/>

                        </svg>

                    </div>

                    <div>
                        <h4>মোবাইল নম্বর</h4>
                        <small>সকাল ১০:০০ – রাত ৮:০০</small>
                    </div>

                </div>

                @if(@$contactInfo->mobile_no)
                    <a class="ct-val"
                       href="tel:{{ preg_replace('/\s+/', '', $contactInfo->mobile_no) }}">
                        {{ $contactInfo->mobile_no }}
                    </a>
                @else
                    <span class="ct-val">—</span>
                @endif

            </div>



            {{-- Address --}}
            <div class="ct-card ct-info">

                <div class="ct-head">

                    <div class="ct-ico">

                        <svg viewBox="0 0 24 24" fill="none"
                             stroke="#b8893b" stroke-width="1.8"
                             stroke-linecap="round" stroke-linejoin="round">

                            <path d="M12 21s-7-6.2-7-11a7 7 0 0 1 14 0c0 4.8-7 11-7 11z"/>
                            <circle cx="12" cy="10" r="2.5"/>

                        </svg>

                    </div>

                    <div>
                        <h4>অফিসের ঠিকানা</h4>
                        <small>আমাদের অবস্থান</small>
                    </div>

                </div>

                <p>
                    {{ @$contactInfo->address ?: '—' }}
                </p>

            </div>



            {{-- Helpful Note --}}
            <div class="ct-note">

                <svg width="19" height="19" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor"
                     stroke-width="1.8" stroke-linecap="round"
                     stroke-linejoin="round">

                    <circle cx="12" cy="12" r="10"/>
                    <path d="M12 16v-4"/>
                    <path d="M12 8h.01"/>

                </svg>

                <p>
                    আপনার পাঠানো তথ্য ও যোগাযোগের বিবরণ
                    যথাযথ গোপনীয়তার সাথে পরিচালনা করা হবে।
                </p>

            </div>


        </div>

    </div>

</div>

@endsection