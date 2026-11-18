@extends('backend.layouts.master')
@section('content')

<style type="text/css">
  .btn_active{
    background: #F70F9E !important;
    color: #fff !important;
    text-decoration: underline !important;
    border: 1px solid #F70F9E !important;
  }
</style>

<div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Law Firm Details
                <a href="{{ route('law-firms.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Law Firm List</i></a>
            </h3>
        </div>

        <div class="card-body">
            
            <!-- ফার্মের বেসিক ইনফরমেশন (আইডি চেনার জন্য) -->
            <div class="row mb-4">
                <div class="col-md-12">
                    <table>
                        <tr>
                            <td><strong style="font-size:25px">{{ @$details->firm_name }}</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Leader:</strong> {{ @$details['leader']['name'] ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Court:</strong> {{ @$details->court_name ?? 'N/A' }}</td>
                        </tr>
                        <tr>
                            <td><strong>Established:</strong> {{ @$details->established ?? 'N/A' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- ট্যাব মেনু -->
            @include('backend.law_firms.law_firm_tab')

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