<div class="card-body">
    <div class="row">
        <div class="col-md-8 col-xs-6">
            <table>
              <tr>
                <td><strong style="font-size:25px">{{@$details->name}} - {{@$details->name_bn}}</strong> </td>
              </tr>
              <tr>
                <td style="font-size: 18px"><strong>{{ @$details['designation']['name'] }}</strong></td>
              </tr>
              <tr>
                <td>{{@$details->present_address}}</td>
              </tr>
              <tr>
                <td><strong>Mobile No :</strong> {{@$details->mobile}}</td>
              </tr>
              <tr>
                <td><strong>Email :</strong> {{@$details->email}}</td>
              </tr>
            </table>
        </div>
        <div class="col-md-4 col-xs-6">
            <div class="profile-sidebar">
              <div class="profile-userpic text-center">
                <img src="{{(!empty(@$details->image))?url('uploads/advocates_images/'.@$details->image):url('uploads/no_image.png')}}" class="img-responsive" alt="">
              </div>
            </div>
        </div>
        <div class="col-md-12">
            <a href="{{route('advocates.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='statement')?'btn_active':''}}" title="Statement"> Details</a>
            <a href="{{route('advocates.official.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='official')?'btn_active':''}}" title="Basic">Basic</a>
            <a href="{{route('advocates.abouts.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='abouts')?'btn_active':''}}" title="Abouts"> Abouts</a>
            <a href="{{route('advocates.engagement.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='engagement')?'btn_active':''}}" title="Engagement"> Court of Practice</a>
            <a href="{{route('advocates.membership.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='membership')?'btn_active':''}}" title="Membership"> Membership</a>
            <a href="{{route('advocates.training.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='training')?'btn_active':''}}" title="Training/Certificate"> Training</a>
            <a href="{{route('advocates.education.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='education')?'btn_active':''}}" title="Qualification"> Qualification</a>
            <a href="{{route('advocates.chamber.details',@$details->id)}}" class="btn btn-primary btn-sm {{(@$page_title=='chamber')?'btn_active':''}}" title="Chamber"> Chamber</a>
            <a href="{{ route('advocates.office-hour.details', @$details->id) }}" class="btn btn-primary btn-sm {{ (@$page_title == 'office-hour') ? 'btn_active' : '' }}" title="Office Hour">Office Hour</a>
            <a href="{{ route('advocates.map.details', @$details->id) }}" class="btn btn-primary btn-sm {{ (@$page_title == 'map') ? 'btn_active' : '' }}" title="Map"> Google Map</a>
            <a href="{{ route('advocates.gallery.details', @$details->id) }}" class="btn btn-primary btn-sm {{ (@$page_title == 'gallery') ? 'btn_active' : '' }}" title="gallery"> Photo gallery</a>
        </div>
    </div>
</div>