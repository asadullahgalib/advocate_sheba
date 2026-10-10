
@extends('frontend.layouts.master')

@section('content')

<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/who-is-advocate.css')}}">

<div class="legal-info-container" style="margin-top: 20px;">

    <!-- About Advocate -->
    <h5 style="margin-bottom:15px;">এডভোকেট সম্পর্কে জানুন</h5>
    <div class="legal-info-card">

        <div class="legal-info-header">

            <div class="legal-info-icon">
                <i class="fa fa-balance-scale"></i>
            </div>

            <div class="legal-info-content">

                <p class="legal-info-description">
                    এডভোকেট (Advocate) আদালতে মক্কেলের পক্ষে আইনি পরামর্শ প্রদান, মামলা পরিচালনা এবং আইনি প্রতিনিধিত্ব করেন। তারা ন্যায় বিচার নিশ্চিত করতে এবং আইনের শাসন প্রতিষ্ঠায় গুরুত্বপূর্ণ ভূমিকা পালন করেন। 
                </p>

            </div>
        </div>
    </div>

    <!-- 1. কে তারা? -->
    <div class="legal-info-card">

        <div class="legal-info-header">

            <div class="legal-info-icon">
                <i class="fa fa-money"></i>
            </div>

            <div class="legal-info-content">

                <h3 class="legal-info-title">কে তারা?</h3>

                <p class="legal-info-description">
                    এডভোকেটদের ফি কাঠামো, পারিশ্রমিক এবং খরচ সম্পর্কে ধারণা।
                </p>

                <button type="button"
                        class="legal-info-toggle"
                        aria-expanded="false">
                    <span class="legal-info-toggle-text">বিস্তারিত পড়ুন</span>
                    <span class="legal-info-arrow">↓</span>
                </button>

            </div>
        </div>

        <div class="legal-info-details" hidden>

            <h4>আইনজীবীদের ফি সম্পর্কে</h4>

            <p>
                মামলার ধরন, জটিলতা, আদালত, প্রয়োজনীয় সময় ও আইনজীবীর
                অভিজ্ঞতা অনুযায়ী পারিশ্রমিক ভিন্ন হতে পারে।
            </p>

            <ul>
                <li>প্রাথমিক পরামর্শ ফি।</li>
                <li>মামলা পরিচালনা ও শুনানির ফি।</li>
                <li>আবেদন, দলিল ও অন্যান্য নথি প্রস্তুতের খরচ।</li>
                <li>আদালত ও আনুষঙ্গিক খরচের সম্ভাব্য হিসাব।</li>
            </ul>

            <p>
                কাজ শুরু করার আগে ফি ও অন্যান্য খরচ সম্পর্কে পরিষ্কারভাবে
                আলোচনা করে নেওয়া উচিত।
            </p>

        </div>
    </div>

    <!-- 2. তারা কি করেন? -->
    <div class="legal-info-card">

        <div class="legal-info-header">

            <div class="legal-info-icon">
                <i class="fa fa-money"></i>
            </div>

            <div class="legal-info-content">

                <h3 class="legal-info-title">তারা কি করেন?</h3>

                <p class="legal-info-description">
                    এডভোকেটদের ফি কাঠামো, পারিশ্রমিক এবং খরচ সম্পর্কে ধারণা।
                </p>

                <button type="button"
                        class="legal-info-toggle"
                        aria-expanded="false">
                    <span class="legal-info-toggle-text">বিস্তারিত পড়ুন</span>
                    <span class="legal-info-arrow">↓</span>
                </button>

            </div>
        </div>

        <div class="legal-info-details" hidden>

            <h4>আইনজীবীদের ফি সম্পর্কে</h4>

            <p>
                মামলার ধরন, জটিলতা, আদালত, প্রয়োজনীয় সময় ও আইনজীবীর
                অভিজ্ঞতা অনুযায়ী পারিশ্রমিক ভিন্ন হতে পারে।
            </p>

            <ul>
                <li>প্রাথমিক পরামর্শ ফি।</li>
                <li>মামলা পরিচালনা ও শুনানির ফি।</li>
                <li>আবেদন, দলিল ও অন্যান্য নথি প্রস্তুতের খরচ।</li>
                <li>আদালত ও আনুষঙ্গিক খরচের সম্ভাব্য হিসাব।</li>
            </ul>

            <p>
                কাজ শুরু করার আগে ফি ও অন্যান্য খরচ সম্পর্কে পরিষ্কারভাবে
                আলোচনা করে নেওয়া উচিত।
            </p>

        </div>
    </div>

    <!-- 3. যোগ্যতা -->
    <div class="legal-info-card">

        <div class="legal-info-header">

            <div class="legal-info-icon">
                <i class="fa fa-graduation-cap"></i>
            </div>

            <div class="legal-info-content">

                <h3 class="legal-info-title">যোগ্যতা</h3>

                <p class="legal-info-description">
                    এডভোকেট হতে হলে কী কী যোগ্যতা ও শর্ত পূরণ করতে হয়।
                </p>

                <button type="button"
                        class="legal-info-toggle"
                        aria-expanded="false">
                    <span class="legal-info-toggle-text">বিস্তারিত পড়ুন</span>
                    <span class="legal-info-arrow">↓</span>
                </button>

            </div>
        </div>

        <div class="legal-info-details" hidden>

            <h4>এডভোকেট হওয়ার প্রাথমিক যোগ্যতা</h4>

            <p>
                বাংলাদেশে আইনজীবী হিসেবে তালিকাভুক্ত হতে হলে প্রযোজ্য আইন
                ও বাংলাদেশ বার কাউন্সিলের নির্ধারিত শর্ত পূরণ করতে হয়।
            </p>

            <ul>
                <li>স্বীকৃত বিশ্ববিদ্যালয় থেকে আইন বিষয়ে প্রয়োজনীয় ডিগ্রি অর্জন।</li>
                <li>প্রযোজ্য নিয়ম অনুযায়ী শিক্ষানবিশি বা পিউপিলেজ সম্পন্ন করা।</li>
                <li>বার কাউন্সিলের নির্ধারিত পরীক্ষায় উত্তীর্ণ হওয়া।</li>
                <li>তালিকাভুক্তির অন্যান্য প্রযোজ্য শর্ত পূরণ করা।</li>
            </ul>

        </div>
    </div>


    <!-- 4. কোথায় বসেন -->
    <div class="legal-info-card">

        <div class="legal-info-header">

            <div class="legal-info-icon">
                <i class="fa fa-university"></i>
            </div>

            <div class="legal-info-content">

                <h3 class="legal-info-title">কোথায় বসেন?</h3>

                <p class="legal-info-description">
                    এডভোকেটরা কোথায় চেম্বার বা অফিস বজায় রাখেন এবং কোথায় প্র্যাকটিস করেন।
                </p>

                <button type="button"
                        class="legal-info-toggle"
                        aria-expanded="false">
                    <span class="legal-info-toggle-text">বিস্তারিত পড়ুন</span>
                    <span class="legal-info-arrow">↓</span>
                </button>

            </div>
        </div>

        <div class="legal-info-details" hidden>

            <h4>এডভোকেটদের চেম্বার ও কর্মস্থল</h4>

            <p>
                এডভোকেটরা সাধারণত আদালত প্রাঙ্গণ, ব্যক্তিগত চেম্বার,
                আইনজীবী সমিতির ভবন অথবা আইন প্রতিষ্ঠানের অফিসে
                পেশাগত কার্যক্রম পরিচালনা করেন।
            </p>

            <ul>
                <li>সুপ্রিম কোর্ট ও হাইকোর্ট প্রাঙ্গণ।</li>
                <li>জেলা ও দায়রা জজ আদালত প্রাঙ্গণ।</li>
                <li>অধস্তন দেওয়ানি ও ফৌজদারি আদালত।</li>
                <li>ব্যক্তিগত চেম্বার এবং ল ফার্ম।</li>
            </ul>

        </div>
    </div>


    <!-- 5. প্রকারভেদ -->
    <div class="legal-info-card">

        <div class="legal-info-header">

            <div class="legal-info-icon">
                <i class="fa fa-share-alt"></i>
            </div>

            <div class="legal-info-content">

                <h3 class="legal-info-title">প্রকারভেদ</h3>

                <p class="legal-info-description">
                    বিভিন্ন ধরনের এডভোকেট এবং তাদের আইনি ক্ষেত্রভিত্তিক পার্থক্য।
                </p>

                <button type="button"
                        class="legal-info-toggle"
                        aria-expanded="false">
                    <span class="legal-info-toggle-text">বিস্তারিত পড়ুন</span>
                    <span class="legal-info-arrow">↓</span>
                </button>

            </div>
        </div>

        <div class="legal-info-details" hidden>

            <h4>আইনজীবীদের কাজের ক্ষেত্র</h4>

            <p>
                আইনজীবীরা তাঁদের অভিজ্ঞতা, দক্ষতা ও পেশাগত আগ্রহ অনুযায়ী
                বিভিন্ন ধরনের আইনি বিষয়ে কাজ করতে পারেন।
            </p>

            <ul>
                <li>দেওয়ানি ও সম্পত্তি আইন।</li>
                <li>ফৌজদারি আইন ও মামলা পরিচালনা।</li>
                <li>পারিবারিক আইন ও উত্তরাধিকারসংক্রান্ত বিষয়।</li>
                <li>করপোরেট, ব্যবসায়িক ও শ্রম আইন।</li>
                <li>সংবিধান, রিট ও মানবাধিকারসংক্রান্ত বিষয়।</li>
            </ul>

        </div>
    </div>


    <!-- 6. কীভাবে বেছে নেবেন -->
    <div class="legal-info-card">

        <div class="legal-info-header">

            <div class="legal-info-icon">
                <i class="fa fa-tasks"></i>
            </div>

            <div class="legal-info-content">

                <h3 class="legal-info-title">কীভাবে বেছে নেবেন?</h3>

                <p class="legal-info-description">
                    আপনার মামলার জন্য সঠিক এডভোকেট নির্বাচনের গুরুত্বপূর্ণ টিপস।
                </p>

                <button type="button"
                        class="legal-info-toggle"
                        aria-expanded="false">
                    <span class="legal-info-toggle-text">বিস্তারিত পড়ুন</span>
                    <span class="legal-info-arrow">↓</span>
                </button>

            </div>
        </div>

        <div class="legal-info-details" hidden>

            <h4>সঠিক এডভোকেট নির্বাচনের উপায়</h4>

            <p>
                আপনার মামলার ধরন ও প্রয়োজন অনুযায়ী অভিজ্ঞতা এবং দক্ষতা
                বিবেচনা করে আইনজীবী নির্বাচন করা ভালো।
            </p>

            <ul>
                <li>আপনার মামলার বিষয়ে তাঁর অভিজ্ঞতা যাচাই করুন।</li>
                <li>বার কাউন্সিলের তালিকাভুক্তি ও পরিচয় যাচাই করুন।</li>
                <li>ফি, সম্ভাব্য খরচ ও কাজের পরিধি আগে আলোচনা করুন।</li>
                <li>যোগাযোগের সুবিধা ও পেশাগত আচরণ বিবেচনা করুন।</li>
            </ul>

        </div>
    </div>


    <!-- 7. ফি -->
    <div class="legal-info-card">

        <div class="legal-info-header">

            <div class="legal-info-icon">
                <i class="fa fa-money"></i>
            </div>

            <div class="legal-info-content">

                <h3 class="legal-info-title">ফি</h3>

                <p class="legal-info-description">
                    এডভোকেটদের ফি কাঠামো, পারিশ্রমিক এবং খরচ সম্পর্কে ধারণা।
                </p>

                <button type="button"
                        class="legal-info-toggle"
                        aria-expanded="false">
                    <span class="legal-info-toggle-text">বিস্তারিত পড়ুন</span>
                    <span class="legal-info-arrow">↓</span>
                </button>

            </div>
        </div>

        <div class="legal-info-details" hidden>

            <h4>আইনজীবীদের ফি সম্পর্কে</h4>

            <p>
                মামলার ধরন, জটিলতা, আদালত, প্রয়োজনীয় সময় ও আইনজীবীর
                অভিজ্ঞতা অনুযায়ী পারিশ্রমিক ভিন্ন হতে পারে।
            </p>

            <ul>
                <li>প্রাথমিক পরামর্শ ফি।</li>
                <li>মামলা পরিচালনা ও শুনানির ফি।</li>
                <li>আবেদন, দলিল ও অন্যান্য নথি প্রস্তুতের খরচ।</li>
                <li>আদালত ও আনুষঙ্গিক খরচের সম্ভাব্য হিসাব।</li>
            </ul>

            <p>
                কাজ শুরু করার আগে ফি ও অন্যান্য খরচ সম্পর্কে পরিষ্কারভাবে
                আলোচনা করে নেওয়া উচিত।
            </p>

        </div>
    </div>

</div>

@include('frontend.layouts.find_professional')

<script>
(function () {
    function initializeLegalInfoCards() {

        // শুধু এই কম্পোনেন্টের বক্সগুলো নিয়ন্ত্রণ করবে
        const containers = document.querySelectorAll('.legal-info-container');

        containers.forEach(function (container) {

            // একই container-এ listener যেন দ্বিতীয়বার যুক্ত না হয়
            if (container.dataset.legalInfoInitialized === 'true') {
                return;
            }

            container.dataset.legalInfoInitialized = 'true';

            const cards = container.querySelectorAll('.legal-info-card');

            cards.forEach(function (card) {

                const button = card.querySelector('.legal-info-toggle');
                const details = card.querySelector('.legal-info-details');

                if (!button || !details) {
                    return;
                }

                // শুরুতে সব বক্স বন্ধ থাকবে
                card.classList.remove('is-open');
                button.setAttribute('aria-expanded', 'false');
                details.hidden = true;

                button.addEventListener('click', function () {

                    const shouldOpen = !card.classList.contains('is-open');

                    // একই container-এর অন্য বক্সগুলো বন্ধ করা
                    cards.forEach(function (otherCard) {

                        otherCard.classList.remove('is-open');

                        const otherButton =
                            otherCard.querySelector('.legal-info-toggle');

                        const otherDetails =
                            otherCard.querySelector('.legal-info-details');

                        if (otherButton && otherDetails) {
                            otherButton.setAttribute('aria-expanded', 'false');
                            otherDetails.hidden = true;

                            const otherText =
                                otherButton.querySelector('.legal-info-toggle-text');

                            if (otherText) {
                                otherText.textContent = 'বিস্তারিত পড়ুন';
                            }

                            const otherArrow =
                                otherButton.querySelector('.legal-info-arrow');

                            if (otherArrow) {
                                otherArrow.textContent = '↓';
                            }
                        }
                    });

                    // ক্লিক করা বক্সটি আগে বন্ধ থাকলে খুলবে
                    if (shouldOpen) {

                        card.classList.add('is-open');
                        button.setAttribute('aria-expanded', 'true');
                        details.hidden = false;

                        const text =
                            button.querySelector('.legal-info-toggle-text');

                        if (text) {
                            text.textContent = 'সংক্ষিপ্ত করুন';
                        }

                        const arrow =
                            button.querySelector('.legal-info-arrow');

                        if (arrow) {
                            arrow.textContent = '↑';
                        }
                    }
                });
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener(
            'DOMContentLoaded',
            initializeLegalInfoCards
        );
    } else {
        initializeLegalInfoCards();
    }
})();
</script>

@endsection
