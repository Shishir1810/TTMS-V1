@extends('master')
@section('content')
<div class="col-md-12 bg-light text-right">
<a href="{{route('gallery.create')}}"  class="btn btn-primary my-4">create gellary</a>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Details</th>
      <th scope="col">Image</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

    @foreach($gallery as $data)
      
      <th scope="row"> {{$data->id}} </th>
      <td>{{$data->gallery_name}}</td>
      <td>{{$data->gallery_details}}</td>
      <td><img width="120px" src="{{url('/uploads/gallery/'.$data->filebutton)}}" alt="">
        </td>
      <td><a class="btn btn-primary" href="{{route('gallery.edit', $data->id )}}">Edit</a></td>
      <td><a class="btn btn-danger" href="{{route('gallery.delete',$data->id)}}">Delete</a></td>
    </tr>
    @endforeach
    
  </tbody>
</table>
@endsection