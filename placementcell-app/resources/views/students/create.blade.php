@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header">Students Details</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control" required></br>
        <label>Email</label></br>
        <input type="email" name="email" id="email" class="form-control" required></br>
        <label>10th Percentage</label><br>
        <input type="number" name="tenth" id="tenth" class="form-control" required></br>
        <label>12th Percentage</label><br>
        <input type="number" name="plustwo" id="plustwo" class="form-control" required></br>
        <label>UG Percentage</label><br>
        <input type="number" name="UG" id="UG" class="form-control" required></br>
        <label>PG Percentage</label><br>
        <input type="number" name="PG" id="PG" class="form-control" required></br>
        <label>Mobile</label></br>
        <input type="number" name="Mobile" id="Mobile" class="form-control" required></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop