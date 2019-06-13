@extends('layouts.main', [
    'title' => 'Payment',
    'add' => 1
])

@section('content')

<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>Payment Sent</h4>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="responsiveTable" class="table table-striped table-bordered no-margin">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Supplier Name</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>25th April 2018</td>
                                <td>ABC Opticals</td>
                                <td>Rs. 15000</td>
                                <td>
                                    <a href="#" data-toggle="tooltip" data-original-title="Edit" data-placement="bottom"><i class="fa fa-pencil fa-lg text-primary"></i></a>
                                    <a href="#" data-toggle="tooltip" data-original-title="Payment Detail" data-placement="bottom"><i class="fa fa-eye fa-lg text-black"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>26th April 2018</td>
                                <td>PQR Manufacture Pvt. Ltd.</td>
                                <td>Rs. 38000</td>
                                <td>
                                    <a href="#" data-toggle="tooltip" data-original-title="Edit" data-placement="bottom"><i class="fa fa-pencil fa-lg text-primary"></i></a>
                                    <a href="#" data-toggle="tooltip" data-original-title="Payment Detail" data-placement="bottom"><i class="fa fa-eye fa-lg text-black"></i></a>
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