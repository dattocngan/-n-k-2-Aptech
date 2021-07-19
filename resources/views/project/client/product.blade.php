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
						<a href="{{route('client_single')}}">Home</a>
						<i>|</i>
					</li>
					<li>Electronics</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>M</span>obiles
				<span>&</span>
				<span>C</span>omputers</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<div class="row">
								<div class="col-md-4 product-men">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="{{ URL::asset('project/images/m1.jpg') }}" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{route('client_single')}}" class="link-product-add-cart">Chi tiết</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="{{route('client_single')}}">Samsung Galaxy J7</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">$200.00</span>
												<del>$280.00</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="{{route('client_checkout')}}" method="post">
													@csrf
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="Samsung Galaxy J7" />
														<input type="hidden" name="amount" value="200.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Thêm giỏ hàng" class="button btn" />
													</fieldset>
												</form>
											</div>

										</div>
									</div>
								</div>
								<div class="col-md-4 product-men mt-md-0 mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="{{ URL::asset('project/images/m2.jpg') }}" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{route('client_single')}}" class="link-product-add-cart">Chi tiết</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="{{route('client_single')}}">OPPO A37f</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">$230.00</span>
												<del>$250.00</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="{{route('client_checkout')}}" method="post">
													@csrf
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="OPPO A37f" />
														<input type="hidden" name="amount" value="230.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Thêm giỏ hàng" class="button btn" />
													</fieldset>
												</form>
											</div>

										</div>
									</div>
								</div>
								<div class="col-md-4 product-men mt-md-0 mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="{{ URL::asset('project/images/m2.jpg') }}" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{route('client_single')}}" class="link-product-add-cart">Chi tiết</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="{{route('client_single')}}">OPPO A37f</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">$230.00</span>
												<del>$250.00</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="{{route('client_checkout')}}" method="post">
													@csrf
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="OPPO A37f" />
														<input type="hidden" name="amount" value="230.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Thêm giỏ hàng" class="button btn" />
													</fieldset>
												</form>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- //first section -->
						<!-- second section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<div class="row">
								<div class="col-md-4 product-men">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="{{ URL::asset('project/images/m4.jpg') }}" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{route('client_single')}}" class="link-product-add-cart">Chi tiết</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="{{route('client_single')}}">Infinix Hot S3</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">$300.00</span>
												<del>$320.00</del>
											</div>
											<span class="product-new-top">New</span>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="Infinix Hot S3" />
														<input type="hidden" name="amount" value="300.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Thêm giỏ hàng" class="button btn" />
													</fieldset>
												</form>
											</div>

										</div>
									</div>
								</div>
								<div class="col-md-4 product-men mt-md-0 mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="{{ URL::asset('project/images/m2.jpg') }}" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{route('client_single')}}" class="link-product-add-cart">Chi tiết</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="{{route('client_single')}}">OPPO A37f</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">$230.00</span>
												<del>$250.00</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="{{route('client_checkout')}}" method="post">
													@csrf
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="OPPO A37f" />
														<input type="hidden" name="amount" value="230.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Thêm giỏ hàng" class="button btn" />
													</fieldset>
												</form>
											</div>

										</div>
									</div>
								</div>
								<div class="col-md-4 product-men mt-md-0 mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="{{ URL::asset('project/images/m2.jpg') }}" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{route('client_single')}}" class="link-product-add-cart">Chi tiết</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="{{route('client_single')}}">OPPO A37f</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">$230.00</span>
												<del>$250.00</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="{{route('client_checkout')}}" method="post">
													@csrf
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="OPPO A37f" />
														<input type="hidden" name="amount" value="230.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Thêm giỏ hàng" class="button btn" />
													</fieldset>
												</form>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- //second section -->
						
					</div>
				</div>
				<!-- //product left -->
				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Tìm kiếm</h3>
							<form action="#" method="post">
								<input type="search" placeholder="Tên sản phẩm..." name="search" required="">
								<input type="submit" value=" ">
							</form>
						</div>
						<!-- price -->
						<div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Giá</h3>
							<div class="w3l-range">
								<ul>
									<li>
										<a href="{{ route('client_product') }}">Dưới 1.000.000 VNĐ</a>
									</li>
									<li class="my-1">
										<a href="{{ route('client_product') }}">1.000.000 - 5.000.000 VNĐ</a>
									</li>
									<li>
										<a href="{{ route('client_product') }}">5.000.000 - 10.000.000 VNĐ</a>
									</li>
									<li class="my-1">
										<a href="{{ route('client_product') }}">10.000.000 - 20.000.000 VNĐ</a>
									</li>
									<li>
										<a href="{{ route('client_product') }}">20.000.000 - 30.000.000 VNĐ</a>
									</li>
									<li class="mt-1">
										<a href="{{ route('client_product') }}">Trên 30.000.000 VNĐ</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //price -->
						
						
						<!-- RAM -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">RAM</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">2GB</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">4GB</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">6GB</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">8GB</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">16GB</span>
								</li>
								
							</ul>
						</div>
						<!-- //RAM -->

						<!-- //electronics -->
						
						<!-- best seller -->
						<div class="f-grid py-2">
							<h3 class="agileits-sear-head mb-3">Sản phẩm bán chạy</h3>
							<div class="box-scroll">
								<div class="scroll">
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="{{ URL::asset('project/images/k1.jpg') }}" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="{{ route('client_single') }}">Samsung Galaxy On7 Prime (Gold, 4GB RAM + 64GB Memory)</a>
											<a href="{{ route('client_single') }}" class="price-mar mt-2">$12,990.00</a>
										</div>
									</div>
									<div class="row my-4">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="{{ URL::asset('project/images/k2.jpg') }}" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="{{ route('client_single') }}">Haier 195 L 4 Star Direct-Cool Single Door Refrigerator</a>
											<a href="{{ route('client_single') }}" class="price-mar mt-2">$12,499.00</a>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="{{ URL::asset('project/images/k3.jpg') }}" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="{{ route('client_single') }}">Ambrane 13000 mAh Power Bank (P-1310 Premium)</a>
											<a href="{{ route('client_single') }}" class="price-mar mt-2">$1,199.00 </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- //best seller -->
					</div>
				</div>
				<!-- //product right -->
			</div>
		</div>
	</div>
	<!-- //top products -->

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

	<!-- smoothscroll -->
	<script src="{{ URL::asset('project/js/SmoothScroll.min.js') }}"></script>
	<!-- //smoothscroll -->

	{{-- <!-- start-smooth-scrolling -->
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
	<!-- //end-smooth-scrolling --> --}}

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
