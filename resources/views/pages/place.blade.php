@extends('master')
@section('content')
<div class="col-md-12 bg-light text-right">
<a href="{{route('place.create')}}"  class="btn btn-primary my-4">create place info</a>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Location</th>
      <th scope="col">Image</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>

      
    </tr>
  </thead>
  <tbody>

    @foreach($place as $data)
      
      <th scope="row"> {{$data->id}} </th>
      <td>{{$data->place_name}}</td>
      <td>{{$data->place_location}}</td>
      <td><img width="120px" src="{{url('/uploads/place/'.$data->filebutton)}}" alt="">
        </td>
      <td><a class="btn btn-primary" href=" {{route('place.edit', $data->id )}}  ">Edit</a></td>
      <td><a class="btn btn-danger" href="{{route('place.delete',$data->id)}}">Delete</a></td>
    </tr>
    @endforeach
    
    
  </tbody>
</table>

@endsection