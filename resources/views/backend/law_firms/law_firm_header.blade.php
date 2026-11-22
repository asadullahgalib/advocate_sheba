<style type="text/css">
  .profile-userpic img {
    float: none;
    margin: 0 auto;
    width: 120px;
    height: 130px;
    background-color: #ddd;
    padding: 3px;
  }
</style>

<div class="row mb-4">

    <!-- ফার্মের বেসিক ইনফরমেশন -->
    <div class="col-md-8 col-xs-6">
        <table>
            <tr>
                <td><strong style="font-size:25px">{{ @$details->firm_name }}</strong></td>
            </tr>
            <tr>
                <td><strong>Led by:</strong> {{ @$details->leader->name ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td><strong>Court:</strong> {{ @$details->court_name ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td><strong>Established:</strong> {{ @$details->established ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td><strong>Head Advocate Enrollment No:</strong> {{ @$details->enrollment_no ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td><strong>Bar Association:</strong> {{ @$details->bar_association ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td><strong>Team:</strong> {{ isset($details->team_size) ? $details->team_size . ' Lawyers' : 'N/A' }}</td>
            </tr>
        </table>
    </div>

    <!-- ছবি -->
    <div class="col-md-4 col-xs-6">
        <div class="profile-sidebar">
            <div class="profile-userpic text-center">
                <img src="{{ (!empty(@$details->image)) ? url('uploads/law_firm_images/'.@$details->image) : url('uploads/no_image.png') }}" class="img-responsive" alt="">
            </div>
        </div>
    </div>

    <!-- ট্যাব মেনু -->
    @include('backend.law_firms.law_firm_tab')

</div>