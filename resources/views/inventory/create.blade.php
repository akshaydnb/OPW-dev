@extends('layouts.main', [
    'title' => 'Inventory',
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
                <h4>Adjust Inventory</h4>
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
                    <div class="form-group">
                        <label for="quantity" class="control-label">Adjust Quantity</label><br>
                        <input type="text" class="form-control" id="quantity" name="quantity">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection