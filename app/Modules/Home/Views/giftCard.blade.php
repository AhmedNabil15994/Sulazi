@extends('Frontend.Layouts.master')

@section('title',trans('main.gift_card'))

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/giftcard.css') }}">
@endsection
@section('logo', URL::to('/assets/images/vlogo4.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')

	<div class="col-xs-12 col-md-12 second-section page giftCard">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1 class="first-head">{{ trans('main.gift_card') }}</h1>
				<div class="row">
					<div class="col-xs-12 col-md-6 animate__animated animate__slow animate__pulse">
						<img src="{{ URL::to('/assets/images/gift-card.png') }}" alt="giftcard">
					</div>
					<div class="col-xs-12 col-md-6">
						<p>{{ trans('main.gift_card_p') }}</p>
						<p class="value"><span class="cost">250</span> {{ trans('main.sar') }}</p>
						<p>{{ trans('main.size') }}</p>
						<span class="gift">50 {{ trans('main.sar') }}</span>
						<span class="gift">150 {{ trans('main.sar') }}</span>
						<span class="gift active">250 {{ trans('main.sar') }}</span>
						<span class="gift">500 {{ trans('main.sar') }}</span>
						<span class="gift">750 {{ trans('main.sar') }}</span>
						<div class="clearfix"></div>
						<button class="header-buttons cart-button">{{ trans('main.add_to_cart') }}</button>
						<button class="header-buttons">{{ trans('main.buy_it') }}</button>
						<p>* {{ trans('main.giftNote') }}.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('scripts')
<script src="{{ URL::to('/assets/js/giftcard.js') }}"></script>
@endsection