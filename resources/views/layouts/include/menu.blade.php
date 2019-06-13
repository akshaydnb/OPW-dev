<nav class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li>
                <a href='{{ url('/dashboard') }}'><i class="icon-shop"></i>Dashboard</a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-settings"></i> Master <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href='{{ url('/master/profile') }}'>Profile Master</a>
                    </li>
                    <li>
                        <a href='{{ url('/master/product') }}'>Product Master</a>
                    </li>
                    <li>
                        <a href='{{ url('/master/parameter') }}'>Product Parameter</a>
                    </li>
                    <li>
                        <a href='{{ url('/master/parameter-value') }}'>Parameter's Value</a>
                    </li>
                    <li>
                        <a href='{{ url('/master/gst') }}'>GST Master</a>
                    </li>
                    <li>
                        <a href='{{ url('/master/supplier') }}'>Supplier Master</a>
                    </li>
                    <li>
                        <a href='{{ url('/master/customer') }}'>Customer Master</a>
                    </li>
                    <li>
                        <a href='{{ url('/master/barcode') }}'>Barcode Master</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-cloud_download"></i>Purchase <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href='{{ url('/purchase/create') }}'>Add New Purchase</a>
                    </li>
                    <li>
                        <a href='{{ url('/purchase') }}'>All Purchases</a>
                    </li>
                    <li>
                        <a href='{{ url('/purchase/edit-history') }}'>Purchase Edit History</a>
                    </li>
                    <li>
                        <a href='{{ url('/purchase/return') }}'>Purchase Return</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-upload-to-cloud"></i>Sales <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href='{{ url('/sales/create') }}'>Add New Sales</a>
                    </li>
                    <li>
                        <a href='{{ url('/sales') }}'>All Sales</a>
                    </li>
                    <li>
                        <a href='{{ url('/sales/pending-approval') }}'>Pending Approval</a>
                    </li>
                    <li>
                        <a href='{{ url('/sales/process ') }}'>Wok In Process</a>
                    </li>
                    <li>
                        <a href='{{ url('/sales/pending-dispatch') }}'>Pending Dispatch</a>
                    </li>
                    <li>
                        <a href='{{ url('/sales/return') }}'>Sales Return</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-widgets"></i>Inventory<span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href='{{ url('/inventory/create') }}'>Adjust Inventory</a>
                    </li>
                    <li>
                        <a href='{{ url('/inventory/') }}'>Adjust History</a>
                    </li>
                    <li>
                        <a href='{{ url('/inventory/level') }}'>Inventory Level</a>
                    </li>
                    <li>
                        <a href='{{ url('/inventory/pending') }}'>Pending Adjust Inventory</a>
                    </li>
                    <li>
                        <a href='{{ url('/inventory/transfer-stock/create') }}'>Transfer Stock</a>
                    </li>
                    <li>
                        <a href='{{ url('/inventory/transfer-stock') }}'>Transfer Stock History</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-assignment"></i>Billing <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href='{{ url('/billing/create') }}'>Add New Bill</a>
                    </li>
                    <li>
                        <a href='{{ url('/billing') }}'>All Bill</a>
                    </li>
                    <li>
                        <a href='{{ url('/billing/edit-history') }}'>Bill Edit History</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-wallet"></i>Payment <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href='{{ url('/payment/sent/') }}'>Payment Sent</a>
                    </li>
                    <li>
                        <a href='{{ url('/payment/sent/payment-payable') }}'>Payment Payable</a>
                    </li>
                    <li>
                        <a href='{{ url('/payment/received') }}'>Payment Received</a>
                    </li>
                    <li>
                        <a href='{{ url('/payment/received/payment-receivable') }}'>Payment Receivable</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
