<div class="form-group">
    <label class="control-label">Parameter</label>
    {!! Form::select('parameter_id', $parameters, null, ['class' => 'form-control', 'autofocus' => 'true', 'placeholder' => 'Select Parameter', 'data-error' => 'Please Select Parameter', 'required' => true]) !!}
    <div class="help-block with-errors"></div>
</div>
<div class="form-group">
    <label class="control-label">Value</label>
    {!! Form::text('value', null, ['class' => 'form-control', 'required' => true, 'data-error' => 'Please Enter Value']) !!}
    <div class="help-block with-errors"></div>
</div>
