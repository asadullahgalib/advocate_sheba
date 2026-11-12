{{-- ==========================================
     TEST SETTING (ekhon nijer number diye test korar jonno)
     Dynamic korar somoy ei duita line bodle dibo:
     $consultPhone = $advocate->phone ?? '';
========================================== --}}
@php
    $consultPhone = '01341-115353';
    $consultName  = $advocate->name ?? 'আইনজীবী';
@endphp

{{-- ==========================================
     PROFESSIONAL ADVOCATE CONSULTATION MODAL
========================================== --}}

<div class="consultation-overlay"
     id="consultOverlay"
     data-phone="{{ preg_replace('/\D/', '', $consultPhone) }}"
     data-advocate="{{ $consultName }}"
     aria-hidden="true">

    <div class="consultation-modal"
         role="dialog"
         aria-modal="true"
         aria-labelledby="consultTitle"
         tabindex="-1">

        {{-- HEADER --}}
        <div class="consult-header">

            <div class="consult-heading">
                <h3 id="consultTitle">পরামর্শ বুক করুন</h3>
                <p>আইনি পরামর্শের জন্য নিচের তথ্যগুলো পূরণ করুন</p>
            </div>

            <button type="button"
                    class="consult-close"
                    id="consultCloseBtn"
                    aria-label="বন্ধ করুন">
                <i class="fa fa-times"></i>
            </button>

        </div>


        {{-- BODY --}}
        <div class="consult-body">

            {{-- NAME --}}
            <div class="consult-field">

                <label for="cmName" class="form-label">
                    আপনার নাম <span class="required">*</span>
                </label>

                <input type="text"
                       id="cmName"
                       class="form-control"
                       placeholder="আপনার সম্পূর্ণ নাম লিখুন"
                       autocomplete="name"
                       maxlength="100">

                <small class="consult-error" id="cmNameError">
                    দয়া করে আপনার নাম লিখুন।
                </small>

            </div>


            {{-- TOPIC --}}
            <div class="consult-field">

                <label for="cmTopic" class="form-label">
                    পরামর্শের বিষয়
                </label>

                <select id="cmTopic" class="form-select">

                    <option value="পারিবারিক বিষয়">পারিবারিক বিষয়</option>
                    <option value="সম্পত্তি সংক্রান্ত পরামর্শ">সম্পত্তি সংক্রান্ত পরামর্শ</option>
                    <option value="ফৌজদারি মামলা">ফৌজদারি মামলা</option>
                    <option value="দেওয়ানি মামলা">দেওয়ানি মামলা</option>
                    <option value="ব্যবসা / কোম্পানি আইন">ব্যবসা / কোম্পানি আইন</option>
                    <option value="চুক্তি / দলিল যাচাই">চুক্তি / দলিল যাচাই</option>
                    <option value="অন্যান্য">অন্যান্য</option>

                </select>

            </div>


            {{-- DETAILS --}}
            <div class="consult-field">

                <label for="cmDetails" class="form-label">
                    সমস্যার বিবরণ
                    <span class="optional">(ঐচ্ছিক)</span>
                </label>

                <textarea id="cmDetails"
                          class="form-control"
                          rows="3"
                          maxlength="300"
                          placeholder="আপনার সমস্যাটি সংক্ষেপে লিখুন..."></textarea>

                <div class="consult-counter">
                    <span id="cmCount">0</span>/300
                </div>

            </div>


            {{-- DURATION --}}
            <div class="consult-field">

                <label class="form-label">
                    পরামর্শের সময়কাল
                </label>

                <div class="consult-duration">

                    <label class="duration-option">
                        <input type="radio"
                               name="cmDuration"
                               value="৫ মিনিট"
                               checked>
                        <span>৫ মিনিট</span>
                    </label>

                    <label class="duration-option">
                        <input type="radio"
                               name="cmDuration"
                               value="১৫ মিনিট">
                        <span>১৫ মিনিট</span>
                    </label>

                    <label class="duration-option">
                        <input type="radio"
                               name="cmDuration"
                               value="৩০ মিনিট">
                        <span>৩০ মিনিট</span>
                    </label>

                </div>

            </div>


            {{-- DATE & TIME --}}
            <div class="consult-field">

                <label class="form-label">
                    পছন্দের তারিখ ও সময়
                </label>

                <div class="row g-2">

                    <div class="col-6">

                        <input type="date"
                               id="cmDate"
                               class="form-control"
                               aria-label="পছন্দের তারিখ">

                    </div>

                    <div class="col-6">

                        <input type="text"
                               id="cmTime"
                               class="form-control"
                               placeholder="আপনার সময় লিখুন"
                               aria-label="পছন্দের সময়"
                               maxlength="50">

                    </div>

                </div>

                <small class="consult-hint">
                    সময়টি আইনজীবীর সঙ্গে আলোচনা করে নিশ্চিত করতে হবে।
                </small>

            </div>


            {{-- WHATSAPP BUTTON --}}
            <button type="button"
                    class="consult-submit"
                    id="consultSendBtn">

                <i class="fa-brands fa-whatsapp"></i>

                <span>WhatsApp-এ চালিয়ে যান</span>

                <i class="fa fa-arrow-right submit-arrow"></i>

            </button>


            {{-- FOOTER --}}
            <p class="consult-footer-note">
                <i class="fa fa-lock"></i>
                আপনার তথ্য WhatsApp-এর মাধ্যমে পাঠানো হবে।
            </p>

        </div>

    </div>

</div>


<style>

/* ==========================================
   CONSULTATION OVERLAY
========================================== */

.consultation-overlay {
    position: fixed;
    inset: 0;
    z-index: 999999;

    display: flex;
    align-items: center;
    justify-content: center;

    padding: 16px;

    background: rgba(15, 23, 42, 0.58);
    backdrop-filter: blur(3px);
    -webkit-backdrop-filter: blur(3px);

    opacity: 0;
    visibility: hidden;
    pointer-events: none;

    transition: opacity .25s ease, visibility .25s ease;
}

.consultation-overlay.consult-open {
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
}


/* ==========================================
   MODAL
========================================== */

.consultation-modal {
    width: 100%;
    max-width: 450px;

    max-height: 90vh;
    overflow-y: auto;

    background: #ffffff;
    color: #263b43;

    border-radius: 14px;

    box-shadow: 0 20px 60px rgba(0, 0, 0, .20);

    transform: translateY(15px) scale(.98);
    transition: transform .25s ease;

    scrollbar-width: thin;
    scrollbar-color: #dce5e8 transparent;
}

.consult-open .consultation-modal {
    transform: translateY(0) scale(1);
}


/* ==========================================
   HEADER
========================================== */

.consult-header {
    display: flex;
    align-items: center;
    justify-content: space-between;

    padding: 19px 22px;

    border-bottom: 1px solid #edf1f3;
}

.consult-heading h3 {
    margin: 0;

    color: #123f46;

    font-size: 20px;
    font-weight: 700;
    line-height: 1.4;
}

.consult-heading p {
    margin: 5px 0 0;

    color: #829099;

    font-size: 12px;
    line-height: 1.5;
}

.consult-close {
    flex-shrink: 0;

    width: 34px;
    height: 34px;

    display: flex;
    align-items: center;
    justify-content: center;

    margin-left: 12px;

    border: none;
    border-radius: 8px;

    background: #f2f5f6;
    color: #657780;

    font-size: 15px;

    cursor: pointer;

    transition: .2s ease;
}

.consult-close:hover {
    background: #e8eeee;
    color: #123f46;
}


/* ==========================================
   BODY
========================================== */

.consult-body {
    padding: 21px 22px 22px;
}

.consult-field {
    margin-bottom: 17px;
}

