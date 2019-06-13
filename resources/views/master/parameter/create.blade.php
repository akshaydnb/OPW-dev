@extends('layouts.main', [
    'title' => 'Product Parameter',
    'add' => 0
])

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>Add New Parameter</h4>
            </div>
            <div class="panel-body"> 
                {!! Form::open(['route' => 'parameter.store', 'method' => 'POST', 'data-toggle' => 'validator']) !!}
                    @include('master.parameter.form')
                    <div class="form-group">
                        {!! Form::submit('Submit', array('class' => 'btn btn-success')) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection