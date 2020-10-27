@extends('Frontend.Layouts.master')

@section('title','Shipping')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/shipping.css') }}">
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')
	<div class="col-xs-12 second-section page shipping">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1>Sulazi</h1>
				<p class="head-p text-center">
					<span>Information</span>
					<i class="fa fa-angle-right"></i>
					<span class="active">Shipping</span>
					<i class="fa fa-angle-right"></i>
					<span>Payment</span>
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
							<input type="radio" class="iRadio" name="iCheck" checked> 
							<span class="method">First Method</span> 
							<span class="price">450 SR</span><br>
							<span class="duration">Take From 4 To & Days</span><br>

							<input type="radio" class="iRadio" name="iCheck">
							<span class="method">Second Method</span> 
							<span class="price">450 SR</span><br>
							<span class="duration">Take From 4 To & Days</span><br>

							<input type="radio" class="iRadio" name="iCheck">
							<span class="method">Third Method</span> 
							<span class="price">450 SR</span><br>
							<span class="duration">Take From 4 To & Days</span>
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
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-xs-12 col-md-5 actions">
							<a href="{{ URL::to('/info') }}" class="back"><i class="fa fa-angle-left"></i> Back To Information</a>
							<a href="{{ URL::to('/payment') }}" class="header-buttons pull-right last">Continue To Payment</a>
						</div>		
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
<script src="{{ URL::to('/assets/js/shipping.js') }}"></script>
@endsection