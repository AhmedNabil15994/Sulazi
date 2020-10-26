@extends('Frontend.Layouts.master')

@section('title','Upload')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/uploadpage.css') }}">
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')
	<div class="col-xs-12 col-md-6 col-md-offset-3 second-section uploadPage page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1>Upload Your Files </h1>
				<p>Please Label Your Files Firstname Lastname</p>
				<div class="row">
					<a class="header-buttons upload">Upload</a>
					<input type="file" name="image" id="image" accept=".png, .jpg, .jpeg">
					<br>
					<div class="row upload-images"></div>
					<a class="header-buttons submit hidden">Submit</a>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
<script src="{{ URL::to('/assets/js/uploadpage.js') }}"></script>
@endsection