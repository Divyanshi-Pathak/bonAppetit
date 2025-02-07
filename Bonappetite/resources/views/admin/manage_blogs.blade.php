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
            <div class="col-sm-10">Blogs</div>
            <div class="col-sm-2">  
                <a href="{{route('add_new_blog')}}" class="btn btn-primary">Add New Blog</a>
            </div>
        </div>
     
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Author</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
        <tbody>
            @foreach($blogs as $item)
            <tr>
                <td>{{$item['title']}}</td>
                <td>{{$item['content']}}</td>
                <td>{{ $item['author']}}</td>
                <td><img src="{{ asset($item['image'])}}" alt="{{ $item['image']}}" width="100px" height="100px"></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ url('/manage_blogs/delete/'.$item['id']) }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i>  Delete</a>
                        <a href="{{ url('/manage_blogs/edit/'.$item['id']) }}" class="btn btn-success"><i class="fa-regular fa-pen-to-square"></i>  Edit</a>
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