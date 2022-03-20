@extends('master')
@section('content')

<form action="{{route('packagelist.store')}}" method="post">
    @csrf
  <div class="form-group col-md-6">
    <label ><h4>package</h4></label>
    <input type="text" class="form-control"  placeholder="Enter name" name="packagelist_name">
    <input type="text" class="form-control"  placeholder="Enter place" name="packagelist_place">
    <input type="text" class="form-control"  placeholder="Enter hotel" name="packagelist_hotel">
    <input type="text" class="form-control"  placeholder="Enter transport" name="packagelist_transport">
    <input type="text" class="form-control"  placeholder="Enter type" name="packagelist_type">
    <input type="text" class="form-control"  placeholder="Enter cost" name="packagelist_cost">
    <input type="text" class="form-control"  placeholder="Enter person" name="packagelist_person">
    <input type="number" class="form-control"  placeholder="Enter date" name="packagelist_date">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>









@endsection