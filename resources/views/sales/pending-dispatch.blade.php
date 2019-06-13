@extends('layouts.main', [
    'title' => 'Sales',
    'add' => 0
])

@section('content')

<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>Pending Dispatch</h4>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="responsiveTable" class="table table-striped table-bordered no-margin">
                        <thead>
                            <tr>
                                <th>Order Number</th>
                                <th>Product Detail</th>
                                <th>Quantity</th>
                                <th>Customer</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PNOPW00001</td>
                                <td>Frame : plastic, round shape, black</td>
                                <td>10</td>
                                <td>DNB,Rajkot</td>
                                <td>25th April 2018</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#modal-approve" data-backdrop="static"><i class="fa fa-check fa-lg text-success" data-toggle="tooltip" data-original-title="Complete" data-placement="bottom"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#modal-reject" data-backdrop="static"><i class="fa fa-times fa-lg text-danger" data-toggle="tooltip" data-original-title="Reject" data-placement="bottom"></i></a>
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
@include('sales.model')
@section('script')
    @include('sales.js')
@endsection