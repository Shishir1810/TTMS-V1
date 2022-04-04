@extends('master')
@section('content')
<div class="col-md-12 bg-light text-right">
<a href="{{route('packagelist.create')}}"  class="btn btn-primary my-4">Create Package info</a>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Place</th>
      <th scope="col">Hotel</th>
      <th scope="col">Transport</th>
      <th scope="col">Type</th>
      <th scope="col">Cost</th>
      <th scope="col">Person</th>
      <th scope="col">Date</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      <th scope="col">Booking</th>
    </tr>
  </thead>
  <tbody>

    @foreach($packagelist as $data)
      
      <th scope="row"> {{$data->id}} </th>
      <td>{{$data->packagelist_name}}</td>
      <td>{{$data->packagelist_place}}</td>
      <td>{{$data->packagelist_hotel}}</td>
      <td>{{$data->packagelist_transport}}</td>
      <td>{{$data->packagelist_type}}</td>
      <td>{{$data->packagelist_cost}}</td>
      <td>{{$data->packagelist_person}}</td>
      <td>{{$data->packagelist_date}}</td>
      <td><a class="btn btn-primary" href="{{route('packagelist.edit', $data->id )}}">Edit</a></td>
      <td><a class="btn btn-danger" href="{{route('packagelist.delete', $data->id)}}">Delete</a></td>
      <td><a class="btn btn-success" href="">Booking</a></td>
    </tr>
    @endforeach
    
  </tbody>
</table>
@endsection