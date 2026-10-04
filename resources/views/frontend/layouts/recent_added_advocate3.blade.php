<style>

/* =========================================================
   LEGAL PROFESSIONAL PROFILE CAROUSEL
   Prefix: lpc-
   ========================================================= */

.lpc-carousel-section {
    width: 100%;
    padding: 10px 0 25px 0;
}


/* =========================================================
   CAROUSEL MAIN
   ========================================================= */

.lpc-carousel {
    position: relative;
    width: 100%;
}


/* =========================================================
   VIEWPORT
   ========================================================= */

.lpc-viewport {
    width: 100%;
    overflow: hidden;
}


/* =========================================================
   TRACK
   ========================================================= */

.lpc-track {
    display: flex;
    gap: 18px;

    margin: 0;
    padding: 5px 2px 10px 2px;

    transform: translate3d(0, 0, 0);

    transition: transform 0.45s ease;

    will-change: transform;
}


/* =========================================================
   SLIDE
   Desktop = 4 Cards
   ========================================================= */

.lpc-slide {
    flex: 0 0 calc(
        (100% - 54px) / 4
    );

    min-width: 0;
    box-sizing: border-box;
}


/* =========================================================
   PROFILE CARD
   ========================================================= */

.lpc-card {
    position: relative;

    width: 100%;
    height: 100%;

    background: #ffffff;

    border: 1px solid #e8e8e8;

    border-radius: 18px;

    overflow: hidden;

    box-shadow:
        0 3px 14px rgba(0, 0, 0, 0.06);

    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease;
}


.lpc-card:hover {
    transform: translateY(-4px);

    box-shadow:
        0 10px 28px rgba(0, 0, 0, 0.11);
}


/* =========================================================
   PROFILE IMAGE AREA
   ========================================================= */

.lpc-image-area {
    position: relative;

    width: 100%;

    padding-top: 18px;

    text-align: center;
}


/* Profile Image */

.lpc-profile-image {
    width: 145px;
    height: 145px;

    margin: 0 auto;

    border-radius: 50%;

    overflow: hidden;

    background: #eef0f5;

    border: 5px solid #f1f3f7;

    box-sizing: border-box;
}


.lpc-profile-image img {
    width: 100%;
    height: 100%;

    display: block;

    object-fit: cover;
}


/* =========================================================
   VERIFIED BADGE
   ========================================================= */

.lpc-verified {
    position: absolute;

    left: 50%;

    bottom: -5px;

    transform: translateX(-50%);

    display: inline-flex;

    align-items: center;

    gap: 6px;

    background: #159985;

    color: #ffffff;

    padding: 7px 14px;

    border-radius: 22px;

    font-size: 13px;

    font-weight: 600;

    white-space: nowrap;

    box-shadow:
        0 3px 8px rgba(0, 0, 0, 0.12);

    z-index: 5;
}


.lpc-verified i {
    font-size: 15px;
}


/* =========================================================
   PROFILE BODY
   ========================================================= */

.lpc-body {
    text-align: center;

    padding: 22px 14px 14px 14px;
}


/* Name */

.lpc-name {
    color: #142e55;

    font-size: 20px;

    font-weight: 700;

    line-height: 1.3;

    margin: 0 0 2px 0;
}


/* Designation */

.lpc-designation {
    color: #666;

    font-size: 15px;

    line-height: 1.4;

    margin-bottom: 3px;
}


/* =========================================================
   RATING
   ========================================================= */

.lpc-rating {
    display: flex;

    justify-content: center;

    align-items: center;

    gap: 2px;

    margin-bottom: 4px;
}


.lpc-rating i {
    color: #e9b000;

    font-size: 14px;
}


.lpc-rating strong {
    color: #243b53;

    font-size: 14px;

    margin-left: 4px;
}


.lpc-rating span {
    color: #666;

    font-size: 12px;

    margin-left: 2px;
}


/* =========================================================
   SPECIALIZATION
   ========================================================= */

.lpc-specialization {
    color: #666;

    font-size: 13px;

    line-height: 1.4;

    margin-bottom: 2px;
}


/* =========================================================
   COURT
   ========================================================= */

