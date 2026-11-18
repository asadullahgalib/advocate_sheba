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
<style type="text/css">
  .btn_active{
    background: #F70F9E;
    color: #fff;
    text-decoration: underline !important;
  }
</style>

  <div class="col-md-12" style="padding-top: 40px;">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
            Law Firm Details Info
            <a href="{{ route('law-firms.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Law Firm List</i></a>
        </h3>
      </div>

      <div class="card-body">
        <div class="row">
          <div class="col-md-8 col-xs-6">
            <table>
              <tr>
                <td><strong style="font-size:25px">{{@$details->firm_name}}</strong></td>
              </tr>
              <tr>
                <td><strong>Court:</strong> {{@$details->court_name}}</td>
              </tr>
              <tr>
                <td><strong>Established:</strong> {{@$details->established}}</td>
              </tr>
              <tr>
                <td><strong>Leader:</strong> {{@$details['leader']['name'] ?? 'N/A'}}</td>
              </tr>
            </table>
          </div>
          <div class="col-md-4 col-xs-6">
            <!-- ইমেজ না থাকায় খালি রাখা হলো -->
          </div>
          @include('backend.law_firms.law_firm_tab')
        </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{route('law-firms.abouts.store', $details->id)}}" id="myForm">
            @csrf
            <div class="form-row">
              
              <div class="form-group col-md-12">
                <label for="abouts">Description <span style="color:red;">*</span></label>
                <textarea name="abouts" id="abouts" class="form-control" rows="5">{!! @$details->abouts !!}</textarea>
              </div>
              
              <!-- মাল্টিপল Advocate সিলেক্ট -->
              <div class="form-group col-md-12">
                <label>Add Advocates <span style="color:red;">*</span></label>
                <select name="user_id[]" class="form-control form-control-sm select2" multiple required>
                  @foreach($available_advocates as $advocate)
                  <!-- এখানে চেক করা হচ্ছে, এই ফার্মের বর্তমান মেম্বারদের সিলেক্টেড রাখতে -->
                  <option value="{{ $advocate->id }}" {{ in_array($advocate->id, $current_member_ids) ? 'selected' : '' }}>
                      {{ $advocate->name }} ({{ $advocate->email }})
                  </option>
                  @endforeach
                </select>
              </div>

              <div class="form-group col-md-3">
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- মেম্বার লিস্ট (শুধু দেখানোর জন্য, কোনো ডিলিট বাটন নেই) -->
    <div class="card-body">
        <hr>
        <h5>Existing Members of this Firm</h5>
        <table class="table table-bordered table-sm mt-3">
            <thead>
                <tr class="text-center">
                    <th width="8%">Sl.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                </tr>
            </thead>
            <tbody>
                @forelse($members as $key => $member)
                <tr class="text-center">
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $member->user->name ?? 'N/A' }}</td>
                    <td>{{ $member->user->email ?? 'N/A' }}</td>
                    <td>{{ $member->user->mobile ?? 'N/A' }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">No members added yet.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    </div>
  </div>

<script type="text/javascript">
  $(document).ready(function(){
    var editor2 = CKEDITOR.replace('abouts');
    CKFinder.setupCKEditor(editor2, '/ckfinder/');
    
    editor2.on('change', function() {
        editor2.updateElement();
        $('#myForm').validate().element('#abouts');
    });
  });
</script>

<script type="text/javascript">
    $(document).ready(function () {
      $('textarea[name="abouts"]').each(function(){
          $(this).val($(this).val().trim());
      });

      $('#myForm').validate({
        ignore : [],
        debug : false,
        rules: {
          abouts: {
            required: true,
          }
        },
        messages: {
          abouts: {
            required: "Please enter the description",
          }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
</script>

@endsection