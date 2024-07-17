<!doctype html>
<html lang="en">
	<head>
		<title>Title</title>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>

		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
			crossorigin="anonymous"
		/>

		<link rel="stylesheet" href="{{ asset('fontend/css/main.css') }}">

		<link rel="stylesheet" href="{{ asset('fontend/font/fontawesome-free-6.5.2/css/all.css') }}">
	</head>

	<body class="body">
		<header>
			<div class="container header">
				<div class="row mt-3 border-bottom">
					{{-- nav logo --}}
					<div class="col-sm-6 d-flex align-items-center">
						<div class="logo pull-left mb-3">
							<a href="index.html"><img src="{{ asset('fontend/images/logoShop.png') }}" alt="" /></a>
						</div>

						<div class="btn-group">
							<li class="nav-item dropdown list-inline px-3">
								<a class="btn btn-outline-default dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								  USA
								</a>
								<ul class="dropdown-menu">
								  <li><a class="dropdown-item" href="#">Action</a></li>
								  <li><a class="dropdown-item" href="#">Another action</a></li>
								  <li><a class="dropdown-item" href="#">Something else here</a></li>
								</ul>
							</li>

							<li class="nav-item dropdown list-inline">
								<a class="btn btn-outline-default dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								  DOLAR
								</a>
								<ul class="dropdown-menu">
								  <li><a class="dropdown-item" href="#">Action</a></li>
								  <li><a class="dropdown-item" href="#">Another action</a></li>
								  <li><a class="dropdown-item" href="#">Something else here</a></li>
								</ul>
							</li>
						</div>
					</div>

					{{-- nav login  --}}
					<div class="row col-sm-6">
						<nav class="navbar navbar-expand-lg">
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav header-nav-right">
								  <li class="nav-item">
									<a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-user"></i> Acount</a>
								  </li>

								  <li class="nav-item">
									<a class="nav-link" href="#"><i class="fa-solid fa-star"></i> wishlist</a>
								  </li>
								  
								  <li class="nav-item">
									<a class="nav-link" href="#"><i class="fa fa-crosshairs"></i> Checkout</a>
								  </li>

								  <li class="nav-item">
									<a class="nav-link " href="#"> <i class="fa fa-shopping-cart"></i> Cart</a>
								  </li>

								  @if (Auth::id() > 0)
									<li class="nav-item">
										<a href="{{ url('/login') }}" class="nav-link "><i class="fa-solid fa-user"></i> {{ Auth::user()->name }}</a>
									</li>

									<li class="nav-item">
										<a href="{{ route('logout') }}" class="nav-link "><i class="fa-solid fa-right-to-bracket"></i> Logout</a>
									  </li>
								  @else

									<li class="nav-item">
										<a href="{{ url('/login') }}" class="nav-link "><i class="fa fa-lock"></i> Login</a>
									</li>
								  @endif

								</ul>
							</div>
						  </nav>
					</div>
				</div>
			</div>

			<div class="container nav-search">
				<div class="row">
					<nav class="navbar navbar-expand-lg mt-3">
						<div class="container-fluid">
						  <a class="navbar-brand" href="#">Navbar</a>
						  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						  </button>
						  <div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							  <li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#">Home</a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link" href="#">Link</a>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								  Dropdown
								</a>
								<ul class="dropdown-menu">
								  <li><a class="dropdown-item" href="#">Action</a></li>
								  <li><a class="dropdown-item" href="#">Another action</a></li>
								  <li><hr class="dropdown-divider"></li>
								  <li><a class="dropdown-item" href="#">Something else here</a></li>
								</ul>
							  </li>
							  <li class="nav-item">
								<a class="nav-link disabled" aria-disabled="true">Disabled</a>
							  </li>
							</ul>

							<form class="d-flex" role="search">
							  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
							  <button class="btn btn-outline-success" type="submit">Search</button>
							</form>
						  </div>
						</div>
					  </nav>
				</div>
			</div>
		</header>

		@yield('content')

		{{-- footer --}}

		<footer class="bg-secondary text-white mt-5">
			<div class="footer-widget py-5">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<div class="single-widget">
								<h5>Service</h5>
								<ul class="nav flex-column">
									<li class="nav-item"><a class="nav-link text-white" href="#">Online Help</a></li>
									<li class="nav-item"><a class="nav-link text-white" href="#">Contact Us</a></li>
									<li class="nav-item"><a class="nav-link text-white" href="#">Order Status</a></li>
									<li class="nav-item"><a class="nav-link text-white" href="#">Change Location</a></li>
									<li class="nav-item"><a class="nav-link text-white" href="#">FAQ’s</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="single-widget">
								<h5>Quick Shop</h5>
								<ul class="nav flex-column">
									<li class="nav-item"><a class="nav-link text-white" href="#">T-Shirt</a></li>
									<li class="nav-item"><a class="nav-link text-white" href="#">Mens</a></li>
									<li class="nav-item"><a class="nav-link text-white" href="#">Womens</a></li>
									<li class="nav-item"><a class="nav-link text-white" href="#">Gift Cards</a></li>
									<li class="nav-item"><a class="nav-link text-white" href="#">Shoes</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="single-widget">
								<h5>Policies</h5>
								<ul class="nav flex-column">
									<li class="nav-item"><a class="nav-link text-white" href="#">Terms of Use</a></li>
									<li class="nav-item"><a class="nav-link text-white" href="#">Privacy Policy</a></li>
									<li class="nav-item"><a class="nav-link text-white" href="#">Refund Policy</a></li>
									<li class="nav-item"><a class="nav-link text-white" href="#">Billing System</a></li>
									<li class="nav-item"><a class="nav-link text-white" href="#">Ticket System</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="single-widget">
								<h5>About Shopper</h5>
								<ul class="nav flex-column">
									<li class="nav-item"><a class="nav-link text-white" href="#">Company Information</a></li>
									<li class="nav-item"><a class="nav-link text-white" href="#">Careers</a></li>
									<li class="nav-item"><a class="nav-link text-white" href="#">Store Location</a></li>
									<li class="nav-item"><a class="nav-link text-white" href="#">Affiliate Program</a></li>
									<li class="nav-item"><a class="nav-link text-white" href="#">Copyright</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-3 offset-sm-1">
							<div class="single-widget">
								<h5>Newsletter</h5>
								<form action="#" class="d-flex">
									<input type="email" class="form-control me-2" placeholder="Your email address">
									<button type="submit" class="btn btn-light"><i class="fa fa-arrow-circle-o-right"></i></button>
								</form>
								<p class="mt-3">Get the most recent updates from our site and be updated yourself...</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom py-3">
				<div class="container">
					<div class="row">
						<div class="col text-start">
							<p class="mb-0">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
						</div>
						<div class="col text-end">
							<p class="mb-0">Designed by <a href="http://www.themeum.com" class="text-white" target="_blank">Themeum</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<script
			src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
			integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
			crossorigin="anonymous"
		></script>

		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
			integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
			crossorigin="anonymous"
		></script>
	</body>
</html>
