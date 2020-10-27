@extends('Frontend.Layouts.master')

@section('title','Boxes')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/boxes.css') }}">
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')

	<div class="col-xs-12 col-md-12 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1>The Boxes </h1>
				<p class="main">Select The Box And Number Of Room That Suit You From The Types Below.</p>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 box">
						<a href="{{ URL::to('/boxDetails') }}">
							<img src="{{ URL::to('/assets/images/box1.png') }}" alt="box">
						</a>
						<p>1 Room & 2 Designs</p>
						<p>1500 RS</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 box">
						<a href="{{ URL::to('/boxDetails') }}">
							<img src="{{ URL::to('/assets/images/box2.png') }}" alt="box">
						</a>
						<p>1 Room With Samples 2 Designs</p>
						<p>2500 RS</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 box">
						<a href="{{ URL::to('/boxDetails') }}">
							<img src="{{ URL::to('/assets/images/box3.png') }}" alt="box">
						</a>
						<p>Accessorizing</p>
						<p>700 RS</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 box">
						<a href="{{ URL::to('/boxDetails') }}">
							<img src="{{ URL::to('/assets/images/box4.png') }}" alt="box">
						</a>
						<p>3 Rooms & 2 Designs</p>
						<p>3000 RS</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
d
@endsection