.lpc-court {
    color: #142e55;

    font-size: 15px;

    font-weight: 700;

    line-height: 1.35;

    margin-bottom: 2px;
}


.lpc-court-location {
    color: #142e55;

    font-size: 15px;

    font-weight: 700;

    line-height: 1.35;

    margin-bottom: 10px;
}


/* =========================================================
   DIVIDER
   ========================================================= */

.lpc-divider {
    width: 100%;

    height: 1px;

    background: #dddddd;

    margin: 8px 0 8px 0;
}


/* =========================================================
   INFORMATION AREA
   ========================================================= */

.lpc-info {
    display: grid;

    grid-template-columns: 1fr 1fr;

    margin-bottom: 14px;
}


/* Each Column */

.lpc-info-column {
    padding: 0 8px;
}


/* Right Border */

.lpc-info-column:first-child {
    border-right: 1px solid #dddddd;
}


/* Label */

.lpc-info-label {
    color: #777;

    font-size: 12px;

    line-height: 1.3;

    margin-bottom: 2px;
}


/* Value */

.lpc-info-value {
    color: #142e55;

    font-size: 13px;

    line-height: 1.35;

    margin-bottom: 7px;
}


/* =========================================================
   VIEW PROFILE BUTTON
   ========================================================= */

.lpc-profile-button {
    width: 100%;

    /*min-height: 54px;*/

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 9px;

    background: #153f70;

    color: #ffffff;

    border: none;

    border-radius: 18px;

    padding: 5px 15px;

    font-size: 18px;

    font-weight: 700;

    text-decoration: none;

    transition:
        background 0.25s ease,
        transform 0.25s ease;
}


.lpc-profile-button:hover {
    background: #1B489D;

    color: #ffffff;

    transform: translateY(-1px);
}


.lpc-profile-button i {
    font-size: 20px;
}


/* =========================================================
   CAROUSEL ARROWS
   ========================================================= */

.lpc-arrow {
    position: absolute;

    top: 50%;

    transform: translateY(-50%);

    width: 42px;
    height: 42px;

    border: none;

    border-radius: 50%;

    background: #ffffff;

    color: #153f70;

    display: flex;

    align-items: center;

    justify-content: center;

    font-size: 17px;

    cursor: pointer;

    z-index: 20;

    box-shadow:
        0 3px 15px rgba(0, 0, 0, 0.15);

    transition:
        all 0.25s ease;
}


.lpc-arrow:hover {
    background: #153f70;

    color: #ffffff;

    transform:
        translateY(-50%)
        scale(1.05);
}


.lpc-arrow-prev {
    left: -20px;
}


.lpc-arrow-next {
    right: -20px;
}


/* Disabled */

.lpc-arrow:disabled {
    opacity: 0.3;

    cursor: not-allowed;

    transform:
        translateY(-50%);
}


.lpc-arrow:disabled:hover {
    background: #ffffff;

    color: #153f70;
}


/* =========================================================
   TABLET
   3 CARDS
   ========================================================= */

@media (max-width: 1100px) {

    .lpc-slide {
        flex: 0 0 calc(
            (100% - 36px) / 3
        );
    }

    .lpc-track {
        gap: 18px;
    }

    .lpc-profile-image {
        width: 135px;
        height: 135px;
    }

    .lpc-name {
        font-size: 18px;
    }

    .lpc-court,
    .lpc-court-location {
        font-size: 14px;
    }

    .lpc-arrow-prev {
        left: -10px;
    }

    .lpc-arrow-next {
        right: -10px;
    }
}


/* =========================================================
   MOBILE
   2 CARDS
   ========================================================= */

