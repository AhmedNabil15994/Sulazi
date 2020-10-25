@extends('Frontend.Layouts.master')

@section('title','Contact Us')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/pages.css') }}">
<style type="text/css" media="screen">
	.page h1{
		margin-bottom: 100px !important;
	}
	.page p{
		font-weight: 300;
		font-size: 26px !important;
		margin-bottom: 70px !important;
	}
	.contact{
		margin-bottom: 100px;
	}
	.contact-info{
		padding-right: 40px !important;
	}
	.contact-info .contact-data{
		background: #f6f6f6;
		padding: 15px 20px !important; 
	}
	.contact-info span{
		display: block;
		font-weight: 400px;
		font-family: Quicksand, sans-serif;
		font-size: 20px;
		letter-spacing: 2px;
	}
	.contact-info span:first-of-type{
		font-weight: 300px;
		letter-spacing: 0;
		font-size: 16px;
		margin-bottom: 20px;
	}
	form{
		width: 50%;
		display: block;
		margin: auto;
		text-align: initial;
	}
	form span{
		color: #252525;
		font-weight: 400;
		font-size: 18px;
		margin-bottom: 20px;
		display: block;
	}
	form input,
	form textarea{
		border: 1px solid #252525;
		border-radius: 40px;
		display: block;
		width: 100%;
		padding: 10px 20px;
		margin-bottom: 30px;
		outline: 0;
	}
	form textarea{
		min-width: 100%;
		max-width: 100%;
		min-height: 150px;
		border-radius: 15px;
	}
	button.header-buttons{
		width: 200px;
		display: block !important;
		margin: auto !important;
		padding: 10px 30px !important;
		margin-top: 50px !important;
		margin-bottom: 50px !important;
		outline: 0 !important;
	}
</style>
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')

	<div class="col-xs-12 col-md-8 col-md-offset-2 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1>Contact Information</h1>
				<div class="row contact">
					<div class="col-xs-12 col-md-4 contact-info">
						<div class="contact-data">
							<span>Phone Number</span>
							<span>+966 145 8575 123</span>
						</div>
					</div>
					<div class="col-xs-12 col-md-4 contact-info">
						<div class="contact-data">
							<span>Email Address</span>
							<span>Example65@gmail.com</span>
						</div>
					</div>
					<div class="col-xs-12 col-md-4 contact-info">
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
<script>
	


</script>
@endsection