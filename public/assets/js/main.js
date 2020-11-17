/**
 * Notification JS
 */
function successNotification(message) {
    setTimeout(function () {
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "progressBar": true,
            "preventDuplicates": false,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "400",
            "hideDuration": "1000",
            "timeOut": "7000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        toastr.success('Sulazi', message);
    }, 1300);
}

function errorNotification(message) {
    setTimeout(function () {
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "progressBar": true,
            "preventDuplicates": false,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "400",
            "hideDuration": "1000",
            "timeOut": "7000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        toastr.error('Sulazi', message);
    }, 1300);
}


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
	$(document).on('click','.img-anc.has-cart',function(){
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
			}
		});
	});

	function indexInClass(collection, node) {
	  for (var i = 0; i < collection.length; i++) {
	    if (collection[i] === node)
	      return i;
	  }
	  return -1;
	}


	$('div.cards').on('click',function(){
		$(this).parent('.col-xs-12.text-center').addClass('active').siblings('.col-xs-12.text-center.active').removeClass('active');
		$(this).attr('id','activeCard').parent('.col-xs-12.text-center').siblings('.col-xs-12.text-center').children('.cards#activeCard').attr('id','');
		$(this).parent('.col-xs-12.text-center').siblings('input[name="step"]').val(indexInClass(document.getElementsByClassName('cards') , document.getElementById('activeCard') ) + 1);
	});

});
