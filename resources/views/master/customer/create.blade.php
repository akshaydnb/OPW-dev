@extends('layouts.main', [
    'title' => 'Customer Master',
    'add' => 0
])

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>Add New Customer</h4>
            </div>
            <div class="panel-body">
                {!! Form::open(['method' => 'POST', 'data-toggle' => 'validator', 'id' => 'customer-create']) !!}
                    @include('master.customer.form')
                    <div id="div-CP">
                        <div class="div-CP-list">
                            <div class="form-group">
                                <h3>Contact Person</h3>
                                <hr>
                            </div>
                            <div class="row gutter">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Full Name</label>
                                        <input type="text" class="form-control" name="fullName[]" data-error="Please Enter Full Name" required/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Mobile Number</label>
                                        <input type="number" class="form-control" name="mobileNumber[]" data-error="Please Enter Mobile Number" required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">WhatsApp Number</label>
                                        <input type="number" class="form-control" name="whatsAppNumber[]" data-error="Please Enter WhatsApp Number" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row gutter">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Official Email ID</label>
                                        <input type="email" class="form-control" name="officialEmailID[]" data-error="Please Enter Official Email ID" required />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Personal Email ID</label>
                                        <input type="email" class="form-control" name="personalEmailID[]"  />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Designation</label>
                                        <input type="text" class="form-control" name="designation[]" data-error="Please Enter Designation" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
                        {!! Form::button('Add Contact Person', ['class' => 'btn btn-info', 'id' => 'button-add-CP']) !!}
                    </div>
                {!! Form::close() !!}
                <div class="copy-CP hidden">
                    <div class="form-group">
                        <h3>Contact Person <i class="fa fa-times text-danger button-remove-CP" style="cursor: pointer" data-toggle="tooltip" data-original-title="Delete" data-placement="bottom"></i></h3>
                        <hr>
                    </div>
                    <div class="row gutter">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Full Name</label>
                                <input type="text" class="form-control" name="fullName[]" data-error="Please Enter Full Name" required/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Mobile Number</label>
                                <input type="number" class="form-control" name="mobileNumber[]" data-error="Please Enter Mobile Number" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">WhatsApp Number</label>
                                <input type="number" class="form-control" name="whatsAppNumber[]" data-error="Please Enter WhatsApp Number" required />
                            </div>
                        </div>
                    </div>
                    <div class="row gutter">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Official Email ID</label>
                                <input type="email" class="form-control" name="officialEmailID[]" data-error="Please Enter Official Email ID" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Personal Email ID</label>
                                <input type="email" class="form-control" name="personalEmailID[]"  />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Designation</label>
                                <input type="text" class="form-control" name="designation[]" data-error="Please Enter Designation" required />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script type="text/javascript">
        var currentCP = 1;
        $("#button-add-CP").on("click", function(){ 
            currentCP++;
            var copyHTML = $(".copy-CP").html();
            $("#div-CP").append('<div class="div-CP-list">' + copyHTML + '</div>');
            $(".div-CP-list:last input[type!=hidden]:first").focus();
            if(currentCP == 5){
                $("#button-add-CP").addClass("hidden");
            }
            $('[data-toggle="tooltip"]').tooltip();
            var formid = $('form').attr('id');
            $("#"+formid).validator('update');
        });
        $("body").on("click",".button-remove-CP",function(){ 
            currentCP--;
            if(currentCP < 5){
                $("#button-add-CP").removeClass("hidden");
            }
            $(this).parents(".div-CP-list").remove();
            $(".div-CP-list:last input[type!=hidden]:first").focus();
        });
    </script>
@endsection