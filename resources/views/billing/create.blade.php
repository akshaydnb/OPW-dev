@extends('layouts.main', [
    'title' => 'Billing',
    'add' => 0
])

@section('custom-css')
<style>    
    table.highlight { border-collapse: collapse; width: 100%; }
    .highlight td, .highlight th { border: 1px solid #ccc; padding: 10px; }

    .highlight .slim { width: auto; }
    .highlight .hover { background-color: #71aadc; }

</style>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>Add New Bill</h4>
            </div>
            <div class="panel-body">
                <form id="movieForm" method="post">
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-6">
                                <label class="control-label">Customer</label>
                                <select class="form-control" name="customer" autofocus>
                                    <option value="DNB">DNB</option>
                                    <option value="ANV">ANV</option>
                                    <option value="ANB">ANB</option>
                                    <option value="VNB">VNB</option>
                                    <option value="VNB">KNB</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Customer Branch</label>
                                <select class="form-control" name="customerBranch" autofocus>
                                    <option value="DNB">DNB</option>
                                    <option value="ANV">ANV</option>
                                    <option value="ANB">ANB</option>
                                    <option value="VNB">VNB</option>
                                    <option value="VNB">KNB</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-6">
                                <label class="control-label">Branch</label>
                                <select class="form-control" name="branch" autofocus>
                                    <option value="DNB">DNB</option>
                                    <option value="ANV">ANV</option>
                                    <option value="ANB">ANB</option>
                                    <option value="VNB">VNB</option>
                                    <option value="VNB">KNB</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Bill Date</label>
                                <input type="text" class="form-control" name="billDate" id="datepicker" />
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive step-first">
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
                            <tbody>
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
                    <div class="table-responsive step-second hidden">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Product Detail</th>
                                    <th>Quantity</th>
                                    <th>Normal Price</th>
                                    <th>Discounted Price</th>
                                    <th>Tax</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="div-RI">
                                <tr>
                                    <td>Frame : plastic, round shape, black</td>
                                    <td>10</td>
                                    <td>Rs. 120</td>
                                    <td>Rs. 100</td>
                                    <td>Rs. 180</td>
                                    <td>Rs. 1180</td>
                                    <td>
                                        <a class="remove" data-toggle="tooltip" data-original-title="Delete" data-placement="bottom"><i class="fa fa-times fa-lg text-danger"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Goggles : Metal, square shape, silver</td>
                                    <td>10</td>
                                    <td>Rs. 1200</td>
                                    <td>Rs. 1000</td>
                                    <td>Rs. 1800</td>
                                    <td>Rs. 11800</td>
                                    <td>
                                        <a class="remove" data-toggle="tooltip" data-original-title="Delete" data-placement="bottom"><i class="fa fa-times fa-lg text-danger"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>        
                    <div class="col-md-8 col-sm-12 no-padding step-second hidden">
                        <button type="button" class="btn btn-info" id="button-add-RI" data-toggle="modal" data-target="#modal-add-RI" data-backdrop="static">Add Row Item</button>
                    </div>
                    <div class="col-md-4 col-sm-12 step-second hidden">
                        <table class="table table-bordered">
                            <tbody>
                                <tr class="success">
                                    <td>Total Quantity</td>
                                    <td>10</td>
                                </tr>
                                <tr class="success">
                                    <td>Total Normal Price</td>                                
                                    <td>Rs. 1000</td>
                                </tr>
                                <tr class="success">
                                    <td>Discount</td>
                                    <td>Rs. 400</td>
                                </tr>
                                <tr class="success">
                                    <td>Total Discounted Price</td>
                                    <td>Rs. 600</td>
                                </tr>
                                <tr class="success">
                                    <td>Total GST</td>
                                    <td>Rs. 30</td>
                                </tr>
                                <tr class="success">
                                    <td>Total Payment</td>
                                    <td>Rs. 630</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <button type="button" class="btn btn-info" id="button-next" onclick="toggleSheet('Show')">Next</button>
                    <button type="button" class="btn btn-info hidden" id="button-previous" onclick="toggleSheet('Hide')">Previous</button>
                    <button type="submit" class="btn btn-success hidden" id="button-add">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@include('billing.model')
@endsection
@section('script')
    @include('billing.js')
@endsection