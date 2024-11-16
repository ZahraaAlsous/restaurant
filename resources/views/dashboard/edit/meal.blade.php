 @extends('layouts.app') 

 @section ('content')

<div class="container">
  <form action="/meal/edit/{{$meal->id}}" method="POST">
    @csrf
    <h1>Edit Meal</h1>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" 
      class="form-control" 
      id="name" 
      placeholder="Enter name" 
      name="name"
      value="{{$meal->name}}">
    </div>
    <div class="form-group">
      <label for="ingredients">Ingredients:</label>
      <input type="text" 
      class="form-control" 
      id="ingredients" 
      placeholder="Enter ingredients" 
      name="ingredients"
      value="{{$meal->ingredients}}">
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="text" 
      class="form-control" 
      id="image" 
      placeholder="Enter image" 
      name="image"
      value="{{$meal->image}}">
    </div>
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="number" 
      class="form-control" 
      id="price" 
      placeholder="Enter price" 
      name="price"
      value="{{$meal->price}}">
    </div>
    <div class="form-group">
      <label for="type">Type:</label>
      <select name="type" 
      class="custom-select mb-3"
      value="{{$meal->type}}">
      <option selected>Halal</option>
      <option selected>Haram</option>
    </select>
    </div>
    <div class="form-group">
      <label for="calories">Calories:</label>
      <input type="number" 
      class="form-control" 
      id="calories" 
      placeholder="Enter calories" 
      name="calories"
      value="{{$meal->calories}}">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
@endsection