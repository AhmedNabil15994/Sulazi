function deleteUser($id) {
    swal.fire({
        "title": "Are you sure?",
        "text": "You will not be able to recover this imaginary data!",
        "type": "warning",
        "confirmButtonClass": "btn btn-secondary"
    }).then((result) => {
        if(result.value){
            swal.fire("Deleted!", "Your imaginary data has been deleted.", "success");
            $.get('/backend/users/delete/' + $id,function(data) {
                if (data == 1) {
                    location.reload();
                } 
            });
        }
    });
}

var pusher = new Pusher(window.pusherId, {
    cluster: 'eu',
    forceTLS: true
});

var channel = pusher.subscribe('receiver-'+window.senderId);
channel.bind('my-event', function(data) {
    if(data.from == window.receiver_id && data.to == window.senderId && data.from != window.senderId){
        if(data.msg.sender_image == ''){
            data.msg.sender_image = '/assets/images/avatar.png';
        }
        if(data.msg.message_type == 0){
            var element = '<div class="chat-parent pull-left">'+
                            '<div class="kt-chat__message kt-chat__message--success">'+
                                '<div class="kt-chat__user">'+
                                    '<span class="kt-media kt-media--circle kt-media--sm">'+
                                        '<img src="'+data.msg.sender_image+'" alt="image">'+
                                    '</span>'+
                                    '<a href="#" class="kt-chat__username"></span></a>'+
                                    '<span class="kt-chat__datetime">'+data.msg.time+'</span>'+
                                '</div>'+
                                '<div class="kt-chat__text">'+data.msg.message+'</div>'+
                          '</div></div>';

            $(element).appendTo($('.kt-chat__messages'));
        }else if(data.msg.message_type == 1){
            var element = '<div class="chat-parent pull-left">'+
                            '<div class="kt-chat__message kt-chat__message--success">'+
                                '<div class="kt-chat__user">'+
                                    '<span class="kt-media kt-media--circle kt-media--sm">'+
                                        '<img src="'+data.msg.sender_image+'" alt="image">'+
                                    '</span>'+
                                    '<a href="#" class="kt-chat__username"></span></a>'+
                                    '<span class="kt-chat__datetime">'+data.msg.time+'</span>'+
                                '</div>'+
                                '<div class="kt-chat__text">'+
                                    '<p><a target="_blank" href="'+data.msg.file_url+'"><i class="fa fa-paperclip"></i> ' + data.msg.message + '</a></p>'+
                                '</div>'+
                          '</div></div>';

            $(element).appendTo($('.kt-chat__messages'));
        }else if(data.msg.message_type == 2){
            var element = '<div class="chat-parent pull-left">'+
                            '<div class="kt-chat__message kt-chat__message--success">'+
                                '<div class="kt-chat__user">'+
                                    '<span class="kt-media kt-media--circle kt-media--sm">'+
                                        '<img src="'+data.msg.sender_image+'" alt="image">'+
                                    '</span>'+
                                    '<a href="#" class="kt-chat__username"></span></a>'+
                                    '<span class="kt-chat__datetime">'+data.msg.time+'</span>'+
                                '</div>'+
                                '<div class="kt-chat__text">'+
                                    '<p><a target="_blank" href="'+data.msg.file_url+'"><img src="'+data.msg.file_url+'"> </a></p>'+
                                '</div>'+
                          '</div></div>';

            $(element).appendTo($('.kt-chat__messages'));
        }
    }

    $(".kt-scroll").animate({ scrollTop: 20000000 }, "slow");
});

