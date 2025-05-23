@php $className = ''; @endphp
@if(\Route::getCurrentRoute()->uri != '/')
@php $className = 'black-color'; @endphp
@endif
<nav class="navbar navbar-default {{ $className }}">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ URL::to('/') }}">
        <img class="navbar-image" src="@yield('logo')" alt="logo">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="mainLi"><a href="{{ URL::to('/') }}">{{ trans('main.link1') }} <span class="sr-only">(current)</span></a></li>
        <li class="dropdown mainLi">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ trans('main.link2') }} <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ URL::to('/details') }}">{{ trans('main.details') }}</a></li>
              <li><a href="{{ URL::to('/process') }}">{{ trans('main.process') }}</a></li>
              <li><a href="{{ URL::to('/prices') }}">{{ trans('main.price_package') }}</a></li>
            </ul>
        </li>
        <li class="dropdown mainLi">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ trans('main.link3') }} <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ URL::to('/boxes') }}">{{ trans('main.boxes') }}</a></li>
              <li><a href="{{ URL::to('/giftCard') }}">{{ trans('main.gift_card') }}</a></li>
            </ul>
        </li>
        <li class="mainLi"><a href="{{ URL::to('/faqs') }}">{{ trans('main.link4') }}</a></li>
        <li class="btr"><a class="my-btn" href="{{ URL::to('/getStarted') }}">{{ trans('main.link5') }}</a></li>
        <li class="langs">
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
                            <span class="kt-nav__link-text">En</span>
                        </a>
                    </li>
                    <li class="kt-nav__item lang-item {{ App::getLocale() == 'ar' ? 'kt-nav__item--active' : '' }}">
                        <a href="#" class="kt-nav__link">
                            <span class="kt-nav__link-icon"><img src="{{ asset('assets/media/flags/133-saudi-arabia.svg') }}" alt="" /></span>
                            <span class="kt-nav__link-text">Ar</span>
                        </a>
                    </li>
                </ul>
            </div>
          </div>
        </li>
        <li>
          <a class="@yield('has-cart') img-anc" href="#">
            <img src="@yield('cart')" alt="">
            <span class="cart-dot"></span>
          </a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>