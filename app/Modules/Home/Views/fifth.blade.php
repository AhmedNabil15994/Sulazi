@extends('Frontend.Layouts.master')

@section('title',trans('main.sixth_page'))

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
				<h1>{{ trans('main.sixth_page_h') }}</h1>
				<div class="row">
					<form action="{{ URL::to('/sixth') }}" method="post" accept-charset="utf-8">
						@csrf
						<input type="hidden" name="step" value="2">
						<div class="col-xs-12 col-md-3"></div>
						<div class="col-xs-12 col-md-2 col-sm-6 text-center">
							<div class="cards">
								<img src="{{ URL::to('/assets/images/asap.png') }}" alt="icon">							
							</div>
							<p>{{ trans('main.sixth_asap') }}</p>
						</div>
						<div class="col-xs-12 col-md-2 col-sm-6 text-center  active">
							<div class="cards">
								<img src="{{ URL::to('/assets/images/soonish.png') }}" alt="icon">							
							</div>
							<p>{{ trans('main.sixth_soonish') }}</p>
						</div>
						<div class="col-xs-12 col-md-2 col-sm-6 text-center">
							<div class="cards rush">
								<img src="{{ URL::to('/assets/images/no-rush.png') }}" alt="icon">							
							</div>
							<p>{{ trans('main.sixth_rush') }}</p>
						</div>
						<div class="clearfix"></div>
						<button type="submit" class="header-buttons">{{ trans('main.continue') }}</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection