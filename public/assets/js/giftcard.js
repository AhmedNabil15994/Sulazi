$(function(){
	$('.col-md-6 span.gift').on('click',function(){
		var myVal = $(this).html();
		$(this).addClass('active').siblings('span.gift').removeClass('active');
		$('.roomlift  span.cost').html(parseFloat(myVal));
	});

	$('.cart-button').on('click',function(e){
        e.preventDefault();
        e.stopPropagation();
        var title = $('.first-head').text();
        var price = $('.interior.roomlift .col-xs-12.col-md-6:last-of-type span.cost').text();
        var rooms = 0;
        var image = $('.interior.roomlift img').attr('src');
        var cart_item_type = 'giftCard';
        var count = 1;
        var cartItem = {
            'title': title,
            'price': price,
            'count': count,
            'cart_item_type': cart_item_type,
            'rooms': rooms,
            'image': image,
        };
        
        findInCart(cartItem);
        fillCartData();
        $('a.img-anc').addClass('has-cart');
        $('.img-anc.has-cart').click();
    });
});