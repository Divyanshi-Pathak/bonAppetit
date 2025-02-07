@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header alert alert-primary">{{ __('Edit Service') }}</div>

                <div class="card-body">
                    <form action="{{ route('update_service')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" id="id" value="{{$service['id']}}">

                        <div class="row">
                            
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input   type="text" class="form-control" id="title" name ="title" value="{{$service['title']}}">
                                </div>
                        </div>      
                            
                            
                           
                        <div class="row">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name ="description" id="description" rows="3">"{{$service['description']}}"</textarea>
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