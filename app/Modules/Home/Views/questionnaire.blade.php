@extends('Frontend.Layouts.master')

@section('title',trans('main.card1_button'))

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/navbar-dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/questionnaire.css') }}">
@endsection
@section('logo', URL::to('/assets/images/vlogo4.png'))
@section('cart', URL::to('/assets/images/cart-icon2.png'))

@section('content')
	<div class="col-xs-12 second-section page">
		<div class="container">
			<div class="interior roomlift text-center">
				<h1>{{ trans('main.card1_button') }}</h1>
				
				<p class="head-p">{{ trans('main.quest_contact_info') }}</p>
				<div class="form">
					<div class="col-xs-12 col-md-6 mg-bt-30">
						<span class="head-span">{{ trans('main.f_name') }}</span>
						<input type="text" name="f_name" placeholder="John">
					</div>
					<div class="col-xs-12 col-md-6 mg-bt-30">
						<span class="head-span">{{ trans('main.l_name') }}</span>
						<input type="text" name="l_name" placeholder="Doe">
					</div>
					<div class="col-xs-12 col-md-6">
						<span class="head-span">{{ trans('main.address') }}</span>
						<input type="text" name="address" placeholder="Maadi - Cairo">
					</div>
					<div class="col-xs-12 col-md-6 last-x">
						<span class="head-span">{{ trans('main.email') }}</span>
						<input type="email" name="email" placeholder="Example147@gmail.com">
					</div>
					
					<div class="clearfix"></div>
				</div>

				<p class="head-p">{{ trans('main.quest_family_info') }}</p>
				<div class="form">
					<div class="col-xs-12 col-md-6 last-x">
						<span class="head-span">{{ trans('main.quest_span1') }}</span>
						<textarea name="family" placeholder="2 &#10;First 8 Years Old&#10;Second 5 Years Old"></textarea>
					</div>
					<div class="clearfix"></div>
				</div>

				<p class="head-p">{{ trans('main.quest_goals') }}</p>
				<div class="form">
					<div class="col-xs-12 col-md-6 mg-bt-30">
						<span class="head-span">{{ trans('main.quest_span2') }}</span>
						<input type="text" name="goal1" placeholder="Write What You Feel Right For You...">
					</div>
					<div class="col-xs-12 col-md-6 mg-bt-30">
						<span class="head-span">{{ trans('main.quest_span3') }}</span>
						<input type="text" name="goal2" placeholder="2">
					</div>
					<div class="col-xs-12 col-md-6 last-x">
						<span class="head-span">{{ trans('main.quest_span4') }}</span>
						<select name="goal3" class="select2">
							<option value="1">{{ trans('main.low') }}</option>
							<option value="2">{{ trans('main.mid') }}</option>
							<option value="3">{{ trans('main.high') }}</option>
						</select>
					</div>
					<div class="clearfix"></div>
				</div>

				<p class="head-p">{{ trans('main.quest_span5') }}</p>
				<div class="form">
					<div class="col-xs-12 col-md-6 mg-bt-30 mult">
						<span class="head-span">{{ trans('main.quest_span6') }}</span>
						<select name="style1[]" class="select2" multiple>
							<option value="1" selected>{{ trans('main.traditional') }}</option>
							<option value="2">{{ trans('main.modern') }}</option>
							<option value="3" selected>{{ trans('main.rustic') }}</option>
							<option value="4">{{ trans('main.drama') }}</option>
							<option value="5">{{ trans('main.relax') }}</option>
							<option value="6">{{ trans('main.beachy') }}</option>
							<option value="7">{{ trans('main.eclectic') }}</option>
							<option value="8">{{ trans('main.comfortable') }}</option>
							<option value="9">{{ trans('main.formal') }}</option>
							<option value="10">{{ trans('main.bohemian') }}</option>
						</select>
						<p class="small-p">{{ trans('main.quest_span7') }}</p>
					</div>
					<div class="col-xs-12 col-md-6 mg-bt-30">
						<span class="head-span">{{ trans('main.quest_span8') }}</span>
						<input type="text" name="style2" placeholder="Red">
					</div>
					<div class="clearfix"></div>
					<div class="col-xs-12 col-md-6">
						<span class="head-span">{{ trans('main.quest_span9') }}</span>
						<input type="text" name="style3" placeholder="Blue">
					</div>
					<div class="col-xs-12 col-md-6 last-x">
						<span class="head-span">{{ trans('main.quest_span10') }}</span>
						<select name="style4" class="select2">
							<option value="1">{{ trans('main.yes') }}</option>
							<option value="2">{{ trans('main.no') }}</option>
						</select>
					</div>
					<div class="clearfix"></div>
				</div>

				<p class="head-p">{{ trans('main.quest_span11') }}</p>
				<div class="form">
					<div class="col-xs-12 col-md-6 last-x">
						<span class="head-span">{{ trans('main.quest_span12') }}</span>
						<select name="treatments" class="select2">
							<option value="1">{{ trans('main.yes') }}</option>
							<option value="2">{{ trans('main.no') }}</option>
						</select>
					</div>
					<div class="clearfix"></div>
				</div>

				<p class="head-p">{{ trans('main.quest_span13') }}</p>
				<div class="form">
					<div class="col-xs-12 col-md-6 last-x">
						<span class="head-span">{{ trans('main.quest_span14') }}</span>
						<input type="text" name="measurements" placeholder="150 cm">
					</div>
					<div class="clearfix"></div>
				</div>
				<button class="header-buttons">{{ trans('main.submit_button') }}</button>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection