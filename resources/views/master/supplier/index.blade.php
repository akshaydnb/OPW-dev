@extends('layouts.main', [
    'title' => 'Supplier Master',
    'add' => 1
])

@section('content')

<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>All Suppliers</h4>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="responsiveTable" class="table table-striped table-bordered no-margin">
                        <thead>
                            <tr>
                                <th>Supplier Name</th>
                                <th>Number of Branch</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>DNB Opticals</td>
                                <td>5</td>
                                <td>
                                    <a href="{{ url('/master/supplier/edit') }}" data-toggle="tooltip" data-original-title="Edit" data-placement="bottom"><i class="fa fa-pencil fa-lg text-primary"></i></a>
                                    <a href="{{ url('/master/supplier/branch') }}" data-toggle="tooltip" data-original-title="View Branches" data-placement="bottom"><i class="fa fa-eye fa-lg text-brown"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection