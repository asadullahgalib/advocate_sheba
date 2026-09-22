<section class="join-professional-section">

    <div class="join-professional-overlay"></div>

    <div class="container position-relative">

        <!-- Top Justice Icon -->
        <div class="justice-heading">

            <div class="heading-line"></div>

            <div class="justice-icon">
                <i class="fa fa-balance-scale"></i>
            </div>

            <div class="heading-line"></div>

        </div>


        <!-- Main Heading -->
        <div class="join-professional-title">

            <span class="join-text">
                Join as a
            </span>

            <span class="professional-text">
                <a href="#" style="color:#0d2742">Legal Professional</a>
            </span>

            <span class="title-arrow">
                <a href="#"><i class="fa fa-arrow-right" style="color:#b88a2d"></i></a>
            </span>

        </div>


        <!-- Decorative Divider -->
        <div class="title-divider">

            <span></span>

            <i class="fa fa-diamond"></i>

            <span></span>

        </div>


        <!-- Dynamic Links -->
        <div class="professional-links">

            <a href="#">
                Advocate
            </a>

            <span class="link-dot"></span>


            <a href="#">
                Barrister
            </a>

            <span class="link-dot"></span>


            <a href="#">
                Legal Consultant
            </a>

            <span class="link-dot"></span>


            <a href="#">
                Law Firm/Chamber
            </a>

        </div>

    </div>

</section>

