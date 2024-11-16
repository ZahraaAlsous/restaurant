    @extends('master') 

           @section ('contents')


            <div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content">
                                <h2>About Us</h2>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="timeline-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Who We Are</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                        	<h3 class = "text-center" >Our Restaurant</h3>
                            <br>
                            <h4 class = "text-center">In our restaurant there is a team of the best chefs who work hard to make the best meals</h4>
                          <br>
                        </div>
                       
                    </div>
                    
                    <div class="row">
                         <div class="col-md-12 text-center">
                            <img style="width: 1100px ; height: 600px" src="images/ourRestaurant.jpg">
                         </div>
                  

                    </div>
                    
                   
                </div>
            </div>


            <div id="our-team">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Our Team</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                     @foreach($Team as $one)
                    <div class="row" id="Container">
                        <div class="authors">
    
                  
                            <div class="col-md-3 col-sm-6">
                                <div class="team-thumb">
                                    <div class="author">
                                        <img  style="width: 200px ; height: 300px" src="images/chef.jpg" alt="Linda - templatemo">
                                    </div>
                                    
                                 </div>
                                 <div class="author-details">
                                     <h2>Ahmad</h2>
                                     <span>Manager</span>
                                 </div>
                                 <div class="send">
     <button type="button" data-toggle="modal" data-target="#myModal"> More</button>                                                                               
</div>
  <!-- The MORE Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ahmad</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body text-center">
        <div class="card" style="width:100%">
    <img class="card-img-top" src="images/chef.jpg"  alt="Card image" style="width:100%">
    <div class="card-body author-details">
      <span class="card-title">Manager</span>
      <p class="card-text">{{$one->chef_description}}</p>
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
                    @endforeach
                </div>
            </div>



            @endsection