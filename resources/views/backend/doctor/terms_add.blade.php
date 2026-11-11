@extends('backend.layouts.master')
@section('content')

<div class="col-md-12" style="padding-top:40px;">
    <div class="card">

        <div class="card-header">
            <h3 class="card-title">
                @if(isset($editData))
                    Update Terms & Conditions
                @else
                    Add Terms & Conditions
                @endif

                <a class="btn btn-success float-right btn-sm custom_btn"
                   href="{{ route('terms.view') }}">
                    <i class="fa fa-list"></i> Terms List
                </a>
            </h3>
        </div>

        <div class="card-body">
            <form method="post"
                  action="{{ (@$editData) ? route('terms.update',$editData->id) : route('terms.store') }}"
                  id="myForm">

                @csrf

                <div class="form-row">

                    {{-- Title --}}
                    <div class="form-group col-md-12">
                        <label>Title <span style="color:red;">*</span></label>
                        <input type="text"
                               name="name"
                               id="name"
                               class="form-control form-control-sm"
                               value="{{ @$editData->name }}"
                               placeholder="Enter Title">
                    </div>

                    {{-- Description --}}
                    <div class="form-group col-md-12">
                        <label for="description_en">
                            Description <span style="color:red;">*</span>
                        </label>
                        <textarea name="description_en"
                                  id="description_en"
                                  class="form-control"
                                  rows="5">{{ @$editData->description_en }}</textarea>
                    </div>

                    {{-- Meta Title --}}
                    <div class="form-group col-md-12">
                        <label for="meta_title">
                            Meta Title <span style="color:red;">*</span>
                        </label>
                        <input type="text"
                               name="meta_title"
                               id="meta_title"
                               class="form-control form-control-sm"
                               value="{{ @$editData->meta_title }}"
                               placeholder="Enter Meta Title">
                    </div>

                    {{-- Meta Description --}}
                    <div class="form-group col-md-12">
                        <label for="meta_description">
                            Meta Description <span style="color:red;">*</span>
                        </label>
                        <textarea name="meta_description"
                                  id="meta_description"
                                  class="form-control"
                                  rows="4"
                                  placeholder="Enter Meta Description">{{ @$editData->meta_description }}</textarea>
                    </div>

                    {{-- Meta Keyword --}}
                    <div class="form-group col-md-12">
                        <label for="meta_keyword">
                            Meta Keyword <span style="color:red;">*</span>
                        </label>
                        <textarea name="meta_keyword"
                                  id="meta_keyword"
                                  class="form-control"
                                  rows="4"
                                  placeholder="Enter Meta Keywords">{{ @$editData->meta_keyword }}</textarea>
                    </div>

                    {{-- Submit Button --}}
                    <div class="form-group col-md-3">
                        <button type="submit" class="btn btn-primary btn-sm">
                            {{ (@$editData) ? "Update" : "Submit" }}
                        </button>
                    </div>

                </div>
            </form>
        </div>

    </div>
</div>


<!-- CKEditor -->
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


<!-- jQuery Validation -->
<script type="text/javascript">
    $(document).ready(function () {

        $('textarea[name="description_en"]').each(function(){
            $(this).val($(this).val().trim());
        });

        $('#myForm').validate({

            ignore: [],
            debug: false,

            rules: {
                name: {
                    required: true,
                },
                description_en: {
                    required: true,
                },
                meta_title: {
                    required: true,
                },
                meta_description: {
                    required: true,
                },
                meta_keyword: {
                    required: true,
                }
            },

            messages: {
                name: {
                    required: "Please enter the title/name",
                },
                description_en: {
                    required: "Please enter the description",
                },
                meta_title: {
                    required: "Please enter the meta title",
                },
                meta_description: {
                    required: "Please enter the meta description",
                },
                meta_keyword: {
                    required: "Please enter the meta keyword",
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
