@extends('layout.layout_of_pages')

@section('content')
      @include('partial_interface_user.slider', ['name'=>'Home','key'=>'Menu'])
   

	  <section class="ftco-intro">
		  <div class="container-wrap">
			  <div class="wrap d-md-flex align-items-xl-end">
				  <div class="info">
					  <div class="row no-gutters">
						  <div class="col-md-4 d-flex ftco-animate">
							  <div class="icon"><span class="icon-phone"></span></div>
							  <div class="text">
								  <h3>000 (123) 456 7890</h3>
								  <p>A small river named Duden flows by their place and supplies.</p>
							  </div>
						  </div>
						  <div class="col-md-4 d-flex ftco-animate">
							  <div class="icon"><span class="icon-my_location"></span></div>
							  <div class="text">
								  <h3>198 West 21th Street</h3>
								  <p>	203 Fake St. Mountain View, San Francisco, California, USA</p>
							  </div>
						  </div>
						  <div class="col-md-4 d-flex ftco-animate">
							  <div class="icon"><span class="icon-clock-o"></span></div>
							  <div class="text">
								  <h3>Open Monday-Friday</h3>
								  <p>8:00am - 9:00pm</p>
							  </div>
						  </div>
					  </div>
				  </div>
				  <div class="book p-4">
					  <h3>Book a Table</h3>
					  <form action="#" class="appointment-form">
						  <div class="d-md-flex">
							  <div class="form-group">
								  <input type="text" class="form-control" placeholder="First Name">
							  </div>
							  <div class="form-group ml-md-4">
								  <input type="text" class="form-control" placeholder="Last Name">
							  </div>
						  </div>
						  <div class="d-md-flex">
							  <div class="form-group">
								  <div class="input-wrap">
							  <div class="icon"><span class="ion-md-calendar"></span></div>
							  <input type="text" class="form-control appointment_date" placeholder="Date">
						  </div>
							  </div>
							  <div class="form-group ml-md-4">
								  <div class="input-wrap">
							  <div class="icon"><span class="ion-ios-clock"></span></div>
							  <input type="text" class="form-control appointment_time" placeholder="Time">
						  </div>
							  </div>
							  <div class="form-group ml-md-4">
								  <input type="text" class="form-control" placeholder="Phone">
							  </div>
						  </div>
						  <div class="d-md-flex">
							  <div class="form-group">
						<textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
					  </div>
					  <div class="form-group ml-md-4">
						<input type="submit" value="Appointment" class="btn btn-white py-3 px-4">
					  </div>
						  </div>
					  </form>
				  </div>
			  </div>
		  </div>
	  </section>
  
	  <section class="ftco-section">
		  <div class="container">
		  <div class="row">
			  @foreach ($categories as $category)
				  
			  <div class="col-md-6 mb-5 pb-3">
				  <h3 class="mb-5 heading-pricing ftco-animate">{{ $category->category_name }}</h3>
				  @foreach ($category->Products as $product)
					  <a href="{{('/Product-detail/'.$product->product_id)}}">
						  <div class="pricing-entry d-flex ftco-animate">
							  <div class="img" style="background-image: url({{asset('uploads/products/'.$product->product_image.'')}});"></div>
							  <div class="desc pl-3">
								  <div class="d-flex text align-items-center">
									  <h3><span>{{ $product->product_name }}</span></h3>
									  <span class="price">${{ $product->product_price }}.00</span>
								  </div>
								  <div class="d-block">
									  <p>{{ $product->product_des }}</p>
								  </div>
							  </div>
						  </div>
					  
					  </a>
				  @endforeach
				  
			  </div>
  
			  
			  @endforeach
		  </div>
		  </div>
	  </section>
  
	  <section class="ftco-menu mb-5 pb-5">
		  <div class="container">
			  <div class="row justify-content-center mb-5">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<span class="subheading">Discover</span>
			  <h2 class="mb-4">Our Products</h2>
			  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			</div>
		  </div>
			  <div class="row d-md-flex">
				  <div class="col-lg-12 ftco-animate p-md-5">
					  <div class="row">
					<div class="col-md-12 nav-link-wrap mb-5">
					  <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Main Dish</a>
  
						<a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Drinks</a>
  
						<a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Desserts</a>
					  </div>
					</div>
					<div class="col-md-12 d-flex align-items-center">
					  
					  <div class="tab-content ftco-animate" id="v-pills-tabContent">
  
						<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
							<div class="row">
								<div class="col-md-4 text-center">
									<div class="menu-wrap">
										<a href="#" class="menu-img img mb-4" style="background-image: url({{('frontend/images/dish-1.jpg')}});"></a>
										<div class="text">
											<h3><a href="#">Grilled Beef</a></h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
											<p class="price"><span>$2.90</span></p>
											<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 text-center">
									<div class="menu-wrap">
										<a href="#" class="menu-img img mb-4" style="background-image: url({{('frontend/images/dish-2.jpg')}});"></a>
										<div class="text">
											<h3><a href="#">Grilled Beef</a></h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
											<p class="price"><span>$2.90</span></p>
											<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 text-center">
									<div class="menu-wrap">
										<a href="#" class="menu-img img mb-4" style="background-image: url({{('frontend/images/dish-3.jpg')}});"></a>
										<div class="text">
											<h3><a href="#">Grilled Beef</a></h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
											<p class="price"><span>$2.90</span></p>
											<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 text-center">
									<div class="menu-wrap">
										<a href="#" class="menu-img img mb-4" style="background-image: url({{('frontend/images/dish-4.jpg')}});"></a>
										<div class="text">
											<h3><a href="#">Grilled Beef</a></h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
											<p class="price"><span>$2.90</span></p>
											<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 text-center">
									<div class="menu-wrap">
										<a href="#" class="menu-img img mb-4" style="background-image: url({{('frontend/images/dish-5.jpg')}});"></a>
										<div class="text">
											<h3><a href="#">Grilled Beef</a></h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
											<p class="price"><span>$2.90</span></p>
											<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 text-center">
									<div class="menu-wrap">
										<a href="#" class="menu-img img mb-4" style="background-image: url({{('frontend/images/dish-6.jpg')}});"></a>
										<div class="text">
											<h3><a href="#">Grilled Beef</a></h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
											<p class="price"><span>$2.90</span></p>
											<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
  
						<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
						  <div class="row">
								<div class="col-md-4 text-center">
									<div class="menu-wrap">
										<a href="#" class="menu-img img mb-4" style="background-image: url({{('frontend/images/drink-1.jpg')}});"></a>
										<div class="text">
											<h3><a href="#">Lemonade Juice</a></h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
											<p class="price"><span>$2.90</span></p>
											<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 text-center">
									<div class="menu-wrap">
										<a href="#" class="menu-img img mb-4" style="background-image: url({{('frontend/images/drink-2.jpg')}});"></a>
										<div class="text">
											<h3><a href="#">Pineapple Juice</a></h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
											<p class="price"><span>$2.90</span></p>
											<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 text-center">
									<div class="menu-wrap">
										<a href="#" class="menu-img img mb-4" style="background-image: url({{('frontend/images/drink-3.jpg')}});"></a>
										<div class="text">
											<h3><a href="#">Soda Drinks</a></h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
											<p class="price"><span>$2.90</span></p>
											<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 text-center">
									<div class="menu-wrap">
										<a href="#" class="menu-img img mb-4" style="background-image: url({{('frontend/images/drink-4.jpg')}});"></a>
										<div class="text">
											<h3><a href="#">Lemonade Juice</a></h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
											<p class="price"><span>$2.90</span></p>
											<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 text-center">
									<div class="menu-wrap">
										<a href="#" class="menu-img img mb-4" style="background-image: url({{('frontend/images/drink-5.jpg')}});"></a>
										<div class="text">
											<h3><a href="#">Pineapple Juice</a></h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
											<p class="price"><span>$2.90</span></p>
											<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 text-center">
									<div class="menu-wrap">
										<a href="#" class="menu-img img mb-4" style="background-image: url({{('frontend/images/drink-6.jpg')}});"></a>
										<div class="text">
											<h3><a href="#">Soda Drinks</a></h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
											<p class="price"><span>$2.90</span></p>
											<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
  
						<div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
						  <div class="row">
								<div class="col-md-4 text-center">
									<div class="menu-wrap">
										<a href="#" class="menu-img img mb-4" style="background-image: url({{('frontend/images/dessert-1.jpg')}});"></a>
										<div class="text">
											<h3><a href="#">Hot Cake Honey</a></h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
											<p class="price"><span>$2.90</span></p>
											<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 text-center">
									<div class="menu-wrap">
										<a href="#" class="menu-img img mb-4" style="background-image: url({{('frontend/images/dessert-2.jpg')}});"></a>
										<div class="text">
											<h3><a href="#">Hot Cake Honey</a></h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
											<p class="price"><span>$2.90</span></p>
											<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 text-center">
									<div class="menu-wrap">
										<a href="#" class="menu-img img mb-4" style="background-image: url({{('frontend/images/dessert-3.jpg')}});"></a>
										<div class="text">
											<h3><a href="#">Hot Cake Honey</a></h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
											<p class="price"><span>$2.90</span></p>
											<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 text-center">
									<div class="menu-wrap">
										<a href="#" class="menu-img img mb-4" style="background-image: url({{('frontend/images/dessert-4.jpg')}});"></a>
										<div class="text">
											<h3><a href="#">Hot Cake Honey</a></h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
											<p class="price"><span>$2.90</span></p>
											<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 text-center">
									<div class="menu-wrap">
										<a href="#" class="menu-img img mb-4" style="background-image: url({{('frontend/images/dessert-5.jpg')}});"></a>
										<div class="text">
											<h3><a href="#">Hot Cake Honey</a></h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
											<p class="price"><span>$2.90</span></p>
											<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
										</div>
									</div>
								</div>
								<div class="col-md-4 text-center">
									<div class="menu-wrap">
										<a href="#" class="menu-img img mb-4" style="background-image: url({{('frontend/images/dessert-6.jpg')}});"></a>
										<div class="text">
											<h3><a href="#">Hot Cake Honey</a></h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
											<p class="price"><span>$2.90</span></p>
											<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
		  </div>
	  </section>
  
	 
  
  @endsection