function changeChat(sender_id,receiver_id){
    $('.chat-loader.hidden').removeClass('hidden');
    $('#kt_chat_modal .kt-chat__messages').empty();
    $.get('/messages/check/' + sender_id +'/'+receiver_id,function(data) {
        $.each(data.messages.messages,function(index,item){
            if(item.created_by == senderId){
                var image = image = data.messages.receiver_image;
                if(item.created_by == data.messages.sender_id){
                    image = data.messages.sender_image;
                }
                if(image == ''){
                    image = '/assets/images/avatar.png';
                }
                var liClass = 'kt-chat__message kt-chat__message--right kt-chat__message--brand';
                var childDiv = '<div class="kt-chat__user">'+
                                    '<span class="kt-chat__datetime">'+item.created_at+'</span>'+
                                    '<a href="#" class="kt-chat__username"></span></a>'+
                                    '<span class="kt-media kt-media--circle kt-media--sm">'+
                                        '<img src="'+image+'" alt="image">'+
                                    '</span>'+
                                '</div>';
                var pull = 'pull-right';
            }else{
                var image = image = data.messages.sender_image;
                if(item.created_by == data.messages.receiver_id){
                    image = data.messages.receiver_image;
                }
                if(image == ''){
                    image = '/assets/images/avatar.png';
                }
                var liClass = 'kt-chat__message kt-chat__message--success';
                var childDiv = '<div class="kt-chat__user">'+
                                    '<span class="kt-media kt-media--circle kt-media--sm">'+
                                        '<img src="'+image+'" alt="image">'+
                                    '</span>'+
                                    '<a href="#" class="kt-chat__username"></span></a>'+
                                    '<span class="kt-chat__datetime">'+item.created_at+'</span>'+
                                '</div>';
                var pull = 'pull-left';
            }
            if(item.message_type == 0){
                var element = '<div class="chat-parent '+pull+'"><div class="'+liClass+'">'+
                                childDiv+
                                '<div class="kt-chat__text">'+item.message+'</div>'+
                          '</div></div>';

                $(element).appendTo($('#kt_chat_modal .kt-chat__messages'));
            }else if(item.message_type == 1){
                var element = '<div class="chat-parent '+pull+'"><div class="'+liClass+'">'+
                                childDiv+
                                '<div class="kt-chat__text">'+
                                    '<p><a target="_blank" href="'+item.file_url+'"><i class="fa fa-paperclip"></i>'+item.message+'</a></p>'+
                                '</div>'+
                          '</div></div>';
                $(element).appendTo($('#kt_chat_modal .kt-chat__messages'));
            }else if(item.message_type == 2){
                var element = '<div class="chat-parent '+pull+'"><div class="'+liClass+'">'+
                                childDiv+
                                '<div class="kt-chat__text">'+
                                    '<p><a target="_blank" href="'+item.file_url+'"><img src="'+item.file_url+'"></a></p>'+
                                '</div>'+
                          '</div></div>';
                $(element).appendTo($('#kt_chat_modal .kt-chat__messages'));
            }
        });
    })
    $(".kt-scroll").animate({ scrollTop: 20000000 }, "slow");
}

$('.kt_app_chat_launch_btn').on('click',function(e){
    e.preventDefault();
    e.stopPropagation();
    if($('#kt_chat_modal').hasClass('show') && $('body').hasClass('modal-open')){
        $('#kt_chat_modal').modal('hide');
    }else{
        var receiver_id = $(this).attr('data-area');
        window.receiver_id = receiver_id;
        var sender_id = window.senderId;
        var receiver_name = $(this).parent('.kt-widget__footer').siblings('.kt-widget__head').children('.kt-widget__info').children('a.kt-widget__username').html();
        var receiver_image = $(this).parent('.kt-widget__footer').siblings('.kt-widget__head').children('.kt-widget__media').children('img.kt-widget__img').attr('src');
        if(receiver_image == null){
            receiver_image = window.location.origin +'/assets/images/avatar.png';
        }
        $('a.kt-chat__title').html(receiver_name);
        changeChat(sender_id,receiver_id);
        $('#kt_chat_modal').modal('show');
    }

});

