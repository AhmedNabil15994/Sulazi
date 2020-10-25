$(function(){
	$('.select2').select2();
	$('.plus').on('click',function(){
		$('span.values').html(parseInt($('span.values').html()) + 1 );
	});

	$('.minus').on('click',function(){
		var myValue = parseInt($('span.values').html());
		if(myValue > 1){
			$('span.values').html(myValue - 1 );
		}
	});

	$('.img-anc.has-cart').on('click',function(){
		$('.cart-aside').css('right','0');
		$('#overlay').toggle();
	});

	$('.cart-aside .fa-times').on('click',function(){
		$('.cart-aside').css('right','-650px');
		$('#overlay').toggle();
	});


});
