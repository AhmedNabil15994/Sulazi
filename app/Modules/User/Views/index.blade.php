@extends('Layouts.master')
@section('title', 'Users')
@section('content')
@php  $classArray = ['label-success','label-danger','label-primary','label-warning'];  @endphp
<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                Users
            </h3>
            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            <div class="kt-subheader__group" id="kt_subheader_search">
                <span class="kt-subheader__desc" id="kt_subheader_total">
                    {{ count($data->data) }} Total </span>
            </div>
        </div>
        <div class="kt-subheader__toolbar">
            @if(\Helper::checkRules('add-user'))
            <a href="{{ URL::to('/users/add') }}" class="btn btn-label-brand btn-bold">
                Add User </a>
            @endif
        </div>
    </div>
</div>
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
    @foreach($data->data as $key => $user)
    @php $selectedClass = $classArray[$key % 4]; @endphp 
    @if($key % 3 == 0)
    </div>
    <div class="row">
    @endif
        <div class="col-xl-3">
            <!--Begin::Portlet-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head kt-portlet__head--noborder">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title"></h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <a href="#" class="btn btn-icon {{ $selectedClass }}" data-toggle="dropdown">
                            <i class="flaticon-more-1 kt-font-brand {{ $selectedClass }}"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="kt-nav">
                                @if(\Helper::checkRules('change-user-status'))    
                                <li class="kt-nav__item">
                                    <a href="{{ URL::to('/users/changeStatus/'.$user->id) }}" class="kt-nav__link">
                                        <i class="kt-nav__link-icon  fa fa-toggle-{{ $user->status == 1 ? 'on' : 'off' }}"></i>
                                        <span class="kt-nav__link-text">Change Status</span>
                                    </a>
                                </li>
                                @endif
                                @if(\Helper::checkRules('view-user'))    
                                <li class="kt-nav__item">
                                    <a href="{{ URL::to('/users/view/'.$user->id) }}" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon-eye"></i>
                                        <span class="kt-nav__link-text">View</span>
                                    </a>
                                </li>
                                @endif
                                @if(\Helper::checkRules('edit-user'))    
                                <li class="kt-nav__item">
                                    <a href="{{ URL::to('/users/edit/'.$user->id) }}" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon-edit"></i>
                                        <span class="kt-nav__link-text">Edit</span>
                                    </a>
                                </li>
                                @endif
                                @if(\Helper::checkRules('delete-user'))    
                                <li class="kt-nav__item">
                                    <a href="#" onclick="deleteUser('{{ $user->id }}')" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon-delete"></i>
                                        <span class="kt-nav__link-text">Delete</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-widget kt-widget--user-profile-2">
                        <div class="kt-widget__head">
                            <div class="kt-widget__media">
                                @if($user->image != '')
                                <img class="kt-widget__img kt-hidden-" src="{{ $user->image }}" alt="image">
                                @else
                                <div class="kt-widget__pic kt-widget__pic--success kt-font-success kt-font-boldest kt-hidden- {{ $selectedClass }}">
                                    {{ $user->nameAbrev }}
                                </div>
                                @endif
                            </div>
                            <div class="kt-widget__info">
                                <a href="#" class="kt-widget__username">
                                    {{ $user->name }}
                                </a>
                                <span class="kt-widget__desc">
                                    {{ $user->group }}
                                </span>
                            </div>
                        </div>
                        <div class="kt-widget__body">
                            <div class="kt-widget__section">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </div>
                            <div class="kt-widget__item">
                                <div class="kt-widget__contact">
                                    <span class="kt-widget__label">Email:</span>
                                    <a href="#" class="kt-widget__data">{{ $user->email }}</a>
                                </div>
                                <div class="kt-widget__contact">
                                    <span class="kt-widget__label">Phone:</span>
                                    <a href="#" class="kt-widget__data">{{ $user->phone }}</a>
                                </div>
                                <div class="kt-widget__contact">
                                    <span class="kt-widget__label" style="margin-top: -30px;">Location:</span>
                                    <span class="kt-widget__data">{!! $user->address !!}</span>
                                </div>
                            </div>
                        </div>
                        <div class="kt-widget__footer">
                            <button type="button" class="btn btn-label-brand btn-lg btn-upper kt_app_chat_launch_btn {{ $selectedClass }}" id="kt_app_chat_launch_btn" data-toggle="modal" data-target="#kt_chat_modal" data-area="{{ $user->id }}">Send Message</button>
                        </div>
                    </div>

                    <!--end::Widget -->
                </div>
            </div>
            <!--End::Portlet-->
        </div>
    @endforeach
    </div>
    <!--Begin::Pagination-->
    <div class="row">
        <div class="col-xl-12">
            <!--begin:: Components/Pagination/Default-->
            <div class="kt-portlet">
                <div class="kt-portlet__body">
                    @include('Partials.pagination')
                </div>
            </div>
            <!--end:: Components/Pagination/Default-->
        </div>
    </div>

    <!--End::Pagination-->
</div> 
@include('Partials.chat')     
@stop()
@section('script')
<!--begin::Page Scripts(used by this page) -->
<script src="{{ asset('assets/js/pages/crud/forms/widgets/bootstrap-switch.js') }}" type="text/javascript"></script>
<script src="https://js.pusher.com/5.1/pusher.min.js"></script>
<!--end::Page Scripts -->
<script type="text/javascript">
    window.senderId = "{{ USER_ID }}";
    window.pusherId = "{{ \App\Models\Variable::getVar('PUSHER_APP_KEY') }}";
</script>
<script src="{{ asset('assets/components/user-index.js') }}" type="text/javascript"></script>
@endsection