@media (max-width: 767px) {

    .lpc-carousel-section {
        padding: 5px 0 20px 0;
    }

    .lpc-track {
        gap: 12px;

        padding-left: 2px;
        padding-right: 2px;
    }


    .lpc-slide {
        flex: 0 0 calc(
            (100% - 12px) / 2
        );
    }


    .lpc-card {
        border-radius: 14px;
    }


    /* Image */

    .lpc-image-area {
        padding-top: 12px;
    }


    .lpc-profile-image {
        width: 105px;
        height: 105px;

        border-width: 4px;
    }


    /* Verified */

    .lpc-verified {
        bottom: -4px;

        padding: 5px 9px;

        font-size: 10px;

        gap: 4px;
    }


    .lpc-verified i {
        font-size: 12px;
    }


    /* Body */

    .lpc-body {
        padding: 17px 9px 10px 9px;
    }


    .lpc-name {
        font-size: 15px;

        line-height: 1.3;
    }


    .lpc-designation {
        font-size: 12px;
    }


    .lpc-rating {
        gap: 1px;
    }


    .lpc-rating i {
        font-size: 10px;
    }


    .lpc-rating strong {
        font-size: 11px;
    }


    .lpc-rating span {
        font-size: 9px;
    }


    .lpc-specialization {
        font-size: 10px;

        line-height: 1.3;
    }


    .lpc-court,
    .lpc-court-location {
        font-size: 11px;

        line-height: 1.3;
    }


    .lpc-divider {
        margin: 6px 0;
    }


    .lpc-info {
        margin-bottom: 9px;
    }


    .lpc-info-column {
        padding: 0 4px;
    }


    .lpc-info-label {
        font-size: 9px;
    }


    .lpc-info-value {
        font-size: 9px;

        line-height: 1.25;

        margin-bottom: 4px;
    }


    /* Button */

    .lpc-profile-button {
        min-height: 40px;

        border-radius: 12px;

        padding: 7px 5px;

        font-size: 12px;

        gap: 5px;
    }


    .lpc-profile-button i {
        font-size: 13px;
    }


    /* Arrows */

    .lpc-arrow {
        width: 34px;
        height: 34px;

        font-size: 13px;
    }


    .lpc-arrow-prev {
        left: -7px;
    }


    .lpc-arrow-next {
        right: -7px;
    }
}


/* =========================================================
   SMALL MOBILE
   1 CARD
   ========================================================= */

@media (max-width: 480px) {

    .lpc-slide {
        flex: 0 0 100%;
    }


    .lpc-profile-image {
        width: 120px;
        height: 120px;
    }


    .lpc-name {
        font-size: 17px;
    }


    .lpc-designation {
        font-size: 13px;
    }


    .lpc-rating i {
        font-size: 12px;
    }


    .lpc-rating strong {
        font-size: 12px;
    }


    .lpc-rating span {
        font-size: 10px;
    }


    .lpc-specialization {
        font-size: 11px;
    }


    .lpc-court,
    .lpc-court-location {
        font-size: 12px;
    }


    .lpc-info-label {
        font-size: 10px;
    }


    .lpc-info-value {
        font-size: 10px;
    }


    .lpc-profile-button {
        min-height: 44px;

        font-size: 14px;
    }
}

