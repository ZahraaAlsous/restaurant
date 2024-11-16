@extends('master') 

           @section ('contents')

            <div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content">
                                <h2>Single Product</h2>
                                <span>Home / <a href="single-post.html">Single Post</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div id="product-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Single Blog Post</h2>
                                <img src="images/under-heading.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <div id="single-blog" class="page-section first-section">
                        <div class="container">
                            <div class="row">
                                <div class="product-item col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">  
                                                <div class="image">
                                                    <div class="image-post">
                                                        <img src="images/single-post.jpg" alt=""> 
                                                        <!-- image center -->
                                                        <!-- style="display: block;margin-left: auto;margin-right: auto;" -->
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <div class="col-md-4">
                                                        <h3 style="color: #f78e21;font-family: 'Open Sans', sans-serif;font-size: 16px;font-style: normal;font-weight: bolder;">The name of the dish</h3>
                                                        <span class="text-category">$24.00</span>
                                                        </div>
                                                    </div>
                                                        <br>

                                                        <!-- <div class="col-md-4 rate">
                                                            <a id="one" href="#"><i class="fa fa-star"></i></a>
                                                            <a id="two" href="#"><i class="fa fa-star"></i></a>
                                                            <a id="three" href="#"><i class="fa fa-star"></i></a>
                                                            <a id="four" href="#"><i class="fa fa-star"></i></a>
                                                            <a id="five" href="#"><i class="fa fa-star"></i></a>
                                                        </div> -->
                                                        <div class="starstar col-md-4">
                                                        <div class="stars">
                                                            <input type="radio" id="five" name="rate" value="5">
                                                            <label for="five"></label>
                                                            <input type="radio" id="four" name="rate" value="4">
                                                            <label for="four"></label>
                                                            <input type="radio" id="three" name="rate" value="3">
                                                            <label for="three"></label>
                                                            <input type="radio" id="two" name="rate" value="2">
                                                            <label for="two"></label>
                                                            <input type="radio" id="one" name="rate" value="1">
                                                            <label for="one"></label>
                                                            <span class="result"></span>
                                                        </div>
                                                        </div>

                                                        <div class="col-md-4"></div>
                                                    </div>
                                                    <br><br>
                                                    <h4 style="font-weight: bolder;">Ingredients : <span style="font-size: medium;font-weight: normal;">rice , meat</span></h4>
                                                    <h4 style="font-weight: bolder;">Description : <span style="font-size: medium;font-weight: normal;">Italian food</span></h4>
                                                    <h4 style="font-weight: bolder;">Calories : <span style="font-size: medium;font-weight: normal;">100</span></h4>
                                                    <h4 style="font-weight: bolder;">Time : <span style="font-size: medium;font-weight: normal;">20 m</span></h4>
                                                    <div class="send">
                                                        <button type="submit"><a href="order" style="color: #ffffff;font-family: 'Open Sans', sans-serif;font-size: 16px;font-style: normal;font-weight: 600;">Order</a></button>
                                                    </div>
                                                </div>
                                                <!-- <div class="divide-line">
                                                <img src="images/div-line.png" alt="" />
                                                </div>
                                                
                                            
                                                <div class="divide-line">
                                                <img src="images/div-line.png" alt="" />
                                                </div> -->
                                            
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>     
                </div>
            </div>


@endsection

    
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>