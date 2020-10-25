@extends('Frontend.Layouts.master')

@section('title','Information')

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
		font-size: 30px !important;
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
		margin-bottom: 90px !important;
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
		margin-bottom: 50px;
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
	.buttons .header-buttons{
		background: unset !important;
		width: 200px;
		height: 55px;
		padding: 0 !important;
	}
	.form span.head-span{
		color: #252525;
		font-weight: 400;
		font-size: 20px;
		margin-bottom: 20px;
		display: block;
	}
	input[type="email"]{
		margin-bottom: 15px;
	}
	.form .icheck-info{
		margin-left: 10px;
		margin-right: 10px;
		display: inline-block;
		font-size: 17px;
		color: #252525;
	}
	.mg-bt-30{
		margin-bottom: 30px;
	}
	.select2-container{
		font-size: 20px;
		display: block;
		padding: 10px 20px;
		border-radius: 40px;
		border: 1px solid #252525;
		background: transparent;
		color: #252525;
		outline: 0;
		margin:auto;
		outline: 0;
		width: 100% !important;
	}
	.select2-container--default .select2-selection--single,
	.select2-container--default .select2-selection--multiple{
		border: 0;
		text-align: initial;
		background: transparent;
	}
	.select2-container--default .select2-selection--single .select2-selection__arrow{
		top: 10px;
		right: 20px;
	}
	.select2-container--default .select2-selection--single .select2-selection__arrow b{
		border-width: 7px 7px 0 7px;
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
	.select2-container--default .select2-selection--single, .select2-container--default .select2-selection--multiple{
		height: 30px;
	}
	.select2-container--default .select2-selection--multiple .select2-selection__choice{
		color: #252525;
		font-size: 18px;
		border-color: #252525;
	    padding: 0px 15px;
	    background: transparent;
	    margin-top: 2.5px;
	}
	.select2-container--default .select2-selection--multiple .select2-selection__choice__remove{
		margin-right: 5px;
		color: #252525;
	}
	.mult .select2-container{
		padding: 8px 30px !important;
	}
	.form .col-xs-12{
		padding-left: 15px !important;
		padding-right: 15px !important;
	}
	.row.text-left .form{
		background: #f6f6f6;
		padding: 20px !important;
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
					<span class="active">Information</span>
					<i class="fa fa-angle-right"></i>
					<span>Shipping</span>
					<i class="fa fa-angle-right"></i>
					<span>Payment</span>
				</p>

				<div class="row">
					<div class="col-xs-12 col-md-5">
						<p class="title">Express Check Out</p>
						<div class="clearfix"></div>
						<div class="row buttons">
							<div class="col-xs-12 col-md-4">
								<button class="header-buttons"><img src="{{ URL::to('/assets/images/shop-pay.png') }}" alt="icon"></button>
							</div>
							<div class="col-xs-12 col-md-4">
								<button class="header-buttons"><img src="{{ URL::to('/assets/images/g-pay.png') }}" alt="icon"></button>
							</div>
							<div class="col-xs-12 col-md-4">
								<button class="header-buttons"><img src="{{ URL::to('/assets/images/paypal.png') }}" alt="icon"></button>
							</div>
						</div>

						<p class="title">OR</p>
						<div class="clearfix"></div>
						
						<div class="form">
							<p class="title">Contact Info</p>
							<div class="clearfix"></div>
							<div class="details">
								<span class="head-span">Email Address</span>
								<input type="email" name="email" placeholder="Example147@gmail.com">
								<input type="checkbox" class="iCheck" name="iCheck">
								<span class="icheck-info">Keep Me Up To Date On News And Exclusive Offers</span>
							</div>
						</div>
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
								<div class="col-xs-6 text-right">Calculated At Next Step</div>
								<div class="clearfix"></div>
								<div class="col-xs-12">
									<hr>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 text-left">Total</div>
								<div class="col-xs-6 text-right">+ 1500 SR</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>

				<div class="row text-left">
					<div class="col-xs-12">
						<p class="title">Shipping Address</p>
						<div class="form">
							<div class="col-xs-12 col-md-6 mg-bt-30">
								<span class="head-span">First Name</span>
								<input type="text" name="f_name" placeholder="John">
							</div>
							<div class="col-xs-12 col-md-6 mg-bt-30">
								<span class="head-span">Last Name</span>
								<input type="text" name="l_name" placeholder="Doe">
							</div>
							<div class="col-xs-12 col-md-6 mg-bt-30">
								<span class="head-span">Address</span>
								<input type="text" name="address" placeholder="Write Your Address Here.....">
							</div>
							<div class="col-xs-12 col-md-6 mg-bt-30">
								<span class="head-span">Apartment</span>
								<input type="text" name="apartment" placeholder="5">
							</div>
							<div class="col-xs-12 col-md-6 mg-bt-30">
								<span class="head-span">City</span>
								<select name="city" class="select2">
									<option value="0">Choose Your City</option>
								</select>
							</div>
							<div class="col-xs-12 col-md-6 mg-bt-30">
								<span class="head-span">Country</span>
								<select name="country" class="select2">
									<option value="0">Choose Your Country</option>
								</select>
							</div>
							<div class="col-xs-12 col-md-6 mg-bt-30">
								<span class="head-span">Government</span>
								<select name="government" class="select2">
									<option value="0">Choose Your Government</option>
								</select>
							</div>
							<div class="col-xs-12 col-md-6 mg-bt-30">
								<span class="head-span">Postal Code</span>
								<input type="text" name="postal_code" placeholder="54155">
							</div>
							<div class="clearfix"></div>
							<div class="col-xs-12 col-md-6">
								<span class="head-span">Phone</span>
								<input type="text" name="phone" placeholder="+966 651 5444 888">
							</div>
							<div class="clearfix"></div>
						</div>
						<a class="header-buttons pull-right last">Continue To Shipping</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	

@endsection

@section('scripts')
<script>
	
	$(function(){
		$('input.iCheck').iCheck({
            checkboxClass: 'icheckbox_square'
		});
	});

</script>
@endsection