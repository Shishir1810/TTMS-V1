@extends('master')
@section('content')
<div class="col-md-12 bg-light text-right">
<a href="{{route('admin.create')}}"  class="btn btn-primary my-4">create admin </a>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Image</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>

      
    </tr>
  </thead>
  <tbody>

    @foreach($admin as $data)
      
      <th scope="row"> {{$data->id}} </th>
      <td>{{$data->admin_name}}</td>
      <td>{{$data->admin_designation}}</td>
      <td>{{$data->admin_phone}}</td>
      <td>{{$data->admin_email}}</td>
      <td>{{$data->admin_password}}</td>
      <td><img width="120px" src="{{url('/uploads/admin/'.$data->filebutton)}}" alt="">
        </td>
      <td><a class="btn btn-primary" href=" {{route('admin.edit', $data->id )}}  ">Edit</a></td>
      <td><a class="btn btn-danger" href="{{route('admin.delete',$data->id)}}">Delete</a></td>
    </tr>
    @endforeach
    
    
  </tbody>
</table>

@endsection