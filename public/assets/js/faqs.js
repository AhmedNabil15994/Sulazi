$(function(){
	$('.faq-element span.last').on('click',function(e){
		e.preventDefault();
		e.stopPropagation();
		if($(this).parents('.faq-element').hasClass('open')){
			$(this).html('<i class="fa fa-plus"></i>');
			$(this).siblings('p').slideUp(250);
			$(this).parents('.faq-element').removeClass('open');
		}else{
			$(this).html('<i class="fa fa-minus"></i>');
			$(this).siblings('p').slideDown(250);
			$(this).parents('.faq-element').addClass('open');
		}
	});
});