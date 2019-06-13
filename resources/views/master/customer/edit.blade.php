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
                <form id="movieForm" method="post">
                    <div class="form-group">
                        <label class="control-label">Customer Name</label>
                        <input type="text" class="form-control" name="customerName" value="DNB Opticals" autofocus/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Default Billing Branch</label>
                        <select name="defaultBillingBranch" class="form-control">
                            <option value="">Select Default Billing Branch</option>
                            <option value="DNB Optical">DNB Optical</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Default Shipping Branch</label>
                        <select name="defaultShippingBranch" class="form-control">
                            <option value="">Select Default Shipping Branch</option>
                            <option value="DNB Optical">DNB Optical</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection