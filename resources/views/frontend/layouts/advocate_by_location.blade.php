<link rel="stylesheet"
      href="{{ asset('assets/css/advocate-location-modal.css') }}">

<section class="popular-categories section-padding"
    style="background-color:#f5f5f5;padding:0px 0px 0px 0px;margin-bottom:15px;border-radius:15px;">

    <div class="container">
        <div class="flex justify-between items-center mt-2">
          <div class="my-4">
            <h2
              id="hospitals-by-location"
              class="text-lg md:text-xl font-semibold text-gray-800 dark:text-gray-100"
            >
              Find Legal Professionals Near You
            </h2>
            <p class="text-sm text-gray-600 dark:text-gray-400">
              Explore Legal Professionals by Location
            </p>
          </div>
          <a
            href="#"
            aria-label=""
            class="flex items-center gap-1 text-[#008080] text-sm font-semibold hover:underline transition"
          >
            View All
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="18"
              height="18"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-chevron-right"
              aria-hidden="true"
            >
              <path d="m9 18 6-6-6-6"></path>
            </svg>
          </a>
        </div>

        <!-- Specialist Cards -->
        <div class="row">

            <!-- Card 1 -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                <a href="#" class="specialist-card" data-bs-toggle="modal"
                   data-bs-target="#locationModal">
                    <div class="specialist-image">
                        <img src="{{ asset('frontend/a.jpg') }}"
                             alt="Dhaka">

                        <div class="specialist-overlay">
                            <h6>Dhaka Court</h6>
                        </div>
                    </div>
                </a>
            </div>


            <!-- Card 2 -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                <a href="#" class="specialist-card" data-bs-toggle="modal"
                   data-bs-target="#locationModal">
                    <div class="specialist-image">
                        <img src="{{ asset('frontend/b.jpg') }}"
                             alt="Khulna">

                        <div class="specialist-overlay">
                            <h6>Khulna Court</h6>
                        </div>
                    </div>
                </a>
            </div>


            <!-- Card 3 -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                <a href="#" class="specialist-card" data-bs-toggle="modal"
                   data-bs-target="#locationModal">
                    <div class="specialist-image">
                        <img src="{{ asset('frontend/c.jpg') }}"
                             alt="Sylhet">

                        <div class="specialist-overlay">
                            <h6>Sylhet Court</h6>
                        </div>
                    </div>
                </a>
            </div>


            <!-- Card 4 -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                <a href="#" class="specialist-card" data-bs-toggle="modal"
                   data-bs-target="#locationModal">
                    <div class="specialist-image">
                        <img src="{{ asset('frontend/a.jpg') }}"
                             alt="Dhaka">

                        <div class="specialist-overlay">
                            <h6>Rangpur Court</h6>
                        </div>
                    </div>
                </a>
            </div>


            <!-- Card 2 -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                <a href="#" class="specialist-card" data-bs-toggle="modal"
                   data-bs-target="#locationModal">
                    <div class="specialist-image">
                        <img src="{{ asset('frontend/b.jpg') }}"
                             alt="Rajshahi Court">

                        <div class="specialist-overlay">
                            <h6>Rajshahi Court</h6>
                        </div>
                    </div>
                </a>
            </div>


            <!-- Card 3 -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                <a href="#" class="specialist-card" data-bs-toggle="modal"
                   data-bs-target="#locationModal">
                    <div class="specialist-image">
                        <img src="{{ asset('frontend/c.jpg') }}"
                             alt="Barisal Court">

                        <div class="specialist-overlay">
                            <h6>Barisal Court</h6>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                <a href="#" class="specialist-card" data-bs-toggle="modal"
                   data-bs-target="#locationModal">
                    <div class="specialist-image">
                        <img src="{{ asset('frontend/a.jpg') }}"
                             alt="Mymenshing Court">

                        <div class="specialist-overlay">
                            <h6>Mymenshing Court</h6>
                        </div>
                    </div>
                </a>
            </div>


            <!-- Card 2 -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                <a href="#" class="specialist-card" data-bs-toggle="modal"
                   data-bs-target="#locationModal">
                    <div class="specialist-image">
                        <img src="{{ asset('frontend/b.jpg') }}"
                             alt="Comilla Court">

                        <div class="specialist-overlay">
                            <h6>Comilla Court</h6>
                        </div>
                    </div>
                </a>
            </div>


            <!-- Card 3 -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                <a href="#" class="specialist-card" data-bs-toggle="modal"
                   data-bs-target="#locationModal">
                    <div class="specialist-image">
                        <img src="{{ asset('frontend/c.jpg') }}"
                             alt="Dinajpur Court">

                        <div class="specialist-overlay">
                            <h6>Dinajpur Court</h6>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                <a href="#" class="specialist-card" data-bs-toggle="modal"
                   data-bs-target="#locationModal">
                    <div class="specialist-image">
                        <img src="{{ asset('frontend/a.jpg') }}"
                             alt="Gazipur Court">

                        <div class="specialist-overlay">
                            <h6>Gazipur Court</h6>
                        </div>
                    </div>
                </a>
            </div>


            <!-- Card 2 -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                <a href="#" class="specialist-card" data-bs-toggle="modal"
                   data-bs-target="#locationModal">
                    <div class="specialist-image">
                        <img src="{{ asset('frontend/b.jpg') }}"
                             alt="Chitagang Court">

                        <div class="specialist-overlay">
                            <h6>Chitagang Court</h6>
                        </div>
                    </div>
                </a>
            </div>


            <!-- Card 3 -->
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                <a href="#" class="specialist-card" data-bs-toggle="modal"
                   data-bs-target="#locationModal">
                    <div class="specialist-image">
                        <img src="{{ asset('frontend/c.jpg') }}"
                             alt="Faridpur Court">

                        <div class="specialist-overlay">
                            <h6>Faridpur Court</h6>
                        </div>
                    </div>
                </a>
            </div>

        </div>

    </div>
