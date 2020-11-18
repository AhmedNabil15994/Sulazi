@extends('Frontend.Layouts.master')

@section('title',trans('main.box_det'))

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/boxDetails.css') }}">
@endsection
@section('logo', URL::to('/assets/images/vlogo4.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')

	<div class="col-xs-12 col-md-12 second-section page boxDetails">
		<div class="container">
			<div class="interior roomlift text-center">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<img class="main-image animate__animated" src="{{ URL::to('/assets/images/box2.png') }}" alt="giftcard">
						<div class="slider">
						    <div class="lest animate__animated"><img src="{{ asset("/assets/images/box2.png") }}" alt="follow"></div>
					      	<div class="lest animate__animated"><img src="{{ asset("/assets/images/box2.png") }}" alt="follow"></div>
					      	<div class="lest animate__animated"><img src="{{ asset("/assets/images/box2.png") }}" alt="follow"></div>
					      	<div class="lest animate__animated"><img src="{{ asset("/assets/images/box2.png") }}" alt="follow"></div>
					      	<div class="lest animate__animated"><img src="{{ asset("/assets/images/box2.png") }}" alt="follow"></div>
					      	<div class="lest animate__animated"><img src="{{ asset("/assets/images/box2.png") }}" alt="follow"></div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<p>{{ trans('main.boxes_box2') }}</p>
						<p class="value"><span class="cost">2500</span> {{ trans('main.sar') }}</p>
						<p>{{ trans('main.quantity') }}</p>
						<span class="gift active" value="1">1 {{ trans('main.room') }}</span>
						<span class="gift" value="2">2 {{ trans('main.room') }}</span>
						<div class="clearfix"></div>
						<button class="header-buttons cart-button">{{ trans('main.add_to_cart') }}</button>
						<button class="header-buttons">{{ trans('main.buy_it') }}</button>
						<p>{{ trans('main.box_det_p1') }}</p>
						<p>{{ trans('main.box_det_p2') }}</p>
						<p>{{ trans('main.box_det_p3') }}</p>
						<p>{{ trans('main.box_det_p4') }}</p>
						<p>{{ trans('main.box_det_p5') }}</p>
					</div>
				</div>
				<div class="row">
					<div class="slider2">
					    <div class="lest animate__animated">
					    	<img src="{{ asset("/assets/images/box3.png") }}" alt="follow">
					    	<p class="lest-p">{{ trans('main.boxes_box3') }}</p>
					    	<p>700 {{ trans('main.boxes_ras') }}</p>
					    </div>
				      	<div class="lest animate__animated">
				      		<img src="{{ asset("/assets/images/box4.png") }}" alt="follow">
				      		<p class="lest-p">{{ trans('main.boxes_box4') }}</p>
					    	<p>3000 {{ trans('main.boxes_ras') }}</p>
				      	</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('scripts')
<script src="{{ URL::to('/assets/js/boxDetails.js') }}"></script>
<script src="{{ URL::to('/assets/js/boxDetails2.js') }}"></script>
@endsection