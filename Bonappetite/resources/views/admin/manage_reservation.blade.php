@extends('layouts.app')

@section('content')
<div class="container">
@if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
  <div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-10">Reservations</div>
            <div class="col-sm-2">  
                <a href="{{route('make_reservation')}}" class="btn btn-primary">Make Reservation</a>
            </div>
        </div>
     
    </div>
    <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Number</th>
      <th scope="col">Email</th>
      <th scope="col">Time</th>
      <th scope="col">Date</th>
      <th scope="col">Decoration</th>
      <th scope="col">Confirm</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
            @foreach($reservation as $item)
            <tr>
                <td>{{$item['name']}}</td>
                <td>{{$item['number']}}</td>  
                <td>{{$item['email']}}</td>
                <td>{{$item['time']}}</td>
                <td>{{$item['date']}}</td>
                <td>{{$item['decoration']}}</td>
                <td>{{$item['confirm']}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ url('/manage_reservation/delete/'.$item['id']) }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i>  Delete</a>
                        <a href="{{ url('/manage_reservation/edit/'.$item['id']) }}" class="btn btn-success"><i class="fa-regular fa-pen-to-square"></i>  Edit</a>
                    </div>
                </td>
            </tr>
            @endforeach
  </tbody>
</table>
    </div>
  </div>
</div>
@endsection