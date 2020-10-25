@extends('Frontend.Layouts.master')

@section('title','Upload')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/pages.css') }}">
<style type="text/css" media="screen">
	.page h1{
		margin-bottom: 30px !important;
	}
	.page p{
		font-weight: 300;
		font-size: 26px !important;
		margin-bottom: 0 !important;
	}
	input#image{
		display: none;
	}
	.row .col-md-4{
		position: relative;
		display: inline;
		width: 30%;
		margin-right: 3%;
		margin-bottom: 25px;
		height: 200px;
		border-radius: 5px;
		background-size: 100% 200px;
		background-repeat: no-repeat;
	}
	.row .overlay{
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
		background: rgba(0,0,0,.25);
	}
	.upload-images{
		margin-top: 50px;
	}
	.upload-images span{
		color: #FFF;
		font-size: 30px;
		position: absolute;
		z-index: 2;
		right: 10px;
		top: 5px;
		cursor: pointer;
	}
	.hidden{
		display: none !important;
	}
</style>
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')

	<div class="col-xs-12 col-md-6 col-md-offset-3 second-section page">
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
<script>
	
	$(function(){

		$('.upload').on('click',function(){
			$('#image').click();
		});

		$('#image').on('change',function(){
	        var url = window.URL.createObjectURL($(this)[0].files[0]);
	        var myElement = '<div class="co-xs-12 col-md-4 myFile" style="background-image:url('+url+')">'+
	        					'<div class="overlay"></div>'+
	        					'<span><i class="fa fa-times"></i></span>'+
	        				'</div>';
	        $('.upload-images').append(myElement);
	        if($('.submit').hasClass('hidden')){
	        	$('.submit').removeClass('hidden');
	        }
	    });

		$('.upload-images').on('click','.myFile span',function(){
			$(this).parent('.col-md-4').remove();
		});

	});

</script>
@endsection