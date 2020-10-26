@extends('Frontend.Layouts.master')

@section('title','Questionnaire')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/questionnaire.css') }}">
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')
	<div class="col-xs-12 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1>Questionnaire</h1>
				
				<p class="head-p">Contact Info</p>
				<div class="form">
					<div class="col-xs-12 col-md-6 mg-bt-30">
						<span class="head-span">First Name</span>
						<input type="text" name="f_name" placeholder="John">
					</div>
					<div class="col-xs-12 col-md-6 mg-bt-30">
						<span class="head-span">Last Name</span>
						<input type="text" name="l_name" placeholder="Doe">
					</div>
					<div class="col-xs-12 col-md-6">
						<span class="head-span">Address</span>
						<input type="text" name="address" placeholder="Maadi - Cairo">
					</div>
					<div class="col-xs-12 col-md-6 last-x">
						<span class="head-span">Email Address</span>
						<input type="email" name="email" placeholder="Example147@gmail.com">
					</div>
					
					<div class="clearfix"></div>
				</div>

				<p class="head-p">Family Info</p>
				<div class="form">
					<div class="col-xs-12 col-md-6 last-x">
						<span class="head-span">If You Have Children, How Many And What Are Their Ages?</span>
						<textarea name="family" placeholder="2 &#10;First 8 Years Old&#10;Second 5 Years Old"></textarea>
					</div>
					<div class="clearfix"></div>
				</div>

				<p class="head-p">Sulazi Goals</p>
				<div class="form">
					<div class="col-xs-12 col-md-6 mg-bt-30">
						<span class="head-span">What Is Your Overall Goal For Sulazi?</span>
						<input type="text" name="goal1" placeholder="Write What You Feel Right For You...">
					</div>
					<div class="col-xs-12 col-md-6 mg-bt-30">
						<span class="head-span">How Many People Do You Want To Be Able To Accommodate In This Space At A Maximum?</span>
						<input type="text" name="goal2" placeholder="2">
					</div>
					<div class="col-xs-12 col-md-6 last-x">
						<span class="head-span">What Is Your Overall Budget?</span>
						<select name="goal3" class="select2">
							<option value="1">Low</option>
							<option value="2">Mid</option>
							<option value="3">High</option>
						</select>
					</div>
					<div class="clearfix"></div>
				</div>

				<p class="head-p">What's Your Style?</p>
				<div class="form">
					<div class="col-xs-12 col-md-6 mg-bt-30 mult">
						<span class="head-span">What's Your Decorating Style?</span>
						<select name="style1[]" class="select2" multiple>
							<option value="1" selected>Traditional</option>
							<option value="2">Modern</option>
							<option value="3" selected>Rustic</option>
							<option value="4">Dramatic & Bold</option>
							<option value="5">Relaxed & Serenee</option>
							<option value="6">Beachy</option>
							<option value="7">Eclectic</option>
							<option value="8">Comfortable</option>
							<option value="9">Formal</option>
							<option value="10">Bohemian</option>
						</select>
						<p class="small-p">You Can Choose Maximum 2 Styles</p>
					</div>
					<div class="col-xs-12 col-md-6 mg-bt-30">
						<span class="head-span">What Color(s) Do You Like, If Any Preference?</span>
						<input type="text" name="style2" placeholder="Red">
					</div>
					<div class="clearfix"></div>
					<div class="col-xs-12 col-md-6">
						<span class="head-span">What Color(s) And / Or Design Elements Do You Dislike, If Any?</span>
						<input type="text" name="style3" placeholder="Blue">
					</div>
					<div class="col-xs-12 col-md-6 last-x">
						<span class="head-span">Does Your Space Require Lamps For Light?</span>
						<select name="style4" class="select2">
							<option value="1">Yes</option>
							<option value="2">No</option>
						</select>
					</div>
					<div class="clearfix"></div>
				</div>

				<p class="head-p">Window Treatments</p>
				<div class="form">
					<div class="col-xs-12 col-md-6 last-x">
						<span class="head-span">Do You Want/Need New Window/French Door Treatments?</span>
						<select name="treatments" class="select2">
							<option value="1">Yes</option>
							<option value="2">No</option>
						</select>
					</div>
					<div class="clearfix"></div>
				</div>

				<p class="head-p">Measurements</p>
				<div class="form">
					<div class="col-xs-12 col-md-6 last-x">
						<span class="head-span">What Is The Height From The Ceiling To Floor?</span>
						<input type="text" name="measurements" placeholder="150 cm">
					</div>
					<div class="clearfix"></div>
				</div>
				<button class="header-buttons">Submit</button>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection