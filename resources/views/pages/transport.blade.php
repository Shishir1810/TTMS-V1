@extends('master')
@section('content')
<div class="col-md-12 bg-light text-right">
<a href="{{route('create')}}"  class="btn btn-primary my-4">create transport info</a>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Ticket-price</th>
      <th scope="col">Type</th>
      <th scope="col">Image</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      <th scope="col">Booking</th>
    </tr>
  </thead>
  <tbody>

    @foreach($transport as $data)
      
      <th scope="row"> {{$data->id}} </th>
      <td>{{$data->transport_name}}</td>
      <td>{{$data->transport_price}}</td>
      <td>{{$data->transport_type}}</td>
      <td><img width="120px" src="{{url('/uploads/transport/'.$data->filebutton)}}" alt="">
        </td>
      <td><a class="btn btn-primary" href="{{route('transport.edit',$data->id)}}">Edit</a></td>
      <td><a class="btn btn-danger" href="{{route('transport.delete',$data->id)}}">Delete</a></td>
      <td><a class="btn btn-success" href="">Booking</a></td>
    </tr>
    @endforeach
    
  </tbody>
</table>
@endsection