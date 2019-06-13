@extends('layouts.main', [
    'title' => 'Barcode Master',
    'add' => 0
])

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>Edit Barcode</h4>
            </div>
            <div class="panel-body">
                {!! Form::model($barcode, ['route' => ['barcode.update', $barcode->id], 'method' => 'PATCH', 'data-toggle' => 'validator']) !!}
                    @include('master.barcode.form')
                    {!! Form::hidden('autofill', str_replace('&quot;', '"',$barcode->parameterDetail) , [ 'id' => 'autofill']) !!}
                    <div id="div_parameters">
                    </div>
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
    $( "#hsn_code" ).blur(function() {
        var hsn_code = $( "#hsn_code" ).val();
        if(hsn_code == ""){
            return false;
        }
        $.get( "{{ url('/master/gst/detail/') }}/"+hsn_code, function( data ) {
            if(data === "false"){
                $("#showPercentage").addClass('hidden');
                $("#gstPercentage").removeClass('hidden');
                $("#gst_id").val('0');
                $("#gstPercentage").children().next().attr('required','true');
            }else{
                var gstDetail= data.split("#");
                $("#gstPercentage").addClass('hidden');
                $("#showPercentage").html('GST Percentage is ' + gstDetail[1]);
                $("#showPercentage").removeClass('hidden');                
                $("#gst_id").val(gstDetail[0]);
                $("#gstPercentage").children().next().removeAttr('required');
            }
        });
    });
    $( document ).ready(function() {
        $("#showPercentage").html('GST Percentage is {{ $barcode->gst->gst_percentage }}');
        $("#showPercentage").removeClass('hidden');      
        $("#gstPercentage").children().next().removeAttr('required');
        fillProduct('product_id', 'div_parameters', false, '', '{{ $barcode->product_id }}');
    });
</script>
@endsection