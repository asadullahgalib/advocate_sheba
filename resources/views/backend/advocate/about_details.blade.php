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
            Legal Professional Details Info
            <a href="{{ route('advocates.view') }}" class="btn btn-success float-right btn-sm custom_btn"><i class="fa fa-list"> Legal Professional List</i></a>
        </h3>
      </div>

      @include('backend.advocate.advocate_tab')
      
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{route('advocates.about.details.store',$details->id)}}" id="myForm">
            @csrf
            <div class="form-row">
              
              <div class="form-group col-md-12">
                <label for="abouts">Description <span style="color:red;">*</span></label>
                <textarea name="abouts" id="abouts" class="form-control" rows="5">{!! @$details->abouts !!}</textarea>
              </div>
              
              <div class="form-group col-md-12">
                <label>Laws <span style="color:red;">*</span></label>
                <select name="law_id[]" class="form-control form-control-sm select2" multiple required>
                  @foreach($laws as $law)
                  <option value="{{ $law->id }}" {{ in_array($law->id, $law_array) ? 'selected' : '' }}>
                      {{ $law->title_en }}
                  </option>
                  @endforeach
                </select>
              </div>

              <!-- Practice Areas -->
              <div class="form-group col-md-12">
                <label>Practice Areas <span style="color:red;">*</span></label>
                <select name="practice_id[]" class="form-control form-control-sm select2" multiple required>
                  @foreach($practice_areas as $practice)
                  <option value="{{ $practice->id }}" {{ in_array($practice->id, $practice_array) ? 'selected' : '' }}>
                      {{ $practice->name }}
                  </option>
                  @endforeach
                </select>
              </div>

              <!-- Courts -->
              <div class="form-group col-md-12">
                <label>Courts <span style="color:red;">*</span></label>
                <select name="court_id[]" class="form-control form-control-sm select2" multiple required>
                  @foreach($courts as $court)
                  <option value="{{ $court->id }}" {{ in_array($court->id, $court_array) ? 'selected' : '' }}>
                      {{ $court->name }}
                  </option>
                  @endforeach
                </select>
              </div>

              <!-- Locations / Districts -->
              <div class="form-group col-md-12">
                <label>Locations <span style="color:red;">*</span></label>
                <select name="district_id[]" class="form-control form-control-sm select2" multiple required>
                  @foreach($districts as $district)
                  <option value="{{ $district->id }}" {{ in_array($district->id, $district_array) ? 'selected' : '' }}>
                      {{ $district->name }}
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

    </div>
  </div>

<script type="text/javascript">
    $(document).ready(function(){

        CKEDITOR.dtd.$removeEmpty['i'] = false;

        var editor2 = CKEDITOR.replace('abouts', {
            allowedContent: true,
            fillEmptyBlocks: false,
            basicEntities: false
        });

        CKFinder.setupCKEditor(editor2, '/ckfinder/');

        editor2.on('change', function() {
            editor2.updateElement();
            $('#myForm').validate().element('#abouts');
        });

        $('#myForm').on('submit', function() {
            editor2.updateElement();
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

<!-- select করা অপশন list থেকে লুকানো (select2 এর সব ভার্সনের জন্য) -->
<style type="text/css">
    .select2-results__option[aria-selected=true],
    .select2-results__option--selected,
    .select2-results__option[data-selected=true] {
        display: none !important;
    }
</style>

<script type="text/javascript">
    $(window).on('load', function () {

        // dropdown-এ কিছু বাকি না থাকলে "No more options" দেখানো
        function refreshMessage() {
            var $options = $('.select2-results__options');
            if (!$options.length) { return; }

            $options.find('.no-more-option').remove();

            var visible = 0;
            $options.children('.select2-results__option').each(function () {
                var $li = $(this);
                if ($li.hasClass('no-more-option') || $li.hasClass('select2-results__message')) { return; }

                var isSelected = $li.attr('aria-selected') === 'true'
                              || $li.hasClass('select2-results__option--selected')
                              || $li.attr('data-selected') === 'true';
                if (!isSelected) { visible++; }
            });

            if (visible === 0 && $options.find('.select2-results__message').length === 0) {
                $options.append('<li class="select2-results__option no-more-option" style="color:#999; padding:6px;">No more options</li>');
            }
        }

        $('.select2').each(function () {
            var $el = $(this);

            // master layout-এ আগে থেকে চালু থাকলে বন্ধ করে নতুন করে চালু
            if ($el.hasClass('select2-hidden-accessible')) {
                $el.select2('destroy');
            }

            $el.select2({
                width: '100%',
                closeOnSelect: false
            });

            $el.on('select2:open select2:select select2:unselect', function () {
                setTimeout(refreshMessage, 0);
                setTimeout(refreshMessage, 50);
            });
        });
    });
</script>

@endsection