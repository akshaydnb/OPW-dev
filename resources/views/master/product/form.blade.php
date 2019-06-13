<div class="form-group">
    <label for='title' class="control-label">Title</label>
    {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'true', 'autofocus' => 'true', 'data-error' => 'Please Enter Title']) !!}
    <div class="help-block with-errors"></div>
</div>
<div class="form-group">
    <label class="control-label">Parameters</label>
    <br>
    @foreach ($parameters as $key => $value)
    <label class="checkbox-inline">
        {!! Form::checkbox('parameters[]', $key) !!}
        {{ $value }}
    </label>
    @endforeach
</div>
<div class="form-group">
    <label for="grid_column" class="control-label">Grid Column</label>
    {!! Form::select('grid_column', $parameters, null, ['placeholder' => 'Select Grid Column', 'class' => 'form-control']) !!}
</div>
<div class="form-group">
    <label for="grid_row" class="control-label">Grid Row</label>
    {!! Form::select('grid_row', $parameters, null, ['placeholder' => 'Select Grid Row', 'class' => 'form-control']) !!}
</div>

