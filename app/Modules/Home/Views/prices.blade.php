@extends('Frontend.Layouts.master')

@section('title',trans('main.price_package'))

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/prices.css') }}">
@endsection
@section('logo', URL::to('/assets/images/vlogo4.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')
	<div class="col-xs-12 col-md-12 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1 class="first-head">{{ trans('main.price_package') }} </h1>
				<div class="row">
					<div class="col-xs-12 myCard">
						<h1>1500 {{ trans('main.sar') }}</h1>
						<p>1 room</p>
						<p>2 designs</p>
						<a href="{{ URL::to('/getStarted') }}" class="header-buttons">{{ trans('main.link5') }}</a>
					</div>
					<div class="col-xs-12 myCard">
						<h1>2500 {{ trans('main.sar') }}</h1>
						<p>1 room with samples</p>
						<p>2 designs</p>
						<a href="{{ URL::to('/getStarted') }}" class="header-buttons">{{ trans('main.link5') }}</a>
					</div>
					<div class="col-xs-12 myCard">
						<h1>700 {{ trans('main.sar') }}</h1>
						<p>Accessorizing</p>
						<p style="visibility: hidden">Accessorizing</p>
						<a href="{{ URL::to('/getStarted') }}" class="header-buttons">{{ trans('main.link5') }}</a>
					</div>
					<div class="col-xs-12 myCard">
						<h1>3000 {{ trans('main.sar') }}</h1>
						<p>3 rooms</p>
						<p>2 designs</p>
						<a href="{{ URL::to('/getStarted') }}" class="header-buttons">{{ trans('main.link5') }}</a>
					</div>
					<div class="col-xs-12 myCard active">
						<span>Most Popular</span>
						<h1>1000 {{ trans('main.sar') }}</h1>
						<p>On Plan Changes</p>
						<p>2 designs</p>
						<a href="{{ URL::to('/getStarted') }}" class="header-buttons">{{ trans('main.link5') }}</a>
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection