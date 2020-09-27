@extends('master1')
@section('content')
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  		<ol class="carousel-indicators">
    		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  		</ol>
  		
  		<div class="carousel-inner">
    		<div class="carousel-item active">
		      	<img src="{{asset('front/image/banner/ac.jpg')}}" class="d-block w-100 bannerImg" alt="...">
		    </div>
		    <div class="carousel-item">
		      	<img src="{{asset('front/image/banner/giordano.jpg')}}" class="d-block w-100 bannerImg" alt="...">
		    </div>
		    <div class="carousel-item">
		      	<img src="{{asset('front/image/banner/garnier.jpg')}}" class="d-block w-100 bannerImg" alt="...">
		    </div>
  		</div>
	</div>
	<div class="container mt-5 px-5">
		<!-- Category -->
		<div class="row">
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
				<div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
				  	<img src="{{asset('front/image/category/category_one.png')}}" class="card-img-top" alt="...">
				  	<div class="card-body">
				    	<p class="card-text font-weight-bold text-truncate"> Smart Home </p>
				  	</div>
				</div>
			</div>

			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
				<div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
				  	<img src="{{asset('front/image/category/category_two.png')}}" class="card-img-top" alt="...">
				  	<div class="card-body">
				    	<p class="card-text font-weight-bold text-truncate"> Grocery </p>
				  	</div>
				</div>
			</div>

			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
				<div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
				  	<img src="{{asset('front/image/category/category_three.png')}}" class="card-img-top" alt="...">
				  	<div class="card-body">
				    	<p class="card-text font-weight-bold text-truncate"> Cosmetic </p>
				  	</div>
				</div>
			</div>

			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
				<div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
				  	<img src="{{asset('front/image/category/category_four.png')}}" class="card-img-top" alt="...">
				  	<div class="card-body">
				    	<p class="card-text font-weight-bold text-truncate"> Stationery </p>
				  	</div>
				</div>
			</div>

			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
				<div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
				  	<img src="{{asset('front/image/category/category_five.png')}}" class="card-img-top" alt="...">
				  	<div class="card-body">
				    	<p class="card-text font-weight-bold text-truncate"> Electronic Devices </p>
				  	</div>
				</div>
			</div>

			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
				<div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
				  	<img src="{{asset('front/image/category/category_six.png')}}" class="card-img-top" alt="...">
				  	<div class="card-body">
				    	<p class="card-text font-weight-bold text-truncate"> Furniture </p>
				  	</div>
				</div>
			</div>

			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
				<div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
				  	<img src="{{asset('front/image/category/category_seven.png')}}" class="card-img-top" alt="...">
				  	<div class="card-body">
				    	<p class="card-text font-weight-bold text-truncate"> Kitchen Apperience </p>
				  	</div>
				</div>
			</div>

			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
				<div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
				  	<img src="{{asset('front/image/category/category_eight.jpg')}}" class="card-img-top" alt="...">
				  	<div class="card-body">
				    	<p class="card-text font-weight-bold text-truncate"> Health Care </p>
				  	</div>
				</div>
			</div>
		</div>

		<div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>
		
		<!-- Discount Item -->
		<div class="row mt-5">
			<h1>All Items</h1>
		</div>

	    <!-- Disocunt Item -->
		<div class="row">
			<div class="col-12">
				<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
		            <div class="MultiCarousel-inner">
		            	@foreach($items as $item)
		                <div class="item">
		                	<a href="{{route('itemdetailpage',$item->id)}}">
			                    <div class="pad15">
			                    	<img src="{{asset($item->photo)}}" class="img-fluid">
			                        <p class="text-truncate">{{$item->name}}</p>
			                        <p class="item-price">
			                        	<!-- <strike>{{$item->price}} Ks </strike>  -->
			                        	<span class="d-block">{{$item->price}} Ks</span>
			                        </p>

			                        <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
											<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
										</ul>
									</div>
									@guest
									<a href="{{route('login')}}" class="text-decoration-none">Add to Cart</a>
									@else
									<a href="#" class="addtocartBtn text-decoration-none" data-id="{{$item->id}}" data-name="{{$item->name}}" data-price="{{$item->price}}" data-photo="{{$item->photo}}">Add to Cart</a>
									@endguest
									

			                    </div>
		                	</a>
		                </div>
		                @endforeach
		            </div>
		            <button class="btn btnMain leftLst"><</button>
		            <button class="btn btnMain rightLst">></button>
		        </div>
		    </div>
		</div>

		<!-- Flash Sale Item -->
		<div class="row mt-5">
			<h1> Flash Sale </h1>
		</div>

	    <!-- Flash Sale Item -->
		<div class="row">
			<div class="col-12">
				<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
		            <div class="MultiCarousel-inner">
		                <div class="item">
		                    <div class="pad15">
		                    	<img src="{{asset('front/image/item/saisai_one.jpg')}}" class="img-fluid">
		                        <p class="text-truncate">Multi Item Carousel</p>
		                        <p class="item-price">
		                        	<strike>250,000 Ks </strike> 
		                        	<span class="d-block">230,000 Ks</span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                </div>
		                <div class="item">
		                    <div class="pad15">
		                    	<img src="{{asset('front/image/item/saisai_two.jpg')}}" class="img-fluid">
		                        <p class="text-truncate">Multi Item Carousel</p>
		                        <p class="item-price">
		                        	<span class="d-block">230,000 Ks </span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                </div>
		                <div class="item">
		                    <div class="pad15">
		                    	<img src="{{asset('front/image/item/saisai_three.jpg')}}" class="img-fluid">
		                        <p class="text-truncate">Multi Item Carousel</p>
		                        <p class="item-price">
		                        	<strike>250,000 Ks </strike> 
		                        	<span class="d-block">230,000 Ks </span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                </div>
		                <div class="item">
		                    <div class="pad15">
		                    	<img src="{{asset('front/image/item/saisai_four.jpg')}}" class="img-fluid">
		                        <p class="text-truncate">Multi Item Carousel</p>
		                        <p class="item-price">
		                        	<strike>250,000 Ks </strike> 
		                        	<span class="d-block">230,000 Ks </span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                </div>
		                <div class="item">
		                    <div class="pad15">
		                    	<img src="{{asset('front/image/item/giordano_one.jpg')}}" class="img-fluid">
		                        <p class="text-truncate">Multi Item Carousel</p>
		                        <p class="item-price">
		                        	<strike>250,000 Ks </strike> 
		                        	<span class="d-block">230,000 Ks </span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                </div>
		                <div class="item">
		                    <div class="pad15">
		                    	<img src="{{asset('front/image/item/giordano_two.jpg')}}" class="img-fluid">
		                        <p class="text-truncate">Multi Item Carousel</p>
		                        <p class="item-price">
		                        	<span class="d-block">230,000 Ks </span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                </div>
		                <div class="item">
		                    <div class="pad15">
		                    	<img src="{{asset('front/image/item/giordano_three.jpg')}}" class="img-fluid">
		                        <p class="text-truncate">Multi Item Carousel</p>
		                        <p class="item-price">
		                        	<span class="d-block">230,000 Ks </span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                </div>
		                <div class="item">
		                    <div class="pad15">
		                    	<img src="{{asset('front/image/item/giordano_four.jpg')}}" class="img-fluid">
		                        <p class="text-truncate">Multi Item Carousel</p>
		                        <p class="item-price">
		                        	<strike>250,000 Ks </strike> 
		                        	<span class="d-block">230,000 Ks </span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                </div>
		                <div class="item">
		                    <div class="pad15">
		                    	<img src="{{asset('front/image/item/apple_four.jpeg')}}" class="img-fluid">
		                        <p class="text-truncate">Multi Item Carousel</p>
		                        <p class="item-price">
		                        	<span class="d-block">230,000 Ks </span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                </div>
		                <div class="item">
		                    <div class="pad15">
		                    	<img src="{{asset('front/image/item/apple_one.jpg')}}" class="img-fluid">
		                        <p class="text-truncate">Multi Item Carousel</p>
		                        <p class="item-price">
		                        	<strike>250,000 Ks </strike> 
		                        	<span class="d-block">230,000 Ks</span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                </div>
		                <div class="item">
		                    <div class="pad15">
		                    	<img src="{{asset('front/image/item/apple_three.jpg')}}" class="img-fluid">
		                        <p class="text-truncate">Multi Item Carousel</p>
		                        <p class="item-price">
		                        	<span class="d-block">230,000 Ks </span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                </div>
		                <div class="item">
		                    <div class="pad15">
		                    	<img src="{{asset('front/image/item/apple_two.png')}}" class="img-fluid">
		                        <p class="text-truncate">Multi Item Carousel</p>
		                        <p class="item-price">
		                        	<strike>250,000 Ks </strike> 
		                        	<span class="d-block">230,000 Ks </span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                </div>
		                
		            </div>
		            <button class="btn btnMain leftLst"><</button>
		            <button class="btn btnMain rightLst">></button>
		        </div>
		    </div>
		</div>

		<!-- Random Catgory ~ Item -->
		<div class="row mt-5">
			<h1> Fresh Picks </h1>
		</div>

	    <!-- Random Item -->
		<div class="row">
			<div class="col-12">
				<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
		            <div class="MultiCarousel-inner">
		                <div class="item">
		                    <div class="pad15">
		                    	<img src="{{asset('front/image/item/saisai_one.jpg')}}" class="img-fluid">
		                        <p class="text-truncate">Multi Item Carousel</p>
		                        <p class="item-price">
		                        	<strike>250,000 Ks </strike> 
		                        	<span class="d-block">230,000 Ks</span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                </div>
		                <div class="item">
		                    <div class="pad15">
		                    	<img src="{{asset('front/image/item/saisai_two.jpg')}}" class="img-fluid">
		                        <p class="text-truncate">Multi Item Carousel</p>
		                        <p class="item-price">
		                        	<span class="d-block">230,000 Ks </span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                </div>
		                <div class="item">
		                    <div class="pad15">
		                    	<img src="{{asset('front/image/item/saisai_three.jpg')}}" class="img-fluid">
		                        <p class="text-truncate">Multi Item Carousel</p>
		                        <p class="item-price">
		                        	<strike>250,000 Ks </strike> 
		                        	<span class="d-block">230,000 Ks </span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                </div>
		                <div class="item">
		                    <div class="pad15">
		                    	<img src="{{asset('front/image/item/saisai_four.jpg')}}" class="img-fluid">
		                        <p class="text-truncate">Multi Item Carousel</p>
		                        <p class="item-price">
		                        	<strike>250,000 Ks </strike> 
		                        	<span class="d-block">230,000 Ks </span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                </div>
		                <div class="item">
		                    <div class="pad15">
		                    	<img src="{{asset('front/image/item/giordano_one.jpg')}}" class="img-fluid">
		                        <p class="text-truncate">Multi Item Carousel</p>
		                        <p class="item-price">
		                        	<strike>250,000 Ks </strike> 
		                        	<span class="d-block">230,000 Ks </span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                </div>
		                <div class="item">
		                    <div class="pad15">
		                    	<img src="{{asset('front/image/item/giordano_two.jpg')}}" class="img-fluid">
		                        <p class="text-truncate">Multi Item Carousel</p>
		                        <p class="item-price">
		                        	<span class="d-block">230,000 Ks </span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                </div>
		                <div class="item">
		                    <div class="pad15">
		                    	<img src="{{asset('front/image/item/giordano_three.jpg')}}" class="img-fluid">
		                        <p class="text-truncate">Multi Item Carousel</p>
		                        <p class="item-price">
		                        	<span class="d-block">230,000 Ks </span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                </div>
		                <div class="item">
		                    <div class="pad15">
		                    	<img src="{{asset('front/image/item/giordano_four.jpg')}}" class="img-fluid">
		                        <p class="text-truncate">Multi Item Carousel</p>
		                        <p class="item-price">
		                        	<strike>250,000 Ks </strike> 
		                        	<span class="d-block">230,000 Ks </span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                </div>
		                <div class="item">
		                    <div class="pad15">
		                    	<img src="{{asset('front/image/item/apple_four.jpeg')}}" class="img-fluid">
		                        <p class="text-truncate">Multi Item Carousel</p>
		                        <p class="item-price">
		                        	<span class="d-block">230,000 Ks </span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                </div>
		                <div class="item">
		                    <div class="pad15">
		                    	<img src="{{asset('front/image/item/apple_one.jpg')}}" class="img-fluid">
		                        <p class="text-truncate">Multi Item Carousel</p>
		                        <p class="item-price">
		                        	<strike>250,000 Ks </strike> 
		                        	<span class="d-block">230,000 Ks</span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                </div>
		                <div class="item">
		                    <div class="pad15">
		                    	<img src="{{asset('front/image/item/apple_three.jpg')}}" class="img-fluid">
		                        <p class="text-truncate">Multi Item Carousel</p>
		                        <p class="item-price">
		                        	<span class="d-block">230,000 Ks </span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                </div>
		                <div class="item">
		                    <div class="pad15">
		                    	<img src="{{asset('front/image/item/apple_two.png')}}" class="img-fluid">
		                        <p class="text-truncate">Multi Item Carousel</p>
		                        <p class="item-price">
		                        	<strike>250,000 Ks </strike> 
		                        	<span class="d-block">230,000 Ks </span>
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                </div>
		                
		            </div>
		            <button class="btn btnMain leftLst"><</button>
		            <button class="btn btnMain rightLst">></button>
		        </div>
		    </div>
		</div>

		
		<div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>

	    <!-- Brand Store -->
	    <div class="row mt-5">
			<h1> Top Brand Stores </h1>
	    </div>

	    <!-- Brand Store Item -->
	    <section class="customer-logos slider mt-5">
	    	@foreach($brands as $brand)
	      	<div class="slide">
	      		<a href="{{route('itemBybrand',$brand->id)}}">
		      		<img src="{{asset($brand->photo)}}">
		      	</a>
	      	</div>
	      	@endforeach
	   	</section>

	    <div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>

	</div>
	<!-- Footer -->
@endsection
@section('script')
<script type="text/javascript" src="{{asset('front/js/main.js')}}"></script>
@endsection