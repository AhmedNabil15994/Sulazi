@extends('Frontend.Layouts.master')

@section('title','Third')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/pages.css') }}">
<style type="text/css" media="screen">
	.select2-container{
		display: block;
		padding: 5px 20px;
		border-radius: 40px;
		border: 1px solid #252525;
		background: transparent;
		color: #252525;
		outline: 0;
		margin:auto;
		margin-bottom: 100px;
		outline: 0;
		width: 500px !important;
	}
	.select2-container--default .select2-selection--single{
		border: 0;
		text-align: initial;
	}
	.select2-container--default .select2-selection--single .select2-selection__arrow{
		top: 7px;
		right: 15px;
	}
	.select2-container--default .select2-selection--single .select2-selection__arrow b{
		border-width: 7px 7px 0 7px;
	}
	.page h1{
		margin-bottom: 30px !important;
	}
	.page p{
		font-weight: 300;
		font-size: 26px !important;
		margin-bottom: 70px !important;
	}
	.select2-container--default .select2-search--dropdown .select2-search__field,
	.select2-container--default.select2-container--open.select2-container--below .select2-selection--single,
	.select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple,
	.select2-container--default .select2-selection--single .select2-selection__rendered{
		outline: 0;
	}
	select option{
		outline: 0;
	}
</style>
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')

	<div class="col-xs-12 col-md-6 col-md-offset-3 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1>Where's Home For You Right Now? </h1>
				<p>Believe It Or Not, Different States Have Different Styles.</p>
				<div class="row">
					<select name="city_id" class="select2 my-select">
						<option value="">Choose A City</option>
					</select>
					<a class="header-buttons">Continue</a>
				</div>
			</div>
		</div>
	</div>

	

@endsection

@section('scripts')
<script>
	


</script>
@endsection