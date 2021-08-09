@extends('client.layout.master')

@section('list')
	<li class="nav-item mr-lg-3 mb-lg-0 mb-2">
		<a class="nav-link" href="{{ route('client_index') }}">Trang chủ
			<span class="sr-only">(current)</span>
		</a>
	</li>
	
	{{-- Danh sách Category --}}
	@foreach ($categoryP as $parent)
	<li class="nav-item dropdown mr-lg-3 mb-lg-0 mb-2">
		<a class="nav-link dropdown-toggle" href="{{ route('client_product', ['idCategory'=>$parent->id]) }}">
			{{ $parent -> name }}
		</a>
		<div class="dropdown-menu">
			<div class="agile_inner_drop_nav_info p-4">
				<div class="row">
					@foreach ($categoryC as $child)
						@if ($child->parent_id == $parent->id )
						<div class="col-sm-6 multi-gd-img">
							<ul class="multi-column-dropdown">
								<li>
									<a href="{{ route('client_product', ['idCategory'=>$child->id]) }}">{{$child->name}}</a>
								</li>
							</ul>
						</div>
						@endif
					@endforeach
				</div>
			</div>
		</div>
	</li>
	@endforeach
	{{-- //Danh sách Category --}}

	<li class="nav-item mr-lg-3 mb-lg-0 mb-2">
		<a class="nav-link" href="{{ route('client_news') }}">Tin tức</a>
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
					<li>{{$product->name}}</li>
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
				@php
				$title = $product->name;
				for ($i=0; $i < strlen($title); $i++) { 
					if($i == 0 || $title[$i-1] == ' ') echo "<span>$title[$i]</span>";
					else echo $title[$i];
				}
				@endphp
			</h3>
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="{{ URL::asset($thumbnailList[0]->thumbnail) }}">
									<div class="thumb-image">
										<img src="{{ URL::asset($thumbnailList[0]->thumbnail) }}" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
								<li data-thumb="{{ URL::asset($thumbnailList[1]->thumbnail) }}">
									<div class="thumb-image">
										<img src="{{ URL::asset($thumbnailList[1]->thumbnail) }}" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
								<li data-thumb="{{ URL::asset($thumbnailList[2]->thumbnail) }}">
									<div class="thumb-image">
										<img src="{{ URL::asset($thumbnailList[2]->thumbnail) }}" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3">{{ $product->name }}</h3>
					<p class="mb-3">
						@if($product->price_discount > 0)
							<span class="item_price">{{number_format($product->price_discount, 0, '', '.')}} VNĐ</span>
							<del class="mx-2 font-weight-light">{{number_format($product->price, 0, '', '.')}}</del>
						@else
							<span class="item_price">{{number_format($product->price, 0, '', '.')}} VNĐ</span>
						@endif
						<label>Miễn phí vận chuyển</label>
					</p>
					<div class="single-infoagile">
						<ul>
							<li class="mb-3">
								Thanh toán khi giao hàng thành công.
							</li>
							<li class="mb-3">
								Vận chuyển nhanh chóng.
							</li>
							<li class="mb-3">
								Ưu đãi Ngân hàng Giảm giá đặc biệt 5% * với Thẻ tín dụng Agribank và Techcombank.
							</li>
						</ul>
					</div>
					<div class="product-single-w3l">
						<p class="my-3">
							<i class="far fa-hand-point-right mr-2"></i>
							<label>1 năm</label> bảo hành</p>
						<div>
							{{$product->short_description}}
						</div>
						<p class="my-sm-4 my-3">
							<i class="fas fa-retweet mr-3"></i>Ngân hàng điện tử và tín dụng/ Ghi nợ/ Thẻ ATM
						</p>
					</div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							@if ($product->quantity_available <= 0)
								<input type="submit" value="Hết hàng" style="cursor:not-allowed" class="button" />
							@else
								<form method="post" action="{{route('client_checkout')}}">
									@csrf
									<input hidden type="text" name="idProduct" value="{{$product->id}}">
									<input type="submit" value="Thêm giỏ hàng" class="button" />
								</form>
							@endif
						</div>
					</div>
				</div>
			</div>
			<div class="description">
				<h2 style="margin-bottom:20px">Mô tả sản phẩm</h2>
				{{$product->description}}
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