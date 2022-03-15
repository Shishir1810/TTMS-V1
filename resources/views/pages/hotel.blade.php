@extends('master')
@section('content')

<a href="{{route('hotel.craete')}}"  class="btn btn-primary my-5">create hotel</a>
<table class="table">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">price</th>
      <th scope="col">type</th>
    </tr>
  </thead>
  <tbody>

    @foreach($hotel as $data)
      
      <th scope="row"> {{$data->id}} </th>
      <td>{{$data->hotel_name}}</td>
      <td>{{$data->hotel_price}}</td>
      <td>{{$data->hotel_type}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
@endsection