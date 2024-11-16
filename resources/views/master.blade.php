<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<!-- 



-->
    <head>
        <meta charset="utf-8">
         @foreach($Information as $one)
        <title>{{$one->name}}</title>
        <!-- logo in titel -->
        <link rel="icon" href="images/Logo1.png" type="image/x-icon">
        @endforeach
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/templatemo_style.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/testimonails-slider.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
       

            <header>
                
                <div id="main-header" style="background-color:  #262626">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="logo">
                                    <a href="/about-us"><img src="images/Logo1.png"  ></a>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="main-menu">
                                    <ul>

                                        <li><a href="/index" style="color: #f78e21">Home</a></li>
                                        <li><a href="/about-us" style="color: #f78e21">About</a></li>
                                        <li><a href="/menu" style="color: #f78e21">MENU</a></li>
                                        <li><a href="/contact-us" style="color: #f78e21">Contact</a></li>
                                        
                                         <li><a href="/order" style="color: #f78e21">Order</a></li>
                                        <li><a href="/reserve" style="color: #f78e21">Reserve</a></li>
                                       <li>
                                            
              @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                         <li>
                               <a style="color: #f78e21" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                
                            </li>
                    @else
              <a style="color: #f78e21" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a style="color: #f78e21" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
</li>
                                        
                                    </ul>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </header>


@yield('contents')


                <footer style="background-color: #262626">
                <div class="container">
                    <div class="top-footer">
                        <div class="row">
                           
                          @foreach($Information as $one)
                             <div class="col-md-4">
                                <div class="main-footer">
                                <div class="more-info">
                                    <br><br>
                                    <h4 class="footer-title" style="color: #f78e21; font-size: 20px">More info</h4>
                                    
                                    <ul>
                                        
                                        <li><i class="fa fa-phone contact-fa"></i><a class="contact-link" href="tel:{{$one->phone_number}}" style="color: #f78e21">{{$one->phone_number}}</a></li>
                                        <li style="color:#d9d9d9"><i class="fa fa-globe"></i>{{$one->location}}</li>
                                        <li><i class="fa fa-envelope contact-fa"></i><a class="contact-link" href="mailto:{{$one->email}}" style="color: #f78e21">{{$one->email}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                            


                            <div class="col-md-4 col-sm-4">
                                <br><br>
                    <h3 class="text-uppercase" style="color: #f78e21">Opening hours</h3><br>
                    <p style="color:#d9d9d9"><i class="fa fa-clock-o contact-fa" style="color: #f78e21"></i> {{$one->opening_time}} AM - {{$one->closing_time}} PM</p>
                    <p style="color:#d9d9d9"><i class="fa fa-bell-o contact-fa" style="color: #f78e21"></i> {{$one->    opening_day}}</p>
                </div>



                            
                              <div class="col-md-4">
                                <div class="social-bottom">
                                    <span style="color: #f78e21">Follow us:</span>
                                    <ul>
                                        <li><a href="{{$one->facebook}}" class="fa fa-facebook" target="-bransh"></a></li>
                                        <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
                                        <li><a href="{{$one->instagram}}" class="fa fa-instagram" target="-bransh"></a></li>
                                        <li><a href="{{$one->email}}" class="fa fa-envelope-o contact-fa" target="-bransh"></a></li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <br><br>
                    <!-- <div class="main-footer">
                        <div class="row">
                            
                           
                        </div>
                    </div> -->
                   
                    
                </div>
            </footer>

    
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
  </body>
</html>