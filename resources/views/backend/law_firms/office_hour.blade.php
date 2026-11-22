@extends('backend.layouts.master')
@section('content')
<div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Law Firm Details 
                <a href="{{ route('law-firms.view') }}" class="btn btn-success float-right btn-sm">
                    <i class="fa fa-list"></i> Law Firm List
                </a>
            </h3>
        </div>

        <div class="card-body">

            @include('backend.law_firms.law_firm_header')

            <!-- Office Hour Content -->
            <div class="mt-4">
                <form method="post"
                      action="{{ route('law-firms.office-hour.store', $details->id) }}"
                      id="form_office_hour">

                    @csrf

                    <div class="form-group">
                        <label for="office_hour">Office Hour</label>

                        <textarea name="office_hour"
                                  id="office_hour"
                                  class="form-control"
                                  rows="5">{!! @$details->office_hour !!}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">
                        Update Office Hour
                    </button>

                </form>
            </div>

        </div>
    </div>
</div>

<!-- CKEditor -->
<script type="text/javascript">
    $(document).ready(function(){
        var editor2 = CKEDITOR.replace('office_hour');
        CKFinder.setupCKEditor(editor2, '/ckfinder/');
        editor2.on('change', function() {
            editor2.updateElement();
        });
    });
</script>

@endsection