<style>
    /* ==========================================
       JOIN AS LEGAL PROFESSIONAL SECTION
    ========================================== */

    .join-professional-section {
        position: relative;
        overflow: hidden;

        padding: 15px 0 28px;

        background:
            linear-gradient(
                90deg,
                rgba(247, 245, 241, 0.92),
                rgba(255, 255, 255, 0.96)
            ),
            #f8f6f1;
    }


    /* ==========================================
       LEFT TOP DARK DECORATION
    ========================================== */

    .join-professional-section::before {
        content: "";

        position: absolute;

        top: 0;
        left: 0;

        width: 220px;
        height: 120px;

        background: #06182b;

        clip-path: polygon(
            0 0,
            100% 0,
            0 100%
        );

        opacity: 1;
    }


    /* ==========================================
       GOLDEN DIAGONAL LINE
    ========================================== */

    .join-professional-section::after {
        content: "";

        position: absolute;

        top: 0;
        left: 0;

        width: 255px;
        height: 2px;

        background: #b88a2d;

        transform:
            rotate(-27deg);

        transform-origin:
            left top;
    }


    /* ==========================================
       TOP ICON AREA
    ========================================== */

    .justice-heading {
        display: flex;

        align-items: center;

        justify-content: center;

        width: 100%;

        max-width: 500px;

        margin: 0 auto 2px;
    }


    /* Horizontal Line */

    .heading-line {
        height: 1px;

        flex: 1;

        background:
            linear-gradient(
                to right,
                transparent,
                rgba(184, 138, 45, 0.8)
            );
    }


    .heading-line:last-child {
        background:
            linear-gradient(
                to left,
                transparent,
                rgba(184, 138, 45, 0.8)
            );
    }


    /* Justice Circle */

    .justice-icon {
        width: 78px;
        height: 78px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 50%;

        border: 1px solid
            rgba(184, 138, 45, 0.55);

        color: #0d2742;

        font-size: 38px;

        position: relative;

        background:
            rgba(255,255,255,0.35);
    }


    /* Small Golden Dot */

    .justice-icon::after {
        content: "";

        position: absolute;

        width: 10px;
        height: 10px;

        bottom: -6px;

        left: 50%;

        transform: translateX(-50%);

        background: #b88a2d;

        border-radius: 50%;
    }


    /* ==========================================
       MAIN TITLE
    ========================================== */

    .join-professional-title {
        position: relative;

        display: flex;

        flex-direction: column;

        align-items: center;

        justify-content: center;

        text-align: center;

        color: #0d2742;

        line-height: 1;

    }


    .join-text {
        display: block;

        font-family:
            Georgia,
            "Times New Roman",
            serif;

        font-size: 70px;

        font-weight: 500;

        letter-spacing: 1px;

    }


    .professional-text {
        display: block;

        font-family:
            Georgia,
            "Times New Roman",
            serif;

        font-size: 92px;

        font-weight: 700;

        letter-spacing: -2px;

    }


    /* ==========================================
       GOLDEN ARROW
    ========================================== */

    .title-arrow {
        position: absolute;

        right: 15%;

        top: 72%;

        transform: translateY(-50%);

        color: #b88a2d;

        font-size: 65px;

    }


    .title-arrow i {
        font-weight: 300;
    }


    /* ==========================================
       DECORATIVE DIVIDER
    ========================================== */

    .title-divider {
        display: flex;

        align-items: center;

        justify-content: center;

        gap: 12px;

        max-width: 620px;

        margin: 10px auto 15px;
    }


    .title-divider span {
        display: block;

        height: 1px;

        width: 100%;

        background:
            linear-gradient(
                to right,
                transparent,
                rgba(184, 138, 45, 0.75)
            );
    }


    .title-divider span:last-child {
        background:
            linear-gradient(
                to left,
                transparent,
                rgba(184, 138, 45, 0.75)
            );
    }


    .title-divider i {
        color: #b88a2d;

        font-size: 18px;

        transform: rotate(45deg);
    }


    /* ==========================================
       LINKS
    ========================================== */

    .professional-links {
        display: flex;

        align-items: center;

        justify-content: center;

        flex-wrap: wrap;

        gap: 24px;

    }


    .professional-links a {
        color: #132b46;

        text-decoration: none;

        font-size: 32px;

        font-weight: 600;

        transition: all 0.25s ease;
    }


    .professional-links a:hover {
        color: #b88a2d;

        transform: translateY(-2px);
    }


    /* Golden Dot */

    .link-dot {
        width: 9px;
        height: 9px;

        border-radius: 50%;

        background: #b88a2d;

        flex-shrink: 0;
    }


    /* ==========================================
       LARGE DESKTOP
    ========================================== */

    @media (min-width: 1400px) {

        .join-text {
            font-size: 72px;
        }

        .professional-text {
            font-size: 100px;
        }

    }

    @media (max-width: 991px) {

        .join-professional-section {
            padding: 18px 0 25px;
        }


        .justice-icon {
            width: 65px;
            height: 65px;

            font-size: 32px;
        }


        .join-text {
            font-size: 52px;
        }


        .professional-text {
            font-size: 68px;
        }


        .title-arrow {
            right: 5%;

            font-size: 48px;
        }


        .professional-links {
            gap: 15px;
        }


        .professional-links a {
            font-size: 24px;
        }

    }

    @media (max-width: 767px) {

        .join-professional-section {
            padding: 18px 10px 25px;
        }


        /* Left design smaller */

        .join-professional-section::before {
            width: 120px;
            height: 75px;
        }


        .join-professional-section::after {
            width: 150px;
        }


        .justice-heading {
            max-width: 300px;
        }


        .justice-icon {
            width: 52px;
            height: 52px;

            font-size: 25px;
        }


        .justice-icon::after {
            width: 7px;
            height: 7px;

            bottom: -4px;
        }


        .join-text {
            font-size: 34px;

            margin-top: 8px;
        }


        .professional-text {
            font-size: 43px;

            letter-spacing: -1px;
        }


        .title-arrow {
            display: none;
        }


        .title-divider {
            max-width: 300px;

            margin: 10px auto 15px;
        }


        .professional-links {
            gap: 10px 13px;
        }


        .professional-links a {
            font-size: 16px;
        }


        .link-dot {
            width: 6px;
            height: 6px;
        }

    }
</style>