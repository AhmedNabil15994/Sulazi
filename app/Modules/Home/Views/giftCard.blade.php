@extends('Frontend.Layouts.master')

@section('title','Gift Card')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/giftcard.css') }}">
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')

	<div class="col-xs-12 col-md-12 second-section page giftCard">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1 class="first-head">GIFT CARD</h1>
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<img src="{{ URL::to('/assets/images/gift-card.png') }}" alt="giftcard">
					</div>
					<div class="col-xs-12 col-md-6">
						<p>You Can Send A Gift Card Through Us Now!</p>
						<p class="value">250.00 SR</p>
						<p>Size</p>
						<span class="gift">50 SR</span>
						<span class="gift">150 SR</span>
						<span class="gift active">250 SR</span>
						<span class="gift">500 SR</span>
						<span class="gift">750 SR</span>
						<div class="clearfix"></div>
						<button class="header-buttons">Add To Cart</button>
						<button class="header-buttons">Buy It Now</button>
						<p>* Please include the Name and Address of recipient in the ORDER NOTES in the shopping cart or it will default to the purchaser's address.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('scripts')
<script src="{{ URL::to('/assets/js/gitcard.js') }}"></script>
@endsection