 @extends('master') 

           @section ('contents')


            <div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content">
                                <h2>Order</h2>
                               
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
                                <h2>Submit order information</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div id="contact-us">
                        <div class="container">
                            <div class="row">
                                <div class="product-item col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">  
                                            <div class="message-form">
                                                <form action="#" method="post" class="send-message">

                                                      <div class="row">        
                                                        <div class="text col-md-12">
                                                            <label for="location_id">Location</label>
    <select name="location_id" class="form-control">

      @foreach( $location as $one)
      <option value="{{$one->id}}">{{$one->name}} </option>
@endforeach
    </select>
      <div class="alert alert-warning">
  <strong>The price of the meal does not include delivery costs</strong> Check out the <a href="/delivery_costs" class="alert-link">delivery costs</a>.
</div>  
                                                        </div>   
                                                    </div>
                                                    <br>
                                                  
                                                    <div class="row">        
                                                        <div class="text col-md-12">
                                                            <label for="date">Any Notes</label>
                                                            <textarea name="text" placeholder="Note"></textarea>
                                                        </div>   
                                                    </div> 
                                                                                  
                                                    <div class="send">
                                                        <button type="submit">Send</button>
                                                        
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="info">
                                                
                                                <ul>
                                                    <img style="height: 650px ; width: 100%" src="images/order.jpg" alt="order" >
                                                </ul>
                                            </div>
                                        </div>     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>


           @endsection