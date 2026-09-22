<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/popular/engine1/style.css" />
<div id="wowslider-container1">
    <div class="ws_images">
        <ul>
            @foreach($sliders as $key => $slider)
            <li>
                <img src="{{asset('uploads/slider_images/'.$slider->image)}}" alt="slide-{{$key}}" title="slide1" id="wows1_0"/>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="ws_bullets">
        <div>
            @foreach($sliders as $key => $slider)
            <a href="#" title="slide1">
                <span><img src="{{asset('uploads/slider_images/'.$slider->image)}}" alt="slide-{{$key}}" style="max-width: 134px;max-height: 48px;">1</span>
            </a>
            @endforeach
        </div>
    </div>
    <div class="ws_shadow"></div>
</div>  
 <!--End hero slider-->
<script type="text/javascript" src="{{asset('frontend')}}/popular/engine1/wowslider.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/popular/engine1/script.js"></script>