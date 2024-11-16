 @extends('layouts.app') 

 @section ('content')

<div class="container">
  <h1 class="text-center">All Meals</h1>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Ingredients</th>
        <th>Price</th>
        <th>Type</th>
        <th>Calories</th>
        <th>Image</th>
        <th>Control</th>
      </tr>
    </thead>
    <tbody>
      @foreach($meals as $one)
        <tr>
          <td>{{$one->id}}</td>
          <td>{{$one->name}}</td>
          <td>{{$one->ingredients}}</td>
          <td>{{$one->price}}</td>
          <td>{{$one->type}}</td>
          <td>{{$one->calories}}</td>
          <td>{{$one->image}}</td>
          <td>
            <a type="button" 
            href="/meal/delete/{{$one->id}}" 
            class="btn btn-outline-danger">Delete</a>

            <a type="button" 
            href="/meal/edit/{{$one->id}}" 
            class="btn btn-outline-success">Edit</a>
          </td>
      @endforeach
        </tr>
    </tbody>
  </table>
</div>
@endsection