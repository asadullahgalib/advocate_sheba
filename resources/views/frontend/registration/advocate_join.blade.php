@extends('frontend.layouts.master')
@section('content')

@php
  // এই মানগুলো নিজের মতো বদলে নিন
  $brandName    = 'Advocate Sheba';
  $phone        = '0123456789';
  $phoneLink    = '8801789295865';
  $formAction   = '#';
  $turnstileKey = '';
@endphp

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/advocate_form.css') }}">

<div class="af-toast" id="afToast" role="alert">
  <strong>Incomplete Form</strong>
  <span>Please fill in all mandatory fields and upload a profile photo.</span>
</div>

<section class="af-page">
  <div class="af-wrap">

    <div class="af-head">
      <span class="af-badge"><i class="bi bi-briefcase"></i>Join {{ $brandName }} Network</span>
      <h1>Advocate Profile Information Form</h1>
      <p>Please complete the form below to submit your professional information for listing on {{ $brandName }}.</p>
    </div>

    <form class="af-card" id="afForm" method="post" action="{{ $formAction }}" enctype="multipart/form-data" novalidate>
      @csrf

      <!-- 1. Advocate Information -->
      <div class="af-sec">
        <div class="af-sec-head">
          <h3 class="af-sec-title"><i class="bi bi-person-check"></i>1. Advocate Information</h3>
        </div>

        <div class="af-grid">
          <div class="af-field">
            <label for="name">Advocate’s Name<b>*</b></label>
            <input class="af-input" type="text" id="name" name="name" placeholder="Enter advocate’s full name" required>
          </div>
          <div class="af-field">
            <label for="email">Advocate’s Email<b>*</b></label>
            <input class="af-input" type="email" id="email" name="email" placeholder="Enter advocate’s valid email" required>
          </div>

          <div class="af-field">
            <label for="mobile">Advocate’s Personal Mobile Number<b>*</b></label>
            <input class="af-input" type="text" id="mobile" name="mobile" placeholder="Enter advocate’s personal mobile number" required>
          </div>
          <div class="af-field">
            <label for="bar_number">Bar Council Enrollment Number<b>*</b></label>
            <input class="af-input" type="text" id="bar_number" name="bar_number" placeholder="Enter Bar Council enrollment number" required>
          </div>

          <div class="af-field">
            <label for="degrees">Degrees<b>*</b></label>
            <input class="af-input" type="text" id="degrees" name="degrees" placeholder="Enter your degrees (e.g. LL.B, LL.M)" required>
          </div>
          <div class="af-field">
            <label for="trainings">Trainings or Certifications</label>
            <input class="af-input" type="text" id="trainings" name="trainings" placeholder="Enter your trainings or certifications (optional)">
          </div>

          <div class="af-field">
            <label for="practice_area">Practice Area<b>*</b></label>
            <input class="af-input" type="text" id="practice_area" name="practice_area" placeholder="Example: Criminal Law, Family Law" required>
          </div>
          <div class="af-field">
            <label for="experience">Experience<b>*</b></label>
            <input class="af-input" type="text" id="experience" name="experience" placeholder="Example: 5 Years Experience" required>
          </div>

          <div class="af-field">
            <label for="workplace">Workplace<b>*</b></label>
            <input class="af-input" type="text" id="workplace" name="workplace" placeholder="Example: Dhaka Judge Court" required>
          </div>
          <div class="af-field">
            <label for="designation">Designation<b>*</b></label>
            <input class="af-input" type="text" id="designation" name="designation" placeholder="Example: Senior Advocate, Supreme Court" required>
          </div>

          <div class="af-field">
            <label for="memberships">Memberships</label>
            <input class="af-input" type="text" id="memberships" name="memberships" placeholder="Example: Dhaka Bar Association (optional)">
          </div>
          <div class="af-field">
            <label for="photo">Profile Photo<b>*</b></label>
            <input class="af-input" type="file" id="photo" name="photo" accept="image/png,image/jpeg,image/webp" required>
            <span class="af-hint">Choose an image (PNG, JPG, WEBP)</span>
          </div>
        </div>
      </div>

      <!-- 2. Chamber & Practice Locations -->
      <div class="af-sec">
        <div class="af-sec-head">
          <h3 class="af-sec-title"><i class="bi bi-buildings"></i>2. Chamber &amp; Practice Locations</h3>
          <button type="button" class="af-add" id="afAddChamber"><i class="bi bi-plus-lg"></i>Add Chamber</button>
        </div>

        <div id="afChambers">
          <div class="af-chamber">
            <div class="af-chamber-head">
              <h4>Chamber 1</h4>
              <button type="button" class="af-remove"><i class="bi bi-dash"></i>Remove</button>
            </div>
            <div class="af-grid">
              <div class="af-field">
                <label>Chamber Name<b>*</b></label>
                <input class="af-input" type="text" data-f="name" name="chambers[0][name]" placeholder="Example: Law Chamber, Motijheel" required>
              </div>
              <div class="af-field">
                <label>Chamber Address<b>*</b></label>
                <input class="af-input" type="text" data-f="address" name="chambers[0][address]" placeholder="House # 16, Road No. 2, Dhaka 1205" required>
              </div>
              <div class="af-field">
                <label>Visiting Hour and Off Days<b>*</b></label>
                <input class="af-input" type="text" data-f="hours" name="chambers[0][hours]" placeholder="Example: 10am to 6pm (Closed: Friday)" required>
              </div>
              <div class="af-field">
                <label>Appointment Number<b>*</b></label>
                <input class="af-input" type="text" data-f="phone" name="chambers[0][phone]" placeholder="Enter a mobile number for appointment" required>
              </div>
              <div class="af-field">
                <label>Consultation Fee<b>*</b></label>
                <input class="af-input" type="text" data-f="fee" name="chambers[0][fee]" placeholder="Example: Tk 1000" required>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 3. Additional Information -->
      <div class="af-sec">
        <div class="af-sec-head">
          <h3 class="af-sec-title"><i class="bi bi-file-earmark-text"></i>3. Additional Information</h3>
        </div>

        <div class="af-field">
          <label for="notes">Additional Notes (Optional)</label>
          <textarea class="af-input" id="notes" name="notes" placeholder="Write any additional information or comments here"></textarea>
        </div>

        @if(!empty($turnstileKey))
          <div class="af-captcha">
            <div class="cf-turnstile" data-sitekey="{{ $turnstileKey }}"></div>
          </div>
          <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
        @endif

        <div class="af-submit-wrap">
          <button type="submit" class="af-submit">Submit Your Information</button>
          <p class="af-help">Need assistance? <b>Call or WhatsApp:</b> <a href="https://wa.me/{{ $phoneLink }}" target="_blank" rel="noopener noreferrer">{{ $phone }}</a></p>
        </div>
      </div>

    </form>
  </div>
