$(function(){

	var mainImage = $('.img-anc img').attr('src');
	var mainLogo = $('.navbar-image').attr('src');
	$(window).on('scroll',function(){
        if($(this).scrollTop() == 0){
            $('.navbar').addClass('transparent-color');
            $('.navbar').removeClass('back-color');
           	$('.navbar').find('.navbar-image').removeClass('fixed-height');
           	$('.img-anc img').attr('src',mainImage);
           	$('.navbar-image').attr('src',mainLogo);
        }else{
            if($(window).width() > '767'){
              $('.navbar').addClass('back-color');
              $('.navbar').removeClass('transparent-color');
              $('.navbar').find('.navbar-image').addClass('fixed-height');
              $('.img-anc').find('img').attr('src','/assets/images/cart-icon2.png');
              $('.navbar-image').attr('src','/assets/images/logo.png');
            }
           
        }
    });
    
    var swiper = new Swiper('#first', {
      	slidesPerView: 1,
      	spaceBetween: 30,
      	loop: true,
      	centeredSlides: true,
      	autoplay: {
        	delay: 2500,
        	disableOnInteraction: false,
      	},
      	pagination: {
        	el: '.swiper-pagination',
        	clickable: true,
      	},
    });

    $('.slider').bxSlider({
    	minSlides: 1,
    	maxSlides: 6,
    	responsive:true,
    	pager: false,
      touchEnabled: false,
    });

    $('.slider2').bxSlider({
    	minSlides: 1,
    	maxSlides: 3,
    	responsive:true,
    	pager: false,
      touchEnabled: false,
    });

});
