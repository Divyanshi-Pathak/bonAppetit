@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header alert alert-primary">{{ __('Add Service') }}</div>

                <div class="card-body">
                    <form action="{{ route('save_service')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input  required type="text" class="form-control" id="title" name ="title" placeholder="name">
                                </div>
                        </div>      
                            
                            
                           
                        <div class="row">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea  required class="form-control" name ="description" id="description" rows="3"></textarea>
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