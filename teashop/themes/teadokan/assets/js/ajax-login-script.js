(function ($) {
"use strict";
jQuery(document).ready(function($){

$('.top-bar').on('click','.prd-sm-delete',function(){
		console.log(ajax_object);
		  $(this).closest('.prd-sm-item').append('<div class="loader-cart-delete"><img src="'+ajax_object.loader_img+'"></div>');
		  var id= $(this).data('product_id')
		  var qty= $(this).data('qty')
		  $.ajax({
		   type: "POST",
		   
		   url: ajax_object.ajax_url,
		   data: {
		    action : 'remove_item_from_cart',product_id : id},
		   success: function (res) {
		    if(res.fragments) {   
		     $('.cart-contents').replaceWith(res.fragments['a.cart-contents'])
		     $('.header-cart-dropdown').replaceWith(res.fragments['div.header-cart-dropdown'])
		    }
		    $('.loader-cart-delete').replaceWith('');
		   }
		  });
		 })
});
}(jQuery));
