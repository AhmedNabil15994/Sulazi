@extends('Frontend.Layouts.master')

@section('title',trans('main.link5'))

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
				<h1>{{ trans('main.lets_h') }}</h1>
				<p>{{ trans('main.lets_p') }}</p>
				<div class="row">
					<a href="{{ URL::to('/first') }}" class="header-buttons">{{ trans('main.lets_button') }}</a>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection