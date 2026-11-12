<link rel="stylesheet" href="{{ asset('assets/css/legal_information.css') }}">
<section class="legal-directory-section" style="margin-bottom:15px;">

    <div class="container mobile_container_for_legal_information">

        <div class="flex justify-between items-center mt-2">
          <div class="my-4">
            <h2 id="hospitals-by-location" class="text-lg md:text-xl font-semibold text-gray-800 dark:text-gray-100">
              Court & Jurisdictions
            </h2>
            <p class="text-sm text-gray-600 dark:text-gray-400">
              Explore Court & Jurisdictions
            </p>
          </div>
        </div>

        <!-- =====================================
             COURT DIRECTORY (Dynamic)
        ====================================== -->
        
        {{-- এখানে কার্ডগুলো ইনক্লুড হয়ে আসবে --}}
        @include('frontend.layouts.court_cards')

    </div>

</section>