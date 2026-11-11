
@extends('backend.layouts.master')
@section('content')

<div class="col-md-12" style="padding-top:40px;">

    <div class="card">

        <div class="card-header">

            <h3 class="card-title">

                Designation List

                <a target="_blank"
                   class="btn btn-primary float-right btn-sm custom_btn"
                   href="{{ route('human-resource.hrm.designation.pdf') }}">

                    <i class="fa fa-download"></i> PDF

                </a>

                <a href="{{ route('human-resource.hrm.designation.add') }}"
                   class="btn btn-success float-right btn-sm"
                   style="margin-right:10px;">

                    <i class="fa fa-plus-circle"></i> Designation Add

                </a>

            </h3>

        </div>

        <div class="card-body">

            <table id="example1" class="table table-bordered table-striped">

                <thead>

                    <tr>
                        <th width="5%">SL</th>
                        <th>Designation Name</th>
                        <th>Title</th>
                        <th width="10%">Icon</th>
                        <th>Description</th>
                        <th width="10%" class="text-center">Action</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach($designations as $key => $designation)

                    <tr>

                        <td class="text-center">
                            {{ $key + 1 }}
                        </td>

                        <td>
                            {{ $designation->name }}
                        </td>

                        <td>
                            {{ $designation->title }}
                        </td>

                        <td class="text-center">
                            <i class="{{ $designation->icon }}"></i>
                            <br>
                            <small>{{ $designation->icon }}</small>
                        </td>

                        <td>
                            {{ $designation->description }}
                        </td>

                        <td class="text-center">

                            <a href="{{ route('human-resource.hrm.designation.edit', $designation->id) }}"
                               class="btn btn-info btn-sm"
                               title="Edit">

                                <i class="fa fa-edit"></i>

                            </a>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection
