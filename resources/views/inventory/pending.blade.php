@extends('layouts.main', [
    'title' => 'Inventory',
    'add' => 0
])

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>Pending Adjust Inventory</h4>
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
                                <td>100</td>
                                <td>Need to set size parameter</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#modal-split-inventory" data-backdrop="static"><i class="fa fa-code-fork fa-lg text-primary" data-toggle="tooltip" data-original-title="split" data-placement="bottom"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>26th April 2018</td>
                                <td>Goggles : Metal, oval shape, Blue</td>
                                <td>100</td>
                                <td>Need to set glass parameter</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#modal-split-inventory" data-backdrop="static"><i class="fa fa-code-fork fa-lg text-primary" data-toggle="tooltip" data-original-title="split" data-placement="bottom"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('inventory.model')
@endsection
@section('script')
    @include('inventory.js')
@endsection