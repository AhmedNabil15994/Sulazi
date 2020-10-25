@extends('Frontend.Layouts.master')

@section('title','Process')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/pages.css') }}">
<style type="text/css" media="screen">
	.page h1{
		margin-bottom: 30px !important;
		margin-top: 80px !important;
	}
	.page p:first-of-type{
		margin-bottom: 0 !important;
		line-height: 1.5; 
	}
	.page p:nth-of-type(2){
		margin-top: 0 !important;
		line-height: 1.5; 
	}
	.myCard{
		display: inline-block;
		float: left;
		padding-right: 30px;
		width: 18%;
		margin-right: 2%;
	}
	.myCard img{
		display: block;
		width: 100%;
		height: 200px;
		border-radius: 15px;
	}
	.myCard p{
		font-weight: bold;
		margin-top: 10px !important;
	}
	div.row{
		margin-bottom: 50px !important;
	}
	.header-button{
		padding-top: 10px !important;
		padding-bottom: 10px !important;
		margin-bottom: 70px !important;
	}
	.process{
	}
	.process h1{
		font-weight: 300 !important;
		margin-bottom: 50px !important;
		font-family: Quicksand, sans-serif !important;
	}
	.main-section{
		margin-bottom: 100px;
	}
	.last-img{
		margin-bottom: 50px;
	}
	.images-section .col-xs-12{
		padding: 0;
		margin-bottom: 25px;
	}
	.images-section .col-xs-12 p{
		margin-top: 15px !important;
		font-size: 20px !important;
	}
</style>
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')

	<div class="col-xs-12 col-md-12 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<img src="{{ URL::to('/assets/images/process.png') }}" alt="process">
				<h1>Our Process </h1>
				<p>How The Process Of Sulazi Work?</p>
				<p>We are an online interior design service that combine the knowledge and personalization you get from working with a real designer. You will see interior design interior ideas in your exact room, collaborate online with your designer, and shop your entire look</p>
				<a class="header-button">Start Your Project</a>
			</div>
		</div>
	</div>

	<div class="col-xs-12 col-md-12 main-section page">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior process text-left">
					<div class="image-holder">
						<img src="{{ URL::to('/assets/images/process3.png') }}" alt="arts">
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior process text-left">
					<h1>1- Show Us Your Room</h1>
					<p>Its easy! Take photos of your room. Then, upload those photos to our site.</p>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior process text-left">
					<h1>2- help us get to know you</h1>
					<p>Interior design is personal so we want to get to know you, your space, and anyone else (kiddos, pets, partners) who lives there. Take our style quiz and tell us more details about your room, budget, and lifestyle. Once we have all your info, our designers will get to work creating  design you'll love. </p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior process text-right">
					<div class="image-holder">
						<img src="{{ URL::to('/assets/images/process3.png') }}" alt="arts">
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior process text-left">
					<div class="image-holder">
						<img src="{{ URL::to('/assets/images/process3.png') }}" alt="arts">
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior process text-left">
					<h1>3- get your first design</h1>
					<p>Let the fun begin, we will send you two initial concepts of your room, and decide which one is the right design for you</p>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior process text-left">
					<h1>4- work with our designers to make change</h1>
					<p>Your first designs are just the starting point. From there, you can continue to work with your sulazi designer to try new layouts or furniture styles until you're 100% happy. </p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior process text-right">
					<div class="image-holder">
						<img src="{{ URL::to('/assets/images/process3.png') }}" alt="arts">
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior process text-left">
					<div class="image-holder">
						<img src="{{ URL::to('/assets/images/process3.png') }}" alt="arts">
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior process text-left">
					<h1>5- if you chose that we shop your furniture for you</h1>
					<p>Once you land on a design you love, shop your whole look (or just the parts you love) in one easy checkout. We offer exclusive discounts too, so you'll always get the best deal on top of already-best prices. <br>Our dedicated order management team will coordinate all your purchases and any returns or exchanges. We'll keep you up-to-date on the status of all your items so all you have to do is get excited for your new room! </p>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior process text-left">
					<h1>6- what you get</h1>
					<p>Floorplan - paint colors - fabric choices <br>Each item selected with its details <br>So you can choose the same selection or similar choices</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior images-section text-center">
					<div class="col-md-3"></div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<img src="{{ URL::to('/assets/images/initial.png') }}" alt="initial">
						<p>2 Initial Concepts</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<img src="{{ URL::to('/assets/images/messages.png') }}" alt="messages">
						<p>Message With Your Designer</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<img src="{{ URL::to('/assets/images/final-design.png') }}" alt="final-design">
						<p>Final Design</p>
					</div>
					<div class="clearfix"></div>
					<div class="col-md-3"></div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<img src="{{ URL::to('/assets/images/floor-plan.png') }}" alt="floor-plan">
						<p>Floor Plan & Setup Instructions</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<img src="{{ URL::to('/assets/images/shopping-list.png') }}" alt="shopping-list">
						<p>Shopping List</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<img src="{{ URL::to('/assets/images/the-box.png') }}" alt="the-box">
						<p>The Box</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 text-center">
				<div class="interior process text-center">
					<h1>7- Enjoy</h1>
					<img class="last-img" src="{{ URL::to('/assets/images/process2.png') }}" alt="process">
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

@endsection

@section('scripts')
<script>
	


</script>
@endsection