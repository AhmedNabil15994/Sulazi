@extends('Frontend.Layouts.master')

@section('title','Press')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/pages.css') }}">
<style type="text/css" media="screen">
	.page h1{
		margin-bottom: 30px !important;
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
</style>
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')

	<div class="col-xs-12 col-md-12 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1>Press </h1>
				<div class="row">
					<div class="col-xs-12 myCard">
						<img src="{{ URL::to('/assets/images/industrial.png') }}" alt="icon">
						<p>Website Name</p>
					</div>
					<div class="col-xs-12 myCard">
						<img src="{{ URL::to('/assets/images/follow2.png') }}" alt="icon">
						<p>Website Name</p>
					</div>
					<div class="col-xs-12 myCard">
						<img src="{{ URL::to('/assets/images/arts.png') }}" alt="icon">
						<p>Website Name</p>
					</div>
					<div class="col-xs-12 myCard">
						<img src="{{ URL::to('/assets/images/tips2.png') }}" alt="icon">
						<p>Website Name</p>
					</div>
					<div class="col-xs-12 myCard">
						<img src="{{ URL::to('/assets/images/follow2.png') }}" alt="icon">
						<p>Website Name</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 myCard">
						<img src="{{ URL::to('/assets/images/follow3.png') }}" alt="icon">
						<p>Website Name</p>
					</div>
					<div class="col-xs-12 myCard">
						<img src="{{ URL::to('/assets/images/tips3.png') }}" alt="icon">
						<p>Website Name</p>
					</div>
					<div class="col-xs-12 myCard">
						<img src="{{ URL::to('/assets/images/box3.png') }}" alt="icon">
						<p>Website Name</p>
					</div>
					<div class="col-xs-12 myCard">
						<img src="{{ URL::to('/assets/images/siosi.png') }}" alt="icon">
						<p>Website Name</p>
					</div>
					<div class="col-xs-12 myCard">
						<img src="{{ URL::to('/assets/images/mid-country.png') }}" alt="icon">
						<p>Website Name</p>
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