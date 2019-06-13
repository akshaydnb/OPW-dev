@extends('layouts.main', [
    'title' => 'Payment',
    'add' => 0
])

@section('content')

<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>Payment Payable</h4>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="responsiveTable" class="table table-striped table-bordered no-margin">
                        <thead>
                            <tr>
                                <th>Supplier Name</th>
                                <th>Mobile Number</th>
                                <th>Payable Amount</th>
                                <th>Paid Amount</th>
                                <th>Balance Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ABC Opticals</td>
                                <td>0123456789</td>
                                <td>Rs. 55000</td>
                                <td>Rs. 15000</td>
                                <td>Rs. 40000</td>
                                <td>
                                    <a href="#" data-toggle="tooltip" data-original-title="Detail" data-placement="bottom"><i class="fa fa-eye fa-lg text-primary"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>PQR Manufacture Pvt. Ltd.</td>
                                <td>0123456789</td>
                                <td>Rs. 100000</td>
                                <td>Rs. 38000</td>
                                <td>Rs. 62000</td>
                                <td>
                                    <a href="#" data-toggle="tooltip" data-original-title="Detail" data-placement="bottom"><i class="fa fa-eye fa-lg text-primary"></i></a>
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

@section('script')
<script>
    shortcut.add("Shift+B", function() {
        location.reload();
    },{
        'type'      : 'keydown',
        'propagate' : true,
        'target'    : document
    });    
</script>
@endsection