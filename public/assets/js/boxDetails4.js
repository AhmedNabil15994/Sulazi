$(function(){
	$('.gift').on('click',function(){
        var val = $(this).attr('value');
        var standard = 1000;
        $('span.cost').html(val * standard );
    });
});