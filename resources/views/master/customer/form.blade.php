<div class="form-group">
    <label class="control-label">Customer Name</label>
    {!! Form::text('name', null, ['class' => 'form-control', 'autofocus' => 'true', 'data-error' => 'Please Enter Customer Name', 'required' => true]) !!}
    <div class="help-block with-errors"></div>
</div>
<div class="form-group">
    <label class="control-label">Shop Name</label>
    {!! Form::text('shop_name', null, ['class' => 'form-control', 'data-error' => 'Please Enter Shop Name', 'required' => true]) !!}
    <div class="help-block with-errors"></div>
</div>
<div class="form-group">
    <label class="control-label">Branch Name</label>
    {!! Form::text('branch_name', null, ['class' => 'form-control', 'data-error' => 'Please Enter Branch Name', 'required' => true]) !!}
    <div class="help-block with-errors"></div>
</div>
<div class="form-group">
    <label class="control-label">Landline Number</label>
    {!! Form::text('landline_number', 0, ['class' => 'form-control', 'data-error' => 'Please Enter Landline Number', 'required' => true]) !!}
    <div class="help-block with-errors"></div>
</div>
<div class="form-group">
    <label class="control-label">Address</label>
    {!! Form::text('address', null, ['class' => 'form-control', 'data-error' => 'Please Enter Address', 'required' => true]) !!}
    <div class="help-block with-errors"></div>
</div>
<div class="form-group">
    <label class="control-label">City</label>
    {!! Form::text('city', null, ['class' => 'form-control', 'data-error' => 'Please Enter City', 'required' => true]) !!}
    <div class="help-block with-errors"></div>
</div>
<div class="form-group">
    <label class="control-label">State</label>
    {!! Form::text('state', null, ['class' => 'form-control', 'data-error' => 'Please Enter State', 'required' => true]) !!}
    <div class="help-block with-errors"></div>
</div>
<div class="form-group">
    <label class="control-label">GST Number</label>
    {!! Form::text('gst_number', null, ['class' => 'form-control', 'data-error' => 'Please Enter GST Number', 'required' => true]) !!}
    <div class="help-block with-errors"></div>
</div>
<div class="form-group">
    <label class="control-label">GST Option</label>
    {!! Form::select('gst_type', [1 => 'CGST/SGST', 2 => 'IGST'], null, ['class' => 'form-control', 'placeholder' => 'Select GST Option', 'data-error' => 'Please Select GST Option', 'required' => true]) !!}
    <div class="help-block with-errors"></div>
</div>