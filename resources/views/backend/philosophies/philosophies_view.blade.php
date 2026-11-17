@extends('backend.layouts.master')
@section('content')

<div class="col-md-12" style="padding-top:40px;">

    <div class="card">

        <div class="card-header">

            <h5>
                Philosophy List

                <a class="btn btn-sm btn-success float-right"
                   href="{{ route('philosophies.add') }}">
                    <i class="fa fa-plus-circle"></i> Add New
                </a>
            </h5>

        </div>

        <div class="card-body">

            <table class="table-sm table-bordered table-striped dt-responsive nowrap"
                   style="width: 100%"
                   id="example1">

                <thead>
                    <tr class="text-center">
                        <th>Sl.</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($allData as $key => $philosophy)

                    <tr class="text-center">

                        <td>{{ $key + 1 }}</td>

                        <td>{{ $philosophy->title }}</td>

                        <td>
                            @if($philosophy->status == 1)
                                <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-danger">Inactive</span>
                            @endif
                        </td>

                        <td>

                            <!-- Edit Button -->
                            <a class="btn btn-sm btn-success"
                               title="Edit"
                               href="{{ route('philosophies.edit', $philosophy->id) }}">
                                <i class="fa fa-edit"></i>
                            </a>

                            <!-- Delete Button -->
                            <a id="delete"
                               href="{{ route('philosophies.delete') }}"
                               data-token="{{ csrf_token() }}"
                               data-id="{{ $philosophy->id }}"
                               class="btn btn-danger btn-sm"
                               title="Delete">
                                <i class="fa fa-trash"></i>
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