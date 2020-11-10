<!DOCTYPE html>
<html lang="en" dir="{{DIRECTION}}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sulazi - @yield('title')</title>
        @include('Frontend.Layouts.head')
        @include('Partials.notf_messages')
    </head>
    <body>
        @include('Frontend.Layouts.header')    
        <div id="overlay"></div>
        <div class="cart-aside">
            <h1>Cart <span class="pull-right"><i class="fa fa-times"></i></span></h1>
            <div class="cart-data">
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <img src="{{ URL::to('/assets/images/follow2.png') }}" alt="icon">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <p>1 roomLift with Samples & 2 Designs</p>
                    <span class="pull-left">1 room</span>
                    <span class="pull-right">1500 SR</span>
                    <div class="clearfix"></div>
                    <a href="#" class="minus"><i class="fa fa-minus"></i></a>
                    <span class="values">1</span>
                    <a href="#" class="plus"><i class="fa fa-plus"></i></a>
                </div>
                <div class="clearfix"></div>
                <hr>
                <div class="order-data">
                    <h1>Order Notes</h1>
                    <textarea class="" placeholder="Write What You Want.."></textarea>
                    <span class="pull-left">Subtotal</span>
                    <span class="pull-right">2500 SR</span>
                    <div class="clearfix"></div>
                    <p>Shipping, Taxes,Discounts Codes Calculated At Checkout.</p>
                    <a href="#" class="header-button" title="">Checkout</a>
                </div>
            </div>
        </div>
        
        @yield('content')
        @include('Frontend.Layouts.footer')
    </body>
</html>