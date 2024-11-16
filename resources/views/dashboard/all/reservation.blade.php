 @extends('layouts.app') 

 @section ('content')

<div class="container">
  <h1 class="text-center">{{$titel}}</h1>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Date Reservation</th>
        <th>Number of people</th>
        <th>Note</th>
        <th>Control</th>
      </tr>
    </thead>
    <tbody>
      @foreach($Reservation as $one)
        <tr>
          <td>{{$one->id}}</td>
          <td>{{$one->date}}</td>
          <td>{{$one->number_of_people}}</td>
          <td>{{$one->note}}</td>
          <td>
            <a type="button" 
            href="/reservations/delete/{{$one->id}}" 
            class="btn btn-outline-danger">Delete</a>

            <a type="button" 
            href="/reservations/edit/{{$one->id}}" 
            class="btn btn-outline-success">Edit</a>
          </td>
      @endforeach
        </tr>
    </tbody>
  </table>

</div>
@endsection