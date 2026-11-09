@extends('frontend.layouts.master')
@section('content')

@php
  // এই মানগুলো নিজের মতো বদলে নিন
  $brandName      = 'Advocate Sheba';
  $phone          = '+880 12345678';
  $phoneLink      = '8801XXXXXXXXX';
  $price          = '2,000';
  $heroImage      = 'uploads/okk.png';
  $advocateCount  = '1500+';
  $firmCount      = '1200+';
  $visitorCount   = '1000+';
@endphp

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/why_advocates.css') }}">

<!-- ================= Grow Your Practice ================= -->
<section class="ap-hero">
  <div class="container">
    <div class="row align-items-center">

      <!-- Left content -->
      <div class="col-lg-7">
        <h1 class="ap-title">Grow Your Practice<br>with <span>{{ $brandName }}</span></h1>

        <p class="ap-lead">
          Increase your visibility, build trust, and connect with more clients across Bangladesh.<br>
          <b>AI Profile Assistant</b> answers client questions 24/7.
        </p>

        <div class="ap-features">
          <div class="ap-feature">
            <span class="ap-ico"><i class="bi bi-shield-check"></i></span>
            <strong>Verified Profiles</strong>
            <small>Build trust &amp; credibility</small>
          </div>
          <div class="ap-feature">
            <span class="ap-ico"><i class="bi bi-graph-up-arrow"></i></span>
            <strong>More Visibility</strong>
            <small>Reach more clients</small>
          </div>
          <div class="ap-feature">
            <span class="ap-ico"><i class="bi bi-headset"></i></span>
            <strong>Dedicated Support</strong>
            <small>We are with you</small>
          </div>
        </div>

        <div class="ap-offer">
          <div class="ap-offer-card">
            <div class="ap-brain"><i class="bi bi-cpu"></i></div>
            <div>
              <h4><i class="bi bi-stars"></i>Get Discovered by Clients<i class="bi bi-stars"></i></h4>
              <p>AI-Powered Professional Profile</p>
              <div class="ap-price">Only <b>Tk {{ $price }}</b>/year</div>
            </div>
          </div>

          <div class="ap-contact">
            <h5>Contact Our Team</h5>
            <a class="ap-call" href="tel:+{{ $phoneLink }}">
              <span class="ap-call-ico"><i class="bi bi-telephone-fill"></i></span>
              <span>
                <small>Call or WhatsApp</small>
                <strong>{{ $phone }}</strong>
              </span>
            </a>
            <div class="ap-avail">
              <i class="bi bi-clock"></i>Available 10:00 AM – 8:00 PM
              <small>Instant Response</small>
            </div>
          </div>
        </div>

        <div class="ap-steps">
          <span class="ap-step"><i class="bi bi-telephone-inbound"></i>We’ll Contact You</span>
          <span class="ap-step"><i class="bi bi-file-earmark-text"></i>We Handle Setup</span>
          <span class="ap-step"><i class="bi bi-person-check"></i>Your Profile Goes Live</span>
        </div>

        <div class="ap-secure"><i class="bi bi-shield-check"></i>Secure &amp; Trusted Platform for Advocates</div>
      </div>

      <!-- Right visual -->
      <div class="col-lg-5">
        <div class="ap-visual">
          <div class="ap-photo-wrap">
            <div class="ap-circle"></div>
            <div class="ap-dots"></div>
            <svg class="ap-sil" viewBox="0 0 200 260" aria-hidden="true">
              <circle cx="100" cy="70" r="42" fill="#b9dcd7"/>
              <path d="M20 260 C20 170 60 140 100 140 C140 140 180 170 180 260Z" fill="#b9dcd7"/>
            </svg>
            <img class="ap-photo" src="{{ url($heroImage) }}" alt="Advocate" onerror="this.style.display='none'">
          </div>

          <span class="ap-line"></span>

          <div class="ap-float ap-f1">
            <span class="ap-ico"><i class="bi bi-people"></i></span>
            Clients Find You
          </div>
          <div class="ap-float ap-f2">
            <span class="ap-ico"><i class="bi bi-calendar-check"></i></span>
            Book Consultation
          </div>

          <div class="ap-ai">
            <span class="ap-ico"><i class="bi bi-robot"></i></span>
            <div>
              <strong>AI Profile Assistant <em>24/7</em></strong>
              <small>Answers client questions automatically and converts visitors into consultations.</small>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ================= Why Advocates Love ================= -->
