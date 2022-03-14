@extends('master')
@section('content')

<form action="{{route('transport.store')}}" method="POST">
    @csrf
  <div class="form-group">
    <label >transport</label>
    <input type="text" class="form-control"  placeholder="Enter name" name="transport_name">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>









@endsection