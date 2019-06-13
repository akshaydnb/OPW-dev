@extends('layouts.main', [
    'title' => 'Product Parameter',
    'add' => 1
])

@section('content')

<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>All Parameters</h4>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="responsiveTable" class="table table-striped table-bordered no-margin">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Product</th>
                                <th>For</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($parameters as $parameter)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $parameter->title }}</td>
                                    <td>{{ $parameter->displayProduct }}</td>
                                    <td>{{ $parameter->for_type }}</td>
                                    <td>
                                        @if($parameter->status == 1)
                                            <a href="{{ url('/master/parameter/status/' . $parameter->id) }}" data-toggle="tooltip" data-original-title="In-Active" data-placement="bottom"><i class="fa fa-check fa-lg text-success"></i></a>
                                        @else
                                            <a href="{{ url('/master/parameter/status/' . $parameter->id) }}" data-toggle="tooltip" data-original-title="Active" data-placement="bottom"><i class="fa fa-times fa-lg text-danger"></i></a>
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