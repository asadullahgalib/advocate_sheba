@if(isset($related_advocates) && $related_advocates->count() > 0)

@php
    // "View All" বাটন: এই অ্যাডভোকেটের designation অনুযায়ী সঠিক list পেজে যাবে
    $viewAllUrl = '#';
    if (isset($advocate)) {
        if ($advocate->designation_id == 5) {
            $professional_name = 'Advocates';
            $viewAllUrl = route('find.our.advocate-list');
        } elseif ($advocate->designation_id == 2) {
            $viewAllUrl = route('find.our.barrister-list');
            $professional_name = 'Barristers';
        } elseif ($advocate->designation_id == 3) {
            $viewAllUrl = route('find.our.consultant-list');
        }
    }
@endphp

<div class="col-12">
<section class="lpc-carousel-section">

    <div class="container">

        <div class="flex justify-between items-center mt-2">
          <div class="my-4">
            <h2
              id="hospitals-by-location"
              class="text-lg md:text-xl font-semibold text-gray-800 dark:text-gray-100"
            >
              Related Legal {{@$professional_name}}
            </h2>
            <p class="text-sm text-gray-600 dark:text-gray-400">
              Explore Our Legal {{@$professional_name}}
            </p>
          </div>
          <a
            href="{{ $viewAllUrl }}"
            aria-label=""
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
            <button type="button" class="lpc-arrow lpc-arrow-prev" aria-label="Previous">
                <i class="fa fa-chevron-left"></i>
            </button>

            <!-- VIEWPORT -->
            <div class="lpc-viewport">
                <div class="lpc-track">

                    @foreach($related_advocates as $related)
                    <!-- PROFILE CARD -->
                    <div class="lpc-slide">
                        <div class="lpc-card">

                            <!-- PROFILE IMAGE -->
                            <div class="lpc-image-area">
                                <div class="lpc-profile-image">
                                    <img src="{{ !empty($related->image) ? url('uploads/advocates_images/'.$related->image) : url('uploads/no_image.png') }}" alt="{{ $related->name }}">
                                </div>
                                <div class="lpc-verified">
                                    <i class="fa fa-check"></i> Bar Council Verified
                                </div>
                            </div>

                            <!-- PROFILE BODY -->
                            <div class="lpc-body">
                                <h3 class="lpc-name">{{ $related->name }}</h3>
                                <div class="lpc-designation">{{ $related->designation->name ?? '' }}</div>

                                <div class="lpc-rating">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    <strong>4.8</strong>
                                    <span>(61 Reviews)</span>
                                </div>

                                <div class="lpc-specialization">{{ $related->experience }}</div>

                                <div class="lpc-court">{{ $related->court_name }}</div>
                                <!-- This is used for Bar Association -->
                                <div class="lpc-court-location">{{ $related->present_address }}</div>

                                <div class="lpc-divider"></div>

                                <div class="lpc-info">
                                    <div class="lpc-info-column">
                                        <div class="lpc-info-label">Qualification:</div>
                                        <div class="lpc-info-value">{{ $related->short_qualification }}</div>
                                        <div class="lpc-info-label">Enrollment No:</div>
                                        <div class="lpc-info-value">{{ $related->enrollment_no }}</div>
                                    </div>
                                    <div class="lpc-info-column">
                                        <div class="lpc-info-label">Experience:</div>
                                        <div class="lpc-info-value">{{ $related->experience }}</div>
                                        <div class="lpc-info-label">Bar Association:</div>
                                        <div class="lpc-info-value">{{ $related->bar_association }}</div>
                                    </div>
                                </div>

                                <!-- VIEW PROFILE -->
                                <a href="{{ !empty($related->slug) ? route('advocate-profile', $related->slug) : '#' }}" class="lpc-profile-button">
                                    <i class="fa fa-eye"></i> View Profile
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

            <!-- NEXT BUTTON -->
            <button type="button" class="lpc-arrow lpc-arrow-next" aria-label="Next">
                <i class="fa fa-chevron-right"></i>
            </button>

        </div>
    </div>
</section>
</div>

@endif