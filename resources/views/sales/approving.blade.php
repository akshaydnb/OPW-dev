@extends('layouts.main', [
    'title' => 'Sales',
    'add' => 0
])

@section('content')

<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>Approve Sales Order</h4>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="responsiveTable" class="table table-striped table-bordered no-margin">
                        <thead>
                                <tr>
                                    <th><input type="checkbox" name="selectall" id="selectall" /></th>
                                    <th>Product Detail</th>
                                    <th>Quantity</th>
                                    <th>Normal Price</th>
                                    <th>Discounted Price</th>
                                    <th>Tax</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="div-PI" >
                                <tr>
                                    <td><input type="checkbox" class="case" name="item" value="1" /></td>
                                    <td>Frame : plastic, round shape, black</td>
                                    <td>10</td>
                                    <td>Rs. 120</td>
                                    <td>Rs. 100</td>
                                    <td>Rs. 180</td>
                                    <td>Rs. 1180</td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" data-original-title="Edit" data-placement="bottom"><i class="fa fa-pencil fa-lg text-primary"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="case" name="item" value="2" /></td>
                                    <td>Goggles : Metal, square shape, silver</td>
                                    <td>10</td>
                                    <td>Rs. 1200</td>
                                    <td>Rs. 1000</td>
                                    <td>Rs. 1800</td>
                                    <td>Rs. 11800</td>
                                    <td>
                                        <a href="#" data-toggle="tooltip" data-original-title="Edit" data-placement="bottom"><i class="fa fa-pencil fa-lg text-primary"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                    </table>
                </div>
                <button type="submit" class="btn btn-success">Approve Selected</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    @include('sales.js')
@endsection