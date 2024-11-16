 @extends('layouts.app') 

 @section ('content')

<div class="container">
  <form action="/store/meal" method="POST">
    @csrf
    <h1>Meal Add Page</h1>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="ingredients">Ingredients:</label>
      <input type="text" class="form-control" id="ingredients" placeholder="Enter ingredients" name="ingredients">
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="text" class="form-control" id="image" placeholder="Enter image" name="image">
    </div>
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="number" class="form-control" id="price" placeholder="Enter price" name="price">
    </div>
    <div class="form-group">
      <label for="type">Type:</label>
      <select name="type" class="custom-select mb-3">
      <option selected>Halal</option>
      <option selected>Haram</option>
    </select>
    </div>
    <div class="form-group">
      <label for="calories">Calories:</label>
      <input type="number" class="form-control" id="calories" placeholder="Enter calories" name="calories">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection