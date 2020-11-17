$(function(){
	$('.upload').on('click',function(){
		$('#image').click();
	});

    var selecImgs=[];
	$('#image').on('change',function(){
        var url = window.URL.createObjectURL($(this)[0].files[0]);
        selecImgs.push($(this)[0].files[0]);
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
        var index = $(this).parent('.col-md-4').index();
        selecImgs.splice(index,1);
		$(this).parent('.col-md-4').remove();
	});

    $('.uploadPage').on('click','a.submit',function(e){
        e.preventDefault();
        e.stopPropagation();
        var formData = new FormData();
        formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
        if (selecImgs.length > 0) {
            for (var i = 0; i < selecImgs.length; i++) {
                formData.append('images[]', selecImgs[i]);
            }
        }
        $.ajax({
            type:'POST',
            url: '/uploadFiles',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data)
            {   
                if(data.status.status == 1){
                    successNotification(data.status.message);
                    setTimeout(function(){
                        window.location.href='/';
                    },5000);
                }else{
                    errorNotification(data.status.message);
                }
            },
        });
    });

});