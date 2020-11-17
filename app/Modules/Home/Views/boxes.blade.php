@extends('Frontend.Layouts.master')

@section('title',trans('main.boxes'))

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/boxes.css') }}">
@endsection
@section('logo', URL::to('/assets/images/vlogo4.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')

	<div class="col-xs-12 col-md-12 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1>{{ trans('main.boxes') }} </h1>
				<p class="main">{{ trans('main.boxes_p') }}</p>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 box animate__animated">
						<a href="{{ URL::to('/boxDetails/1') }}">
							<img src="{{ URL::to('/assets/images/box1.png') }}" alt="box">
						</a>
						<p>{{ trans('main.boxes_box1') }}</p>
						<p>1500 {{ trans('main.boxes_ras') }}</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 box animate__animated">
						<a href="{{ URL::to('/boxDetails/2') }}">
							<img src="{{ URL::to('/assets/images/box2.png') }}" alt="box">
						</a>
						<p>{{ trans('main.boxes_box2') }}</p>
						<p>2500 {{ trans('main.boxes_ras') }}</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 box animate__animated">
						<a href="{{ URL::to('/boxDetails/3') }}">
							<img src="{{ URL::to('/assets/images/box3.png') }}" alt="box">
						</a>
						<p>{{ trans('main.boxes_box3') }}</p>
						<p>700 {{ trans('main.boxes_ras') }}</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 box animate__animated">
						<a href="{{ URL::to('/boxDetails/4') }}">
							<img src="{{ URL::to('/assets/images/box4.png') }}" alt="box">
						</a>
						<p>{{ trans('main.boxes_box4') }}</p>
						<p>3000 {{ trans('main.boxes_ras') }}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
d
@endsection