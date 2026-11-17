@extends('backend.layouts.master')
@section('content')

<div class="col-md-12" style="padding-top:40px;">

    <div class="card">

        <div class="card-header">

            <h3 class="card-title">

                @if(isset($editData))
                    Update Philosophy
                @else
                    Add New Philosophy
                @endif

                <a class="btn btn-success float-right btn-sm custom_btn"
                   href="{{ route('philosophies.view') }}">

                    <i class="fa fa-list"></i> Philosophy List

                </a>

            </h3>

        </div>


        <div class="card-body">

            <form method="post"
                  action="{{ isset($editData) ? route('philosophies.update', $editData->id) : route('philosophies.store') }}"
                  id="myForm">

                @csrf

                <div class="form-row">

                    <!-- Philosophy Title -->
                    <div class="form-group col-md-6">
                        <label for="title">
                            Title
                            <span style="color:red;">*</span>
                        </label>
                        <input
                            type="text"
                            name="title"
                            id="title"
                            class="form-control form-control-sm"
                            value="{{ old('title', @$editData->title) }}"
                            placeholder="Enter Philosophy Title"
                        >
                    </div>

                    <!-- Status -->
                    <div class="form-group col-md-6">
                        <label for="status">
                            Status
                        </label>
                        <select name="status" id="status" class="form-control form-control-sm">
                            <option value="1" {{ old('status', @$editData->status) == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status', @$editData->status) == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <!-- Philosophy Description with CKEditor -->
                    <div class="form-group col-md-12">
                        <label for="description_en">
                            Description
                            <span style="color:red;">*</span>
                        </label>
                        <textarea
                            name="description_en"
                            id="description_en"
                            class="form-control"
                            rows="8"
                            placeholder="Enter Philosophy Description"
                        >{{ old('description_en', @$editData->description_en) }}</textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group col-md-3">
                        <button type="submit" class="btn btn-primary btn-sm">
                            {{ isset($editData) ? 'Update' : 'Submit' }}
                        </button>
                    </div>

                </div>

            </form>

        </div>

    </div>

</div>


<!-- CKEditor Script -->
<script type="text/javascript">
  $(document).ready(function(){
    var editor2 = CKEDITOR.replace('description_en');
    CKFinder.setupCKEditor(editor2, '/ckfinder/');
    
    editor2.on('change', function() {
        editor2.updateElement();
        $('#description_en').valid();
    });
  });
</script>

<!-- jQuery Validation Script -->
<script type="text/javascript">

    $(document).ready(function () {

        $('textarea[name="description_en"]').each(function(){
            $(this).val($(this).val().trim());
        });

        $('#myForm').validate({

            ignore: [],

            rules: {

                title: {
                    required: true,
                },

                description_en: {
                    required: true,
                }

            },

            messages: {

                title: {
                    required: "Please enter the philosophy title",
                },

                description_en: {
                    required: "Please enter the philosophy description",
                }

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