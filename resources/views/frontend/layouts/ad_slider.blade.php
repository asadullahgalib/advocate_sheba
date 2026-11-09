@php
  $items = isset($adds[$position]) ? $adds[$position] : collect();
  $uid = $position.'_'.uniqid();
@endphp

@if($items->count() > 0)
<div id="ad_slider_{{ $uid }}" class="carousel slide" data-bs-ride="carousel">

  @if($items->count() > 1)
  <div class="carousel-indicators">
    @foreach($items as $key => $item)
      <button type="button" data-bs-target="#ad_slider_{{ $uid }}" data-bs-slide-to="{{ $key }}" class="{{ $loop->first ? 'active' : '' }}"></button>
    @endforeach
  </div>
  @endif

  <div class="carousel-inner">
    @foreach($items as $item)
      <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
        @if(!empty($item->link))
          <a href="{{ $item->link }}" target="_blank" rel="noopener noreferrer">
            <img src="{{ url('uploads/adds_images/'.$item->image) }}" alt="{{ $item->title }}" class="d-block w-100">
          </a>
        @else
          <img src="{{ url('uploads/adds_images/'.$item->image) }}" alt="{{ $item->title }}" class="d-block w-100">
        @endif
      </div>
    @endforeach
  </div>

  @if($items->count() > 1)
  <button class="carousel-control-prev" type="button" data-bs-target="#ad_slider_{{ $uid }}" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#ad_slider_{{ $uid }}" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
  @endif
</div>
@endif