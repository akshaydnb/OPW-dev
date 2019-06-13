@extends('layouts.main', [
    'title' => 'Product Master',
    'add' => 1
])

@section('content')

<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>All Products</h4>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="responsiveTable" class="table table-striped table-bordered no-margin">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Parameters</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->displayParameter }}</td>
                                    <td>
                                        @if($product->status == 1)
                                            <a href="{{ url('/master/product/status/' . $product->id) }}" data-toggle="tooltip" data-original-title="In-Active" data-placement="bottom"><i class="fa fa-check fa-lg text-success"></i></a>
                                        @else
                                            <a href="{{ url('/master/product/status/' . $product->id) }}" data-toggle="tooltip" data-original-title="Active" data-placement="bottom"><i class="fa fa-times fa-lg text-danger"></i></a>
                                        @endif
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