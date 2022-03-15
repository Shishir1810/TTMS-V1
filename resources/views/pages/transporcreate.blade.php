@extends('master')
@section('content')

<form action="{{route('transport.store')}}" method="POST">
    @csrf
  <div class="form-group">
    <label ><h4>Transport<h4></label>
    <input type="text" class="form-control"  placeholder="Enter name" name="transport_name">
    <input type="text" class="form-control"  placeholder="Enter price" name="transport_price">
    <input type="text" class="form-control"  placeholder="Enter type" name="transport_type">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>









@endsection