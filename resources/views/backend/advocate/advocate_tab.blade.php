<div class="col-md-12">
    <a href="{{route('advocates.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='statement')?'btn_active':''}}" title="Statement"> Details</a>
    <a href="{{route('advocates.official.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='official')?'btn_active':''}}" title="Official">Official</a>
    <a href="{{route('advocates.abouts.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='abouts')?'btn_active':''}}" title="Abouts"> Abouts</a>
    <a href="{{route('advocates.education.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='education')?'btn_active':''}}" title="Qualification"> Qualification</a>
    <a href="{{route('advocates.training.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='training')?'btn_active':''}}" title="Training/Certificate"> Training</a>
    <a href="{{route('advocates.membership.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='membership')?'btn_active':''}}" title="Membership"> Membership</a>
    <a href="{{route('advocates.engagement.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='engagement')?'btn_active':''}}" title="Engagement"> Social Engagement</a>
    <a href="{{route('advocates.chamber.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='chamber')?'btn_active':''}}" title="Chamber"> Chamber</a>
    <a href="{{route('advocates.map.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='map')?'btn_active':''}}" title="Map"> Google Map</a>
</div>