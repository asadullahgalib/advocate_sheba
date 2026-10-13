<!-- About Advocate -->
<div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
    <div class="lpc-slide">

        <div class="lpc-card">

            <!-- PROFILE BODY -->

            <div class="lpc-body">

                <!-- Law Firm Team Card -->
                <div class="lf-team-card">

                    <!-- Law Firm Heading -->
                    <div class="lf-team-heading">
                        <h2>Galib Law Associates</h2>
                        <p>
                            District &amp; Sessions Judge Court, Dhaka
                            <span>•</span>
                            Supreme Court of Bangladesh
                        </p>
                    </div>

                    <!-- Statistics -->
                    <div class="lf-team-stats">

                        <div class="lf-stat-box">
                            <div class="lf-stat-number">৫</div>
                            <div class="lf-stat-label">অ্যাডভোকেট</div>
                        </div>

                        <div class="lf-stat-box">
                            <div class="lf-stat-number">১২+</div>
                            <div class="lf-stat-label">বছরের অভিজ্ঞতা</div>
                        </div>

                        <div class="lf-stat-box">
                            <div class="lf-stat-number">৩</div>
                            <div class="lf-stat-label">আদালত</div>
                        </div>

                        <div class="lf-stat-box">
                            <div class="lf-stat-number">4.7</div>
                            <div class="lf-stat-label">গড় রেটিং</div>
                        </div>

                    </div>

                    <!-- Team Heading -->
                    <h3 class="lf-team-section-title">Our Team</h3>

                    <!-- Advocate Profile -->
                    <div class="lf-advocate-card">

                        <!-- Advocate Image -->
                        <div class="lf-advocate-image">
                            <img src="{{asset('frontend/adv.png')}}"
                                 alt="Adv. Md. Asadullah Galib">
                        </div>

                        <!-- Verification Badge -->
                        <div class="lf-verified-badge">
                            <i class="fa fa-shield"></i>
                            <span>Bar Council Verified</span>
                            <i class="fa fa-check-circle"></i>
                        </div>

                        <!-- Position -->
                        <div class="lf-advocate-position">
                            Head Advocate
                        </div>

                        <!-- Name -->
                        <h4 class="lf-advocate-name">
                            Adv. Md. Asadullah Galib
                        </h4>

                        <!-- Designation -->
                        <p class="lf-advocate-designation">
                            Founder &amp; Head of Chamber
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
                            <span>12 Years of Practice</span>
                        </div>

                        <!-- View Profile Button -->
                        <a href="{{ route('advocate-profile') }}"
                           class="lf-view-profile-btn">
                            View Profile
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

