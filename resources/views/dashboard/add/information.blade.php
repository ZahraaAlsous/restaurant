 @extends('layouts.app') 

 @section ('content')

<div class="container">
  <form action="/store/information" method="POST">
    @csrf
    <h1>Resturant Information Add Page</h1>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="phone_number">Phone Number:</label>
      <input type="number" class="form-control" id="phone_number" placeholder="Enter phone number" name="phone_number" >
    </div>
    <div class="form-group">
      <label for="facebook">Facebook:</label>
      <input type="text" class="form-control" id="facebook" placeholder="Enter facebook" name="facebook" >
    </div>
    <div class="form-group">
      <label for="instagram">Instagram:</label>
      <input type="text" class="form-control" id="instagram" placeholder="Enter instagram" name="instagram">
    </div>
    <div class="form-group">
      <label for="location">Location:</label>
      <input type="text" class="form-control" id="location" placeholder="Enter location" name="location" >
    </div>
    <div class="form-group">
      <label for="logo">Logo:</label>
      <input type="text" class="form-control" id="logo" placeholder="Enter logo" name="logo" >
    </div>
    <div class="form-group">
      <label for="opening_days">Opening Days:</label>
      <input type="text" class="form-control" id="opening_days" placeholder="Enter opening days" name="opening_days" >
    </div>
    <div class="form-group">
      <label for="opening_time">Opening Time:</label>
      <input type="number" class="form-control" id="opening_time" placeholder="Enter opening time" name="opening_time" >
    </div>
    <div class="form-group">
      <label for="closing_time">Closing Time:</label>
      <input type="number" class="form-control" id="closing_time" placeholder="Enter closing time"  name="closing_time">
    </div>

    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection