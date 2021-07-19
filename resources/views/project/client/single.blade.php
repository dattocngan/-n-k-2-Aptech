@extends('project.client.layout.master')

@section('list')
	<li class="nav-item mr-lg-3 mb-lg-0 mb-2">
		<a class="nav-link" href="{{ route('client_index') }}">Trang chủ
			<span class="sr-only">(current)</span>
		</a>
	</li>
	<li class="nav-item dropdown mr-lg-3 mb-lg-0 mb-2">
		<a class="nav-link dropdown-toggle" href="{{ route('client_product') }}">
			Điện thoại
		</a>
		<div class="dropdown-menu">
			<div class="agile_inner_drop_nav_info p-4">
				<div class="row">
					<div class="col-sm-6 multi-gd-img">
						<ul class="multi-column-dropdown">
							<li>
								<a href="{{ route('client_product') }}">Iphone</a>
							</li>
							<li>
								<a href="{{ route('client_product') }}">Samsung</a>
							</li>
						</ul>
					</div>
					<div class="col-sm-6 multi-gd-img">
						<ul class="multi-column-dropdown">
							<li>
								<a href="{{ route('client_product') }}">Oppo</a>
							</li>
							<li>
								<a href="{{ route('client_product') }}">Vinsmart</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</li>
	<li class="nav-item dropdown mr-lg-3 mb-lg-0 mb-2">
		<a class="nav-link dropdown-toggle" href="{{ route('client_product') }}">
			Smart Watch
		</a>
		<div class="dropdown-menu">
			<div class="agile_inner_drop_nav_info p-4">
				<div class="row">
					<div class="col-sm-6 multi-gd-img">
						<ul class="multi-column-dropdown">
							<li>
								<a href="{{ route('client_product') }}">Apple</a>
							</li>
							<li>
								<a href="{{ route('client_product') }}">Huawei</a>
							</li>
						</ul>
					</div>
					<div class="col-sm-6 multi-gd-img">
						<ul class="multi-column-dropdown">
							<li>
								<a href="{{ route('client_product') }}">Realme</a>
							</li>
							<li>
								<a href="{{ route('client_product') }}">Samsung</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</li>
	<li class="nav-item dropdown mr-lg-3 mb-lg-0 mb-2">
		<a class="nav-link dropdown-toggle" href="{{ route('client_product') }}">
			Laptop
		</a>
		<div class="dropdown-menu">
			<div class="agile_inner_drop_nav_info p-4">
				<div class="row">
					<div class="col-sm-6 multi-gd-img">
						<ul class="multi-column-dropdown">
							<li>
								<a href="{{ route('client_product') }}">Dell</a>
							</li>
							<li>
								<a href="{{ route('client_product') }}">HP</a>
							</li>
						</ul>
					</div>
					<div class="col-sm-6 multi-gd-img">
						<ul class="multi-column-dropdown">
							<li>
								<a href="{{ route('client_product') }}">Asus</a>
							</li>
							<li>
								<a href="{{ route('client_product') }}">Mac</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</li>
	<li class="nav-item mr-lg-3 mb-lg-0 mb-2">
		<a class="nav-link" href="">Tin tức</a>
	</li>
	<li class="nav-item mr-lg-3 mb-lg-0 mb-2">
		<a class="nav-link" href="{{ route('client_about') }}">Về chúng tôi</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="{{ route('client_contact') }}">Liên hệ ngay</a>
	</li>
@endsection

@section('content')
	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.html">Home</a>
						<i>|</i>
					</li>
					<li>Single Product 1</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>S</span>ingle
				<span>P</span>age</h3>
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="{{ URL::asset('project/images/si1.jpg') }}">
									<div class="thumb-image">
										<img src="{{ URL::asset('project/images/si1.jpg') }}" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
								<li data-thumb="{{ URL::asset('project/images/si2.jpg') }}">
									<div class="thumb-image">
										<img src="{{ URL::asset('project/images/si2.jpg') }}" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
								<li data-thumb="{{ URL::asset('project/images/si3.jpg') }}">
									<div class="thumb-image">
										<img src="{{ URL::asset('project/images/si3.jpg') }}" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3">Samsung Galaxy J7 Prime (Gold, 16 GB) (3 GB RAM)</h3>
					<p class="mb-3">
						<span class="item_price">$200.00</span>
						<del class="mx-2 font-weight-light">$280.00</del>
						<label>Free delivery</label>
					</p>
					<div class="single-infoagile">
						<ul>
							<li class="mb-3">
								Cash on Delivery Eligible.
							</li>
							<li class="mb-3">
								Shipping Speed to Delivery.
							</li>
							<li class="mb-3">
								EMIs from $655/month.
							</li>
							<li class="mb-3">
								Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C
							</li>
						</ul>
					</div>
					<div class="product-single-w3l">
						<p class="my-3">
							<i class="far fa-hand-point-right mr-2"></i>
							<label>1 Year</label>Manufacturer Warranty</p>
						<ul>
							<li class="mb-1">
								3 GB RAM | 16 GB ROM | Expandable Upto 256 GB
							</li>
							<li class="mb-1">
								5.5 inch Full HD Display
							</li>
							<li class="mb-1">
								13MP Rear Camera | 8MP Front Camera
							</li>
							<li class="mb-1">
								3300 mAh Battery
							</li>
							<li class="mb-1">
								Exynos 7870 Octa Core 1.6GHz Processor
							</li>
						</ul>
						<p class="my-sm-4 my-3">
							<i class="fas fa-retweet mr-3"></i>Net banking & Credit/ Debit/ ATM card
						</p>
					</div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<form method="post" id="theForm" action="http://localhost:82/WEB/Back-end/Project/semester2/public/api/cart/index">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="Samsung Galaxy J7 Prime" />
									<input type="hidden" name="amount" value="200.00" />
									<input type="hidden" name="discount_amount" value="1.00" />
									<input type="hidden" name="currency_code" value="USD" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Thêm giỏ hàng" class="button" />
								</fieldset>
							</form>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Single Page -->

	<!-- middle section -->
	<div class="join-w3l1 py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
				<div class="col-lg-6">
					<div class="join-agile text-left p-4">
						<div class="row">
							<div class="col-sm-7 offer-name">
								<h6>Smooth, Rich & Loud Audio</h6>
								<h4 class="mt-2 mb-3">Branded Headphones</h4>
								<p>Sale up to 25% off all in store</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="{{ URL::asset('project/images/off1.png') }}" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5">
					<div class="join-agile text-left p-4">
						<div class="row ">
							<div class="col-sm-7 offer-name">
								<h6>A Bigger Phone</h6>
								<h4 class="mt-2 mb-3">Smart Phones 5</h4>
								<p>Free shipping order over $100</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="{{ URL::asset('project/images/off2.png') }}" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- middle section -->
@endsection

@section('js')
	<!-- js-files -->
	<!-- jquery -->
	<script src="{{ URL::asset('project/js/jquery-2.2.3.min.js') }}"></script>
	<!-- //jquery -->

	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="{{ URL::asset('project/js/jquery.magnific-popup.js') }}"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //popup modal (for location)-->

	<!-- cart-js -->
	<script src="{{ URL::asset('project/js/minicart.js') }}"></script>
	<script>
		paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- imagezoom -->
	<script src="{{ URL::asset('project/js/imagezoom.js') }}"></script>
	<!-- //imagezoom -->

	<!-- flexslider -->
	<link rel="stylesheet" href="{{ URL::asset('project/css/flexslider.css') }}" type="text/css" media="screen" />

	<script src="{{ URL::asset('project/js/jquery.flexslider.js') }}"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //FlexSlider-->

	<!-- smoothscroll -->
	<script src="{{ URL::asset('project/js/SmoothScroll.min.js') }}"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="{{ URL::asset('project/js/move-top.js') }}"></script>
	<script src="{{ URL::asset('project/js/easing.js') }}"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="{{ URL::asset('project/js/boostrap.js') }}"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->
@endsection