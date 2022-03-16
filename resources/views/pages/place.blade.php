@extends('master')
@section('content')

<a href="{{route('place.create')}}"  class="btn btn-primary my-4">create place</a>
<table class="table">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">location</th>
      <th scope="col">details</th>
    </tr>
  </thead>
  <tbody>

    @foreach($place as $data)
      
      <th scope="row"> {{$data->id}} </th>
      <td>{{$data->place_name}}</td>
      <td>{{$data->place_location}}</td>
      <td>{{$data->place_details}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
@endsection