<!-- Frequently Asked Questions (FAQ) -->
<div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
    <div class="doctor-profile-card">

        <!-- Header -->
        <div class="doctor-profile-title">
            <h3>
                Frequently Asked Questions (FAQ)
            </h3>
        </div>

        <!-- =========================================
             FAQ Section
        ========================================= -->

        <div class="faq-card">

            <!-- FAQ Accordion -->
            <div class="faq-accordion">


                <!-- FAQ 1 -->
                <div class="faq-item active">

                    <button class="faq-question"
                            type="button">

                        <span>
                            এডভোকেটের সাথে কিভাবে যোগাযোগ করতে পারি?
                        </span>

                        <i class="bi bi-chevron-up"></i>

                    </button>


                    <div class="faq-answer">

                        <p>
                            ফোন, ইমেইল অথবা অনলাইন কনসালটেশনের মাধ্যমে এডভোকেটের সাথে যোগাযোগ করতে পারেন।
                        </p>

                    </div>

                </div>


                <!-- FAQ 2 -->
                <div class="faq-item">

                    <button class="faq-question"
                            type="button">

                        <span>
                            কোন ধরনের আইনি সেবা প্রদান করা হয়?
                        </span>

                        <i class="bi bi-chevron-down"></i>

                    </button>


                    <div class="faq-answer">

                        <p>
                            বিভিন্ন ধরনের দেওয়ানি, ফৌজদারি, পারিবারিক ও অন্যান্য আইনি বিষয়ে পরামর্শ ও সেবা প্রদান করা হয়।
                        </p>

                    </div>

                </div>


                <!-- FAQ 3 -->
                <div class="faq-item">

                    <button class="faq-question"
                            type="button">

                        <span>
                            পরামর্শ বা কনসালটেশন ফি কত?
                        </span>

                        <i class="bi bi-chevron-down"></i>

                    </button>


                    <div class="faq-answer">

                        <p>
                            আইনি বিষয় ও পরামর্শের ধরন অনুযায়ী কনসালটেশন ফি নির্ধারণ করা হয়।
                        </p>

                    </div>

                </div>


                <!-- FAQ 4 -->
                <div class="faq-item">

                    <button class="faq-question"
                            type="button">

                        <span>
                            কিভাবে অ্যাপয়েন্টমেন্ট নিতে পারি?
                        </span>

                        <i class="bi bi-chevron-down"></i>

                    </button>


                    <div class="faq-answer">

                        <p>
                            ওয়েবসাইটের মাধ্যমে অথবা সরাসরি যোগাযোগ করে সহজেই অ্যাপয়েন্টমেন্ট নিতে পারেন।
                        </p>

                    </div>

                </div>


                <!-- FAQ 5 -->
                <div class="faq-item">

                    <button class="faq-question"
                            type="button">

                        <span>
                            অনলাইনে আইনি পরামর্শ নেওয়া যাবে কি?
                        </span>

                        <i class="bi bi-chevron-down"></i>

                    </button>


                    <div class="faq-answer">

                        <p>
                            হ্যাঁ, প্রয়োজন অনুযায়ী ফোন বা অনলাইন মাধ্যমে আইনি পরামর্শ নেওয়ার সুবিধা থাকতে পারে।
                        </p>

                    </div>

                </div>


            </div>

        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        const faqQuestions = document.querySelectorAll('.faq-question');

        faqQuestions.forEach(function (question) {

            question.addEventListener('click', function () {

                const currentItem = this.closest('.faq-item');

                const isActive = currentItem.classList.contains('active');


                // সব FAQ বন্ধ
                document.querySelectorAll('.faq-item').forEach(function (item) {

                    item.classList.remove('active');

                    const icon = item.querySelector('.faq-question i');

                    icon.classList.remove('bi-chevron-up');

                    icon.classList.add('bi-chevron-down');

                });


                // Current FAQ open
                if (!isActive) {

                    currentItem.classList.add('active');

                    const icon = currentItem.querySelector('.faq-question i');

                    icon.classList.remove('bi-chevron-down');

                    icon.classList.add('bi-chevron-up');

                }

            });

        });

    });
</script>