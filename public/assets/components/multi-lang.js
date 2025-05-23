$(function(){
	$('li.lang-item').on('click',function(e){
		e.preventDefault();
		e.stopPropagation();
		var locale = $(this).is(':last-child') ? 'ar' : 'en';
		var _token = $('meta[name="csrf-token"]').attr('content');
		$.ajax({
			url : '/language',
			type : 'POST',
			data:{
				"_token" : _token,
				"locale": locale,
			},
			datatype: "json",
			complete:function(data){
				window.location.reload(true);
			}

		});
	});
});
