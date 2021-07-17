<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Electro Store Ecommerce Category Bootstrap Responsive Web Template | About Us :: w3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<script src="{{ asset('js/app.js') }}"></script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="{{ URL::asset('project/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="{{ URL::asset('project/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<!-- Font-Awesome-Icons-CSS -->
	<link href="{{ URL::asset('project/css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="{{ URL::asset('project/css/menu.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web fonts -->

</head>

<body>
	<!-- top-header -->
	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">
					<p class="text-white text-lg-left text-center">Offer Zone Top Deals & Discounts
						<i class="fas fa-shopping-cart ml-1"></i>
					</p>
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
						<li class="text-center border-right text-white">
							<a class="play-icon popup-with-zoom-anim text-white" href="#small-dialog1">
								<i class="fas fa-map-marker mr-2"></i>Select Location</a>
						</li>
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<i class="fas fa-truck mr-2"></i>Track Order</a>
						</li>
						<li class="text-center border-right text-white">
							<i class="fas fa-phone mr-2"></i> 001 234 5678
						</li>
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> Log In </a>
						</li>
						<li class="text-center text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>Register </a>
						</li>
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>

	<!-- Button trigger modal(select-location) -->
	<div id="small-dialog1" class="mfp-hide">
		<div class="select-city">
			<h3>
				<i class="fas fa-map-marker"></i> Please Select Your Location</h3>
			<select class="list_of_cities">
				<optgroup label="Popular Cities">
					<option selected style="display:none;color:#eee;">Select City</option>
					<option>Birmingham</option>
					<option>Anchorage</option>
					<option>Phoenix</option>
					<option>Little Rock</option>
					<option>Los Angeles</option>
					<option>Denver</option>
					<option>Bridgeport</option>
					<option>Wilmington</option>
					<option>Jacksonville</option>
					<option>Atlanta</option>
					<option>Honolulu</option>
					<option>Boise</option>
					<option>Chicago</option>
					<option>Indianapolis</option>
				</optgroup>
				<optgroup label="Alabama">
					<option>Birmingham</option>
					<option>Montgomery</option>
					<option>Mobile</option>
					<option>Huntsville</option>
					<option>Tuscaloosa</option>
				</optgroup>
				<optgroup label="Alaska">
					<option>Anchorage</option>
					<option>Fairbanks</option>
					<option>Juneau</option>
					<option>Sitka</option>
					<option>Ketchikan</option>
				</optgroup>
				<optgroup label="Arizona">
					<option>Phoenix</option>
					<option>Tucson</option>
					<option>Mesa</option>
					<option>Chandler</option>
					<option>Glendale</option>
				</optgroup>
				<optgroup label="Arkansas">
					<option>Little Rock</option>
					<option>Fort Smith</option>
					<option>Fayetteville</option>
					<option>Springdale</option>
					<option>Jonesboro</option>
				</optgroup>
				<optgroup label="California">
					<option>Los Angeles</option>
					<option>San Diego</option>
					<option>San Jose</option>
					<option>San Francisco</option>
					<option>Fresno</option>
				</optgroup>
				<optgroup label="Colorado">
					<option>Denver</option>
					<option>Colorado</option>
					<option>Aurora</option>
					<option>Fort Collins</option>
					<option>Lakewood</option>
				</optgroup>
				<optgroup label="Connecticut">
					<option>Bridgeport</option>
					<option>New Haven</option>
					<option>Hartford</option>
					<option>Stamford</option>
					<option>Waterbury</option>
				</optgroup>
				<optgroup label="Delaware">
					<option>Wilmington</option>
					<option>Dover</option>
					<option>Newark</option>
					<option>Bear</option>
					<option>Middletown</option>
				</optgroup>
				<optgroup label="Florida">
					<option>Jacksonville</option>
					<option>Miami</option>
					<option>Tampa</option>
					<option>St. Petersburg</option>
					<option>Orlando</option>
				</optgroup>
				<optgroup label="Georgia">
					<option>Atlanta</option>
					<option>Augusta</option>
					<option>Columbus</option>
					<option>Savannah</option>
					<option>Athens</option>
				</optgroup>
				<optgroup label="Hawaii">
					<option>Honolulu</option>
					<option>Pearl City</option>
					<option>Hilo</option>
					<option>Kailua</option>
					<option>Waipahu</option>
				</optgroup>
				<optgroup label="Idaho">
					<option>Boise</option>
					<option>Nampa</option>
					<option>Meridian</option>
					<option>Idaho Falls</option>
					<option>Pocatello</option>
				</optgroup>
				<optgroup label="Illinois">
					<option>Chicago</option>
					<option>Aurora</option>
					<option>Rockford</option>
					<option>Joliet</option>
					<option>Naperville</option>
				</optgroup>
				<optgroup label="Indiana">
					<option>Indianapolis</option>
					<option>Fort Wayne</option>
					<option>Evansville</option>
					<option>South Bend</option>
					<option>Hammond</option>
				</optgroup>
				<optgroup label="Iowa">
					<option>Des Moines</option>
					<option>Cedar Rapids</option>
					<option>Davenport</option>
					<option>Sioux City</option>
					<option>Waterloo</option>
				</optgroup>
				<optgroup label="Kansas">
					<option>Wichita</option>
					<option>Overland Park</option>
					<option>Kansas City</option>
					<option>Topeka</option>
					<option>Olathe </option>
				</optgroup>
				<optgroup label="Kentucky">
					<option>Louisville</option>
					<option>Lexington</option>
					<option>Bowling Green</option>
					<option>Owensboro</option>
					<option>Covington</option>
				</optgroup>
				<optgroup label="Louisiana">
					<option>New Orleans</option>
					<option>Baton Rouge</option>
					<option>Shreveport</option>
					<option>Metairie</option>
					<option>Lafayette</option>
				</optgroup>
				<optgroup label="Maine">
					<option>Portland</option>
					<option>Lewiston</option>
					<option>Bangor</option>
					<option>South Portland</option>
					<option>Auburn</option>
				</optgroup>
				<optgroup label="Maryland">
					<option>Baltimore</option>
					<option>Frederick</option>
					<option>Rockville</option>
					<option>Gaithersburg</option>
					<option>Bowie</option>
				</optgroup>
				<optgroup label="Massachusetts">
					<option>Boston</option>
					<option>Worcester</option>
					<option>Springfield</option>
					<option>Lowell</option>
					<option>Cambridge</option>
				</optgroup>
				<optgroup label="Michigan">
					<option>Detroit</option>
					<option>Grand Rapids</option>
					<option>Warren</option>
					<option>Sterling Heights</option>
					<option>Lansing</option>
				</optgroup>
				<optgroup label="Minnesota">
					<option>Minneapolis</option>
					<option>St. Paul</option>
					<option>Rochester</option>
					<option>Duluth</option>
					<option>Bloomington</option>
				</optgroup>
				<optgroup label="Mississippi">
					<option>Jackson</option>
					<option>Gulfport</option>
					<option>Southaven</option>
					<option>Hattiesburg</option>
					<option>Biloxi</option>
				</optgroup>
				<optgroup label="Missouri">
					<option>Kansas City</option>
					<option>St. Louis</option>
					<option>Springfield</option>
					<option>Independence</option>
					<option>Columbia</option>
				</optgroup>
				<optgroup label="Montana">
					<option>Billings</option>
					<option>Missoula</option>
					<option>Great Falls</option>
					<option>Bozeman</option>
					<option>Butte-Silver Bow</option>
				</optgroup>
				<optgroup label="Nebraska">
					<option>Omaha</option>
					<option>Lincoln</option>
					<option>Bellevue</option>
					<option>Grand Island</option>
					<option>Kearney</option>
				</optgroup>
				<optgroup label="Nevada">
					<option>Las Vegas</option>
					<option>Henderson</option>
					<option>North Las Vegas</option>
					<option>Reno</option>
					<option>Sunrise Manor</option>
				</optgroup>
				<optgroup label="New Hampshire">
					<option>Manchesters</option>
					<option>Nashua</option>
					<option>Concord</option>
					<option>Dover</option>
					<option>Rochester</option>
				</optgroup>
				<optgroup label="New Jersey">
					<option>Newark</option>
					<option>Jersey City</option>
					<option>Paterson</option>
					<option>Elizabeth</option>
					<option>Edison</option>
				</optgroup>
				<optgroup label="New Mexico">
					<option>Albuquerque</option>
					<option>Las Cruces</option>
					<option>Rio Rancho</option>
					<option>Santa Fe</option>
					<option>Roswell</option>
				</optgroup>
				<optgroup label="New York">
					<option>New York</option>
					<option>Buffalo</option>
					<option>Rochester</option>
					<option>Yonkers</option>
					<option>Syracuse</option>
				</optgroup>
				<optgroup label="North Carolina">
					<option>Charlotte</option>
					<option>Raleigh</option>
					<option>Greensboro</option>
					<option>Winston-Salem</option>
					<option>Durham</option>
				</optgroup>
				<optgroup label="North Dakota">
					<option>Fargo</option>
					<option>Bismarck</option>
					<option>Grand Forks</option>
					<option>Minot</option>
					<option>West Fargo</option>
				</optgroup>
				<optgroup label="Ohio">
					<option>Columbus</option>
					<option>Cleveland</option>
					<option>Cincinnati</option>
					<option>Toledo</option>
					<option>Akron</option>
				</optgroup>
				<optgroup label="Oklahoma">
					<option>Oklahoma City</option>
					<option>Tulsa</option>
					<option>Norman</option>
					<option>Broken Arrow</option>
					<option>Lawton</option>
				</optgroup>
				<optgroup label="Oregon">
					<option>Portland</option>
					<option>Eugene</option>
					<option>Salem</option>
					<option>Gresham</option>
					<option>Hillsboro</option>
				</optgroup>
				<optgroup label="Pennsylvania">
					<option>Philadelphia</option>
					<option>Pittsburgh</option>
					<option>Allentown</option>
					<option>Erie</option>
					<option>Reading</option>
				</optgroup>
				<optgroup label="Rhode Island">
					<option>Providence</option>
					<option>Warwick</option>
					<option>Cranston</option>
					<option>Pawtucket</option>
					<option>East Providence</option>
				</optgroup>
				<optgroup label="South Carolina">
					<option>Columbia</option>
					<option>Charleston</option>
					<option>North Charleston</option>
					<option>Mount Pleasant</option>
					<option>Rock Hill</option>
				</optgroup>
				<optgroup label="South Dakota">
					<option>Sioux Falls</option>
					<option>Rapid City</option>
					<option>Aberdeen</option>
					<option>Brookings</option>
					<option>Watertown</option>
				</optgroup>
				<optgroup label="Tennessee">
					<option>Memphis</option>
					<option>Nashville</option>
					<option>Knoxville</option>
					<option>Chattanooga</option>
					<option>Clarksville</option>
				</optgroup>
				<optgroup label="Texas">
					<option>Houston</option>
					<option>San Antonio</option>
					<option>Dallas</option>
					<option>Austin</option>
					<option>Fort Worth</option>
				</optgroup>
				<optgroup label="Utah">
					<option>Salt Lake City</option>
					<option>West Valley City</option>
					<option>Provo</option>
					<option>West Jordan</option>
					<option>Orem</option>
				</optgroup>
				<optgroup label="Vermont">
					<option>Burlington</option>
					<option>Essex</option>
					<option>South Burlington</option>
					<option>Colchester</option>
					<option>Rutland</option>
				</optgroup>
				<optgroup label="Virginia">
					<option>Virginia Beach</option>
					<option>Norfolk</option>
					<option>Chesapeake</option>
					<option>Arlington</option>
					<option>Richmond</option>
				</optgroup>
				<optgroup label="Washington">
					<option>Seattle</option>
					<option>Spokane</option>
					<option>Tacoma</option>
					<option>Vancouver</option>
					<option>Bellevue</option>
				</optgroup>
				<optgroup label="West Virginia">
					<option>Charleston</option>
					<option>Huntington</option>
					<option>Parkersburg</option>
					<option>Morgantown</option>
					<option>Wheeling</option>
				</optgroup>
				<optgroup label="Wisconsin">
					<option>Milwaukee</option>
					<option>Madison</option>
					<option>Green Bay</option>
					<option>Kenosha</option>
					<option>Racine</option>
				</optgroup>
				<optgroup label="Wyoming">
					<option>Cheyenne</option>
					<option>Casper</option>
					<option>Laramie</option>
					<option>Gillette</option>
					<option>Rock Springs</option>
				</optgroup>
			</select>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //shop locator (popup) -->

	<!-- modals -->
	<!-- log in -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Log In</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-group">
							<label class="col-form-label">Username</label>
							<input type="text" class="form-control" placeholder=" " name="Name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " name="Password" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Log in">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
							</div>
						</div>
						<p class="text-center dont-do mt-3">Don't have an account?
							<a href="#" data-toggle="modal" data-target="#exampleModal2">
								Register Now</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- register -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Register</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-group">
							<label class="col-form-label">Your Name</label>
							<input type="text" class="form-control" placeholder=" " name="Name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" " name="Email" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " name="Password" id="password1" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Confirm Password</label>
							<input type="password" class="form-control" placeholder=" " name="Confirm Password" id="password2" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Register">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
								<label class="custom-control-label" for="customControlAutosizing2">I Accept to the Terms & Conditions</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="index.html" class="font-weight-bold font-italic">
							<img src="{{ URL::asset('project/images/logo2.png') }}" alt=" " class="img-fluid">Electro Store
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="#" method="post">
								<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required>
								<button class="btn my-2 my-sm-0" type="submit">Search</button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="#" method="post" class="last">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<button class="btn w3view-cart" type="submit" name="submit" value="">
										<i class="fas fa-cart-arrow-down"></i>
									</button>
								</form>
							</div>
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->
	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="agileits-navi_search">
					<form action="#" method="post">
						<select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
							<option value="">All Categories</option>
							<option value="Televisions">Televisions</option>
							<option value="Headphones">Headphones</option>
							<option value="Computers">Computers</option>
							<option value="Appliances">Appliances</option>
							<option value="Mobiles">Mobiles</option>
							<option value="Fruits &amp; Vegetables">Tv &amp; Video</option>
							<option value="iPad & Tablets">iPad & Tablets</option>
							<option value="Cameras & Camcorders">Cameras & Camcorders</option>
							<option value="Home Audio & Theater">Home Audio & Theater</option>
						</select>
					</form>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="index.html">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Electronics
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									<h5 class="mb-3">Mobiles, Computers</h5>
									<div class="row">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="product.html">All Mobile Phones</a>
												</li>
												<li>
													<a href="product.html">All Mobile Accessories</a>
												</li>
												<li>
													<a href="product.html">Cases & Covers</a>
												</li>
												<li>
													<a href="product.html">Screen Protectors</a>
												</li>
												<li>
													<a href="product.html">Power Banks</a>
												</li>
												<li>
													<a href="product.html">All Certified Refurbished</a>
												</li>
												<li>
													<a href="product.html">Tablets</a>
												</li>
												<li>
													<a href="product.html">Wearable Devices</a>
												</li>
												<li>
													<a href="product.html">Smart Home</a>
												</li>
											</ul>
										</div>
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="product.html">Laptops</a>
												</li>
												<li>
													<a href="product.html">Drives & Storage</a>
												</li>
												<li>
													<a href="product.html">Printers & Ink</a>
												</li>
												<li>
													<a href="product.html">Networking Devices</a>
												</li>
												<li>
													<a href="product.html">Computer Accessories</a>
												</li>
												<li>
													<a href="product.html">Game Zone</a>
												</li>
												<li>
													<a href="product.html">Software</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Appliances
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									<h5 class="mb-3">TV, Appliances, Electronics</h5>
									<div class="row">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="product2.html">Televisions</a>
												</li>
												<li>
													<a href="product2.html">Home Entertainment Systems</a>
												</li>
												<li>
													<a href="product2.html">Headphones</a>
												</li>
												<li>
													<a href="product2.html">Speakers</a>
												</li>
												<li>
													<a href="product2.html">MP3, Media Players & Accessories</a>
												</li>
												<li>
													<a href="product2.html">Audio & Video Accessories</a>
												</li>
												<li>
													<a href="product2.html">Cameras</a>
												</li>
												<li>
													<a href="product2.html">DSLR Cameras</a>
												</li>
												<li>
													<a href="product2.html">Camera Accessories</a>
												</li>
											</ul>
										</div>
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="product2.html">Musical Instruments</a>
												</li>
												<li>
													<a href="product2.html">Gaming Consoles</a>
												</li>
												<li>
													<a href="product2.html">All Electronics</a>
												</li>
												<li>
													<a href="product2.html">Air Conditioners</a>
												</li>
												<li>
													<a href="product2.html">Refrigerators</a>
												</li>
												<li>
													<a href="product2.html">Washing Machines</a>
												</li>
												<li>
													<a href="product2.html">Kitchen & Home Appliances</a>
												</li>
												<li>
													<a href="product2.html">Heating & Cooling Appliances</a>
												</li>
												<li>
													<a href="product2.html">All Appliances</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="about.html">About Us</a>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="product.html">New Arrivals</a>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Pages
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="product.html">Product 1</a>
								<a class="dropdown-item" href="product2.html">Product 2</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="single.html">Single Product 1</a>
								<a class="dropdown-item" href="single2.html">Single Product 2</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="checkout.html">Checkout Page</a>
								<a class="dropdown-item" href="payment.html">Payment Page</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html">Contact Us</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->

    @yield('content')

	<!-- footer -->
	<footer>
		<div class="footer-top-first">
			<div class="container py-md-5 py-sm-4 py-3">
				<!-- footer first section -->
				<h2 class="footer-top-head-w3l font-weight-bold mb-2">Electronics :</h2>
				<p class="footer-main mb-4">
					If you're considering a new laptop, looking for a powerful new car stereo or shopping for a new HDTV, we make it easy to
					find exactly what you need at a price you can afford. We offer Every Day Low Prices on TVs, laptops, cell phones, tablets
					and iPads, video games, desktop computers, cameras and camcorders, audio, video and more.</p>
				<!-- //footer first section -->
				<!-- footer second section -->
				<div class="row w3l-grids-footer border-top border-bottom py-sm-4 py-3">
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-dolly"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Free Shipping</h3>
								<p>on orders over $100</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer my-md-0 my-4">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-shipping-fast"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Fast Delivery</h3>
								<p>World Wide</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="far fa-thumbs-up"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Big Choice</h3>
								<p>of Products</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //footer second section -->
			</div>
		</div>
		<!-- footer third section -->
		<div class="w3l-middlefooter-sec">
			<div class="container py-md-5 py-sm-4 py-3">
				<div class="row footer-info w3-agileits-info">
					<!-- footer categories -->
					<div class="col-md-3 col-sm-6 footer-grids">
						<h3 class="text-white font-weight-bold mb-3">Categories</h3>
						<ul>
							<li class="mb-3">
								<a href="product.html">Mobiles </a>
							</li>
							<li class="mb-3">
								<a href="product.html">Computers</a>
							</li>
							<li class="mb-3">
								<a href="product.html">TV, Audio</a>
							</li>
							<li class="mb-3">
								<a href="product2.html">Smartphones</a>
							</li>
							<li class="mb-3">
								<a href="product.html">Washing Machines</a>
							</li>
							<li>
								<a href="product2.html">Refrigerators</a>
							</li>
						</ul>
					</div>
					<!-- //footer categories -->
					<!-- quick links -->
					<div class="col-md-3 col-sm-6 footer-grids mt-sm-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Quick Links</h3>
						<ul>
							<li class="mb-3">
								<a href="about.html">About Us</a>
							</li>
							<li class="mb-3">
								<a href="contact.html">Contact Us</a>
							</li>
							<li class="mb-3">
								<a href="help.html">Help</a>
							</li>
							<li class="mb-3">
								<a href="faqs.html">Faqs</a>
							</li>
							<li class="mb-3">
								<a href="terms.html">Terms of use</a>
							</li>
							<li>
								<a href="privacy.html">Privacy Policy</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids mt-md-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Get in Touch</h3>
						<ul>
							<li class="mb-3">
								<i class="fas fa-map-marker"></i> 123 Sebastian, USA.</li>
							<li class="mb-3">
								<i class="fas fa-mobile"></i> 333 222 3333 </li>
							<li class="mb-3">
								<i class="fas fa-phone"></i> +222 11 4444 </li>
							<li class="mb-3">
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:example@mail.com"> mail 1@example.com</a>
							</li>
							<li>
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:example@mail.com"> mail 2@example.com</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids w3l-agileits mt-md-0 mt-4">
						<!-- newsletter -->
						<h3 class="text-white font-weight-bold mb-3">Newsletter</h3>
						<p class="mb-3">Free Delivery on your first order!</p>
						<form action="#" method="post">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" name="email" required="">
								<input type="submit" value="Go">
							</div>
						</form>
						<!-- //newsletter -->
						<!-- social icons -->
						<div class="footer-grids  w3l-socialmk mt-3">
							<h3 class="text-white font-weight-bold mb-3">Follow Us on</h3>
							<div class="social">
								<ul>
									<li>
										<a class="icon fb" href="#">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a class="icon tw" href="#">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a class="icon gp" href="#">
											<i class="fab fa-google-plus-g"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //social icons -->
					</div>
				</div>
				<!-- //quick links -->
			</div>
		</div>
		<!-- //footer third section -->

		<!-- footer fourth section -->
		<div class="agile-sometext py-md-5 py-sm-4 py-3">
			<div class="container">
				<!-- brands -->
				<div class="sub-some">
					<h5 class="font-weight-bold mb-2">Mobile & Tablets :</h5>
					<ul>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Android Phones</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Smartphones</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Feature Phones</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Unboxed Phones</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Refurbished Phones</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2"> Tablets</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">CDMA Phones</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Value Added Services</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Sell Old</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Used Mobiles</a>
						</li>
					</ul>
				</div>
				<div class="sub-some mt-4">
					<h5 class="font-weight-bold mb-2">Computers :</h5>
					<ul>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Laptops </a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Printers</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Routers</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Ink & Toner Cartridges</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Monitors</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Video Games</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Unboxed & Refurbished Laptops</a>
						</li>
						<li>
							<a href="product.html" class="border-right pr-2">Assembled Desktops</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Data Cards</a>
						</li>
					</ul>
				</div>
				<div class="sub-some mt-4">
					<h5 class="font-weight-bold mb-2">TV, Audio & Large Appliances :</h5>
					<ul>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">TVs & DTH</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Home Theatre Systems</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Hidden Cameras & CCTVs</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Refrigerators</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Washing Machines</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2"> Air Conditioners</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Cameras</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Speakers</a>
						</li>
					</ul>
				</div>
				<div class="sub-some mt-4">
					<h5 class="font-weight-bold mb-2">Mobile & Laptop Accessories :</h5>
					<ul>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Headphones</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Power Banks </a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Backpacks</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Mobile Cases & Covers</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Pen Drives</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">External Hard Disks</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2"> Mouse</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Smart Watches & Fitness Bands</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">MicroSD Cards</a>
						</li>
					</ul>
				</div>
				<div class="sub-some mt-4">
					<h5 class="font-weight-bold mb-2">Appliances :</h5>
					<ul>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Trimmers</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Hair Dryers</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Emergency Lights</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Water Purifiers </a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Electric Kettles</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Hair Straighteners</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Induction Cooktops</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Sewing Machines</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2"> Geysers</a>
						</li>
					</ul>
				</div>
				<div class="sub-some mt-4">
					<h5 class="font-weight-bold mb-2">Popular on Electro Store</h5>
					<ul>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Offers & Coupons</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Couple Watches</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Gas Stoves</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2"> Air Coolers</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Air Purifiers</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Headphones</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2"> Headsets</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Pressure Cookers</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Sandwich Makers</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Air Friers</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Irons</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">LED TV</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Sandwich Makers</a>
						</li>
					</ul>
				</div>
				<!-- //brands -->
				<!-- payment -->
				<div class="sub-some child-momu mt-4">
					<h5 class="font-weight-bold mb-3">Payment Method</h5>
					<ul>
						<li>
							<img src="{{ URL::asset('project/images/pay2.png') }}" alt="">
						</li>
						<li>
							<img src="{{ URL::asset('project/images/pay5.png') }}" alt="">
						</li>
						<li>
							<img src="{{ URL::asset('project/images/pay1.png') }}" alt="">
						</li>
						<li>
							<img src="{{ URL::asset('project/images/pay4.png') }}" alt="">
						</li>
						<li>
							<img src="{{ URL::asset('project/images/pay6.png') }}" alt="">
						</li>
						<li>
							<img src="{{ URL::asset('project/images/pay3.png') }}" alt="">
						</li>
						<li>
							<img src="{{ URL::asset('project/images/pay7.png') }}" alt="">
						</li>
						<li>
							<img src="{{ URL::asset('project/images/pay8.png') }}" alt="">
						</li>
						<li>
							<img src="{{ URL::asset('project/images/pay9.png') }}" alt="">
						</li>
					</ul>
				</div>
				<!-- //payment -->
			</div>
		</div>
		<!-- //footer fourth section (text) -->
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right py-3">
		<div class="container">
			<p class="text-center text-white">© 2018 Electro Store. All rights reserved | Design by
				<a href="http://w3layouts.com"> W3layouts.</a>
			</p>
		</div>
	</div>
	<!-- //copyright -->

    @yield('js')	

</body>

</html>