@extends('layouts.main', [
    'title' => 'Supplier Master',
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
                            <tr>
                                <td>DNB Opticals</td>
                                <td>Rajkot</td>
                                <td>0281360001</td>
                                <td>The sphaer</td>
                                <td>Rajkot</td>
                                <td>Gujarat</td>
                                <td>GSTNKAMVSD034389M</td>
                                <td>
                                    <a href="#" data-toggle="tooltip" data-original-title="Edit" data-placement="bottom"><i class="fa fa-pencil fa-lg text-primary"></i></a>
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