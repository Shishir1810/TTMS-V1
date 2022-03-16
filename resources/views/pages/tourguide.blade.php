@extends('master')
@section('content')

<a href="{{route('tourguide.create')}}"  class="btn btn-primary my-4">Tour Guide info create</a>
<table class="table">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">phone</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
    </tr>
  </thead>
  <tbody>

    @foreach($tourguide as $data)
      
      <th scope="row"> {{$data->id}} </th>
      <td>{{$data->tourguide_name}}</td>
      <td>{{$data->tourguide_phone}}</td>
      <td>{{$data->tourguide_email}}</td>
      <td>{{$data->tourguide_address}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
@endsection