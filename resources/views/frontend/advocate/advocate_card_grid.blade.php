<div class="lpc-carousel">
    <div class="lpc-viewport">
        <div class="lpc-track">

            @forelse($advocates as $advocate)
            <!-- PROFILE CARD -->
            <div class="lpc-slide">
                <div class="lpc-card">

                    <!-- PROFILE IMAGE -->
                    <div class="lpc-image-area">
                        <div class="lpc-profile-image">
                            <img src="{{ !empty($advocate->image) ? url('uploads/advocates_images/'.$advocate->image) : url('uploads/no_image.png') }}" alt="{{ $advocate->name }}">
                        </div>
                        <div class="lpc-verified">
                            <i class="fa fa-check"></i> Bar Council Verified
                        </div>
                    </div>

                    <!-- PROFILE BODY -->
                    <div class="lpc-body">
                        <h3 class="lpc-name">{{ $advocate->name }}</h3>
                        <div class="lpc-designation">{{ $advocate->designation->name ?? '' }}</div>

                        <div class="lpc-rating">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            <strong>4.8</strong>
                            <span>(61 Reviews)</span>
                        </div>

                        <div class="lpc-specialization">{{ $advocate->experience }}</div>

                        <div class="lpc-court">{{ $advocate->court_name }}</div>
                        <div class="lpc-court-location">{{ $advocate->present_address }}</div>

                        <div class="lpc-divider"></div>

                        <div class="lpc-info">
                            <div class="lpc-info-column">
                                <div class="lpc-info-label">Qualification:</div>
                                <div class="lpc-info-value">{{ $advocate->short_qualification }}</div>
                                <div class="lpc-info-label">Enrollment No:</div>
                                <div class="lpc-info-value">{{ $advocate->enrollment_no }}</div>
                            </div>
                            <div class="lpc-info-column">
                                <div class="lpc-info-label">Experience:</div>
                                <div class="lpc-info-value">{{ $advocate->experience }}</div>
                                <div class="lpc-info-label">Bar Association:</div>
                                <div class="lpc-info-value">{{ $advocate->bar_association }}</div>
                            </div>
                        </div>

                        <!-- VIEW PROFILE -->
                        <a href="{{ !empty($advocate->slug) ? route('advocate-profile', $advocate->slug) : '#' }}" class="lpc-profile-button">
                            <i class="fa fa-eye"></i> View Profile
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div style="width:100%; text-align:center; padding:30px 0;">
                এই মুহূর্তে কোনো তথ্য পাওয়া যায়নি।
            </div>
            @endforelse

        </div>
    </div>
</div>

<!-- Pagination -->
<div style="display:flex; justify-content:center; margin:20px 0 30px;">
    {{ $advocates->links() }}
</div>