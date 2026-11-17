@extends('backend.layouts.master')
@section('content')
<div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Law Firm Details <a href="{{ route('law-firms.view') }}" class="btn btn-success float-right btn-sm"><i class="fa fa-list"></i> List</a></h3>
        </div>
        <div class="card-body">
            @include('backend.law_firms.law_firm_tab')
            <div class="mt-3">
                <form method="post" action="{{route('law-firms.chamber.store', $details->id)}}" id="form_chamber">
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