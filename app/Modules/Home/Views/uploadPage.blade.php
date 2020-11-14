@extends('Frontend.Layouts.master')

@section('title',trans('main.card2_button'))

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/uploadpage.css') }}">
@endsection
@section('logo', URL::to('/assets/images/vlogo4.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')
	<div class="col-xs-12 col-md-6 col-md-offset-3 second-section uploadPage page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1>{{ trans('main.upload_your') }} </h1>
				<p>{{ trans('main.upload_p') }}</p>
				<div class="row">
					<a class="header-buttons upload">{{ trans('main.card2_button') }}</a>
					<input type="file" name="image" id="image" accept=".png, .jpg, .jpeg">
					<br>
					<div class="row upload-images"></div>
					<a class="header-buttons submit hidden">{{ trans('main.submit') }}</a>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
<script src="{{ URL::to('/assets/js/uploadpage.js') }}"></script>
@endsection