@extends('layouts.main', [
    'title' => 'Supplier Master',
    'add' => 0
])

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-light">
            <div class="panel-heading">
                <h4>Add New Supplier</h4>
            </div>
            <div class="panel-body">
                <form id="movieForm" method="post">
                    <div class="form-group">
                        <label class="control-label">Supplier Name</label>
                        <input type="text" class="form-control" name="supplierName" autofocus/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Shop Name</label>
                        <input type="text" class="form-control" name="shopName" autofocus/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Branch Name</label>
                        <input type="text" class="form-control" name="branchName" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Landline Number</label>
                        <input type="number" class="form-control" name="landlineNumber" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Address</label>
                        <input type="text" class="form-control" name="address" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">City</label>
                        <input type="text" class="form-control" name="city" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">State</label>
                        <input type="text" class="form-control" name="state" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">GST Number</label>
                        <input type="text" class="form-control" name="GSTNumber" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">GST Option</label>
                        <select name="GSTOption" id="GSTOption" class="form-control" onchange="showPercentage();">
                            <option value="">Select GST Option</option>
                            <option value="Not Applicable">Not Applicable</option>
                            <option value="CGSG/SGST">CGST/SGST</option>
                            <option value="IGSG">IGST</option>
                            <option value="Composite">Composite</option>
                        </select>
                    </div>
                    <div class="form-group" id="div-composite-percentage" style="display: none;">
                        <label class="control-label">Composite Percentage</label>
                        <input type="number" name="compositePercentage" class="form-control" />
                    </div>
                    <div id="div-CP">
                        <div class="div-CP-list">
                            <div class="form-group">
                                <h3>Contact Person</h3>
                                <hr>
                            </div>
                            <div class="form-group">
                                <div class="row gutter">
                                    <div class="col-md-4">
                                        <label class="control-label">Full Name</label>
                                        <input type="text" class="form-control" name="fullName[]" />
                                    </div>
                                    <div class="col-md-4">
                                        <label class="control-label">Mobile Number</label>
                                        <input type="number" class="form-control" name="mobileNumber[]" />
                                    </div>
                                    <div class="col-md-4">
                                        <label class="control-label">WhatsApp Number</label>
                                        <input type="number" class="form-control" name="whatsAppNumber[]" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row gutter">
                                    <div class="col-md-4">
                                        <label class="control-label">Official Email ID</label>
                                        <input type="email" class="form-control" name="officialEmailID[]" />
                                    </div>
                                    <div class="col-md-4">
                                        <label class="control-label">Personal Email ID</label>
                                        <input type="email" class="form-control" name="personalEmailID[]" />
                                    </div>
                                    <div class="col-md-4">
                                        <label class="control-label">Designation</label>
                                        <input type="text" class="form-control" name="designation[]" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-info" id="button-add-CP" onclick="addCP();">Add Contact Person</button>
                </form>
                <div class="copy-CP hidden">
                    <div class="form-group">
                        <h3>Contact Person <i class="fa fa-times text-danger remove" style="cursor: pointer" data-toggle="tooltip" data-original-title="Delete" data-placement="bottom"></i></h3>
                        <hr>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-4">
                                <label class="control-label">Full Name</label>
                                <input type="text" class="form-control" name="fullName[]" />
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">Mobile Number</label>
                                <input type="number" class="form-control" name="mobileNumber[]" />
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">WhatsApp Number</label>
                                <input type="number" class="form-control" name="whatsAppNumber[]" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-4">
                                <label class="control-label">Official Email ID</label>
                                <input type="email" class="form-control" name="officialEmailID[]" />
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">Personal Email ID</label>
                                <input type="email" class="form-control" name="personalEmailID[]" />
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">Designation</label>
                                <input type="text" class="form-control" name="designation[]" />
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
        function addCP(){
            currentCP++;
            var copyHTML = $(".copy-CP").html();
            $("#div-CP").append('<div class="div-CP-list">' + copyHTML + '</div>');
            $(".div-CP-list:last input[type!=hidden]:first").focus();
            if(currentCP == 5){
                $("#button-add-CP").addClass("hidden");
            }
            $('[data-toggle="tooltip"]').tooltip();
        }
        $("body").on("click",".remove",function(){ 
            currentCP--;
            if(currentCP < 5){
                $("#button-add-CP").removeClass("hidden");
            }
            $(this).parents(".div-CP-list").remove();
            $(".div-CP-list:last input[type!=hidden]:first").focus();
        });
        
        function showPercentage(){
            var gstOption = $('#GSTOption').val();
            $('#div-composite-percentage').hide();
            if(gstOption == 'Composite'){
                $('#div-composite-percentage').show();
            }
        }
    </script>
@endsection