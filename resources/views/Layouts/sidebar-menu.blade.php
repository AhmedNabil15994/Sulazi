<!-- begin:: Aside -->
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

<!-- begin:: Aside Menu -->
<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
    <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
        <ul class="kt-menu__nav ">
            <li class="kt-menu__item " aria-haspopup="true">
                <a href="{{ URL::to('/backend/dashboard') }}" class="kt-menu__link ">
                    <i class="kt-menu__link-icon flaticon2-protection"></i><span class="kt-menu__link-text">Dashboard</span>
                </a>
            </li>

            @if(\Helper::checkRules('list-users'))
            <li class="kt-menu__item  kt-menu__item--submenu {{ Active(URL::to('/backend/users*') , 'kt-menu__item--open') }} {{ Active(URL::to('/backend/groups*') , 'kt-menu__item--open') }}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                    <i class="kt-menu__link-icon  flaticon-users-1"></i>
                    <span class="kt-menu__link-text">Users</span><i class="kt-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                    <ul class="kt-menu__subnav">
                        @if(\Helper::checkRules('list-users'))
                        <li class="kt-menu__item {{ Active(URL::to('/backend/users') , 'kt-menu__item--open') }}" aria-haspopup="true">
                            <a href="{{ URL::to('/backend/users') }}" class="kt-menu__link ">
                                <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                <span class="kt-menu__link-text">Users</span>
                            </a>
                        </li>
                        @endif
                        @if(\Helper::checkRules('list-groups'))
                        <li class="kt-menu__item {{ Active(URL::to('/backend/groups*') , 'kt-menu__item--open') }}" aria-haspopup="true">
                            <a href="{{ URL::to('/backend/groups') }}" class="kt-menu__link ">
                                <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                <span class="kt-menu__link-text">Groups</span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
            </li>
            @endif
            @if(\Helper::checkRules('list-categories,list-shops'))
            <li class="kt-menu__item  kt-menu__item--submenu {{ Active(URL::to('/backend/categories*') , 'kt-menu__item--open') }} {{ Active(URL::to('/backend/shops*') , 'kt-menu__item--open') }}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon2-supermarket"></i><span class="kt-menu__link-text">Shops</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                    <ul class="kt-menu__subnav">
                        <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">Shops</span></span></li>
                        @if(\Helper::checkRules('list-categories'))
                        <li class="kt-menu__item {{ Active(URL::to('/backend/categories*') , 'kt-menu__item--open') }}" aria-haspopup="true"><a href="{{ URL::to('/backend/categories') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Categories</span></a></li>
                        @endif
                        @if(\Helper::checkRules('list-shops'))
                        <li class="kt-menu__item {{ Active(URL::to('/backend/shops*') , 'kt-menu__item--open') }}" aria-haspopup="true"><a href="{{ URL::to('/backend/shops') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Shops</span></a></li>
                        @endif
                    </ul>
                </div>
            </li>
            @endif

            <li class="kt-menu__item  kt-menu__item--submenu {{ Active(URL::to('/backend/variables*') , 'kt-menu__item--open') }}" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-settings-1"></i><span class="kt-menu__link-text">System </span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                    <ul class="kt-menu__subnav">
                        <li class="kt-menu__item  kt-menu__item--parent {{ Active(URL::to('/backend/variables*') , 'kt-menu__item--open') }}" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">System</span></span></li>
                        @if(\Helper::checkRules('list-variables'))
                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{ URL::to('/backend/variables') }}" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Settings </span></a></li>
                        @endif
                    </ul>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
</div>

<!-- end:: Aside Menu -->