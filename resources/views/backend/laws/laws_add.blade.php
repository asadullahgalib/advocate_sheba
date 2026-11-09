@extends('backend.layouts.master')
@section('content')

<div class="col-md-12" style="padding-top:40px;">

    <div class="card">

        <div class="card-header">

            <h3 class="card-title">

                @if(isset($editData))
                    Update Add
                @else
                    Add New Add
                @endif

                <a class="btn btn-success float-right btn-sm custom_btn"
                   href="{{ route('adds.view') }}">

                    <i class="fa fa-list"></i> Adds List

                </a>

            </h3>

        </div>


        <div class="card-body">

            <form method="post"
                  action="{{ isset($editData) ? route('adds.update', $editData->id) : route('adds.store') }}"
                  id="myForm"
                  enctype="multipart/form-data">

                @csrf

                <div class="form-row">

                    <!-- Add Title -->

                    <div class="form-group col-md-12">

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
                            placeholder="Enter Add Title"
                        >

                    </div>


                    <!-- Add Position -->

                    <div class="form-group col-md-6">

                        <label for="add_position_id">
                            Add Position
                            <span style="color:red;">*</span>
                        </label>

                        <select name="add_position_id" id="add_position_id" class="form-control form-control-sm">

                            <option value="">Select Position</option>

                            @foreach($positions as $position)
                                <option value="{{ $position->id }}"
                                    {{ old('add_position_id', @$editData->add_position_id) == $position->id ? 'selected' : '' }}>
                                    {{ $position->name }}
                                </option>
                            @endforeach

                        </select>

                    </div>


                    <!-- Image -->

                    <div class="form-group col-sm-4">

                        <label for="image">
                            Image (300px X 300px)
                            @if(!isset($editData))
                                <span style="color:red;">*</span>
                            @endif
                        </label>

                        <input type="file" name="image" id="image" class="form-control form-control-sm">

                    </div>

                    <div class="form-group col-sm-2">

                        <label>&nbsp;</label>

                        <img id="showImage"
                             src="{{ (isset($editData) && $editData->image) ? url('uploads/adds_images/'.$editData->image) : url('uploads/no_image.png') }}"
                             style="width:100px;height:100px;object-fit:cover;border:1px solid #ced4da;display:block;">

                    </div>


                    <!-- Link -->

                    <div class="form-group col-md-9">

                        <label for="link">Link</label>

                        <input
                            type="text"
                            name="link"
                            id="link"
                            class="form-control form-control-sm"
                            value="{{ old('link', @$editData->link) }}"
                            placeholder="https://example.com"
                        >

                    </div>


                    <!-- Serial -->

                    <div class="form-group col-md-3">

                        <label for="serial">Serial</label>

                        <input
                            type="number"
                            name="serial"
                            id="serial"
                            class="form-control form-control-sm"
                            value="{{ old('serial', @$editData->serial) }}"
                            placeholder="1"
                        >

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

        // Image live preview
        $('#image').change(function (e) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });

        $('#myForm').validate({

            ignore: [],

            rules: {

                title: {
                    required: true,
                },

                add_position_id: {
                    required: true,
                },

                @if(!isset($editData))
                image: {
                    required: true,
                },
                @endif

            },

            messages: {

                title: {
                    required: "Please enter the add title",
                },

                add_position_id: {
                    required: "Please select a position",
                },

                @if(!isset($editData))
                image: {
                    required: "Please select an image",
                },
                @endif

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