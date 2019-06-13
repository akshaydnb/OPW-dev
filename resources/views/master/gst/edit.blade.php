@extends('layouts.main', [
    'title' => 'GST Master',
    'add' => 0
])

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>Edit HSN Code</h4>
            </div>
            <div class="panel-body">
                {!! Form::model($gst, ['route' => ['gst.update', $gst->id], 'method' => 'PATCH', 'data-toggle' => 'validator']) !!}
                    @include('master.gst.form')
                    <div class="form-group">
                        {!! Form::submit('Edit', ['class' => 'btn btn-success']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
<script>   
    $( document ).ready(function() {
        var products = $('#products').val();
        $.each( products.split('#'), function( index, value ) {
            if(value != ''){
                $('#products-' + value).attr('checked','checked');
            }
        });
    });
</script>
@endsection