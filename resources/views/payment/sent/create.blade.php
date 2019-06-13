@extends('layouts.main', [
    'title' => 'Payment',
    'add' => 0
])

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>Add Sent Payment</h4>
            </div>
            <div class="panel-body">
                <form name="form-add-payment" id="form-add-payment">
                    <div class="form-group">
                        <label class="control-label">Supplier</label>
                        <select class="form-control" name="supplier" autofocus>
                            <option value="">Select Supplier</option>
                            <option value="DNB">DNB</option>
                            <option value="ANV">ANV</option>
                            <option value="ANB">ANB</option>
                            <option value="VNB">VNB</option>
                            <option value="VNB">KNB</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="datepicker" class="control-label">Payment Date</label>
                        <input type="text" class="form-control" name="paymentDate" id="datepicker" />
                    </div>
                    <div class="form-group">
                        <label for="paymentAmount" class="control-label">Amount</label>
                        <input type="number" class="form-control" id="paymentAmount" name="paymentAmount">
                    </div>
                    <div class="form-group">
                        <label for="paymentNote" class="control-label">Note</label>
                        <textarea name="paymentNote" id="paymentNote" rows="5" cols="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="paymentPassword" class="control-label">Password</label>
                        <input type="password" class="form-control" id="paymentPassword" name="paymentPassword">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection