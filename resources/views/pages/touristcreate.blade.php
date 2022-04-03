@extends('master')
@section('content')

<form action="{{route('tourist.store')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group col-md-6">
    <label >Tourist Name</label>
    <input type="text" class="form-control"  placeholder="Enter name" name="tourist_name">
    <label >Phone</label>
    <input type="text" class="form-control"  placeholder="Enter phone number" name="tourist_phone">
    <label >Email</label>
    <input type="text" class="form-control"  placeholder="Enter email" name="tourist_email">
    <label >Username</label>
    <input type="text" class="form-control"  placeholder="Enter username" name="tourist_username">
    <label >Password</label>
    <input type="text" class="form-control"  placeholder="Enter password" name="tourist_password">
    <label >Address</label>
    <input type="text" class="form-control"  placeholder="Enter address" name="tourist_address">
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