</style>
<section class="lpc-carousel-section">

    <div class="container">

        <div class="lpc-carousel">


            <!-- ==========================================
                 PREVIOUS BUTTON
            =========================================== -->

            <button type="button"
                    class="lpc-arrow lpc-arrow-prev"
                    aria-label="Previous">

                <i class="fa fa-chevron-left"></i>

            </button>



            <!-- ==========================================
                 VIEWPORT
            =========================================== -->

            <div class="lpc-viewport">

                <div class="lpc-track">


                    <!-- ==================================
                         PROFILE CARD 1
                    =================================== -->

                    <div class="lpc-slide">

                        <div class="lpc-card">


                            <!-- PROFILE IMAGE -->

                            <div class="lpc-image-area">

                                <div class="lpc-profile-image">

                                    <img src="{{asset('frontend/adv.png')}}"
                                         alt="Adv. Rafiqul Islam">

                                </div>


                                <!-- VERIFIED -->

                                <div class="lpc-verified">

                                    <i class="fa fa-check"></i>

                                    Bar Council Verified

                                </div>

                            </div>



                            <!-- PROFILE BODY -->

                            <div class="lpc-body">


                                <h3 class="lpc-name">
                                    Adv. Rafiqul Islam
                                </h3>


                                <div class="lpc-designation">
                                    Legal Consultant
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


                                <!-- SPECIALIZATION -->

                                <div class="lpc-specialization">
                                    Corporate & Tax Advisory Specialist
                                </div>


                                <!-- COURT -->

                                <div class="lpc-court">
                                    Supreme Court of Bangladesh
                                </div>

                                <div class="lpc-court-location">
                                    District & Sessions Judge Court, Dhaka
                                </div>


                                <!-- DIVIDER -->

                                <div class="lpc-divider"></div>


                                <!-- INFORMATION -->

                                <div class="lpc-info">


                                    <!-- LEFT -->

                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Qualification:
                                        </div>

                                        <div class="lpc-info-value">
                                            LL.B, LL.M
                                        </div>


                                        <div class="lpc-info-label">
                                            Enrollment No:
                                        </div>

                                        <div class="lpc-info-value">
                                            BCB-XXXXXX
                                        </div>

                                    </div>


                                    <!-- RIGHT -->

                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Experience:
                                        </div>

                                        <div class="lpc-info-value">
                                            15 Years of Experience
                                        </div>


                                        <div class="lpc-info-label">
                                            Bar Association:
                                        </div>

                                        <div class="lpc-info-value">
                                            Dhaka Bar Association
                                        </div>

                                    </div>

                                </div>


                                <!-- VIEW PROFILE -->

                                <a href="{{route('advocate-profile')}}"
                                   class="lpc-profile-button">

                                    <i class="fa fa-eye"></i>

                                    View Profile

                                </a>


                            </div>

                        </div>

                    </div>



                    <!-- ==================================
                         PROFILE CARD 2
                    =================================== -->

                    <div class="lpc-slide">

                        <div class="lpc-card">

                            <div class="lpc-image-area">

                                <div class="lpc-profile-image">

                                    <img src="{{asset('frontend/adv.png')}}"
                                         alt="Adv. Md. Asadullah">

                                </div>

                                <div class="lpc-verified">

                                    <i class="fa fa-check"></i>

                                    Bar Council Verified

                                </div>

                            </div>


                            <div class="lpc-body">

                                <h3 class="lpc-name">
                                    Adv. Md. Asadullah
                                </h3>

                                <div class="lpc-designation">
                                    Advocate
                                </div>


                                <div class="lpc-rating">

                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>

                                    <strong>4.7</strong>

                                    <span>
                                        (48 Reviews)
                                    </span>

                                </div>


                                <div class="lpc-specialization">
                                    Civil & Criminal Law Specialist
                                </div>


                                <div class="lpc-court">
                                    Supreme Court of Bangladesh
                                </div>

                                <div class="lpc-court-location">
                                    Dhaka Judge Court, Dhaka
                                </div>


                                <div class="lpc-divider"></div>


                                <div class="lpc-info">

                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Qualification:
                                        </div>

                                        <div class="lpc-info-value">
                                            LL.B, LL.M
                                        </div>

                                        <div class="lpc-info-label">
                                            Enrollment No:
                                        </div>

                                        <div class="lpc-info-value">
                                            BCB-123456
                                        </div>

                                    </div>


                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Experience:
                                        </div>

                                        <div class="lpc-info-value">
                                            12 Years of Experience
                                        </div>

                                        <div class="lpc-info-label">
                                            Bar Association:
                                        </div>

                                        <div class="lpc-info-value">
                                            Dhaka Bar Association
                                        </div>

                                    </div>

                                </div>


                                <a href="{{route('advocate-profile')}}"
                                   class="lpc-profile-button">

                                    <i class="fa fa-eye"></i>

                                    View Profile

                                </a>

                            </div>

                        </div>

                    </div>



                    <!-- ==================================
                         PROFILE CARD 3
                    =================================== -->

                    <div class="lpc-slide">

                        <div class="lpc-card">

                            <div class="lpc-image-area">

                                <div class="lpc-profile-image">

                                    <img src="{{asset('frontend/adv.png')}}"
                                         alt="Adv. Sara Ahmed">

                                </div>

                                <div class="lpc-verified">

                                    <i class="fa fa-check"></i>

                                    Bar Council Verified

                                </div>

                            </div>


                            <div class="lpc-body">

                                <h3 class="lpc-name">
                                    Adv. Sara Ahmed
                                </h3>

                                <div class="lpc-designation">
                                    Advocate
                                </div>


                                <div class="lpc-rating">

                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>

                                    <strong>4.9</strong>

                                    <span>
                                        (73 Reviews)
                                    </span>

                                </div>


                                <div class="lpc-specialization">
                                    Family & Property Law Specialist
                                </div>


                                <div class="lpc-court">
                                    Supreme Court of Bangladesh
                                </div>

                                <div class="lpc-court-location">
                                    Dhaka Judge Court, Dhaka
                                </div>


                                <div class="lpc-divider"></div>


                                <div class="lpc-info">

                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Qualification:
                                        </div>

                                        <div class="lpc-info-value">
                                            LL.B, LL.M
                                        </div>

                                        <div class="lpc-info-label">
                                            Enrollment No:
                                        </div>

                                        <div class="lpc-info-value">
                                            BCB-456789
                                        </div>

                                    </div>


                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Experience:
                                        </div>

                                        <div class="lpc-info-value">
                                            10 Years of Experience
                                        </div>

                                        <div class="lpc-info-label">
                                            Bar Association:
                                        </div>

                                        <div class="lpc-info-value">
                                            Dhaka Bar Association
                                        </div>

                                    </div>

                                </div>


                                <a href="{{route('advocate-profile')}}"
                                   class="lpc-profile-button">

                                    <i class="fa fa-eye"></i>

                                    View Profile

                                </a>

                            </div>

                        </div>

                    </div>



                    <!-- ==================================
                         PROFILE CARD 4
                    =================================== -->

                    <div class="lpc-slide">

                        <div class="lpc-card">

                            <div class="lpc-image-area">

                                <div class="lpc-profile-image">

                                    <img src="{{asset('frontend/adv.png')}}"
                                         alt="Adv. Tanvir Hasan">

                                </div>

                                <div class="lpc-verified">

                                    <i class="fa fa-check"></i>

                                    Bar Council Verified

                                </div>

                            </div>


                            <div class="lpc-body">

                                <h3 class="lpc-name">
                                    Adv. Tanvir Hasan
                                </h3>

                                <div class="lpc-designation">
                                    Legal Consultant
                                </div>


                                <div class="lpc-rating">

                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>

                                    <strong>4.6</strong>

                                    <span>
                                        (39 Reviews)
                                    </span>

                                </div>


                                <div class="lpc-specialization">
                                    Banking & Corporate Law Specialist
                                </div>


                                <div class="lpc-court">
                                    Supreme Court of Bangladesh
                                </div>

                                <div class="lpc-court-location">
                                    District Court, Dhaka
                                </div>


                                <div class="lpc-divider"></div>


                                <div class="lpc-info">

                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Qualification:
                                        </div>

                                        <div class="lpc-info-value">
                                            LL.B, LL.M
                                        </div>

                                        <div class="lpc-info-label">
                                            Enrollment No:
                                        </div>

                                        <div class="lpc-info-value">
                                            BCB-987654
                                        </div>

                                    </div>


                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Experience:
                                        </div>

                                        <div class="lpc-info-value">
                                            8 Years of Experience
                                        </div>

                                        <div class="lpc-info-label">
                                            Bar Association:
                                        </div>

                                        <div class="lpc-info-value">
                                            Dhaka Bar Association
                                        </div>

                                    </div>

                                </div>


                                <a href="{{route('advocate-profile')}}"
                                   class="lpc-profile-button">

                                    <i class="fa fa-eye"></i>

                                    View Profile

                                </a>

                            </div>

                        </div>

                    </div>



                    <!-- ==================================
                         PROFILE CARD 5
                    =================================== -->

                    <div class="lpc-slide">

                        <div class="lpc-card">

                            <div class="lpc-image-area">

                                <div class="lpc-profile-image">

                                    <img src="{{asset('frontend/adv.png')}}"
                                         alt="Adv. Mahmudul Hasan">

                                </div>

                                <div class="lpc-verified">

                                    <i class="fa fa-check"></i>

                                    Bar Council Verified

                                </div>

                            </div>


                            <div class="lpc-body">

                                <h3 class="lpc-name">
                                    Adv. Mahmudul Hasan
                                </h3>

                                <div class="lpc-designation">
                                    Barrister
                                </div>


                                <div class="lpc-rating">

                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>

                                    <strong>4.9</strong>

                                    <span>
                                        (84 Reviews)
                                    </span>

                                </div>


                                <div class="lpc-specialization">
                                    Constitutional & Writ Specialist
                                </div>


                                <div class="lpc-court">
                                    Supreme Court of Bangladesh
                                </div>

                                <div class="lpc-court-location">
                                    Supreme Court Bar, Dhaka
                                </div>


                                <div class="lpc-divider"></div>


                                <div class="lpc-info">

                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Qualification:
                                        </div>

                                        <div class="lpc-info-value">
                                            LL.B, LL.M
                                        </div>

                                        <div class="lpc-info-label">
                                            Enrollment No:
                                        </div>

                                        <div class="lpc-info-value">
                                            BCB-654321
                                        </div>

                                    </div>


                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Experience:
                                        </div>

                                        <div class="lpc-info-value">
                                            18 Years of Experience
                                        </div>

                                        <div class="lpc-info-label">
                                            Bar Association:
                                        </div>

                                        <div class="lpc-info-value">
                                            Supreme Court Bar Association
                                        </div>

                                    </div>

                                </div>


                                <a href="{{route('advocate-profile')}}"
                                   class="lpc-profile-button">

                                    <i class="fa fa-eye"></i>

                                    View Profile

                                </a>

                            </div>

                        </div>

                    </div>



                    <!-- ==================================
                         PROFILE CARD 6
                    =================================== -->

                    <div class="lpc-slide">

                        <div class="lpc-card">

                            <div class="lpc-image-area">

                                <div class="lpc-profile-image">

                                    <img src="{{asset('frontend/adv.png')}}"
                                         alt="Adv. Nusrat Jahan">

                                </div>

                                <div class="lpc-verified">

                                    <i class="fa fa-check"></i>

                                    Bar Council Verified

                                </div>

                            </div>


                            <div class="lpc-body">

                                <h3 class="lpc-name">
                                    Adv. Nusrat Jahan
                                </h3>

                                <div class="lpc-designation">
                                    Legal Consultant
                                </div>


                                <div class="lpc-rating">

                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>

                                    <strong>4.7</strong>

                                    <span>
                                        (52 Reviews)
                                    </span>

                                </div>


                                <div class="lpc-specialization">
                                    Family & Human Rights Specialist
                                </div>


                                <div class="lpc-court">
                                    Supreme Court of Bangladesh
                                </div>

                                <div class="lpc-court-location">
                                    District Court, Dhaka
                                </div>


                                <div class="lpc-divider"></div>


                                <div class="lpc-info">

                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Qualification:
                                        </div>

                                        <div class="lpc-info-value">
                                            LL.B, LL.M
                                        </div>

                                        <div class="lpc-info-label">
                                            Enrollment No:
                                        </div>

                                        <div class="lpc-info-value">
                                            BCB-741258
                                        </div>

                                    </div>


                                    <div class="lpc-info-column">

                                        <div class="lpc-info-label">
                                            Experience:
                                        </div>

                                        <div class="lpc-info-value">
                                            9 Years of Experience
                                        </div>

                                        <div class="lpc-info-label">
                                            Bar Association:
                                        </div>

                                        <div class="lpc-info-value">
                                            Dhaka Bar Association
                                        </div>

                                    </div>

                                </div>


                                <a href="{{route('advocate-profile')}}"
                                   class="lpc-profile-button">

                                    <i class="fa fa-eye"></i>

                                    View Profile

                                </a>

                            </div>

                        </div>

                    </div>


                </div>

            </div>


            <!-- ==========================================
                 NEXT BUTTON
            =========================================== -->

            <button type="button"
                    class="lpc-arrow lpc-arrow-next"
                    aria-label="Next">

                <i class="fa fa-chevron-right"></i>

            </button>


        </div>

    </div>

</section>



