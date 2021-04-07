/* This is for subscription template */

jQuery( document ).ready(function($) {
   $("label[for=tipo]").parent().parent().hide();
    $( ".card" ).click(function() {
         $('div.card.my-card--selected').removeClass('my-card--selected');
         $(this).addClass('my-card--selected');
         $card_id = $(this).attr("id");
        $("select#tipo").val($card_id).change();
});	
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
