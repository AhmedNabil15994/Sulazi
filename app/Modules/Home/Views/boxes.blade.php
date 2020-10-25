@extends('Frontend.Layouts.master')

@section('title','Boxes')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/pages.css') }}">
<style type="text/css" media="screen">
	.page h1{
		margin-bottom: 30px !important;
	}
	.page p.main{
		font-weight: 300;
		font-size: 20px !important;
		margin-bottom: 70px !important;
	}
	.select2-container--default .select2-search--dropdown .select2-search__field,
	.select2-container--default.select2-container--open.select2-container--below .select2-selection--single,
	.select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple,
	.select2-container--default .select2-selection--single .select2-selection__rendered{
		outline: 0;
	}
	.box{
		text-align: initial;
		padding-right: 40px !important;
	}
	.box img{
		width: 100%;
		min-height: 300px;
		border-radius: 15px;
	}
	.box p:first-of-type{
		font-weight: 300;
		font-size: 24px !important;
		margin-bottom: 0 !important;
		margin-top: 0 !important;
	}
	.box p:last-of-type{
		font-weight: bold !important;
		font-size: 24px !important;
		margin-top: 0 !important;
	}
	.row{
		margin-bottom: 50px;
	}
</style>
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')

	<div class="col-xs-12 col-md-12 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1>The Boxes </h1>
				<p class="main">Select The Box And Number Of Room That Suit You From The Types Below.</p>
				<div class="row">
					<div class="col-xs-12 col-md-6 box">
						<img src="{{ URL::to('/assets/images/box1.png') }}" alt="box">
						<p>1 Room & 2 Designs</p>
						<p>1500 RS</p>
					</div>
					<div class="col-xs-12 col-md-6 box">
						<img src="{{ URL::to('/assets/images/box2.png') }}" alt="box">
						<p>1 Room With Samples 2 Designs</p>
						<p>2500 RS</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6 box">
						<img src="{{ URL::to('/assets/images/box3.png') }}" alt="box">
						<p>Accessorizing</p>
						<p>700 RS</p>
					</div>
					<div class="col-xs-12 col-md-6 box">
						<img src="{{ URL::to('/assets/images/box4.png') }}" alt="box">
						<p>3 Rooms & 2 Designs</p>
						<p>3000 RS</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	

@endsection

@section('scripts')
<script>
	


</script>
@endsection