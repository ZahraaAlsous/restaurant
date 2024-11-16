 @extends('layouts.app') 

 @section ('content')

<div class="container">
  <h1 class="text-center">All Restaurant Information</h1>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Facebook</th>
        <th>Instagram</th>
        <th>Email</th>
        <th>Location</th>
        <th>Logo</th>
        <th>Opening Days</th>
        <th>Opening Time</th>
        <th>Closing Time</th>
        <th>Control</th>
      </tr>
    </thead>
    <tbody>
      @foreach($information as $one)
        <tr>
          <td>{{$one->id}}</td>
          <td>{{$one->name}}</td>
          <td>{{$one->phone_number}}</td>
          <td>{{$one->facebook}}</td>
          <td>{{$one->instagram}}</td>
          <td>{{$one->email}}</td>
          <td>{{$one->location}}</td>
          <td>{{$one->logo}}</td>
          <td>{{$one->opening_days}}</td>
          <td>{{$one->opening_time}}</td>
          <td>{{$one->closing_time}}</td>
          <td>
            <a type="button" 
            href="/information/delete/{{$one->id}}" 
            class="btn btn-outline-danger">Delete</a>

            <a type="button" 
            href="/information/edit/{{$one->id}}" 
            class="btn btn-outline-success">Edit</a>
          </td>
      @endforeach
        </tr>
    </tbody>
  </table>
</div>
@endsection