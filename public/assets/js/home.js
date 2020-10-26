$(function(){
	var mainImage = $('.img-anc img').attr('src');
	var mainLogo = $('.navbar-image').attr('src');
	$(window).on('scroll',function(){
        if($(this).scrollTop() == 0){
            $('.navbar').css('backgroundColor','transparent');
           	$('.navbar').find('.navbar-image').css('height','161px');
           	$('.img-anc img').attr('src',mainImage);
           	$('.navbar-image').attr('src',mainLogo);
           	$('.nav li a').css('color','#252525');
        }else{
           $('.navbar').css('backgroundColor','rgba(37, 37, 37,.8)'); 
           $('.nav li a').not('.my-btn').attr('style','color: #F6F6F6 !important');
           $('.img-anc').find('img').attr('src','/assets/images/cart-icon2.png');
           $('.navbar-image').attr('src','/assets/images/logo.png');
           $('.navbar').find('.navbar-image').css('height','100px');
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
