@extends('master')
@section('content')
<div class="col-md-12 bg-light text-right">
<a href="{{route('resort.create')}}"  class="btn btn-primary my-4">Create Resort info</a>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Rent</th>
      <th scope="col">Type</th>
      <th scope="col">Location</th>
      <th scope="col">Image</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      <th scope="col">Booking</th>

      
    </tr>
  </thead>
  <tbody>

    @foreach($resort as $data)
      
      <th scope="row"> {{$data->id}} </th>
      <td>{{$data->resort_name}}</td>
      <td>{{$data->resort_rent}}</td>
      <td>{{$data->resort_type}}</td>
      <td>{{$data->resort_location}}</td>
      <td><img width="120px" src="{{url('/uploads/resort/'.$data->filebutton)}}" alt=""  >
        </td>
      <td><a class="btn btn-primary" href=" {{route('resort.edit', $data->id )}}  ">Edit</a></td>
      <td><a class="btn btn-danger" href="{{route('resort.delete',$data->id)}}">Delete</a></td>
      <td><a class="btn btn-success" href="">Booking</a></td>
    </tr>
    @endforeach
    
    
  </tbody>
</table>

@endsection