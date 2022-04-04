@extends('master')
@section('content')

<form action="{{route('place.update', $placeedit->id)}}  " method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
  <div class="form-group col-md-6">
    <label >place Name</label>
    <input type="text" class="form-control"  placeholder="Enter name" name="place_name">
    <label >Location</label>
    <input type="text" class="form-control"  placeholder="Enter location" name="place_location">
  </div>
  <div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">main_image</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>
  <button type="submit" class="btn btn-primary">update</button>
</form>

@endsection