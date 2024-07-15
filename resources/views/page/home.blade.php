
        @extends('home')

        @section('content')
        {{-- nav sarch and banner--}}
		<section class="mt-5">
			<div class="container">
				<div class="row">
					{{-- banner --}}
					<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-inner">
						  <div class="carousel-item active">
							<div class="row">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
	
								<div class="col-sm-6">
									<img src="{{ asset('fontend/images/girl1.jpg') }}" class="d-block w-100" alt="...">
								</div>
							</div>
						  </div>
						  
						  <div class="carousel-item">
							<div class="row">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
	
								<div class="col-sm-6">
									<img src="{{ asset('fontend/images/girl2.jpg') }}" class="d-block w-100" alt="...">
								</div>
							</div>
						  </div>

						  <div class="carousel-item">
							<div class="row">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
	
								<div class="col-sm-6">
									<img src="{{ asset('fontend/images/girl3.jpg') }}" class="d-block w-100" alt="...">
								</div>
							</div>
						  </div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
						  <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
						  <span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
						  <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
						  <span class="visually-hidden">Next</span>
						</button>
					  </div>
				</div>
			</div>
		</section>

		<section>
			<div class="container mt-5">
				<div class="row">
					{{-- category and hot product --}}
					<div class="col-sm-3">
						<div class="category">
							<h2 class="text-center text-warning">Category</h2>
							<div class="border text-uppercase opacity-75">
								<div class="p-3 fs-6">
									<li>
										<a href="">
											Túi sách
										</a>
									</li>
									<hr>
									<li>
										<a href="">
											Quần áo
										</a>
									</li>
									<hr>
									<li>
										<a href="">
											Quần áo
										</a>
									</li>
									<hr>
									<li>
										<a href="">
											Quần áo
										</a>
									</li>
									<hr>
									<li>
										<a href="">
											Giày dép
										</a>
									</li>
								</div>
							</div>

						</div>

						<div class="product-hot mt-5">
							<h2 class="text-center text-warning">Hot</h2>
							<div class="border text-uppercase opacity-75">
								<div class="p-3 fs-6">
									<li>
										<a href="">
											Túi sách
										</a>
									</li>
									<hr>
									<li>
										<a href="">
											Quần áo
										</a>
									</li>
									<hr>
									<li>
										<a href="">
											Giày dép
										</a>
									</li>
									<hr>
									<li>
										<a href="">
											Giày dép
										</a>
									</li>
									<hr>
									<li>
										<a href="">
											Giày dép
										</a>
									</li>
								</div>
							</div>

						</div>

						<div class="product-hot mt-5">
							<h2 class="text-center text-warning">Giới thiệu</h2>
							<div class="text-uppercase opacity-75">
								<img src="{{ asset('fontend/images/shiping.png') }}" class="w-100" alt="">
							</div>

						</div>
					
					</div>

					{{-- features items --}}
					<div class="col-sm-9">
						<div class="features-item">
							<h2 class="text-center text-warning">
								FEATURES ITEMS
							</h2>
	
							<div class="row">
								<div class="col-sm-4 ">
									<div class="card card-product" style="width: 18rem;">
										<img src="{{ asset('fontend/images/gallery1.jpg') }}" class="card-img-top" alt="...">
										<div class="card-body">
										  <h5 class="card-title text-center text-danger">$56</h5>
										  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										  <div class="text-center btn-add-to-cart">
											  <a href="#" class="btn btn-secondary">
												<i class="fa-solid fa-cart-shopping"></i>
												Add to cart</a>
										  </div>
										</div>
									</div>
								</div>
	
								<div class="col-sm-4">
									<div class="card" style="width: 18rem;">
										<img src="{{ asset('fontend/images/gallery1.jpg') }}" class="card-img-top" alt="...">
										<div class="card-body">
										  <h5 class="card-title text-center text-danger">$56</h5>
										  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										  <div class="text-center">
											  <a href="#" class="btn btn-secondary">
												<i class="fa-solid fa-cart-shopping"></i>
												Add to cart</a>
										  </div>
										</div>
									  </div>
								</div>
	
	
								<div class="col-sm-4">
									<div class="card" style="width: 18rem;">
										<img src="{{ asset('fontend/images/gallery3.jpg') }}" class="card-img-top" alt="...">
										<div class="card-body">
										  <h5 class="card-title text-center text-danger">$56</h5>
										  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										  <div class="text-center">
											  <a href="#" class="btn btn-secondary">
												<i class="fa-solid fa-cart-shopping"></i>
												Add to cart</a>
										  </div>
										</div>
									  </div>
								</div>
	
								<div class="col-sm-4 mt-3">
									<div class="card" style="width: 18rem;">
										<img src="{{ asset('fontend/images/gallery1.jpg') }}" class="card-img-top" alt="...">
										<div class="card-body">
										  <h5 class="card-title text-center text-danger">$56</h5>
										  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										  <div class="text-center">
											  <a href="#" class="btn btn-secondary">
												<i class="fa-solid fa-cart-shopping"></i>
												Add to cart</a>
										  </div>
										</div>
									  </div>
								</div>
							</div>
						</div>

						{{-- panel product genres--}}
						<div class="panel-genres mt-3">
							<nav>
								<div class="nav nav-tabs" id="nav-tab" role="tablist">
								  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
								  <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
								  <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
								</div>
							  </nav>
							  <div class="tab-content" id="nav-tabContent">
								<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
									{{-- card item--}}
									<div class="row">
										<div class="col-sm-4">
											<div class="card card-product" style="width: 18rem;">
												<img src="{{ asset('fontend/images/gallery1.jpg') }}" class="card-img-top" alt="...">
												<div class="card-body">
												  <h5 class="card-title text-center text-danger">$56</h5>
												  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
												  <div class="text-center">
													  <a href="#" class="btn btn-secondary">
														<i class="fa-solid fa-cart-shopping"></i>
														Add to cart</a>
												  </div>
												</div>
											  </div>
										</div>
			
										<div class="col-sm-4">
											<div class="card" style="width: 18rem;">
												<img src="{{ asset('fontend/images/gallery1.jpg') }}" class="card-img-top" alt="...">
												<div class="card-body">
												  <h5 class="card-title text-center text-danger">$56</h5>
												  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
												  <div class="text-center">
													  <a href="#" class="btn btn-secondary">
														<i class="fa-solid fa-cart-shopping"></i>
														Add to cart</a>
												  </div>
												</div>
											  </div>
										</div>
			
			
										<div class="col-sm-4">
											<div class="card" style="width: 18rem;">
												<img src="{{ asset('fontend/images/gallery1.jpg') }}" class="card-img-top" alt="...">
												<div class="card-body">
												  <h5 class="card-title text-center text-danger">$56</h5>
												  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
												  <div class="text-center">
													  <a href="#" class="btn btn-secondary">
														<i class="fa-solid fa-cart-shopping"></i>
														Add to cart</a>
												  </div>
												</div>
											  </div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
									{{-- card item --}}
									<div class="row">
										<div class="col-sm-4">
											<div class="card card-product" style="width: 18rem;">
												<img src="{{ asset('fontend/images/gallery1.jpg') }}" class="card-img-top" alt="...">
												<div class="card-body">
												  <h5 class="card-title text-center text-danger">$56</h5>
												  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
												  <div class="text-center">
													  <a href="#" class="btn btn-secondary">
														<i class="fa-solid fa-cart-shopping"></i>
														Add to cart</a>
												  </div>
												</div>
											  </div>
										</div>
			
										<div class="col-sm-4">
											<div class="card" style="width: 18rem;">
												<img src="{{ asset('fontend/images/gallery1.jpg') }}" class="card-img-top" alt="...">
												<div class="card-body">
												  <h5 class="card-title text-center text-danger">$56</h5>
												  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
												  <div class="text-center">
													  <a href="#" class="btn btn-secondary">
														<i class="fa-solid fa-cart-shopping"></i>
														Add to cart</a>
												  </div>
												</div>
											  </div>
										</div>
			
										<div class="col-sm-4">
											<div class="card" style="width: 18rem;">
												<img src="{{ asset('fontend/images/gallery1.jpg') }}" class="card-img-top" alt="...">
												<div class="card-body">
												  <h5 class="card-title text-center text-danger">$56</h5>
												  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
												  <div class="text-center">
													  <a href="#" class="btn btn-secondary">
														<i class="fa-solid fa-cart-shopping"></i>
														Add to cart</a>
												  </div>
												</div>
											  </div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
									<div class="card text-start">
										<img class="card-img-top" src="holder.js/100px180/" alt="Title" />
										<div class="card-body">
											<h4 class="card-title">Title</h4>
											<p class="card-text">Body</p>
										</div>
									</div>
								</div>
							  </div>
						</div>


						<div class="related-item mt-5">
							<h2 class="text-center text-warning">
								Các sản phẩm gợi ý
							</h2>
	
								<div class="row">
									<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
										<div class="carousel-inner">
										  <div class="carousel-item active">
											<div class="row">
												<div class="col-sm-4">
													<div class="card card-product" style="width: 18rem;">
														<img src="{{ asset('fontend/images/gallery1.jpg') }}" class="card-img-top" alt="...">
														<div class="card-body">
														  <h5 class="card-title text-center text-danger">$56</h5>
														  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
														  <div class="text-center">
															  <a href="#" class="btn btn-secondary">
																<i class="fa-solid fa-cart-shopping"></i>
																Add to cart</a>
														  </div>
														</div>
													  </div>
												</div>
					
												<div class="col-sm-4">
													<div class="card" style="width: 18rem;">
														<img src="{{ asset('fontend/images/gallery1.jpg') }}" class="card-img-top" alt="...">
														<div class="card-body">
														  <h5 class="card-title text-center text-danger">$56</h5>
														  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
														  <div class="text-center">
															  <a href="#" class="btn btn-secondary">
																<i class="fa-solid fa-cart-shopping"></i>
																Add to cart</a>
														  </div>
														</div>
													  </div>
												</div>
					
					
												<div class="col-sm-4">
													<div class="card" style="width: 18rem;">
														<img src="{{ asset('fontend/images/gallery1.jpg') }}" class="card-img-top" alt="...">
														<div class="card-body">
														  <h5 class="card-title text-center text-danger">$56</h5>
														  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
														  <div class="text-center">
															  <a href="#" class="btn btn-secondary">
																<i class="fa-solid fa-cart-shopping"></i>
																Add to cart</a>
														  </div>
														</div>
													  </div>
												</div>
											</div>
										  </div>
										  
										  <div class="carousel-item">
											<div class="row">
												<div class="col-sm-4">
													<div class="card card-product" style="width: 18rem;">
														<img src="{{ asset('fontend/images/gallery3.jpg') }}" class="card-img-top" alt="...">
														<div class="card-body">
														  <h5 class="card-title text-center text-danger">$56</h5>
														  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
														  <div class="text-center">
															  <a href="#" class="btn btn-secondary">
																<i class="fa-solid fa-cart-shopping"></i>
																Add to cart</a>
														  </div>
														</div>
													  </div>
												</div>
					
												<div class="col-sm-4">
													<div class="card" style="width: 18rem;">
														<img src="{{ asset('fontend/images/gallery4.jpg') }}" class="card-img-top" alt="...">
														<div class="card-body">
														  <h5 class="card-title text-center text-danger">$56</h5>
														  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
														  <div class="text-center">
															  <a href="#" class="btn btn-secondary">
																<i class="fa-solid fa-cart-shopping"></i>
																Add to cart</a>
														  </div>
														</div>
													  </div>
												</div>
					
					
												<div class="col-sm-4">
													<div class="card" style="width: 18rem;">
														<img src="{{ asset('fontend/images/gallery3.jpg') }}" class="card-img-top" alt="...">
														<div class="card-body">
														  <h5 class="card-title text-center text-danger">$56</h5>
														  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
														  <div class="text-center">
															  <a href="#" class="btn btn-secondary">
																<i class="fa-solid fa-cart-shopping"></i>
																Add to cart</a>
														  </div>
														</div>
													  </div>
												</div>
											</div>
										  </div>
				
										  <div class="carousel-item">
											<div class="row">
												<div class="col-sm-4">
													<div class="card card-product" style="width: 18rem;">
														<img src="{{ asset('fontend/images/gallery4.jpg') }}" class="card-img-top" alt="...">
														<div class="card-body">
														  <h5 class="card-title text-center text-danger">$56</h5>
														  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
														  <div class="text-center">
															  <a href="#" class="btn btn-secondary">
																<i class="fa-solid fa-cart-shopping"></i>
																Add to cart</a>
														  </div>
														</div>
													  </div>
												</div>
					
												<div class="col-sm-4">
													<div class="card" style="width: 18rem;">
														<img src="{{ asset('fontend/images/gallery1.jpg') }}" class="card-img-top" alt="...">
														<div class="card-body">
														  <h5 class="card-title text-center text-danger">$56</h5>
														  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
														  <div class="text-center">
															  <a href="#" class="btn btn-secondary">
																<i class="fa-solid fa-cart-shopping"></i>
																Add to cart</a>
														  </div>
														</div>
													  </div>
												</div>
					
					
												<div class="col-sm-4">
													<div class="card" style="width: 18rem;">
														<img src="{{ asset('fontend/images/gallery1.jpg') }}" class="card-img-top" alt="...">
														<div class="card-body">
														  <h5 class="card-title text-center text-danger">$56</h5>
														  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
														  <div class="text-center">
															  <a href="#" class="btn btn-secondary">
																<i class="fa-solid fa-cart-shopping"></i>
																Add to cart</a>
														  </div>
														</div>
													  </div>
												</div>
											</div>
										  </div>
										</div>
										<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
										  <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
										  <span class="visually-hidden">Previous</span>
										</button>
										<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
										  <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
										  <span class="visually-hidden">Next</span>
										</button>
									  </div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</section>

        @endsection