@extends('Frontend.Layouts.master')

@section('title','Gift Card')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/pages.css') }}">
<style type="text/css" media="screen">
	.page h1.first-head{
		margin-bottom: 50px !important;
	}
	img{
		width: 100%;
		height: 100%;
	}
	.col-md-6{
		padding-left: 40px !important;
		padding-right: 40px !important;
		text-align: initial;
	}
	.col-md-6 p{
		margin-top: 0 !important;
		margin-bottom: 10px !important;
	}
	.col-md-6 p:first-of-type{
		font-weight: bold;
	}
	.col-md-6 span{
		width: 18%;
		margin-right: 2%;
		border-radius: 40px;
		border: 1px solid #252525;
		padding: 10px 30px;
		float: left;
		text-align: center;
		cursor: pointer;
		font-size: 18px;
	}
	.col-md-6 span.active{
		border: 0;
		background: #fbd46d;
	}
	.col-md-6 button{
		display: block;
		width: 100%;
		font-size: 22px !important;
		padding-top: 10px !important;
		padding-bottom: 10px !important;
	}
	.col-md-6 button:first-of-type{
		background: transparent !important;
		border: 1px solid #252525;
	}
	.col-md-6 button:last-of-type{
		margin-top: 30px !important; 
		margin-bottom: 30px !important; 
	}
	.col-md-6 p:last-of-type{
		font-size: 20px  !important;
	}
</style>
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')

	<div class="col-xs-12 col-md-12 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1 class="first-head">GIFT CARD</h1>
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<img src="{{ URL::to('/assets/images/gift-card.png') }}" alt="giftcard">
					</div>
					<div class="col-xs-12 col-md-6">
						<p>You Can Send A Gift Card Through Us Now!</p>
						<p class="value">250.00 SR</p>
						<p>Size</p>
						<span class="gift">50 SR</span>
						<span class="gift">150 SR</span>
						<span class="gift active">250 SR</span>
						<span class="gift">500 SR</span>
						<span class="gift">750 SR</span>
						<div class="clearfix"></div>
						<button class="header-buttons">Add To Cart</button>
						<button class="header-buttons">Buy It Now</button>
						<p>* Please include the Name and Address of recipient in the ORDER NOTES in the shopping cart or it will default to the purchaser's address.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('scripts')
<script>
	$(function(){
		$('.col-md-6 span.gift').on('click',function(){
			var myVal = $(this).html();
			$(this).addClass('active').siblings('span.gift').removeClass('active');
			var myValues = String(parseFloat(myVal)) + '.00 SR';
			$('p.value').html(myValues);
		});
	})
</script>
@endsection