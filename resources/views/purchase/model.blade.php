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
<div class="modal fade" id="modal-add-PI" tabindex="-1" role="dialog" aria-labelledby="modalForm">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form name="form-add-PI" id="form-add-PI">        
                <div class="modal-header">
                    <h4 class="modal-title">Add Purchase Item</h4>
                </div>
                <div class="modal-body clearfix" id="div-main">
                    <div class="form-group col-xs-12 col-md-4">
                        <label for="product" class="control-label">Product Type</label>
                        <select class="form-control" name="product"  id="product">
                            <option value="Retail Product">Retail Product</option>
                            <option value="Sample Product">Sample Product</option>
                            <option value="Sample Product">Free Product</option>
                        </select>
                    </div>
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
                            <option value="Not Applicable">Not Applicable</option>
                        </select>
                    </div>                    
                    <div class="form-group col-xs-12 col-md-4">
                        <label for="HSNCode" class="control-label">HSN Code</label>
                        <input type="text" class="form-control" id="HSNCode" name="HSNCode">
                    </div>
                    <div class="form-group col-xs-12 col-md-4">
                        <label for="GST" class="control-label">GST ( IGST OR CGST/SGST )</label>
                        <input type="text" class="form-control" id="GST" name="GST">
                    </div>
                    <div class="form-group col-xs-12 col-md-4">
                        <label for="quantity" class="control-label">Quantity</label><br>
                        <input type="text" class="form-control hidden" id="quantity" name="quantity">
                        <button type="button" class="btn btn-info" onclick="toggleSheet('Show')"><span class="icon-grid_on"></span> Open Sheet</button>
                    </div>
                    <div class="form-group col-xs-12 col-md-4">
                        <label for="price" class="control-label">Normal Purchase Price</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>
                    <div class="form-group col-xs-12 col-md-4">
                        <label for="price" class="control-label">Discount Purchase Price</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>
                    <div class="form-group col-xs-12 col-md-4">
                        <label for="shape" class="control-label">Total</label>
                        <input type="text" class="form-control" id="total" name="total" readonly>
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
                <div class="modal-body clearfix hidden" id="div-sheet">
                    <div class="table-responsive">
                        <table class="table table-bordered table-responsive table-custom-grid highlight" cellspacing="0">
                            <colgroup></colgroup>
                            <colgroup></colgroup>
                            <colgroup></colgroup>
                            <colgroup></colgroup>
                            <colgroup></colgroup>
                            <colgroup></colgroup>
                            <colgroup></colgroup>
                            <colgroup></colgroup>
                            <colgroup></colgroup>
                            <colgroup></colgroup>
                            <colgroup></colgroup>
                            <colgroup></colgroup>
                            <colgroup></colgroup>
                            <colgroup></colgroup>
                            <colgroup></colgroup>
                            <colgroup></colgroup>
                            <colgroup></colgroup>
                            <colgroup></colgroup>
                            <colgroup></colgroup>
                            <colgroup></colgroup>
                            <thead>
                                <tr>
                                    <th>Size<br>Color</th>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th>5</th>
                                    <th>6</th>
                                    <th>7</th>
                                    <th>8</th>
                                    <th>9</th>
                                    <th>10</th>
                                    <th>11</th>
                                    <th>12</th>
                                    <th>13</th>
                                    <th>14</th>
                                    <th>15</th>
                                    <th>16</th>
                                    <th>17</th>
                                    <th>18</th>
                                    <th>19</th>
                                </tr>
                            </thead>
                            <tbody id="div-grid" >
                                <tr>
                                    <td>Red</td>
                                    <td><input type="text" class="form-control input-sm" id="red1" name="red1"></td>
                                    <td><input type="text" class="form-control input-sm" id="red2" name="red2"></td>
                                    <td><input type="text" class="form-control input-sm" id="red3" name="red3"></td>
                                    <td><input type="text" class="form-control input-sm" id="red4" name="red4"></td>
                                    <td><input type="text" class="form-control input-sm" id="red5" name="red5"></td>
                                    <td><input type="text" class="form-control input-sm" id="red6" name="red6"></td>
                                    <td><input type="text" class="form-control input-sm" id="red7" name="red7"></td>
                                    <td><input type="text" class="form-control input-sm" id="red8" name="red8"></td>
                                    <td><input type="text" class="form-control input-sm" id="red9" name="red9"></td>
                                    <td><input type="text" class="form-control input-sm" id="red10" name="red10"></td>
                                    <td><input type="text" class="form-control input-sm" id="red11" name="red11"></td>
                                    <td><input type="text" class="form-control input-sm" id="red12" name="red12"></td>
                                    <td><input type="text" class="form-control input-sm" id="red13" name="red13"></td>
                                    <td><input type="text" class="form-control input-sm" id="red14" name="red14"></td>
                                    <td><input type="text" class="form-control input-sm" id="red15" name="red15"></td>
                                    <td><input type="text" class="form-control input-sm" id="red16" name="red16"></td>
                                    <td><input type="text" class="form-control input-sm" id="red17" name="red17"></td>
                                    <td><input type="text" class="form-control input-sm" id="red18" name="red18"></td>
                                    <td><input type="text" class="form-control input-sm" id="red19" name="red19"></td>
                                </tr>
                                <tr>
                                    <td>Green</td>
                                    <td><input type="text" class="form-control input-sm" id="green1" name="green1"></td>
                                    <td><input type="text" class="form-control input-sm" id="green2" name="green2"></td>
                                    <td><input type="text" class="form-control input-sm" id="green3" name="green3"></td>
                                    <td><input type="text" class="form-control input-sm" id="green4" name="green4"></td>
                                    <td><input type="text" class="form-control input-sm" id="green5" name="green5"></td>
                                    <td><input type="text" class="form-control input-sm" id="green6" name="green6"></td>
                                    <td><input type="text" class="form-control input-sm" id="green7" name="green7"></td>
                                    <td><input type="text" class="form-control input-sm" id="green8" name="green8"></td>
                                    <td><input type="text" class="form-control input-sm" id="green9" name="green9"></td>
                                    <td><input type="text" class="form-control input-sm" id="green10" name="green10"></td>
                                    <td><input type="text" class="form-control input-sm" id="green11" name="green11"></td>
                                    <td><input type="text" class="form-control input-sm" id="green12" name="green12"></td>
                                    <td><input type="text" class="form-control input-sm" id="green13" name="green13"></td>
                                    <td><input type="text" class="form-control input-sm" id="green14" name="green14"></td>
                                    <td><input type="text" class="form-control input-sm" id="green15" name="green15"></td>
                                    <td><input type="text" class="form-control input-sm" id="green16" name="green16"></td>
                                    <td><input type="text" class="form-control input-sm" id="green17" name="green17"></td>
                                    <td><input type="text" class="form-control input-sm" id="green18" name="green18"></td>
                                    <td><input type="text" class="form-control input-sm" id="green19" name="green19"></td>
                                </tr>
                                <tr>
                                    <td>Black</td>
                                    <td><input type="text" class="form-control input-sm padding-3" id="black1" name="black1"></td>
                                    <td><input type="text" class="form-control input-sm" id="black2" name="black2"></td>
                                    <td><input type="text" class="form-control input-sm" id="black3" name="black3"></td>
                                    <td><input type="text" class="form-control input-sm" id="black4" name="black4"></td>
                                    <td><input type="text" class="form-control input-sm" id="black5" name="black5"></td>
                                    <td><input type="text" class="form-control input-sm" id="black6" name="black6"></td>
                                    <td><input type="text" class="form-control input-sm" id="black7" name="black7"></td>
                                    <td><input type="text" class="form-control input-sm" id="black8" name="black8"></td>
                                    <td><input type="text" class="form-control input-sm" id="black9" name="black9"></td>
                                    <td><input type="text" class="form-control input-sm" id="black10" name="black10"></td>
                                    <td><input type="text" class="form-control input-sm" id="black11" name="black11"></td>
                                    <td><input type="text" class="form-control input-sm" id="black12" name="black12"></td>
                                    <td><input type="text" class="form-control input-sm" id="black13" name="black13"></td>
                                    <td><input type="text" class="form-control input-sm" id="black14" name="black14"></td>
                                    <td><input type="text" class="form-control input-sm" id="black15" name="black15"></td>
                                    <td><input type="text" class="form-control input-sm" id="black16" name="black16"></td>
                                    <td><input type="text" class="form-control input-sm" id="black17" name="black17"></td>
                                    <td><input type="text" class="form-control input-sm" id="black18" name="black18"></td>
                                    <td><input type="text" class="form-control input-sm" id="black19" name="black19"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="button-close" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger hidden" id="button-cancel" onclick="toggleSheet('hide')">Cancel</button>
                    <button type="button" class="btn btn-info hidden" id="button-previous" onclick="toggleSheet('hide')">Submit</button>
                    <button type="submit" class="btn btn-success" id="button-add">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>