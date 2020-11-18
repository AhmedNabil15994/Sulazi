<!DOCTYPE html>
<html lang="en" dir="{{DIRECTION}}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ trans('main.website') }} - @yield('title')</title>
        @include('Frontend.Layouts.head')
        @include('Partials.notf_messages')
    </head>
    <body>
        @include('Frontend.Layouts.header')    
        <div id="overlay"></div>
        <div class="cart-aside">
            <h1>{{ trans('main.cart') }} <span class="pull-right"><i class="fa fa-times"></i></span></h1>
            <div class="cart-data">
                <div class="clearfix"></div>
                <div class="order-data">
                    <h1>{{ trans('main.order_notes') }}</h1>
                    <textarea class="" placeholder=""></textarea>
                    <span class="pull-left">{{ trans('main.subtotal') }}</span>
                    <span class="pull-right"><b class="total-cost">2500</b> {{ trans('main.sar') }}</span>
                    <div class="clearfix"></div>
                    <p>{{ trans('main.cart_p') }}</p>
                    <a href="{{ URL::to('/info') }}" class="header-button" title="">{{ trans('main.checkout') }}</a>
                </div>
            </div>
        </div>
        
        @yield('content')
        @include('Frontend.Layouts.footer')
    </body>
</html>