/* This is for subscription template */

jQuery( document ).ready(function($) {
   $("label[for=tipo]").parent().parent().hide();
    $( ".card" ).click(function() {
         $('div.card.my-card--selected').removeClass('my-card--selected');
         $(this).addClass('my-card--selected');
         $card_id = $(this).attr("id");
        $("select#tipo").val($card_id).change();
});
	console.log("working");
$( "<h2 class=`text-wisdom` style=margin-bottom:30px;>Subtotal</h2>" ).insertAfter( "table.variations" );

});

/* This is for wreaths template */
jQuery( document ).ready(function($) {
       
   $("label[for=dimensione]").parent().parent().hide();
    $( ".card" ).click(function() {
         $('div.card.my-card--selected').removeClass('my-card--selected');
         $(this).addClass('my-card--selected');
         $card_id = $(this).attr("id");
        $("select#dimensione").val($card_id).change();
});
});


/*jQuery( document ).ready(function($) {
  
  var div_id = $( "div.product-info" );
	$( div_id ).each(function( index ) {
		new_var = $(this).text();
      if (~new_var.indexOf("Bouqet")){
        $("#special_request_field").css("display", "block");
        $("#gift_card_field").css("display", "block");
        $("#budget_option_field").css("display", "block");
      }
      else{
        $("#special_request_field").css("display", "none");
        $("#gift_card_field").css("display", "none");
        $("#budget_option_field").css("display", "none");
      }

	});
 
});
*/