</section>

<!-- =========================================================
     FIRST MODAL
========================================================= -->

<div class="modal fade provider-type-modal"
     id="locationModal"
     tabindex="-1"
     aria-labelledby="locationModalLabel"
     aria-hidden="true">

    <div class="modal-dialog provider-modal-dialog modal-sm">

        <div class="modal-content provider-modal-content">

            <!-- CLOSE BUTTON -->
            <button type="button"
                    class="provider-modal-close"
                    data-bs-dismiss="modal"
                    aria-label="Close">

                <i class="bi bi-x-lg"></i>

            </button>


            <div class="modal-body provider-modal-body">

                <!-- TITLE -->
                <h4 class="provider-modal-title"
                    id="locationModalLabel">

                    Find property law expert

                </h4>


                <!-- SUBTITLE -->
                <p class="provider-modal-subtitle">

                    Select provider type

                </p>


                <!-- PROVIDER TYPE BUTTONS -->
                <div class="provider-type-grid">


                    <!-- ADVOCATE -->

                    <button type="button"
                            class="provider-type-btn"
                            data-provider-type="advocate"
                            data-bs-toggle="modal"
                            data-bs-target="#practiceAreaSelectionModal"
                            data-bs-dismiss="modal">

                        Advocate

                    </button>


                    <!-- BARRISTER -->

                    <button type="button"
                            class="provider-type-btn"
                            data-provider-type="barrister"
                            data-bs-toggle="modal"
                            data-bs-target="#practiceAreaSelectionModal"
                            data-bs-dismiss="modal">

                        Barrister

                    </button>


                    <!-- LAW FIRM -->

                    <button type="button"
                            class="provider-type-btn"
                            data-provider-type="law-firm"
                            data-bs-toggle="modal"
                            data-bs-target="#practiceAreaSelectionModal"
                            data-bs-dismiss="modal">

                        Law firm

                    </button>


                    <!-- LEGAL CONSULTANTS -->

                    <button type="button"
                            class="provider-type-btn"
                            data-provider-type="legal-consultant"
                            data-bs-toggle="modal"
                            data-bs-target="#practiceAreaSelectionModal"
                            data-bs-dismiss="modal">

                        Legal consultants

                    </button>


                </div>

            </div>

        </div>

    </div>

</div>

<!-- =========================================================
     SECOND MODAL
========================================================= -->

<div class="modal fade practice-area-modal"
     id="practiceAreaSelectionModal"
     tabindex="-1"
     aria-labelledby="practiceAreaSelectionModalLabel"
     aria-hidden="true">

    <div class="modal-dialog practice-area-modal-dialog">

        <div class="modal-content practice-area-modal-content">

            <!-- CLOSE BUTTON -->
            <button type="button"
                    class="practice-area-close"
                    data-bs-dismiss="modal"
                    aria-label="Close">

                <i class="bi bi-x-lg"></i>

            </button>


            <div class="modal-body practice-area-modal-body">

                <!-- TITLE -->
                <h4 class="practice-area-title"
                    id="practiceAreaSelectionModalLabel">

                    Practice Area in Dhaka <br>

                    <span style="font-size:13px">
                        Select Any Practice Areay
                    </span>

                </h4>


                <!-- PRACTICE AREA GRID -->
                <div class="practice-area-grid">

                    <a href="{{route('our.practice-area-wise-list')}}" 
                            class="practice-area-option"
                            data-practice-area="Criminal Law">
                        TANJIB ALAM & ASSOCIATES
                    </a>


                    <a href="{{route('our.practice-area-wise-list')}}" 
                            class="practice-area-option"
                            data-practice-area="Civil Law">
                        Doulah & Doulah
                    </a>


                    <a href="{{route('our.practice-area-wise-list')}}" 
                            class="practice-area-option"
                            data-practice-area="Family Law">
                        Mahbub & Company
                    </a>


                    <a href="{{route('our.practice-area-wise-list')}}" 
                            class="practice-area-option"
                            data-practice-area="Land & Property Law">
                        The Law Counsel
                    </a>


                    <a href="{{route('our.practice-area-wise-list')}}" 
                            class="practice-area-option"
                            data-practice-area="Corporate & Business Law">
                        Accord Chambers
                    </a>


                    <a href="{{route('our.practice-area-wise-list')}}" 
                            class="practice-area-option"
                            data-practice-area="Banking & Finance Law">
                        Rahman & Rabbi Legal
                    </a>


                    <a href="{{route('our.practice-area-wise-list')}}" 
                            class="practice-area-option"
                            data-practice-area="Criminal Law">
                        TANJIB ALAM & ASSOCIATES
                    </a>


                    <a href="{{route('our.practice-area-wise-list')}}" 
                            class="practice-area-option"
                            data-practice-area="Civil Law">
                        Doulah & Doulah
                    </a>


                    <a href="{{route('our.practice-area-wise-list')}}" 
                            class="practice-area-option"
                            data-practice-area="Family Law">
                        Mahbub & Company
                    </a>


                    <a href="{{route('our.practice-area-wise-list')}}" 
                            class="practice-area-option"
                            data-practice-area="Land & Property Law">
                        The Law Counsel
                    </a>


                    <a href="{{route('our.practice-area-wise-list')}}" 
                            class="practice-area-option"
                            data-practice-area="Corporate & Business Law">
                        Accord Chambers
                    </a>


                    <a href="{{route('our.practice-area-wise-list')}}" 
                            class="practice-area-option"
                            data-practice-area="Banking & Finance Law">
                        Rahman & Rabbi Legal
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

<script>

document.addEventListener('DOMContentLoaded', function () {

    let selectedProviderType = '';

    /*
    |--------------------------------------------------------------------------
    | Provider Type
    |--------------------------------------------------------------------------
    */

    document.querySelectorAll(
        '#locationModal .provider-type-btn'
    ).forEach(function (button) {

        button.addEventListener('click', function () {

            selectedProviderType =
                this.getAttribute('data-provider-type');

            console.log(
                'Selected Provider:',
                selectedProviderType
            );

        });

    });


    /*
    |--------------------------------------------------------------------------
    | Practice Area
    |--------------------------------------------------------------------------
    */

    document.querySelectorAll(
        '#practiceAreaSelectionModal .practice-area-option'
    ).forEach(function (button) {

        button.addEventListener('click', function () {

            const practiceArea =
                this.getAttribute('data-practice-area');

            console.log(
                'Selected Provider:',
                selectedProviderType
            );

            console.log(
                'Selected Practice Area:',
                practiceArea
            );

        });

    });

});

</script>