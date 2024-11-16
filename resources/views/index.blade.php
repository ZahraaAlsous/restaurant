
           @extends('master') 

           @section ('contents')

            <div id="slider">
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                        <div class="slider-caption">
                            <h1>Delicious Meals</h1>
                            <p>Don't waste any more time, order now to test our delicious meals
                            <br><br>We make it with all love.</p>
                            <a href="/menu">Order Now</a>
                        </div>
                      <img src="images/banner.jpg" alt="" />
                    </li>
                    <li>
                        <div class="slider-caption">
                            <h1>Fantasy Evenings</h1>
                            <p>Book now to have an unforgettable evening in our restaurant
                            <br><br>Don't forget to come with your lovers.</p>
                            <a href="/reserve">Book Now</a>
                        </div>
                      <img src="images/slide1.jpg" alt="" />
                    </li>
                   
                  </ul>
                </div>
            </div>


          




            <div id="latest-blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Our offers</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($Offer as $one)
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/meal.jpg" alt="" />
                                    <!-- {{asset('upload/'.$one->image)}} -->
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="/single-post">{{ $one->type}}</a></h4>
                                        <span>price : {{ $one->price}} S.P</span>
                                        <br>
                                        <span>start in {{ $one->end_date}} to {{ $one->end_date}}</span>
                                    </div>
                                    <div class="content-hide">
                                        <p>{{ $one->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>


            <div id="testimonails">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>What Customers Say</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="testimonails-slider">
                              <ul class="slides">
                                <li>
                                    <div class="testimonails-content">
                                        <p>Everything was just perfect, the meals, the tables and even the waiters were so gentle with us<br><br>highly recommended. </p>
                                        <h6 style="color: #f78e21">Jennifer </h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="testimonails-content">
                                        <p>The meals were delicious and the order was on time<br><br>highly recommended. </p>
                                        <h6 style="color: #f78e21">John </h6>
                                    </div>
                                </li>

                          
                               
                              </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

		@endsection
  