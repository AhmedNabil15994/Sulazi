@extends('Frontend.Layouts.master')

@section('title','Box Details')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/pages.css') }}">
<style type="text/css" media="screen">
	.page h1.first-head{
		margin-bottom: 50px !important;
	}
	img.main-image{
		width: 100%;
		height: 100%;
		max-height: 500px;
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
	.col-md-6 p.last{
		font-size: 20px  !important;
	}
	.slider .bx-wrapper{
		width: 80% !important;
		display: block;
		margin: auto;
	}
	.slider .bx-viewport{
		min-height: 150px !important;
		height: 150px !important;
		padding-top: 50px !important;
	}
	.slider .lest{
		width: 130px !important;
		height: 130px !important;
	}
	.row:first-of-type .bx-wrapper .bx-controls-direction a.bx-prev,
	.row:first-of-type .bx-wrapper .bx-controls-direction a.bx-next{
		top: 40px !important;
	}
	.row:last-of-type .bx-wrapper .bx-controls-direction a.bx-prev,
	.row:last-of-type .bx-wrapper .bx-controls-direction a.bx-next{
		top: 80px !important;
	}
	.slider .lest img{
		border-radius: 5px;
	}
	.row:last-of-type .bx-wrapper{
		margin-bottom: 0 !important;
	}
	.row:last-of-type .bx-viewport{
		min-height: auto !important; 
	}
	.slider2 .lest{
		max-height: 300px;
		height: 300px !important;
		text-align: initial;
		width: 2.5% !important;
	}
	.slider2 .lest:nth-child(even){
		margin-left: 1%;
		/*margin-right: 1%;*/
	}
	.slider2 .lest p{
		margin-top: 15px !important;
		margin-bottom: 0 !important;
	}
	.slider2 .lest p:last-of-type{
		font-weight: bold;
		margin-top: 0 !important;
	}
	.slider2 .lest img{
		width: 400px !important;
	    max-width: initial;
	    height: 200px;
	}
</style>
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')

	<div class="col-xs-12 col-md-12 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<img class="main-image" src="{{ URL::to('/assets/images/details1.png') }}" alt="giftcard">
						<div class="slider">
						    <div class="lest"><img src="{{ asset("/assets/images/details1.png") }}" alt="follow"></div>
					      	<div class="lest"><img src="{{ asset("/assets/images/details1.png") }}" alt="follow"></div>
					      	<div class="lest"><img src="{{ asset("/assets/images/details1.png") }}" alt="follow"></div>
					      	<div class="lest"><img src="{{ asset("/assets/images/details1.png") }}" alt="follow"></div>
					      	<div class="lest"><img src="{{ asset("/assets/images/details1.png") }}" alt="follow"></div>
					      	<div class="lest"><img src="{{ asset("/assets/images/details1.png") }}" alt="follow"></div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<p>1 Room & 2 Designs</p>
						<p class="value">1500 SR</p>
						<p>Quantity</p>
						<span class="gift">1 room</span>
						<span class="gift active">2 room</span>
						<div class="clearfix"></div>
						<button class="header-buttons">Add To Cart</button>
						<button class="header-buttons">Buy It Now</button>
						<p class="last">Each roomLift comes with two 15 minute phone or email consultations about your design.</p>
						<p class="last">Each roomLift box will provide 2 design options, including:</p>
						<p class="last">A scaled Floor Plan of your space, based on the dimensions and photos that you provided.</p>
						<p class="last">Paint chip and/or wallpaper samples.</p>
						<p class="last">roomLift Cards for each suggested item with specific information so that you can purchase it all yourself, directly from the retailer. No up-charges.roomLift 3 or more rooms and get a 20% discount on everything!</p>
					</div>
				</div>
				<div class="row">
					<div class="slider2">
					    <div class="lest">
					    	<img src="{{ asset("/assets/images/details1.png") }}" alt="follow">
					    	<p>Accessorizing</p>
					    	<p>700 RS</p>
					    </div>
				      	<div class="lest">
				      		<img src="{{ asset("/assets/images/details1.png") }}" alt="follow">
				      		<p>3 Rooms & 2 Designs</p>
					    	<p>3000 RS</p>
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
		$('.slider').bxSlider({
	    	minSlides: 1,
	    	maxSlides: 6,
	    	responsive:true,
	    	pager: false,
	    });

	    $('.slider2').bxSlider({
	    	minSlides: 2,
	    	maxSlides: 2,
	    	responsive:true,
	    	pager: false,
	    });
	});
</script>
@endsection