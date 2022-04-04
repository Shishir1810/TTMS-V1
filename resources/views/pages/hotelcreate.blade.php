@extends('master')
@section('content')

<form action="{{route('hotel.store')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group col-md-6">
    <label >Hotel Name</label>
    <input type="text" class="form-control"  placeholder="Enter name" name="hotel_name">
    <label >Rent</label>
    <input type="text" class="form-control"  placeholder="Enter rent" name="hotel_rent">
    <label >Type</label>
    <input type="text" class="form-control"  placeholder="Enter type" name="hotel_type">
    <label >Location</label>
    <input type="text" class="form-control"  placeholder="Enter location" name="hotel_location">
  </div>
  <div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">main_image</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection