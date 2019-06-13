<!-- ALERT -->
<div class="modal fade" id="alert" tabindex="-1" role="dialog" aria-labelledby="modalForm">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Alert</h4>
            </div>
            <div class="modal-body">
                <h3>Do you want this bill to be included in revise GST report ?</h3>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Yes</button>
                <button type="submit" class="btn btn-primary">No</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-add-RI" tabindex="-1" role="dialog" aria-labelledby="modalForm">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form name="form-add-RI" id="form-add-RI">        
                <div class="modal-header">
                    <h4 class="modal-title">Add Row Item</h4>
                </div>
                <div class="modal-body clearfix" id="div-main">
                    <div class="form-group col-xs-12 col-md-4">
                        <label for="barcode" class="control-label">Barcode</label>
                        <input type="text" class="form-control" id="barcode" name="barcode">
                    </div>  
                    <div class="form-group col-xs-12 col-md-4">
                        <label for="productType" class="control-label">Product</label>
                        <select class="form-control" name="productType"  id="productType">
                            <option value="">select Product</option>
                            <option value="color">Frame</option>
                            <option value="company">Lenses</option>
                            <option value="shape">Reading Glass</option>
                            <option value="Size">Contact Lenses</option>
                        </select>
                    </div>
                    <div class="form-group col-xs-12 col-md-4">
                        <label for="GSTOption" class="control-label">GST Option</label><br>
                        <select class="form-control" name="GSTOption"  id="GSTOption">
                            <option value="">select GST Option</option>
                            <option value="Without GST">Without GST</option>
                            <option value="Include GST">Include GST</option>
                            <option value="Exclude GST">Exclude GST</option>
                        </select>
                    </div>                    
                    <div class="form-group col-xs-12 col-md-4">
                        <label for="HSNCode" class="control-label">HSN Code</label>
                        <input type="text" class="form-control" id="HSNCode" name="HSNCode">
                    </div>
                    <div class="form-group col-xs-12 col-md-4">
                        <label for="GST" class="control-label">GST</label>
                        <input type="text" class="form-control" id="GST" name="GST">
                    </div>
                    <div class="form-group col-xs-12 col-md-4">
                        <label for="quantity" class="control-label">Quantity</label><br>
                        <input type="text" class="form-control" id="quantity" name="quantity">
                    </div>
                    <div class="form-group col-xs-12 col-md-4">
                        <label for="price" class="control-label">Normal Sales Price</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>
                    <div class="form-group col-xs-12 col-md-4">
                        <label for="price" class="control-label">Discount Sales Price</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>
                    <div class="form-group col-xs-12 col-md-4">
                        <label for="shape" class="control-label">Total</label>
                        <input type="text" class="form-control" id="total" name="total" readonly>
                    </div>
                    <div class="form-group col-xs-12 col-md-4">
                        <label for="company" class="control-label">Company</label>
                        <input type="text" class="form-control" id="company" name="company">
                    </div>
                    <div class="form-group col-xs-12 col-md-4">
                        <label for="color" class="control-label">Color</label>
                        <input type="text" class="form-control" id="color" name="color">
                    </div>
                    <div class="form-group col-xs-12 col-md-4">
                        <label for="shape" class="control-label">Shape</label>
                        <input type="text" class="form-control" id="shape" name="shape">
                    </div>
                </div>                
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>