<link rel="stylesheet"
      href="{{ asset('assets/css/legal_information.css') }}">
<section class="legal-directory-section" style="margin-bottom:15px;">

    <div class="container mobile_container_for_legal_information">

        <div class="flex justify-between items-center mt-2">
          <div class="my-4">
            <h2
              id="hospitals-by-location"
              class="text-lg md:text-xl font-semibold text-gray-800 dark:text-gray-100"
            >
              Court & Jurisdictions
            </h2>
            <p class="text-sm text-gray-600 dark:text-gray-400">
              Explore Court & Jurisdictions
            </p>
          </div>
        </div>

        <!-- =====================================
             COURT DIRECTORY
        ====================================== -->

        <div class="directory-box court-directory-box">

            <div class="row justify-content-center">

                <!-- Card 1 -->
                <div class="col-6 col-md-3">

                    <a href="{{route('supreme.court')}}" class="directory-card court-card directory-card2">

                        <div class="directory-icon">
                            <i class="fa fa-bank"></i>
                        </div>

                        <h3>
                            Supreme<br>
                            Court
                        </h3>

                        <div class="title-line"></div>

                        <div class="card-bottom">
                            <span>View Details</span>
                            <i class="fa fa-chevron-right"></i>
                        </div>

                    </a>

                </div>

                <!-- Card 2 -->
                <div class="col-6 col-md-3">

                    <a href="{{route('district.court')}}" class="directory-card court-card directory-card2">

                        <div class="directory-icon">
                            <i class="fa fa-building"></i>
                        </div>

                        <h3>
                            District<br>
                            Courts
                        </h3>

                        <div class="title-line"></div>

                        <div class="card-bottom">
                            <span>View Details</span>
                            <i class="fa fa-chevron-right"></i>
                        </div>

                    </a>

                </div>


                <!-- Card 3 -->
                <div class="col-6 col-md-3">

                    <a href="{{route('tribunals.courts')}}" class="directory-card court-card directory-card2">

                        <div class="directory-icon">
                            <i class="fa fa-calendar-check-o"></i>
                        </div>

                        <h3>
                            Tribunals
                            <br>
                            ....
                        </h3>

                        <div class="title-line"></div>

                        <div class="card-bottom">
                            <span>View Details</span>
                            <i class="fa fa-chevron-right"></i>
                        </div>

                    </a>

                </div>

                <!-- Card 4 -->
                <div class="col-6 col-md-3">

                    <a href="{{route('village.court')}}" class="directory-card court-card directory-card2">

                        <div class="directory-icon">
                            <i class="fa fa-bank"></i>
                        </div>

                        <h3>
                            Village<br>
                            Court
                        </h3>

                        <div class="title-line"></div>

                        <div class="card-bottom">
                            <span>View Details</span>
                            <i class="bi bi-chevron-right"></i>
                        </div>

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>