<section class="wl-section">
  <div class="container">

    <div class="wl-top"></div>
    <h2 class="wl-title">Why Advocates Love <span>{{ $brandName }}</span></h2>

    <div class="wl-grid">
      <div class="wl-item">
        <span class="wl-ico"><i class="bi bi-search"></i></span>
        <h4>Get Discovered by More Clients</h4>
        <p>Be visible when clients search for advocates and legal services.</p>
      </div>
      <div class="wl-item">
        <span class="wl-ico"><i class="bi bi-robot"></i></span>
        <h4>24/7 AI Profile Assistant</h4>
        <p>Your digital receptionist answers common questions and saves your time.</p>
      </div>
      <div class="wl-item">
        <span class="wl-ico"><i class="bi bi-shield-check"></i></span>
        <h4>Build Client Trust</h4>
        <p>Showcase your qualifications, experience, chamber information and more with a verified profile.</p>
      </div>
      <div class="wl-item">
        <span class="wl-ico"><i class="bi bi-calendar-check"></i></span>
        <h4>Improve Consultation Conversion</h4>
        <p>Help clients make informed decisions and turn more visitors into consultations.</p>
      </div>
      <div class="wl-item">
        <span class="wl-ico"><i class="bi bi-headset"></i></span>
        <h4>Dedicated Onboarding Support</h4>
        <p>Our team assists you throughout the process so you can get started without hassle.</p>
      </div>
    </div>

    <div class="wl-band" style="background-color:#103C6D">
      <h3>Join Our Growing Advocate Community</h3>
      <p>Join the community of advocates using {{ $brandName }} to strengthen their digital presence and connect with more clients.</p>

      <div class="wl-stats">
        <div class="wl-stat">
          <span class="wl-stat-ico"><i class="bi bi-person"></i></span>
          <div>
            <div class="wl-num">{{ $advocateCount }}</div>
            <div class="wl-label">Registered Advocates</div>
          </div>
        </div>
        <div class="wl-stat">
          <span class="wl-stat-ico"><i class="bi bi-building"></i></span>
          <div>
            <div class="wl-num">{{ $firmCount }}</div>
            <div class="wl-label">Law Firms &amp; Chambers</div>
          </div>
        </div>
        <div class="wl-stat">
          <span class="wl-stat-ico"><i class="bi bi-people"></i></span>
          <div>
            <div class="wl-num">{{ $visitorCount }}</div>
            <div class="wl-label">Monthly Client Seekers</div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@php
  $advocates = [
    ['name' => 'Adv. Asadullah Galib',   'area' => 'Criminal Law',  'img' => 'uploads/advocate_link/advocate.jpg', 'link' => '#'],
    ['name' => 'Adv. Name Two',   'area' => 'Family Law',    'img' => 'uploads/advocate_link/advocate.jpg', 'link' => '#'],
    ['name' => 'Adv. Name Three', 'area' => 'Corporate Law', 'img' => 'uploads/advocate_link/advocate.jpg', 'link' => '#'],
    ['name' => 'Adv. Name Four',  'area' => 'Land Law',      'img' => 'uploads/advocate_link/advocate.jpg', 'link' => '#'],
  ];
@endphp

<!-- ================= Advocates Growing with ================= -->
<section class="ag-section">
  <div class="container">

    <h2 class="ag-title">Advocates Growing with <span>{{ $brandName }}</span></h2>
    <p class="ag-sub">Join advocates growing their visibility and reaching more clients.</p>

    <div class="ag-grid">
      @foreach($advocates as $adv)
        <a class="ag-card" href="{{ $adv['link'] }}">
          <span class="ag-photo">
            <img src="{{ url($adv['img']) }}" alt="{{ $adv['name'] }}" onerror="this.onerror=null;this.src='{{ url('uploads/no_image.png') }}'">
          </span>
          <h4 class="ag-name">{{ $adv['name'] }}</h4>
          <p class="ag-area">{{ $adv['area'] }}</p>
          <i class="bi bi-arrow-right ag-arrow"></i>
        </a>
      @endforeach
    </div>

    <div class="ag-join">
      <a href="#">
        <span class="ag-join-ico"><i class="bi bi-person"></i></span>
        <span>Join {{ $advocateCount }} Advocates Already on <b>{{ $brandName }}</b></span>
        <i class="bi bi-arrow-right"></i>
      </a>
    </div>

    <div class="ag-bottom"></div>

  </div>
</section>

@if(isset($megazines) && $megazines->count() > 0)
<!-- ================= As Featured In ================= -->
<section class="am-section">
  <div class="container">
    <p class="am-label">As Featured In</p>
    <div class="am-logos">
      @foreach($megazines as $m)
        <a href="{{ !empty($m->link) ? $m->link : '#' }}" {{ !empty($m->link) ? 'target=_blank' : '' }} rel="noopener noreferrer" style="text-decoration: none; display: inline-block;">
          <img src="{{ !empty($m->image) ? url('uploads/megazine_images/'.$m->image) : url('uploads/no_image.png') }}" alt="{{ $m->title }}"
               onerror="this.replaceWith(Object.assign(document.createElement('span'),{className:'am-name',textContent:this.alt}))">
        </a>
      @endforeach
    </div>
  </div>
</section>
@endif

<!-- ================= Ready to Grow Your Practice ================= -->
<section class="rg-section">
  <div class="container">
    <div class="rg-band" style="background-color: #103C6D;">

      <div class="rg-left">
        <span class="rg-ico"><i class="bi bi-people"></i></span>
        <div>
          <h3>Ready to Grow Your Practice?</h3>
          <p>Join {{ $brandName }} today and connect with more clients across Bangladesh.</p>
        </div>
      </div>

      <div class="rg-right">
        <a class="rg-call" href="tel:+{{ $phoneLink }}">
          <span class="rg-call-ico"><i class="bi bi-telephone-fill"></i></span>
          <span>
            <small>Call or WhatsApp</small>
            <strong>{{ $phone }}</strong>
          </span>
        </a>
        <div class="rg-steps">
          <span><i class="bi bi-telephone-inbound"></i>We’ll Contact You</span>
          <span><i class="bi bi-file-earmark-text"></i>We Handle Setup</span>
          <span><i class="bi bi-person-check"></i>Your Profile Goes Live</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ================= Floating Join Button ================= -->
<a class="jb-btn" href="{{route('advocate.join')}}" rel="noopener noreferrer">
  <span class="jb-dot"></span>
  Join {{ $brandName }}
</a>


@endsection