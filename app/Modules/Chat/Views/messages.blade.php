@extends('Layouts.master')
@section('title', 'Messages')
@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid kt-margin-t-25 kt-margin-b-25">
    <!--Begin::App-->
    <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
        <!--Begin:: App Aside Mobile Toggle-->
        <button class="kt-app__aside-close" id="kt_chat_aside_close">
            <i class="la la-close"></i>
        </button>
        <!--End:: App Aside Mobile Toggle-->

        <!--Begin:: App Aside-->
        <div class="kt-grid__item kt-app__toggle kt-app__aside kt-app__aside--lg kt-app__aside--fit" id="kt_chat_aside">
            <!--begin::Portlet-->
            <div class="kt-portlet kt-portlet--last">
                <div class="kt-portlet__body">
                    <div class="kt-searchbar">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="kt-widget kt-widget--users kt-mt-20">
                        <div class="kt-scroll kt-scroll--pull">
                            <div class="kt-widget__items">
                                @foreach($data->messages as $message)
                                @if($message->sender_id == USER_ID)
                                @php 
                                $image = $message->receiver_image; 
                                $name = $message->receiver; 
                                @endphp
                                @else
                                @php 
                                $image = $message->sender_image; 
                                $name = $message->sender; 
                                @endphp
                                @endif
                                @if(!empty($message->messages))
                                <div class="kt-widget__item contact" data-area="{{ $message->id }}">
                                    <span class="kt-media kt-media--circle">
                                        <img src="{{ $image != '' ? $image : asset('/assets/images/avatar.png') }}" alt="image">
                                    </span>
                                    <div class="kt-widget__info">
                                        <div class="kt-widget__section">
                                            <a href="#" class="kt-widget__username">{{ ucwords($name) }}</a>
                                            {{-- <span class="kt-badge kt-badge--success kt-badge--dot"></span> --}}
                                        </div>
                                        <span class="kt-widget__desc">
                                            @if(!empty($message->messages))
                                            @php 
                                            $extra = '';
                                            @endphp
                                            @if($message->messages[0]->created_by == USER_ID)
                                            @php 
                                            $extra = '<span>You: </span>';
                                            @endphp
                                            @endif
                                            {!! $extra.$message->messages[0]->message !!}
                                            @endif
                                        </span>
                                    </div>
                                    <div class="kt-widget__action">
                                        @if(!empty($message->messages))
                                        <span class="kt-widget__date">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($message->messages[0]->created_at))->diffForHumans() }}</span>
                                        @endif
                                        @if($message->unreadCount > 0)
                                        <span class="kt-badge kt-badge--success kt-font-bold">{{ $message->unreadCount }}</span>
                                        @endif
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end::Portlet-->
        </div>

        <!--End:: App Aside-->

        <!--Begin:: App Content-->
        <div class="kt-grid__item kt-grid__item--fluid kt-app__content" id="kt_chat_content">
            <div class="kt-chat">
                <div class="kt-portlet kt-portlet--head-lg kt-portlet--last all-messages kt-hidden">
                    <div class="kt-portlet__head">
                        <div class="kt-chat__head ">
                            <div class="kt-chat__left"></div>
                            <div class="kt-chat__center">
                                <div class="kt-chat__label">
                                    <a href="#" class="kt-chat__title">Jason Muller</a>
                                    {{-- <span class="kt-chat__status">
                                        <span class="kt-badge kt-badge--dot kt-badge--success"></span> Active
                                    </span> --}}
                                </div>
                            </div>
                            <div class="kt-chat__right">
                                
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-scroll kt-scroll--pull" data-mobile-height="300">
                            <div class="kt-chat__messages main">
                                <div class="kt-chat__message">
                                    <div class="kt-chat__user">
                                        <span class="kt-media kt-media--circle kt-media--sm">
                                            <img src="assets/media/users/100_12.jpg" alt="image">
                                        </span>
                                        <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                        <span class="kt-chat__datetime">2 Hours</span>
                                    </div>
                                    <div class="kt-chat__text kt-bg-light-success">
                                        How likely are you to recommend our company <br>to your friends and family?
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right">
                                    <div class="kt-chat__user">
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                        <a href="#" class="kt-chat__username">You</span></a>
                                        <span class="kt-media kt-media--circle kt-media--sm">
                                            <img src="assets/media/users/300_21.jpg" alt="image">
                                        </span>
                                    </div>
                                    <div class="kt-chat__text kt-bg-light-brand">
                                        Hey there, we’re just writing to let you know <br>that you’ve been subscribed to a repository on GitHub.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-chat__input">
                            <div class="kt-chat__editor">
                                <textarea id="message" style="height: 50px" placeholder="Type here..."></textarea>
                                <input type="file" name="attachment" id="attachment" accept=".pdf,.png,.jpg,.jpeg">
                            </div>
                            <div class="kt-chat__toolbar">
                                <div class="kt_chat__tools">
                                    <a href="#"><i class="flaticon2-photograph"></i></a>
                                    <a href="#"><i class="flaticon-interface"></i></a>
                                </div>
                                <div class="kt_chat__actions">
                                    <button type="button" class="btn btn-brand btn-md btn-upper btn-bold kt-chat__reply">reply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chat-loader kt-hidden">
                    <img src="{{ asset('/assets/production/images/loader.gif') }}" alt="">
                </div>
            </div>
        </div>

        <!--End:: App Content-->
    </div>
    <!--End::App-->
</div>
@stop()
@section('script')
<!--begin::Page Scripts(used by this page) -->
<script src="https://js.pusher.com/5.1/pusher.min.js"></script>
<!--end::Page Scripts -->
<script type="text/javascript">
    window.senderId = "{{ USER_ID }}";
    window.pusherId = "{{ \App\Models\Variable::getVar('PUSHER_APP_KEY') }}";
</script>
<script src="{{ asset('assets/components/messages.js') }}" type="text/javascript"></script>
@endsection