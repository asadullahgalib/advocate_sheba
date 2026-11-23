@if(isset($law_firms) && $law_firms->count() > 0)

@php
    // LawFirmController-এ ছবি যে ফোল্ডারে সেভ হয় সেটা এখানে দিন (শেষে / থাকবে)
    $lawFirmImageFolder = 'uploads/law_firm_images/';
@endphp

<section class="lpc-carousel-section" style="background: #ebe9e957;">

    <div class="container">

        <div class="flex justify-between items-center mt-2">
          <div class="my-4">
            <h2
              id="hospitals-by-location"
              class="text-lg md:text-xl font-semibold text-gray-800 dark:text-gray-100"
            >
              Law Firms
            </h2>
            <p class="text-sm text-gray-600 dark:text-gray-400">
              Explore Law Firms
            </p>
          </div>
          <a
            href="{{ route('find.our.law-firm-list') }}"
            aria-label="View all law firms"
            class="flex items-center gap-1 text-[#008080] text-sm font-semibold hover:underline transition"
          >
            View All
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="18"
              height="18"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-chevron-right"
              aria-hidden="true"
            >
              <path d="m9 18 6-6-6-6"></path>
            </svg>
          </a>
        </div>

        <div class="lpc-carousel">

            <!-- PREVIOUS BUTTON -->
            <button type="button"
                    class="lpc-arrow lpc-arrow-prev"
                    aria-label="Previous">
                <i class="fa fa-chevron-left"></i>
            </button>

            <!-- VIEWPORT -->
            <div class="lpc-viewport">

                <div class="lpc-track">

                    @foreach($law_firms as $firm)
                    <!-- LAW FIRM CARD -->
                    <div class="lpc-slide">

                        <div class="lpc-card">

                            <!-- FIRM IMAGE -->
                            <div class="lpc-image-area">

                                <div class="lpc-profile-image">
                                    <img src="{{ !empty($firm->image) ? url($lawFirmImageFolder.$firm->image) : asset('frontend/firm_logo.png') }}"
                                         alt="{{ $firm->firm_name }}">
                                </div>

                                <!-- VERIFIED -->
                                <div class="lpc-verified">
                                    <i class="fa fa-check"></i>
                                    Bar Council Verified
                                </div>

                            </div>

                            <!-- FIRM BODY -->
                            <div class="lpc-body">

                                <h3 class="lpc-name">
                                    {{ $firm->firm_name }}
                                </h3>

                                <div class="lpc-designation">
                                    Law Firm
                                </div>

                                <!-- RATING -->
                                <div class="lpc-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>

                                    <strong>4.8</strong>

                                    <span>
                                        (61 Reviews)
                                    </span>
                                </div>

                                <!-- LEADER -->
                                <div class="lpc-specialization">
                                    @if(!empty($firm->leader))
                                        <strong>Led by {{ $firm->leader->name }}</strong>
                                    @endif
                                </div>

                                <!-- COURT -->
                                <div class="lpc-court">
                                    {{ $firm->court_name }}
                                </div>

                                <div class="lpc-court-location">
                                    {{ optional($firm->leader)->present_address }}
                                </div>

                                <!-- DIVIDER -->
                                <div class="lpc-divider"></div>

                                <!-- INFORMATION -->
                                <div class="lpc-info">

                                    <!-- LEFT -->
                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Established:
                                        </div>

                                        <div class="lpc-info-value">
                                            {{ $firm->established }}
                                        </div>

                                        <div class="lpc-info-label">
                                            Head Advocate Enrollment No:
                                        </div>

                                        <div class="lpc-info-value">
                                            {{ !empty($firm->enrollment_no) ? $firm->enrollment_no : optional($firm->leader)->enrollment_no }}
                                        </div>

                                    </div>

                                    <!-- RIGHT -->
                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Team:
                                        </div>

                                        <div class="lpc-info-value">
                                            @if(!empty($firm->team_size))
                                                {{ $firm->team_size }} Lawyers
                                            @endif
                                        </div>

                                        <div class="lpc-info-label">
                                            Bar Association:
                                        </div>

                                        <div class="lpc-info-value">
                                            {{ !empty($firm->bar_association) ? $firm->bar_association : optional($firm->leader)->bar_association }}
                                        </div>

                                    </div>

                                </div>

                                <!-- VIEW Details -->
                                <a href="{{ !empty($firm->slug) ? route('law.firm.details', $firm->slug) : '#' }}"
                                   class="lpc-profile-button">
                                    <i class="fa fa-eye"></i>
                                    View Details
                                </a>

                            </div>

                        </div>

                    </div>
                    @endforeach

                </div>

            </div>

            <!-- NEXT BUTTON -->
            <button type="button"
                    class="lpc-arrow lpc-arrow-next"
                    aria-label="Next">
                <i class="fa fa-chevron-right"></i>
            </button>

        </div>

    </div>

</section>

@endif