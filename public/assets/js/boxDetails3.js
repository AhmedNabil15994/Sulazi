$(function(){
	$('.gift').on('click',function(){
        var val = $(this).attr('value');
        var standard = 700;
        $('span.cost').html(val * standard );
    });
});