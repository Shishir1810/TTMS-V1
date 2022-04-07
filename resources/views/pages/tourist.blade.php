@extends('master')
@section('content')
<div class="col-md-12 bg-light text-right">
</div>
<table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Delete</th>

      
    </tr>
  </thead>
  <tbody>

    @foreach($user as $data)
      
      <th scope="row"> {{$data->id}} </th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->role}}</td>
      <td><a class="btn btn-danger" href="{{route('tourist.delete',$data->id)}}">Delete</a></td>
    </tr>
    @endforeach
    
    
  </tbody>
</table>

@endsection