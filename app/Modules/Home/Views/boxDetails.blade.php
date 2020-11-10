@extends('Frontend.Layouts.master')

@section('title','Box Details')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/boxDetails.css') }}">
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')

	<div class="col-xs-12 col-md-12 second-section page boxDetails">
		<div class="container">
			<div class="interior roomlift text-center">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<img class="main-image animate__animated" src="{{ URL::to('/assets/images/details1.png') }}" alt="giftcard">
						<div class="slider">
						    <div class="lest animate__animated"><img src="{{ asset("/assets/images/details1.png") }}" alt="follow"></div>
					      	<div class="lest animate__animated"><img src="{{ asset("/assets/images/details1.png") }}" alt="follow"></div>
					      	<div class="lest animate__animated"><img src="{{ asset("/assets/images/details1.png") }}" alt="follow"></div>
					      	<div class="lest animate__animated"><img src="{{ asset("/assets/images/details1.png") }}" alt="follow"></div>
					      	<div class="lest animate__animated"><img src="{{ asset("/assets/images/details1.png") }}" alt="follow"></div>
					      	<div class="lest animate__animated"><img src="{{ asset("/assets/images/details1.png") }}" alt="follow"></div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<p>1 Room & 2 Designs</p>
						<p class="value">1500 SR</p>
						<p>Quantity</p>
						<span class="gift">1 room</span>
						<span class="gift active">2 room</span>
						<div class="clearfix"></div>
						<button class="header-buttons">Add To Cart</button>
						<button class="header-buttons">Buy It Now</button>
						<p>Each roomLift comes with two 15 minute phone or email consultations about your design.</p>
						<p>Each roomLift box will provide 2 design options, including:</p>
						<p>A scaled Floor Plan of your space, based on the dimensions and photos that you provided.</p>
						<p>Paint chip and/or wallpaper samples.</p>
						<p>roomLift Cards for each suggested item with specific information so that you can purchase it all yourself, directly from the retailer. No up-charges.roomLift 3 or more rooms and get a 20% discount on everything!</p>
					</div>
				</div>
				<div class="row">
					<div class="slider2">
					    <div class="lest animate__animated">
					    	<img src="{{ asset("/assets/images/details1.png") }}" alt="follow">
					    	<p class="lest-p">Accessorizing</p>
					    	<p>700 RS</p>
					    </div>
				      	<div class="lest animate__animated">
				      		<img src="{{ asset("/assets/images/details1.png") }}" alt="follow">
				      		<p class="lest-p">3 Rooms & 2 Designs</p>
					    	<p>3000 RS</p>
				      	</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('scripts')
<script src="{{ URL::to('/assets/js/boxDetails.js') }}"></script>
@endsection