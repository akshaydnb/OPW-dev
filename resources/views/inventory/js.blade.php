<script type="text/javascript">
    var currentSI = 1;
    function addSI(){
        currentSI++;
        var copyHTML = $(".copy-SI").html();
        $('<div class="form-group form-inline div-SI-list clearfix">' + copyHTML + '</div>').insertBefore("#div-add-SI");
        $(".div-SI-list:last input[type!=hidden]:first").focus();
    }
    $("body").on("click",".remove",function(){
        currentSI--;
        $(this).parents(".div-SI-list").remove();
        $(".div-SI-list:last input[type!=hidden]:first").focus();
    });
    $('#modal-split-inventory').on('shown.bs.modal', function () {
        $('#size').trigger('focus');
    });
    
    
    var currentTI = 0;
    $('#modal-add-TI').on('shown.bs.modal', function () {
        $('#barcode').trigger('focus');
    });

    $('#form-add-TI').submit(function(e){
        e.preventDefault();
        currentTI++;
        $("#div-TI").append('<tr><td>Frame : plastic, round shape, black</td><td>10</td><td>Rs. 100</td><td>Rs. 60</td><td>Rs. 3</td><td>Rs. 630</td><td><a href="#" title="Edit" data-toggle="tooltip" data-original-title="Edit" data-placement="bottom"><i class="fa fa-pencil fa-lg text-primary"></i></a>&nbsp;<a href="#" title="Delete" data-toggle="tooltip" data-original-title="Delete" data-placement="bottom"><i class="fa fa-times fa-lg text-danger remove"></i></a>&nbsp;<a href="#" title="Copy" data-toggle="tooltip" data-original-title="Copy" data-placement="bottom"><i class="fa fa-copy fa-lg text-success"></i></a></td></tr>');
        $('[data-toggle="tooltip"]').tooltip();
        $('#modal-add-TI').modal('toggle');
        $('#form-add-TI')[0].reset();
    });

    $("body").on("click",".remove",function(){ 
        currentTI--;
        $(this).parents("tr").remove();
    });

    function toggleSheet(status){
        if(status == "Show"){
            $('#button-add').addClass('hidden'); 
            $('#button-close').addClass('hidden'); 
            $('#button-previous').removeClass('hidden');
            $('#button-cancel').removeClass('hidden');
            $('#div-sheet').removeClass('hidden');
            $('#div-main').addClass('hidden');
        }else{
            $('#button-add').removeClass('hidden');
            $('#button-close').removeClass('hidden');
            $('#button-previous').addClass('hidden');
            $('#button-cancel').addClass('hidden');
            $('#div-sheet').addClass('hidden');
            $('#div-main').removeClass('hidden');
        }
    }
    
    function showGSTInfo(){
        var gstType = $('#billType').val();
        $('.gst-details').addClass('hidden');
        if(gstType == 'With GST'){
            $('.gst-details').removeClass('hidden');
        }
    }
    
</script>