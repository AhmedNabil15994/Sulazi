<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ URL::to('/') }}">
        <img class="navbar-image" src="@yield('logo')" alt="logo">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ URL::to('/') }}">Home <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ URL::to('/details') }}">The Details</a></li>
              <li><a href="{{ URL::to('/process') }}">The Process</a></li>
              <li><a href="{{ URL::to('/prices') }}">Prices & Packages</a></li>
            </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ URL::to('/boxes') }}">The Boxes</a></li>
              <li><a href="{{ URL::to('/giftCard') }}">Gift Card</a></li>
            </ul>
        </li>
        <li><a href="{{ URL::to('/faqs') }}">Faq</a></li>
        <li><a class="my-btn" href="{{ URL::to('/getStarted') }}">Get Started</a></li>
        <li>
          <a class="@yield('has-cart') img-anc" href="#">
            <img src="@yield('cart')" alt="">
            <span class="cart-dot"></span>
          </a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>