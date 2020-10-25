@extends('Frontend.Layouts.master')

@section('title','Prices')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/pages.css') }}">
<style type="text/css" media="screen">
	.page h1.first-head{
		margin-bottom: 150px !important;
	}
	.myCard{
		display: inline-block;
		float: left;
		padding: 30px !important;
		width: 18%;
		margin-right: 2%;
		border-radius: 10px;
		background: #f6f6f6;
		min-height: 303px;
	}
	.myCard h1{
		font-weight: 300 !important;
		margin-bottom: 30px !important;
	}
	.myCard p{
		font-weight: 300;
		margin-top: 10px !important;
		color: #252525 !important;
		font-size: 20px !important;
	}
	div.row{
		margin-bottom: 50px !important;
	}
	.myCard .header-buttons{
		color: #FFF !important;
		margin-top: 10px !important;
	}
	.myCard.active{
		background: #fbd46d;
		position: relative;
		overflow: hidden;
	}
	.myCard.active .header-buttons{
		border: 1px solid #252525;
		color: #252525 !important;
	}
	.myCard.active p{
		font-weight: 300 !important;
	}
	.myCard.active span{
		color: #FFF;
		position: absolute;
		background: #252525;
		display: block;
		right: -40px;
		padding: 5px 40px;
		transform: rotateZ(45deg);
	}
</style>
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')

	<div class="col-xs-12 col-md-12 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1 class="first-head">Prices & Packages </h1>
				<div class="row">
					<div class="col-xs-12 myCard">
						<h1>1500 SR</h1>
						<p>1 room</p>
						<p>2 designs</p>
						<a class="header-buttons">Get Started</a>
					</div>
					<div class="col-xs-12 myCard">
						<h1>2500 SR</h1>
						<p>1 room with samples</p>
						<p>2 designs</p>
						<a class="header-buttons">Get Started</a>
					</div>
					<div class="col-xs-12 myCard">
						<h1>700 SR</h1>
						<p>Accessorizing</p>
						<p style="visibility: hidden">Accessorizing</p>
						<a class="header-buttons">Get Started</a>
					</div>
					<div class="col-xs-12 myCard">
						<h1>3000 SR</h1>
						<p>3 rooms</p>
						<p>2 designs</p>
						<a class="header-buttons">Get Started</a>
					</div>
					<div class="col-xs-12 myCard active">
						<span>Most Popular</span>
						<h1>1000 SR</h1>
						<p>On Plan Changes</p>
						<p>2 designs</p>
						<a class="header-buttons">Get Started</a>
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