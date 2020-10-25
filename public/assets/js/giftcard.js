$(function(){
	$('.col-md-6 span.gift').on('click',function(){
		var myVal = $(this).html();
		$(this).addClass('active').siblings('span.gift').removeClass('active');
		var myValues = String(parseFloat(myVal)) + '.00 SR';
		$('p.value').html(myValues);
	});
});