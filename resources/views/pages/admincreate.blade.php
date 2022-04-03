@extends('master')
@section('content')

<form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group col-md-6">
    <label >Admin Name</label>
    <input type="text" class="form-control"  placeholder="Enter name" name="admin_name">
    <label >Designation</label>
    <input type="text" class="form-control"  placeholder="Enter designation" name="admin_designation">
    <label >Phone</label>
    <input type="text" class="form-control"  placeholder="Enter phone" name="admin_phone">
    <label >Email</label>
    <input type="text" class="form-control"  placeholder="Enter email" name="admin_email">
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