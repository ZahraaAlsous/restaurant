 @extends('layouts.app') 

 @section ('content')

<div class="container">
  <form action="/store/category" method="POST">
    @csrf
    <h1>Category Add Page</h1>
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection