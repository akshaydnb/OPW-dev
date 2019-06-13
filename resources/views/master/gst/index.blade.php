@extends('layouts.main', [
    'title' => 'GST Master',
    'add' => 1
])

@section('content')

<div class="row gutter">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>All HSN Codes</h4>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="responsiveTable" class="table table-striped table-bordered no-margin">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>HSN Code</th>
                                <th>GST Percentage</th>
                                <th>Product</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($HSNCodes as $HSNCode)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $HSNCode->hsn_code }}</td>
                                    <td>{{ $HSNCode->gst_percentage }} %</td>
                                    <td>{{ $HSNCode->products }}</td>
                                    <td></td>
                                    <td>
                                        @if($HSNCode->status == 1)
                                            <a href="{{ url('/master/gst/status/' . $HSNCode->id) }}" data-toggle="tooltip" data-original-title="In-Active" data-placement="bottom"><i class="fa fa-check fa-lg fa-fw text-success"></i></a>
                                        @else
                                            <a href="{{ url('/master/gst/status/' . $HSNCode->id) }}" data-toggle="tooltip" data-original-title="Active" data-placement="bottom"><i class="fa fa-times fa-lg fa-fw text-danger"></i></a>
                                        @endif
                                        <a href="{{ route('gst.edit', $HSNCode->id) }}" data-toggle="tooltip" data-original-title="Edit" data-placement="bottom"><i class="fa fa-pencil fa-lg fa-fw text-primary"></i></a>
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