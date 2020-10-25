<!DOCTYPE html>
<html lang="{{ LANGUAGE_PREF }}">
    <head>
        <meta name="description" content="Login page example">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Sulazi | @yield('title')</title>
        <meta name="description" content="Page with empty content">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        @include('Layouts.head')
        @yield('page-style')
        @yield('otherhead')
    </head>
    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-aside--minimize kt-page--loading" dir="{{ DIRECTION }}">
        @include('Layouts.mobile-header')
        <!-- end:: Header Mobile -->
        <div class="kt-grid kt-grid--hor kt-grid--root">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
                @include('Layouts.sidebar-menu')
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                    @include('Layouts.header')
                    @yield('content')
                    @include('Layouts.footer')
                </div>
            </div>
        </div>    
        
        @include('Layouts.scripts')
        @include('Partials.notf_messages')
    </body>
</html>
