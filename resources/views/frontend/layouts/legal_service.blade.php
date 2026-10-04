<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/legal-service-article.css') }}">

<section class="legal-articles-section" style="background: #f7f8fa;padding: 0px 0px 0px 0px;">

    <div class="container-fluid">

        <div class="flex justify-between items-center mt-2">
          <div class="my-4">
            <h2
              id="hospitals-by-location"
              class="text-lg md:text-xl font-semibold text-gray-800 dark:text-gray-100"
            >
              Legal Services
            </h2>
            <p class="text-sm text-gray-600 dark:text-gray-400">
              Explore Legal Knowledge by Topic
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

        <!-- ============================
             LEGAL TOPICS CARDS
        ============================= -->

        <div class="row legal-topics-row">


            <!-- Criminal Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="legal-topic-card">

                    <div class="topic-icon">
                        <i class="fa-solid fa-handcuffs"></i>
                    </div>

                    <h4>Criminal Law</h4>

                    <p>
                        FIR, arrest, bail, trial,
                        charges and your rights.
                    </p>

                    <a href="{{route('law.details')}}">
                        Explore Articles
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Civil Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="legal-topic-card">

                    <div class="topic-icon">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>

                    <h4>Civil Law</h4>

                    <p>
                        Suits, contracts, property
                        disputes and remedies.
                    </p>

                    <a href="{{route('law.details')}}">
                        Explore Articles
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Family Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="legal-topic-card">

                    <div class="topic-icon">
                        <i class="fa-solid fa-people-roof"></i>
                    </div>

                    <h4>Family Law</h4>

                    <p>
                        Marriage, divorce, custody,
                        maintenance and more.
                    </p>

                    <a href="{{route('law.details')}}">
                        Explore Articles
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Land Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="legal-topic-card">

                    <div class="topic-icon">
                        <i class="fa-solid fa-house"></i>
                    </div>

                    <h4>Land Law</h4>

                    <p>
                        Land documents, mutation,
                        ownership and disputes.
                    </p>

                    <a href="{{route('law.details')}}">
                        Explore Articles
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Labour Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="legal-topic-card">

                    <div class="topic-icon">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>

                    <h4>Labour Law</h4>

                    <p>
                        Employment, wages, work
                        rights and disputes.
                    </p>

                    <a href="{{route('law.details')}}">
                        Explore Articles
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Company & Corporate Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="legal-topic-card">

                    <div class="topic-icon">
                        <i class="fa-solid fa-building"></i>
                    </div>

                    <h4>Company &<br>Corporate Law</h4>

                    <p>
                        Companies Act, compliance,
                        contracts and governance.
                    </p>

                    <a href="{{route('law.details')}}">
                        Explore Articles
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Cyber Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="legal-topic-card">

                    <div class="topic-icon">
                        <i class="fa-solid fa-laptop"></i>
                    </div>

                    <h4>Cyber Law</h4>

                    <p>
                        Cyber crimes, digital rights,
                        data protection and more.
                    </p>

                    <a href="{{route('law.details')}}">
                        Explore Articles
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Consumer Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="legal-topic-card">

                    <div class="topic-icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>

                    <h4>Consumer Law</h4>

                    <p>
                        Consumer rights, unfair
                        practices and legal remedies.
                    </p>

                    <a href="{{route('law.details')}}">
                        Explore Articles
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Tax Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="legal-topic-card">

                    <div class="topic-icon">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </div>

                    <h4>Tax Law</h4>

                    <p>
                        Income tax, VAT, tax
                        planning and compliance.
                    </p>

                    <a href="{{route('law.details')}}">
                        Explore Articles
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>


            <!-- Islamic Law -->

            <div class="col-xl-5-custom col-lg-4 col-md-4 col-sm-6 col-6">

                <div class="legal-topic-card">

                    <div class="topic-icon">
                        <i class="fa-solid fa-mosque"></i>
                    </div>

                    <h4>Islamic Law</h4>

                    <p>
                        Islamic inheritance, Waqf,
                        marriage and other matters.
                    </p>

                    <a href="{{route('law.details')}}">
                        Explore Articles
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>


        </div>

    </div>

</section>