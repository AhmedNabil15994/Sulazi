@extends('Frontend.Layouts.master')

@section('title',trans('main.link4'))

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/faqs.css') }}">
@endsection
@section('logo', URL::to('/assets/images/vlogo4.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')

	<div class="col-xs-12 col-md-12 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1 class="first-head">{{ trans('main.link4') }} </h1>
				<div class="row">
					<div class="col-xs-12 col-md-10 col-md-offset-1 faq-element open">
						<span class="pull-left first">1- {{ trans('main.faq_q1') }}</span>
						<span class="pull-right last"><i class="fa fa-minus"></i></span>
						<div class="clearfix"></div>
						<p>{{ trans('main.faq_a1') }}</p>
						<hr>
					</div>
					<div class="col-xs-12 col-md-10 col-md-offset-1 faq-element">
						<span class="pull-left first">2- {{ trans('main.faq_q2') }}</span>
						<span class="pull-right last"><i class="fa fa-plus"></i></span>
						<div class="clearfix"></div>
						<p>{{ trans('main.faq_a2') }}</p>
						<hr>
					</div>
					<div class="col-xs-12 col-md-10 col-md-offset-1 faq-element">
						<span class="pull-left first">3- {{ trans('main.faq_q3') }}</span>
						<span class="pull-right last"><i class="fa fa-plus"></i></span>
						<div class="clearfix"></div>
						<p>{{ trans('main.faq_a3') }}</p>
						<hr>
					</div>
					<div class="col-xs-12 col-md-10 col-md-offset-1 faq-element">
						<span class="pull-left first">4- {{ trans('main.faq_q4') }}</span>
						<span class="pull-right last"><i class="fa fa-plus"></i></span>
						<div class="clearfix"></div>
						<p>{{ trans('main.faq_a4') }}</p>
						<hr>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('scripts')
<script src="{{ URL::to('/assets/js/faqs.js') }}"></script>
@endsection