<style>
    /* =========================================
       LAW FIRM TEAM PROFILE CARD
    ========================================= */

    .lf-team-card {
        width: 100%;
        min-width: 0;
        padding: 18px;
        background: #f3f5f9;
        border-radius: 16px;
        box-sizing: border-box;
        color: #102b50;
        font-family: inherit;
    }

    /* Firm Heading */

    .lf-team-heading {
        margin-bottom: 18px;
    }

    .lf-team-heading h2 {
        color: #102b50;
        font-size: 27px;
        font-weight: 700;
        line-height: 1.25;
        margin: 0 0 5px;
        overflow-wrap: anywhere;
    }

    .lf-team-heading p {
        color: #505968;
        font-size: 13px;
        line-height: 1.6;
        margin: 0;
    }

    .lf-team-heading p span {
        margin: 0 4px;
    }

    /* =========================================
       STATISTICS
    ========================================= */

    .lf-team-stats {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 10px;
        margin-bottom: 22px;
    }

    .lf-stat-box {
        min-width: 0;
        min-height: 88px;
        padding: 12px 5px;
        background: #ffffff;
        border: 1px solid #e5e9ef;
        border-radius: 11px;
        box-shadow: 0 3px 8px rgba(16, 43, 80, 0.08);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        box-sizing: border-box;
    }

    .lf-stat-number {
        color: #102b50;
        font-size: 27px;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 5px;
    }

    .lf-stat-label {
        color: #555;
        font-size: 12px;
        line-height: 1.4;
        overflow-wrap: anywhere;
    }

    /* =========================================
       OUR TEAM HEADING
    ========================================= */

    .lf-team-section-title {
        color: #102b50;
        font-size: 25px;
        font-weight: 700;
        margin: 0 0 12px;
    }

    /* =========================================
       ADVOCATE PROFILE
    ========================================= */

    .lf-advocate-card {
        width: 100%;
        min-width: 0;
        padding: 14px 12px 10px;
        background: #ffffff;
        border: 1px solid #e1e6ed;
        border-radius: 14px;
        box-shadow: 0 3px 10px rgba(16, 43, 80, 0.08);
        text-align: center;
        box-sizing: border-box;
    }

    /* Advocate Image */

    .lf-advocate-image {
        width: 100px;
        height: 100px;
        margin: 0 auto 5px;
        border-radius: 50%;
        overflow: hidden;
        background: #e9edf3;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .lf-advocate-image img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Verification Badge */

    .lf-verified-badge {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        width: fit-content;
        max-width: 100%;
        margin: 0 auto 6px;
        padding: 5px 11px;
        background: #198754;
        color: #ffffff;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 600;
        line-height: 1.4;
        box-sizing: border-box;
    }

    .lf-verified-badge i {
        flex-shrink: 0;
    }

    /* Head Advocate Badge */

    .lf-advocate-position {
        display: inline-block;
        max-width: 100%;
        margin-bottom: 7px;
        padding: 5px 18px;
        background: #12345a;
        color: #ffffff;
        border-radius: 9px;
        font-size: 13px;
        font-weight: 700;
        line-height: 1.4;
        overflow-wrap: anywhere;
    }

    /* Advocate Name */

    .lf-advocate-name {
        color: #102b50;
        font-size: 20px;
        font-weight: 750;
        line-height: 1.35;
        margin: 0 0 3px;
        overflow-wrap: anywhere;
    }

    .lf-advocate-designation {
        color: #555;
        font-size: 13px;
        line-height: 1.5;
        margin: 0 0 4px;
        overflow-wrap: anywhere;
    }

    /* Rating */

    .lf-advocate-rating {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 5px;
        margin-bottom: 5px;
        line-height: 1.4;
    }

    .lf-stars {
        color: #d6a322;
        font-size: 19px;
        letter-spacing: 1px;
    }

    .lf-rating-number {
        color: #222;
        font-size: 13px;
        font-weight: 700;
    }

    .lf-review-count {
        color: #555;
        font-size: 13px;
    }

    /* Experience */

    .lf-advocate-experience {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 7px;
        color: #424b58;
        font-size: 13px;
        line-height: 1.5;
        margin-bottom: 9px;
    }

    .lf-advocate-experience i {
        color: #536273;
        font-size: 16px;
    }

    /* View Profile Button */

    .lf-view-profile-btn {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        min-height: 39px;
        padding: 8px 12px;
        background: #12345a;
        color: #ffffff !important;
        border: 1px solid #12345a;
        border-radius: 9px;
        font-size: 15px;
        font-weight: 700;
        line-height: 1.4;
        text-decoration: none !important;
        box-sizing: border-box;
        transition: background 0.2s ease, color 0.2s ease;
    }

    .lf-view-profile-btn:hover {
        background: #1b489d;
        border-color: #1b489d;
        color: #ffffff !important;
    }

    /* =========================================
       TABLET
    ========================================= */

    @media (max-width: 991px) {
        .lf-team-card {
            padding: 14px;
        }

        .lf-team-heading h2 {
            font-size: 23px;
        }

        .lf-team-stats {
            gap: 7px;
        }

        .lf-stat-box {
            min-height: 80px;
        }

        .lf-stat-number {
            font-size: 23px;
        }

        .lf-stat-label {
            font-size: 11px;
        }

        .lf-advocate-name {
            font-size: 18px;
        }
    }

    /* =========================================
       MOBILE
       Full Width Inside Bootstrap Column
    ========================================= */

    @media (max-width: 575px) {
        .lf-team-card {
            width: 100%;
            padding: 12px;
            border-radius: 12px;
        }

        .lf-team-heading {
            margin-bottom: 14px;
        }

        .lf-team-heading h2 {
            font-size: 22px;
        }

        .lf-team-heading p {
            font-size: 12px;
        }

        .lf-team-stats {
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 6px;
            margin-bottom: 17px;
        }

        .lf-stat-box {
            min-height: 72px;
            padding: 8px 3px;
            border-radius: 9px;
        }

        .lf-stat-number {
            font-size: 21px;
            margin-bottom: 4px;
        }

        .lf-stat-label {
            font-size: 10px;
            line-height: 1.3;
        }

        .lf-team-section-title {
            font-size: 22px;
            margin-bottom: 10px;
        }

        .lf-advocate-card {
            padding: 12px 9px 9px;
        }

        .lf-advocate-image {
            width: 85px;
            height: 85px;
        }

        .lf-verified-badge {
            font-size: 10px;
            padding: 5px 9px;
        }

        .lf-advocate-position {
            font-size: 12px;
            padding: 5px 15px;
        }

        .lf-advocate-name {
            font-size: 18px;
        }

        .lf-advocate-designation,
        .lf-rating-number,
        .lf-review-count,
        .lf-advocate-experience {
            font-size: 12px;
        }

        .lf-stars {
            font-size: 17px;
        }

        .lf-view-profile-btn {
            min-height: 38px;
            font-size: 14px;
        }
    }

    /* Extra Small Mobile */

    @media (max-width: 360px) {
        .lf-team-card {
            padding: 9px;
        }

        .lf-team-heading h2 {
            font-size: 20px;
        }

        .lf-team-stats {
            gap: 4px;
        }

        .lf-stat-box {
            padding: 7px 2px;
        }

        .lf-stat-number {
            font-size: 18px;
        }

        .lf-stat-label {
            font-size: 9px;
        }

        .lf-advocate-name {
            font-size: 16px;
        }
    }

</style>