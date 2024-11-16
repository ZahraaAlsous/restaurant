 @extends('layouts.app') 

 @section ('content')

<div class="container">
  <h1 class="text-center">{{$titel}}</h1>
  <form action="/reservations/edit/{{$Reservation->id}}" method="post">
    @csrf
    <div class="form-group">
      <label for="date">Reservation date :</label>
      <input 
      type="date" 
      class="form-control" 
      id="date" 
      placeholder="Enter reservation date" 
      name="date"
      value="{{$Reservation->date}}">
    </div>

    <div class="form-group">
      <label for="number_of_people">Number of people :</label>
      <input 
      type="number" 
      class="form-control" 
      id="number_of_people" 
      placeholder="Enter number of people" 
      name="number_of_people"
      value="{{$Reservation->number_of_people}}">
    </div>

    <div class="form-group">
      <label for="note">Note :</label>
      <input 
      type="text" 
      class="form-control" 
      id="note" 
      placeholder="Enter note" 
      name="note"
      value="{{$Reservation->note}}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection