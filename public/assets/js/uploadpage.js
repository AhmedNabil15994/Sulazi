$(function(){
	$('.upload').on('click',function(){
		$('#image').click();
	});

	$('#image').on('change',function(){
        var url = window.URL.createObjectURL($(this)[0].files[0]);
        var myElement = '<div class="co-xs-12 col-md-4 myFile" style="background-image:url('+url+')">'+
        					'<div class="overlay"></div>'+
        					'<span><i class="fa fa-times"></i></span>'+
        				'</div>';
        $('.upload-images').append(myElement);
        if($('.submit').hasClass('hidden')){
        	$('.submit').removeClass('hidden');
        }
    });

	$('.upload-images').on('click','.myFile span',function(){
		$(this).parent('.col-md-4').remove();
	});

});