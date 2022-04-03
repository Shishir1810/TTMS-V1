@extends('master')
@section('content')

<a href="{{route('tourist.create')}}"  class="btn btn-primary my-4">create tourist</a>
<table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Address</th>
      <th scope="col">Image</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>

      
    </tr>
  </thead>
  <tbody>

    @foreach($tourist as $data)
      
      <th scope="row"> {{$data->id}} </th>
      <td>{{$data->tourist_name}}</td>
      <td>{{$data->tourist_phone}}</td>
      <td>{{$data->tourist_email}}</td>
      <td>{{$data->tourist_username}}</td>
      <td>{{$data->tourist_password}}</td>
      <td>{{$data->tourist_address}}</td>
      <td><img width="120px" src="{{url('/uploads/tourist/'.$data->filebutton)}}" alt="">
        </td>
      <td><a class="btn btn-primary" href=" {{route('tourist.edit', $data->id )}}  ">Edit</a></td>
      <td><a class="btn btn-danger" href="{{route('tourist.delete',$data->id)}}">Delete</a></td>
    </tr>
    @endforeach
    
    
  </tbody>
</table>

@endsection