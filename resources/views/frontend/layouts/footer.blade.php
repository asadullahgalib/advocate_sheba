<footer class="main site-footer">

    <!-- =========================================
         DISCLAIMER
    ========================================== -->
    <section class="footer-disclaimer">
        <div class="container">

            <div class="footer-disclaimer-content">

                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>

                <span>
                    <strong>Disclaimer:</strong>
                    Information on AdvocateSheba is for general educational purposes only
                    and does not replace professional medical advice, diagnosis, or treatment.
                    Consult a qualified doctor or healthcare provider.
                </span>

            </div>

        </div>
    </section>


    <!-- =========================================
         FEATURED / TRUST SECTION
    ========================================== -->
    <section class="footer-features">

        <div class="container">

            <div class="footer-feature-grid">


                <!-- =================================
                     FEATURE 01
                ================================== -->
                <div class="footer-feature-item">

                    <div class="footer-feature-icon">
                        <i class="fa fa-shield"></i>
                    </div>

                    <div class="footer-feature-content">

                        <h4>Verified Information</h4>

                        <p>
                            Reviewed from public records &amp; credentials
                        </p>

                    </div>

                </div>


                <!-- =================================
                     FEATURE 02
                ================================== -->
                <div class="footer-feature-item">

                    <div class="footer-feature-icon">
                        <i class="fa fa-map-marker"></i>
                    </div>

                    <div class="footer-feature-content">

                        <h4>Find Nearby</h4>

                        <p>
                            Search doctors by specialty &amp; location
                        </p>

                    </div>

                </div>


                <!-- =================================
                     FEATURE 03
                ================================== -->
                <div class="footer-feature-item">

                    <div class="footer-feature-icon">
                        <i class="fa fa-star"></i>
                    </div>

                    <div class="footer-feature-content">

                        <h4>Trusted by Clients</h4>

                        <p>
                            Helps clients make informed decisions
                        </p>

                    </div>

                </div>


                <!-- =================================
                     FEATURE 04
                ================================== -->
                <div class="footer-feature-item">

                    <div class="footer-feature-icon">
                        <i class="fa fa-lock"></i>
                    </div>

                    <div class="footer-feature-content">

                        <h4>Secure &amp; Private</h4>

                        <p>
                            Protected by strict data standards
                        </p>

                    </div>

                </div>


                <!-- =================================
                     FEATURE 05
                ================================== -->
                <div class="footer-feature-item">

                    <div class="footer-feature-icon">
                        <i class="fa fa-calendar"></i>
                    </div>

                    <div class="footer-feature-content">

                        <h4>Easy Appointment</h4>

                        <p>
                            Connect with doctors and request appointments easily
                        </p>

                    </div>

                </div>


            </div>

        </div>

    </section>


    <!-- =========================================
         MAIN FOOTER
    ========================================== -->
    <div class="footer-main">

        <div class="container">

            <div class="footer-main-row">


                <!-- =================================
                     LOGO
                ================================== -->
                <div class="footer-logo">

                    <a href="{{ url('') }}">

                        <img
                            src="{{ asset('uploads/logo_images/'.@$logo->image) }}"
                            alt="Logo"
                        >

                    </a>

                </div>


                <!-- =================================
                     FOOTER LINKS
                ================================== -->
                <div class="footer-links">

                    <a href="#">For Advocates</a>

                    <a href="#">How It Works</a>

                    <a href="#">User Guide</a>

                    <a href="#">About</a>

                    <a href="#">Contact</a>

                    <a href="#">Privacy Policy</a>

                    <a href="#">Terms of Use</a>

                    <a href="#">Disclaimer</a>

                    <a href="#">Editorial Policy</a>

                </div>


                <!-- =================================
                     SOCIAL ICONS
                ================================== -->
                <div class="footer-social">

                    <a title="Facebook" href="#" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a title="Instagram" href="#" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>

                    <a title="Youtube" href="#" target="_blank">
                        <i class="fa fa-youtube-play"></i>
                    </a>

                </div>


            </div>


            <!-- =================================
                 COPYRIGHT
            ================================== -->
            <div class="footer-bottom">

                <p>

                    Copyright &copy; {{ date('Y') }}

                    <strong>
                        {{ @$contact->name }}
                    </strong>.

                    All rights reserved.

                </p>

            </div>


        </div>

    </div>

</footer>



<!-- =========================================
     FOOTER CSS
