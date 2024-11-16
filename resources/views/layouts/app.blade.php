<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Foodie</title>
 <link rel="icon" href="images/Logo1.png" type="image/x-icon">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-image: url(images/background.png) ">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" >
                 Foodie
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                    <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif

                        @else
                           <li class="nav-item dropdown">
                               

                                <div>
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                            @if($userType==1)
                            
                         
                         <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                         Add
                         </a>
                         <div class="dropdown-menu">
                         <a class="dropdown-item" href="/add/meal">Meal</a>
                         <a class="dropdown-item" href="/add/information">Resturant Information</a>
                         <a class="dropdown-item" href="/add/employees">Employees</a>
                          <a class="dropdown-item" href="/add/offers">Offer</a>
                            <a class="dropdown-item" href="#">Team</a>
                             <a class="dropdown-item" href="/add/tables">Table</a>
                              <a class="dropdown-item" href="/add/category">Category</a>
                               <a class="dropdown-item" href="#">Delivery Cost</a>
                                <a class="dropdown-item" href="/add/reservations">Reservation</a>
                                <a class="dropdown-item" href="#">Order</a>
                                <a class="dropdown-item" href="/add/locations">Location</a>
                         </div>
                         </li>

                         <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                         All
                         </a>
                         <div class="dropdown-menu">
                         <a class="dropdown-item" href="/all/meal">Meal</a>
                         <a class="dropdown-item" href="/all/information">Resturant Information</a>
                         <a class="dropdown-item" href="#">Employees</a>
                          <a class="dropdown-item" href="#">Offer</a>
                           <a class="dropdown-item" href="#">Founder</a>
                            <a class="dropdown-item" href="#">Team</a>
                             <a class="dropdown-item" href="#">Table</a>
                              <a class="dropdown-item" href="#">Category</a>
                               <a class="dropdown-item" href="#">Delivery Cost</a>
                                <a class="dropdown-item" href="/all/reservations">Reservation</a>
                                <a class="dropdown-item" href="#">Order</a>
                                <a class="dropdown-item" href="#">Location</a>
                         </div>
                         </li>

                         

@else
                       <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                         Add
                         </a>
                         <div class="dropdown-menu">
                         <a class="dropdown-item" href="/add/meal">Meal</a>
                         <a class="dropdown-item" href="/add/resturant information">Resturant Information</a>
                          <a class="dropdown-item" href="#">Offer</a>
                           <a class="dropdown-item" href="#">Founder</a>
                            <a class="dropdown-item" href="#">Team</a>
                             <a class="dropdown-item" href="#">Table</a>
                              <a class="dropdown-item" href="#">Category</a>
                               <a class="dropdown-item" href="#">Delivery Cost</a>
                                <a class="dropdown-item" href="#">Reservation</a>
                                <a class="dropdown-item" href="#">Order</a>
                                <a class="dropdown-item" href="/add/locations">Location</a>
                         </div>
                         </li>

                         <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                         All
                         </a>
                         <div class="dropdown-menu">
                         <a class="dropdown-item" href="#">Meal</a>
                         <a class="dropdown-item" href="#">Resturant Information</a>
                          <a class="dropdown-item" href="#">Offer</a>
                           <a class="dropdown-item" href="#">Founder</a>
                            <a class="dropdown-item" href="#">Team</a>
                             <a class="dropdown-item" href="#">Table</a>
                              <a class="dropdown-item" href="#">Category</a>
                               <a class="dropdown-item" href="#">Delivery Cost</a>
                                <a class="dropdown-item" href="#">Reservation</a>
                                <a class="dropdown-item" href="#">Order</a>
                                <a class="dropdown-item" href="#">Location</a>
                         </div>
                         </li>
                          <a class="nav-link" href="#">Update Admins</a>

@endif
                         


 
                        @endguest
                       
                    </ul>

               
                </div>
            </div>
        </nav>
          @yield('content')

        <main class="py-4">

</main>
    </div>
</body>
</html>


