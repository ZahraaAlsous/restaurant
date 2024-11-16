 @extends('master') 

           @section ('contents')


            <div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content">
                                <h2>Our Menu</h2>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div id="products-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="product-heading">
                                <h2>Hungry ?</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                        <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-sm-6 col-xs-12">
                </div>

                   <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <img src="images/cook_dessert.png" alt="All Meals">
                         <div class="filters col-md-12 col-xs-12">
                            <ul id="filters" class="clearfix">
                                <li><h4 class="filter" data-filter="all">All Meals</h4></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <img src="images/cook_breakfast.png" alt="Breakfast">
                         <div class="filters col-md-12 col-xs-12">
                            <ul id="filters" class="clearfix">
                              <li><h4 class="filter" data-filter=".breakfast">Breakfast</h4></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <img src="images/cook_lunch.png" alt="Lunch">
                         <div class="filters col-md-12 col-xs-12">
                            <ul id="filters" class="clearfix">
                              <li><h4 class="filter" data-filter=".lunch">Lunch</h4></li>
                            </ul>
                        </div>
                    </div>
                </div>
                      <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <img src="images/cook_dinner.png" alt="Dinner">
                         <div class="filters col-md-12 col-xs-12">
                            <ul id="filters" class="clearfix">
                              <li><h4 class="filter" data-filter=".dinner">Dinner</h4></li>
                            </ul>
                        </div>
                    </div>
                </div>
                      <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <img src="images/cook_dessert.png" alt="Desserts">
                         <div class="filters col-md-12 col-xs-12">
                            <ul id="filters" class="clearfix">
                              <li><h4 class="filter" data-filter=".desserts">Desserts</h4></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
        </div>
    </section>
                 @foreach($Meal as $one)
                      <div class="row" id="Container">
                         <div class="col-md-3 col-sm-6 mix portfolio-item ginger">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product2.jpg" alt="" />
                                
                                </div>  
                                <div class="label-text">
                                    <h3>{{$one->name}}</h3>
                                    <span class="text-category">{{$one->price}}S.P</span>
                                    <div class="container">

  
<div class="send">
     <button type="button" data-toggle="modal" data-target="#myModal"> More</button> 

    @if($userId)
     <button type="button" data-toggle="modal" data-target="#ordModal"> Order</button>
     
     @else
 <button type="button" data-toggle="modal" data-target="#ordModallog"> Order</button>

     @endif

</div>

  <!-- The MORE Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">{{$one->name}}</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <div class="card" style="width:100%">
    <img class="card-img-top" src="images/product2.jpg"  alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Ingredients</h4>
      <p class="card-text">{{$one->ingredients}}</p>
      <h4 class="card-title">Category</h4>
      <p class="card-text">{{$one->name}}</p>
       <h4 class="card-title">Calories</h4>
      <p class="card-text">{{$one->calories}}</p>
       <h4 class="card-title">{{$one->type}}</h4>
        <h4 class="card-title">{{$one->price}} S.P</h4>
   

       @if($userId)

        
      <div class="send">
     <button type="button" data-toggle="modal" data-target="#ordModal" data-dismiss="modal"> Order</button>
 </div>

 @else
<div class="send">
     <button type="button" data-toggle="modal" data-target="#ordModallog" data-dismiss="modal"> Order</button>
 </div>
 @endif
    </div>
  </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <!-- The Order Modal -->
  <div class="modal" id="ordModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">{{$one->name}}</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <div class="card" style="width:100%">
    <img class="card-img-top" src="images/product2.jpg"  alt="Card image" style="width:100%">
    <div class="card-body">
      <form action="/store/orders" method="POST">
          @csrf
         <label for="meal_size" style="font-size: 15px">Meal Size</label>
  <select name="meal_size" class="custom-select">
    <option selected value="small">Small </option>
    <option value="mid">Mid</option>
    <option value="family">Family</option>
  </select>

<br>
<br>
    <label for="location_id" style="font-size: 15px">Location</label>
     <select name="location_id" class="form-control">

      @foreach( $location as $one)
      <option value="{{$one->id}}">{{$one->name}} </option>
@endforeach
    </select>
    <br>
   <div class="form-group">
      <label for="note">Note</label>
      <input type="text" class="form-control" id="note" name="note">
    </div>
<br>
<label for="quantity" style="font-size: 15px">Quantity:</label>
<input type="number" id="quantity" name="quantity" min="1">
 <label for="date" style="font-size: 15px">Enter the date of the order:</label><br>
 <input type="datetime-local" name="date" date of the order id="date" />
      <div class="send">
        <div class="row" > 
<div class="col-md-6">
          <button type="submit" >Submit</button>

</div>
<div class="col-md-6">
  <br>
<h4>Price: {{$one->price}} S.P</h4>
</div>
</div>

 </div>
 </form>
    </div>
  </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>


   <!-- The Login Modal -->
  <div class="modal" id="ordModallog">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" >Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <div class="card" style="width:100%">
    
    <div class="card-body">
    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label style="font-size: 15px" for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style="font-size: 15px" for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label  class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                 <button type="button" data-toggle="modal" data-target="#ordModalreg" data-dismiss="modal" class="btn btn-primary"> Creat Account</button>
                                
                            </div>
                        </div>
                    </form>
    </div>
  </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>


 <!-- The Reg Modal -->
  <div class="modal" id="ordModalreg">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Register</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <div class="card" style="width:100%">
   
    <div class="card-body">
      <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label style="font-size: 15px" for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style="font-size: 15px" for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style="font-size: 15px" for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label style="font-size: 15px" for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style="font-size: 15px" for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style="font-size: 15px" for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
    </div>
  </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
</div>
                                </div>
                            </div>          
                        </div>
                    </div>
                    @endforeach

                    <div class="pagination">
                        <div class="row">   
                            <div class="col-md-12">
                                <ul>
                                	<li><a href="#">Previous</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>     
                </div>
            </div>



			@endsection