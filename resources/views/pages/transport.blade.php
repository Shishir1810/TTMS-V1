@extends('master')
@section('content')

<a href="{{route('create')}}"  class="btn btn-primary my-4">create transport</a>
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

    @foreach($transport as $data)
      
      <th scope="row"> {{$data->id}} </th>
      <td>{{$data->transport_name}}</td>
      <td>{{$data->transport_price}}</td>
      <td>{{$data->transport_type}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
@endsection