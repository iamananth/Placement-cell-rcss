@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Details</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="email" name="email" id="email" value="{{$students->email}}" class="form-control"></br>
        <label>10th Percentage</label><br>
        <input type="number" name="tenth" id="tenth" value="{{$students->tenth}}" class="form-control"></br>
        <label>12th Percentage</label><br>
        <input type="number" name="plustwo" id="plustwo" value="{{$students->plustwo}}" class="form-control"></br>
        <label>UG Percentage</label><br>
        <input type="number" name="UG" id="UG" value="{{$students->UG}}" class="form-control"></br>
        <label>PG Percentage</label><br>
        <input type="number" name="PG" id="PG" value="{{$students->PG}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="number" name="Mobile" id="Mobile" value="{{$students->Mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop