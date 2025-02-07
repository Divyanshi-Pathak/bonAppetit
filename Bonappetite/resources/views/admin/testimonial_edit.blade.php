@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-header alert alert-primary">{{ __('Edit Testimonial') }}</div>

                <div class="card-body">
                    <form action="{{ route('update_testimonial')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" id="id" value="{{$testimonial['id']}}">
                        <div class="row">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input  type="text" class="form-control" id="name" name ="name" value="{{$testimonial['name']}}">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input   type="email" class="form-control" name="email" id="email"value="{{$testimonial['email']}}" >
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="row">
                        <div class="mb-3">
  <label for="message" class="form-label">Message</label>
  <textarea  class="form-control" name ="message" id="message" rows="3">{{$testimonial['message']}}</textarea>
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