@extends('backend.layouts.master')
@section('content')

<div class="col-md-12" style="padding-top:40px;">

    <div class="card">

        <div class="card-header">

            <h3 class="card-title">

                @if(isset($editData))
                    Update Law
                @else
                    Add New Law
                @endif

                <a class="btn btn-success float-right btn-sm custom_btn"
                   href="{{ route('laws.view') }}">

                    <i class="fa fa-list"></i> Laws List

                </a>

            </h3>

        </div>


        <div class="card-body">

            <form method="post"
                  action="{{ isset($editData) ? route('laws.update', $editData->id) : route('laws.store') }}"
                  id="myForm">

                @csrf

                <div class="form-row">

                    <!-- Law Title -->
                    <div class="form-group col-md-12">
                        <label for="title_en">
                            Title
                            <span style="color:red;">*</span>
                        </label>
                        <input
                            type="text"
                            name="title_en"
                            id="title_en"
                            class="form-control form-control-sm"
                            value="{{ old('title_en', @$editData->title_en) }}"
                            placeholder="Enter Law Title"
                        >
                    </div>

                    <!-- Law Description -->
                    <div class="form-group col-md-12">
                        <label for="description_en">
                            Subtitle
                            <span style="color:red;">*</span>
                        </label>
                        <textarea
                            name="description_en"
                            id="description_en"
                            class="form-control form-control-sm"
                            rows="8"
                            placeholder="Enter Law Description"
                        >{{ old('description_en', @$editData->description_en) }}</textarea>
                    </div>

                    <!-- Meta Title -->
                    <div class="form-group col-md-12">
                        <label for="meta_title">
                            Meta Title <span style="color:red;">*</span>
                        </label>
                        <input
                            type="text"
                            name="meta_title"
                            id="meta_title"
                            class="form-control form-control-sm"
                            value="{{ old('meta_title', @$editData->meta_title) }}"
                            placeholder="Enter Meta Title"
                        >
                    </div>

                    <!-- Meta Description -->
                    <div class="form-group col-md-12">
                        <label for="meta_description">
                            Meta Description <span style="color:red;">*</span>
                        </label>
                        <textarea
                            name="meta_description"
                            id="meta_description"
                            class="form-control"
                            rows="4"
                            placeholder="Enter Meta Description"
                        >{{ old('meta_description', @$editData->meta_description) }}</textarea>
                    </div>

                    <!-- Meta Keyword -->
                    <div class="form-group col-md-12">
                        <label for="meta_keyword">
                            Meta Keyword <span style="color:red;">*</span>
                        </label>
                        <textarea
                            name="meta_keyword"
                            id="meta_keyword"
                            class="form-control"
                            rows="4"
                            placeholder="Enter Meta Keywords"
                        >{{ old('meta_keyword', @$editData->meta_keyword) }}</textarea>
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


<!-- Form Validation -->
<script type="text/javascript">

    $(document).ready(function () {

        $('#myForm').validate({

            ignore: [],

            rules: {

                title_en: {
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

                title_en: {
                    required: "Please enter the law title",
                },

                description_en: {
                    required: "Please enter the law description",
                },

                meta_title: {
                    required: "Please enter the meta title",
                },

                meta_description: {
                    required: "Please enter the meta description",
                },

                meta_keyword: {
                    required: "Please enter the meta keywords",
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
