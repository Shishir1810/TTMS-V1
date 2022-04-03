@extends('master')
@section('content')

<form action="{{route('tourguide.update',$tourguideedit->id)}}" method="POST"enctype="multipart/form-data">
    @method('PUT')
    @csrf
  <div class="form-group col-md-6">
    <label >Name</label>
    <input type="text" class="form-control"  placeholder="Enter Name" name="tourguide_name">
    <label >Phone</label>
    <input type="text" class="form-control"  placeholder="Enter Phone" name="tourguide_phone">
    <label >Email</label>
    <input type="text" class="form-control"  placeholder="Enter Email" name="tourguide_email">
    <label >Address</label>
    <input type="text" class="form-control"  placeholder="Enter Address" name="tourguide_address">
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