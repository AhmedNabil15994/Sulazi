@extends('Frontend.Layouts.master')

@section('title','Get Started')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/getstarted.css') }}">
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')
	<div class="col-xs-12 col-md-8 col-md-offset-2 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1>Let's Show You Our Best Designers. </h1>
				<p>We Are Going To Ask You A Few Questions To Find Just The Right Fit.</p>
				<div class="row">
					<a href="{{ URL::to('/first') }}" class="header-buttons">Let's Get Started</a>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection