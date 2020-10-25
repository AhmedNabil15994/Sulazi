<!--begin::Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
<!--end::Fonts -->
<!--begin::Page Vendors Styles(used by this page) -->
<link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />

<!--end::Page Vendors Styles -->

<!--begin::Global Theme Styles(used by all pages) -->
<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@if(LANGUAGE_PREF == 'ar')
<link href="{{ asset('assets/css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
@else
<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
@endif

<!--end::Global Theme Styles -->

<!--begin::Layout Skins(used by all pages) -->

<!--end::Layout Skins -->
<link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />


<link rel="stylesheet" href="{{ asset('assets/production/css/toastr.min.css')}}">
<link href="{{ asset('assets/plugins/lou-multi-select/css/multi-select.css')}}" rel="stylesheet">

<style type="text/css" media="screen">
    .kt-widget.kt-widget--user-profile-2 .kt-widget__footer{
        margin-top: .5rem;
    }
    .kt-widget.kt-widget--users .kt-widget__item .kt-widget__action .kt-widget__date{
        font-size: 10px;
    }
    .kt-widget.kt-widget--users .kt-widget__item{
        margin-top: 0;
        margin-bottom: 10px;
    }
    input[type="file"]#attachment{
        display: none;
    }
    .kt-chat__text p a img{
        width: 200px;
        height: 200px;
    }
    .kt-chat .kt-chat__messages.main{
        height: 500px;
        overflow-y: scroll;
        padding-left: 20px;
        padding-right: 20px;
    }
    #kt_chat_aside .kt-portlet.kt-portlet--last{
        height: 100%;
        overflow-y: scroll;
    }
    .kt-chat{
        min-height: 700px;
    }
    div.kt-widget__item.contact{
        border:1px solid #DDD;
        border-radius: 2px;
        padding: 10px 5px;
        transition: all ease-in-out .25s;
        cursor: pointer;
    }
    div.kt-widget__item.contact:hover,div.kt-widget__item.contact:active,div.kt-widget__item.contact.active{
        background-color: #eee;
    }
    .chat-loader{
        height: 100%;
    }
    .chat-loader img{
        display: block;
        margin: auto;
        margin-top: 200px;
    }
    .kt-widget.kt-widget--user-profile-2 .kt-widget__head .kt-widget__media .kt-widget__img{
        height: 90px;
    }
    .label-success{
        background-color: rgba(29, 201, 183, 0.1) !important;
        color: #1dc9b7 !important;
    }
    .label-danger{
        background-color: rgba(253, 39, 235, 0.1) !important;
        color: #fd27eb !important;
    }
    .label-primary{
        background-color: rgba(88, 103, 221, 0.1) !important;
        color: #5867dd !important;
    }
    .label-warning{
        background-color: rgba(255, 184, 34, 0.1) !important;
        color: #ffb822 !important;
    }
    i.label-danger,i.label-success,i.label-primary,i.label-warning{
        background-color: transparent !important;
    }
	#tableList_filter{
        display: none !important;
    }
    .dt-buttons.btn-group.flex-wrap{
        display: none !important;
    }
    .chat-parent{
        display: block;
        width: 100%;
        min-height: 110px;
        clear: both;
    }
    #ms-custom-headers{
        width: 80%;
        margin: auto;
    }  
</style>