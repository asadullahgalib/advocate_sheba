<section>
    <div class="row">
        @foreach($law_firm_members as $member)
        <div class="col-md-3 col-12 mb-4">
            <div class="lpc-slide">
                <div class="lpc-card">
                    <!-- PROFILE BODY -->
                    <div class="lpc-body">
                        <!-- Law Firm Team Card -->
                        <div class="lf-team-card">
                            <!-- Advocate Profile -->
                            <div class="lf-advocate-card">
                                <!-- Advocate Image -->
                                <div class="lf-advocate-image">
                                    <img src="{{ !empty($member->user->image) ? asset('uploads/advocates_images/'.$member->user->image) : asset('frontend/adv.png') }}" alt="{{ $member->user->name ?? 'Advocate' }}">
                                </div>

                                <!-- Verification Badge -->
                                <div class="lf-verified-badge">
                                    <i class="fa fa-shield"></i>
                                    <span>Bar Council Verified</span>
                                    <i class="fa fa-check-circle"></i>
                                </div>

                                <!-- Position -->
                                <div class="lf-advocate-position">
                                    Senior Advocate
                                </div>

                                <!-- Name -->
                                <h4 class="lf-advocate-name">
                                    {{ $member->user->name ?? 'N/A' }}
                                </h4>

                                <!-- Designation -->
                                <p class="lf-advocate-designation">
                                    {{ $member->user->short_qualification ?? 'Legal Professional' }}
                                </p>

                                <!-- Rating -->
                                <div class="lf-advocate-rating">
                                    <span class="lf-stars">★★★★★</span>
                                    <span class="lf-rating-number">4.7</span>
                                    <span class="lf-review-count">(312)</span>
                                </div>

                                <!-- Experience -->
                                <div class="lf-advocate-experience">
                                    <i class="fa fa-map-marker"></i>
                                    <span>{{ $member->user->experience ?? '0' }} Years of Practice</span>
                                </div>

                                <!-- View Profile Button -->
                                <a href="{{ route('advocate-profile', $member->user->slug) }}" class="lf-view-profile-btn">
                                    View Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>