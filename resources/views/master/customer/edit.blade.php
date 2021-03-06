@extends('layouts.main', [
    'title' => 'Customer Master',
    'add' => 0
])

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>Edit Customer</h4>
            </div>
            <div class="panel-body">
                {!! Form::model($customer, ['route' => ['customer.update', $customer->id], 'method' => 'PATCH', 'data-toggle' => 'validator']) !!}
                    <div class="form-group">
                        <label class="control-label">Customer Name</label>
                        {!! Form::text('name', null, ['class' => 'form-control', 'autofocus' => 'true', 'data-error' => 'Please Enter Customer Name', 'required' => true]) !!}
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Default Billing Branch</label>
                        {!! Form::select('defaultBillingBranch', [], null, ['class' => 'form-control fillBranch', 'data-owner-type' => 'customer', 'data-owner-id' => $customer->id, 'id' => 'defaultBillingBranch', 'placeholder' => 'Select Default Billing Branch', 'data-error' => 'Please Select Default Billing Branch', 'required' => true]) !!}
                    </div>
                    <div class="form-group">
                        <label class="control-label">Default Shipping Branch</label>
                        {!! Form::select('defaultShippingBranch', [], null, ['class' => 'form-control fillBranch', 'data-owner-type' => 'customer', 'data-owner-id' => $customer->id, 'id' => 'defaultShippingBranch', 'placeholder' => 'Select Default Billing Branch', 'data-error' => 'Please Select Default Billing Branch', 'required' => true]) !!}
                    </div>
                    {!! Form::submit('Edit', ['class' => 'btn btn-success']) !!}                    
                {!! Form::close() !!}
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>        
    $( document ).ready(function() {
        $("#defaultBillingBranch").val('{{ $customer->defaultBillingBranch }}');
        $("#defaultShippingBranch").val('{{ $customer->defaultShippingBranch }}');
    });
</script>
@endsection