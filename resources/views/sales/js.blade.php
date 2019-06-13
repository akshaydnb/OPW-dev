<script type="text/javascript">   
    
    //add new item in list using popup
    var currentPI = 0;
    $('#modal-add-PI').on('shown.bs.modal', function () {
        $('#barcode').trigger('focus');
    });
    $('#modal-reject').on('shown.bs.modal', function () {
        $('#inventory').trigger('focus');
    });
    $('#modal-approve').on('shown.bs.modal', function () {
        $('#approveReason').trigger('focus');
    });

    $('#form-add-PI').submit(function(e){
        e.preventDefault();
        currentPI++;
        $("#div-PI").append('<tr><td>Frame : plastic, round shape, black</td><td>10</td><td>Rs. 100</td><td>Rs. 60</td><td>Rs. 3</td><td>Rs. 630</td><td><a href="#" title="Edit" data-toggle="tooltip" data-original-title="Edit" data-placement="bottom"><i class="fa fa-pencil fa-lg text-primary"></i></a>&nbsp;<a href="#" title="Delete" data-toggle="tooltip" data-original-title="Delete" data-placement="bottom"><i class="fa fa-times fa-lg text-danger remove"></i></a>&nbsp;<a href="#" title="Copy" data-toggle="tooltip" data-original-title="Copy" data-placement="bottom"><i class="fa fa-copy fa-lg text-success"></i></a></td></tr>');
        $('[data-toggle="tooltip"]').tooltip();
        $('#modal-add-PI').modal('toggle');
        $('#form-add-PI')[0].reset();
    });

    $("body").on("click",".remove",function(){ 
        currentPI--;
        $(this).parents("tr").remove();
    });

    //open grid in model 
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
    
    //select all checkboxes
    $("#selectall").change(function(){  
        var status = this.checked; 
        $('.case').each(function(){ 
            this.checked = status; 
        });
    });

    $('.case').change(function(){ 
        if(this.checked == false){ 
            $("#selectall")[0].checked = false; 
        }else if ($('.case:checked').length == $('.case').length ){ 
            $("#selectall")[0].checked = true; 
        }
    });
</script>