<style type="text/css">
  .btn_active {
    background: #F70F9E !important;
    color: #fff !important;
    text-decoration: underline !important;
    border: 1px solid #F70F9E !important;
  }
</style>

<div class="col-md-12 mb-3">
    <a href="{{route('law-firms.details', @$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='details')?'btn_active':''}}" title="Details"> Details</a>
    <a href="{{route('law-firms.official', @$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='official')?'btn_active':''}}" title="Official"> Official</a>
    <a href="{{route('law-firms.abouts', @$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='abouts')?'btn_active':''}}" title="Abouts"> Abouts</a>
    <a href="{{route('law-firms.qualification', @$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='qualification')?'btn_active':''}}" title="Qualification"> Qualification</a>
    <a href="{{route('law-firms.training', @$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='training')?'btn_active':''}}" title="Training"> Training</a>
    <a href="{{route('law-firms.membership', @$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='membership')?'btn_active':''}}" title="Membership"> Membership</a>
    <a href="{{route('law-firms.social', @$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='social')?'btn_active':''}}" title="Social"> Courts of Practice</a>
    <a href="{{route('law-firms.chamber', @$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='chamber')?'btn_active':''}}" title="Chamber"> Chamber</a>
    <a href="{{route('law-firms.map', @$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='map')?'btn_active':''}}" title="Map"> Google Map</a>
    <a href="{{ route('law-firms.gallery.details', @$details->id) }}" class="btn btn-primary btn-sm {{(@$page_title=='gallery')?'btn_active':''}}" title="Gallery"> Photo Gallery</a>
    <a href="{{route('law-firms.office-hour', @$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='office-hour')?'btn_active':''}}" title="Office Hour"> Office Hour</a>
</div>