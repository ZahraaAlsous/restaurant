 @extends('layouts.app') 

 @section ('content')

<div class="container">
  <form action="/store/offers" method="POST">
    @csrf
    <h1>Offers Add Page</h1>
    <div class="form-group">
      <label for="email">Description:</label>
      <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">
    </div>
    
    <div class="form-group">
      <label for="email">Price:</label>
      <input type="number" class="form-control" id="price" placeholder="Enter price" name="price">
    </div>

    <div class="form-group">
      <label for="email">Image:</label>
      <input type="text" class="form-control" id="image" placeholder="Enter image" name="image">
    </div>

    <div class="form-group">
      <label for="email">Start Date:</label>
      <input type="date" class="form-control" id="start_date" placeholder="Enter start_date" name="start_date">
    </div>

    <div class="form-group">
      <label for="email">End Date:</label>
      <input type="date" class="form-control" id="end_date" placeholder="Enter end_date" name="end_date">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection