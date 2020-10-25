@extends('Frontend.Layouts.master')

@section('title','Faqs')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/pages.css') }}">
<style type="text/css" media="screen">
	.page h1.first-head{
		margin-bottom: 150px !important;
	}
	.faq-element{
		margin-bottom: 30px;
	}
	.faq-element.open p{
		display: block;
	}
	.faq-element span.first{
		color: #252525;
		font-family: Quicksand;
		font-size: 24px;
		font-weight: 400;
	}
	.faq-element span.last{
		width: 36px;
		height: 36px;
		background-color: #e8e8e8;
		font-size: 16px;
		border-radius: 50%;
		color: #000;
		padding-top: 7px;
		font-weight: 300;
		cursor: pointer;
	}
	.faq-element p{
		color: #777 !important;
		font-size: 22px !important;
		text-align: initial;
		line-height: initial !important;
		display: none;
	}
	hr{
		border-color: #252525;
	}
</style>
@endsection
@section('logo', URL::to('/assets/images/logo.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')

	<div class="col-xs-12 col-md-12 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1 class="first-head">FAQS </h1>
				<div class="row">
					<div class="col-xs-12 col-md-10 col-md-offset-1 faq-element open">
						<span class="pull-left first">1- How the process of Sulazi work?</span>
						<span class="pull-right last"><i class="fa fa-minus"></i></span>
						<div class="clearfix"></div>
						<p>We are an online interior design service that combine the knowledge and personalization you get from working with a real designer. You will see interior design interior ideas in your exact room, collaborate online with your designer, and shop your entire look</p>
						<hr>
					</div>
					<div class="col-xs-12 col-md-10 col-md-offset-1 faq-element">
						<span class="pull-left first">2- How the process of Sulazi work?</span>
						<span class="pull-right last"><i class="fa fa-plus"></i></span>
						<div class="clearfix"></div>
						<p>We are an online interior design service that combine the knowledge and personalization you get from working with a real designer. You will see interior design interior ideas in your exact room, collaborate online with your designer, and shop your entire look</p>
						<hr>
					</div>
					<div class="col-xs-12 col-md-10 col-md-offset-1 faq-element">
						<span class="pull-left first">3- How the process of Sulazi work?</span>
						<span class="pull-right last"><i class="fa fa-plus"></i></span>
						<div class="clearfix"></div>
						<p>We are an online interior design service that combine the knowledge and personalization you get from working with a real designer. You will see interior design interior ideas in your exact room, collaborate online with your designer, and shop your entire look</p>
						<hr>
					</div>
					<div class="col-xs-12 col-md-10 col-md-offset-1 faq-element">
						<span class="pull-left first">4- How the process of Sulazi work?</span>
						<span class="pull-right last"><i class="fa fa-plus"></i></span>
						<div class="clearfix"></div>
						<p>We are an online interior design service that combine the knowledge and personalization you get from working with a real designer. You will see interior design interior ideas in your exact room, collaborate online with your designer, and shop your entire look</p>
						<hr>
					</div>
					<div class="col-xs-12 col-md-10 col-md-offset-1 faq-element">
						<span class="pull-left first">5- How the process of Sulazi work?</span>
						<span class="pull-right last"><i class="fa fa-plus"></i></span>
						<div class="clearfix"></div>
						<p>We are an online interior design service that combine the knowledge and personalization you get from working with a real designer. You will see interior design interior ideas in your exact room, collaborate online with your designer, and shop your entire look</p>
						<hr>
					</div>
					<div class="col-xs-12 col-md-10 col-md-offset-1 faq-element">
						<span class="pull-left first">6- How the process of Sulazi work?</span>
						<span class="pull-right last"><i class="fa fa-plus"></i></span>
						<div class="clearfix"></div>
						<p>We are an online interior design service that combine the knowledge and personalization you get from working with a real designer. You will see interior design interior ideas in your exact room, collaborate online with your designer, and shop your entire look</p>
						<hr>
					</div>
					<div class="col-xs-12 col-md-10 col-md-offset-1 faq-element">
						<span class="pull-left first">7- How the process of Sulazi work?</span>
						<span class="pull-right last"><i class="fa fa-plus"></i></span>
						<div class="clearfix"></div>
						<p>We are an online interior design service that combine the knowledge and personalization you get from working with a real designer. You will see interior design interior ideas in your exact room, collaborate online with your designer, and shop your entire look</p>
						<hr>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('scripts')
<script>
	$(function(){
		$('.faq-element span.last').on('click',function(e){
			e.preventDefault();
			e.stopPropagation();
			if($(this).parents('.faq-element').hasClass('open')){
				$(this).html('<i class="fa fa-plus"></i>');
				$(this).siblings('p').slideUp(250);
				$(this).parents('.faq-element').removeClass('open');
			}else{
				$(this).html('<i class="fa fa-minus"></i>');
				$(this).siblings('p').slideDown(250);
				$(this).parents('.faq-element').addClass('open');
			}
		});
	})
</script>
@endsection