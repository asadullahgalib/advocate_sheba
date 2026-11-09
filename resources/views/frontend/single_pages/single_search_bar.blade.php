<!-- ========================================================= LEGAL HERO SECTION ========================================================= -->

<section class="legal-hero-section hero-3 position-relative">

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="legal-hero-content">

                    <!-- Heading -->
                    <h1>
                        Find the Right
                        <span>Legal Professional</span>
                    </h1>

                    <!-- Description -->
                    <p class="hero-description">
                        আপনার প্রয়োজনের জন্য সঠিক আইনজীবী ও আইনি পরামর্শদাতা খুঁজে নিন
                    </p>
                    <p class="hero-description hero-count">
                        @if(@$page_type == 'find_advocate')
                            Discover 4,000 Advocates
                        @elseif(@$page_type == 'find_barrister')
                            Discover 2,500 Barristers
                        @elseif(@$page_type == 'find_consultant')
                            Discover 3,000 Legal Consultants
                        @elseif(@$page_type == 'find_law_firm')
                            Discover 1,000 Law Firms
                        @endif
                    </p>


                    <!-- =================================================
                         SEARCH AREA
                    ================================================== -->

                    <form class="legal-search-form">

                        <!-- =========================================
                             FIRST SEARCH ROW
                        ========================================== -->

                        <div class="main-search-row">

                            <input type="text"
                                   class="form-control"
                                   placeholder="Search by Name, Enrollment Number, Bar Number">

                            <!-- Search Button -->
                            <button type="submit" class="btn main-search-button">
                                <i class="fa fa-search"></i>
                            </button>

                        </div>


                        <!-- =========================================
                             SECOND SEARCH ROW
                        ========================================== -->

                        <!-- =========================================================
                             SECOND SEARCH ROW
                        ========================================================= -->

                        <div class="advanced-search-row">

                            <!-- Practice Area -->
                            <div class="search-select custom-select">

                                <div class="custom-select-box">

                                    <span class="selected-text">
                                        Practice Area
                                    </span>

                                    <i class="fa fa-chevron-down"></i>

                                </div>

                                <div class="custom-options">

                                    <div class="custom-option"
                                         data-value="">
                                        Practice Area
                                    </div>

                                    <div class="custom-option"
                                         data-value="criminal-law">
                                        Criminal Law
                                    </div>

                                    <div class="custom-option"
                                         data-value="civil-law">
                                        Civil Law
                                    </div>

                                    <div class="custom-option"
                                         data-value="family-law">
                                        Family Law
                                    </div>

                                    <div class="custom-option"
                                         data-value="corporate-law">
                                        Corporate Law
                                    </div>

                                </div>

                                <input type="hidden"
                                       name="practice_area"
                                       value="">

                            </div>


                            <!-- Location -->
                            <div class="search-select custom-select">

                                <div class="custom-select-box">

                                    <span class="selected-text">
                                        Location
                                    </span>

                                    <i class="fa fa-chevron-down"></i>

                                </div>

                                <div class="custom-options">

                                    <div class="custom-option"
                                         data-value="">
                                        Location
                                    </div>

                                    <div class="custom-option"
                                         data-value="dhaka">
                                        Dhaka
                                    </div>

                                    <div class="custom-option"
                                         data-value="chattogram">
                                        Chattogram
                                    </div>

                                    <div class="custom-option"
                                         data-value="sylhet">
                                        Sylhet
                                    </div>

                                    <div class="custom-option"
                                         data-value="rajshahi">
                                        Rajshahi
                                    </div>

                                </div>

                                <input type="hidden"
                                       name="location"
                                       value="">

                            </div>


                            <!-- Court -->
                            <div class="search-select custom-select court-select">

                                <div class="custom-select-box">

                                    <span class="selected-text">
                                        Court
                                    </span>

                                    <i class="fa fa-chevron-down"></i>

                                </div>

                                <div class="custom-options">

                                    <div class="custom-option"
                                         data-value="">
                                        Court
                                    </div>

                                    <div class="custom-option"
                                         data-value="supreme-court">
                                        Supreme Court
                                    </div>

                                    <div class="custom-option"
                                         data-value="high-court">
                                        High Court
                                    </div>

                                    <div class="custom-option"
                                         data-value="district-court">
                                        District Court
                                    </div>

                                </div>

                                <input type="hidden"
                                       name="court"
                                       value="">

                            </div>


                            <!-- Search Button -->
                            <button type="submit"
                                    class="btn advanced-search-button">

                                <i class="fa fa-search"></i>

                                Search

                            </button>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

</section>

<style>
    
    /* =========================================================
       LEGAL HERO SECTION - SINGLE PAGES
    ========================================================= */

    .legal-hero-section.hero-3 {
        display: block !important;
        width: 100%;
        height: auto !important;
        min-height: 0 !important;

        padding: 25px 0 30px !important;

        background: #103C6D !important;
        background-image: none !important;
    }

    /* =========================================================
       HERO CONTENT
    ========================================================= */

    .legal-hero-content {
        width: 100%;
        max-width: 760px;
        margin: 0;
        text-align: left;
    }

    /* =========================================================
       HEADING
    ========================================================= */

    .legal-hero-content h1 {
        margin: 0 0 5px;
        color: #ffffff;
        font-size: 42px;
        font-weight: 700;
        line-height: 1.15;
    }

    .legal-hero-content h1 span {
        display: block;
        color: #f2b33d;
    }

    /* =========================================================
       DESCRIPTION
    ========================================================= */

    .hero-description {
        margin: 0 0 6px;
        color: #ffffff;
        font-size: 15px;
        line-height: 1.5;
    }

    .hero-description.hero-count {
        margin: 0 0 10px;
        color: #ffffff;
        font-size: 15px;
        font-weight: bold;
    }

    /* =========================================================
       SEARCH FORM
    ========================================================= */

    .legal-search-form {
        width: 100%;
        max-width: 700px;

        padding: 5px 10px;
        margin: 0;

        background: #ffffff;
        border-radius: 15px;
        box-sizing: border-box;
    }

    /* =========================================================
       MAIN SEARCH ROW
    ========================================================= */

    .main-search-row {
        display: grid;
        grid-template-columns: 1fr 115px;
        gap: 7px;
        width: 100%;
        margin-bottom: 7px;
    }

    .main-search-row .form-control {
        width: 100%;
        height: 48px;
        padding: 0 14px;

        border: 1px solid #e2e5e9;
        border-radius: 6px;

        outline: none;
        box-shadow: none;

        font-size: 13px;
        color: #555f70;
    }

    .main-search-row .form-control::placeholder {
        color: #8b95a5;
    }

    /* Main Search Button */

    .legal-search-form .main-search-button {
        width: 100%;
        height: 48px;
        padding: 0 10px !important;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #103C6D !important;
        border: 1px solid #103C6D !important;
        border-radius: 6px !important;

        color: #ffffff;
        font-size: 16px;
        font-weight: 700;
    }

    .legal-search-form .main-search-button:hover {
        background: #087fd0 !important;
        border-color: #087fd0 !important;
    }

    /* =========================================================
       ADVANCED SEARCH ROW
    ========================================================= */

    .advanced-search-row {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 115px;
        gap: 7px;
        width: 100%;
    }

    /* =========================================================
       CUSTOM SELECT
    ========================================================= */

    .custom-select {
        position: relative;
        width: 100%;
    }

    .custom-select-box {
        position: relative;

        display: flex;
        align-items: center;
        justify-content: space-between;

        width: 100%;
        height: 48px;
        padding: 0 35px 0 12px;

        background: #ffffff;
        border: 1px solid #e2e5e9;
        border-radius: 6px;

        color: #555f70;
        font-size: 12px;
        cursor: pointer;

        transition: border-color 0.2s ease;
        box-sizing: border-box;
    }

    .custom-select-box:hover {
        border-color: #cfd5dc;
    }

    .custom-select-box .selected-text {
        display: block;
        width: 100%;

        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .custom-select-box i {
        position: absolute;
        right: 12px;
        top: 50%;

        transform: translateY(-50%);
        color: #778292;
        font-size: 9px;

        pointer-events: none;
        transition: transform 0.2s ease;
    }

    .custom-select.open .custom-select-box i {
        transform: translateY(-50%) rotate(180deg);
    }

    /* Dropdown Options */

    .custom-options {
        position: absolute;
        top: calc(100% + 4px);
        left: 0;

        width: 100%;
        max-height: 220px;
        overflow-y: auto;

        background: #ffffff;
        border: 1px solid #e2e5e9;
        border-radius: 6px;

        box-shadow: 0 6px 18px rgba(0,0,0,0.15);

        opacity: 0;
        visibility: hidden;
        transform: translateY(-5px);

        transition: all 0.2s ease;
        z-index: 9999;
    }

    .custom-select.open .custom-options {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    /* Individual Option */

    .custom-option {
        display: flex;
        align-items: center;

        width: 100%;
        min-height: 42px;
        padding: 8px 12px;

        background: #ffffff;
        color: #555f70;

        font-size: 12px;
        cursor: pointer;

        transition: background 0.2s ease;
        box-sizing: border-box;
    }

    .custom-option:hover {
        background: #f4f7fb;
        color: #123b6d;
    }

    .custom-option.selected {
        background: #f0f5fb;
        color: #123b6d;
        font-weight: 600;
    }

    /* =========================================================
       ADVANCED SEARCH BUTTON
    ========================================================= */

    .legal-search-form .advanced-search-button {
        width: 100%;
        height: 48px;
        padding: 0 9px !important;

        background: #f2b33d !important;
        border: 1px solid #f2b33d !important;
        border-radius: 6px !important;

        color: #ffffff;
        font-size: 15px;
        font-weight: 600;
        white-space: nowrap;

        transition: all 0.3s ease;
    }

    .legal-search-form .advanced-search-button:hover {
        background: #103C6D !important;
        border-color: #103C6D !important;
    }

    /* =========================================================
       TABLET
    ========================================================= */

    @media (max-width: 991px) {

        .legal-hero-section.hero-3 {
            padding: 22px 0 25px !important;
        }

        .legal-hero-content {
            max-width: 680px;
        }

        .legal-hero-content h1 {
            font-size: 36px;
        }

        .advanced-search-row {
            grid-template-columns: 1fr 1fr 1fr 105px;
        }
    }

    /* =========================================================
       MOBILE
    ========================================================= */

    @media (max-width: 767px) {

        .legal-hero-section.hero-3 {
            padding: 20px 12px 25px !important;
        }

        .legal-hero-content {
            max-width: 100%;
            margin: 0;
            text-align: center;
        }

        .legal-hero-content h1 {
            font-size: 28px;
            text-align: center;
        }

        .hero-description {
            font-size: 12px;
            text-align: center;
        }

        .hero-description.hero-count {
            font-size: 12px;
            margin-bottom: 9px;
        }

        .legal-search-form {
            max-width: 100%;
            padding: 5px 7px;
        }

        /* Main Search */

        .main-search-row {
            grid-template-columns: 1fr 55px;
            gap: 5px;
        }

        .main-search-row .form-control,
        .legal-search-form .main-search-button {
            height: 44px;
        }

        .main-search-row .form-control {
            font-size: 12px;
            padding: 0 10px;
        }

        /* Advanced Search */

        .advanced-search-row {
            grid-template-columns: 1fr 1fr;
            gap: 5px;
        }

        .custom-select-box {
            height: 44px;
            padding: 0 30px 0 10px;
            font-size: 11px;
        }

        .custom-select-box i {
            right: 10px;
            font-size: 8px;
        }

        .custom-option {
            min-height: 38px;
            padding: 8px 10px;
            font-size: 10px;
        }

        .advanced-search-row .court-select,
        .advanced-search-row .advanced-search-button {
            grid-column: 1 / -1;
        }

        .legal-search-form .advanced-search-button {
            height: 44px;
            font-size: 14px;
        }
    }

    /* =========================================================
       SMALL MOBILE
    ========================================================= */

    @media (max-width: 480px) {

        .legal-hero-section.hero-3 {
            padding: 16px 8px 20px !important;
        }

        .legal-hero-content h1 {
            font-size: 25px;
        }

        .hero-description {
            font-size: 11px;
        }

        .hero-description.hero-count {
            font-size: 11px;
        }

    }

</style>

<script>

document.addEventListener('DOMContentLoaded', function () {

    const customSelects = document.querySelectorAll('.custom-select');


    customSelects.forEach(function (select) {

        const selectBox = select.querySelector('.custom-select-box');

        const options = select.querySelectorAll('.custom-option');

        const selectedText = select.querySelector('.selected-text');

        const hiddenInput = select.querySelector('input[type="hidden"]');


        /*
        |--------------------------------------------------------------------------
        | Open / Close Dropdown
        |--------------------------------------------------------------------------
        */

        selectBox.addEventListener('click', function (e) {

            e.stopPropagation();


            // Close other dropdowns
            customSelects.forEach(function (otherSelect) {

                if (otherSelect !== select) {

                    otherSelect.classList.remove('open');

                }

            });


            // Toggle current dropdown
            select.classList.toggle('open');

        });


        /*
        |--------------------------------------------------------------------------
        | Select Option
        |--------------------------------------------------------------------------
        */

        options.forEach(function (option) {

            option.addEventListener('click', function (e) {

                e.stopPropagation();


                const value = option.getAttribute('data-value');

                const text = option.textContent.trim();


                // Update visible text
                selectedText.textContent = text;


                // Update hidden input
                hiddenInput.value = value;


                // Remove previous selected
                options.forEach(function (item) {

                    item.classList.remove('selected');

                });


                // Add selected class
                option.classList.add('selected');


                // Close dropdown
                select.classList.remove('open');

            });

        });

    });


    /*
    |--------------------------------------------------------------------------
    | Close when clicking outside
    |--------------------------------------------------------------------------
    */

    document.addEventListener('click', function () {

        customSelects.forEach(function (select) {

            select.classList.remove('open');

        });

    });

});

</script>