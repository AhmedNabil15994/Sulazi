@extends('Frontend.Layouts.master')

@section('title',trans('main.link1'))

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/home.css') }}">
@endsection
@section('logo', URL::to('/assets/images/logo2.png'))
@section('cart', URL::to('/assets/images/cart-icon.png'))
@section('has-cart', 'has-cart')

@section('content')
	<div class="swiper-container backs" id="first">
	    <div class="swiper-wrapper">
	      	<div class="swiper-slide animate__animated animate__slow animate__fadeIn" style="background-image:  url('{{ asset("/assets/images/back1.png") }}'); ">
	      		<div class="data text-left">
					<h1>{!! trans('main.p1') !!}</h1>
					<button class="header-button">{!! trans('main.find_your') !!}</button>
				</div>
	      	</div>
	      	<div class="swiper-slide" style="background-image:  url('{{ asset("/assets/images/back1.png") }}'); ">
	      		<div class="data text-left">
					<h1>{!! trans('main.p2') !!}</h1>
					<button class="header-button">{!! trans('main.find_your') !!}</button>
				</div>
	      	</div>
	      	<div class="swiper-slide" style="background-image:  url('{{ asset("/assets/images/back1.png") }}'); ">
	      		<div class="data text-left">
					<h1>{!! trans('main.p3') !!}</h1>
					<button class="header-button">{!! trans('main.find_your') !!}</button>
				</div>
	      	</div>
	      	<div class="swiper-slide" style="background-image:  url('{{ asset("/assets/images/back1.png") }}'); ">
	      		<div class="data text-left">
					<h1>{!! trans('main.p4') !!}</h1>
					<button class="header-button">{!! trans('main.find_your') !!}</button>
				</div>
	      	</div>
	    </div>
	    <!-- Add Pagination -->
	    <div class="swiper-pagination"></div>
	</div>

	<div class="col-xs-12 main-section">
		<div class="container">
			<div class="interior text-center">
				<h1>Sulazi</h1>
				<p>Sulazi Is An Interior Design Solution That Helps <br> You Achieve Unique Personal Spaces That You'll Love!  </p>
				<a href="#" class="header-button">How It Works</a>
			</div>
		</div>
	</div>

	<div class="col-xs-12 second-section">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1>{!! trans('main.easy_steps') !!}</h1>
				<div class="row">
					<div class="col-xs-12 col-md-4 col-sm-6">
						<div class="card active">
							<img src="{{ URL::to('/assets/images/icon1.png') }}" alt="icon">
							<h3>{!! trans('main.card1_h') !!}</h3>
							<p>{{ trans('main.card1_p') }}</p>
							<a href="{{ URL::to('/questionnaire') }}" class="header-button">{{ trans('main.card1_button') }}</a>
						</div>
					</div>
					<div class="col-xs-12 col-md-4 col-sm-6">
						<div class="card">
							<img src="{{ URL::to('/assets/images/icon2.png') }}" alt="icon">
							<h3>{!! trans('main.card2_h') !!}</h3>
							<p>{{ trans('main.card2_p') }}</p>
							<a href="{{ URL::to('/uploadPage') }}" class="header-button">{{ trans('main.card2_button') }}</a>
						</div>
					</div>
					<div class="col-xs-12 col-md-4 col-sm-6">
						<div class="card">
							<img src="{{ URL::to('/assets/images/icon3.png') }}" alt="icon">
							<h3>{!! trans('main.card3_h') !!}</h3>
							<p>{!! trans('main.card3_p') !!}</p>
							<a href="{{ URL::to('/details') }}" class="header-button">{{ trans('main.card3_button') }}</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xs-12 main-section">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior images-section text-center">
					<div class="col-xs-12 col-sm-6 col-md-4 animate__animated">
						<img src="{{ URL::to('/assets/images/initial.png') }}" alt="initial">
						<p>2 {{ trans('main.proces_initial') }}</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4 animate__animated">
						<img src="{{ URL::to('/assets/images/messages.png') }}" alt="messages">
						<p>{{ trans('main.proces_message') }}</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4 animate__animated">
						<img src="{{ URL::to('/assets/images/final-design.png') }}" alt="final-design">
						<p>{{ trans('main.proces_final') }}</p>
					</div>
					<div class="clearfix hidden-sm"></div>
					<div class="col-xs-12 col-sm-6 col-md-4 animate__animated">
						<img src="{{ URL::to('/assets/images/floor-plan.png') }}" alt="floor-plan">
						<p>{{ trans('main.proces_floor') }}</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4 animate__animated">
						<img src="{{ URL::to('/assets/images/shopping-list.png') }}" alt="shopping-list">
						<p>{{ trans('main.proces_shopping') }}</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4 animate__animated">
						<img src="{{ URL::to('/assets/images/the-box.png') }}" alt="the-box">
						<p>{{ trans('main.proces_box') }}</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior box-section text-left">
					<h1>What's in the box?</h1>
					<p>Floorplan - paint colors - fabric choices <br> Each item selected with its details <br>So you can choose the same selection or similar choices  </p>
					<a href="#" class="header-button reverse">More</a>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xs-12 second-section images">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior siosi text-left">
					<p>WEEKLY LOCAL SPOTLIGHT</p>
					<h1>Siosi Design</h1>
					<p>We love the beautiful craftsmanship of products designed and built by Audi <br> and Ivy of Siosi Design in Bloomington, Indiana.</p> <br>
					<p>Their “perfectly imperfect” pieces are made to order and infused with so <br> much extra. </p>
					<a href="#" class="header-button reverse">Shop Now</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior siosi-image text-left">
					<div class="image-holder animate__animated">
						<img src="{{ URL::to('/assets/images/siosi.png') }}" alt="siosi">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xs-12 dark-section arts">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior siosi-image first text-left">
					<div class="image-holder animate__animated">
						<img src="{{ URL::to('/assets/images/arts.png') }}" alt="arts">
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior siosi first text-left">
					<p>NEED ART?</p>
					<h1>We are excited to provide custom Art</h1>
					<p>Custom selections as part of each roomLift design, hand-selected for your <br> new space by ArtlyOwl, an online art gallery and art advisory firm featuring <br> artwork from creators in your community.</p>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior siosi text-left">
					<p>TREES MATTER</p>
					<h1>Our Boxes</h1>
					<p>5 trees will be planted at a national park near you for every. single. roomLift <br> box purchased.</p> 
					<a href="#" class="header-button reverse">More</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="interior siosi-image second text-left">
					<div class="image-holder animate__animated">
						<img src="{{ URL::to('/assets/images/our-boxes.png') }}" alt="our-boxes">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xs-12 second-section">
		<div class="container">
			<div class="interior collections text-center">
				<h1>Collections </h1>
				<div class="row">
					<div class="col-xs-12 col-md-6 col-sm-12">
						<div class="collection animate__animated" style="background-image: url('{{ asset("/assets/images/industrial.png") }}'); ">
							<div class="overlay"></div>
							<p>{{ trans('main.industrial') }}</p>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 col-sm-12">
						<div class="collection animate__animated" style="background-image: url('{{ asset("/assets/images/minimal.png") }}'); ">
							<div class="overlay"></div>
							<p>{{ trans('main.minimalist') }}</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-3 col-sm-6">
						<div class="collection animate__animated" style="background-image: url('{{ asset("/assets/images/modern.png") }}'); ">
							<div class="overlay"></div>
							<p>{{ trans('main.modern') }}</p>
						</div>
					</div>
					<div class="col-xs-12 col-md-3 col-sm-6">
						<div class="collection animate__animated" style="background-image: url('{{ asset("/assets/images/traditional.png") }}'); ">
							<div class="overlay"></div>
							<p>{{ trans('main.traditional') }}</p>
						</div>
					</div>
					<div class="col-xs-12 col-md-3 col-sm-6">
						<div class="collection animate__animated" style="background-image: url('{{ asset("/assets/images/bohemian.png") }}'); ">
							<div class="overlay"></div>
							<p>{{ trans('main.bohemian') }}</p>
						</div>
					</div>
					<div class="col-xs-12 col-md-3 col-sm-6">
						<div class="collection animate__animated" style="background-image: url('{{ asset("/assets/images/contemporary.png") }}'); ">
							<div class="overlay"></div>
							<p>{{ trans('main.contemporary') }}</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-3 col-sm-6">
						<div class="collection animate__animated" style="background-image: url('{{ asset("/assets/images/rustic.png") }}'); ">
							<div class="overlay"></div>
							<p>{{ trans('main.rustic') }}</p>
						</div>
					</div>
					<div class="col-xs-12 col-md-9 col-sm-6">
						<div class="collection animate__animated" style="background-image: url('{{ asset("/assets/images/mid-country.png") }}'); ">
							<div class="overlay"></div>
							<p>{{ trans('main.mid_cen') }}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xs-12 main-section home">
		<div class="container">
			<div class="interior follow text-center">
				<h1>Follow US @Sulazi</h1>
				<p>Follow Our Work On Instagram Now <br> And Keep Up-To-Dated With Us!  </p>
				<a href="#" class="header-button reverse">Follow Us</a>
				<div class="slider">
				    <div class="lest animate__animated"><img src="{{ asset("/assets/images/follow1.png") }}" alt="follow"></div>
			      	<div class="lest animate__animated"><img src="{{ asset("/assets/images/follow2.png") }}" alt="follow"></div>
			      	<div class="lest animate__animated"><img src="{{ asset("/assets/images/follow3.png") }}" alt="follow"></div>
			      	<div class="lest animate__animated"><img src="{{ asset("/assets/images/follow4.png") }}" alt="follow"></div>
			      	<div class="lest animate__animated"><img src="{{ asset("/assets/images/follow3.png") }}" alt="follow"></div>
			      	<div class="lest animate__animated"><img src="{{ asset("/assets/images/follow4.png") }}" alt="follow"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xs-12 second-section home">
		<div class="container">
			<div class="interior follow tips text-center">
				<h1>Design Tips</h1>
				<div class="slider2">
				    <div class="lest2 animate__animated">
				    	<img src="{{ asset("/assets/images/tips1.png") }}" alt="follow">
				    	<div class="slider-data">
				    		<p>NOV 26,2018</p>
				    		<h1>2019 Color Predictions Part 3: Grey</h1>
				    		<p>by Megan Hersch</p>
				    	</div>
				    </div>
			      	<div class="lest2 animate__animated">
			      		<img src="{{ asset("/assets/images/tips2.png") }}" alt="follow">
			      		<div class="slider-data">
				    		<p>NOV 26,2018</p>
				    		<h1>2019 Color Predictions Part 3: Grey</h1>
				    		<p>by Megan Hersch</p>
				    	</div>
			      	</div>
			      	<div class="lest2 animate__animated">
			      		<img src="{{ asset("/assets/images/tips3.png") }}" alt="follow">
			      		<div class="slider-data">
				    		<p>NOV 26,2018</p>
				    		<h1>2019 Color Predictions Part 3: Grey</h1>
				    		<p>by Megan Hersch</p>
				    	</div>
			      	</div>
				</div>
				<h1>Brands Providing Exclusive <br> Sulazi Discounts</h1>
				<div class="row row-images animate__animated">
					<img src="{{ URL::to('/assets/images/belgacom.png') }}" alt="brand">
					<img src="{{ URL::to('/assets/images/consulate.png') }}" alt="brand">
					<img src="{{ URL::to('/assets/images/ebike.png') }}" alt="brand">
					<img src="{{ URL::to('/assets/images/homebase.png') }}" alt="brand">
					<img src="{{ URL::to('/assets/images/nike.png') }}" alt="brand">
					<img src="{{ URL::to('/assets/images/texas.png') }}" alt="brand">
					<img src="{{ URL::to('/assets/images/ebike2.png') }}" alt="brand">
					<img src="{{ URL::to('/assets/images/homebase.png') }}" alt="brand">
					<img src="{{ URL::to('/assets/images/texas.png') }}" alt="brand">
				</div>
				<div class="row row-images animate__animated">
					<img src="{{ URL::to('/assets/images/homebase.png') }}" alt="brand">
					<img src="{{ URL::to('/assets/images/nike.png') }}" alt="brand">
					<img src="{{ URL::to('/assets/images/texas.png') }}" alt="brand">
					<img src="{{ URL::to('/assets/images/ebike2.png') }}" alt="brand">
					<img src="{{ URL::to('/assets/images/homebase.png') }}" alt="brand">
					<img src="{{ URL::to('/assets/images/texas.png') }}" alt="brand">
				</div>
			</div>
		</div>
	</div>

@endsection

@section('scripts')
<script src="{{ URL::to('/assets/js/home.js') }}"></script>
@endsection