@extends('Frontend.Layouts.master')

@section('title',trans('main.fourth_page'))

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/third.css') }}">
@endsection
@section('logo', URL::to('/assets/images/vlogo4.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')
	<div class="col-xs-12 col-md-6 col-md-offset-3 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1>{{ trans('main.fourth_page_h') }} </h1>
				<p>{{ trans('main.fourth_page_p') }}</p>
				<div class="row">
					<select name="city_id" class="select2 my-select">
						<option value="">{{ trans('main.choose_city') }}</option>
					</select>
					<a href="{{ URL::to('/fourth') }}" class="header-buttons">{{ trans('main.continue') }}</a>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection