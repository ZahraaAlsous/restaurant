 @extends('master') 

           @section ('contents')


            <div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content">
                                <h2>Contact Us</h2>
                                
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
                                <h2>Feel free to send a message</h2>
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
                                                    <div class="name col-md-4">
                                                        <input type="text" name="first-name" id="first-name" placeholder="First Name" />
                                                    </div>
                                                   <div class="name col-md-4">
                                                        <input type="text" name="last-name" id="last-name" placeholder="Last Name" />
                                                    </div>
                                                    <div class="email col-md-4">
                                                        <input type="text" name="email" id="email" placeholder="Email" />
                                                    </div>
                                                    
                                                    </div>
                                                    <div class="row">        
                                                        <div class="text col-md-12">
                                                            <textarea name="text" placeholder="Message"></textarea>
                                                        </div>   
                                                    </div>                              
                                                    <div class="send">
                                                        <button type="submit">Send</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        @foreach($Information as $one)
                                        <div class="col-md-4">
                                            <div class="info">
                                                
                                                <ul>
                                                    <li><i class="fa fa-phone contact-fa"></i><a class="contact-link" href="tel:{{$one->phone_number}}" style="color: #f78e21">{{$one->phone_number}}</a></li>
                                                    <li><i class="fa fa-globe"></i>{{$one->location}}</li>
                                                     <li><i class="fa fa-envelope contact-fa"></i><a class="contact-link" href="mailto:{{$one->email}}" style="color: #f78e21">{{$one->email}}</a></li>
                                                </ul>
                                            </div>
                                        </div> 
                                        @endforeach    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>


           @endsection