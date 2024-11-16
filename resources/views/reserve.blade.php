 @extends('master') 

           @section ('contents')


            <div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content">
                                <h2>Reserve</h2>
                                
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
                                <h2>Submit reservation information</h2>
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
                                                <form action="/store/reservations" method="post" class="send-message">

                                                        <label for="date">Enter the date of the reservation:</label><br>
                                                        <input type="date" name="date"date of the reservation id="date" />
                                                    <br>
                                                    <br>
                                                    <label for="number_of_people">Enter the number of people:</label><br>
                                                    <input type="number" name="number_of_people" id="number_of_people" placeholder="Number of people"/>
                                                    <br>
                                                    <br>
                                                    <div class="row">        
                                                        <div class="text col-md-12">
                                                            <label for="note">Note:</label>
                                                            <textarea type="text" name="note" placeholder="Note"></textarea>
                                                        </div>   
                                                    </div>                              
                                                    <div class="send">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        <button type="reset">Reset</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="info">
                                                
                                                <ul>
                                                    <img style="height: 700px ; width: 100%" src="images/reserv.jpg" alt="reservation" >
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