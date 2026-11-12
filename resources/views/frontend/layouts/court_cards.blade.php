<!-- =====================================
     COURT DIRECTORY (Dynamic)
====================================== -->

<div class="directory-box court-directory-box">

    <div class="row justify-content-center">

        @php
            // ডাটাবেস থেকে কোর্টের ডাটা আনছি (সর্বোচ্চ ৪টা)
            $courts = \App\Model\Court::where('status', 1)->take(4)->get();
        @endphp

        @foreach($courts as $court)
        <div class="col-6 col-md-3">

            <a href="{{ route('court.details', $court->slug ?? $court->id) }}" class="directory-card court-card directory-card2">

                <div class="directory-icon">
                    <i class="{{ $court->icon ?? 'fa fa-bank' }}"></i>
                </div>

                <h3>
                    {!! str_replace(' ', '<br>', $court->name) !!}
                </h3>

                <div class="title-line"></div>

                <div class="card-bottom">
                    <span>View Details</span>
                    <i class="fa fa-chevron-right"></i>
                </div>

            </a>

        </div>
        @endforeach

    </div>

</div>