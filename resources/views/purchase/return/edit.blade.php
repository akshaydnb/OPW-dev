@extends('layouts.main', [
    'title' => 'Purchase Return',
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
                <h4>Return Edit</h4>
            </div>
            <div class="panel-body">
                <form id="movieForm" method="post">
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-6">
                                <label class="control-label">Supplier</label>
                                <select class="form-control" name="supplier" autofocus>
                                    <option value="DNB">DNB</option>
                                    <option value="ANV">ANV</option>
                                    <option value="ANB">ANB</option>
                                    <option value="VNB">VNB</option>
                                    <option value="VNB">KNB</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Supplier Branch</label>
                                <select class="form-control" name="supplierBranch" autofocus>
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
                                <label class="control-label">Return Date</label>
                                <input type="text" class="form-control" name="returnDate" id="datepicker" />
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="">
                                <tr>
                                    <th>Product Detail</th>
                                    <th>Quantity</th>
                                    <th>Amount</th>
                                    <th>Tax</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="div-PI" >
                                <tr>
                                    <td>Frame : plastic, round shape, black</td>
                                    <td>150</td>
                                    <td>Rs. 100</td>
                                    <td>Rs. 180</td>
                                    <td>Rs. 1180</td>
                                    <td>
                                        <a href="#" title="Edit"><i class="fa fa-pencil fa-lg text-primary"></i></a>
                                        &nbsp;<a href="#" title="Delete"><i class="fa fa-times fa-lg text-danger remove"></i></a>
                                        &nbsp;<a href="#" title="Copy"><i class="fa fa-copy fa-lg text-success"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="form-group col-md-8 col-sm-12 no-padding">
                        <div class="form-group">
                            <button type="button" class="btn btn-info" id="button-add-PI" data-toggle="modal" data-target="#modal-add-PI" data-backdrop="static">Add Purchase Item</button>
                        </div>
                        <label class="control-label">Note</label>
                        <textarea name="note" cols="5" rows="6" class="form-control"></textarea>
                    </div>
                    <div class="col-md-4 col-sm-12">
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
                    
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#alert">Submit</button>
                    <button type="button" class="btn btn-info" id="button-add-PI" data-toggle="modal" data-target="#modal-add-PI" data-backdrop="static">Add Purchase Item</button>
                    
                    <!-- ALERT -->
                    <div class="modal fade" id="alert" tabindex="-1" role="dialog" aria-labelledby="modalForm">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Alert</h4>
                                </div>
                                <div class="modal-body">
                                    <h3>Do you want this purchase to be included in revise GST report ?</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Yes</button>
                                    <button type="submit" class="btn btn-primary">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('purchase.model')
@endsection
@section('script')
    @include('purchase.js')
@endsection