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
                	<br><br>

                            	<h3 class = "text-center" style="color: orange">If you can not find your location</h3>
                            	<br>
                            <h4 class = "text-center">Then unfortunately the order service is not available for your location</h4>
                            <br><br>
                            
                   
                     
                     <table class="table  table-striped">
    <thead>
      <tr>
        <th>Location</th>
        <th>Cost</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Damascus / Mazzeh</td>
        <td>2000 SYP</td>
       
      </tr>
      <tr>
        <td>Damascus / Shaalan</td>
        <td>2500 SYP</td>
        
      </tr>
      <tr>
        <td>Damascus / Old Town</td>
        <td>3000 SYP</td>
       
      </tr>
    </tbody>
  </table>
  
                    
                </div>
            </div>


           @endsection