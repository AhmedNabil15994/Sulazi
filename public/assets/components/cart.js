
function findInCart(myObj){
    var cart = JSON.parse(getCookie('cartItems'));
    if( cart == null ){
        setCookie('cartItems',JSON.stringify([myObj]),2);
    }else{
        var flag = 0;
        $.each(cart,function(index,item){
            if(item.cart_item_type == myObj.cart_item_type && item.rooms == myObj.rooms && item.price / item.count == myObj.price / myObj.count && item.title == myObj.title){
                item.count = item.count+1;
                item.price = parseInt(item.price) + parseInt(myObj.price);
                flag = 1;
            }
        })
        if(!flag){
            cart.push(myObj);
        }
        setCookie('cartItems',JSON.stringify(cart),2);
    }
}

function removeFromCart(myObj){
    var cart = JSON.parse(getCookie('cartItems'));
    if( cart != null ){
        $.each(cart,function(index,item){
            if(item.cart_item_type == myObj.cart_item_type && item.rooms == myObj.rooms && item.price / item.count == myObj.price / myObj.count && item.title == myObj.title){
                if(item.count > 1){
                    item.count = item.count-1;
                    item.price = parseInt(item.price) - parseInt(myObj.price);
                }else{
                    cart.splice(index, 1);
                }
            }
        })
        setCookie('cartItems',JSON.stringify(cart),2);
    }
}

function fillCartData(){
    var cartItems = JSON.parse(getCookie('cartItems'));
    var ItemDesigns = '';
    var room = '';
    var sr = '';
    if($('html').attr('dir') == 'rtl'){
        room = 'غرفة';
        sr = 'ر.س';
    }else{
        room = 'room';
        sr = 'SR';
    }
    $('.cart-data .datas').remove();
    $.each(cartItems,function(index,item){
        var roomClass ='';
        var elementData = '';
        if(item.rooms == 0){
            roomClass = 'hiddenVis';
            elementData = '<p><span class="title">'+item.title+'</span><span class="pull-right"><span class="cost">'+item.price +'</span> '+ sr+'</span></p>'+
                                '<span class="pull-left '+roomClass+'" value="'+item.rooms+'">'+item.rooms +' '+ room+'</span>';
        }else{
            elementData = '<p><span class="title">'+item.title+'</span></p>'+
                                '<span class="pull-left '+roomClass+'" value="'+item.rooms+'">'+item.rooms +' '+ room+'</span>'+
                                '<span class="pull-right"><span class="cost">'+item.price +'</span> '+ sr+'</span>';
        }
        ItemDesigns=   '<div class="datas">'+
                            '<div class="col-xs-12 col-sm-12 col-md-4">'+
                                '<img src="'+item.image+'" alt="icon">'+
                            '</div>'+
                            '<div class="col-xs-12 col-sm-12 col-md-8" data-type="'+item.cart_item_type+'">'+
                                elementData+
                                '<div class="clearfix"></div>'+
                                '<a href="#" class="minus" data-rate="'+item.price/item.count+'"><i class="fa fa-minus"></i></a>'+
                                '<span class="values">'+item.count+'</span>'+
                                '<a href="#" class="plus" data-rate="'+item.price/item.count+'"><i class="fa fa-plus"></i></a>'+
                            '</div>'+
                            '<div class="clearfix"></div>'+
                            '<hr>'+
                        '</div>';
        $('.cart-data').prepend(ItemDesigns);
    });
    calcTotals();
}

function calcTotals(){
    var totals = 0;
    $.each($('.cart-data span.cost'),function(index,item){
        totals+= parseInt($(item).text());
    });
    $('.cart-data .total-cost').html(totals);
}

$(function(){

    fillCartData();
    
    var cart = JSON.parse(getCookie('cartItems'));
    if( cart != null && cart.length > 0){
        $('a.img-anc').addClass('has-cart');
    }
  
    $(document).on('click','.plus',function(){
        var elem = $(this).parents('.datas');
        var myValue = parseInt(elem.find('span.values').html());
        elem.find('span.values').html(myValue + 1 );
        elem.find('span.cost').html($(this).data('rate') * parseInt(elem.find('span.values').html()));
        
        var title = elem.find('.col-md-8 p:first-of-type span.title').text();
        var price = $(this).data('rate');
        var rooms = elem.find('span.pull-left').attr('value');
        var image = elem.find('.col-md-4 img').attr('src');
        var cart_item_type = elem.find('.col-md-8').data('type');
        
        var count = 1;
        var cartItem = {
            'title': title,
            'price': price,
            'count': count,
            'cart_item_type': cart_item_type,
            'rooms': rooms,
            'image': image,
        };
        
        findInCart(cartItem);
        calcTotals();
    });

    $(document).on('click','.minus',function(){
        var elem = $(this).parents('.datas');
        var myValue = parseInt(elem.find('span.values').html());
        var title = elem.find('.col-md-8 p:first-of-type span.title').text();
        var price = $(this).data('rate');
        var rooms = elem.find('span.pull-left').attr('value');
        var image = elem.find('.col-md-4 img').attr('src');
        var cart_item_type = elem.find('.col-md-8').data('type');

        var count = 1;
        var cartItem = {
            'title': title,
            'price': price,
            'count': count,
            'cart_item_type': cart_item_type,
            'rooms': rooms,
            'image': image,
        };

        removeFromCart(cartItem);
        calcTotals();

        if(myValue > 1){
            elem.find('span.values').html(myValue - 1 );
            elem.find('span.cost').html($(this).data('rate') * (myValue-1) );
        }else{
            elem.fadeOut(300, function(){ $(this).remove();calcTotals();});
            if($('.datas').length == 1){
                $('a.img-anc.has-cart').removeClass('has-cart');
                $('.cart-aside .fa-times').click();
                removeCookie('cartItems');
            }
            
        }
    });

    var mainDir = $('html').attr('dir');
    $(document).on('click','.img-anc.has-cart',function(){
        if(mainDir == 'ltr'){
            $('.cart-aside').css('right','0');
        }else{
            $('.cart-aside').css('left','0');
        }
        fillCartData();
        $('#overlay').show();
    });

    
    $('.cart-aside .fa-times').on('click',function(){
        if(mainDir == 'ltr'){
            $('.cart-aside').css('right','-650px');
        }else{
            $('.cart-aside').css('left','-650px');
        }
        $('#overlay').hide();
    });

});