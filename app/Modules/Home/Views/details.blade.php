@extends('Frontend.Layouts.master')

@section('title',trans('main.details'))

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/details.css') }}">
@endsection
@section('logo', URL::to('/assets/images/vlogo4.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')
	<div class="col-xs-12 col-md-6 col-md-offset-3 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1><img src="{{ URL::to('/assets/images/logo2.png') }}" alt="icon"> </h1>
				<b>{!! trans('main.about_b1') !!}</b>
				<p class="main">{!! trans('main.about_p1') !!}</p>
				<b>{!! trans('main.about_b2') !!}</b>
				<p class="main">{!! trans('main.about_p2') !!}</p>
				<b>{!! trans('main.about_b3') !!}</b>
				<p class="main">{!! trans('main.about_p3') !!}</p>
				<b>{!! trans('main.about_b4') !!}</b>
				<p class="main">{!! trans('main.about_p4') !!}</p>
				<a class="header-buttons">{{ trans('main.start_your') }}</a>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection