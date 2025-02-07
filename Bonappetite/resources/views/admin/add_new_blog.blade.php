@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-header alert alert-primary">{{ __('Add Blog') }}</div>

                <div class="card-body">
                    <form action="{{ route('save_blog')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input  required type="text" class="form-control" id = "title" name ="title" placeholder="title">
                                </div>
                                <div class="mb-3">
                                    <label for="content" class="form-label">Content</label>
                                    <textarea  required class="form-control" name ="content" id="content" rows="3"></textarea>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="mb-3">
                                <label for="author" class="form-label">Author</label>
                                 <input  required type="text" class="form-control" name="author" id="author" placeholder="author">
                                </div>
                                <div class="mb-3">
                                <label for="image">Image:</label>
                                <input  required type="file" class="form-control" name="image" id="image">
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