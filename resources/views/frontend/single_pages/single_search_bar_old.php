<!-- ========================================================= LEGAL HERO SECTION ========================================================= -->

<section class="legal-hero-section hero-3 position-relative" style="height:290px !important">

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


                    <!-- =================================================
                         SEARCH AREA
                    ================================================== -->

                    <form class="legal-search-form"
                          style="padding: 5px 10px; border-radius: 15px;">


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

/* ========================================================= HERO CONTENT ========================================================= */
.legal-hero-content {
  width: 100%;
  max-width: 760px;
  margin-left: 0;
  text-align: left;
}

/* ========================================================= HEADING ========================================================= */
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

/* ========================================================= DESCRIPTION ========================================================= */
.hero-description {
  margin: 0 0 20px;
  color: #ffffff;
  font-size: 15px;
  line-height: 1.5;
}

/* ========================================================= SEARCH FORM ========================================================= */
.legal-search-form {
  width: 100%;
  max-width: 700px;
}

/* ========================================================= FIRST / MAIN SEARCH ROW ========================================================= */
.main-search-row {
  display: grid;
  grid-template-columns: 1fr 115px;
  gap: 7px;
  width: 100%;
  margin-bottom: 7px;
}

/* Main Search Input */
.main-search-row .form-control {
  width: 100%;
  height: 48px;
  padding: 0 14px;
  border: 1px solid #e2e5e9;
  border-radius: 6px;
  outline: none;
  font-size: 13px;
  color: #555f70;
  box-shadow: none;
}

/* Placeholder */
.main-search-row .form-control::placeholder {
  color: #8b95a5;
}

/* Main Search Button */
.main-search-button {
  width: 100%;
  height: 48px;
  padding: 0 10px;
  border: 1px solid #123b6d !important;
  border-radius: 6px !important;
  background-color: #123b6d !important;
  color: #ffffff;
  font-size: 15px;
  font-weight: 500;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
}

.main-search-button:hover {
  background-color: #087fd0 !important;
  border-color: #087fd0 !important;
}

/* ========================================================= SECOND SEARCH ROW ========================================================= */
.advanced-search-row {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 115px;
  gap: 7px;
  width: 100%;
}

/* ========================================================= SELECT BOX ========================================================= */
.search-select {
  position: relative;
  width: 100%;
}

.search-select select {
  width: 100%;
  height: 48px;
  padding: 0 35px 0 12px;
  border: 1px solid #e2e5e9;
  border-radius: 6px;
  outline: none;
  appearance: none;
  -webkit-appearance: none;
  background-color: #ffffff;
  color: #555f70;
  font-size: 12px;
  cursor: pointer;
}

.search-select i {
  position: absolute;
  right: 12px;
  top: 50%;
  transform: translateY(-50%);
  color: #778292;
  font-size: 9px;
  pointer-events: none;
}

/* ========================================================= SECOND SEARCH BUTTON ========================================================= */
.advanced-search-button {
  width: 100%;
  height: 48px;
  padding: 0 9px;
  color: #ffffff;
  border: 1px solid #123b6d !important;
  background-color: #123b6d !important;
  border-radius: 6px !important;
  font-size: 15px;
  font-weight: 500;
  white-space: nowrap;
  transition: all 0.3s ease;
}

.advanced-search-button:hover {
  background-color: #087fd0 !important;
  border-color: #087fd0 !important;
}

/* ========================================================= CATEGORY LINKS ========================================================= */
.legal-category-links {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  flex-wrap: wrap;
  gap: 10px;
  margin-top: 17px;
  width: 100%;
}

/* Category Button */
.legal-category-links a {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  min-height: 36px;
  padding: 7px 16px;
  min-width: 120px;
  color: #ffffff;
  background: rgba(255, 255, 255, 0.12);
  border: 1px solid rgba(255, 255, 255, 0.45);
  border-radius: 15px;
  text-decoration: none;
  font-size: 13px;
  font-weight: 600;
  line-height: 1.2;
  transition: all 0.25s ease;
}

/* Hover */
.legal-category-links a:hover {
  color: #ffffff;
  background: #f2b33d;
  border-color: #f2b33d;
  transform: translateY(-2px);
}

/* Active */
.legal-category-links a.active {
  color: #000;
  background: #CDDFFC;
  border-color: #CDDFFC;
}

/* Separator যদি কোথাও থাকে */
.legal-category-links span {
  display: none;
}

/* ========================================================= FOUR CATEGORY SECTION ========================================================= */
.legal-category-section {
  position: relative;
  z-index: 10;
  margin-top: -45px;
  padding-bottom: 40px;
}

