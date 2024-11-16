 @extends('layouts.app') 

 @section ('content')

<div class="container">
  <form action="/store/reservations" method="POST">
    @csrf
    <h1>Reservations Add Page</h1>

    <div class="form-group">
      <label for="date">Reservation date :</label>
      <input type="date" class="form-control" id="date" placeholder="Enter reservation date" name="date">
    </div>

    <div class="form-group">
      <label for="number_of_people">Number of people :</label>
      <input type="number" class="form-control" id="number_of_people" placeholder="Enter number of people" name="number_of_people">
    </div>

    <div class="form-group">
      <label for="note">Note :</label>
      <input type="text" class="form-control" id="note" placeholder="Enter note" name="note">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection