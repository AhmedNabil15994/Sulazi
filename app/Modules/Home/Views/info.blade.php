@extends('Frontend.Layouts.master')

@section('title','Information')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/info.css') }}">
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')
	<div class="col-xs-12 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1>Sulazi</h1>
				<p class="head-p text-center">
					<span class="active">Information</span>
					<i class="fa fa-angle-right"></i>
					<span>Shipping</span>
					<i class="fa fa-angle-right"></i>
					<span>Payment</span>
				</p>

				<div class="row">
					<div class="col-xs-12 col-md-5">
						<p class="title">Express Check Out</p>
						<div class="clearfix"></div>
						<div class="row buttons">
							<div class="col-xs-12 col-md-4">
								<button class="header-buttons"><img src="{{ URL::to('/assets/images/shop-pay.png') }}" alt="icon"></button>
							</div>
							<div class="col-xs-12 col-md-4">
								<button class="header-buttons"><img src="{{ URL::to('/assets/images/g-pay.png') }}" alt="icon"></button>
							</div>
							<div class="col-xs-12 col-md-4">
								<button class="header-buttons"><img src="{{ URL::to('/assets/images/paypal.png') }}" alt="icon"></button>
							</div>
						</div>

						<p class="title">OR</p>
						<div class="clearfix"></div>
						
						<div class="form">
							<p class="title">Contact Info</p>
							<div class="clearfix"></div>
							<div class="details">
								<span class="head-span">Email Address</span>
								<input type="email" name="email" placeholder="Example147@gmail.com">
								<input type="checkbox" class="iCheck" name="iCheck">
								<span class="icheck-info">Keep Me Up To Date On News And Exclusive Offers</span>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-2"></div>
					<div class="col-xs-12 col-md-5">
						<div class="payment-card">
							<div class="row">
								<div class="col-xs-12 col-md-3">
									<img src="{{ URL::to('/assets/images/process3.png') }}" alt="icon">
								</div>
								<div class="col-xs-8 col-md-7">
									<p>1 roomLift With Samples & 2 Designs</p>
									<span>1 room</span>
								</div>
								<div class="col-xs-4 col-md-2 text-center">
									<p>1500 SR</p>
								</div>
								<div class="clearfix"></div>
								<div class="col-xs-12">
									<hr>
								</div>
							</div>
							<div class="row text-left">
								<span class="head-span apply">Apply Code</span>
								<input type="text" class="reverse" name="apply_code" value="D7488a">
								<a class="header-buttons">Apply</a>
								<div class="col-xs-12">
									<hr>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 text-left">Subtotal</div>
								<div class="col-xs-6 text-right">1500 SR</div>
								<div class="clearfix"></div>
								<div class="col-xs-6 text-left">Shipping</div>
								<div class="col-xs-6 text-right">Calculated At Next Step</div>
								<div class="clearfix"></div>
								<div class="col-xs-12">
									<hr>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 text-left">Total</div>
								<div class="col-xs-6 text-right">+ 1500 SR</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>

				<div class="row text-left">
					<div class="col-xs-12">
						<p class="title">Shipping Address</p>
						<div class="form">
							<div class="col-xs-12 col-md-6 mg-bt-30">
								<span class="head-span">First Name</span>
								<input type="text" name="f_name" placeholder="John">
							</div>
							<div class="col-xs-12 col-md-6 mg-bt-30">
								<span class="head-span">Last Name</span>
								<input type="text" name="l_name" placeholder="Doe">
							</div>
							<div class="col-xs-12 col-md-6 mg-bt-30">
								<span class="head-span">Address</span>
								<input type="text" name="address" placeholder="Write Your Address Here.....">
							</div>
							<div class="col-xs-12 col-md-6 mg-bt-30">
								<span class="head-span">Apartment</span>
								<input type="text" name="apartment" placeholder="5">
							</div>
							<div class="col-xs-12 col-md-6 mg-bt-30">
								<span class="head-span">City</span>
								<select name="city" class="select2">
									<option value="0">Choose Your City</option>
								</select>
							</div>
							<div class="col-xs-12 col-md-6 mg-bt-30">
								<span class="head-span">Country</span>
								<select name="country" class="select2">
									<option value="0">Choose Your Country</option>
								</select>
							</div>
							<div class="col-xs-12 col-md-6 mg-bt-30">
								<span class="head-span">Government</span>
								<select name="government" class="select2">
									<option value="0">Choose Your Government</option>
								</select>
							</div>
							<div class="col-xs-12 col-md-6 mg-bt-30">
								<span class="head-span">Postal Code</span>
								<input type="text" name="postal_code" placeholder="54155">
							</div>
							<div class="clearfix"></div>
							<div class="col-xs-12 col-md-6">
								<span class="head-span">Phone</span>
								<input type="text" name="phone" placeholder="+966 651 5444 888">
							</div>
							<div class="clearfix"></div>
						</div>
						<a href="{{ URL::to('/shipping') }}" class="header-buttons pull-right last">Continue To Shipping</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
<script src="{{ URL::to('/assets/js/info.js') }}"></script>
@endsection