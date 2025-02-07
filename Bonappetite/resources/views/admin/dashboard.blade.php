@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">
      Dashboard
    </div>
    <div class="card-body">
      <h5 class="card-title">Hi, {{ Auth::user()->name }} </h5>
      <p class="card-text">Welcome to the dashboard Dear!!</p>
      <a href="{{ url('/') }}" class="btn btn-primary">Visit Site</a>
    </div>
  </div>
</div>
@endsection