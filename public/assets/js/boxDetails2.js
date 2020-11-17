$(function(){
	$('.gift').on('click',function(){
        var val = $(this).attr('value');
        var standard = 2500;
        $('span.cost').html(val * standard );
    });
});