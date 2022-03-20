@extends('master')
@section('content')

<a href="{{route('packagelist.create')}}"  class="btn btn-primary my-4">Package create</a>
<table class="table">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">place</th>
      <th scope="col">hotel</th>
      <th scope="col">transport</th>
      <th scope="col">type</th>
      <th scope="col">cost</th>
      <th scope="col">person</th>
      <th scope="col">date</th>
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
    </tr>
    @endforeach
    
  </tbody>
</table>
@endsection