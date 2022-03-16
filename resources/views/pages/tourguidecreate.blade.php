@extends('master')
@section('content')

<form action="{{route('tourguide.store')}}" method="post">
    @csrf
  <div class="form-group col-md-6">
    <label ><h5>Name</h5></label>
    <input type="text" class="form-control"  placeholder="Enter Name" name="tourguide_name">
    <label ><h5>Phone</h5></label>
    <input type="text" class="form-control"  placeholder="Enter Phone" name="tourguide_phone">
    <label ><h5>Email</h5></label>
    <input type="text" class="form-control"  placeholder="Enter Email" name="tourguide_email">
    <label ><h5>Address</h5></label>
    <input type="text" class="form-control"  placeholder="Enter Address" name="tourguide_address">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>









@endsection