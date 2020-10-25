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
				<h1>When Do You Need To Have Your Perfect Room? </h1>
				<div class="row">
					<div class="col-xs-12 col-md-3"></div>
					<div class="col-xs-12 col-md-2 col-sm-6 text-center">
						<div class="cards">
							<img src="{{ URL::to('/assets/images/asap.png') }}" alt="icon">							
						</div>
						<p>ASAP</p>
					</div>
					<div class="col-xs-12 col-md-2 col-sm-6 text-center  active">
						<div class="cards">
							<img src="{{ URL::to('/assets/images/soonish.png') }}" alt="icon">							
						</div>
						<p>Soonish</p>
					</div>
					<div class="col-xs-12 col-md-2 col-sm-6 text-center">
						<div class="cards">
							<img src="{{ URL::to('/assets/images/no-rush.png') }}" alt="icon">							
						</div>
						<p>No Rush</p>
					</div>
					<div class="clearfix"></div>
					<a href="{{ URL::to('/sixth') }}" class="header-buttons">Continue</a>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection