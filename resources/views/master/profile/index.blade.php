@extends('layouts.main', [
    'title' => 'Profile Master',
    'add' => 1,
    'addTitle' => 'Add New Branch'
])

@section('content')

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>Profile</h4>
            </div>
            <div class="panel-body">
                <form method="post">
                    <div class="form-group">
                        <label class="control-label" for="businessName">Business Name</label>
                        <input type="text" class="form-control" name="businessName" id="businessName" autofocus/>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">City</label>
                        <input type="text" class="form-control" name="city" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">State</label>
                        <input type="text" class="form-control" name="state" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="landlineNumber">Landline Number</label>
                        <input type="number" class="form-control" name="landlineNumber" id="landlineNumber" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="mobileNumber">Mobile Number</label>
                        <input type="number" class="form-control" name="mobileNumber" id="mobileNumber" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="whatsappNumber">Whatsapp Number</label>
                        <input type="number" class="form-control" name="whatsappNumber" id="whatsappNumber" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="officialEmailID">Official Email ID</label>
                        <input type="email" class="form-control" name="officialEmailID" id="officialEmailID" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="website">Website</label>
                        <input type="text" class="form-control" name="website" id="website" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="defaultBillingBranch">Default Billing Branch</label>
                        <select name="defaultBillingBranch" class="form-control">
                            <option value="">Select Default Billing Branch</option>
                            <option value="1">Rajkot</option>
                            <option value="2">Mumbai</option>
                            <option value="3">Ahmedabad</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="defaultShippingBranch">Default Shipping Branch</label>
                        <select name="defaultShippingBranch" class="form-control">
                            <option value="">Select Default Shipping Branch</option>
                            <option value="1">Rajkot</option>
                            <option value="2">Mumbai</option>
                            <option value="3">Ahmedabad</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>All Branch</h4>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="responsiveTable" class="table table-striped table-bordered no-margin">
                        <thead>
                            <tr>
                                <th>Business Name</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Landline Number</th>
                                <th>Mobile Number</th>
                                <th>Official Email ID</th>
                                <th>GST Number</th>
                                <th>PAN Number</th>
                                <th>GST Option</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>DNB Opticals</td>
                                <td>Rajkot</td>
                                <td>Rajkot</td>
                                <td>Gujarat</td>
                                <td>0281360001</td>
                                <td>0123456789</td>
                                <td>abc@mail.com</td>
                                <td>AR02056DDS6569</td>
                                <td>AEHZ4856A</td>
                                <td>Normal</td>
                                <td>
                                    <a href="#" data-toggle="tooltip" data-original-title="Edit" data-placement="bottom"><i class="fa fa-pencil fa-lg text-primary"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection