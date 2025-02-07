@extends('layouts.app')



@section('content')
<div class="container">
@if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if (session('danger'))
        <div class="alert alert-danger" role="alert">
            {{ session('danger') }}
        </div>
    @endif
  <div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-10">Category</div>
            <div class="col-sm-2">  
                <a href="{{route('add_new_category')}}" class="btn btn-primary">Add New Category</a>
            </div>
        </div>
     
    </div>
    <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Category_Name</th>
      <th scope="col">Edit</th>
      
    </tr>
  </thead>
  <tbody>
            @foreach($category as $item)
            <tr>
                <td>{{$item['category_name']}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ url('/category/delete/'.$item['id']) }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i>  Delete</a>
                        <a href="{{ url('/category/edit/'.$item['id']) }}" class="btn btn-success"><i class="fa-regular fa-pen-to-square"></i>  Edit</a>
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