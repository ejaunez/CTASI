/**
 * Eventos de la Página de Ventas
 */
$(document).ready(function(){

   /**
    * Sales Customer Selector OnChange Event Handler
    */
//	$("#SelectCustomerSelect").click(function(){
//		$("#SelectCustomerId").val($(this).val());
//		$("#SelectCustomerName").val(this.options[this.selectedIndex].innerHTML);
//		$("SelectCustomerSelect").slideUp();
//	});

	/**
	 * Sales Customer Name KeyUp Event Handler
	 */
//	$("#SelectCustomerName").on({
//		"keyup": function(){
//			var $select = $("#SelectCustomerSelect");
//			var custUrl = "/ctasiweb/customers";
//			
//			if( this.value && this.value.length >= 4 ) {
//				//alert("Mas de cuatro caracteres!!");
//				customerByNameOptions($select, custUrl, this.value);
//				$select.slideDown("slow");
//			}
//		}
//
//	});
	
	/**
	 * Select Customer Name Autocomplete suggestion
	 */
	$('#SelectCustomerName').autocomplete({
		serviceUrl: "/ctasiweb/customers/getNamesByToken",
//		lookup: customerNameSuggestions,
		onSelect: function (suggestion) {
		    alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
		    $('#SelectCustomerId').val(suggestion.data);
		}

	});
});
