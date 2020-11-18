
$(function(){
	$('.select2').select2();

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