function newMessage(message,urlFile,imageH,imageW,fileType) {
    if($.trim(message) == '') {
        return false;
    }
    
    var url =  "/messages/with/:key".replace(':key',window.receiver_id);
    $formData = new FormData();
    if(fileType != 0){
      $formData.append('file_url', urlFile);
    }
    $formData.append('img_height', imageH);
    $formData.append('img_width', imageW);
    $formData.append('message_type', fileType);
    $formData.append('message', message);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: url,
        type: 'POST',
        data: $formData ,
        dataType: 'json',
        contentType: false,
        processData: false,
        success: function (data) {
          if(fileType == 0){
            var element = '<div class="chat-parent pull-right">'+
                            '<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">'+
                                '<div class="kt-chat__user">'+
                                    '<span class="kt-chat__datetime">'+data.messages.time+'</span>'+
                                    '<a href="#" class="kt-chat__username"></span></a>'+
                                    '<span class="kt-media kt-media--circle kt-media--sm">'+
                                        '<img src="'+data.messages.sender_image+'" alt="image">'+
                                    '</span>'+
                                '</div>'+
                                '<div class="kt-chat__text">'+data.messages.message+'</div>'+
                          '</div></div>';

            $(element).appendTo($('.kt-chat__messages'));
          }else if(fileType == 1){
            var element = '<div class="chat-parent pull-right">'+
                            '<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">'+
                                '<div class="kt-chat__user">'+
                                    '<span class="kt-chat__datetime">'+data.messages.time+'</span>'+
                                    '<a href="#" class="kt-chat__username"></span></a>'+
                                    '<span class="kt-media kt-media--circle kt-media--sm">'+
                                        '<img src="'+data.messages.sender_image+'" alt="image">'+
                                    '</span>'+
                                '</div>'+
                                '<div class="kt-chat__text">'+
                                    '<p><a target="_blank" href="'+urlFile+'"><i class="fa fa-paperclip"></i> ' + message + '</a></p>'+
                                '</div>'+
                          '</div></div>';

            $(element).appendTo($('.kt-chat__messages'));
          }else if(fileType == 2){
            var element = '<div class="chat-parent pull-right">'+
                            '<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">'+
                                '<div class="kt-chat__user">'+
                                    '<span class="kt-chat__datetime">'+data.messages.time+'</span>'+
                                    '<a href="#" class="kt-chat__username"></span></a>'+
                                    '<span class="kt-media kt-media--circle kt-media--sm">'+
                                        '<img src="'+data.messages.sender_image+'" alt="image">'+
                                    '</span>'+
                                '</div>'+
                                '<div class="kt-chat__text">'+
                                    '<p><a target="_blank" href="'+urlFile+'"><img src="'+urlFile+'"> </a></p>'+
                                '</div>'+
                          '</div></div>';

            $(element).appendTo($('.kt-chat__messages'));
          }
          // $('li.contact.active .wrap span.contact-status.label-danger').empty();
          $(".kt-scroll").animate({ scrollTop: 20000000 }, "slow");
        },        
    });

    $('#message').val(null);
};

$(document).on('click','.kt_chat__tools a',function(){
    $('#attachment').click();
});

$("#attachment").change(function (){
    var $file = document.getElementById('attachment');
    $formData = new FormData();
    if ($file.files.length > 0) {
        for (var i = 0; i < $file.files.length; i++) {
            $formData.append('attachment', $file.files[i]);
        }
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "/messages/uploadAttachment",
        type: 'POST',
        data: $formData ,
        dataType: 'json',
        contentType: false,
        processData: false,
        success: function (data) {
            if(data[2] == 'image'){
                newMessage(data[0],data[1],data[3],data[4],2)
            }else{
                newMessage(data[0],data[1],data[3],data[4],1)
            }
        },        
        error: function(data){
            console.log('error');
        }
    });
});

$('#kt_chat_modal .kt-chat__reply').on('click',function(e) {
    e.preventDefault();
    e.stopPropagation();
    newMessage($("#kt_chat_modal #message").val(),'',0,0,0);
});

$('#kt_chat_modal #message').on('keydown', function(e) {
    if (e.keyCode == 13) {
        newMessage($("#kt_chat_modal #message").val(),'',0,0,0);
        return false;
    }
});