.consult-body .form-label {
    display: block;

    margin-bottom: 7px;

    color: #344650;

    font-size: 13px;
    font-weight: 600;
}

.consult-body .required {
    color: #dc3545;
}

.consult-body .optional {
    color: #98a3aa;
    font-size: 11px;
    font-weight: 400;
}

.consult-body .form-control,
.consult-body .form-select {
    width: 100%;
    min-height: 44px;

    padding: 9px 12px;

    border: 1px solid #dfe6e9;
    border-radius: 8px;

    background-color: #ffffff;
    color: #263b43;

    font-family: inherit;
    font-size: 13px;

    box-shadow: none;

    transition: border-color .2s ease, box-shadow .2s ease;
}

.consult-body .form-control:focus,
.consult-body .form-select:focus {
    border-color: #16818a;

    box-shadow: 0 0 0 3px rgba(22, 129, 138, .10);

    outline: none;
}

.consult-body .form-control::placeholder {
    color: #a1adb4;
    opacity: 1;
}

.consult-body textarea.form-control {
    min-height: 85px;
    resize: vertical;
}


/* ==========================================
   VALIDATION
========================================== */

.consult-error {
    display: none;

    margin-top: 5px;

    color: #dc3545;
    font-size: 11px;
}

.consult-error.show {
    display: block;
}

#cmName.has-error {
    border-color: #dc3545;
}


/* ==========================================
   CHARACTER COUNTER
========================================== */

.consult-counter {
    margin-top: 5px;

    text-align: right;

    color: #94a3b8;
    font-size: 11px;
}


/* ==========================================
   DURATION OPTIONS
========================================== */

.consult-duration {
    display: grid;
    grid-template-columns: repeat(3, 1fr);

    gap: 9px;
}

.duration-option {
    position: relative;

    margin: 0;
    cursor: pointer;
}

.duration-option input {
    position: absolute;

    width: 1px;
    height: 1px;

    opacity: 0;
}

.duration-option span {
    display: block;

    padding: 11px 5px;

    border: 1px solid #e1e8eb;
    border-radius: 8px;

    background: #f8fafb;

    color: #657780;

    font-size: 13px;
    font-weight: 500;

    text-align: center;

    transition: .2s ease;
}

.duration-option input:checked + span {
    background: #eaf5f4;

    border-color: #16818a;

    color: #126d76;
    font-weight: 700;
}

.duration-option input:focus-visible + span {
    outline: 2px solid #16818a;
    outline-offset: 2px;
}


/* ==========================================
   DATE & TIME HINT
========================================== */

.consult-hint {
    display: block;

    margin-top: 7px;

    color: #87949c;
    font-size: 11px;
}


/* ==========================================
   WHATSAPP BUTTON
========================================== */

.consult-submit {
    width: 100%;
    min-height: 48px;

    display: flex;
    align-items: center;
    justify-content: center;

    gap: 9px;

    padding: 12px 16px;

    border: none;
    border-radius: 8px;

    background: #168c50;
    color: #ffffff;

    font-family: inherit;
    font-size: 14px;
    font-weight: 700;

    cursor: pointer;

    transition: background .2s ease, transform .2s ease;
}

.consult-submit:hover {
    background: #117642;
    transform: translateY(-1px);
}

.consult-submit:active {
    transform: translateY(0);
}

.consult-submit > i:first-child {
    font-size: 21px;
}

.consult-submit .submit-arrow {
    margin-left: 3px;
    font-size: 12px;
    opacity: .85;
}


/* ==========================================
   FOOTER NOTE
========================================== */

.consult-footer-note {
    display: flex;
    align-items: center;
    justify-content: center;

    gap: 6px;

    margin: 12px 0 0;

    color: #8b989f;

    font-size: 11px;
    text-align: center;
}

.consult-footer-note i {
    color: #168c50;
}


/* ==========================================
   BODY SCROLL LOCK
========================================== */

body.consult-lock {
    overflow: hidden;
}