========================================== -->
<style>

    /* =========================================
       MAIN FOOTER
    ========================================== */

    .site-footer {

        background: #ffffff;

        font-family:
            'Segoe UI',
            Roboto,
            Arial,
            sans-serif;

        color: #0f172a;

        margin-top: 0;

    }


    /* =========================================
       DISCLAIMER
    ========================================== */

    .footer-disclaimer {

        padding: 14px 0;

        background: #fff8f8;

        border-top: 1px solid #f1f5f7;

        border-bottom: 1px solid #f1f5f7;

    }


    .footer-disclaimer-content {

        display: flex;

        align-items: center;

        justify-content: center;

        gap: 8px;

        text-align: center;

        color: #721c24;

        font-size: 13px;

        line-height: 1.6;

    }


    .footer-disclaimer-content i {

        flex-shrink: 0;

        font-size: 14px;

    }


    .footer-disclaimer-content strong {

        font-weight: 700;

    }


    /* =========================================
       FEATURE SECTION
    ========================================== */

    .footer-features {

        background: #ffffff;

        border-bottom: 1px solid #f1f5f7;

        padding: 32px 0;

    }


    .footer-feature-grid {

        display: grid;

        grid-template-columns: repeat(5, 1fr);

        width: 100%;

    }


    .footer-feature-item {

        display: flex;

        align-items: flex-start;

        gap: 11px;

        padding: 7px 20px;

        min-height: 62px;

        border-right: 1px solid #f1f5f7;

    }


    .footer-feature-item:first-child {

        padding-left: 0;

    }


    .footer-feature-item:last-child {

        border-right: none;

        padding-right: 0;

    }


    /* =========================================
       FEATURE ICON
    ========================================== */

    .footer-feature-icon {

        flex: 0 0 22px;

        width: 22px;

        height: 22px;

        margin-top: 2px;

        color: #103c6d;

        font-size: 21px;

        line-height: 22px;

        text-align: center;

    }


    .footer-feature-icon i {

        display: inline-block;

        color: #103c6d;

        font-size: 21px;

        line-height: 22px;

    }


    /* =========================================
       FEATURE CONTENT
    ========================================== */

    .footer-feature-content {

        min-width: 0;

    }


    .footer-feature-content h4 {

        margin: 0 0 4px;

        color: #0f172a;

        font-size: 13px;

        line-height: 1.3;

        font-weight: 700;

        letter-spacing: -0.15px;

    }


    .footer-feature-content p {

        margin: 0;

        color: #64748b;

        font-size: 11.5px;

        line-height: 1.5;

    }


    /* =========================================
       MAIN FOOTER
    ========================================== */

    .footer-main {

        background: #ffffff;

        padding: 28px 0 0;

    }


    .footer-main-row {

        display: grid;

        grid-template-columns: 180px 1fr 120px;

        align-items: center;

        gap: 25px;

    }


    /* =========================================
       LOGO
    ========================================== */

    .footer-logo {

        display: flex;

        align-items: center;

    }


    .footer-logo a {

        display: inline-flex;

        align-items: center;

    }


    .footer-logo img {

        display: block;

        max-width: 150px;

        max-height: 42px;

        width: auto;

        height: auto;

        object-fit: contain;

    }


    /* =========================================
       FOOTER LINKS
    ========================================== */

    .footer-links {

        display: flex;

        flex-wrap: wrap;

        justify-content: center;

        align-items: center;

        column-gap: 18px;

        row-gap: 9px;

    }


    .footer-links a {

        color: #475569;

        text-decoration: none;

        font-size: 12.5px;

        line-height: 1.5;

        font-weight: 500;

        transition: color .2s ease;

        white-space: nowrap;

    }


    .footer-links a:hover {

        color: #103c6d;

    }


    /* =========================================
       SOCIAL ICONS
    ========================================== */

    .footer-social {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        gap: 10px;
    }

    .footer-social a {
        width: 30px;
        height: 30px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        color: #64748b !important;
        font-size: 18px !important;
        line-height: 30px !important;
    }

    .footer-social a i {
        display: inline-block !important;
        font-family: FontAwesome !important;
        font-style: normal !important;
        font-weight: normal !important;
        font-size: 18px !important;
        line-height: 1 !important;
        color: #64748b !important;
    }


    .footer-social a:hover {

        color: #103c6d;

        transform: translateY(-2px);

    }


    /* =========================================
       COPYRIGHT
    ========================================== */

    .footer-bottom {

        margin-top: 24px;

        padding: 16px 0 18px;

        border-top: 1px solid #f1f5f7;

        text-align: center;

    }


    .footer-bottom p {

        margin: 0;

        color: #94a3b8;

        font-size: 12px;

        line-height: 1.5;

    }


    .footer-bottom strong {

        color: #334155;

        font-weight: 600;

    }


    /* =========================================
       LARGE TABLET
    ========================================== */

    @media (max-width: 1199px) {

        .footer-feature-item {

            padding-left: 14px;

            padding-right: 14px;

        }


        .footer-feature-item:first-child {

            padding-left: 0;

        }


        .footer-feature-item:last-child {

            padding-right: 0;

        }


        .footer-main-row {

            grid-template-columns:
                150px
                1fr
                100px;

            gap: 18px;

        }


        .footer-links {

            column-gap: 14px;

        }

    }


    /* =========================================
       TABLET
    ========================================== */

    @media (max-width: 991px) {

        .footer-features {

            padding: 28px 0;

        }


        .footer-feature-grid {

            grid-template-columns: repeat(2, 1fr);

            row-gap: 18px;

        }


        .footer-feature-item {

            border-right: none;

            border-bottom: 1px solid #f1f5f7;

            padding: 8px 15px 18px;

        }


        .footer-feature-item:nth-child(odd) {

            border-right: 1px solid #f1f5f7;

        }


        .footer-feature-item:nth-child(n+3) {

            border-bottom: none;

            padding-bottom: 8px;

        }


        .footer-feature-item:first-child {

            padding-left: 0;

        }


        .footer-feature-item:nth-child(2) {

            padding-right: 0;

        }


        .footer-feature-item:nth-child(4) {

            padding-right: 0;

        }


        .footer-feature-item:last-child {

            grid-column: 1 / -1;

            border-right: none !important;

            border-bottom: none;

            padding-left: 0;

            padding-right: 0;

            justify-content: center;

        }


        .footer-main {

            padding-top: 25px;

        }


        .footer-main-row {

            display: flex;

            flex-wrap: wrap;

            justify-content: center;

            text-align: center;

        }


        .footer-logo {

            width: 100%;

            justify-content: center;

        }


        .footer-links {

            width: 100%;

        }


        .footer-social {

            width: 100%;

            justify-content: center;

        }

    }


    /* =========================================
       MOBILE
    ========================================== */

    @media (max-width: 767px) {

        .footer-disclaimer {

            padding: 12px 15px;

        }


        .footer-disclaimer-content {

            align-items: flex-start;

            text-align: left;

            font-size: 11.5px;

            line-height: 1.55;

        }


        .footer-features {

            padding: 20px 15px;

        }


        .footer-feature-grid {

            grid-template-columns: 1fr;

            row-gap: 0;

        }


        .footer-feature-item,
        .footer-feature-item:nth-child(odd),
        .footer-feature-item:nth-child(n+3),
        .footer-feature-item:last-child {

            grid-column: auto;

            width: 100%;

            border-right: none !important;

            border-bottom: 1px solid #f1f5f7;

            padding: 14px 0;

            justify-content: flex-start;

        }


        .footer-feature-item:first-child {

            padding-top: 0;

        }


        .footer-feature-item:last-child {

            border-bottom: none !important;

            padding-bottom: 0;

        }


        .footer-feature-icon {

            flex-basis: 21px;

            width: 21px;

            height: 21px;

            font-size: 20px;

            line-height: 21px;

        }


        .footer-feature-icon i {

            font-size: 20px;

            line-height: 21px;

        }


        .footer-feature-content h4 {

            font-size: 13px;

        }


        .footer-feature-content p {

            font-size: 11.5px;

        }


        .footer-main {

            padding: 23px 15px 0;

        }


        .footer-main-row {

            gap: 17px;

        }


        .footer-logo img {

            max-width: 145px;

            max-height: 40px;

        }


        .footer-links {

            column-gap: 13px;

            row-gap: 8px;

        }


        .footer-links a {

            font-size: 11.5px;

        }


        .footer-social {

            gap: 7px;

        }


        .footer-social a {

            width: 28px;

            height: 28px;

            font-size: 16px;

        }


        .footer-bottom {

            margin-top: 19px;

            padding: 14px 0 16px;

        }


        .footer-bottom p {

            font-size: 11px;

        }

    }


    /* =========================================
       SMALL MOBILE
    ========================================== */

    @media (max-width: 400px) {

        .footer-disclaimer-content {

            font-size: 11px;

        }


        .footer-feature-content h4 {

            font-size: 12.5px;

        }


        .footer-feature-content p {

            font-size: 11px;

        }


        .footer-links {

            column-gap: 10px;

            row-gap: 7px;

        }


        .footer-links a {

            font-size: 11px;

        }

    }

</style>