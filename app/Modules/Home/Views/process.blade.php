@extends('Frontend.Layouts.master')

@section('title',trans('main.process'))

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/process.css') }}">
@endsection
@section('logo', URL::to('/assets/images/vlogo4.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')
	<div class="col-xs-12 col-md-12 second-section page process">
		<div class="container">
			<div class="interior roomlift text-center">
				<img class="img animate__animated animate__slow animate__pulse" src="{{ URL::to('/assets/images/process.png') }}" alt="process">
				<h1>{{ trans('main.our_process') }}</h1>
				<p>{{ trans('main.our_process_p1') }}</p>
				<p>{{ trans('main.our_process_p2') }}</p>
				<a class="header-button">{{ trans('main.start_your') }}</a>
			</div>
		</div>
	</div>

	<div class="col-xs-12 col-md-12 main-section page">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior process text-left">
					<div class="image-holder animate__animated">
						<img src="{{ URL::to('/assets/images/process3.png') }}" alt="arts">
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior process text-left">
					<h1>1- {{ trans('main.proces_h1') }}</h1>
					<p>{{ trans('main.proces_p1') }}</p>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior process text-left">
					<h1>2- {{ trans('main.proces_h2') }}</h1>
					<p>{{ trans('main.proces_p2') }}</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior process text-right">
					<div class="image-holder animate__animated">
						<img src="{{ URL::to('/assets/images/process3.png') }}" alt="arts">
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior process text-left">
					<div class="image-holder animate__animated">
						<img src="{{ URL::to('/assets/images/process3.png') }}" alt="arts">
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior process text-left">
					<h1>3- {{ trans('main.proces_h3') }}</h1>
					<p>{{ trans('main.proces_p3') }}</p>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior process text-left">
					<h1>4- {{ trans('main.proces_h4') }}</h1>
					<p>{{ trans('main.proces_p4') }}</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior process text-right">
					<div class="image-holder animate__animated">
						<img src="{{ URL::to('/assets/images/process3.png') }}" alt="arts">
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior process text-left">
					<div class="image-holder animate__animated">
						<img src="{{ URL::to('/assets/images/process3.png') }}" alt="arts">
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior process text-left">
					<h1>5- {{ trans('main.proces_h5') }}</h1>
					<p>{!! trans('main.proces_p5') !!}</p>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior process text-left">
					<h1>6- {{ trans('main.proces_h6') }}</h1>
					<p>{!! trans('main.proces_p6') !!}</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior images-section text-center">
					<div class="col-md-3 hidden-sm"></div>
					<div class="col-xs-12 col-sm-6 col-md-3 animate__animated">
						<img src="{{ URL::to('/assets/images/initial.png') }}" alt="initial">
						<p>2 {{ trans('main.proces_initial') }}</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 animate__animated">
						<img src="{{ URL::to('/assets/images/messages.png') }}" alt="messages">
						<p>{{ trans('main.proces_message') }}</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 animate__animated">
						<img src="{{ URL::to('/assets/images/final-design.png') }}" alt="final-design">
						<p>{{ trans('main.proces_final') }}</p>
					</div>
					<div class="clearfix hidden-sm"></div>
					<div class="col-md-3 hidden-sm"></div>
					<div class="col-xs-12 col-sm-6 col-md-3 animate__animated">
						<img src="{{ URL::to('/assets/images/floor-plan.png') }}" alt="floor-plan">
						<p>{{ trans('main.proces_floor') }}</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 animate__animated">
						<img src="{{ URL::to('/assets/images/shopping-list.png') }}" alt="shopping-list">
						<p>{{ trans('main.proces_shopping') }}</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 animate__animated">
						<img src="{{ URL::to('/assets/images/the-box.png') }}" alt="the-box">
						<p>{{ trans('main.proces_box') }}</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 text-center">
				<div class="interior process text-center">
					<h1>7- {{ trans('main.proces_h7') }}</h1>
					<img class="last-img animate__animated" src="{{ URL::to('/assets/images/process2.png') }}" alt="process">
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection