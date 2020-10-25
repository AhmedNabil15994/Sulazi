@extends('Frontend.Layouts.master')

@section('title','Third')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/third.css') }}">
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')
	<div class="col-xs-12 col-md-6 col-md-offset-3 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1>Where's Home For You Right Now? </h1>
				<p>Believe It Or Not, Different States Have Different Styles.</p>
				<div class="row">
					<select name="city_id" class="select2 my-select">
						<option value="">Choose A City</option>
					</select>
					<a href="{{ URL::to('/fourth') }}" class="header-buttons">Continue</a>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection