@php
    $dcCallNumber = !empty($advocate->appointment_contact) ? $advocate->appointment_contact : $advocate->mobile;

    $dcSpecialization = $advocate_practice_areas
        ->map(function ($item) {
            return optional($item->practice)->name;
        })
        ->filter()
        ->take(2)
        ->implode(', ');

    $dcImage = !empty($advocate->image)
        ? url('uploads/advocates_images/' . $advocate->image)
        : url('uploads/no_image.png');

    $dcChamberTitle = !empty($advocate->chamber_name) ? $advocate->chamber_name : $advocate->court_name;
    $dcOfficeHour   = !empty($advocate->office_hour)
        ? \Illuminate\Support\Str::limit(trim(strip_tags($advocate->office_hour)), 140)
        : '';
    $dcHasChamber   = !empty($dcChamberTitle) || !empty($advocate->present_address) || !empty($dcOfficeHour);
@endphp

<style>
    /* =========================================
       Digital Card Modal (prefix: dc-)
    ========================================= */
    .dc-overlay {
        position: fixed;
        inset: 0;
        background: rgba(10, 25, 30, 0.55);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        display: none;
        align-items: center;
        justify-content: center;
        padding: 15px;
        z-index: 99999;
    }

    .dc-overlay.dc-open {
        display: flex;
        animation: dcFade .25s ease;
    }

    @keyframes dcFade {
        from { opacity: 0; }
        to   { opacity: 1; }
    }

    @keyframes dcPop {
        from { opacity: 0; transform: translateY(18px) scale(.97); }
        to   { opacity: 1; transform: translateY(0) scale(1); }
    }

    .dc-modal {
        width: 100%;
        max-width: 430px;
        max-height: 94vh;
        overflow-y: auto;
        background: #ffffff;
        border-radius: 22px;
        padding: 20px 20px 22px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.35);
        animation: dcPop .3s ease;
        position: relative;
    }

    .dc-modal::-webkit-scrollbar { width: 5px; }
    .dc-modal::-webkit-scrollbar-thumb { background: #cfd8dc; border-radius: 10px; }

    /* Top bar */
    .dc-topbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 8px;
        margin-bottom: 4px;
    }

    .dc-brand {
        font-size: 21px;
        font-weight: 800;
        color: #126d76;
        letter-spacing: -.3px;
        line-height: 1;
    }

    .dc-brand span { color: #16a085; }

    .dc-top-right {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .dc-verified-pill {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 6px 11px;
        border-radius: 30px;
        border: 1px solid #bfe3d6;
        background: #effaf5;
        color: #12636c;
        font-size: 11.5px;
        font-weight: 700;
        white-space: nowrap;
    }

    .dc-verified-pill i { color: #159d62; font-size: 13px; }

    .dc-close {
        width: 34px;
        height: 34px;
        border: none;
        border-radius: 50%;
        background: #eef2f3;
        color: #1b2b30;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        cursor: pointer;
        transition: all .2s ease;
    }

    .dc-close:hover { background: #126d76; color: #fff; }

    /* Avatar + wave */
    .dc-avatar-area {
        position: relative;
        text-align: center;
        padding: 18px 0 6px;
    }

    .dc-avatar-area::before {
        content: "";
        position: absolute;
        left: -20px;
        right: -20px;
        top: 62px;
        height: 62px;
        background: linear-gradient(90deg, #d8f1ea 0%, #e9f8f3 50%, #d3eee6 100%);
        border-radius: 60% 40% 55% 45% / 100% 100% 0% 0%;
    }

    .dc-avatar {
        position: relative;
        width: 112px;
        height: 112px;
        border-radius: 50%;
        border: 4px solid #ffffff;
        box-shadow: 0 0 0 2px #d4e9e3, 0 8px 20px rgba(18, 109, 118, 0.22);
        overflow: hidden;
        margin: 0 auto;
        background: #eee;
    }

    .dc-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* Name */
    .dc-name {
        text-align: center;
        margin: 12px 0 2px;
        font-size: 23px;
        font-weight: 800;
        color: #12303a;
        line-height: 1.25;
    }

    .dc-designation {
        text-align: center;
        color: #5b6b70;
        font-size: 13px;
        margin-bottom: 6px;
    }

    .dc-enroll {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        font-size: 13px;
        font-weight: 700;
        color: #1b2b30;
        margin-bottom: 14px;
    }

    .dc-enroll i { color: #126d76; }

    /* Info rows */
    .dc-info-row {
        display: flex;
        align-items: flex-start;
        gap: 9px;
        margin-bottom: 7px;
        font-size: 13.5px;
        line-height: 1.4;
    }

    .dc-info-row i {
        width: 18px;
        min-width: 18px;
        text-align: center;
        color: #12806f;
        font-size: 15px;
        margin-top: 2px;
    }

    .dc-info-row.dc-spec { color: #0f7a6d; font-weight: 700; }
    .dc-info-row.dc-qual { color: #333; }

    .dc-divider {
        height: 1px;
        background: linear-gradient(90deg, transparent, #cfe6e0, transparent);
        margin: 14px 0;
    }

    /* Chamber */
    .dc-section-title {
        font-size: 15.5px;
        font-weight: 800;
        color: #12303a;
        margin-bottom: 10px;
    }

    .dc-chamber {
        display: flex;
        align-items: stretch;
        gap: 10px;
        background: #f7fafa;
        border: 1px solid #e4eded;
        border-radius: 14px;
        padding: 12px;
    }

    .dc-chamber-info { flex: 1; min-width: 0; }

    .dc-chamber-name {
        font-size: 14.5px;
        font-weight: 800;
        color: #12303a;
        margin-bottom: 6px;
        line-height: 1.3;
    }

    .dc-chamber-line {
        display: flex;
        gap: 7px;
        font-size: 12.5px;
        color: #4a5a5f;
        line-height: 1.4;
        margin-bottom: 6px;
    }

    .dc-chamber-line i {
        color: #12806f;
        font-size: 13px;
        margin-top: 2px;
        width: 14px;
        min-width: 14px;
        text-align: center;
    }

    .dc-hour-box {
        background: #ffffff;
        border: 1px solid #e4eded;
        border-radius: 10px;
        padding: 8px 10px;
        font-size: 12px;
        color: #1b2b30;
        display: flex;
        gap: 7px;
        line-height: 1.4;
    }

    .dc-hour-box i { color: #12806f; margin-top: 2px; }

    .dc-call-box {
        width: 62px;
        min-width: 62px;
        border-left: 1px solid #e0eaea;
        padding-left: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .dc-call-link {
        width: 52px;
        height: 62px;
        border-radius: 12px;
        background: #e3f4f0;
        color: #126d76;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 3px;
        font-size: 12px;
        font-weight: 700;
        text-decoration: none;
        transition: all .2s ease;
    }

    .dc-call-link i { font-size: 18px; }
    .dc-call-link:hover { background: #126d76; color: #fff; }
    .dc-call-link.dc-disabled { opacity: .45; cursor: not-allowed; pointer-events: none; }

    /* Buttons (profile er button er moto) */
    .dc-actions {
        display: flex;
        gap: 10px;
        margin-top: 16px;
    }

    .dc-btn {
        flex: 1;
        height: 48px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        font-size: 13px;
        font-weight: 700;
        text-decoration: none;
        cursor: pointer;
        transition: all .25s ease;
        padding: 0 6px;
        line-height: 1.15;
        text-align: center;
    }

    .dc-btn i { font-size: 17px; }

    .dc-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    }

    .dc-btn-outline {
        background: #ffffff;
        border: 2px solid #126d76;
        color: #101536;
    }

    .dc-btn-outline i { color: #126d76; }
    .dc-btn-outline:hover { background: #126d76; color: #fff; }
    .dc-btn-outline:hover i { color: #fff; }

    .dc-btn-fill {
        background: #126d76;
        border: 2px solid #126d76;
        color: #ffffff;
    }

    .dc-btn-fill:hover { background: #0e5961; color: #fff; }

    .dc-btn.dc-loading { opacity: .7; pointer-events: none; }

    @media (max-width: 420px) {
        .dc-modal { padding: 16px 15px 18px; border-radius: 18px; }
        .dc-brand { font-size: 18px; }
        .dc-verified-pill { font-size: 10.5px; padding: 5px 9px; }
        .dc-name { font-size: 20px; }
        .dc-btn { font-size: 11.5px; height: 46px; }
        .dc-btn i { font-size: 15px; }
        .dc-call-box { width: 56px; min-width: 56px; }
        .dc-call-link { width: 46px; }
    }
</style>

<div class="dc-overlay" id="dcOverlay" onclick="if(event.target===this){closeDigitalCard();}">
    <div class="dc-modal" id="dcModal">

        {{-- এই পুরো অংশ PNG card হিসেবে save হবে --}}
        <div id="dcCapture" style="background:#fff;">

            <div class="dc-topbar">
                <div class="dc-brand">Advocate<span>Sheba</span></div>
                <div class="dc-top-right">
                    <div class="dc-verified-pill">
                        <i class="fa fa-check-circle"></i> Verified Advocate
                    </div>
                    <button type="button" class="dc-close" onclick="closeDigitalCard()" data-html2canvas-ignore="true" aria-label="Close">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
            </div>

            <div class="dc-avatar-area">
                <div class="dc-avatar">
                    <img src="{{ $dcImage }}" alt="{{ $advocate->name }}" crossorigin="anonymous">
                </div>
            </div>

            <h2 class="dc-name">{{ $advocate->name }}</h2>

            @if(!empty(@$advocate->designation->name))
                <div class="dc-designation">{{ $advocate->designation->name }}</div>
            @endif

            @if(!empty($advocate->enrollment_no))
                <div class="dc-enroll">
                    <i class="fa fa-shield-alt"></i>
                    Enrollment No: {{ $advocate->enrollment_no }}
                </div>
            @endif

            @if(!empty($dcSpecialization))
                <div class="dc-info-row dc-spec">
                    <i class="fa fa-balance-scale"></i>
                    <span>{{ $dcSpecialization }}</span>
                </div>
            @endif

            @if(!empty($advocate->short_qualification))
                <div class="dc-info-row dc-qual">
                    <i class="fa fa-graduation-cap"></i>
                    <span>{{ $advocate->short_qualification }}</span>
                </div>
            @endif

            @if(!empty($advocate->experience))
                <div class="dc-info-row dc-qual">
                    <i class="fa fa-briefcase"></i>
                    <span>{{ $advocate->experience }} Experience</span>
                </div>
            @endif

            @if(!empty($advocate->bar_association))
                <div class="dc-info-row dc-qual">
                    <i class="fa fa-landmark"></i>
                    <span>{{ $advocate->bar_association }}</span>
                </div>
            @endif

            @if($dcHasChamber)
                <div class="dc-divider"></div>

                <div class="dc-section-title">Chamber &amp; Consultation</div>

                <div class="dc-chamber">
                    <div class="dc-chamber-info">
                        @if(!empty($dcChamberTitle))
                            <div class="dc-chamber-name">{{ $dcChamberTitle }}</div>
                        @endif

                        @if(!empty($advocate->present_address))
                            <div class="dc-chamber-line">
                                <i class="fa fa-map-marker-alt"></i>
                                <span>{{ $advocate->present_address }}</span>
                            </div>
                        @endif

                        @if(!empty($dcOfficeHour))
                            <div class="dc-hour-box">
                                <i class="fa fa-calendar-alt"></i>
                                <span>{{ $dcOfficeHour }}</span>
                            </div>
                        @endif
                    </div>

                    <div class="dc-call-box" data-html2canvas-ignore="true">
                        @if(!empty($dcCallNumber))
                            <a href="tel:{{ $dcCallNumber }}" class="dc-call-link"
                               onclick="return confirm('Do you want to call {{ $dcCallNumber }}?');">
                                <i class="fa fa-phone"></i>
                                <span>Call</span>
                            </a>
                        @else
                            <a href="javascript:void(0)" class="dc-call-link dc-disabled">
                                <i class="fa fa-phone"></i>
                                <span>Call</span>
                            </a>
                        @endif
                    </div>
                </div>
            @endif

            @if(!empty($dcCallNumber))
                <div class="dc-info-row dc-qual" style="margin-top:12px;">
                    <i class="fa fa-phone-alt"></i>
                    <span>{{ $dcCallNumber }}</span>
                </div>
            @endif

        </div>
        {{-- capture শেষ --}}

        <div class="dc-actions">
            <a href="javascript:void(0)" class="dc-btn dc-btn-outline" id="dcSaveBtn" onclick="saveDigitalCard()">
                <i class="fa fa-download"></i>
                <span>View &amp; Save Digital Card</span>
            </a>

            <a href="javascript:void(0)" class="dc-btn dc-btn-fill" onclick="dcOpenWhatsapp()">
                <i class="fa-brands fa-whatsapp"></i>
                <span>WhatsApp Consultation</span>
            </a>
        </div>

    </div>
</div>

<script>
    function openDigitalCard() {
        document.getElementById('dcOverlay').classList.add('dc-open');
        document.body.style.overflow = 'hidden';
    }

    function closeDigitalCard() {
        document.getElementById('dcOverlay').classList.remove('dc-open');
        document.body.style.overflow = '';
    }

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            closeDigitalCard();
        }
    });

    // WhatsApp Consultation -> তোমার আগের consult modal খুলবে
    function dcOpenWhatsapp() {
        closeDigitalCard();
        if (typeof openConsultModal === 'function') {
            setTimeout(function () { openConsultModal(); }, 150);
        }
    }

    // Digital card PNG হিসেবে save
    function saveDigitalCard() {
        var btn = document.getElementById('dcSaveBtn');
        var label = btn.querySelector('span');
        var oldText = label.innerText;

        function run() {
            btn.classList.add('dc-loading');
            label.innerText = 'Saving...';

            html2canvas(document.getElementById('dcCapture'), {
                scale: 2,
                useCORS: true,
                backgroundColor: '#ffffff'
            }).then(function (canvas) {
                var link = document.createElement('a');
                link.download = 'digital-card-{{ \Illuminate\Support\Str::slug($advocate->name) }}.png';
                link.href = canvas.toDataURL('image/png');
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }).catch(function () {
                alert('Digital card save kora jayni, abar try korun.');
            }).then(function () {
                btn.classList.remove('dc-loading');
                label.innerText = oldText;
            });
        }

        if (typeof html2canvas === 'undefined') {
            var s = document.createElement('script');
            s.src = 'https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js';
            s.onload = run;
            s.onerror = function () { alert('Internet connection check korun.'); };
            document.head.appendChild(s);
        } else {
            run();
        }
    }
</script>