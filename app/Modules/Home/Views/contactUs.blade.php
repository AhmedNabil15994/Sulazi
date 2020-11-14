@extends('Frontend.Layouts.master')

@section('title',trans('main.contact_us'))

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/contactus.css') }}">
@endsection
@section('logo', URL::to('/assets/images/vlogo4.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')

	<div class="col-xs-12 col-md-8 col-md-offset-2 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1>{{ trans('main.contact_info') }}</h1>
				<div class="row contact">
					<div class="col-xs-12 col-sm-4 col-md-4 contact-info">
						<div class="contact-data">
							<span>{{ trans('main.phone') }}</span>
							<span>+966 145 8575 123</span>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 contact-info">
						<div class="contact-data">
							<span>{{ trans('main.email') }}</span>
							<span>Example65@gmail.com</span>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 contact-info">
						<div class="contact-data">
							<span>{{ trans('main.office_loc') }}</span>
							<span>El Dammam - KSA</span>
						</div>
					</div>
				</div>
				<h1>{{ trans('main.contact_us') }}</h1>
				<form action="#" method="get" accept-charset="utf-8">
					<span>{{ trans('main.name') }}</span>
					<input type="text" name="name" placeholder="John Doe">
					<span>{{ trans('main.email') }}</span>
					<input type="email" name="email" placeholder="Example@gmail.com">
					<span>{{ trans('main.phone') }}</span>
					<input type="text" name="phone" placeholder="+966 854 7555 141">
					<span>{{ trans('main.contact_msg') }}</span>
					<textarea type="text" name="message" placeholder="{{ trans('main.msg2') }}"></textarea>
					<button class="header-buttons">{{ trans('main.send') }}</button>
				</form>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection