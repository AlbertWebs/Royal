<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="robots" content="index,follow">
<meta name="googlebot" content="index,follow"><!-- Google Specific -->
<meta name="subject" content="Laptops For Hire | RoyalTech Computers Limited | Laptops for Leasing kenya">
<meta name="rating" content="General">
<meta name="referrer" content="no-referrer">
<meta name="theme-color" content="#1c2c52">
{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
<meta property="og:image" content="{{url('/')}}/uploads/products/1_062eeb89-ffbf-474a-8443-1285ea8a9b41.jpg" />
<meta property="og:site_name" content="Royaltech Computers Limited">
<meta property="og:locale" content="en_US">
{!! Twitter::generate() !!}
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@RoyaltechC">
<meta name="twitter:url" content="{{url('/')}}">
<meta name="twitter:description" content="Rent Laptops, Lease Laptops, Laptops for Hire,  Laptops in Kenya, Laptop Rentals in Kenya, Laptops Leasing in Kenya">
<meta name="twitter:image" content="{{url('/')}}/uploads/products/1_062eeb89-ffbf-474a-8443-1285ea8a9b41.jpg">

{{-- {!! JsonLd::generate() !!} --}}
<!-- Stylesheets -->
<link href="{{asset('corporate/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('corporate/css/style.css')}}" rel="stylesheet">
<link href="{{asset('corporate/css/responsive.css')}}" rel="stylesheet">

<link href="{{asset('fonts.googleapis.com/css26778.css?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Nunito+Sans:wght@300;600;700;800;900&amp;display=swap')}}" rel="stylesheet">

@include('favicon')
@include('tawkto')
@include('pixels')

@include('whatsApp')



<!-- Color Themes -->
<link id="theme-color-file" href="{{asset('corporate/css/color-themes/default-theme.css')}}" rel="stylesheet">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="{{asset('corporate/js/respond.js')}}"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

 	<!-- Main Header-->
    <header class="main-header header-style-two">

		<!-- Header Top Two -->
        <div class="header-top-two">
            <div class="outer-container">
                <div class="clearfix">

					<!-- Top Left -->
					<div class="top-left clearfix">
						<!-- Info List -->
						<ul class="info-list">
							<li>We are creative, ambitious and ready for challenges!</li>
							<li><a href="https://g.page/royaltech-computers-ltd?share"><span class="icon fa fa-location-arrow"></span> Biashara Street, Revlon Profesional Plaza, 2nd Floor, Suite 1</a></li>
						</ul>
					</div>

					<!-- Top Right -->
                    <div class="top-right pull-right clearfix">
						<!-- Info List -->
						<ul class="info-list">
							<li><a href="mailto:info@webmail.com"><span class="icon flaticon-email"></span> info@royaltech.co.ke</a></li>
							<li><a href="tel:786-875-864-75"><span class="icon flaticon-telephone"></span> 0724 404935</a></li>
						</ul>
						<!-- Social Box -->
						<ul class="social-box">
							<li><a href="https://www.facebook.com/royaltechcomps" class="fa fa-facebook-f"></a></li>
							<li><a href="https://twitter.com/RoyaltechC" class="fa fa-twitter"></a></li>
							<li><a href="https://www.instagram.com/royaltechcomps/" class="fa fa-instagram"></a></li>
							<li><a href="https://api.whatsapp.com/send?phone=254724404935&text=Hello there, i am texing from Royal Tech Website" class="fa fa-whatsapp"></a></li>
						</ul>
                    </div>

                </div>
            </div>
        </div>

		<!--Header-Upper-->
        <div class="header-upper">
        	<div class="outer-container clearfix">

				<div class="pull-left logo-box">
					<div class="logo">
						<a href="{{url('/')}}"><img style="max-height:100px"  src="{{url('/')}}/uploads/Royaltech-Original-White-1.png" alt="Royal Tech Computers Limited" title=""></a> &nbsp; &nbsp;
					</div>
				</div>



				<div class="nav-outer clearfix">
					<!--Mobile Navigation Toggler-->
					<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
					<!-- Main Menu -->
					<nav class="main-menu navbar-expand-md">
						<div class="navbar-header">
							<!-- Toggle Button -->
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
							@include('front.menu')
						</div>
					</nav>

					<!-- Main Menu End-->
					<div class="outer-box clearfix">

						<!-- Cart Box -->
						@include('front.carts')

						<!-- Nav Btn -->
						<div class="nav-btn navSidebar-button"><span class="icon flaticon-menu-2"></span></div>

                        @if(Auth::User())
                        <div class="btn-box">
							<a href="{{url('/')}}/dashboard" class="theme-btn btn-style-one"><span class="txt"><span class="fa fa-user"></span> &nbsp; {{Auth::User()->name}}</span></a>
						</div>
                        @else
						<!-- Quote Btn -->
						<div class="btn-box">
							<a href="{{url('/')}}/dashboard" class="theme-btn btn-style-one"><span class="txt"><span class="fa fa-user"></span> &nbsp; My Account</span></a>
						</div>
                        @endif

					</div>
				</div>

            </div>
        </div>
        <!--End Header Upper-->

		<!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="{{url('/')}}" title=""><img style="max-height:70px"  src="{{url('/')}}/uploads/logo-theme.png" alt="Royal Tech Computers Limited" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->

					<!-- Main Menu End-->
					<div class="outer-box clearfix">

						<!-- Cart Box -->
						@include('front.carts')

						<!-- Search Btn -->
						<div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>

						<!-- Nav Btn -->
						<div class="nav-btn navSidebar-button"><span class="icon flaticon-menu"></span></div>

					</div>

                </div>
            </div>
        </div><!-- End Sticky Menu -->

		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="{{url('/')}}"><img src="#" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

	<!-- Sidebar Cart Item -->
	<div class="xs-sidebar-group info-group">
		<div class="xs-overlay xs-bg-black"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading">
					<a href="#" class="close-side-widget">
						X
					</a>
				</div>
				<div class="sidebar-textwidget">

					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="content-inner">
							<div class="logo">
								<a href="{{url('/')}}"><img src="{{url('/')}}/uploads/RoyalTechComputersLogow-05.png" alt="Royal Tech Computers Logo" /></a>
							</div>
							<div class="content-box">
								<h2>About Us</h2>
								<p class="text">
                                    We are Kenya's best Information Technology Company. Providing the highest quality in hardware & Network solutions. About more than 10 years of experience and 1000+ of innovative achievements.
                                </p>
								<a href="#" class="theme-btn btn-style-three"><span class="txt">Consultation</span></a>
							</div>
							<div class="contact-info">
								<h2>Contact Info</h2>
								<ul class="list-style-one">
									<li><span class="icon fa fa-location-arrow"></span>Biashara Street, Revlon Profesional Plaza, 2nd Floor, Suite 1, Kenya 49939-00100</li>
									<li><span class="icon fa fa-phone"></span>(254) 0724 404935</li>
									<li><span class="icon fa fa-envelope"></span>support@royaltech.co.ke</li>
									<li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
								</ul>
							</div>
							<!-- Social Box -->
							<ul class="social-box">
								<li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
								<li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
								<li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
								<li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
                                <li class="whatsapp"><a href="https://api.whatsapp.com/send?phone=254724404935&text=Hello there, i am texing from Royal Tech Website" class="fa fa-whatsapp"></a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- END sidebar widget item -->

    @yield('content')

    @include('front.footer')


</div>
<!--End pagewrapper-->


<!-- Search Popup -->
<div class="search-popup">
	<button class="close-search style-two"><span class="flaticon-multiply"></span></button>
	<button class="close-search"><span class="flaticon-up-arrow-1"></span></button>
	<form method="post" action="#">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="{{asset('corporate/js/jquery.js')}}"></script>
<script src="{{asset('corporate/js/popper.min.js')}}"></script>
<script src="{{asset('corporate/js/bootstrap.min.js')}}"></script>
<script src="{{asset('corporate/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('corporate/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('corporate/js/appear.js')}}"></script>
<script src="{{asset('corporate/js/mixitup.js')}}"></script>
<script src="{{asset('corporate/js/parallax.min.js')}}"></script>
<script src="{{asset('corporate/js/tilt.jquery.min.js')}}"></script>
<script src="{{asset('corporate/js/jquery.paroller.min.js')}}"></script>
<script src="{{asset('corporate/js/owl.js')}}"></script>
<script src="{{asset('corporate/js/wow.js')}}"></script>
<script src="{{asset('corporate/js/nav-tool.js')}}"></script>
<script src="{{asset('corporate/js/jquery-ui.js')}}"></script>
<script src="{{asset('corporate/js/script.js')}}"></script>
<script src="{{asset('corporate/js/color-settings.js')}}"></script>


{{--  --}}
<script type='application/ld+json'>
    {
      "@context": "http://www.schema.org",
      "@type": "ProfessionalService",
      "name": "Royaltech Computers Limited",
      "url": "http://royaltech.co.ke/",
      "logo": "https://royaltech.co.ke/uploads/Royaltech-Original-1.png",
      "sameAs": [
        "https://www.facebook.com/royaltechcomps/",
        "https://www.instagram.com/royaltechcomps/",
        "https://www.linkedin.com/company/royaltech-computers-ltd/",
        "https://twitter.com/RoyaltechC"
      ],
      "priceRange": "$$$$",
      "image": "https://royaltech.co.ke/uploads/Royaltech-Original-1.png",
      "description": "Laptops for Hire, Rent Laptops, Lease Laptops, Laptops in Kenya, Laptop Rentals in Kenya, Laptops Leasing in Kenya",
      "address": {
         "@type": "PostalAddress",
         "streetAddress": " Tom Mboya St, Nairobi",
         "addressLocality": "Nairobi",
         "addressRegion": "Kenya",
         "postalCode": "00100",
         "addressCountry": "Kenya"
      },
       "openingHours": "Mo 01:00-01:00 Tu 01:00-01:00 We 01:00-01:00 Th 01:00-01:00 Fr 01:00-01:00 Sa 01:00-01:00 Su 01:00-01:00",
       "telephone": "+254724404935"
    }
</script>
{{--  --}}

</body>

</html>