</section>

<!-- নতুন চেম্বারের টেমপ্লেট -->
<template id="afChamberTpl">
  <div class="af-chamber">
    <div class="af-chamber-head">
      <h4>Chamber</h4>
      <button type="button" class="af-remove"><i class="bi bi-dash"></i>Remove</button>
    </div>
    <div class="af-grid">
      <div class="af-field">
        <label>Chamber Name<b>*</b></label>
        <input class="af-input" type="text" data-f="name" placeholder="Example: Law Chamber, Motijheel" required>
      </div>
      <div class="af-field">
        <label>Chamber Address<b>*</b></label>
        <input class="af-input" type="text" data-f="address" placeholder="House # 16, Road No. 2, Dhaka 1205" required>
      </div>
      <div class="af-field">
        <label>Visiting Hour and Off Days<b>*</b></label>
        <input class="af-input" type="text" data-f="hours" placeholder="Example: 10am to 6pm (Closed: Friday)" required>
      </div>
      <div class="af-field">
        <label>Appointment Number<b>*</b></label>
        <input class="af-input" type="text" data-f="phone" placeholder="Enter a mobile number for appointment" required>
      </div>
      <div class="af-field">
        <label>Consultation Fee<b>*</b></label>
        <input class="af-input" type="text" data-f="fee" placeholder="Example: Tk 1000" required>
      </div>
    </div>
  </div>
</template>

<script>
(function () {
  var form   = document.getElementById('afForm');
  var list   = document.getElementById('afChambers');
  var tpl    = document.getElementById('afChamberTpl');
  var toast  = document.getElementById('afToast');
  var timer;

  // চেম্বারের নম্বর ও নাম ঠিক করা
  function renumber() {
    var cards = list.querySelectorAll('.af-chamber');
    cards.forEach(function (card, i) {
      card.querySelector('h4').textContent = 'Chamber ' + (i + 1);
      card.querySelectorAll('[data-f]').forEach(function (inp) {
        inp.name = 'chambers[' + i + '][' + inp.getAttribute('data-f') + ']';
      });
    });
  }

  document.getElementById('afAddChamber').addEventListener('click', function () {
    list.appendChild(tpl.content.cloneNode(true));
    renumber();
  });

  list.addEventListener('click', function (e) {
    var btn = e.target.closest('.af-remove');
    if (!btn) return;
    var cards = list.querySelectorAll('.af-chamber');
    if (cards.length <= 1) { showToast(); return; }   // অন্তত একটা চেম্বার থাকতেই হবে
    btn.closest('.af-chamber').remove();
    renumber();
  });

  function showToast(msg) {
    if (msg) toast.querySelector('span').textContent = msg;
    toast.classList.add('show');
    clearTimeout(timer);
    timer = setTimeout(function () { toast.classList.remove('show'); }, 4000);
  }

  // সাবমিটের আগে যাচাই
  form.addEventListener('submit', function (e) {
    var bad = null;
    form.querySelectorAll('[required]').forEach(function (el) {
      var empty = (el.type === 'file') ? !el.files.length : !el.value.trim();
      el.classList.toggle('af-bad', empty);
      if (empty && !bad) bad = el;
    });
    if (bad) {
      e.preventDefault();
      showToast('Please fill in all mandatory fields and upload a profile photo.');
      bad.scrollIntoView({ behavior: 'smooth', block: 'center' });
      bad.focus();
    }
  });

  form.addEventListener('input', function (e) {
    if (e.target.classList.contains('af-bad')) e.target.classList.remove('af-bad');
  });
})();
</script>

@endsection