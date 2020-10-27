@extends('Frontend.Layouts.master')

@section('title','Contact Us')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/contactus.css') }}">
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')

	<div class="col-xs-12 col-md-8 col-md-offset-2 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1>Contact Information</h1>
				<div class="row contact">
					<div class="col-xs-12 col-sm-4 col-md-4 contact-info">
						<div class="contact-data">
							<span>Phone Number</span>
							<span>+966 145 8575 123</span>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 contact-info">
						<div class="contact-data">
							<span>Email Address</span>
							<span>Example65@gmail.com</span>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 contact-info">
						<div class="contact-data">
							<span>Office Location</span>
							<span>El Dammam - KSA</span>
						</div>
					</div>
				</div>
				<h1>Contact Us</h1>
				<form action="#" method="get" accept-charset="utf-8">
					<span>Name</span>
					<input type="text" name="name" placeholder="John Doe">
					<span>Email Address</span>
					<input type="email" name="email" placeholder="Example@gmail.com">
					<span>Phone Number</span>
					<input type="text" name="phone" placeholder="+966 854 7555 141">
					<span>Message</span>
					<textarea type="text" name="phone" placeholder="Write Your Message Here..."></textarea>
					<button class="header-buttons">Send</button>
				</form>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection