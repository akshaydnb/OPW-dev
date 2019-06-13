@extends('layouts.main', [
    'title' => 'Inventory',
    'add' => 1
])

@section('content')

<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>Adjust Inventory List</h4>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="responsiveTable" class="table table-striped table-bordered no-margin">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Product Detail</th>
                                <th>Quantity</th>
                                <th>Reason</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>25th April 2018</td>
                                <td>Frame : plastic, round shape, black</td>
                                <td>-10</td>
                                <td>Order cancel from customer</td>
                                <td>
                                    <a href="#" data-toggle="tooltip" data-original-title="Detail" data-placement="bottom"><i class="fa fa-eye fa-lg text-primary"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>26th April 2018</td>
                                <td>Goggles : Metal, oval shape, Blue</td>
                                <td>+10</td>
                                <td>Sales person send as test</td>
                                <td>
                                    <a href="#" data-toggle="tooltip" data-original-title="Detail" data-placement="bottom"><i class="fa fa-eye fa-lg text-primary"></i></a>
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