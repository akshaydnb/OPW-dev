@extends('layouts.main', [
    'title' => 'Inventory',
    'add' => 0
])

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>Search Product Inventory</h4>
            </div>
            <div class="panel-body">                
                <form name="form-add-PI" id="form-add-PI">        
                    <div class="form-group">
                        <label for="barcode" class="control-label">Barcode</label>
                        <input type="text" class="form-control" id="barcode" name="barcode" autofocus>
                    </div>  
                    <div class="form-group">
                        <label for="productType" class="control-label">Product</label>
                        <select class="form-control" name="productType"  id="productType">
                            <option value="">select Product</option>
                            <option value="color">Frame</option>
                            <option value="company">Lenses</option>
                            <option value="shape">Reading Glass</option>
                            <option value="Size">Contact Lenses</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="company" class="control-label">Company</label>
                        <input type="text" class="form-control" id="company" name="company">
                    </div>
                    <div class="form-group">
                        <label for="color" class="control-label">Color</label>
                        <input type="text" class="form-control" id="color" name="color">
                    </div>
                    <div class="form-group">
                        <label for="shape" class="control-label">Shape</label>
                        <input type="text" class="form-control" id="shape" name="shape">
                    </div>
                    <button type="submit" class="btn btn-success">Search</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>Inventory Level : 100</h4>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="responsiveTable" class="table table-striped table-bordered no-margin">
                        <thead>
                            <tr>
                                <th>Purchase Number</th>
                                <th>Supplier</th>
                                <th>Date</th>
                                <th>Quantity</th>
                                <th>Amount</th>
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
                                <td>100</td>
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