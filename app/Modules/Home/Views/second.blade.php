@extends('Frontend.Layouts.master')

@section('title','Second')

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
				<h1>Do You Rent Or Own Your Place? </h1>
				<div class="row">
					<div class="col-xs-12 col-md-4"></div>
					<div class="col-xs-12 col-md-2 col-sm-6 text-center  active">
						<div class="cards">
							<img src="{{ URL::to('/assets/images/rent.png') }}" alt="icon">							
						</div>
						<p>Rent</p>
					</div>
					<div class="col-xs-12 col-md-2 col-sm-6 text-center">
						<div class="cards">
							<img src="{{ URL::to('/assets/images/own.png') }}" alt="icon">							
						</div>
						<p>Own</p>
					</div>
					<div class="clearfix"></div>
					<a class="header-buttons">Continue</a>
				</div>
			</div>
		</div>
	</div>

	

@endsection

@section('scripts')
<script>
	


</script>
@endsection