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
	var mainDir = $('html').attr('dir');
	$('.img-anc.has-cart').on('click',function(){
		if(mainDir == 'ltr'){
			$('.cart-aside').css('right','0');
		}else{
			$('.cart-aside').css('left','0');
		}
		$('#overlay').toggle();
	});

	$('.cart-aside .fa-times').on('click',function(){
		if(mainDir == 'ltr'){
			$('.cart-aside').css('right','-650px');
		}else{
			$('.cart-aside').css('left','-650px');
		}
		$('#overlay').toggle();
	});

	$(document).on('scroll',function(){
		$.each($('.animate__animated'),function(index,item){
			if($(document).scrollTop() >= $(item).position().top){
				$(item).addClass('animate__slow').toggleClass('animate__pulse');
				console.log('addClassHere');
			}
		});
	});
});