/* ==========================================
   MOBILE RESPONSIVE
========================================== */

@media (max-width: 575px) {

    .consultation-overlay {
        align-items: flex-end;
        padding: 0;
    }

    .consultation-modal {
        max-width: 100%;
        max-height: 92vh;

        border-radius: 17px 17px 0 0;
    }

    .consult-header {
        padding: 16px 18px;
    }

    .consult-heading h3 {
        font-size: 18px;
    }

    .consult-body {
        padding: 18px 18px 24px;
    }

    .consult-field {
        margin-bottom: 16px;
    }

}

@media (max-width: 360px) {

    .consult-header {
        padding: 14px;
    }

    .consult-body {
        padding: 15px 14px 22px;
    }

    .consult-heading h3 {
        font-size: 17px;
    }

    .consult-heading p {
        font-size: 11px;
    }

    .consult-duration {
        gap: 6px;
    }

    .duration-option span {
        font-size: 12px;
    }

}


/* ==========================================
   REDUCED MOTION
========================================== */

@media (prefers-reduced-motion: reduce) {

    .consultation-overlay,
    .consultation-modal,
    .consult-submit,
    .consult-close {
        transition: none;
    }

}

</style>


<script>
(function () {

    'use strict';

    var overlay;
    var modal;
    var nameInput;
    var nameError;
    var detailsInput;
    var countEl;
    var previousFocus = null;


    // ======================================
    // TODAY'S DATE
    // ======================================

    function getToday() {

        var today = new Date();

        return today.getFullYear() + '-' +
            String(today.getMonth() + 1).padStart(2, '0') + '-' +
            String(today.getDate()).padStart(2, '0');

    }


    // ======================================
    // PHONE NUMBER NORMALIZE (wa.me er jonno)
    // 01712345678  -> 8801712345678
    // 1712345678   -> 8801712345678
    // +880 1712-345678 -> 8801712345678
    // ======================================

    function normalizePhone(raw) {

        var number = String(raw || '').replace(/\D/g, '');

        if (number.indexOf('00') === 0) {
            number = number.slice(2);
        }

        if (number.length === 11 && number.indexOf('01') === 0) {
            number = '88' + number;
        } else if (number.length === 10 && number.indexOf('1') === 0) {
            number = '880' + number;
        }

        return number;

    }


    // ======================================
    // OPEN MODAL
    // ======================================

    function open() {

        if (!overlay) return;

        previousFocus = document.activeElement;

        var dateInput = document.getElementById('cmDate');
        var today = getToday();

        dateInput.min = today;

        if (!dateInput.value || dateInput.value < today) {
            dateInput.value = today;
        }

        overlay.classList.add('consult-open');
        overlay.setAttribute('aria-hidden', 'false');

        document.body.classList.add('consult-lock');

        setTimeout(function () {
            nameInput.focus();
        }, 150);

    }


    // ======================================
    // CLOSE MODAL
    // ======================================

    function close() {

        if (!overlay) return;

        overlay.classList.remove('consult-open');
        overlay.setAttribute('aria-hidden', 'true');

        document.body.classList.remove('consult-lock');

        if (previousFocus && typeof previousFocus.focus === 'function') {
            previousFocus.focus();
        }

    }


    // ======================================
    // NAME VALIDATION
    // ======================================

    function validateName() {

        if (!nameInput.value.trim()) {

            nameInput.classList.add('has-error');
            nameError.classList.add('show');

            nameInput.focus();

            return false;

        }

        nameInput.classList.remove('has-error');
        nameError.classList.remove('show');

        return true;

    }


    // ======================================
    // SEND WHATSAPP MESSAGE
    // ======================================

    function send() {

        var phone = normalizePhone(overlay.getAttribute('data-phone'));
        var advocate = overlay.getAttribute('data-advocate');

        if (!validateName()) return;

        if (!phone || phone.length < 10) {

            alert('এই আইনজীবীর WhatsApp নম্বর পাওয়া যায়নি বা নম্বরটি সঠিক নয়।');

            return;

        }

        var name = nameInput.value.trim();

        var topic = document.getElementById('cmTopic').value;

        var details = detailsInput.value.trim();

        var durationElement = document.querySelector(
            'input[name="cmDuration"]:checked'
        );

        var duration = durationElement
            ? durationElement.value
            : '৫ মিনিট';

        var date = document.getElementById('cmDate').value;

        var time = document.getElementById('cmTime').value.trim();

        var when = 'যেকোনো সময়';

        if (date) {

            var parts = date.split('-');

            when = parts[2] + '/' + parts[1] + '/' + parts[0];

            if (time) {
                when += ', ' + time;
            }

        } else if (time) {

            when = time;

        }


        // MESSAGE FORMAT

        var msg =
            'আসসালামু আলাইকুম ' + advocate + ',\n\n' +
            'আমি আপনার কাছ থেকে আইনি পরামর্শ নিতে আগ্রহী।\n\n' +
            '👤 নাম: ' + name + '\n' +
            '📌 পরামর্শের বিষয়: ' + topic + '\n' +
            '⏱ সময়কাল: ' + duration + '\n' +
            '📅 পছন্দের সময়: ' + when;

        if (details) {

            msg += '\n📝 সমস্যার বিবরণ: ' + details;

        }

        msg += '\n\nধন্যবাদ।';


        // WHATSAPP URL

        var url = 'https://wa.me/' +
            phone +
            '?text=' +
            encodeURIComponent(msg);

        var whatsappWindow = window.open(url, '_blank');

        if (!whatsappWindow) {

            window.location.href = url;

            return;

        }

        close();

    }


    // ======================================
    // INITIALIZE
    // ======================================

    function init() {

        overlay = document.getElementById('consultOverlay');

        if (!overlay) return;

        modal = overlay.querySelector('.consultation-modal');

        document.body.appendChild(overlay);

        nameInput = document.getElementById('cmName');

        nameError = document.getElementById('cmNameError');

        detailsInput = document.getElementById('cmDetails');

        countEl = document.getElementById('cmCount');


        // CHARACTER COUNTER

        detailsInput.addEventListener('input', function () {

            countEl.textContent = detailsInput.value.length;

        });


        // LIVE NAME VALIDATION

        nameInput.addEventListener('input', function () {

            if (nameInput.value.trim()) {

                nameInput.classList.remove('has-error');

                nameError.classList.remove('show');

            }

        });


        // CLOSE BUTTON

        document.getElementById('consultCloseBtn')
            .addEventListener('click', close);


        // SEND BUTTON

        document.getElementById('consultSendBtn')
            .addEventListener('click', send);


        // CLICK OUTSIDE TO CLOSE

        overlay.addEventListener('click', function (e) {

            if (e.target === overlay) {
                close();
            }

        });


        // KEYBOARD SUPPORT

        document.addEventListener('keydown', function (e) {

            if (!overlay.classList.contains('consult-open')) return;

            if (e.key === 'Escape') {

                close();

            }

            if (e.key === 'Tab') {

                var focusable = modal.querySelectorAll(
                    'button:not(:disabled), input:not(:disabled), select:not(:disabled), textarea:not(:disabled)'
                );

                if (!focusable.length) return;

                var first = focusable[0];

                var last = focusable[focusable.length - 1];

                if (e.shiftKey && document.activeElement === first) {

                    e.preventDefault();

                    last.focus();

                } else if (!e.shiftKey && document.activeElement === last) {

                    e.preventDefault();

                    first.focus();

                }

            }

        });

    }


    // ======================================
    // GLOBAL FUNCTIONS
    // ======================================

    window.openConsultModal = open;

    window.closeConsultModal = close;


    // DOM READY

    if (document.readyState === 'loading') {

        document.addEventListener('DOMContentLoaded', init);

    } else {

        init();

    }

})();
</script>