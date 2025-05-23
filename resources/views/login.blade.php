<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

  <!-- begin::Head -->
  <head>
    
    <meta charset="utf-8" />
    <title>Saluzi| Login</title>
    <meta name="description" content="Login page example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

    <!--end::Fonts -->

    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{ asset('assets/css/pages/login/login-2.css') }}" rel="stylesheet" type="text/css" />

    <!--end::Page Custom Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/production/css/toastr.min.css')}}">

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
  </head>

  <!-- end::Head -->

  <!-- begin::Body -->
  <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-aside--minimize kt-page--loading">

    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root kt-page">
      <div class="kt-grid kt-grid--hor kt-grid--root kt-login kt-login--v2 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url({{ asset('assets/media/bg/bg-1.jpg') }});">
          <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
            <div class="kt-login__container">
              <div class="kt-login__logo">
                <a href="#">
                  <img src="{{ asset('assets/media/logos/logo-mini-2-md.png') }}">
                </a>
              </div>
              <div class="kt-login__signin">
                <div class="kt-login__head">
                  <h3 class="kt-login__title">Sign In To Admin</h3>
                </div>
                <form class="kt-form" action="{{ URL::current() }}" method="post">
                  @csrf
                  <div class="input-group">
                    <input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
                  </div>
                  <div class="input-group">
                    <input class="form-control" type="password" placeholder="Password" name="password">
                  </div>
                  <div class="row kt-login__extra">
                    <div class="col">
                      <label class="kt-checkbox">
                        <input type="checkbox" name="remember"> Remember me
                        <span></span>
                      </label>
                    </div>
                    <div class="col kt-align-right">
                      <a href="javascript:;" id="kt_login_forgot" class="kt-link kt-login__link">Forget Password ?</a>
                    </div>
                  </div>
                  <div class="kt-login__actions">
                    <button id="kt_login_signin_submit" class="btn btn-pill kt-login__btn-primary">Sign In</button>
                  </div>
                </form>
              </div>
              <div class="kt-login__signup">
                <div class="kt-login__head">
                  <h3 class="kt-login__title">Sign Up</h3>
                  <div class="kt-login__desc">Enter your details to create your account:</div>
                </div>
                <form class="kt-login__form kt-form" action="">
                  <div class="input-group">
                    <input class="form-control" type="text" placeholder="Fullname" name="fullname">
                  </div>
                  <div class="input-group">
                    <input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
                  </div>
                  <div class="input-group">
                    <input class="form-control" type="password" placeholder="Password" name="password">
                  </div>
                  <div class="input-group">
                    <input class="form-control" type="password" placeholder="Confirm Password" name="rpassword">
                  </div>
                  <div class="row kt-login__extra">
                    <div class="col kt-align-left">
                      <label class="kt-checkbox">
                        <input type="checkbox" name="agree">I Agree the <a href="#" class="kt-link kt-login__link kt-font-bold">terms and conditions</a>.
                        <span></span>
                      </label>
                      <span class="form-text text-muted"></span>
                    </div>
                  </div>
                  <div class="kt-login__actions">
                    <button id="kt_login_signup_submit" class="btn btn-pill kt-login__btn-primary">Sign Up</button>&nbsp;&nbsp;
                    <button id="kt_login_signup_cancel" class="btn btn-pill kt-login__btn-secondary">Cancel</button>
                  </div>
                </form>
              </div>
              <div class="kt-login__forgot">
                <div class="kt-login__head">
                  <h3 class="kt-login__title">Forgotten Password ?</h3>
                  <div class="kt-login__desc">Enter your email to reset your password:</div>
                </div>
                <form class="kt-form" action="">
                  <div class="input-group">
                    <input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
                  </div>
                  <div class="kt-login__actions">
                    <button id="kt_login_forgot_submit" class="btn btn-pill kt-login__btn-primary">Request</button>&nbsp;&nbsp;
                    <button id="kt_login_forgot_cancel" class="btn btn-pill kt-login__btn-secondary">Cancel</button>
                  </div>
                </form>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- end:: Page -->

    @include('Layouts.scripts')
    @include('Partials.notf_messages')
    <!--end::Page Scripts -->
  </body>

  <!-- end::Body -->
</html>