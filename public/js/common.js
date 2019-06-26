'use strict';

$(function () {

	// ScrollUp
	$.scrollUp({
		scrollName: 'scrollUp',
		scrollDistance: 180,
		scrollFrom: 'top',
		scrollSpeed: 300,
		easingType: 'linear',
		animation: 'fade',
		animationSpeed: 200,
		scrollTrigger: false,
		scrollText: '<i class="icon-flight"></i>',
		scrollTitle: false,
		scrollImg: false,
		activeOverlay: false,
	});

	// Header todo list dropdown
	$('.dropdown-menu .todo').on('click', function(e) {
		e.stopPropagation();
	});

	// Task list
	$('.task-list').on('click', 'li.list', function() {
		$(this).toggleClass('completed');
	});

	// Page loading
	setTimeout(function() {
		$('body').addClass('loaded');
	}, 300);

	// Tooltip & Popover
	$('[data-toggle="tooltip"]').tooltip();
	$('[data-toggle="popover"]').popover();

	// Theming
	$('#themeOptions').styleSwitcher();

});

//Grid table row column highliter 
$(function() {
    var i = 0;
    $(".highlight colgroup").each(function() {
        i++;
        $(this).attr("id", "col" + i);
    });

    var totalCols = i;
    i = 1;
    $(".highlight td").each(function() {
        $(this).attr("rel", "col" + i);
        i++;
        if (i > totalCols) { i = 1; }
    });

    $('.highlight td input[type=text]').focus(function(){
        $(this).parent().parent().addClass("hover");
        var curCol = $(this).parent().attr("rel");
        $("#" + curCol).addClass("hover");
    });
    $('.highlight td input[type=text]').blur(function(){
        $(this).parent().parent().removeClass("hover");
        var curCol = $(this).parent().attr("rel");
        $("#" + curCol).removeClass("hover");
    });
});

//Fill Product dropdown and onchange parameter changing
function fillProduct( select_id, div_id, grid = true, extraAttributes = '', product_id = 0, urlProduct = '/storage/json/products.json', urlBinding = '/storage/json/productBinding.json') {
	let dropdown = $('#' + select_id);

	dropdown.empty();

	dropdown.append('<option selected="true" disabled>Select Products</option>');
	dropdown.prop('selectedIndex', 0);

	$('#' + select_id).change(function() {
		parameterBinding(select_id, div_id, urlBinding, extraAttributes);
	});

	// Populate dropdown with list of provinces
	$.getJSON(urlProduct, function (data) {
		$.each(data, function (key, entry) {
			if(entry.status){
				dropdown.append($('<option></option>').attr('value', key).text(entry.title));
			}
		})
		if(product_id > 0){
			$('#' + select_id + ' option[value="'+product_id+'"]').attr('selected','selected');
			$('#' + select_id).trigger('change');
		}
	});	
}

function parameterBinding(select_id, div_id, urlBinding, extraAttributes){
	var product_id = $('#' + select_id).val();
	$.getJSON(urlBinding, function (data) {
		$.each(data, function (key, entry) {
			if(key == product_id){
				$('#' + div_id).html('');
				var inputNames = '';
				$.each(entry, function (index, value) {
					$('#' + div_id).append('<div class="form-group"><label for="' 
						+ value.id + '" class="control-label">' + value.title + 
						'</label><input type="text" class="form-control autosuggestion" data-error="Please Enter ' 
						+ value.title + '" ' + extraAttributes + ' data-url="parameter-value/autosuggest/' 
						+ value.id + '" name="' + value.id + '"><div class="help-block with-errors"></div></div>');						
					inputNames = inputNames + "#" + value.id;
				});
				$('#' + div_id).append('<input type="hidden" name="inputNames" value="' + inputNames + '" />');
				$('form').validator('update');
				if($('#autofill').val() != ''){
					var autofill = jQuery.parseJSON($('#autofill').val());
					$.each(autofill, function (inputName,values)
					{
						$('input[name="' + inputName + '"]').val(autofill[inputName]['value']);
					});
					$('#autofill').val('');
				}
			}
		});
	});
}
//Auto suggestion
$(function () {
	$('body').on('focus', ".autosuggestion", function () {
	    var dataUrl = $(this).attr('data-url');
	    $(this).autocomplete({
	        source: function (request, response) {
				$.ajax({
					url: "/master/" + dataUrl + "/" + request.term,
					type: "GET",
					data: request,
					success: function (data) {
						response( data );
					}
				});
	        }
	    });
	});
});

//Product Check box id set to products
$(function () {
	$('.products-checkbox').on('change', function () {
		var products = '';
		$('.products-checkbox').each(function(){
			if($(this).prop("checked") == true){
				products = products + $(this).val() + '#';
			}
		});
		console.log(products);
		$('#products').val(products);
	});
});

$(function () {
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
        $("#currentCP").val(currentCP);
    });
    $("body").on("click",".button-remove-CP",function(){ 
        currentCP--;
        if(currentCP < 5){
            $("#button-add-CP").removeClass("hidden");
        }
        $(this).parents(".div-CP-list").remove();
        $(".div-CP-list:last input[type!=hidden]:first").focus();
        $("#currentCP").val(currentCP);
        $("#"+formid).validator('update');
    });
});

$(function(){
	$(".fillBranch").each(function() {
		var owner_type = $(this).attr("data-owner-type");
		var owner_id = $(this).attr("data-owner-id");
		var urlBinding = '/storage/json/' + owner_type + 'Binding.json';

		let dropdown = $(this);
		dropdown.empty();
		dropdown.append('<option selected="true" disabled>Select Branch</option>');
		dropdown.prop('selectedIndex', 0);

		$.getJSON(urlBinding, function (data) {
			$.each(data, function (key, entry) {
				if(key == owner_id){
					$.each(entry, function (index, value) {
						dropdown.append($('<option></option>').attr('value', value.id).text(value.shop_name));
					});
				}
			});
		});
    });
});