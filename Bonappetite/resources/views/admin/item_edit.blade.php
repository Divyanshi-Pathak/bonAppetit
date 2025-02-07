@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-header alert alert-primary">{{ __('Edit Item') }}</div>

                <div class="card-body">
                    <form action="{{ route('update_item')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" id="id" value="{{$item['id']}}">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="item_name" class="form-label">Name</label>
                                    <input  required type="text" class="form-control" id="item_name" name ="item_name" value ="{{$item['item_name']}}">
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input  required type="number" class="form-control" name="price" id="price" value ="{{$item['price']}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="category" class="form-label">Category</label>
                                    <select class="form-control" name="category" id="category">
                                        <option  selected value="{{ $item['category']}}">{{ $item['category']}}</option>
                                @foreach($category as $cat)
                                    <option value="{{ $cat['category_name'] }}">{{ $cat['category_name'] }}</option>
                                @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                 @if($item['featured'] == 0)
                                <input  type="checkbox" class="form-check-input" name="featured" id="featured" value="0" >
                                @else
                                <input  type="checkbox" class="form-check-input" name="featured" id="featured" value="1" checked>
                                @endif
                            <label class="form-check-label" for="featured">Featured</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="mb-3">
                        <label for="ingredients" class="form-label">Ingredients</label>
                        <textarea  required class="form-control" name ="ingredients" id="ingredients" rows="3">{{$item['ingredients']}}</textarea>
                        </div>
                        </div>
                        <div class="row">
                            <div class="form-group mb-3">
                                <label for="image">Image:</label>
                                <input  type="file" class="form-control" name="image" id="image">
                                <img src="{{ asset($item['image'])}}" alt="{{ $item['image']}}" width="100px" height="100px">
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
