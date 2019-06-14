@extends('layouts.main', [
    'title' => 'Barcode Master',
    'add' => 1
])

@section('content')
<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>All Barcodes</h4>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="responsiveTable" class="table table-striped table-bordered no-margin">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Barcode</th>
                                <th>HSN Code</th>
                                <th>Normal Sales Price</th>
                                <th>Discount Sales Price</th>
                                <th>Product</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($barcodes as $barcode)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $barcode->barcode }}</td>
                                <td>{{ $barcode->gst->hsn_code }}</td>
                                <td>{{ $barcode->normal_sales_price }}</td>
                                <td>{{ $barcode->discount_sales_price }}</td>                                
                                <td>{{ $barcode->product->title }}</td>
                                <td>
                                    <a href="{{ route('barcode.edit', $barcode->id) }}" data-toggle="tooltip" data-original-title="Edit" data-placement="bottom"><i class="fa fa-pencil fa-lg fa-fw text-primary"></i></a>
                                    <!-- &nbsp;<a href="#" data-toggle="tooltip" data-original-title="View Details" data-placement="bottom"><i class="fa fa-eye fa-lg"></i></a> -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection