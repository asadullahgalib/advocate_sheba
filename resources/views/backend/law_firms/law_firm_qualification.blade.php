@extends('backend.layouts.master')
@section('content')
<div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Law Firm Details
                <a href="{{ route('law-firms.view') }}" class="btn btn-success float-right btn-sm"><i class="fa fa-list"></i> Law Firm List</a>
            </h3>
        </div>

        <div class="card-body">

            @include('backend.law_firms.law_firm_header')

            <!-- ট্যাব কন্টেন্ট -->
            <div class="mt-4">
                <form method="post" action="{{route('law-firms.qualification.store', $details->id)}}" id="form_qualification">
                    @csrf
                    <div class="form-group">
                        <label for="qualification">Education & Qualification</label>
                        <textarea name="qualification" id="qualification" class="form-control" rows="5">{!! @$details->qualification !!}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Update Qualification</button>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- CKEditor -->
<script type="text/javascript">
  $(document).ready(function(){
    var editor2 = CKEDITOR.replace('qualification');
    CKFinder.setupCKEditor(editor2, '/ckfinder/');
    editor2.on('change', function() { editor2.updateElement(); });
  });
</script>
@endsection