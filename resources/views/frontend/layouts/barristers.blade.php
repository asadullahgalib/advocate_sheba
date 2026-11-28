<section class="lpc-carousel-section">

    <div class="container">

        <div class="flex justify-between items-center mt-2">
          <div class="my-4">
            <h2 id="hospitals-by-location" class="text-lg md:text-xl font-semibold text-gray-800 dark:text-gray-100">
              Recently Added Barristers
            </h2>
            <p class="text-sm text-gray-600 dark:text-gray-400">
              Explore newly added barristers
            </p>
          </div>
          <a href="{{ route('find.our.barrister-list') }}" aria-label="View all barristers" class="flex items-center gap-1 text-[#008080] text-sm font-semibold hover:underline transition">
            View All
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true">
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

                    @foreach($barristers as $barrister)
                    <!-- PROFILE CARD -->
                    <div class="lpc-slide">
                        <div class="lpc-card">

                            <!-- PROFILE IMAGE -->
                            <div class="lpc-image-area">
                                <div class="lpc-profile-image">
                                    <img src="{{ !empty($barrister->image) ? url('uploads/advocates_images/'.$barrister->image) : url('uploads/no_image.png') }}" alt="{{ $barrister->name }}">
                                </div>
                                <!-- VERIFIED -->
                                <div class="lpc-verified">
                                    <i class="fa fa-check"></i> Bar Council Verified
                                </div>
                            </div>

                            <!-- PROFILE BODY -->
                            <div class="lpc-body">
                                <h3 class="lpc-name">{{ $barrister->name }}</h3>
                                <div class="lpc-designation">{{ $barrister->designation->name ?? '' }}</div>

                                <!-- RATING -->
                                <div class="lpc-rating">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    <strong>4.8</strong>
                                    <span>(61 Reviews)</span>
                                </div>

                                <!-- SPECIALIZATION -->
                                <div class="lpc-specialization">{{ $barrister->experience }}</div>

                                <!-- COURT -->
                                <div class="lpc-court">{{ $barrister->court_name }}</div>
                                <div class="lpc-court-location">{{ $barrister->present_address }}</div>

                                <!-- DIVIDER -->
                                <div class="lpc-divider"></div>

                                <!-- INFORMATION -->
                                <div class="lpc-info">
                                    <div class="lpc-info-column">
                                        <div class="lpc-info-label">Enrollment No:</div>
                                        <div class="lpc-info-value">{{ $barrister->enrollment_no }}</div>
                                        <div class="lpc-info-label">
                                        Bar No:</div>
                                        <div class="lpc-info-value">{{ $barrister->bar_no }}</div>
                                        
                                    </div>
                                    <div class="lpc-info-column">
                                        <div class="lpc-info-label">Experience:</div>
                                        <div class="lpc-info-value">{{ $barrister->experience }}</div>
                                        
                                        <!-- District Name (রিলেশন ব্যবহার করে) -->
                                        <div class="lpc-info-label">Bar Association:</div>
                                        <div class="lpc-info-value">{{ $barrister->district->name ?? 'N/A' }}</div>
                                    </div>
                                </div>

                                <!-- VIEW PROFILE -->
                                <a href="{{ route('advocate-profile', $barrister->slug) }}" class="lpc-profile-button">
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