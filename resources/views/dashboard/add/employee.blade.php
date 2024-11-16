 @extends('layouts.app') 

 @section ('content')

<div class="container">
  <form action="/store/employee" method="POST">
    @csrf
    <h1>Employees Add Page</h1>
    <div class="form-group">
      <label for="email">First Name:</label>
      <input type="text" class="form-control" id="first_name" placeholder="Enter first name" name="first_name">
    </div>
    <div class="form-group">
      <label for="email">Last Name:</label>
      <input type="text" class="form-control" id="last_name" placeholder="Enter last name" name="last_name">
    </div>
    <div class="form-group">
      <label for="email">Age:</label>
      <input type="number" class="form-control" id="age" placeholder="Enter age" name="age">
    </div>
    <div class="form-group">
      <label for="email">Phone Number:</label>
      <input type="number" class="form-control" id="phone_number" placeholder="Enter phone_number" name="phone_number">
    </div>
    <div class="form-group">
      <label for="email">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
    </div>
    <div class="form-group">
      <label for="email">Type Of Work:</label>
      <input type="text" class="form-control" id="type_of_work" placeholder="Enter type_of_work" name="type_of_work">
    </div>
    <div class="form-group">
      <label for="email">Salary:</label>
      <input type="number" class="form-control" id="salary" placeholder="Enter salary" name="salary">
    </div>
    <div class="form-group">
      <label for="email">Reward:</label>
      <input type="number" class="form-control" id="reward" placeholder="Enter reward" name="reward">
    </div>
    <div class="form-group">
      <label for="email">Total Salary:</label>
      <input type="number" class="form-control" id="total_salary" placeholder="Enter total_salary" name="total_salary">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection