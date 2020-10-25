@extends('Frontend.Layouts.master')

@section('title','Get Started')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/pages.css') }}">
<style type="text/css" media="screen">
	.page h1{
		margin-bottom: 30px !important;
	}
	.page p{
		font-weight: 500;
		font-size: 40px !important;
		margin-bottom: 0 !important;
	}
	.row a{
		margin-bottom: 100px;
	}
</style>
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')

	<div class="col-xs-12 col-md-8 col-md-offset-2 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1>Let's Show You Our Best Designers. </h1>
				<p>We Are Going To Ask You A Few Questions To Find Just The Right Fit.</p>
				<div class="row">
					<a class="header-buttons">Let's Get Started</a>
				</div>
			</div>
		</div>
	</div>

	

@endsection

@section('scripts')
<script>
	


</script>
@endsection