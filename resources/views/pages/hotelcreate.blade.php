@extends('master')
@section('content')

<form action="{{route('hotel.store')}}" method="post">
    @csrf
  <div class="form-group col-md-6">
    <label ><h4>Hotel</h4></label>
    <input type="text" class="form-control"  placeholder="Enter name" name="hotel_name">
    <input type="text" class="form-control"  placeholder="Enter price" name="hotel_price">
    <input type="text" class="form-control"  placeholder="Enter type" name="hotel_type">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>









@endsection