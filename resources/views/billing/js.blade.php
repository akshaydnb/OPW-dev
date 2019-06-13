<script type="text/javascript">        
    var currentRI = 0;
    $('#modal-add-RI').on('shown.bs.modal', function () {
        $('#barcode').trigger('focus');
    });

    $('#form-add-RI').submit(function(e){
        e.preventDefault();
        currentRI++;
        $("#div-RI").append('<tr><td>Frame : plastic, round shape, black</td><td>10</td><td>Rs. 100</td><td>Rs. 60</td><td>Rs. 30</td><td>Rs. 630</td><td><a href="#" title="Delete" data-toggle="tooltip" data-original-title="Delete" data-placement="bottom"><i class="fa fa-times fa-lg text-danger remove"></i></a></td></tr>');
        $('[data-toggle="tooltip"]').tooltip();
        $('#modal-add-RI').modal('toggle');
        $('#form-add-RI')[0].reset();
    });

    $("body").on("click",".remove",function(){ 
        currentRI--;
        $(this).parents("tr").remove();
    });

    function toggleSheet(status){
        if(status == "Show"){
            $('#button-add').removeClass('hidden'); 
            $('#button-previous').removeClass('hidden');
            $('#button-next').addClass('hidden');
            $('.step-second').removeClass('hidden');
            $('.step-first').addClass('hidden');
        }else{
            $('#button-add').addClass('hidden');
            $('#button-previous').addClass('hidden');
            $('#button-next').removeClass('hidden');
            $('.step-second').addClass('hidden');
            $('.step-first').removeClass('hidden');
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