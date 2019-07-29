@extends('layouts.main', [
    'title' => 'Customer Master',
    'add' => 1,
    'addTitle' => 'Add New Branch'
])

@section('content')

<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>All Branch</h4>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="responsiveTable" class="table table-striped table-bordered no-margin">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Shop Name</th>
                                <th>Branch Name</th>
                                <th>Landline Number</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>State</th>
                                <th>GST Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($branches as $branch)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $branch->shop_name }}</td>
                                <td>{{ $branch->branch_name }}</td>
                                <td>{{ $branch->landline_number }}</td>
                                <td>{{ $branch->address }}</td>
                                <td>{{ $branch->city }}</td>
                                <td>{{ $branch->state }}</td>
                                <td>{{ $branch->gst_number }}</td>
                                <td>
                                    @if($branch->status == 1)
                                        <a href="{{ url('/master/brnach/status/' . $branch->id) }}" data-toggle="tooltip" data-original-title="In-Active" data-placement="bottom"><i class="fa fa-check fa-lg fa-fw text-success"></i></a>
                                    @else
                                        <a href="{{ url('/master/brnach/status/' . $branch->id) }}" data-toggle="tooltip" data-original-title="Active" data-placement="bottom"><i class="fa fa-times fa-lg fa-fw text-danger"></i></a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection