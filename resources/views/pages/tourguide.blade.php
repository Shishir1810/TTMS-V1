@extends('master')
@section('content')

<a href="{{Route('tourguide.create')}}"  class="btn btn-primary my-4">Tour Guide info create</a>
<table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">phone</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
      <th scope="col">Image</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

    @foreach($tourguide as $data)
      
      <th scope="row"> {{$data->id}} </th>
      <td>{{$data->tourguide_name}}</td>
      <td>{{$data->tourguide_phone}}</td>
      <td>{{$data->tourguide_email}}</td>
      <td>{{$data->tourguide_address}}</td>
      <td><img width="120px" src="{{url('/uploads/tourguide/'.$data->filebutton)}}" alt="">
        </td>
      <td><a class="btn btn-primary" href="{{route('tourguide.edit', $data->id )}}">Edit</a></td>
      <td><a class="btn btn-danger" href="{{Route('tourguide.delete',$data->id)}}">Delete</a></td>
    </tr>
    @endforeach
    
  </tbody>
</table>
@endsection