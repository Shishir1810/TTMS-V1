@extends('master')
@section('content')

<form action="{{route('transport.update',$transportedit->id)}}" method="POST"enctype="multipart/form-data">
@method('PUT')
    @csrf
  <div class="form-group col-md-6">
    <label >Name</label>
    <input type="text" class="form-control"  placeholder="Enter name" name="transport_name">
    <label >price</label>
    <input type="text" class="form-control"  placeholder="Enter price" name="transport_price">
    <label >Type</label>
    <input type="text" class="form-control"  placeholder="Enter type" name="transport_type">
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