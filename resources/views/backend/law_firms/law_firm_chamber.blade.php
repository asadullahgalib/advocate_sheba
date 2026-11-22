@extends('backend.layouts.master')
@section('content')
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

<div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Law Firm Details <a href="{{ route('law-firms.view') }}" class="btn btn-success float-right btn-sm"><i class="fa fa-list"></i> Law Firm List</a></h3>
        </div>
        <div class="card-body">

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

            <!-- ট্যাব কন্টেন্ট -->
            <div class="mt-4">
                <form method="post" action="{{ route('law-firms.chamber.store', $details->id) }}" id="form_chamber">
                    @csrf
                    <div class="form-group">
                        <label for="chamber">Chamber & Office</label>
                        <textarea name="chamber" id="chamber" class="form-control" rows="5">{!! @$details->chamber !!}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Update Chamber</button>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- CKEditor -->
<script type="text/javascript">
  $(document).ready(function(){
    var editor2 = CKEDITOR.replace('chamber');
    CKFinder.setupCKEditor(editor2, '/ckfinder/');
    editor2.on('change', function() { editor2.updateElement(); });
  });
</script>
@endsection