@extends('master')
@section('content')
<div class="col-md-12 bg-light text-right">
<a href="{{route('hotel.create')}}"  class="btn btn-primary my-4">create hotel info</a>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Rent</th>
      <th scope="col">Type</th>
      <th scope="col">Image</th>
      <th scope="col">Location</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      <th scope="col">Booking</th>

      
    </tr>
  </thead>
  <tbody>

    @foreach($hotel as $data)
      
      <th scope="row"> {{$data->id}} </th>
      <td>{{$data->hotel_name}}</td>
      <td>{{$data->hotel_rent}}</td>
      <td>{{$data->hotel_type}}</td>
      <td>{{$data->hotel_location}}</td>
      <td><img width="120px" src="{{url('/uploads/hotel/'.$data->filebutton)}}" alt=""  >
        </td>
      <td><a class="btn btn-primary" href=" {{route('hotel.edit', $data->id )}}  ">Edit</a></td>
      <td><a class="btn btn-danger" href="{{route('hotel.delete',$data->id)}}">Delete</a></td>
      <td><a class="btn btn-success" href="">Booking</a></td>
    </tr>
    @endforeach
    
    
  </tbody>
</table>

@endsection