/* ========================================================= CARD ========================================================= */
.legal-category-card {
  width: 100%;
  min-height: 235px;
  padding: 18px 12px 15px;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  background: #ffffff;
  border: 1px solid #e5e7eb;
  border-radius: 9px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.13);
  transition: all 0.3s ease;
}

.legal-category-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 10px 28px rgba(0, 0, 0, 0.18);
}

/* ========================================================= ICON ========================================================= */
.category-icon {
  width: 65px;
  height: 65px;
  margin-bottom: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  color: #ffffff;
  font-size: 25px;
}

/* Individual Icon Colors */
.advocates-icon {
  background: #123b6d;
}

.barristers-icon {
  background: #b7861c;
}

.consultants-icon {
  background: #2a8c67;
}

.law-firms-icon {
  background: #51419a;
}

/* ========================================================= CARD TITLE ========================================================= */
.legal-category-card h3 {
  min-height: 23px;
  margin: 0 0 7px;
  color: #17264a;
  font-size: 16px;
  font-weight: 700;
  line-height: 1.35;
}

/* ========================================================= CARD DESCRIPTION ========================================================= */
.legal-category-card p {
  min-height: 38px;
  margin: 0 0 12px;
  color: #6c7484;
  font-size: 10px;
  line-height: 1.5;
}

/* ========================================================= CARD BUTTON ========================================================= */
.category-button {
  margin-top: auto;
  min-width: 120px;
  padding: 7px 9px;
  border-radius: 4px;
  color: #ffffff;
  text-decoration: none;
  font-size: 10px;
  font-weight: 600;
  transition: 0.2s;
}

.category-button:hover {
  color: #ffffff;
  opacity: 0.88;
}

.category-button i {
  margin-left: 4px;
  font-size: 8px;
}

.advocates-button {
  background: #123b6d;
}

.barristers-button {
  background: #b7861c;
}

.consultants-button {
  background: #2a8c67;
}

.law-firms-button {
  background: #51419a;
}

