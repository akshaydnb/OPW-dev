@extends('layouts.main', [
    'title' => 'Bill Edit History',
    'add' => 0
])

@section('content')

<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>History</h4>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="responsiveTable" class="table table-striped table-bordered no-margin">
                        <thead>
                            <tr>
                                <th>Bill Number</th>
                                <th>Customer</th>
                                <th>Date</th>
                                <th>Normal Price</th>
                                <th>Discounted Price</th>
                                <th>Tax</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PNOPW00001</td>
                                <td>DNB,Rajkot</td>
                                <td>25th April 2018</td>
                                <td>Rs. 1200</td>
                                <td>Rs. 1000</td>
                                <td>Rs. 180</td>
                                <td>Rs. 1180</td>
                                <td>
                                    <a href="#" data-toggle="tooltip" data-original-title="View Details" data-placement="bottom"><i class="fa fa-eye fa-lg text-primary"></i></a>
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