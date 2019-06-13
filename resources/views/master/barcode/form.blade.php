<div class="form-group">
    <label class="control-label">Barcode</label>
    {!! Form::text('barcode', null, ['class' => 'form-control', 'autofocus' => 'true', 'data-error' => 'Please Enter Barcode', 'required' => true]) !!}
    <div class="help-block with-errors"></div>
</div>
<div class="form-group">
    <label class="control-label">HSN Code</label>
    {!! Form::text('hsn_code', null, ['class' => 'form-control autosuggestion', 'id' => 'hsn_code', 'data-url' => 'gst/autosuggest', 'data-error' => 'Please Enter HSN Code', 'required' => true]) !!}
    <div class="help-block hidden" id="showPercentage"></div>
    <div class="help-block with-errors"></div>
    {!! Form::hidden('gst_id', null, ['id' => 'gst_id']) !!}
</div>
<div class="form-group hidden" id="gstPercentage">
    <label class="control-label">GST Percentage</label>
    {!! Form::text('gst_percentage', 0, ['class' => 'form-control', 'data-error' => 'Please Enter Gst Percentage Between 0 to 100', 'required' => true]) !!}
    <div class="help-block with-errors"></div>
</div>
<div class="form-group">
    <label class="control-label">Normal Sales Price</label>
    {!! Form::text('normal_sales_price', null, ['class' => 'form-control', 'data-error' => 'Please Enter Normal Sales Price', 'required' => true]) !!}
    <div class="help-block with-errors"></div>
</div>
<div class="form-group">
    <label class="control-label">Discount Sales Price</label>
    {!! Form::text('discount_sales_price', null, ['class' => 'form-control', 'data-error' => 'Please Enter Discount Sales Price', 'required' => true]) !!}
    <div class="help-block with-errors"></div>
</div>
<div class="form-group">
    <label class="control-label">Product</label>
    {!! Form::select('product_id', [], null, ['class' => 'form-control', 'id' => 'product_id', 'placeholder' => 'Select Product', 'data-error' => 'Please Select Products', 'required' => true]) !!}
    <div class="help-block with-errors"></div>
</div>