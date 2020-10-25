<!--footer-->
<section class="col-xs-12 dark-section footer text-center">
  	<div class="container">
		<h1>Sulazi</h1>
		<div class="row">
			<img src="{{ URL::to('/assets/images/instagram.png') }}" alt="icon">
			<img src="{{ URL::to('/assets/images/pee.png') }}" alt="icon">
			<img src="{{ URL::to('/assets/images/facebook.png') }}" alt="icon">
			<img src="{{ URL::to('/assets/images/twitter.png') }}" alt="icon">
		</div>
		<div class="row">
			<a href="{{ URL::to('/info') }}">How It Works</a>
			<a href="{{ URL::to('/prices') }}">Prices</a>
			<a href="{{ URL::to('/press') }}">Press</a>
			<a href="{{ URL::to('/giftCard') }}">Gift Card</a>
			<a href="{{ URL::to('/contactUs') }}">Contact Us</a>
			<a href="{{ URL::to('/faqs') }}">Faqs</a>
			<a href="#">Terms & Conditions</a>
		</div>
		<div class="row rights">
			All Copyrights Reserved {{ date('Y') }}
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

@yield('scripts')
@yield('scripts-2')