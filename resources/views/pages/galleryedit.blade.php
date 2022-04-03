@extends('master')
@section('content')

<form action="{{route('gallery.update',$galleryedit->id)}}" method="POST"enctype="multipart/form-data">
    @method('PUT')
    @csrf
  <div class="form-group col-md-6">
    <label >gellary Name</label>
    <input type="text" class="form-control"  placeholder="Enter name" name="gallery_name">
    <label >Details</label>
    <input type="text" class="form-control"  placeholder="Enter details" name="gallery_details">
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