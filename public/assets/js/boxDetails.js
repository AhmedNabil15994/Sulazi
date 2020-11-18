$(function(){
	$('.slider').bxSlider({
    	minSlides: 1,
    	maxSlides: 6,
    	responsive:true,
    	pager: false,
    });

    $('.slider2').bxSlider({
    	minSlides: 2,
    	maxSlides: 2,
    	responsive:true,
    	pager: false,
    });
    $('.gift').on('click',function(){
        $(this).addClass('active').siblings().removeClass('active');
    });

    
    $('.cart-button').on('click',function(e){
        e.preventDefault();
        e.stopPropagation();
        var title = $('.interior.roomlift.text-center .col-xs-12.col-md-6:last-of-type p:first-of-type').text();
        var price = $('.interior.roomlift.text-center .col-xs-12.col-md-6:last-of-type span.cost').text();
        var rooms = $('.interior.roomlift.text-center .col-xs-12.col-md-6:last-of-type .gift.active').attr('value');
        var image = $('.interior.roomlift.text-center img.main-image').attr('src');
        var cart_item_type = 'box';
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