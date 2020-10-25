@extends('Frontend.Layouts.master')

@section('title','Fifth')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/pages.css') }}">
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')
	<div class="col-xs-12 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1>Let's Talk About Your Budget - Where Do You Think You Fall? </h1>
				<div class="row">
					<div class="col-xs-12 col-md-3"></div>
					<div class="col-xs-12 col-md-2 col-sm-6 text-center">
						<div class="cards">
							<img src="{{ URL::to('/assets/images/thrifty.png') }}" alt="icon">							
						</div>
						<p>Thrifty</p>
					</div>
					<div class="col-xs-12 col-md-2 col-sm-6 text-center  active">
						<div class="cards">
							<img src="{{ URL::to('/assets/images/mix-high.png') }}" alt="icon">							
						</div>
						<p>Mix High & Low</p>
					</div>
					<div class="col-xs-12 col-md-2 col-sm-6 text-center">
						<div class="cards">
							<img src="{{ URL::to('/assets/images/only.png') }}" alt="icon">							
						</div>
						<p>Only The Best</p>
					</div>
					<div class="clearfix"></div>
					<a href="{{ URL::to('/questionnaire') }}" class="header-buttons">Continue</a>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection