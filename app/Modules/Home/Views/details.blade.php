@extends('Frontend.Layouts.master')

@section('title','Details')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/details.css') }}">
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')
	<div class="col-xs-12 col-md-6 col-md-offset-3 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1><img src="{{ URL::to('/assets/images/logo2.png') }}" alt="icon"> </h1>
				<p class="main">
					I Studied interior design because I believe everyone deserve a better living through quality design.<br>
				The internet is the new shopping center for people. Why not giving them the better quality spaces with simple steps.
				</p>
				<b>The easy way to design your home</b>
				<p class="main">An online interior design service, that will work with your style and budget anywhere you are.</p>
				<b>Personalized and within your budget</b>
				<p class="main">We can help you with any project</p>
				<a class="header-buttons">Start Your project</a>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection