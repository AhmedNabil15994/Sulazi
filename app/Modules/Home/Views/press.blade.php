@extends('Frontend.Layouts.master')

@section('title',trans('main.press'))

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/press.css') }}">
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')
	<div class="col-xs-12 col-md-12 second-section page press">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1>{{ trans('main.press') }} </h1>
				<div class="row">
					<div class="col-xs-12 myCard animate__animated">
						<img src="{{ URL::to('/assets/images/industrial.png') }}" alt="icon">
						<p>Website Name</p>
					</div>
					<div class="col-xs-12 myCard animate__animated">
						<img src="{{ URL::to('/assets/images/follow2.png') }}" alt="icon">
						<p>Website Name</p>
					</div>
					<div class="col-xs-12 myCard animate__animated">
						<img src="{{ URL::to('/assets/images/arts.png') }}" alt="icon">
						<p>Website Name</p>
					</div>
					<div class="col-xs-12 myCard animate__animated">
						<img src="{{ URL::to('/assets/images/tips2.png') }}" alt="icon">
						<p>Website Name</p>
					</div>
					<div class="col-xs-12 myCard animate__animated">
						<img src="{{ URL::to('/assets/images/follow2.png') }}" alt="icon">
						<p>Website Name</p>
					</div>
					<div class="col-xs-12 myCard animate__animated">
						<img src="{{ URL::to('/assets/images/follow3.png') }}" alt="icon">
						<p>Website Name</p>
					</div>
					<div class="col-xs-12 myCard animate__animated">
						<img src="{{ URL::to('/assets/images/tips3.png') }}" alt="icon">
						<p>Website Name</p>
					</div>
					<div class="col-xs-12 myCard animate__animated">
						<img src="{{ URL::to('/assets/images/box3.png') }}" alt="icon">
						<p>Website Name</p>
					</div>
					<div class="col-xs-12 myCard animate__animated">
						<img src="{{ URL::to('/assets/images/siosi.png') }}" alt="icon">
						<p>Website Name</p>
					</div>
					<div class="col-xs-12 myCard animate__animated">
						<img src="{{ URL::to('/assets/images/mid-country.png') }}" alt="icon">
						<p>Website Name</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection