@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header alert alert-primary">{{ __('Add Category') }}</div>

                <div class="card-body">
                    <form action="{{ route('update_category')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" id="id" value="{{ $category['id']}}">
                        <div class="row">
                            
                                <div class="mb-3">
                                    <label for="category_name" class="form-label">Category</label>
                                    <input type="text" class="form-control" id="category_name" name= "category_name" value="{{ $category['category_name']}}">
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

