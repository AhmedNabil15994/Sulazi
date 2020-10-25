<!-- begin:: Header -->
<div id="kt_header" class="kt-header kt-grid kt-grid--ver  kt-header--fixed ">

    <!-- begin:: Aside -->
    <div class="kt-header__brand kt-grid__item  " id="kt_header_brand">
        <div class="kt-header__brand-logo">
            <a href="index.html">
                <img alt="Logo" src="{{ asset('assets/media/logos/logo-6.png') }}" />
            </a>
        </div>
    </div>

    <!-- end:: Aside -->

    <!-- begin:: Title -->
    <!-- <h3 class="kt-header__title kt-grid__item">
        Applications
    </h3> -->

    <!-- end:: Title -->

    <!-- begin: Header Menu -->
    <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
    <div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_header_menu_wrapper">
        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
            <ul class="kt-menu__nav ">
                <li class="kt-menu__item " aria-haspopup="true"><a href="index.html" class="kt-menu__link "><span class="kt-menu__link-text">Dashboard</span></a></li>
                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Qutations</span><i class="kt-menu__hor-arrow la la-angle-down"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item " aria-haspopup="true"><a href="components/base/colors.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">All Qutations</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="components/base/typography.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Convert Offers</span></a></li>
                        </ul>
                    </div>
                </li>
                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Project Management</span><i class="kt-menu__hor-arrow la la-angle-down"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item " aria-haspopup="true"><a href="components/base/colors.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">All projects</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="components/base/typography.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Convert projects</span></a></li>
                        </ul>
                    </div>
                </li>
                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Reports</span><i class="kt-menu__hor-arrow la la-angle-down"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item " aria-haspopup="true"><a href="components/base/colors.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Engineer Projects</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="components/base/typography.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Project follower</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="components/base/colors.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">productivity Engineer</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="components/base/typography.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">productivity Follwer</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="components/base/colors.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Reports on bid status</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="components/base/typography.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Status Report</span></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- end: Header Menu -->

    <!-- begin:: Header Topbar -->
    <div class="kt-header__topbar">

        <!--begin: Search -->
        <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown" id="kt_quick_search_toggle">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                <span class="kt-header__topbar-icon"><i class="flaticon2-search-1"></i></span>
            </div>
            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                <div class="kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact" id="kt_quick_search_dropdown">
                    <form method="get" class="kt-quick-search__form">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
                            <input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
                            <div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
                        </div>
                    </form>
                    <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="325" data-mobile-height="200">
                    </div>
                </div>
            </div>
        </div>

        <!--end: Search -->

        <!--begin: Notifications -->
        <div class="kt-header__topbar-item dropdown">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                <span class="kt-header__topbar-icon kt-header__topbar-icon--success"><i class="flaticon2-bell-alarm-symbol"></i></span>
                <span class="kt-hidden kt-badge kt-badge--danger"></span>
            </div>
            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                <form>

                    <!--begin: Head -->
                    <div class="kt-head kt-head--skin-dark kt-head--fit-x kt-head--fit-b" style="background-image: url({{ asset('assets/media/misc/bg-1.jpg') }})">
                        <h3 class="kt-head__title">
                            User Notifications
                            &nbsp;
                            <span class="btn btn-success btn-sm btn-bold btn-font-md">23 new</span>
                        </h3>
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-success kt-notification-item-padding-x" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications" role="tab" aria-selected="true">Alerts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs" role="tab" aria-selected="false">Logs</a>
                            </li>
                        </ul>
                    </div>

                    <!--end: Head -->
                    <div class="tab-content">
                        <div class="tab-pane active show" id="topbar_notifications_notifications" role="tabpanel">
                            <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-line-chart kt-font-success"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            New order has been received
                                        </div>
                                        <div class="kt-notification__item-time">
                                            2 hrs ago
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                            <div class="kt-grid kt-grid--ver" style="min-height: 200px;">
                                <div class="kt-grid kt-grid--hor kt-grid__item kt-grid__item--fluid kt-grid__item--middle">
                                    <div class="kt-grid__item kt-grid__item--middle kt-align-center">
                                        All caught up!
                                        <br>No new notifications.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--end: Notifications --

        <!--begin: Language bar -->
        <div class="kt-header__topbar-item kt-header__topbar-item--langs">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                <span class="kt-header__topbar-icon kt-header__topbar-icon--brand">
                    <img class="" src="{{ App::getLocale() == 'ar' ? asset('assets/media/flags/133-saudi-arabia.svg') : asset('assets/media/flags/226-united-states.svg') }}" alt="" />
                </span>
            </div>
            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim">
                <ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
                    <li class="kt-nav__item lang-item {{ App::getLocale() == 'en' ? 'kt-nav__item--active' : '' }}">
                        <a href="#" class="kt-nav__link">
                            <span class="kt-nav__link-icon"><img src="{{ asset('assets/media/flags/226-united-states.svg') }}" alt="" /></span>
                            <span class="kt-nav__link-text">English</span>
                        </a>
                    </li>
                    <li class="kt-nav__item lang-item {{ App::getLocale() == 'ar' ? 'kt-nav__item--active' : '' }}">
                        <a href="#" class="kt-nav__link">
                            <span class="kt-nav__link-icon"><img src="{{ asset('assets/media/flags/133-saudi-arabia.svg') }}" alt="" /></span>
                            <span class="kt-nav__link-text">Arabic</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!--end: Language bar -->

        <!--begin: User bar -->
        <div class="kt-header__topbar-item kt-header__topbar-item--user">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                <span class="kt-hidden kt-header__topbar-welcome">Hi,</span>
                <span class="kt-hidden kt-header__topbar-username">Nick</span>
                <img class="kt-hidden" alt="Pic" src="{{ asset('assets/media/users/300_21.jpg') }}" />
                <span class="kt-header__topbar-icon kt-hidden-"><i class="flaticon2-user-outline-symbol"></i></span>
            </div>
            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

                <!--begin: Head -->
                <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url({{ asset('assets/media/misc/bg-1.jpg') }})">
                    <div class="kt-user-card__avatar">
                        <img class="kt-hidden" alt="Pic" src="{{ asset('assets/media/users/300_25.jpg') }}" />

                        <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                        <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">S</span>
                    </div>
                    <div class="kt-user-card__name">
                        {{ FULL_NAME }}
                    </div>
                    <div class="kt-user-card__badge">
                        <span class="btn btn-success btn-sm btn-bold btn-font-md">0 messages</span>
                    </div>
                </div>

                <!--end: Head -->

                <!--begin: Navigation -->
                <div class="kt-notification">
                    <a href="custom/apps/user/profile-1/personal-information.html" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-calendar-3 kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title kt-font-bold">
                                My Profile
                            </div>
                            <div class="kt-notification__item-time">
                                Account settings and more
                            </div>
                        </div>
                    </a>
                    <a href="{{ URL::to('/messages') }}" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-mail kt-font-warning"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title kt-font-bold">
                                My Messages
                            </div>
                            <div class="kt-notification__item-time">
                                Inbox and tasks
                            </div>
                        </div>
                    </a>
                    <a href="custom/apps/user/profile-2.html" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-rocket-1 kt-font-danger"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title kt-font-bold">
                                My Activities
                            </div>
                            <div class="kt-notification__item-time">
                                Logs and notifications
                            </div>
                        </div>
                    </a>
                    <a href="custom/apps/user/profile-3.html" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-hourglass kt-font-brand"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title kt-font-bold">
                                My Tasks
                            </div>
                            <div class="kt-notification__item-time">
                                latest tasks and projects
                            </div>
                        </div>
                    </a>
                    <a href="custom/apps/user/profile-1/overview.html" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-cardiogram kt-font-warning"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title kt-font-bold">
                                Billing
                            </div>
                            <div class="kt-notification__item-time">
                                billing & statements <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">2 pending</span>
                            </div>
                        </div>
                    </a>
                    <div class="kt-notification__custom kt-space-between">
                        <a href="{{ URL::to('/backend/logout') }}" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
                        <a href="custom/user/login-v2.html" target="_blank" class="btn btn-clean btn-sm btn-bold">Upgrade Plan</a>
                    </div>
                </div>

                <!--end: Navigation -->
            </div>
        </div>
        <!--end: User bar -->
    </div>

    <!-- end:: Header Topbar -->
</div>

<!-- end:: Header -->