@extends('Frontend.Layouts.master')

@section('title','Shipping')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/pages.css') }}">
<style type="text/css" media="screen">
	.page h1{
		margin-bottom: 70px !important;
		font-weight: bold !important;
	}
	p.head-p{
		margin-bottom: 70px;
		margin-top: 0 !important;
	}
	p.head-p span.active{
		font-weight: bold;
	}
	p.head-p span{
		margin-right: 15px;
		margin-left: 15px;
	}
	p.title{
		text-align: initial;
		font-weight: bold;
		margin-bottom: 20px;
		display: inline-block;
		width: 50%;
		float: left;
	}
	.page .header-buttons{
		margin-top: 30px ;
		padding: 10px 40px ;
	}
	.page .details{
		background: #f6f6f6;
		border-radius: 5px;
		padding: 15px 30px !important;
		text-align: initial;
		font-size: 20px;
		color: #252525;
	}
	.page .details p{
		margin-bottom: 10px !important;
		margin-top: 0 !important;
		font-weight: 300;
		color: #252525;
		font-size: 20px !important;
	}
	.back,
	.back:hover,
	.back:active,
	.back.active{
		font-size: 20px;
		display: inline-block;
		width: 50%;
		float: left;
		text-align: initial;
		color: #252525;
		text-decoration: none;
		margin-top: 100px;
		cursor: pointer;
	}
	.back i{
		font-size: 28px;
	    float: left;
	    margin-right: 10px;
	}
	.header-buttons.last{
		margin-top: 90px !important;
	}
	span.method{
		display: inline-block;
	    margin-left: 5px;
	    margin-right: 5px;
	    font-weight: bold;
	    font-family: Quicksand;
	    font-size: 20px;
	}
	span.price{
		float: right;
		font-weight: bold;
		font-size: 20px;
	}
	span.duration{
		display: block;
		font-size: 16px;
		margin-top: 5px;
		margin-bottom: 0;
		margin-left: 30px;
	}
	div.payment-card{
		background: #252525;
		padding: 40px 30px !important;
		border-radius: 5px;
		color: #f6f6f6;
	}
	div.payment-card .row{
		margin: 0;
	}
	div.payment-card .col-md-7{
		text-align: initial;
		padding-left: 15px;
	}
	div.payment-card img{
		border-radius: 5px;
		max-width: 200px;
		max-height: 100px;
	}
	div.payment-card p,
	div.payment-card span{
		color: #f6f6f6 !important;
		font-size: 20px !important;
		padding: 0 !important;
		margin: 0 !important;
		display: block;
	}
	div.payment-card span{
		text-align: initial;
	}
	div.payment-card span.head-span{
		display: block;
		color: #252525;
		font-weight: 400;
		font-size: 20px;
		margin-bottom: 20px !important;
		display: block;
		font-weight: bold;
	}
	input,
	textarea{
		font-size: 20px;
		border: 1px solid #252525;
		border-radius: 40px;
		display: block;
		width: 100%;
		padding: 10px 20px;
		outline: 0;
		background: transparent;
		color: #f6f6f6;
	}
	textarea{
		min-width: 100%;
		max-width: 100%;
		min-height: 150px;
		border-radius: 15px;
	}
	input.reverse{
		color: #f6f6f6;
		background-color: #252525;
		border-color: #f6f6f6;
	}
	.payment-card .header-buttons{
		float: right;
		width: 200px;
		text-align: center;	
		margin-bottom: 10px;
	}
	.payment-card .col-xs-6.text-left{
		font-size: 20px;
	}
	.payment-card .col-xs-6.text-left:first-of-type{
		margin-bottom: 10px;
	}
	.payment-card .col-xs-6.text-right{
		font-size: 18px;
	}
</style>
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')

	<div class="col-xs-12 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1>Sulazi</h1>
				<p class="head-p text-center">
					<span>Information</span>
					<i class="fa fa-angle-right"></i>
					<span class="active">Shipping</span>
					<i class="fa fa-angle-right"></i>
					<span>Payment</span>
				</p>

				<div class="row">
					<div class="col-xs-12 col-md-5">
						<p class="title">Contact Info</p>
						<a class="header-buttons pull-right">Change</a>
						<div class="clearfix"></div>
						<div class="details">
							asmaa@gmail.com
						</div>

						<p class="title">Ship To</p>
						<a class="header-buttons pull-right">Change</a>
						<div class="clearfix"></div>
						<div class="details">
							<p>Full Address</p>
							<p>Full Name</p>
							<p>City</p>
							<p>Postal Code</p>
							<p>Country</p>
						</div>

						<p class="title">Shipping Method</p>
						<div class="clearfix"></div>
						<div class="details">
							<input type="radio" class="iRadio" name="iCheck" checked> 
							<span class="method">First Method</span> 
							<span class="price">450 SR</span><br>
							<span class="duration">Take From 4 To & Days</span><br>

							<input type="radio" class="iRadio" name="iCheck">
							<span class="method">Second Method</span> 
							<span class="price">450 SR</span><br>
							<span class="duration">Take From 4 To & Days</span><br>

							<input type="radio" class="iRadio" name="iCheck">
							<span class="method">Third Method</span> 
							<span class="price">450 SR</span><br>
							<span class="duration">Take From 4 To & Days</span>
						</div>

						<a class="back"><i class="fa fa-angle-left"></i> Back To Information</a>
						<a class="header-buttons pull-right last">Continue To Payment</a>
					</div>
					<div class="col-xs-12 col-md-2"></div>
					<div class="col-xs-12 col-md-5">
						<div class="payment-card">
							<div class="row">
								<div class="col-xs-12 col-md-3">
									<img src="{{ URL::to('/assets/images/process3.png') }}" alt="icon">
								</div>
								<div class="col-xs-8 col-md-7">
									<p>1 roomLift With Samples & 2 Designs</p>
									<span>1 room</span>
								</div>
								<div class="col-xs-4 col-md-2 text-center">
									<p>1500 SR</p>
								</div>
								<div class="clearfix"></div>
								<div class="col-xs-12">
									<hr>
								</div>
							</div>
							<div class="row text-left">
								<span class="head-span">Apply Code</span>
								<input type="text" class="reverse" name="apply_code" value="D7488a">
								<a class="header-buttons">Apply</a>
								<div class="col-xs-12">
									<hr>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 text-left">Subtotal</div>
								<div class="col-xs-6 text-right">1500 SR</div>
								<div class="clearfix"></div>
								<div class="col-xs-6 text-left">Shipping</div>
								<div class="col-xs-6 text-right">200 SR</div>
								<div class="clearfix"></div>
								<div class="col-xs-12">
									<hr>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 text-left">Total</div>
								<div class="col-xs-6 text-right">1700 SR</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	

@endsection

@section('scripts')
<script>
	
	$(function(){
		$('input.iRadio').iCheck({
            radioClass: 'iradio_square'
			    
		});
	});

</script>
@endsection