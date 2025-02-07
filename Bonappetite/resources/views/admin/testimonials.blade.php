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
            <div class="col-sm-10">Testimonials</div>
            <div class="col-sm-2">  
                <a href="{{route('add_new_testimonial')}}" class="btn btn-primary">Add New Testimonial</a>
            </div>
        </div>
     
    </div>
    <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
            @foreach($testimonial as $item)
            <tr>
                <td>{{$item['name']}}</td>
                <td>{{$item['email']}}</td>
                <td>{{$item['message']}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ url('/testimonials/delete/'.$item['id']) }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i>  Delete</a>
                        <a href="{{ url('/testimonials/edit/'.$item['id']) }}" class="btn btn-success"><i class="fa-regular fa-pen-to-square"></i>  Edit</a>
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