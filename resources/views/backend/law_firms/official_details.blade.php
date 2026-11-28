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
      <h3 class="card-title">
        Law Firm Official Details
        <a href="{{ route('law-firms.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Law Firm List</i></a>
      </h3>
    </div>

    <div class="card-body">
      <div class="row">
        <div class="col-md-8 col-xs-6">
          <table>
            <tr>
              <td><strong style="font-size:25px">{{ @$details->firm_name }}</strong></td>
            </tr>
            <tr>
              <td><strong>Led by :</strong> {{ @$details->leader->name }}</td>
            </tr>
            <tr>
              <td><strong>Court :</strong> {{ @$details->court_name }}</td>
            </tr>
            <tr>
              <td><strong>Established :</strong> {{ @$details->established }}</td>
            </tr>
            <tr>
              <td><strong>Bar Association :</strong> {{ @$details->district->name }}</td>
            </tr>
          </table>
        </div>
        <div class="col-md-4 col-xs-6">
          <div class="profile-sidebar">
            <div class="profile-userpic text-center">
              <img src="{{ (!empty(@$details->image)) ? url('uploads/law_firm_images/'.@$details->image) : url('uploads/no_image.png') }}" class="img-responsive" alt="">
            </div>
          </div>
        </div>
        @include('backend.law_firms.law_firm_tab')
      </div>
    </div>

    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <form role="form" action="{{ route('law-firms.official.store', $details->id) }}" method="POST" enctype="multipart/form-data" id="MyForm">
            @csrf
            <div class="card-body">
              <div class="form-row">

                <div class="form-group col-md-4">
                  <label for="leader_id">Select Leader (Advocate) <span style="color:red">*</span></label>
                  <select name="leader_id" id="leader_id" class="form-control form-control-sm">
                    <option value="">Select Leader</option>
                    @foreach($leaders as $leader)
                      <option value="{{ $leader->id }}" {{ (old('leader_id', @$details->leader_id) == $leader->id) ? 'selected' : '' }}>{{ $leader->name }}</option>
                    @endforeach
                  </select>
                  <font style="color: red">{{ ($errors->has('leader_id')) ? $errors->first('leader_id') : '' }}</font>
                </div>

                <div class="form-group col-md-4">
                  <label for="firm_name">Firm Name <span style="color:red">*</span></label>
                  <input type="text" name="firm_name" class="form-control form-control-sm" placeholder="Firm Name" value="{{ old('firm_name', @$details->firm_name) }}">
                  <font style="color: red">{{ ($errors->has('firm_name')) ? $errors->first('firm_name') : '' }}</font>
                </div>

                <div class="form-group col-md-4">
                  <label for="court_name">Court Name</label>
                  <input type="text" name="court_name" class="form-control form-control-sm" placeholder="Court Name" value="{{ old('court_name', @$details->court_name) }}">
                </div>

                <div class="form-group col-md-4">
                  <label for="established">Established</label>
                  <input type="text" name="established" class="form-control form-control-sm" placeholder="e.g. 2012" value="{{ old('established', @$details->established) }}">
                </div>

                <div class="form-group col-md-4">
                  <label for="enrollment_no">Head Advocate Enrollment No <span style="color:red">*</span></label>
                  <input type="text" name="enrollment_no" class="form-control form-control-sm" placeholder="e.g. BCB-123456" value="{{ old('enrollment_no', @$details->enrollment_no) }}">
                  <font style="color: red">{{ ($errors->has('enrollment_no')) ? $errors->first('enrollment_no') : '' }}</font>
                </div>

                <!-- District Dropdown (Bar Association এর জায়গায়) -->
                <div class="form-group col-md-4">
                  <label for="district_id">Bar Association <span style="color:red">*</span></label>
                  <select name="district_id" id="district_id" class="form-control form-control-sm select2">
                    <option value="">Bar Association</option>
                    @foreach($districts as $district)
                      <option value="{{ $district->id }}" {{ (old('district_id', @$details->district_id) == $district->id) ? 'selected' : '' }}>
                        {{ $district->name }}
                      </option>
                    @endforeach
                  </select>
                  <font style="color: red">{{ ($errors->has('district_id')) ? $errors->first('district_id') : '' }}</font>
                </div>

                <div class="form-group col-md-4">
                  <label for="team_size">Team (Total Lawyers) <span style="color:red">*</span></label>
                  <input type="number" min="0" name="team_size" class="form-control form-control-sm" placeholder="e.g. 6" value="{{ old('team_size', @$details->team_size) }}">
                  <font style="color: red">{{ ($errors->has('team_size')) ? $errors->first('team_size') : '' }}</font>
                </div>

                <div class="form-group col-sm-4">
                  <label>Image <span style="color:red;">(300px X 300px)</span></label>
                  <input type="file" name="image" id="image" class="form-control form-control-sm">
                  <font style="color: red">{{ ($errors->has('image')) ? $errors->first('image') : '' }}</font>
                </div>

                <div class="form-group col-sm-2" style="z-index: 100;">
                  <img id="showImage" src="{{ (!empty($details->image)) ? url('uploads/law_firm_images/'.$details->image) : url('uploads/no_image.png') }}" style="width: 100px; height: 100px; object-fit: cover; border:1px solid #000;" class="form-control">
                </div>

                <div class="form-group col-md-12" style="padding-top: 15px;">
                  <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </div>

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">
  $(document).ready(function () {

    $('#image').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#showImage').attr('src', e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });

    $('#MyForm').validate({
      rules:{
        leader_id:{ required:true },
        firm_name:{ required:true },
        enrollment_no:{ required:true },
        district_id:{ required:true }, // bar_association এর জায়গায়
        team_size:{ required:true, number:true }
      },
      messages: {
        leader_id: { required: "Please select a leader" },
        firm_name: { required: "Please enter firm name" },
        enrollment_no: { required: "Please enter enrollment no" },
        district_id: { required: "Please select a district" }, // bar_association এর জায়গায়
        team_size: { required: "Please enter team size", number: "Please enter a number" }
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element) {
        $(element).removeClass('is-invalid');
      }
    });
  });
</script>
@endsection