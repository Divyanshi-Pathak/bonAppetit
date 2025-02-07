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
            <div class="col-sm-10"> Food Items</div>
            <div class="col-sm-2">  
                <a href="{{ route('add_new_item')}}" class="btn btn-primary">Add New Item</a>
            </div>
        </div>
    </div>
    

 <div class="card-body">
<table class="table">
  <thead>
    <tr>
     
      <th scope="col">Item_Name</th>
      <th scope="col">Category</th>
      <th scope="col">Featured</th>
      <th scope="col">Ingredients</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
      

    </tr>
  </thead>
  <tbody>
            @foreach($items as $item)
            <tr>
             
             
                <td>{{$item['item_name']}}</td>
                <td>{{$item['category']}}</td>
                <td>{{ $item['featured']}}</td>
                <td>{{ $item['ingredients']}}</td>
                <td>{{ $item['price']}}</td>
                <td><img src="{{ asset($item['image'])}}" alt="{{ $item['image']}}" width="100px" height="100px"></td>
              
                
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ url('/items/delete/'.$item['id']) }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i>  Delete</a>
                        <a href="{{ url('/items/edit/'.$item['id']) }}" class="btn btn-success"><i class="fa-regular fa-pen-to-square"></i>  Edit</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
</table>
               
  </div>
</div>
@endsection