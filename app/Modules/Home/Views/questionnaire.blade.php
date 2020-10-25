@extends('Frontend.Layouts.master')

@section('title','Questionnaire')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/pages.css') }}">
<style type="text/css" media="screen">
	.page h1{
		margin-bottom: 100px !important;
	}
	p.head-p{
		text-align: initial;
		font-weight: bold;
		margin-bottom: 20px;
	}
	.form{
		display: block;
		background-color: #f6f6f6;
		padding: 30px 40px;
		margin-bottom: 40px !important;
		width: 100%;
		text-align: initial;
	}
	.mg-bt-30{
		margin-bottom: 30px;
	}
	.form span.head-span{
		color: #252525;
		font-weight: 400;
		font-size: 20px;
		margin-bottom: 20px;
		display: block;
	}
	.form input,
	.form textarea{
		font-size: 20px;
		border: 1px solid #252525;
		border-radius: 40px;
		display: block;
		width: 100%;
		padding: 10px 20px;
		outline: 0;
		background: transparent;
	}
	.form textarea{
		min-width: 100%;
		max-width: 100%;
		min-height: 150px;
		border-radius: 15px;
	}
	button.header-buttons{
		width: 200px;
		display: block !important;
		margin: auto !important;
		padding: 10px 30px !important;
		margin-top: 50px !important;
		margin-bottom: 50px !important;
		outline: 0 !important;
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
	p.small-p{
		font-size: 16px !important;
		margin: 0 !important;
		margin-top: 10px !important;
	}
</style>
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
					<div class="col-xs-12 col-md-6">
						<span class="head-span">Email Address</span>
						<input type="email" name="email" placeholder="Example147@gmail.com">
					</div>
					
					<div class="clearfix"></div>
				</div>

				<p class="head-p">Family Info</p>
				<div class="form">
					<div class="col-xs-12 col-md-6">
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
					<div class="col-xs-12 col-md-6">
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
							<option value="1">Industrial</option>
							<option value="2">Minimalist</option>
							<option value="3">Modern</option>
							<option value="4" selected>Traditional</option>
							<option value="5">Bohemian</option>
							<option value="6">Contemporary</option>
							<option value="7" selected>Rustic</option>
							<option value="8">Mid Country Modern</option>
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
					<div class="col-xs-12 col-md-6">
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
					<div class="col-xs-12 col-md-6">
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
					<div class="col-xs-12 col-md-6">
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
<script>
	


</script>
@endsection