@extends('master')
@section('content')

<form action="{{route('place.store')}}" method="post">
    @csrf
  <div class="form-group col-md-6">
    <label ><h4>Place</h4></label>
    <input type="text" class="form-control"  placeholder="Enter name" name="place_name">
    <input type="text" class="form-control"  placeholder="Enter location" name="place_location">
    <input type="text" class="form-control"  placeholder="Enter details" name="place_details">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>









@endsection