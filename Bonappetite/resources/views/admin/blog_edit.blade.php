@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-header alert alert-primary">{{ __('Edit Blog') }}</div>

                <div class="card-body">
                    <form action="{{ route('update_blog')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" id="id" value="{{$blog['id']}}">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input  type="text" class="form-control" id = "title" name ="title" value="{{$blog['title']}}">
                                </div>
                                <div class="mb-3">
                                    <label for="content" class="form-label">Content</label>
                                    <textarea  class="form-control" name ="content" id="content" rows="3">"{{$blog['content']}}"</textarea>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="mb-3">
                                <label for="author" class="form-label">Author</label>
                                 <input  type="text" class="form-control" name="author" id="author" value="{{$blog['author']}}">
                                </div>

                                <div class="mb-3">

                                <label for="image">Image:</label>
                                <input type="file" class="form-control" name="image" id="image">
                                <img src="{{ asset($blog['image'])}}" alt="{{ $blog['image']}}" width="100px" height="100px">

                                </div>
                            </div>
                        </div>
                        

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection