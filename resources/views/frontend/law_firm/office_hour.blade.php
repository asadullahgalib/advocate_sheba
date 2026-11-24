@if(!empty(trim(strip_tags((string) $law_firm->office_hour, '<img><iframe>'))))
<style>
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

    /* =========================
       OFFICE HOURS TABLE
       (Admin editor-এর লেখায় এই ক্লাস থাকলে কাজ করবে)
    ========================= */

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
       RESPONSIVE
    ========================= */

    @media (max-width: 768px) {

        .law-title h1 {
            font-size: 25px;
        }

        .law-subtitle {
            font-size: 17px;
        }

        .hours-row {
            grid-template-columns: 100px 1px 1fr;
            font-size: 16px;
        }

        .hours-time {
            padding-left: 15px;
        }
    }
</style>

<!-- Office Hours -->
<div class="col-lg-3 col-md-3 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
    <div class="lpc-slide">

        <div class="lpc-card">

            <!-- PROFILE BODY -->

            <div class="lpc-body">

                <!-- HEADER -->
                <div class="law-title" style="text-align:left !important;">
                    <h1> <i class="fa fa-clock"></i> Office Hours</h1>
                </div>

                <div class="law-subtitle" style="text-align:left !important;">
                    Counseling & Consultation Times
                </div>

                {!! $law_firm->office_hour !!}

                <button type="button" class="btn" style="background-color: #a0cae33d;color: black;border: 1px solid #a0cae33d;width: 100%;margin-bottom: 10px;border-radius: 10px;margin-top: 20px;">By Prior Appointment Only</button>

                @if(!empty(optional($law_firm->leader)->email))
                <button type="button" class="btn" style="background-color: white;color: black;border: 1px solid rgb(16, 60, 109);width: 100%;margin-bottom: 10px;border-radius: 10px;margin-top: 20px;">Email: <i class="fa fa-envelope"></i> {{ $law_firm->leader->email }} </button>
                @endif

            </div>
        </div>
    </div>
</div>
@endif