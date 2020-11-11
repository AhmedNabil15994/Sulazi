<!--footer-->
<section class="col-xs-12 dark-section footer text-center">
  	<div class="container">
		<h1><img src="{{ URL::to('/assets/images/logo.png') }}" alt="icon"></h1>
		<div class="row">
			<img src="{{ URL::to('/assets/images/instagram.png') }}" alt="icon">
			<img src="{{ URL::to('/assets/images/pee.png') }}" alt="icon">
			<img src="{{ URL::to('/assets/images/facebook.png') }}" alt="icon">
			<img src="{{ URL::to('/assets/images/twitter.png') }}" alt="icon">
		</div>
		<div class="row">
			<a href="{{ URL::to('/info') }}">{{ trans('main.how_it') }}</a>
			<a href="{{ URL::to('/prices') }}">{{ trans('main.prices') }}</a>
			<a href="{{ URL::to('/press') }}">{{ trans('main.press') }}</a>
			<a href="{{ URL::to('/giftCard') }}">{{ trans('main.gift_card') }}</a>
			<a href="{{ URL::to('/contactUs') }}">{{ trans('main.contact_us') }}</a>
			<a href="{{ URL::to('/faqs') }}">{{ trans('main.link4') }}</a>
			<a href="#">{{ trans('main.terms') }}</a>
		</div>
		<div class="row rights">
			{{ trans('main.rights') }} {{ date('Y') }} @wesa.sa
		</div>
  	</div>
</section>
<!--footer-->

<script src="{{asset('assets/vendors/jquery/dist/jquery.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/production/js/toastr.min.js')}}"></script>
<script src="{{ asset('assets/vendors/moment.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script src="{{ URL::to('/assets/plugins/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/plugins/select2/select2.min.js') }}" type="text/javascript"></script>
<!-- iCheck -->
<script  src="{{ asset('assets/vendors/iCheck/icheck.min.js')}}"></script>


<script src="{{ URL::to('/assets/js/main.js') }}"></script>
<script src="{{ asset('assets/components/multi-lang.js')}}"></script>

@yield('scripts')
@yield('scripts-2')