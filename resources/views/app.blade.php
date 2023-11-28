<!doctype html>
<html lang="<?= Session::get('lang')?>">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title -->
	<title>Afghan-Recharge</title>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{URL::asset('assets/img/favicon.png')}}">
	<!-- Bootstrap Min CSS -->
	<link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
	<!-- Animate Min CSS -->
	<link rel="stylesheet" href="{{URL::asset('assets/css/animate.min.css')}}">
	<!-- Pe-icon-7 CSS -->
	<link rel="stylesheet" href="{{URL::asset('assets/css/pe-icon-7-stroke.css')}}">
	<!-- Font Awesome Min CSS -->
	<link rel="stylesheet" href="{{URL::asset('assets/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Mran Menu CSS -->

	<link rel="stylesheet" href="{{URL::asset('assets/css/meanmenu.css')}}">
	<!-- Owl Carousel Min CSS -->
	<link rel="stylesheet" href="{{URL::asset('assets/css/owl.carousel.min.css')}}">
	<!-- Style CSS -->
	<link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/style.scss')}}">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="{{URL::asset('assets/css/responsive.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@200;300&display=swap" rel="stylesheet">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
{{-- {!! htmlScriptTagJsApi() !!} --}}
</head>

<body >

	    <!-- Start Preloader Area -->
    	<!-- Start Navbar Area -->
	<div class="navbar-area">
		<div class="techmax-responsive-nav index-navber-responsive">
			<div class="container">
				<div class="techmax-responsive-menu">
					<div class="logo">
						<a href="/">
							<img style="width:150px"  src="{{URL::asset('assets/img/logo-black.png')}}" class="white-logo" alt="logo">
							<img style="width:150px"  src="{{URL::asset('assets/img/logo-black.png')}}" class="black-logo" alt="logo">
						</a>

					</div>
				</div>
			</div>
		</div>
		<div class="techmax-nav index-navber">
			<div class="container">
				<nav class="navbar navbar-expand-md navbar-right">
                    <a class="navbar-brand" href="/">
						<img style="width:150px" src="{{URL::asset('assets/img/logo-black.png')}}" class="white-logo" alt="logo">
						<img style="width:150px" src="{{URL::asset('assets/img/logo-black.png')}}" class="black-logo" alt="logo">
					</a>
					<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
						<ul class="navbar-nav" >
							<li class="nav-item" >
								<a  href="/" class="nav-link">{{ __('lang.home') }}</a>
							</li>
							<li class="nav-item">
								<a href="/packages" class="nav-link">{{__('lang.bundle pak')}}</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">{{__('lang.more')}} <i class="fa fa-chevron-down"></i></a>
								<ul style="text-align: {{Session::get('lang') == 'en'? 'left':'right'}}"class="dropdown-menu">

									<li  class="nav-item">
										<a class="nav-link"  href="/about-us">{{ __('lang.about us') }}</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="/testimonials">{{ __('lang.testimonials') }}</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="/faq">{{ __('lang.faq') }}</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="/return-policy">{{ __('lang.return-policy') }}</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="/contact-us">{{ __('lang.contact us') }}</a>
									</li>
                                    <li class="nav-item">
										<a class="nav-link" href="/privacy-policy">{{ __('lang.privacy-policy') }}</a>
									</li>

								</ul>
							</li>

							<li class="nav-item">
                                <li><a href="/setLocal/en"  class="nav-link">EN</a></li>
							</li>

                            <li class="nav-item">
								<li><a href="/setLocal/ps" class="nav-link">پشتو</a></li>
							</li>
                            <li class="nav-item">
                                <li><a href="/setLocal/fa" class="nav-link">فارسی</a></li>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- End Navbar Area -->

    @include('sweetalert::alert')
    @yield('content')


	<!-- Start Footer Section -->
    <div style="text-align: {{Session::get('lang') == 'en'? 'left':'right'}}; direction:{{Session::get('lang') == 'en'? 'ltr':'rtl'}}">
	<section class="footer-area section-padding">
		<div class="container">
			<div class="row">
					<div class="col-lg-9 col-md-9 col-sm-12">
					<div class="single-footer-widget">
						<div class="footer-heading">
							<h3>{{ __('lang.quick links') }}</h3>
						</div>
						<ul class="footer-quick-links">
							<li><a href="/">{{ __('lang.home') }}</a></li>
							{{-- <li><a href="/fayaz">{{ __('lang.fayaz') }}</a></li> --}}
							<li><a href="/about-us">{{ __('lang.about us') }}</a></li>
							<li><a href="/testimonials">{{ __('lang.testimonials') }}</a></li>
							<li><a href="/faq">{{ __('lang.faq') }}</a></li>
							<li><a href="/privacy-policy">{{ __('lang.privacy-policy') }}</a></li>
							<li><a href="/return-policy">{{ __('lang.return-policy') }}</a></li>
							<li><a href="/contact-us">{{ __('lang.contact us') }}</a></li>
							<li><a href="setLocal/en">EN</a></li>
							<li><a href="setLocal/fa">فارسی</a></li>
							<li><a href="setLocal/ps">پشتو</a></li>
                            @if(Auth::user())
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf

                                </form>
                            </li> @endif
						</ul>


					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12">
					<img  src="{{URL::asset('./assets//img//paypal-buynow.png')}}" alt="AFR" srcset="">
				</div>
				<p> <i class="fa fa-copyright"></i> {{date('Y')}} Afghan-Recharge - All Rights Reserved, and powered by <a href="http://pit.af">PIT</a> </p>

			</div>
		</div>
	</section>
</div>

	<!-- End Footer Section -->

	<!-- Start Go Top Section -->
	<!-- <div class="go-top">
		<i class="fa fa-chevron-up"></i>
		<i class="fa fa-chevron-up"></i>
	</div> -->
	<!-- End Go Top Section -->

	<!-- jQuery Min JS -->
	<script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
	<!-- Bootstrap Min JS -->
	<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
	<!-- MeanMenu JS  -->
	<script src="{{URL::asset('assets/js/jquery.meanmenu.js')}}"></script>
	<!-- Appear Min JS -->
	<script src="{{URL::asset('assets/js/jquery.appear.min.js')}}"></script>
	<!-- CounterUp Min JS -->
	<script src="{{URL::asset('assets/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/jquery.counterup.min.js')}}"></script>
	<!-- Owl Carousel Min JS -->
	<script src="{{URL::asset('assets/js/owl.carousel.min.js')}}"></script>
	<!-- WOW Min JS -->
	<script src="{{URL::asset('assets/js/wow.min.js')}}"></script>
	<!-- Main JS -->
	<script src="{{URL::asset('assets/js/main.js')}}"></script>
	<script src="{{URL::asset('assets/js/myScript.js')}}"></script>


</body>

</html>
