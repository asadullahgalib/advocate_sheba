@extends('frontend.layouts.master')
@section('content')
<main class="main" style="background-color: #f5f5f5;border-radius: 15px;padding-bottom: 10px;">
    <div class="page-content mb-50">
        <div class="container">
            <div class="archive-header-2" style="padding: 20px 0px 0px 0px;">
                <h1 class="display-2 mb-50 text-brand" style="font-size: 25px;text-align: center; margin-bottom: 30px !important;">News Details</h1>
            </div>
            <div class="row">
                <div class="col-xl-11 col-lg-12 m-auto">
                    <div class="row">
                        <div class="col-lg-9">
                            <img src="{{asset('public/upload/news_images/'.@$news->image)}}" alt="Shastho Plus" style="border-radius: 15px;width: 100%;">
                            <p>
                                <i class="fa fa-calendar"></i> {{date('d-m-Y',strtotime(@$news->date))}}
                            </p>
                            <d style="text-align: justify;">
                                <?php echo @$news->editor1; ?>
                            </d>
                        </div>
                        <div class="col-lg-3 primary-sidebar sticky-sidebar pt-50">
                            <div class="widget-area" style="background-color: #fff !important;border-radius: 15px !important;">
                                <div class="sidebar-widget widget-category-2 mb-50">
                                    <h5 class="section-title style-1 mb-30" style="color:#1B489D">Recent News</h5>
                                    <ul>
                                        @foreach($news_events as $news)
                                        <li>
                                            <a href="{{route('our.news.details',$news->id)}}"> <img src="{{ asset('public/upload/news_images/'.$news->image) }}">{{$news->title}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection