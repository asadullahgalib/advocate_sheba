<link rel="stylesheet"
      href="{{ asset('assets/css/legal_information.css') }}">
<section class="legal-directory-section">

    <div class="container mobile_container_for_legal_information">

        <div class="flex justify-between items-center mt-2">
          <div class="my-4">
            <h2
              id="hospitals-by-location"
              class="text-lg md:text-xl font-semibold text-gray-800 dark:text-gray-100"
            >
              Legal Information
            </h2>
            <p class="text-sm text-gray-600 dark:text-gray-400">
              Explore Our Legal Information
            </p>
          </div>
        </div>

        <!-- =====================================
             LEGAL INFORMATION
        ====================================== -->

        <div class="directory-box legal-info-box">

            <div class="row justify-content-center">

                @forelse($legalInformations as $info)

                    @php
                        // icon: Font Awesome class অথবা ছবির লিংক
                        $icon = trim($info->icon ?? '');
                        $isHttp = preg_match('~^https?://~i', $icon);
                        $isImage = $icon != '' && ($isHttp || preg_match('~\.(png|jpe?g|svg|webp|gif)$~i', $icon));
                        $iconUrl = $isHttp ? $icon : asset($icon);
                    @endphp

                    <div class="col-6 col-md-3">

                        <a href="{{ route('legal.information.details', $info->slug) }}" class="directory-card legal-card">

                            <div class="directory-icon">
                                @if($isImage)
                                    <img src="{{ $iconUrl }}" alt="{{ $info->title_en }}" style="max-width:60%;max-height:60%;object-fit:contain;">
                                @else
                                    <i class="{{ $icon != '' ? $icon : 'fa-solid fa-book' }}"></i>
                                @endif
                            </div>

                            <h3>
                                {{ $info->title_en }}
                            </h3>

                            <p>
                                {{ \Illuminate\Support\Str::limit(trim(strip_tags($info->description_en)), 60) }}
                            </p>

                            <div class="card-bottom">
                                <span>View Details</span>
                                <i class="fa fa-chevron-right"></i>
                            </div>

                        </a>

                    </div>

                @empty

                    <div class="col-12 text-center py-4">
                        <p>No legal information available right now.</p>
                    </div>

                @endforelse

            </div>

        </div>

    </div>

</section>