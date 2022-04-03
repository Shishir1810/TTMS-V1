@extends('master')
@section('content')

<form action="{{route('packagelist.store')}}" method="post">
    @csrf
  <div class="form-group col-md-6">
    <label >Package Name</label>
    <input type="text" class="form-control"  placeholder="Enter name" name="packagelist_name">
    <label >Place</label>
    <input type="text" class="form-control"  placeholder="Enter place" name="packagelist_place">
    <label >Hotel</label>
    <input type="text" class="form-control"  placeholder="Enter hotel" name="packagelist_hotel">
    <label >Transport</label>
    <input type="text" class="form-control"  placeholder="Enter transport" name="packagelist_transport">
    <label >Type</label>
    <input type="text" class="form-control"  placeholder="Enter type" name="packagelist_type">
    <label >Cost</label>
    <input type="text" class="form-control"  placeholder="Enter cost" name="packagelist_cost">
    <label >Person</label>
    <input type="text" class="form-control"  placeholder="Enter person" name="packagelist_person">
    <label >Date</label>
    <input type="date" class="form-control"  placeholder="Enter date" name="packagelist_date">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>









@endsection