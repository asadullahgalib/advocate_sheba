
@extends('backend.layouts.master')
@section('content')

<div class="col-md-12" style="padding-top:40px;">

    <div class="card">

        <div class="card-header">

            <h3 class="card-title">

                @if(isset($designations))
                    Update Designation
                @else
                    Add New Designation
                @endif

                <a class="btn btn-success float-right btn-sm custom_btn"
                   href="{{ route('human-resource.hrm.designation.view') }}">

                    <i class="fa fa-list"></i> Designation List

                </a>

            </h3>

        </div>

        <div class="card-body">

            <form method="post"
                  action="{{ isset($designations) ? route('human-resource.hrm.designation.update', $designations->id) : route('human-resource.hrm.designation.store') }}"
                  id="myForm">

                @csrf

                <div class="form-row">

                    {{-- Designation Name --}}
                    <div class="form-group col-md-12">

                        <label for="name">
                            Designation Name
                            <span style="color:red;">*</span>
                        </label>

                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="form-control form-control-sm"
                            value="{{ old('name', @$designations->name) }}"
                            placeholder="Enter Designation Name"
                        >

                    </div>


                    {{-- Designation Title --}}
                    <div class="form-group col-md-6">

                        <label for="title">
                            Designation Title
                            <span style="color:red;">*</span>
                        </label>

                        <input
                            type="text"
                            name="title"
                            id="title"
                            class="form-control form-control-sm"
                            value="{{ old('title', @$designations->title) }}"
                            placeholder="Enter Designation Title"
                        >

                    </div>


                    {{-- Designation Icon --}}
                    <div class="form-group col-md-6">

                        <label for="icon">
                            Designation Icon
                            <span style="color:red;">*</span>
                        </label>

                        <input
                            type="text"
                            name="icon"
                            id="icon"
                            class="form-control form-control-sm"
                            value="{{ old('icon', @$designations->icon) }}"
                            placeholder="Enter Font Awesome Icon (e.g. fa fa-user)"
                        >

                    </div>


                    {{-- Description --}}
                    <div class="form-group col-md-12">

                        <label for="description">
                            Description
                            <span style="color:red;">*</span>
                        </label>

                        <textarea
                            name="description"
                            id="description"
                            class="form-control form-control-sm"
                            rows="8"
                            placeholder="Enter Designation Description"
                        >{{ old('description', @$designations->description) }}</textarea>

                    </div>


                    {{-- Submit Button --}}
                    <div class="form-group col-md-3">

                        <button type="submit" class="btn btn-primary btn-sm">

                            {{ isset($designations) ? 'Update' : 'Submit' }}

                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>

</div>


{{-- Form Validation --}}
<script type="text/javascript">

    $(document).ready(function () {

        $('#myForm').validate({

            ignore: [],

            rules: {

                name: {
                    required: true,
                    maxlength: 255
                },

                title: {
                    required: true,
                    maxlength: 255
                },

                icon: {
                    required: true,
                    maxlength: 255
                },

                description: {
                    required: true
                }

            },

            messages: {

                name: {
                    required: "Please enter designation name",
                    maxlength: "Maximum 255 characters allowed"
                },

                title: {
                    required: "Please enter designation title",
                    maxlength: "Maximum 255 characters allowed"
                },

                icon: {
                    required: "Please enter designation icon",
                    maxlength: "Maximum 255 characters allowed"
                },

                description: {
                    required: "Please enter designation description"
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