/* ========================================================= TABLET ========================================================= */
@media (max-width: 991px) {
  .legal-hero-section {
    min-height: 400px;
    padding-bottom: 95px;
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

/* ========================================================= MOBILE ========================================================= */
@media (max-width: 767px) {
  .legal-hero-section {
    min-height: auto;
    padding: 35px 12px 100px;
    background-position: center center;
  }

  .legal-hero-content {
    max-width: 100%;
    margin-top: 120px;
    margin-bottom: 80px;
  }

  .legal-hero-content h1 {
    font-size: 29px;
    text-align: center;
  }

  .hero-description {
    font-size: 12px;
    margin-bottom: 18px;
    text-align: center;
  }

  /* ========================================= FIRST / MAIN SEARCH ========================================= */
  .main-search-row {
    grid-template-columns: 1fr 55px;
    gap: 5px;
  }

  .main-search-row .form-control {
    height: 44px;
    font-size: 12px;
    padding: 0 10px;
  }

  .main-search-button {
    height: 44px;
    font-size: 13px;
  }

  /* ========================================= SECOND SEARCH ROW Practice Area = 1 Column Location = 1 Column Court = 2 Columns Search = 2 Columns ========================================= */
  .advanced-search-row {
    grid-template-columns: 1fr 1fr;
    gap: 5px;
  }

  .search-select select {
    height: 44px;
    font-size: 10px;
  }

  /* Court takes full width of Practice Area + Location */
  .advanced-search-row .court-select {
    grid-column: 1 / -1;
  }

  /* Search button also takes full width of two columns */
  .advanced-search-row .advanced-search-button {
    grid-column: 1 / -1;
    height: 44px;
    font-size: 15px;
    width: 100%;
    font-weight: bold;
    color: #000;
  }

  /* ========================================= CATEGORY LINKS ========================================= */
  .legal-category-links {
    justify-content: center;
    align-items: center;
    gap: 7px;
    margin-top: 15px;
    width: 100%;
  }

  .legal-category-links a {
    min-height: 34px;
    padding: 6px 12px;
    font-size: 10px;
    border-radius: 5px;
    text-align: center;
  }

  /* ========================================= CARDS ========================================= */
  .legal-category-section {
    margin-top: -25px;
    padding-left: 8px;
    padding-right: 8px;
  }

  .legal-category-card {
    min-height: 210px;
    padding: 14px 6px;
  }

  .category-icon {
    width: 54px;
    height: 54px;
    font-size: 21px;
  }

  .legal-category-card h3 {
    font-size: 13px;
  }

  .legal-category-card p {
    font-size: 9px;
  }

  .category-button {
    min-width: 100px;
    padding: 6px 5px;
    font-size: 8px;
  }
}

/* ========================================================= SMALL MOBILE ========================================================= */
@media (max-width: 480px) {
  .legal-hero-section {
    padding-left: 8px;
    padding-right: 8px;
    margin-bottom: 40px;
  }

  .legal-hero-content h1 {
    font-size: 25px;
    text-align: center !important;
  }

  .hero-description {
    font-size: 11px;
    text-align: center;
    margin-top: 9px;
  }

  .main-search-box input {
    font-size: 11px;
  }

  /* Keep Practice Area + Location in two columns */
  .advanced-search-row {
    grid-template-columns: 1fr 1fr;
    gap: 5px;
  }

  /* Court = full two-column width */
  .advanced-search-row .court-select {
    grid-column: 1 / -1;
  }

  /* Search = full two-column width */
  .advanced-search-row .advanced-search-button {
    grid-column: 1 / -1;
  }

  .search-select select {
    font-size: 9px;
  }

  .legal-search-button {
    font-size: 10px;
  }

  /* Category buttons */
  .legal-category-links {
    justify-content: center;
    gap: 6px;
    margin-top: 20px;
  }

  .legal-category-links a {
    padding: 6px 15px;
    font-size: 15px;
    min-height: 32px;
    font-weight: bold;
    border-radius: 15px;
    margin: 3px 5px;
    /*min-width: 160px;*/
  }

  .legal-category-card {
    min-height: 195px;
  }

  .category-icon {
    width: 50px;
    height: 50px;
    font-size: 19px;
  }

  .legal-category-card h3 {
    font-size: 12px;
  }
}

/* ========================================================= GENERAL SUBMIT BUTTON ========================================================= */
button.submit,
button[type='submit'] {
  font-size: 16px;
  font-weight: 500;
  padding: 12px 15px !important;
  color: #ffffff;
  border: none;
  background-color: #EFB434 !important;
  border: 1px solid #EFB434 !important;
  border-radius: 10px;
}

/* =========================================================
   CUSTOM SELECT DROPDOWN
========================================================= */

.custom-select {

    position: relative;

    width: 100%;

}


/* =========================================================
   SELECT BOX
========================================================= */

.custom-select-box {

    width: 100%;

    height: 48px;

    padding: 0 35px 0 12px;

    border: 1px solid #e2e5e9;

    border-radius: 6px;

    background-color: #ffffff;

    color: #555f70;

    font-size: 12px;

    cursor: pointer;

    display: flex;

    align-items: center;

    justify-content: space-between;

    position: relative;

    transition: all 0.2s ease;

}


.custom-select-box:hover {

    border-color: #cfd5dc;

}


/* Selected Text */

.custom-select-box .selected-text {

    display: block;

    width: 100%;

    white-space: nowrap;

    overflow: hidden;

    text-overflow: ellipsis;

}


/* Arrow */

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


/* Arrow when open */

.custom-select.open .custom-select-box i {

    transform: translateY(-50%) rotate(180deg);

}


/* =========================================================
   DROPDOWN OPTIONS
========================================================= */

.custom-options {

    position: absolute;

    top: calc(100% + 4px);

    left: 0;

    width: 100%;

    background: #ffffff;

    border: 1px solid #e2e5e9;

    border-radius: 6px;

    box-shadow: 0 6px 18px rgba(0,0,0,0.15);

    overflow: hidden;

    opacity: 0;

    visibility: hidden;

    transform: translateY(-5px);

    transition: all 0.2s ease;

    z-index: 9999;

}


/* Open Dropdown */

.custom-select.open .custom-options {

    opacity: 1;

    visibility: visible;

    transform: translateY(0);

}


/* =========================================================
   OPTION
========================================================= */

.custom-option {

    width: 100%;

    min-height: 42px;

    padding: 2px 12px;

    display: flex;

    align-items: center;

    background: #ffffff;

    color: #555f70;

    font-size: 12px;

    cursor: pointer;

    transition: all 0.2s ease;

}


.custom-option:hover {

    background: #f4f7fb;

    color: #123b6d;

}


/* Selected Option */

.custom-option.selected {

    background: #f0f5fb;

    color: #123b6d;

    font-weight: 600;

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .custom-select-box {

        height: 44px;

        font-size: 11px;

        padding: 0 30px 0 10px;

    }


    .custom-select-box i {

        right: 10px;

        font-size: 8px;

    }


    .custom-options {

        top: calc(100% + 4px);

        border-radius: 6px;

        max-height: 220px;

        overflow-y: auto;

    }


    .custom-option {

        min-height: 7px;

        padding: 0px 8px;

        font-size: 10px;

    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 480px) {

    .custom-select-box {
        height: 44px;
        font-size: 11px;
        font-weight: 600;
    }


    .custom-option {

        min-height: 38px;

        padding: 8px 10px;

        font-size: 9px;

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