
@extends('backend.layouts.master')
@section('content')

<div class="col-md-12" style="padding-top:40px;">
    <div class="card">

        <div class="card-header">
            <h5>
                @if(@$editData)
                    Update FAQ
                @else
                    Add FAQ
                @endif

                <a class="btn btn-sm btn-success float-right"
                   href="{{ route('faqs.view') }}">
                    <i class="fa fa-list"></i> FAQ List
                </a>
            </h5>
        </div>

        <!-- Form Start -->
        <form method="post"
              action="{{ !empty($editData->id) ? route('faqs.update',$editData->id) : route('faqs.store') }}"
              id="myForm">

            {{ csrf_field() }}

            <div class="card-body">
                <div class="show_module_more_event">

                    <div class="form-row">

                        {{-- Serial No --}}
                        <div class="form-group col-md-2">
                            <label class="control-label">Serial No</label>
                            <input type="number"
                                   name="serial"
                                   id="serial"
                                   class="form-control form-control-sm"
                                   value="{{ @$editData->serial }}"
                                   placeholder="Enter serial">
                        </div>

                        {{-- Question --}}
                        <div class="form-group col-md-10">
                            <label class="control-label">
                                Question <span style="color:red;">*</span>
                            </label>
                            <input type="text"
                                   name="question"
                                   id="question"
                                   class="form-control form-control-sm"
                                   value="{{ @$editData->question }}"
                                   placeholder="Enter Question">
                        </div>

                        {{-- Answer --}}
                        <div class="form-group col-md-12">
                            <label class="control-label">
                                Answer <span style="color:red;">*</span>
                            </label>
                            <textarea name="answer"
                                      id="answer"
                                      class="form-control form-control-sm"
                                      rows="5"
                                      placeholder="Enter Answer">{{ @$editData->answer }}</textarea>
                        </div>

                        <!-- {{-- Meta Title --}}
                        <div class="form-group col-md-12">
                            <label class="control-label">
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
                            <label class="control-label">
                                Meta Description <span style="color:red;">*</span>
                            </label>
                            <textarea name="meta_description"
                                      id="meta_description"
                                      class="form-control form-control-sm"
                                      rows="4"
                                      placeholder="Enter Meta Description">{{ @$editData->meta_description }}</textarea>
                        </div>

                        {{-- Meta Keyword --}}
                        <div class="form-group col-md-12">
                            <label class="control-label">
                                Meta Keyword <span style="color:red;">*</span>
                            </label>
                            <textarea name="meta_keyword"
                                      id="meta_keyword"
                                      class="form-control form-control-sm"
                                      rows="4"
                                      placeholder="Enter Meta Keywords">{{ @$editData->meta_keyword }}</textarea>
                        </div> -->

                    </div>
                </div>

                <button type="submit" class="btn btn-success btn-sm">
                    {{ (@$editData) ? 'Update' : 'Submit' }}
                </button>

            </div>
        </form>
        <!-- Form End -->

    </div>
</div>


<!-- jQuery Validation -->
<script>
    $(document).ready(function(){

        $('#myForm').validate({

            errorClass: 'text-danger',
            validClass: 'text-success',

            rules: {

                question: {
                    required: true,
                },

                answer: {
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

                question: {
                    required: "Please enter the question",
                },

                answer: {
                    required: "Please enter the answer",
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

            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },

            highlight: function(element) {
                $(element).addClass('is-invalid');
            },

            unhighlight: function(element) {
                $(element).removeClass('is-invalid');
            }

        });

    });
</script>

@endsection
