 @extends('layouts.app') 

 @section ('content')

<div class="container">
  <form action="/store/tables" method="POST">
    @csrf
    <h1>Tables Add Page</h1>
    <div class="form-group">
      <label for="email">Number Of People:</label>
      <input type="number" class="form-control" id="number_of_people" placeholder="Enter number_of_people" name="number_of_people">
    </div>

    <div class="form-group">
      <label for="email">Number Of Tables:</label>
      <input type="number" class="form-control" id="number_of_tables" placeholder="Enter number_of_tables" name="number_of_tables">
    </div>
    
    <div class="form-group">
      <label for="email">Price:</label>
      <input type="number" class="form-control" id="price" placeholder="Enter price" name="price">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection