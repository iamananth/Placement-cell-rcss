@extends('layouts.app')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Details</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Email : {{ $students->email }}</p>
        <p class="card-text">10th Precentage : {{ $students->tenth }}</p>
        <p class="card-text">12th Precentage : {{ $students->plustwo }}</p>
        <p class="card-text">UG Precentage : {{ $students->UG }}</p>
        <p class="card-text">PG Precentage : {{ $students->PG }}</p>
        <p class="card-text">Mobile : {{ $students->Mobile }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection