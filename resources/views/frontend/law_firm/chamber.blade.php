<style>
    .law-page {
        max-width: 1000px;
        margin: 2px auto;
        padding: 30px 25px 25px;
        margin-bottom: 15px;
        background:
            radial-gradient(circle at 20% 15%, rgba(255,255,255,.8), transparent 25%),
            radial-gradient(circle at 85% 75%, rgba(255,255,255,.7), transparent 25%),
            linear-gradient(135deg, #efefec, #e6e5df);
        border: 1px solid #d3d1c9;
        border-radius: 10px;
        box-shadow: 0 4px 18px rgba(0,0,0,.18);
        position: relative;
        overflow: hidden;
    }

    /* =========================
       HEADER
    ========================= */

    .law-title {
        text-align: center;
        margin-bottom: 3px;
    }

    .law-title h1 {
        margin: 0;
        font-size: 23px;
        font-weight: 700;
        letter-spacing: -1px;
        color: #12636c;
    }

    .law-subtitle {
        text-align: center;
        font-size: 17px;
        font-weight: 600;
        margin-bottom: 20px;
    }

    /*.gold-line {
        height: 1px;
        background: #a58a57;
        position: relative;
        margin: 0 0 30px;
    }*/

    .gold-line .scales {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        background: #e9e8e2;
        padding: 0 14px;
        color: #8e7444;
        font-size: 27px;
    }

    /* =========================
       ADDRESS SECTION
    ========================= */

    .address-column {
        position: relative;
        padding-left: 65px;
        min-height: 115px;
    }

    .address-column:first-child {
        border-right: 1px solid #c9c8c2;
    }

    .address-icon {
        position: absolute;
        left: 36px;
        top: 0;
        font-size: 26px;
        color: #4d5057;
        line-height: 1;
    }

    .address-title {
        font-size: 23px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .address-text {
        font-size: 17px;
        line-height: 1.45;
    }

    /* =========================
       OFFICE HOURS
    ========================= */

    .hours-card {
        background: rgba(255,255,255,.88);
        border: 1px solid #d9d9d5;
        border-radius: 10px;
        box-shadow: 0 7px 18px rgba(0,0,0,.14);
        padding: 22px 28px 20px;
        margin: -5px 35px 0;
        position: relative;
        z-index: 5;
    }

    .hours-heading {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 4px;
    }

    .clock-icon {
        width: 40px;
        height: 40px;
        border-radius: 54%;
        background: #4b4e54;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        flex-shrink: 0;
    }

    .hours-heading h2 {
        font-size: 23px;
        font-weight: 700;
        margin: 0;
    }

    .hours-heading p {
        font-size: 17px;
        margin: -2px 0 0;
    }

    .hours-table {
        margin-top: 10px;
        width: 100%;
    }

    .hours-row {
        display: grid;
        grid-template-columns: 185px 1px 1fr;
        align-items: center;
        min-height: 25px;
        border-bottom: 1px dashed #d1d1ce;
        font-size: 16px;
    }

    .hours-row:last-child {
        border-bottom: none;
    }

    .hours-day {
        text-align: center;
        font-weight: 700;
    }

    .hours-separator {
        width: 1px;
        height: 28px;
        background: #c6c6c2;
    }

    .hours-time {
        padding-left: 35px;
    }

    .closed {
        color: #676052;
    }

    /* =========================
       MAP / COMMUNICATION
    ========================= */

    .communication {
        margin-top: 10px;
        position: relative;
    }

    .communication-card {
        background: rgba(255,255,255,.9);
        border-radius: 3px;
        box-shadow: 0 6px 14px rgba(0,0,0,.10);
        padding: 12px 15px 15px;
        position: relative;
    }

    .communication-title {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 23px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .communication-title i {
        font-size: 22px;
        color: #4e5158;
    }

    .communication-items {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
    }

    .communication-item {
        text-align: center;
        padding: 0 20px;
        min-height: 70px;
    }

    .communication-item + .communication-item {
        border-left: 1px solid #ccccca;
    }

    .communication-icon {
        width: 25px;
        height: 25px;
        margin: 0 auto 8px;
        border: 1px solid #ccc;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 19px;
    }

    .whatsapp-icon {
        background: #24c46a;
        border-color: #24c46a;
        color: #fff;
    }

    .communication-label {
        font-size: 17px;
        line-height: 1.25;
    }

    .communication-value {
        font-size: 18px;
        margin-top: 2px;
    }

    /* =========================
       PHONE BOX
    ========================= */

    .phone-box {
        width: 290px;
        margin: 0 auto;
        margin-top: -1px;
        background: rgba(255,255,255,.94);
        padding: 10px 15px 12px;
        border-radius: 0 0 8px 8px;
        box-shadow: 0 5px 14px rgba(0,0,0,.12);
        text-align: center;
        position: relative;
        z-index: 2;
    }

    .phone-box::before {
        content: "";
        position: absolute;
        width: 130px;
        height: 2px;
        background: #a58a57;
        top: -1px;
        left: 50%;
        transform: translateX(-50%);
    }

    .phone-box .communication-icon {
        margin-bottom: 5px;
    }

    /* =========================
       FOOTER
    ========================= */

    .appointment {
        text-align: center;
        font-size: 19px;
        margin-top: 10px;
        margin-bottom: 0;
    }

    /* =========================
       DECORATION
    ========================= */

    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 768px) {

        .law-page {
            margin: 10px;
            padding: 22px 15px;
        }

        .law-title h1 {
            font-size: 25px;
        }

        .law-subtitle {
            font-size: 17px;
        }

        .address-wrapper {
            padding: 20px 15px;
        }

        .address-column {
            padding-left: 55px;
        }

        .address-column:first-child {
            border-right: none;
            border-bottom: 1px solid #ccc;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .address-title {
            font-size: 15px;
            margin-left: 5px;
        }

        .address-text {
            font-size: 15px;
        }

        .address-icon {
            font-size: 22px;
        }

        .hours-card {
            margin: 10px 0 0;
            padding: 18px 15px;
        }

        .hours-heading {
            gap: 12px;
        }

        .clock-icon {
            width: 55px;
            height: 55px;
            font-size: 30px;
        }

        .hours-heading h2 {
            font-size: 24px;
        }

        .hours-heading p {
            font-size: 17px;
        }

        .hours-row {
            grid-template-columns: 100px 1px 1fr;
            font-size: 16px;
        }

        .hours-time {
            padding-left: 15px;
        }

        .communication {
            margin-top: 45px;
        }

        .communication-title {
            font-size: 23px;
        }

        .communication-items {
            grid-template-columns: 1fr;
        }

        .communication-item {
            min-height: auto;
            padding: 15px 10px;
        }

        .communication-item + .communication-item {
            border-left: none;
            border-top: 1px solid #ccc;
        }

        .phone-box {
            width: 90%;
        }

        .appointment {
            font-size: 16px;
        }

        .decoration,
        .decoration-left {
            display: none;
        }
    }
</style>

<div class="law-page">

    <!-- HEADER -->
    <div class="law-title">
        <h1>Law Chamber | Offices &amp; Hours</h1>
    </div>

    <div class="law-subtitle">
        Professional Legal Services | Supreme Court Bar
    </div>

    <!-- ADDRESS -->
    <div class="address-wrapper">

        <div class="row">

            <!-- CHAMBER ADDRESS -->
            <div class="col-md-6">
                <div class="address-column">

                    <i class="bi bi-geo-alt-fill address-icon"></i>

                    <div class="address-title">
                        Chamber Address:
                    </div>

                    <div class="address-text">
                        Supreme Court Bar Building (8th Floor)<br>
                        Room No-810, Shahbagh, Dhaka-1000
                    </div>

                </div>
            </div>


            <!-- OFFICE ADDRESS -->
            <div class="col-md-6">
                <div class="address-column">

                    <i class="bi bi-geo-alt-fill address-icon"></i>

                    <div class="address-title">
                        Office Address:
                    </div>

                    <div class="address-text">
                        Supreme Court Bar Building (8th Floor)<br>
                        Room No-810, Shahbagh, Dhaka-1000
                    </div>

                </div>
            </div>

        </div>


        <!-- OFFICE HOURS -->
        <div class="hours-card">

            <div class="hours-heading">

                <div class="clock-icon">
                    <i class="bi bi-clock"></i>
                </div>

                <div>
                    <h2>Office Hours:</h2>
                    <p>Counseling &amp; Consultation Times</p>
                </div>

            </div>


            <div class="hours-table">

                <div class="hours-row">
                    <div class="hours-day closed">
                        Closed
                    </div>

                    <div class="hours-separator"></div>

                    <div class="hours-time">
                        10:00 AM – 7:00 PM
                    </div>
                </div>


                <div class="hours-row">
                    <div class="hours-day">
                        Court Office
                    </div>

                    <div class="hours-separator"></div>

                    <div class="hours-time">
                        10:00 AM – 7:00 PM
                    </div>
                </div>


                <div class="hours-row">
                    <div class="hours-day">
                        Chamber
                    </div>

                    <div class="hours-separator"></div>

                    <div class="hours-time">
                        10:00 AM – 7:00 PM
                    </div>
                </div>

            </div>

        </div>

    </div>


    <!-- COMMUNICATION -->
    <div class="communication">

        <div class="communication-card">

            <div class="communication-title">
                <i class="bi bi-buildings-fill"></i>
                <span>Map &amp; Communication:</span>
            </div>


            <div class="communication-items">

                <!-- MAP -->
                <div class="communication-item">

                    <div class="communication-icon">
                        <i class="bi bi-geo-alt"></i>
                    </div>

                    <div class="communication-label">
                        View on Map
                    </div>

                </div>


                <!-- WHATSAPP -->
                <div class="communication-item">

                    <div class="communication-icon whatsapp-icon">
                        <i class="bi bi-whatsapp"></i>
                    </div>

                    <div class="communication-value">
                        +880 1913-720088
                    </div>

                    <div class="communication-label">
                        WhatsApp
                    </div>

                </div>


                <!-- EMAIL -->
                <div class="communication-item">

                    <div class="communication-icon">
                        <i class="bi bi-envelope-fill"></i>
                    </div>

                    <div class="communication-value">
                        info@lawchamber.com
                    </div>

                </div>

                <!-- EMAIL -->
                <div class="communication-item">

                    <div class="communication-icon">
                        <i class="bi bi-telephone-fill"></i>
                    </div>

                    <div class="communication-value">
                        +880 1913-720088
                    </div>

                    <div class="communication-label">
                        Phone &amp; general inquiries
                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- FOOTER -->
    <p class="appointment">
        By Prior Appointment Only | Contact for Scheduling
    </p>

</div>