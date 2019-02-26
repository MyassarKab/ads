@extends('layouts.main')

@section('content')

 <section class="jk-slider">
    <div id="carousel-example" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example" data-slide-to="1"></li>
    <li data-target="#carousel-example" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="item active">
      <a href="#"><img src="https://img.gaadicdn.com/images/uploadimages/1530711216536/desktopk.jpg" /></a>
      	<div class="hero">

      </div>
    </div>
    <div class="item">
      <a href="#"><img src="https://img.gaadicdn.com/images/uploadimages/1527152349413/creta12.jpg" /></a>
      <div class="hero">


      </div>
    </div>
    <div class="item">
      <a href="#"><img src="https://img.gaadicdn.com/images/featuredcarimages/Honda-Amaze-20/Honda-0.jpg" /></a>
      <div class="hero">

      </div>
    </div>
  </div>

  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

</section>


 <section>
 	<div class="container">
 	   <div class="row select-box">
 		 <div class="col-lg-4 ">
 		 	<!-- <label>Select your city to see local ads</label> -->
						<select class="selectpicker show-tick" data-live-search="true">
 													<option >Select your city</option>
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

			            </select>

			        </div>
			        <div class="col-lg-4">
			       <!--   <label></label> -->
					<select class="selectpicker show-tick" data-live-search="true">
              @foreach($Category as $item)
					  <option data-tokens="{{$item->TextTrans('name')}}" value="{{$item->TextTrans('name')}}">{{$item->TextTrans('name')}}</option>
              @endforeach

					</select>
			        </div>

			        <div class="col-md-4">
			        	<!-- <label></label> -->
			        	<input type="text" class="form-control input-lg" placeholder="Search for a specific product" />
			        </div>
			        <div class="col-md-4  ">
			        	<button class="btn   btn-lg btn-padding" type="button">
									<i class="glyphicon glyphicon-search"> </i> Start Search
					</button>
			        </div>

    	</div>
 	  </div>
 	</div>

 </section>


		<!-- content-starts-here -->
		<div class="content">
			<div class="categories">
				<div class="container">
          @foreach($Categories as $item)
					<div class="col-md-2 focus-grid">
						<a href="categories.html">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"> <img src="{{asset($item->image)}}" alt=""> </div>
									<h4 class="clrchg">{{$item->TextTrans('name')}}</h4>
								</div>
							</div>
						</a>
					</div>
          @endforeach
					<!-- <div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab2">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-laptop"></i></div>
									<h4 class="clrchg"> Electronics & Appliances</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab3">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-car"></i></div>
									<h4 class="clrchg">Cars</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab4">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-motorcycle"></i></div>
									<h4 class="clrchg">Bikes</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab5">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-wheelchair"></i></div>
									<h4 class="clrchg">Furnitures</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab6">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-paw"></i></div>
									<h4 class="clrchg">Pets</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab7">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-book"></i></div>
									<h4 class="clrchg">Books, Sports & Hobbies</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab8">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-asterisk"></i></div>
									<h4 class="clrchg">Fashion</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab9">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-gamepad"></i></div>
									<h4 class="clrchg">Kids</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab10">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-shield"></i></div>
									<h4 class="clrchg">Services</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab11">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-at"></i></div>
									<h4 class="clrchg">Jobs</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.html#parentVerticalTab12">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-home"></i></div>
									<h4 class="clrchg">Real Estate</h4>
								</div>
							</div>
						</a>
					</div> -->
					<div class="clearfix"></div>
				</div>
			</div>



			 <section class="backgrounSection">

			 	<h2 class="title">Urgent Ads</h2>

 	     <div class="owl-carousel owl-theme">
 	     	<div class="item">
 	     		<div class="col-md-12">
 	     			<div class="card mb">
 	     				<span>1000 $</span>
 	     				<div class="cardImage" style="background-image: url({{asset('main/images/p1.jpg')}}); height: 150px"></div>
 	     				<div class="card-body mb">

 	     					<h5 class="card-title">  <span> Card title</span> </h5>


 	     					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
 	     					<button type="button" class="btn btn-primary mb">Show Details</button>
 	     				</div>
 	     			</div>
 	     		</div>
 	     	</div>
          	<!--  -->
          	<div class="item">
 	     		<div class="col-md-12">
 	     			<div class="card mb">
 	     				<span>1000 $</span>
 	     				<div class="cardImage" style="background-image: url({{asset('main/images/p3.jpg')}}); height: 150px"></div>
 	     				<div class="card-body mb">

 	     					<h5 class="card-title">  <span> Card title</span> </h5>


 	     					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
 	     					<button type="button" class="btn btn-primary mb">Show Details</button>
 	     				</div>
 	     			</div>
 	     		</div>
 	     	</div>
 	     	<!--  -->
 	     	       	<!--  -->
          	<div class="item">
 	     		<div class="col-md-12">
 	     			<div class="card mb">
 	     				<span>1000 $</span>
 	     				<div class="cardImage" style="background-image: url({{asset('main/images/p4.jpg')}}); height: 150px"></div>
 	     				<div class="card-body mb">

 	     					<h5 class="card-title">  <span> Card title</span> </h5>


 	     					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
 	     					<button type="button" class="btn btn-primary mb">Show Details</button>
 	     				</div>
 	     			</div>
 	     		</div>
 	     	</div>
 	     	<!--  -->
 	     	       	<!--  -->
          	<div class="item">
 	     		<div class="col-md-12">
 	     			<div class="card mb">
 	     				<span>1000 $</span>
 	     				<div class="cardImage" style="background-image: url({{asset('main/images/p5.jpg')}}); height: 150px"></div>
 	     				<div class="card-body mb">

 	     					<h5 class="card-title">  <span> Card title</span> </h5>


 	     					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
 	     					<button type="button" class="btn btn-primary mb">Show Details</button>
 	     				</div>
 	     			</div>
 	     		</div>
 	     	</div>
 	     	<!--  -->
 	     	       	<!--  -->
          	<div class="item">
 	     		<div class="col-md-12">
 	     			<div class="card mb">
 	     				<span>1000 $</span>
 	     				<div class="cardImage" style="background-image: url({{asset('main/images/p7.jpg')}}); height: 150px"></div>
 	     				<div class="card-body mb">

 	     					<h5 class="card-title">  <span> Card title</span> </h5>


 	     					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
 	     					<button type="button" class="btn btn-primary mb">Show Details</button>
 	     				</div>
 	     			</div>
 	     		</div>
 	     	</div>
 	     	<!--  -->
 	     	       	<!--  -->
          	<div class="item">
 	     		<div class="col-md-12">
 	     			<div class="card mb">
 	     				<span>1000 $</span>
 	     				<div class="cardImage" style="background-image: url({{asset('main/images/p8.jpg')}}); height: 150px"></div>
 	     				<div class="card-body mb">

 	     					<h5 class="card-title">  <span> Card title</span> </h5>


 	     					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
 	     					<button type="button" class="btn btn-primary mb">Show Details</button>
 	     				</div>
 	     			</div>
 	     		</div>
 	     	</div>
 	     	<!--  -->
 	     	       	<!--  -->
          	<div class="item">
 	     		<div class="col-md-12">
 	     			<div class="card mb">
 	     				<span>1000 $</span>
 	     				<div class="cardImage" style="background-image: url({{asset('main/images/p11.jp')}}g); height: 150px"></div>
 	     				<div class="card-body mb">

 	     					<h5 class="card-title">  <span> Card title</span> </h5>


 	     					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
 	     					<button type="button" class="btn btn-primary mb">Show Details</button>
 	     				</div>
 	     			</div>
 	     		</div>
 	     	</div>
 	     	<!--  -->
          </div>
 </section>
 <section class="imagSection" style="background-image: url({{asset('main/images/banner.jpg')}});">
 	<div class="container">
 		<div class="row TebaText">
 			<div class="col-md-12   text-center">
 					 	<h2 class=" ">Sell or Advertise anything online with Teba</h2>

 			</div>
 		    <div class="col-md-12   text-center">
 					 	<a href="post-ad.html">Post Free Ad</a>
 			</div>

 		</div>
 	</div>


 </section>



			<div class="trending-ads">
				<div class="container">
				<!-- slider -->
				<div class="trend-ads">
					<h2 class="title">Last Ads</h2>
							<ul id="flexiselDemo3">
								<li>
									<div class="col-md-3 biseller-column">
										<div class="card mb">
											<span>1000 $</span>
											<div class="cardImage" style="background-image: url({{asset('main/images/p1.jpg')}}); height: 150px"></div>
											<div class="card-body mb">

												<h5 class="card-title">  <span> Card title</span> </h5>


												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
												<button type="button" class="btn btn-primary mb">Show Details</button>
											</div>
										</div>
									</div>
				 							<div class="col-md-3 biseller-column">
										<div class="card mb">
											<span>1000 $</span>
											<div class="cardImage" style="background-image: url({{asset('main/images/p1.jpg')}}); height: 150px"></div>
											<div class="card-body mb">

												<h5 class="card-title">  <span> Card title</span> </h5>


												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
												<button type="button" class="btn btn-primary mb">Show Details</button>
											</div>
										</div>
									</div>
												<div class="col-md-3 biseller-column">
										<div class="card mb">
											<span>1000 $</span>
											<div class="cardImage" style="background-image: url({{asset('main/images/p1.jpg')}}); height: 150px"></div>
											<div class="card-body mb">

												<h5 class="card-title">  <span> Card title</span> </h5>


												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
												<button type="button" class="btn btn-primary mb">Show Details</button>
											</div>
										</div>
									</div>
												<div class="col-md-3 biseller-column">
										<div class="card mb">
											<span>1000 $</span>
											<div class="cardImage" style="background-image: url({{asset('main/images/p1.jpg')}}); height: 150px"></div>
											<div class="card-body mb">

												<h5 class="card-title">  <span> Card title</span> </h5>


												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
												<button type="button" class="btn btn-primary mb">Show Details</button>
											</div>
										</div>
									</div>

								</li>

				 								<li>
									<div class="col-md-3 biseller-column">
										<div class="card mb">
											<span>1000 $</span>
											<div class="cardImage" style="background-image: url({{asset('main/images/p1.jpg')}}); height: 150px"></div>
											<div class="card-body mb">

												<h5 class="card-title">  <span> Card title</span> </h5>


												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
												<button type="button" class="btn btn-primary mb">Show Details</button>
											</div>
										</div>
									</div>
				 							<div class="col-md-3 biseller-column">
										<div class="card mb">
											<span>1000 $</span>
											<div class="cardImage" style="background-image: url({{asset('main/images/p1.jpg')}}); height: 150px"></div>
											<div class="card-body mb">

												<h5 class="card-title">  <span> Card title</span> </h5>


												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
												<button type="button" class="btn btn-primary mb">Show Details</button>
											</div>
										</div>
									</div>
												<div class="col-md-3 biseller-column">
										<div class="card mb">
											<span>1000 $</span>
											<div class="cardImage" style="background-image: url({{asset('main/images/p1.jpg')}}); height: 150px"></div>
											<div class="card-body mb">

												<h5 class="card-title">  <span> Card title</span> </h5>


												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
												<button type="button" class="btn btn-primary mb">Show Details</button>
											</div>
										</div>
									</div>
												<div class="col-md-3 biseller-column">
										<div class="card mb">
											<span>1000 $</span>
											<div class="cardImage" style="background-image: url({{asset('main/images/p1.jpg')}}); height: 150px"></div>
											<div class="card-body mb">

												<h5 class="card-title">  <span> Card title</span> </h5>


												<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
												<button type="button" class="btn btn-primary mb">Show Details</button>
											</div>
										</div>
									</div>

								</li>
						</ul>

					</div>
			</div>
			<!-- //slider -->
			</div>

		</div>
@endsection
