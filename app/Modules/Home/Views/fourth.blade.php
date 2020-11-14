@extends('Frontend.Layouts.master')

@section('title',trans('main.fifth_page'))

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/pages.css') }}">
@endsection
@section('logo', URL::to('/assets/images/vlogo4.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')
	<div class="col-xs-12 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1>{{ trans('main.fifth_page_h') }}</h1>
				<div class="row">
					<div class="col-xs-12 col-md-3"></div>
					<div class="col-xs-12 col-md-2 col-sm-6 text-center">
						<div class="cards">
							<img src="{{ URL::to('/assets/images/blank-space.png') }}" alt="icon">							
						</div>
						<p>{{ trans('main.fifth_blank') }}</p>
					</div>
					<div class="col-xs-12 col-md-2 col-sm-6 text-center  active">
						<div class="cards">
							<img src="{{ URL::to('/assets/images/partway.png') }}" alt="icon">							
						</div>
						<p>{{ trans('main.fifth_partway') }}</p>
					</div>
					<div class="col-xs-12 col-md-2 col-sm-6 text-center">
						<div class="cards">
							<img src="{{ URL::to('/assets/images/just-needs.png') }}" alt="icon">							
						</div>
						<p>{{ trans('main.fifth_just') }}</p>
					</div>
					<div class="clearfix"></div>
					<a href="{{ URL::to('/fifth') }}" class="header-buttons">{{ trans('main.continue') }}</a>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection