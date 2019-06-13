<div class="form-group">
    <label class="control-label">HSN Code</label>
    {!! Form::text('hsn_code', null, ['class' => 'form-control', 'data-error' => 'Please Enter HSN Code', 'required' => true]) !!}
    <div class="help-block with-errors"></div>
</div>
<div class="form-group">
    <label class="control-label">GST Percentage</label>
    {!! Form::text('gst_percentage', null, ['class' => 'form-control', 'data-error' => 'Please Enter Gst Percentage Between 0 to 100', 'required' => true]) !!}
    <div class="help-block with-errors"></div>
</div>
<div class="form-group">
    <label class="control-label">Products</label>
    <br>
    @foreach ($products as $key => $value)
    <label class="checkbox-inline">
        {!! Form::checkbox('products-'.$key, $key, false, ['class' => 'products-checkbox', 'id' => 'products-'.$key]) !!}
        {{ $value }}
    </label>
    @endforeach
    <div class="help-block with-errors"></div>
</div>
{!! Form::hidden('products', null, ['id' => 'products']) !!}