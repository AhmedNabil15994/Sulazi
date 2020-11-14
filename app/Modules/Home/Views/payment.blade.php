@extends('Frontend.Layouts.master')

@section('title','Payment')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/payment.css') }}">
@endsection
@section('logo', URL::to('/assets/images/vlogo4.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')
	<div class="col-xs-12 second-section page payment">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1>Sulazi</h1>
				<p class="head-p text-center">
					<span>Information</span>
					<i class="fa fa-angle-right"></i>
					<span>Shipping</span>
					<i class="fa fa-angle-right"></i>
					<span class="active">Payment</span>
				</p>

				<div class="row">
					<div class="col-xs-12 col-md-5">
						<p class="title">Contact Info</p>
						<a class="header-buttons pull-right">Change</a>
						<div class="clearfix"></div>
						<div class="details">
							asmaa@gmail.com
						</div>

						<p class="title">Ship To</p>
						<a class="header-buttons pull-right">Change</a>
						<div class="clearfix"></div>
						<div class="details">
							<p>Full Address</p>
							<p>Full Name</p>
							<p>City</p>
							<p>Postal Code</p>
							<p>Country</p>
						</div>

						<p class="title">Shipping Method</p>
						<div class="clearfix"></div>
						<div class="details">
							<span class="method">First Method</span> 
							<span class="price">450 SR</span><br>
						</div>

						<p class="title">Payment</p>
						<div class="clearfix"></div>
						<div class="details menu">
							<div class="data-div">
								<input type="radio" class="iRadio" name="iCheck" checked> 
								<span class="method">Credit Card</span> 
							</div>
							<hr>
							<div class="data-div">
								<span class="head-span">Card Number</span>
								<input type="text" name="card_no" placeholder="Card Numbe">
							</div>
							<div class="data-div">
								<span class="head-span">Name On Card</span>
								<input type="text" name="name_card" placeholder="Name On Card">
							</div>
							<div class="data-div">
								<span class="head-span">Expiration Date</span>
								<input type="text" name="expiry_date" placeholder="MM/YY">
							</div>
							<div class="data-div mg-bt-30">
								<span class="head-span">Security Code</span>
								<input type="text" name="security_code" placeholder="Code">
							</div>
							<hr>
							<div class="data-div">
								<input type="radio" class="iRadio" name="iCheck"> 
								<span class="method">Paypal</span> 
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
								<div class="col-xs-6 text-right">200 SR</div>
								<div class="clearfix"></div>
								<div class="col-xs-12">
									<hr>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 text-left">Total</div>
								<div class="col-xs-6 text-right">1700 SR</div>
							</div>
						</div>
					</div>
				</div>

				<div class="clearfix"></div>

				<div class="row text-left">
					<div class="col-xs-12">
						<p class="title">Billing Address</p>
						<span class="last-spans">Select The Address That Matches Your Card Or Payment Method</span>
						<div class="forms">
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
						<div class="col-xs-12 last-text text-left">
							<input type="checkbox" class="iCheck" name="myCheck"> <span class="last-save"> Save My Information For A Faster Checkout</span> 
							<div class="clearfix"></div>
						</div>

						<a href="{{ URL::to('/shipping') }}" class="back"><i class="fa fa-angle-left"></i> Back To Shipping</a>
						<a class="header-buttons pull-right last">Pay Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
<script src="{{ URL::to('/assets/js/payment.js') }}"></script>
@endsection