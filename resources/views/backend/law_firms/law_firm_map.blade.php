@extends('backend.layouts.master')
@section('content')
<div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Law Firm Details <a href="{{ route('law-firms.view') }}" class="btn btn-success float-right btn-sm"><i class="fa fa-list"></i> Law Firm List</a></h3>
        </div>
        <div class="card-body">
            
            <!-- ফার্মের বেসিক ইনফরমেশন -->
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
                <form method="post" action="{{route('law-firms.map.store', $details->id)}}" id="form_map">
                    @csrf
                    <div class="form-group">
                        <label for="map">Location & Map (Iframe)</label>
                        <!-- এখানে CKEditor এর class সরিয়ে সাধারণ form-control দেওয়া হলো -->
                        <textarea name="map" id="map" class="form-control" rows="5">{!! @$details->map !!}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Update Map</button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection