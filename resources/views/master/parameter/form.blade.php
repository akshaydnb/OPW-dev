<div class="form-group">
    <label for='title' class="control-label">Title</label>
    {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'true', 'autofocus' => 'true', 'data-error' => 'Please Enter Title']) !!}
    <div class="help-block with-errors"></div>
</div>
<div class="form-group">
    <label class="control-label">For</label><br/>
    {!! Form::select('for_type', ['1' => 'Purchase And Sales', '2' => 'Only Sales'], null, ['class' => 'form-control']) !!}
    <div class="help-block with-errors"></div>
</div>

<div class="form-group">
    <label class="control-label">Products</label>
    <br>
    @foreach ($products as $key => $value)
    <label class="checkbox-inline">
        {!! Form::checkbox('products[]', $key) !!}
        {{ $value }}
    </label>
    @endforeach
    <div class="help-block with-errors"></div>
</div>
