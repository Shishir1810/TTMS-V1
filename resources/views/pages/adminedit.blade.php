@extends('master')
@section('content')

<form action="{{route('admin.update', $adminedit->id)}}  " method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group col-md-6">
    <label >Admin Name</label>
    <input type="text" class="form-control"  placeholder="Enter name" name="admin_name">
    <label >Designation</label>
    <input type="text" class="form-control"  placeholder="Enter price" name="admin_designation">
    <label >Phone</label>
    <input type="text" class="form-control"  placeholder="Enter type" name="admin_phone">
    <label >Email</label>
    <input type="text" class="form-control"  placeholder="Enter type" name="admin_email">
    <label >Password</label>
    <input type="text" class="form-control"  placeholder="Enter password" name="admin_password">
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